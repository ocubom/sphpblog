<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	// Handle unauthorized folks from coming here
	$admin = $_SESSION[ 'fulladmin' ];
	if (( $logged_in == true) and ( $admin == 'no' ) and ( CheckUserSecurity( $_SESSION[ 'username' ],'DEL' ) == false ) ) {
		redirect_to_url( 'index.php' );
	}

	// Handle cancel button
	if ( array_key_exists( 'no', $_POST ) || array_key_exists( 'yes', $_POST ) ) {
		if ( array_key_exists( 'no', $_POST ) ) {
			// User clicked the "Cancel" button
				redirect_to_url( 'index.php' );
		} else {
			if ( array_key_exists( 'yes', $_POST ) ) {
				// User clicked the "OK" button
				$ok = delete_entry( $_POST[ 'entry' ], $_POST[ 'path' ] );
			
				if ( $ok === true ) { 
					redirect_to_url( 'index.php' );
				}
			}
		}
	}
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $user_colors;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = _sb('delete_title');
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		if ( array_key_exists( "no", $_POST ) || array_key_exists( "yes", $_POST ) ) {
			// Check to see if we're posting data...
			global $ok;
			if ( $ok !== true ) {
				echo( _sb('delete_error') . $ok . '<p />' );
			} else {
				echo( _sb('delete_success') . '<p />' );
			}
			echo( '<a href="index.php">' . _sb('home') . '</a><br /><br />' );
		} else {
		
			?>
			<?php echo( _sb('delete_instructions') ); ?><p />
			
			<hr />
			
			<form action='delete.php' method="post">
				<input type="hidden" name="entry" value="<?php echo( $_GET[ 'entry' ] ); ?>">
				<input type="hidden" name="path" value="<?php echo( CONTENT_DIR.$_GET[ 'y' ].'/'.$_GET[ 'm' ].'/' ); ?>">
				<input type="submit" name="yes" value="<?php echo( _sb('ok_btn') ); ?>" />
				<input type="submit" name="no" value="<?php echo( _sb('cancel_btn') ); ?>" />
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
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '. _sb('delete_title'));
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
