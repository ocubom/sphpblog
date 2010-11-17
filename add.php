<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );

        read_config();

	ob_start();
        require_once('scripts/sb_editor.php');
        $head = ob_get_clean();

	$lang = 'add';

	// ----
	// HTML
	// ----
	include_once('scripts/sb_header.php');

	include_once('scripts/sb_footer.php');
	
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
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		echo( $GLOBALS['lang_string']['instructions'] . '<p />' );
		echo( '<hr />' );
		sb_editor();
		
		// PAGE CONTENT END
		$entry_array[ 'entry' ] = ob_get_clean();
		
		// THEME ENTRY
		echo( theme_staticentry( $entry_array ) );
		*/
		
		// INSTRUCTIONS
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		$entry_array[ 'entry' ] = $GLOBALS['lang_string']['instructions'] . '<p />';
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
	
?>
