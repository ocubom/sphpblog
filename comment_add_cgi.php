<?php 
	require('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	if ( !session_id() ) {
		session_start();
	}
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'comments' );
	
	// Verify information being passed:
	$ok = false;
	if ( array_key_exists( 'y', $_POST ) && array_key_exists( 'm', $_POST ) && array_key_exists( 'entry', $_POST ) && array_key_exists( 'comment_capcha', $_POST ) ) {
		// Dis-allow dots, and slashes to make sure the
		// user is not able to back-up a directory.
		//
		// Make sure the string lengths are correct.
		if ($_POST['blog_text']!='' and $_POST['comment_name']!='' and $_SESSION[ 'capcha' ]!='' and  $_POST[ 'comment_capcha'] == $_SESSION[ 'capcha' ] ) {
			if ( strpos( $_POST[ "y" ], array( "/", ".", "\\", "%" ) ) === false && strlen( $_POST["y"] ) == 2 &&
					strpos( $_POST[ "m" ], array( "/", ".", "\\", "%" ) ) === false && strlen( $_POST["m"] ) == 2 &&
					strpos( $_POST[ "entry" ], array( "/", ".", "\\", "%" ) ) === false && strlen( $_POST["entry"] ) == 18 ) {
				
				// Verify that the file exists.
				if ( entry_exists ( $_POST['y'], $_POST['m'], $_POST['entry'] ) ) {
					$ok = write_comment( $_POST['y'], $_POST['m'], $_POST['entry'], stripslashes( $_POST['comment_name'] ), stripslashes( $_POST['comment_email'] ), stripslashes( $_POST['comment_url'] ), $_POST['comment_remember'], stripslashes( $_POST['blog_text'] ) );
				}
			}
		}
	}
	
	if ( $ok === true ) {
		$relative_url = 'comments.php?y='.$_POST['y'].'&m='.$_POST['m'].'&entry='.$_POST['entry'];
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
			echo $lang_string['error_add'].$ok.'<p />';
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
