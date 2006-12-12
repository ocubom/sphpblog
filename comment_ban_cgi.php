<?php 
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	if ( !session_id() ) {
		session_start();
	}

	read_config();

	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'comments' );
	
	// ---------------
	// POST PROCESSING
	// ---------------

	// Verify information being passed
	global $ok;
	$ok = false;
	if (isset( $_GET[ "ban" ] ) ) {
		$ok = add_to_blacklist ( $_GET[ "ban" ] );
	} else {
		$ok = $lang_string[ 'error_noip' ];
	}
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config, $ok;
	
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $lang_string[ 'title' ];
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		if ( $ok !== true ) {
			echo $lang_string[ 'error_ban' ] . $ok . '<p />';
		} else {
			echo $lang_string[ 'success_ban1' ] . '(' . $_GET[ "ban" ] . ')' . $lang_string[ 'success_ban2' ] . '<p />';
		}
		echo( '<a href="index.php">' . $lang_string[ 'home' ] . '</a>' );
		
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

	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
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
