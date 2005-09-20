<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'sidebar' );
	
	// POST Functions
	if ( array_key_exists( 'submit', $_POST ) ) {
	
		// Loop through plugins
		$plugin_array = get_menu_plugins();
		for ( $i = 0; $i < count( $plugin_array ); $i++ ) {
			$plugin = $plugin_array[$i];
			
			// See if box was checked
			$enable = false;
			if ( array_key_exists( $plugin[ 'NAME' ], $_POST ) ) {
				$enable = true;
			}
			
			// Get plugin status (is it already enabled/disabled?)
			if ( function_exists( $plugin[ 'FUNCTION' ] . 'getStatus' ) ) {
				$result = call_user_func( $plugin[ 'FUNCTION' ] . 'getStatus', $plugin );
				$state = ( $result == 'enabled' );
				
				if ( $state != $enable ) {
					// It's not already enabled/disabled, so do it...
					if ( function_exists( $plugin[ 'FUNCTION' ] . 'activate' ) ) {
						$result = call_user_func( $plugin[ 'FUNCTION' ] . 'activate', $plugin, $enable );
					}
				}
			}	
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
	<title><?php echo( $blog_config[ 'blog_title' ] ); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors, $logged_in, $theme_vars, $blog_theme, $blog_config;	
		
		$entry_array = array();
		$entry_array[ 'subject' ] = $lang_string[ 'title' ];
		
		// Start output buffer
		ob_start();
		
		echo( $lang_string[ 'instructions' ] . '<p /><hr />' );
		?>
		<form accept-charset="<?php echo( $lang_string[ 'html_charset' ] ); ?>,iso-8859-1,utf-8" action="sidebar.php" method="POST" name="sidebar">
			<?php
				$plugin_array = get_menu_plugins();
				for ( $i = 0; $i < count( $plugin_array ); $i++ ) {
					$plugin = $plugin_array[$i];
					
					if ( function_exists( $plugin[ 'FUNCTION' ] . 'getStatus' ) ) {
						$result = call_user_func( $plugin[ 'FUNCTION' ] . 'getStatus', $plugin );
						switch ( $result ) {
							case 'enabled':
								echo( '<input type="checkbox" id="' . $plugin[ 'NAME' ] . '" name="' . $plugin[ 'NAME' ] . '" checked> ' . $plugin[ 'ID' ] . '<br />' );
								break;
							case 'disabled':
								echo( '<input type="checkbox" id="' . $plugin[ 'NAME' ] . '" name="' . $plugin[ 'NAME' ] . '"> ' . $plugin[ 'ID' ] . '<br />' );
								break;
						}				
					}
				}
			?>
			<hr />
			<input type="submit" name="submit" value="<?php echo( $lang_string[ 'submit_btn' ] ); ?>" />
		</form>
		<?php
		$entry_array[ 'entry' ] = ob_get_clean();
		
		echo( theme_staticentry( $entry_array ) );	
	}
?>
<?php 
	theme_pagelayout();
?>

</html>
