<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	// require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	// sb_language( 'index' );
	
	// CGI Functions
	$pages = array( 'add', 'add_static', 'add_block', 'add_link', 'categories', 'colors', 'comments', 'delete', 'delete_static', 'image_list', 'info', 'index', 'static', 'rating', 'login', 'logout', 'forms', 'set_login', 'install00', 'install01', 'install02', 'install03', 'setup', 'trackbacks ', 'options', 'themes', 'upload_img', 'search', 'contact', 'stats' );
	if ( array_key_exists( 'blog_language1', $_POST ) ) {
	
		// Store all the data from language 1
		require_once('languages/' . $_POST[ 'blog_language1' ] . '/strings.php');
		
		$result_array = Array();
		for ( $i=0; $i < count( $pages ); $i++ ) {
			$lang_string = NULL;
			sb_language($pages[ $i ]);
			array_push( $result_array, implode( ',', array_keys( $lang_string ) ) );
		}
		$str = implode( '|', $result_array );
		
		sb_write_file( 'config/temp_language1.txt', $str );
		redirect_to_url( 'languages_cgi.php?store_data=1&lang2=' . $_POST[ 'blog_language2' ] . '&lang1=' . $_POST[ 'blog_language1' ] );
		
	} else {
		if ( array_key_exists( 'store_data', $_GET ) ) {
		
			// Store all the data from language 2
			require_once('languages/' . $_GET[ 'lang2' ] . '/strings.php');
			
			$result_array = Array();
			for ( $i=0; $i < count( $pages ); $i++ ) {
				$lang_string = NULL;
				sb_language($pages[ $i ]);
				array_push( $result_array, implode( ',', array_keys( $lang_string ) ) );
			}
			$str = implode( '|', $result_array );
			
			sb_write_file( 'config/temp_language2.txt', $str );
			redirect_to_url( 'languages_cgi.php?display_results=1&lang2=' . $_GET[ 'lang2' ] . '&lang1=' . $_GET[ 'lang1' ] );
			
		} else {
		
			// Display the results (see below in the page_content() function...)
			require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
			sb_language( 'index' );
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string[ 'html_charset' ] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="JavaScript" src="scripts/sb_javascript.js"></script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors;
		
		$lang_string[ 'title' ] = "Results";
		$lang_string[ 'instructions' ] = "Here are your results.";
		 
		echo( "<h2>" . $lang_string[ 'title' ] . "</h2>" );
		echo( $lang_string[ 'instructions' ] . "<p />" );
		
		?>
		<hr noshade size="1" color=#<?php echo( $user_colors[ 'inner_border_color' ] ); ?>>
		
		<?php 
		if ( array_key_exists( "display_results", $_GET ) ) {
		
			// Recall all the data
			$lang1_string = sb_read_file( "config/temp_language1.txt" );
			$lang2_string = sb_read_file( "config/temp_language2.txt" );
			
			$lang1_array = explode( "|", $lang1_string );
			$lang2_array = explode( "|", $lang2_string );
			
			$pages = array( "add", "add_static", "add_block", "add_link", "categories", "colors", "comments", "delete", "delete_static", "image_list", "info", "index", "static", "rating", "login", "logout", "forms", "set_login", "install00", "install01", "install02", "install03", "setup", "trackbacks ", "options", "themes", "upload_img", "search", "contact", "stats" );
			// Compare
			for ( $i = 0; $i < count( $pages ); $i++ ) {
				$lang1_keys = explode( ",", $lang1_array[ $i ] );
				$lang2_keys = explode( ",", $lang2_array[ $i ] );
				
				echo( "Verifying <b>\"" . $pages[ $i ] . "\"</b> ( " . count( $lang1_keys ) . " items / " . count( $lang1_keys ) . " items )" );
				$ok = true;
				for ( $j = 0; $j < count( $lang1_keys ); $j++ ) {
					if ( in_array( $lang1_keys[ $j ], $lang2_keys ) ) {
						// Key is in the array
					} else {
						// Key is not in the array
						echo( "\n<br/>&nbsp;&nbsp;Missing <b>\"" . $lang1_keys[ $j ] . "\"</b> from <b>\"" . $_GET[ "lang2" ] . "\"</b>" );
						$ok = false;
					}
				}
				
				for ( $j = 0; $j < count( $lang2_keys ); $j++ ) {
					if ( in_array( $lang2_keys[ $j ], $lang1_keys ) ) {
						// Key is in the array
					} else {
						// Key is not in the array
						echo( "\n<br/>&nbsp;&nbsp;Missing <b>\"" . $lang2_keys[ $j ] . "\"</b> from <b>\"" . $_GET[ "lang1" ] . "\"</b>" );
						$ok = false;
					}
				}
				
				if ( $ok ) {
					echo( " <b>(ok)</b>\n" );
				}
				
				echo( "<br /><br />\n" );
				
			}
		}
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
