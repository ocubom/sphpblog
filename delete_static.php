<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'delete_static' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	if ( array_key_exists( 'no', $_POST ) || array_key_exists( 'yes', $_POST ) ) {
		if ( array_key_exists( 'no', $_POST ) ) {
			// User clicked the "Cancel" button
			redirect_to_url( 'index.php' );
		} else {
			if ( array_key_exists( 'yes', $_POST ) ) {
				$entry = $_POST[ 'entry' ];
				$path = CONTENT_DIR.'static/';
				
				global $ok;
				if ( file_exists( $path . $entry . '.txt' ) ) {
					$ok = sb_delete_file( $path . $entry . '.txt' );
				}
				if ( file_exists( $path . $entry . '.txt.gz' ) ) {
					$ok = sb_delete_file( $path . $entry . '.txt.gz' );
				}
			
				if ( $ok === true ) {
					modify_link( 'delete_static', 'static.php?page='.$_POST[ 'entry' ] );
					
					redirect_to_url( 'index.php' );
				}
			}
		}
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
		
		if ( array_key_exists( "no", $_POST ) || array_key_exists( "yes", $_POST ) ) {
			// Check to see if we're posting data...
			global $ok;
			if ( $ok !== true ) {
				echo( $GLOBALS['lang_string']['error'] . $ok . '<p />' );
			} else {
				echo( $GLOBALS['lang_string']['success'] . '<p />' );
			}
			echo( '<a href="index.php">' . $GLOBALS['lang_string']['home'] . '</a>' );
		} else {
			echo( $GLOBALS['lang_string']['instructions'] . '<p /><hr />');
			echo( get_static_entry_by_file( $_GET[ 'entry' ] ) );
			?>			
			<hr />
			<form action='delete_static.php' method="post">
				<input type="hidden" name="entry" value="<?php echo( $_GET[ 'entry' ] ); ?>">
				<input type="submit" name="yes" value="<?php echo( $GLOBALS['lang_string']['ok_btn'] ); ?>" />
				<input type="submit" name="no" value="<?php echo( $GLOBALS['lang_string']['cancel_btn'] ); ?>" />
			</form>
			<?php 
		}
		// PAGE CONTENT END
		$entry_array[ 'entry' ] = ob_get_clean();
		
		// THEME ENTRY
		echo( theme_staticentry( $entry_array ) ); 

		// THEME ENTRY
		$blog_content = read_entry_from_file( CONTENT_DIR.$_GET[ 'y' ].'/'.$_GET[ 'm' ].'/'.$_GET[ 'entry' ] );
		echo( $blog_content ); 

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
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
