<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	$ok = create_password( stripslashes( $_POST[ 'user' ] ), stripslashes( $_POST[ 'pass' ] ) );
	$logged_in = $ok;
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'set_login' );
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string[ 'html_charset' ] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="JavaScript" src="scripts/sb_javascript.js"></script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors, $ok;
		
		if ( $ok === true ) {
			echo( $lang_string[ 'success' ] );
		} else {
			echo( $lang_string[ 'wrong_password' ] );
		}
		
		echo( '<hr noshade size="1" color=#' . $user_colors[ 'inner_border_color' ] . '>' );
		echo( '<a href="index.php">' . $lang_string[ 'home' ] . '</a><br /><br />' );
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
