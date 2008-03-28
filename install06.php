<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, false );
	
	read_config();
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	// Validate Language
	$temp_lang = '';
	if ( isset( $_POST['blog_language'] ) ) {
		$temp_lang = sb_stripslashes( $_POST['blog_language'] );
	} else if ( array_key_exists( 'blog_language', $_GET ) ) {	
		$temp_lang = sb_stripslashes( $_GET['blog_language'] );
	}
	if (validate_language($temp_lang) == false) {
		$temp_lang = 'english';
	}
	
	global $blog_config;
	$blog_config->setTag('BLOG_LANGUAGE', $temp_lang);
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'install06' );
	
	$ok = check_password( sb_stripslashes( $_POST['user'] ), sb_stripslashes( $_POST['pass'] ) );
	$logged_in = $ok;
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $ok, $blog_config;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		if ( $ok === true ) {
			echo( $GLOBALS['lang_string']['success'] );
			echo( '<a href="setup.php?blog_language=' . $blog_config->getTag('BLOG_LANGUAGE') . '">' . $GLOBALS['lang_string']['btn_setup'] . '</a>' );
		} else {
			echo( $GLOBALS['lang_string']['wrong_password'] );
			echo( '<a href="install05.php?blog_language=' . $blog_config->getTag('BLOG_LANGUAGE') . '">' . $GLOBALS['lang_string']['btn_try_again'] . '</a>' );
		}
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
