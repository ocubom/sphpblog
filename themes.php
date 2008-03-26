<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'themes' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	if ( array_key_exists( 'blog_theme', $_POST ) ) {
		$new_config = new Configuration();
		$new_config->read_file();
		
		// @htmlspecialchars( $str, ENT_QUOTES, $GLOBALS['lang_string']['php_charset'] );
		$new_config->setTag('BLOG_THEME', 	sb_stripslashes($_POST['blog_theme']));
		
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
		global $lang_string, $user_colors, $logged_in, $theme_vars, $blog_theme, $ok;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		if ( array_key_exists( 'blog_theme', $_POST ) ) {
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
			
			<hr noshade size="1" color="#<?php echo(get_user_color('inner_border_color')); ?>" />
			
			<form action="themes.php" method="post" name="setup" name="setup">
				
				<label for="blog_theme"><?php echo( $GLOBALS['lang_string']['choose_theme'] ); ?></label><br />
				<select name="blog_theme">
				<?php
						$dir = 'themes/';
						
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
											$str = '<option label="' . $lang_name . '" value="' . $lang_dir . '"';
											if ( $blog_theme == $lang_dir ) {
												$str	.= ' selected';
											}
											$str	.= '>' . $lang_name . '</option>';
											
											echo( $str );
										}
									}
									$sub_dir = readdir( $dhandle );
								}
							}
							closedir( $dhandle );
						}
					?>
				
				</select><br />
				
				<hr noshade size="1" color="#<?php echo(get_user_color('inner_border_color')); ?>" />
				
				<input type="submit" name="submit" value="<?php echo( $GLOBALS['lang_string']['submit_btn'] ); ?>" /><br /><br />
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
