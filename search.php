<?php 
	require('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'search' );
	
	global $search_string;
	$search_string = $_GET['q'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string['html_charset'] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="JavaScript" src="scripts/sb_javascript.js"></script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors, $search_string;
		
		echo ( '<h2>' . $lang_string['title'] . '</h2>' );
		echo ( str_replace( '%string', $search_string, $lang_string['instructions'] ) . '<br />' );
		
		echo( '<hr noshade size="1" color=#' . $user_colors['inner_border_color'] . '>' );
			
		$output = search( $search_string );
		
		if ( $output ) {
			echo ( $output );
		} else {
			echo( $lang_string['not_found'] );
		}
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
