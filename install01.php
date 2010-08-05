<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, false );
	
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
	$blog_config->setTag('BLOG_LANGUAGE', $temp_lang);
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'install01' );
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		echo( $GLOBALS['lang_string']['instructions'] . '<p />' );

		echo( '<a href="install02.php?blog_language=' . $blog_config->getTag('BLOG_LANGUAGE') . '">' . $lang_string['begin'] . '</a><p />' );

		// TODO translations
		// TODO more PHP checks here
		print "<p>PHP Pre-install Configuration Checks:</p>";
		if (strnatcmp(phpversion(),'4.1') < 0)
			echo "<p>ERROR: Your version of PHP (" . phpversion() . ") is too old.</p>";
		if (!open_basedir_check(CONFIG_DIR))
			echo "<p>ERROR: You need to set your php.ini <a href='http://www.php.net/manual/en/ini.core.php#ini.open-basedir'>open_basedir</a> to include " . realpath(CONFIG_DIR) . ".</p>";
		if (!open_basedir_check(CONTENT_DIR))
			echo "<p>ERROR: You need to set your php.ini <a href='http://www.php.net/manual/en/ini.core.php#ini.open-basedir'>open_basedir</a> to include " . realpath(CONTENT_DIR) . ".</p>";
		if (!open_basedir_check(IMAGES_DIR))
			echo "<p>ERROR: You need to set your php.ini <a href='http://www.php.net/manual/en/ini.core.php#ini.open-basedir'>open_basedir</a> to include " . realpath(IMAGES_DIR) . ".</p>";
		if (!ini_get('allow_url_fopen'))
			echo "<p>WARNING: php.ini config value allow_url_fopen is set to Off.  This is needed for trackbacks.</p>";
		if (!ini_get('file_uploads'))
			echo "<p>WARNING: php.ini config value file_uploads is set to Off.  This is needed for uploading images and emoticons.</p>";
		echo "<p>NOTE: Maximum size for image uploads is " . min(intval(ini_get('upload_max_filesize')), intval(ini_get('post_max_size')))/(1024*1024) . " MB.  Adjust upload_max_filesize and post_max_size in php.ini to larger values if you need to upload bigger files.</p>";
		
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
