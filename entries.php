<?php
	require_once('scripts/sb_functions.php');
	$logged_in = logged_in( false, true );

	read_config();

	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'entries' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=<?php echo( $lang_string['html_charset'] ); ?>'>
	<link rel=stylesheet type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css">
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="javascript" src="scripts/sb_javascript.js" type="text/javascript"></script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?></title>
</head>
<?php
function page_content()
{
	global $lang_string, $user_colors;
	echo ( '<h2>' . $lang_string['title'] . '</h2>' );
	echo ( $lang_string['instructions'] . '<br />' );
	$output = entries( );

	if ( $output ) {
		echo ( $output );
	}
	else {
		echo( $lang_string['no_entries'] );
	}
}
theme_pagelayout();
?>
</html>
