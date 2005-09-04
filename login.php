<?php 
	require('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'login' );
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string['html_charset'] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="JavaScript" src="scripts/sb_javascript.js"></script>
	<script type="text/javascript">
	<!--
	function validate(theform) {
		if (theform.user.value=="" || theform.pass.value=="") {
			alert("<?php echo( $lang_string['form_error'] ); ?>");
			return false;
		} else {
			return true;
		}
	}
	//-->
	</script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string['title'] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors;
		
		?>
		
		<h2><?php echo( $lang_string['title'] ); ?></h2>
		<?php echo( $lang_string['instructions'] ); ?><p />
		
		<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>
		
		<form action="login_cgi.php" method="POST" onSubmit="return validate(this)">
		
		<label for="user"><?php echo( $lang_string['username'] ); ?></label><br />
		<input type="text" name="user" size="40"><br /><br />
		
		<label for="pass"><?php echo( $lang_string['password'] ); ?></label><br />
		<input type="password" name="pass" size="40"><br />
		
		<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>
		
		<input type="submit" name="submit" value="<?php echo( $lang_string['submit_btn'] ); ?>" />
		</form>
		
		<?php 
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
