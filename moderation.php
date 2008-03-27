<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );

	read_config();

	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'moderation' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	if ( array_key_exists( 'banned_address_list', $_POST ) && array_key_exists( 'banned_word_list', $_POST ) ) {
		
		$new_config = new Configuration();
		$new_config->read_file();
		
		// @htmlspecialchars( $str, ENT_QUOTES, $GLOBALS['lang_string']['php_charset'] );
		$new_config->setTag('BANNED_ADDRESS_LIST', 	sb_stripslashes($_POST['banned_address_list']));
		$new_config->setTag('BANNED_WORD_LIST', 	sb_stripslashes($_POST['banned_word_list']));
		
		global $ok;
		$ok = $new_config->write_file();
								
		if ( $ok === true ) { 
			redirect_to_url( 'index.php' );
		}
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
		<?php echo( $GLOBALS['lang_string']['instructions'] ); ?><p />

		<!-- FORM -->
		<form action="moderation.php" method="post" name="moderation" name="moderation" onsubmit="return validate(this)">

			<?php echo( $GLOBALS['lang_string']['banned_address_list_title'] ); ?>
			<label for="info_keywords"><?php echo( $GLOBALS['lang_string']['banned_address_list'] ); ?></label><br />
				<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="text" name="banned_address_list" rows="20" cols="50" autocomplete="OFF"><?php echo($blog_config->getTag('BANNED_ADDRESS_LIST')); ?></textarea><br /><br />

				<?php echo( $GLOBALS['lang_string']['banned_word_list_title'] ); ?>
			<label for="info_keywords"><?php echo( $GLOBALS['lang_string']['banned_word_list'] ); ?></label><br />
				<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="text" name="banned_word_list" rows="20" cols="50" autocomplete="OFF"><?php echo($blog_config->getTag('BANNED_WORD_LIST')); ?></textarea><br /><br />

			<!-- SUBMIT -->
			<input type="submit" name="submit" value="<?php echo( $GLOBALS['lang_string']['submit_btn'] ); ?>" />
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
