<?php
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	if ( !session_id() ) {
		session_start();
	}

	read_config();

	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'contact' );

	$subject='Contact sent through ' . $blog_config[ 'blog_title' ];
	$body='<b>Name:</b> ' . $_POST[ 'name' ] . "<br />\n";
	$body=$body . '<b>Email:</b> ' . $_POST[ 'email' ] . "<br />\n";
	$body=$body . '<b>Subject:</b> ' . $_POST[ 'subject' ] . "<br />\n<br />\n";
	$body=$body . "<b>Comment:</b><br />\n";

	// Replace hard returns with '<br />' tags.
	$body=$body . str_replace( chr(10), '<br />', $_POST[ 'comment' ] );

	$ok=false;
	if ( $_POST[ 'capcha' ] == $_SESSION[ 'capcha_contact' ] ) {
		$ok=sb_mail( $_POST[ 'email' ], $blog_config[ 'blog_email' ], $subject, $body, false );
	}
	@session_unregister( 'capcha_contact' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string[ 'html_charset' ] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="javascript" src="scripts/sb_javascript.js" type="text/javascript"></script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
</head>
<?php
	function page_content() {
		global $lang_string, $user_colors, $ok;

		if ( $ok ) {
			echo( $lang_string[ 'success' ] );
		}
		else {
			echo( $lang_string[ 'error' ] );
		}

		echo( '<a href="index.php">' . $lang_string[ 'home' ] . '</a><br /><br />' );
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
