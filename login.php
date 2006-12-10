<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'login' );
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
		global $lang_string, $user_colors, $logged_in, $theme_vars, $blog_theme;	
		$entry_array = array();
		$entry_array[ 'subject' ] = $lang_string[ 'title' ];
			
		ob_start(); ?>		
		
		<?php echo( $lang_string[ 'instructions' ] ); ?><p />
		
		<form action="login_cgi.php" method="post" onsubmit="return validate(this)">
		
		<label for="user"><?php echo( $lang_string[ 'username' ] ); ?></label><br />
		<input type="text" name="user" size="40"><br /><br />
		
		<label for="pass"><?php echo( $lang_string[ 'password' ] ); ?></label><br />
		<input type="password" name="pass" size="40"><br />
		
		<hr />
		
		<input type="submit" name="submit" value="<?php echo( $lang_string[ 'submit_btn' ] ); ?>" />
		</form>
		
		<?php
		$entry_array[ 'entry' ] = ob_get_clean();
		echo( theme_staticentry( $entry_array ) );	 
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
