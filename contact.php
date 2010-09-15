<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');

	global $logged_in;
	$logged_in = logged_in( false, true );
	
	if ( !session_id() ) {
		session_start();
	}
	$_SESSION[ 'capcha_contact' ] = sb_get_capcha();
	
	read_config();
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'contact' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	// The user must have cookies enabled in order to send contacts - this helps with blank emails
	if (!isset($_SESSION['cookies_enabled'])) {
		redirect_to_url('errorpage-nocookies.php');
		// header('location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'errorpage-nocookies.php');
	}
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config, $theme_vars; 
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		
		// PAGE CONTENT BEGIN
		ob_start(); ?>
		
		<?php echo ( $GLOBALS['lang_string']['instructions'] ); ?><p />
		<form action="contact_cgi.php" method="post" onsubmit="return validate(this)">
		<p>
		<label for="name"><?php echo( $GLOBALS['lang_string']['name'] ); ?></label><br />
		<input type="text" name="name" id="name" size="40" /><br /><br />
		<label for="email"><?php echo( $GLOBALS['lang_string']['email'] ); ?></label><br />
		<input type="text" name="email" id="email" size="40" /><br /><br />
		<label for="subject"><?php echo( $GLOBALS['lang_string']['subject'] ); ?></label><br />
		<input type="text" name="subject" id="subject" size="40" /><br /><br />
		<label for="text"><?php echo( $GLOBALS['lang_string']['comment'] ); ?></label><br />
		<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="text" name="comment" rows="20" cols="50"></textarea><br /><br />
		
		<?php
		if ( $blog_config->getTag('BLOG_ENABLE_CAPCHA') == 0 ) {
			echo('<!-- Anti-spam disabled -->');
			echo('<input type="hidden" name="capcha_contact" id="capcha_contact" value="' . $_SESSION[ 'capcha_contact' ] . '" maxlength="6" /><br /><br />'); 
		} else {
			echo('<label for="capcha_contact">');
			if ( function_exists('imagecreate') && $blog_config->getTag('BLOG_ENABLE_CAPCHA_IMAGE') ) {
				echo ( $GLOBALS['lang_string']['contact_capcha'] . '<br /><img src="capcha.php?entry=contact" alt="CAPCHA" />' );
			} else {
				echo ( $GLOBALS['lang_string']['contact_capcha'] . '<b>' . sb_str_to_ascii( $_SESSION[ 'capcha_contact' ] ) . '</b>' );
			}
			echo('</label><br />');
			echo('<input type="text" name="capcha_contact" id="capcha_contact" value="" maxlength="6" /><br /><br />');
		} 
		?>
		</p>
		<hr />
		<p>
		<input type="submit" name="submit" value="<?php echo( $GLOBALS['lang_string']['submit_btn'] ); ?>" />
		</p>
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
	
	// Main Page Template
	$page_template = new Template(TEMPLATE_DIR.'layouts/index.tpl');
	
	// Meta Data
	get_init_code($page_template);
	
	// Extra Javascript
	ob_start();
?>
	<script type="text/javascript">
		// <!--
		function validate(theform) {
			if (theform.subject.value=="" || theform.comment.value=="" || theform.email.value=="") {
				alert("<?php echo( $GLOBALS['lang_string']['form_error'] ); ?>");
				return false;
			} else {
				return true;
			}		
		}
		// -->
	</script>
<?php
	$page_template->appendTag('{JAVASCRIPT}', ob_get_clean());
	
	// Page Title
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '.$GLOBALS['lang_string']['title']);
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
