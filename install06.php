<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, false );
	
	$ok = check_password( sb_stripslashes( $_POST['user'] ), sb_stripslashes( $_POST['pass'] ) );
	$logged_in = $ok;
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $ok, $blog_config;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = _sb('install06_title');
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		if ( $ok === true ) {
			echo( _sb('install06_success') );
			echo( '<a href="setup.php?blog_language=' . $blog_config->getTag('BLOG_LANGUAGE') . '">' . _sb('btn_setup') . '</a>' );
		} else {
			echo( _('install06_wrong_password') );
			echo( '<a href="install05.php?blog_language=' . $blog_config->getTag('BLOG_LANGUAGE') . '">' . _sb('btn_try_again') . '</a>' );
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
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '. _sb('install06_title'));
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
