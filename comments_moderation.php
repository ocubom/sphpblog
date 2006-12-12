<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );

	// Create a session for the anti-spam cookie
	if ( !session_id() ) {
		session_start();
	}

	// Read configuration file
	read_config();

	// Load language strings
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'comment_moderation' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $user_colors, $logged_in, $theme_vars, $blog_theme, $blog_config;

		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $lang_string[ 'title' ];

		// PAGE CONTENT BEGIN
		ob_start(); ?>

		<?php echo( $lang_string[ 'instructions' ] ); ?><p />

		<?php echo( read_unmodded_comments($logged_in) ); ?><p />

		<?php
		// PAGE CONTENT END
		$entry_array[ 'entry' ] = ob_get_clean();
		
		// THEME ENTRY
		echo( theme_staticentry( $entry_array ) );
	}
	
	// ----
	// HTML
	// ----
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string[ 'html_charset' ] ); ?>" />

	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
	<?php require_once('scripts/sb_javascript.php'); ?>
	<script language="javascript" src="scripts/sb_javascript.js" type="text/javascript"></script>
<?php
	echo( '<title>' . $blog_config[ 'blog_title' ] . ' - ' . get_entry_title( substr( $_GET[ 'entry' ], 5, 2 ), substr ( $_GET[ 'entry' ], 7, 2 ), $_GET[ 'entry' ] ) . '</title>');
?>
</head>
	<?php 
		// ------------
		// BEGIN OUTPUT
		// ------------
		global $blog_config;
		if ( $blog_config[ 'blog_comments_popup' ] == 1 ) {
			theme_popuplayout();
		} else {
			theme_pagelayout();
		}
	?>
</html>
