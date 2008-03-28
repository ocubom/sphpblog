<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $GLOBALS['blog_config']->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'info' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	if ( array_key_exists( 'info_keywords', $_POST ) && array_key_exists( 'info_description', $_POST ) && array_key_exists( 'info_copyright', $_POST ) ) {
		
		$new_config = new Configuration();
		$new_config->read_file();
		
		// @htmlspecialchars( $str, ENT_QUOTES, $GLOBALS['lang_string']['php_charset'] );
		$new_config->setTag('INFO_KEYWORDS', 		sb_stripslashes($_POST['info_keywords']));
		$new_config->setTag('INFO_DESCRIPTION', 	sb_stripslashes($_POST['info_description']));
		$new_config->setTag('INFO_COPYRIGHT', 		sb_stripslashes($_POST['info_copyright']));
		$new_config->setTag('TRACKING_CODE', 		$_POST['tracking_code']);
		
		global $ok;
		$ok = $new_config->write_file();
								
		if ( $ok === true ) { 
			redirect_to_url( 'index.php' );
		}
	}
	
	// -----------
	// PAGE CONTENT
	// -----------
	function page_content() {
		global $lang_string, $blog_config, $theme_vars, $blog_theme;
	
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		if ( array_key_exists( "info_keywords", $_POST ) && array_key_exists( "info_description", $_POST ) && array_key_exists( "info_copyright", $_POST ) ) {	
			// Check to see if we're posting data...
			global $ok;
			if ( $ok !== true ) {
				echo( $GLOBALS['lang_string']['error'] . $ok . '<p />' );
			} else {
				echo( $GLOBALS['lang_string']['success'] . '<p />' );
			}
			echo( '<a href="index.php">' . $GLOBALS['lang_string']['home'] . '</a>' );
		} else {
			?>
			
			<?php echo( $GLOBALS['lang_string']['instructions'] ); ?><p />
			
			<form action="info.php" method="post" name="info" name="info">
				
				<label for="info_keywords"><?php echo( $GLOBALS['lang_string']['info_keywords'] ); ?></label><br />
				<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="text" name="info_keywords" rows="5" cols="50" autocomplete="OFF"><?php echo($blog_config->getTag('INFO_KEYWORDS')); ?></textarea><br /><br />
				
				<label for="info_description"><?php echo( $GLOBALS['lang_string']['info_description'] ); ?></label><br />
				<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="text" name="info_description" rows="5" cols="50" autocomplete="OFF"><?php echo($blog_config->getTag('INFO_DESCRIPTION')); ?></textarea><br /><br />
				
				<label for="info_copyright"><?php echo( $GLOBALS['lang_string']['info_copyright'] ); ?></label><br />
				<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="text" name="info_copyright" rows="5" cols="50" autocomplete="OFF"><?php echo($blog_config->getTag('INFO_COPYRIGHT')); ?></textarea><br /> <br />

				<label for="tracking_code"><?php echo( $GLOBALS['lang_string']['tracking_code'] ); ?></label><br />
				<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="text" name="tracking_code" rows="5" cols="50" autocomplete="OFF"><?php echo($blog_config->getTag('TRACKING_CODE')); ?></textarea><br />

				<hr />

				<input type="submit" name="submit" value="<?php echo( $GLOBALS['lang_string']['submit_btn'] ); ?>" />
			</form>
			
			<?php 
		}
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
		<!--
		function validate(theform) {
			if (theform.blog_title.value=="" || theform.blog_author.value=="" || theform.blog_footer.value=="" ) {
				alert("<?php echo( $GLOBALS['lang_string']['form_error'] ); ?>");
				return false;
			} else {
				return true;
			}
		}
		//-->
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
