<?php 
	require('scripts/sb_functions.php');
	global $logged_in, $ok;
	$logged_in = logged_in( false, true );
	if ( !session_id() ) {
		session_start();
	}
	
	$client_ip_local = GetIP();
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'contact' );
	
	$subject="Contact sent through " . $blog_config[ "blog_title" ];
	$body="<b>Name:</b> " . $_POST['name'] . "<br />\n";
	$body=$body . "<b>IP Address:</b> " . $client_ip_local . "(" . gethostbyaddr($client_ip_local) .")<br />\n";
	$body=$body . "<b>Email:</b> " . $_POST['email'] . "<br />\n";
	$body=$body . "<b>Subject:</b> " . $_POST['subject'] . "<br />\n<br />\n";
	$body=$body . "<b>Comment:</b><br />\n";
	
	// Replace hard returns with '<br />' tags.
	$body=$body . str_replace( chr(10), '<br />', $_POST['comment'] );
	$ok = false;
	if ($_POST[ 'contact_capcha' ] == $_SESSION[ 'capcha' ] AND $_SESSION[ 'capcha' ]!='') {	
		sb_mail( $_POST['email'], $blog_config[ 'blog_email' ], $subject, $body, false );
		$ok = true;
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
		global $lang_string, $user_colors, $ok;
		
	if ( $ok === true ) { 
		echo( $lang_string['success'] );
		echo( '<a href="index.php">' . $lang_string['home'] . '</a><br /><br />' );
		} else {
		echo( $lang_string['failure'] );
		}
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
