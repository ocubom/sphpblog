<?php

	require_once('scripts/sb_functions.php');

	global $logged_in;

	$logged_in = logged_in( false, true );

	

	read_config();

	

	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');

	sb_language( 'errorpage-nocookies' );

	

	// ---------------

	// POST PROCESSING

	// ---------------

	

	// ------------

	// PAGE CONTENT

	// ------------

	function page_content() {

		global $lang_string, $blog_config, $blog_theme;	

		// SUBJECT

		$entry_array = array();

		$entry_array[ 'subject' ] = $lang_string[ 'title' ];

		$entry_array[ 'entry' ] = '<table width="100%"  border="0"><tr><td><img src="themes/' . $blog_theme . '/images/error_icon.png" alt="" border="0" /></td>';

		$entry_array[ 'entry' ]  .= '<td>' . $lang_string[ 'errorline1' ] . '<br><br>';

		$entry_array[ 'entry' ]  .= $lang_string[ 'errorline2' ] . '<br><br>';

		$entry_array[ 'entry' ]  .= $lang_string[ 'clientid' ] . @gethostbyaddr(getIP()) . '</td></tr></table>';

	

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

	

	<title><?php echo($blog_config[ 'blog_title' ]); ?></title>

</head>

	<?php 

		// ------------

		// BEGIN OUTPUT

		// ------------

		theme_pagelayout();

	?>

</html>
