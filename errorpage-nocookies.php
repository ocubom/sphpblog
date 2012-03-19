<?php
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );

	// ---------------
	// POST PROCESSING
	// ---------------

	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $blog_config, $blog_theme;

		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = _sb('errorpage-nocookies_title');
		$entry_array[ 'entry' ] = '<table width="100%"	border="0"><tr><td><img src="themes/' . $blog_theme . '/images/error_icon.png" alt="" border="0" /></td>';
		$entry_array[ 'entry' ]	 .= '<td>' . _sb('errorline1') . '<br><br>';
		$entry_array[ 'entry' ]	 .= _sb('errorline2') . '<br><br>';
		$entry_array[ 'entry' ]	 .= _sb('clientid') . @gethostbyaddr(getIP()) . '</td></tr></table>';

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
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '. _sb('errorpage-nocookies_title'));
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
