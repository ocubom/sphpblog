<?php 
	require('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'rating' );
	
	if ( array_key_exists( 'y', $_GET ) && array_key_exists( 'm', $_GET ) && array_key_exists( 'entry', $_GET ) && array_key_exists( 'rating', $_GET ) ) {
		$rating = intval( $_GET['rating'] );
		if ( $rating >= 1 && $rating <= 5 ) {		
			if ( strpos( $_GET[ "y" ], array( "/", ".", "\\", "%" ) ) === false && strlen( $_GET["y"] ) == 2 &&
					strpos( $_GET[ "m" ], array( "/", ".", "\\", "%" ) ) === false && strlen( $_GET["m"] ) == 2 &&
					strpos( $_GET[ "entry" ], array( "/", ".", "\\", "%" ) ) === false && strlen( $_GET["entry"] ) == 18 ) {
				$y = $_GET['y'];
				$m = $_GET['m'];
				$entry = $_GET['entry'];
				if ( entry_exists( $y, $m, $entry ) ) {
					write_rating( $y, $m, $entry, $rating );
				}
			}
		}
	}
	
	// Even if it failed to store the vote, we still want to return to the home page.
	$ok = true;
	if ( $ok === true ) {
		redirect_to_url( "index.php" );
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string['html_charset'] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="JavaScript" src="scripts/sb_javascript.js"></script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string['title'] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors;
		
		if ( $ok !== true ) {
			echo( $lang_string['error'] . $ok . '<p />' );
		}
		
		echo( '<a href="index.php">' . $lang_string['home'] . '</a><br /><br />' );
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
