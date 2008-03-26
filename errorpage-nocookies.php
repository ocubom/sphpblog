<?php
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );

	read_config();

	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'errorpage-nocookies' );

	// ---------------
	// POST PROCESSING
	// ---------------

	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config, $blog_theme;

		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		$entry_array[ 'entry' ] = '<table width="100%"	border="0"><tr><td><img src="themes/' . $blog_theme . '/images/error_icon.png" alt="" border="0" /></td>';
		$entry_array[ 'entry' ]	 .= '<td>' . $GLOBALS['lang_string']['errorline1'] . '<br><br>';
		$entry_array[ 'entry' ]	 .= $GLOBALS['lang_string']['errorline2'] . '<br><br>';
		$entry_array[ 'entry' ]	 .= $GLOBALS['lang_string']['clientid'] . @gethostbyaddr(getIP()) . '</td></tr></table>';

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
