<?php 
	require('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'login' );
	
	$ok = check_password( stripslashes( $_POST['user'] ), stripslashes( $_POST['pass'] ) );
	$logged_in = $ok;
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string['html_charset'] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="JavaScript" src="scripts/sb_javascript.js"></script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string['title'] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors, $ok;
		
		if ( $ok === true ) {
			echo( $lang_string['success'] );
		} else {
			echo( $lang_string['wrong_password'] );
		}
		
		echo( '<a href="index.php">' . $lang_string['home'] . '</a><br />' );
		
		$upgrade_count = move_all_comment_files( true, true );
		if ( $upgrade_count > 0 ) {
			echo( "<hr noshade size=\"1\" color=\"#" . $user_colors['inner_border_color'] . "\"><br />" );
			echo( $lang_string['upgrade'] );
			$str = str_replace ( '%n', $upgrade_count, $lang_string['upgrade_count'] );
			echo( $str . "<br /><br />" );
			echo( "<a href=\"upgrade.php\">" . $lang_string['upgrade_url'] ."</a><br />" );
		}
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
