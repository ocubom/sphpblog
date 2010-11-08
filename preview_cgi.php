<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;

	$logged_in = logged_in( false, true );

	if (!$logged_in) {
		save_post('dynamic');
		redirect_to_url( 'login.php' );
		exit;
	}
	
	read_config();
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'add' );

	$restored = restore_post();
	if (!empty($restored) AND empty($_POST) AND empty($_GET)) {
		$_POST = $restored[1];
	}
	reset_post();

	// ---------------
	// POST PROCESSING
	// ---------------

	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config;
		
		/*
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title_preview'];

		// PAGE CONTENT BEGIN
		ob_start();

		echo( $GLOBALS['lang_string']['instructions_preview'] . '<p />' );
		echo( $GLOBALS['lang_string']['instructions_update'] . '<p />' );
		echo( '<hr />' );

		sb_editor();
		
		// PAGE CONTENT END
		$entry_array[ 'entry' ] = ob_get_clean();
		
		// THEME ENTRY
		echo( theme_staticentry( $entry_array ) );
		*/
		
		// INSTRUCTIONS
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title_preview'];
		$entry_array[ 'entry' ] = $GLOBALS['lang_string']['instructions_preview'] . '<p />' . $GLOBALS['lang_string']['instructions_update'] . '<p />';
		echo( theme_staticentry( $entry_array ) ); // THEME ENTRY
		
		// PREVIEW
		$editor = sb_editor();
		echo( $editor['preview'] );
		
		// EDITOR
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		$entry_array[ 'entry' ] = $editor['form'];
		echo( theme_staticentry( $entry_array ) ); // THEME ENTRY
	}

	// ----
	// HTML
	// ----
	
	// Main Page Template
	$page_template = new Template(TEMPLATE_DIR.'layouts/index.tpl');
	
	// Meta Data
	get_init_code($page_template);
	
	// Extra Javascript
	ob_start();

	require_once('scripts/sb_editor.php');
	$page_template->appendTag('{JAVASCRIPT}', ob_get_clean());
	
	// Page Title
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '.$GLOBALS['lang_string']['title_preview']);
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
