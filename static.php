<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	$redirect = true;
	if ( array_key_exists( 'page', $_GET ) ) {		
		$redirect = false;
	}
	
	if ( $redirect === true ) {
		redirect_to_url( 'index.php' );
	}
	
	global $entry_array;
	$static_page = urldecode( $_GET[ 'page' ] );
	$static_page = preg_replace( '/(\s|\\\|\/|%|#)/', '_', $static_page );
	$entry_array = read_static_entry( $static_page, $logged_in );
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $logged_in, $entry_array;
		
		echo( theme_staticentry( $entry_array, $logged_in ) );
	}

	// ----
	// HTML
	// ----
	
	// Main Page Template
	$page_template = new Template(TEMPLATE_DIR.'layouts/index.tpl');
	
	// Meta Data
	get_init_code($page_template);
	
	// Page Title
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '. _sb('static_title'));
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
