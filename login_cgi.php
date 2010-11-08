<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	
	read_config();

	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'login' );

	// ---------------
	// POST PROCESSING
	// ---------------
	$ok = check_password( sb_stripslashes( $_POST[ 'user' ] ), sb_stripslashes( $_POST[ 'pass' ] ) );

	if ( $ok > 99 ) {
		$logged_in = false;
	} else {
		$logged_in = $ok;
	}

	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config, $ok;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		if ( $ok === true ) {
			echo( $GLOBALS['lang_string']['success'] );
		} else {
			switch ($ok) {
				case 100: $errortext = $GLOBALS['lang_string']['wrong_password'];
				case 101: $errortext = $GLOBALS['lang_string']['inactive_account'];
			}
			echo( $errortext );
		}

		$restored = restore_post();

		if (empty($restored)) {	
			echo( '<a href="index.php">' . $GLOBALS['lang_string']['home'] . '</a>' );
		} else {
			$type = $restored[0];
			$page = 'preview_cgi.php';
			if ($type == 'static') {
				$page = 'preview_static_cgi.php';
			}
			// TODO add to language file
			echo( "<a href=\"$page\">Restore your last draft.</a>" );
		}
		
		$upgrade_count = move_all_comment_files( true, true );
		if ( $upgrade_count > 0 ) {
			echo( "<hr />" );
			echo( "<br />" );
			echo( $GLOBALS['lang_string']['upgrade'] );
			$str = str_replace ( '%n', $upgrade_count, $GLOBALS['lang_string']['upgrade_count'] );
			echo( $str . "<br /><br />" );
			echo( "<a href=\"upgrade.php\">" . $GLOBALS['lang_string']['upgrade_url'] ."</a><br />" );
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
