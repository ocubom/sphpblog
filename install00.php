<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, false );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'install00' );

	// -----------
	// PAGE CONTENT
	// -----------
	function page_content() {
		global $lang_string, $blog_config;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $lang_string[ 'title' ];
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		echo( $lang_string[ 'instructions' ] . '<p />' );
		?>
			<form action="install01.php" method="post">
				<?php
					$translation_arr = get_installed_translations();
					
					$dropdown_arr = array();
					for ($i=0; $i < count($translation_arr); $i++) {				
						$lang_dir = $translation_arr[$i]['directory'];
						$lang_name = $translation_arr[$i]['name'];
						
						$item = array();
						$item['label'] = $lang_name;
						$item['value'] = $lang_dir;
						if ( $blog_config[ 'blog_language' ] == $item['value'] ) {
							$item['selected'] = true;
						}
						array_push( $dropdown_arr, $item );
						
					}
					echo( HTML_dropdown( $lang_string[ 'blog_choose_language' ], "blog_language", $dropdown_arr ) );
				?>
				<p />
				
				<input type="submit" name="submit" value="<?php echo( $lang_string['submit_btn'] ); ?>" />
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
	
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
</head>
<?php 
	// BEGIN OUTPUT
	theme_pagelayout();
?>
</html>
