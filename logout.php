<?php 
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $result;
	$result = logout();
	
	$logged_in = logged_in( false, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'logout' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $result;
	
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $lang_string[ 'title' ];
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		switch ( $result ) {
			case 0:
				echo( $lang_string[ 'error' ] );
				break;
			case 1:
				echo( $lang_string[ 'success' ] );
				break;
			case -1:
				echo( $lang_string[ 'error_no_cookie' ] );
				break;
		}
		
		echo( '<a href="index.php">' . $lang_string[ 'home' ] . '</a>' );
		
		// PAGE CONTENT END
		$entry_array[ 'entry' ] = ob_get_clean();
		
		// THEME ENTRY
		echo( theme_staticentry( $entry_array ) );
		// 
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
	
	<?php if ($result==1) { echo( '<meta http-equiv="refresh" content="5; URL=index.php" />' ); } ?>
</head>
	<?php 
		// ------------
		// BEGIN OUTPUT
		// ------------
		theme_pagelayout();
	?>
</html>
