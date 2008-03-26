<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'trackbacks' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	// Delete selected comment file.
	global $ok;
	$ok = false;
	
	if ( array_key_exists( 'trackback', $_GET ) ) {
		$ok = delete_trackback( $_GET[ 'trackback' ] ); 
	}
	
	if ( $ok === true ) {
		$relative_url = 'trackback.php?y='.$_GET[ 'y' ].'&m='.$_GET[ 'm' ].'&entry='.$_GET[ 'entry' ].'&__mode=html';
		redirect_to_url( $relative_url );
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
		
		if ( $ok !== true ) {
			echo( $GLOBALS['lang_string']['error_delete'] . $ok . '<p />');
		} else {
			echo( $GLOBALS['lang_string']['success_delete'] . '<p />');
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
	if ($blog_config->getTag('BLOG_COMMENTS_POPUP') == 1) {
		theme_popuplayout();
	} else {
		theme_pagelayout();
	}
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
