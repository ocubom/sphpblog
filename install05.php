<?php 
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, false );
	
	read_config();
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	// Validate Language
	$temp_lang = '';
	if ( isset( $_POST['blog_language'] ) ) {
		$temp_lang = sb_stripslashes( $_POST['blog_language'] );
	} else if ( array_key_exists( 'blog_language', $_GET ) ) {	
		$temp_lang = sb_stripslashes( $_GET['blog_language'] );
	}
	if (validate_language($temp_lang) == false) {
		$temp_lang = 'english';
	}
	
	global $blog_config;
	$blog_config[ 'blog_language' ] = $temp_lang;
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'install05' );
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $lang_string[ 'title' ];
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		echo( $lang_string[ 'instructions' ] . '<p />' );
		?>
		
		<hr />
		
		<form action="install06.php?blog_language=<?php echo( $blog_config[ 'blog_language' ] ); ?>" method="post" onsubmit="return validate(this)">
			<label for="user"><?php echo( $lang_string[ 'username' ] ); ?></label><br />
			<input type="text" name="user" autocomplete="OFF" size="40"><p />
			
			<label for="pass"><?php echo( $lang_string[ 'password' ] ); ?></label><br />
			<input type="password" name="pass" autocomplete="OFF" size="40"><p />
			
			<input type="submit" name="submit" value="<?php echo( $lang_string[ 'submit_btn' ] ); ?>" />
		</form>
		
		<?php 
		// PAGE CONTENT END
		$entry_array[ 'entry' ] = ob_get_clean();
		
		// THEME ENTRY
		echo( theme_staticentry( $entry_array ) );
		}
	
	// ----
	// HTML
	// ----
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
		// ------------
		// BEGIN OUTPUT
		// ------------
		theme_pagelayout();
	?>
</html>
