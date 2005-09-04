<?php 
	require('scripts/sb_functions.php');

	global $logged_in;
	$logged_in = logged_in( false, true );
	if ( !session_id() ) {
		session_start();
	}
	$_SESSION[ 'capcha' ] = sb_get_capcha();
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'contact' );
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
		if (theform.subject.value=="" || theform.comment.value=="" || theform.email.value=="" || theform.commentcapcha.value=="") {
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
		global $lang_string, $user_colors, $logged_in;
		$client_ip_local = GetIP();
		?>
		
		<h2><?php echo( $lang_string['title'] ); ?></h2>
		<?php echo( $lang_string['instructions'] ); ?><p />		
		<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>
		
		<form action="contact_cgi.php" method="POST" onSubmit="return validate(this)">
		
		<label for="name"><?php echo( $lang_string['name'] ); ?></label><br />
		<input type="text" name="name" size="40"><br /><br />
		<label for="email"><?php echo( $lang_string['email'] ); ?></label><br />
		<input type="text" name="email" size="40"><br /><br />
		IP Address:<br /><?php echo( $client_ip_local ) ?> (<?php echo( gethostbyaddr($client_ip_local) ) ?> )<br /><br />
		<label for="subject"><?php echo( $lang_string['subject'] ); ?></label><br />
		<input type="text" name="subject" size="40"><br /><br />
		<label for="comment"><?php echo( $lang_string['comment'] ); ?></label><br />
		<textarea style="width: <?php global $theme_vars; echo( $theme_vars['max_image_width'] ); ?>px;" id="text" name="comment" rows="20" cols="50" autocomplete="OFF"></textarea>
		
		<label for="contact_capcha"><?php printf( $lang_string['contact_capcha'], sb_str_to_ascii( $_SESSION[ 'capcha' ] ) ); ?></label><br />
		<input type="text" name="contact_capcha" value="" autocomplete="OFF"><br /><br />
		
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
