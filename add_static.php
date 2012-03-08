<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;

        $logged_in = logged_in( false, true );

        if (!$logged_in) {
                save_post('static');
                redirect_to_url( 'login.php' );
                exit;
        }
	
	read_config();
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'add_static' );

        $restored = restore_post();
        if (!empty($restored) AND empty($_POST) AND empty($_GET)) {
                $_POST = $restored[1];
        }
        reset_post();
	
	// ---------------
	// POST PROCESSING
	// ---------------
	

	if (array_key_exists('submit', $_POST)) {
                sb_language('add');
	        $filename = sb_stripslashes( $_POST[ 'file_name' ] );
       		$filename = preg_replace( '/(\s|\\\|\/|%|#)/', '_', $filename ); // Replace whitespaces [\n\r\f\t ], slashes, % and # with _

	        global $ok;
        	$ok = write_static_entry( sb_stripslashes( $_POST[ 'blog_subject' ] ), sb_stripslashes( $_POST[ 'blog_text' ] ), $_POST[ 'entry' ], $filename, $_POST[ 'check_visiblemenu' ] );

	        if ( $ok === true ) {
        	        redirect_to_url( 'index.php' );
	        } else {
                        echo( $GLOBALS['lang_string']['error'] . $ok . '<p />' );
                }

        }

	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config, $langkey;
		
		// INSTRUCTIONS
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		$entry_array[ 'entry' ] = $GLOBALS['lang_string']['instructions'] . '<p />';
		echo( theme_staticentry( $entry_array ) ); // THEME ENTRY
		
		// PREVIEW
		$editor = sb_editor('static');
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
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '.$GLOBALS['lang_string']['title']);
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
