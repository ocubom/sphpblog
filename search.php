<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'search' );
	
	global $search_string;
	$search_string = $_GET[ 'q' ];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string[ 'html_charset' ] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="javascript" src="scripts/sb_javascript.js" type="text/javascript"></script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors, $search_string;
		
		echo ( '<h2>' . $lang_string[ 'title' ] . '</h2>' );
		echo ( str_replace( '%string', $search_string, $lang_string[ 'instructions' ] ) . '<br />' );
		
		echo( '<div class="hr"><hr /></div>' );
			
		$output = search( $search_string, @$_GET[ 'n' ] );
		
		if ( $output ) {
			echo ( $output );
		} else {
			echo( $lang_string[ 'not_found' ] );
		}
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
