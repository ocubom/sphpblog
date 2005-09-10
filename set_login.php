<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'set_login' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string[ 'html_charset' ] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="javascript" src="scripts/sb_javascript.js" type="text/javascript"></script>
	<script type="text/javascript">
	<!--
	function validate(theform) {
		if (theform.user.value=="" || theform.pass.value=="") {
			alert("<?php echo( $lang_string[ 'form_error' ] ); ?>");
			return false;
		} else {
			return true;
		}
	}
	//-->
	</script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors;
		
		?>
		
		<h2><?php echo( $lang_string[ 'title' ] ); ?></h2>

		<br />
		<?php echo("In recent versions, our password structure has changed.  There is no longer a way to update passwords
					and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
					exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
					to generate your password as you did when originally creating the blog site." ); ?><p />
		<?php 
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
