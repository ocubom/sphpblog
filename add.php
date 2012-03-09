<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	//global $logged_in;

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

	if (array_key_exists('submit', $_POST)) {
		// -------------
		// ADD / EDIT ENTRY

		// -------------
		// If editing an entry, store old entry date...
		$temp_date = substr($_POST['entry'],-13,6);
		$temp_time = substr($_POST['entry'],-6,6);
		$dd = substr($temp_date,-2,2);
		$mt = substr($temp_date,-4,2);
		$yy = substr($temp_date,-6,2);
		if ($yy >= 95) {
			$yy = '19' . $yy;
		} else {
			$yy = '20' . $yy;
		}
		$hh = substr($temp_time,-6,2);
		$mm = substr($temp_time,-4,2);
		$ss = substr($temp_time,-2,2);
		
		$oldtime = mktime($hh, $mm, $ss, $mt, $dd, $yy );
		$newtime = mktime($_POST['hour'], $_POST['minute'], $_POST['second'], $_POST['month'], $_POST['day'], $_POST['year'] );
		
		$ok = false;
		if ( $oldtime != $newtime ) {
			// Different date
			$entry = CONTENT_DIR.$_POST['y'].'/'.$_POST['m'].'/'.$_POST['entry'];
			if ( file_exists( $entry . ".txt" ) ) {
				$filename = $entry . ".txt";
			} elseif ( file_exists( $entry . ".txt.gz" ) ) {
				$filename = $entry . ".txt.gz";
			}
			
			// Move Assoicated Files
			move_entry($oldtime,$newtime);
			
			// Create New Entry
			$ok = write_entry( sb_stripslashes( $_POST[ 'blog_subject' ] ), sb_stripslashes( $_POST[ 'blog_text' ] ), sb_stripslashes( $_POST[ 'tb_ping' ] ), NULL, $_POST[ 'catlist' ], sb_stripslashes( $_POST[ 'blog_relatedlink' ] ), $newtime );
			
			// Delete Old Entry
			sb_delete_file($filename);
		} else {
			$entry = CONTENT_DIR.$_POST['y'].'/'.$_POST['m'].'/'.$_POST['entry'];
		
			// Update Entry
			$ok = write_entry( sb_stripslashes( $_POST[ 'blog_subject' ] ), sb_stripslashes( $_POST[ 'blog_text' ] ), sb_stripslashes( $_POST[ 'tb_ping' ] ), $entry, $_POST[ 'catlist' ], sb_stripslashes( $_POST[ 'blog_relatedlink' ] ), $oldtime );
		}
		
		if ( $ok === true ) {		
			redirect_to_url( 'index.php' );
		}
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config, $ad_array, $auto_discovery_confirm;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		if ( $ok == false ) {
			// Display error message.
			global $ok;
			if ( $ok !== true ) {
				echo( $GLOBALS['lang_string']['error'] . $ok . '<p />' );
			} else {
				echo( $GLOBALS['lang_string']['success'] . '<p />' );
			}
			echo( '<a href="index.php">' . $GLOBALS['lang_string']['home'] . '</a><br /><br />' );
		}
	}
	} else {
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config;
		
		// INSTRUCTIONS
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		$entry_array[ 'entry' ] = $GLOBALS['lang_string']['instructions'] . '<p />' . $GLOBALS['lang_string']['instructions'] . '<p />';
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
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '.$GLOBALS['lang_string']['title']);
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
