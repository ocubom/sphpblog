<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, false );
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $blog_config;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = _sb('install01_title');
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		echo( _sb('install01_instructions') . '<p />' );

		echo( '<a href="install02.php?blog_language=' . $blog_config->getTag('BLOG_LANGUAGE') . '">' . _sb('begin') . '</a><p />' );

		// TODO language file
                print "<p>We think your blog is at: " . $_SERVER["SERVER_NAME"] . BASEURL . ".  If not, set BASEURL correctly in scripts/config.php</p>";

		phpini_check();
		
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
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '. _sb('install01_title'));
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
