<?php 

	require('scripts/sb_functions.php');

	global $logged_in;

	$logged_in = logged_in( true, true );

	

	read_config();

	

	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');

	sb_language( 'options' );

	

	$key_array = array( 'lDate_slotOne',

						'lDate_slotOneSeparator',

						'lDate_slotTwo',

						'lDate_slotTwoSeparator',

						'lDate_slotThree',

						'lDate_slotThreeSeparator',

						'lDate_slotFour',

						'lDate_slotFourSeparator',

						'lDate_leadZeroDay',

						'sDate_order',

						'sDate_separator',

						'sDate_leadZeroDay',

						'sDate_leadZeroMonth',

						'sDate_fullYear',

						'time_clockFormat',

						'time_leadZeroHour',

						'time_AM',

						'time_PM',

						'time_separator',

						'eFormat_slotOne',

						'eFormat_separator',

						'eFormat_slotTwo',

						'server_offset',

						'mFormat' );

	

	$array = array();

	for ( $i = 0; $i < count( $key_array ); $i++ ) {

		array_push( $array, str_replace( '|', ':', $_POST[ $key_array[$i] ] ) );

	}

	

	$ok = write_dateFormat( $array );

	

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

