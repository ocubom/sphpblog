<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $result;
	$result = logout();
	
	$logged_in = logged_in( false, true );
	
	read_config();
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'logout' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $result;
	
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		switch ( $result ) {
			case 0:
				echo( $GLOBALS['lang_string']['error'] );
				break;
			case 1:
				echo( $GLOBALS['lang_string']['success'] );
				break;
			case -1:
				echo( $GLOBALS['lang_string']['error_no_cookie'] );
				break;
		}
		
		echo( '<a href="index.php">' . $GLOBALS['lang_string']['home'] . '</a>' );
		
		// PAGE CONTENT END
		$entry_array[ 'entry' ] = ob_get_clean();
		
		// THEME ENTRY
		echo( theme_staticentry( $entry_array ) );
		// 
	}

	// ----
	// HTML
	// ----
	
	// Main Page Template
	$page_template = new Template(TEMPLATE_DIR.'layouts/index.tpl');
	
	// Meta Data
	get_init_code($page_template);
	
	// Extra Meta Data
	if ($result==1) {
		$page_template->setTag('{META}', '<meta http-equiv="refresh" content="5; URL=index.php" />');
	}
	
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
