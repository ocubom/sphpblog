<?php 
	require_once('scripts/sb_functions.php');

	global $logged_in;
	$logged_in = logged_in( false, true );
	if ( !session_id() ) {
		session_start();
	}
	$_SESSION[ 'capcha_contact' ] = sb_get_capcha();
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'contact' );	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string[ 'html_charset' ] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="javascript" src="scripts/sb_javascript.js" type="text/javascript"></script>
	</script>
	<script type="text/javascript">
	<!--
	function validate(theform) {
		if (theform.subject.value=="" || theform.comment.value=="" || theform.email.value=="") {
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
		global $lang_string, $user_colors, $logged_in, $theme_vars;	
		
		// The user must have cookies enabled in order to send contacts - this helps with blank emails
		if (!isset($_SESSION['cookies_enabled'])) {
			header('location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'errorpage-nocookies.php');	
		} else {
			global $lang_string, $user_colors, $logged_in, $theme_vars, $blog_theme;	
			$entry_array = array();
			$entry_array[ 'subject' ] = $lang_string[ 'title' ];
			
			ob_start(); ?>
			<?php echo ( $lang_string[ 'instructions' ] ); ?><p />
			<form accept-charset="<?php echo( $lang_string[ 'html_charset' ] ); ?>,iso-8859-1,utf-8" action="contact_cgi.php" method="POST" onSubmit="return validate(this)">
		
			<label for="name"><?php echo( $lang_string[ 'name' ] ); ?></label><br />
			<input type="text" name="name" size="40"><br /><br />
			<label for="email"><?php echo( $lang_string[ 'email' ] ); ?></label><br />
			<input type="text" name="email" size="40"><br /><br />
			<label for="subject"><?php echo( $lang_string[ 'subject' ] ); ?></label><br />
			<input type="text" name="subject" size="40"><br /><br />
			<label for="comment"><?php echo( $lang_string[ 'comment' ] ); ?></label><br />
			<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="text" name="comment" rows="20" cols="50" autocomplete="OFF"></textarea><br /><br />
			<label for="capcha_contact"><?php 
				if ( function_exists('imagecreate') ) {
					echo ( $lang_string[ 'contact_capcha' ] . '<br /><img src="capcha.php?entry=contact" />' );
				}
				else {
					echo ( $lang_string[ 'contact_capcha' ] . '<b>' . sb_str_to_ascii( $_SESSION[ 'capcha_contact' ] ) . '</b>' );
				}
			?></label><br />
			<input type="text" name="capcha" value="" autocomplete="OFF" maxlength="6"><br /><br />
			<hr noshade size="1" color="#<?php echo( $user_colors[ 'inner_border_color' ] ); ?>" />
	
			<input type="submit" name="submit" value="<?php echo( $lang_string[ 'submit_btn' ] ); ?>" />
			</form>
			<?php
			$entry_array[ 'entry' ] = ob_get_contents();
			ob_end_clean();
			echo( theme_staticentry( $entry_array ) );	
		} 
	}
	
	theme_pagelayout();
?>
</html>
