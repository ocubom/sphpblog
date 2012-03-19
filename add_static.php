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
                        echo( _sb('add_static_error') . $ok . '<p />' );
                }

        }

	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $blog_config, $langkey;
		
		// INSTRUCTIONS
		$entry_array = array();
		$entry_array[ 'subject' ] = _sb('add_static_title');
		$entry_array[ 'entry' ] = _sb('add_static_instructions') . '<p />';
		echo( theme_staticentry( $entry_array ) ); // THEME ENTRY
		
		// PREVIEW
		$editor = sb_editor('static');
		echo( $editor['preview'] );
		
		// EDITOR
		$entry_array = array();
		$entry_array[ 'subject' ] = _sb('add_static_title');
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
        sb_editor_js('blog_text');
	$page_template->appendTag('{JAVASCRIPT}', ob_get_clean());
	
	// Page Title
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '. _sb('add_static_title'));
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
