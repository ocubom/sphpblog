<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	
	read_config();
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'contact' );
	
	// -------------
	// POST PROCESSING
	// -------------
	if ( !session_id() ) {
		session_start();
	}
	
	$client_ip_local = getIP();
	
		if (!isset($_SESSION['cookies_enabled'])) {
		redirect_to_url('errorpage-nocookies.php');
		// header('location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'errorpage-nocookies.php');
	}
	
	$comment_date = time();
	
	$subject=$lang_string['contactsent'] . $blog_config->getTag('BLOG_TITLE');
	$body='<b>' . $GLOBALS['lang_string']['name'] . '</b> ' . $_POST[ 'name' ] . '<br />';
	$body .= '<b>' . $GLOBALS['lang_string']['IPAddress'] . '</b> ' . $client_ip_local . ' (' . @gethostbyaddr($client_ip_local) .')<br />';
	$body .= '<b>' . $GLOBALS['lang_string']['useragent'] . '</b> ' . $_SERVER[ 'HTTP_USER_AGENT' ] . '<br />';
	$body .= '<b>' . $GLOBALS['lang_string']['email'] . '</b> ' . $_POST[ 'email' ] . '<br />';
	$body .= '<b>' . $GLOBALS['lang_string']['subject'] . '</b> ' . $_POST[ 'subject' ] . '<br /><br />';
	$body .= '<b>' . $GLOBALS['lang_string']['comment'] . '</b><br /><br />';
	$body .= sprintf( $GLOBALS['lang_string']['wrote'], format_date( $comment_date ), $_POST[ 'name' ], str_replace( "\r\n", "<br />\r\n", $_POST[ 'comment' ] ) );
	$ok=false;
	if ($_POST[ 'capcha_contact' ] == $_SESSION[ 'capcha_contact' ] AND $_SESSION[ 'capcha_contact' ] != '' ) {
		$ok=sb_mail( $_POST[ 'email' ], $blog_config->getTag('BLOG_EMAIL'), $subject, $body, false );
	} else {
		$_SESSION['errornum'] = '403.8';
		$_SESSION['errortype'] = 'error_emailnotsentcapcha';
		redirect_to_url('errorpage.php');
		// header('location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'errorpage.php');
	}
	@session_unregister( 'capcha_contact' );
	
	// -----------
	// PAGE CONTENT
	// -----------
	function page_content() {
		global $lang_string, $blog_config, $ok;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		if ( $ok == true ) { 
			echo( $GLOBALS['lang_string']['success'] );
		} else {
			$_SESSION['errornum'] = '403.8';
			$_SESSION['errortype'] = 'error_emailnotsent';
			redirect_to_url('errorpage.php');
			// header('location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'errorpage.php');
		}
		echo( '<a href="index.php">' . $GLOBALS['lang_string']['home'] . '</a>' );
		
		// PAGE CONTENT END
		$entry_array[ 'entry' ] = ob_get_clean();
		
		// THEME ENTRY
		echo( theme_staticentry( $entry_array ) );
	}

	// ----
	// HTML
	// ----
	
	// Main Page Template
	$page_template = new Template(TEMPLATE_DIR.'layouts/index.tpl');
	
	// Meta Data
	get_init_code($page_template);
	
	// Page Title
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '.$GLOBALS['lang_string']['title']);
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
