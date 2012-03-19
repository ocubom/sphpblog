<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	$ok = false;
	if ( $logged_in && array_key_exists( 'user', $_POST ) && array_key_exists( 'pass', $_POST ) ) {
		$ok = create_password( sb_stripslashes( $_POST[ 'user' ] ), sb_stripslashes( $_POST[ 'pass' ] ) );
		$logged_in = $ok;
	}
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $blog_config, $ok;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = _sb('set_login_title');
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		if ( $ok === true ) {
			echo( _sb('set_login_success') . '<p />');
		} else {
			echo( _sb('set_login_wrong_password') . '<p />');
		}
		
		echo( '<a href="index.php">' . _sb('home') . '</a>' );
		
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
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '. _sb('set_login_title'));
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
