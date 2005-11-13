<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'themes' );
	
	// Post
	if ( array_key_exists( 'blog_theme', $_POST ) ) {
		$ok = write_theme( stripslashes( $_POST[ 'blog_theme' ] ) );
		
		if ( $ok === true ) {
		redirect_to_url( 'index.php' );
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string[ 'html_charset' ] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="javascript" src="scripts/sb_javascript.js" type="text/javascript"></script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors, $logged_in, $theme_vars, $blog_theme;	
		
		if ( array_key_exists( 'blog_theme', $_POST ) ) {
			// Check to see if we're posting data...
			global $ok;
			if ( $ok !== true ) {
				echo( $lang_string[ 'error' ] . $ok . '<p />' );
			}
			echo( '<a href="index.php">' . $lang_string[ 'home' ] . '</a><br /><br />' );
		} else {
			$entry_array = array();
			$entry_array[ 'subject' ] = $lang_string[ 'title' ];
			
			ob_start(); ?>
			
			<?php echo( $lang_string[ 'instructions' ] ); ?><p />
			
			<hr />
			
			<form action="themes.php" method="POST" name="setup" name="setup">
				<?php
					$arr = array();
					$dir = 'themes/';
					
					clearstatcache();
					if ( is_dir($dir) ) {
						$dhandle = opendir($dir);
						if ( $dhandle ) {
							$sub_dir = readdir( $dhandle );
							while ( $sub_dir ) {
								if ( is_dir( $dir . $sub_dir . '/' ) == true && $sub_dir != '.' && $sub_dir != '..' ) {
									$lang_dir = $sub_dir;
									$lang_name = sb_read_file( $dir . $sub_dir . '/id.txt' );
									if ( $lang_name ) {
										$item = array();
										$item['label'] = $lang_name;
										$item['value'] = $lang_dir;
										if ( $blog_config[ 'blog_language' ] == $item['value'] ) {
											$item['selected'] = true;
										}
										array_push( $arr, $item );
									}
								}
								$sub_dir = readdir( $dhandle );
							}
						}
						closedir( $dhandle );
					}
					echo( HTML_dropdown( $lang_string[ 'choose_theme' ], "blog_theme", $arr ) );
				?>
				
				<hr />
				
				<input type="submit" name="submit" value="<?php echo( $lang_string[ 'submit_btn' ] ); ?>" />
			</form>
			
			<?php
			$entry_array[ 'entry' ] = ob_get_clean();
			echo( theme_staticentry( $entry_array ) );	 
		}
	}
?>
<?php 
	theme_pagelayout();
?>

</html>
