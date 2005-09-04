<?php 
	require('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'upload_img' );
	
	if ( $_FILES['userfile']['error'] == 0 ) {
		if (!file_exists('images')) {
			$oldumask = umask(0);
			$ok = mkdir('images', 0777 );
			umask($oldumask);
		}
					
		$uploaddir = 'images/';
		$uploadfile = $uploaddir . preg_replace("/ /","_",$_FILES['userfile']['name']);
		
		$no = array( "exe", "pl", "php", "php3", "php4", "php5", "phps", "asp", "cgi", "html", "htm" );
		// As proposed by Joel Alexandre Sept 3, 2005
		for( $i = 0; $i < 10; $i++ ) {
  			if( strpos( $uploadfile, $no[$i] ) >= 0 ) {
    			echo "That filetype is not allowed";
    			exit;
   			}
 		}

		if ( move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile ) ) {
			$ok = true;
		} else {
			$ok = false;
		}
	} else {
		$ok = false;
	}
	
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
