<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'static' );
	
	$redirect = true;
	if ( isset( $_GET[ 'page' ] ) ) {		
		$redirect = false;
	}
	
	if ( $redirect === true ) {
		redirect_to_url( 'index.php' );
	}
	
	global $entry_array;
	$entry_array = read_static_entry( $_GET[ 'page' ], $logged_in )
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string[ 'html_charset' ] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="JavaScript" src="scripts/sb_javascript.js"></script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $entry_array[ 'subject' ] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors, $logged_in, $entry_array;
		
		echo( theme_staticentry( $entry_array, $logged_in ) );
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
