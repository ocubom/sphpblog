<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'index' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $user_colors;
		
		$GLOBALS['lang_string']['title'] = 'Compare Language Files';
		$GLOBALS['lang_string']['instructions'] = 'This page is used to verify that language files are up to date.';
		$GLOBALS['lang_string']['blog_choose_language'] = 'Select two languages to compare:';
		$GLOBALS['lang_string']['submit_btn'] = 'Submit';
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		
		// PAGE CONTENT BEGIN
		ob_start();
		 
		echo( '<h2>' . $GLOBALS['lang_string']['title'] . '</h2>' );
		echo( $GLOBALS['lang_string']['instructions'] . '<p />' );
		
		?>
		<hr />
		
		<form action="languages_cgi.php" method="post">
			
			<label for="blog_language1"><?php echo( $GLOBALS['lang_string']['blog_choose_language'] ); ?></label><br />
			<select name="blog_language1">
			<?php
				global $blog_config;
				
				$dir = 'languages/';	
				$str = '';
				clearstatcache();
				if ( is_dir($dir) ) {
				$dhandle = opendir($dir);
				if ( $dhandle ) {
					$sub_dir = readdir( $dhandle );
					while ( $sub_dir ) {
					if ( is_dir( $dir . $sub_dir ) == true && $sub_dir != '.' && $sub_dir != '..' ) {
						$lang_dir = $sub_dir;
						$lang_name = sb_read_file( $dir . $sub_dir . '/id.txt' );
						if ( $lang_name ) {
						$str_temp = '<option label="' . $lang_name . '" value="' . $lang_dir . '"';
						if ( $blog_config->getTag('BLOG_LANGUAGE') == $lang_dir ) {
							$str_temp	 .= ' selected';
						}
						$str_temp	 .= '>' . $lang_name . "</option>\n";
						
						$str	.= $str_temp;
						}
					}
					$sub_dir = readdir( $dhandle );
					}
				}
				closedir( $dhandle );
				}
				
				echo( $str );
			?>
			</select>
			<select name="blog_language2">
			<?php
				echo( $str );
			?>
			</select><p />
			
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
