<?php 
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'search' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	global $search_string;
	$search_string = $_GET[ 'q' ];
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config, $search_string;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $lang_string[ 'title' ];
		
		// PAGE CONTENT BEGIN
		ob_start(); ?>
		<?php
		echo ( str_replace( '%string', @htmlspecialchars( $search_string, ENT_QUOTES, $lang_string[ 'php_charset' ] ), $lang_string[ 'instructions' ] ) . '<br />' );
		
		echo( '<hr />' );
			
		$output = search( $search_string, @$_GET[ 'n' ] );
		
		if ( $output ) {
			echo ( $output );
		} else {
			echo( $lang_string[ 'not_found' ] );
		}
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
	
	<title><?php echo($blog_config[ 'blog_title' ]); ?></title>
</head>
	<?php 
		// ------------
		// BEGIN OUTPUT
		// ------------
		theme_pagelayout();
	?>
</html>
