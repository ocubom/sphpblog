<?php 
	require('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'trackbacks' );
	
	// Delete selected comment file.
	$ok = false;
	if ( array_key_exists( 'trackback', $_GET ) ) {
		$ok = delete_trackback( $_GET['trackback'] );	
	}
	
	if ( $ok === true ) {
		$relative_url = 'trackback.php?y='.$_GET['y'].'&m='.$_GET['m'].'&entry='.$_GET['entry'].'&__mode=html';
		redirect_to_url( $relative_url );
	}
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
		global $lang_string, $user_colors;
		
		if ( $ok !== true ) {
			echo $lang_string['error_delete'] . $ok . '<p />';
		}
		
		echo( '<a href="index.php">' . $lang_string['home'] . '</a><br /><br />' );
	}
?>
<?php 
	global $blog_config;
	if ( $blog_config[ 'blog_comments_popup' ] == 1 ) {
		theme_popuplayout();
	} else {
		theme_pagelayout();
	}
?>
</html>
