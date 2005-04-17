<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, false );
	
	read_config();
	
	global $blog_config;
	if ( isset( $_POST[ 'blog_language' ] ) ) {
		$blog_config[ 'blog_language' ] = $_POST[ 'blog_language' ];
	} else if ( isset( $_GET[ 'blog_language' ] ) ) {	
		$blog_config[ 'blog_language' ] = $_GET[ 'blog_language' ];
	}
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'install02' );
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
		global $lang_string, $user_colors, $blog_config;
			
		echo( '<h2>' . $lang_string[ 'title' ] . '</h2>' );
		echo( $lang_string[ 'instructions' ] . '<p />' );
		
		echo( '<div class="hr"><hr /></div>' );
		
		$result = create_folder( 'config' );
		$result = $result + create_folder( 'content' );
		$result = $result + create_folder( 'images' );
		
		$result = $result + initialize_blocks();

		echo( '<div class="hr"><hr /></div>' );
		
		if ( $result < 0 ) {
			echo( $lang_string[ 'help' ] . '<p />' );
			echo( '<a href="install02.php?blog_language=' . $blog_config[ 'blog_language' ] . '">' . $lang_string[ 'try_again' ] . '</a><p />' );
		} else {
			echo( $lang_string[ 'success' ] . '<p />' );
			echo( '<a href="install03.php?blog_language=' . $blog_config[ 'blog_language' ] . '">' . $lang_string[ 'continue' ] . '</a><p />' );
		}
		
	}
	function create_folder( $dir ) {
		global $lang_string;
		
		echo( '<b>' . $dir . '</b> - ' );
		
		if ( !file_exists( $dir ) ) {
			// Creating Folder
			$oldumask = umask( 0 );
			$ok = @mkdir( $dir, 0777 );
			umask( $oldumask );
			
			if ( !file_exists( $dir ) ) {
				// Failed
				echo( $lang_string[ 'folder_failed' ] . '<br />' );
				return( -1 );
				
			} else {
				// Worked
				echo( $lang_string[ 'folder_success' ] . '<br />' );
				return( 0 );
			}
			
		} else {
			// Folder Already Exists
			echo( $lang_string[ 'folder_exists' ] . '<br />' );
			return( 0 );
		}
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
