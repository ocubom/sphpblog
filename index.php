<?php 
	require('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'index' );
	
		
	// Verify information being passed
	$temp_year = NULL;
	if ( array_key_exists( "y", $_GET ) ) {
		if ( strpos( $_GET[ "y" ], array( "/", ".", "\\", "%" ) ) === false && strlen( $_GET["y"] ) == 2 ) {
			$temp_year = $_GET[ "y" ];
		}
	}
	$temp_month = NULL;
	if ( array_key_exists( "m", $_GET ) ) {
		if ( strpos( $_GET[ "m" ], array( "/", ".", "\\", "%" ) ) === false && strlen( $_GET["m"] ) == 2 ) {
			$temp_month = $_GET[ "m" ];
		}
	}
	$temp_day = NULL;
	if ( array_key_exists( "d", $_GET ) ) {
		if ( strpos( $_GET[ "d" ], array( "/", ".", "\\", "%" ) ) === false && strlen( $_GET["d"] ) == 2 ) {
			$temp_day = $_GET[ "d" ];
		}
	}
	$temp_entry = NULL;
	if ( array_key_exists( "entry", $_GET ) ) {
		if ( strpos( $_GET[ "entry" ], array( "/", ".", "\\", "%" ) ) === false && strlen( $_GET["entry"] ) == 18 ) {
			$temp_entry = $_GET[ "entry" ];
		}
	}
	
	if ( !isset( $temp_year ) || !isset( $temp_month ) ) {
		// Set the $month, $year, $day globals...
		get_latest_entry();
	} else {
		// Grab $year and $month from URL
		global $month, $year;
		$year = $temp_year;
		$month = $temp_month;
	}
	
	if ( isset( $temp_day ) ) {
		global $day;
		$day = $temp_day;
	}
	
	if ( isset( $temp_entry) ) {
		global $temp_entry;
		$entry = $temp_entry;
	}
	
	if ( array_key_exists( "category", $_GET ) ) {
		global $category;
		$category = $_GET["category"];
	}
	
	global $lang_string, $sb_info, $blog_config;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string['html_charset'] ); ?>" />
	 
	<!-- Meta Data -->
	<?php global $lang_string, $sb_info, $blog_config; ?>
	<meta name="generator" content="Simple PHP Blog <?php echo( $sb_info[ 'version' ] );?>" />
	<link rel="alternate" type="application/rss+xml" title="Get RSS 2.0 Feed" href="rss.php" />
	<link rel="alternate" type="application/rdf+xml" title="Get RDF 1.0 Feed" href="rdf.php" />
	<link rel="alternate" type="application/atom+xml" title="Get Atom 0.3 Feed" href="atom.php" />
	
	<!-- Meta Data -->
	<!-- http://dublincore.org/documents/dces/ -->
	<meta name="dc.title"       content="<?php echo( $blog_config[ 'blog_title' ] ); ?>" />
	<meta name="author"         content="<?php echo( $blog_config[ 'blog_author' ] ); ?>" />
	<meta name="dc.creator"     content="<?php echo( $blog_config[ 'blog_author' ] ); ?>" />
	<meta name="dc.subject"     content="<?php echo( $blog_config[ 'info_keywords' ] ); ?>" />
	<meta name="keywords"       content="<?php echo( $blog_config[ 'info_keywords' ] ); ?>" />
	<meta name="dc.description" content="<?php echo( $blog_config[ 'info_description' ] ); ?>" />
	<meta name="description"    content="<?php echo( $blog_config[ 'info_description' ] ); ?>" />
	<meta name="dc.type"        content="weblog" />
	<meta name="dc.type"        content="blog" />
	<meta name="resource-type"  content="document" />
	<meta name="dc.format"      scheme="IMT" content="text/html" />
	<meta name="dc.source"      scheme="URI" content="<?php if ( ( dirname($_SERVER['PHP_SELF']) == '\\' || dirname($_SERVER['PHP_SELF']) == '/' ) ) { echo( 'http://'.$_SERVER['HTTP_HOST'].'/index.php' ); } else { echo( 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/index.php' ); } ?>" />
	<meta name="dc.language"    scheme="RFC1766" content="<?php echo( str_replace('_', '-', $lang_string['locale']) ); ?>" />
	<meta name="dc.coverage"    content="global" />
	<meta name="distribution"   content="GLOBAL" /> 
	<meta name="dc.rights"      content="<?php echo( $blog_config[ 'info_copyright' ] ); ?>" />
	<meta name="copyright"      content="<?php echo( $blog_config[ 'info_copyright' ] ); ?>" />
	
	<!-- Robots -->
	<meta name="robots" content="ALL,INDEX,FOLLOW,ARCHIVE" />
	<meta name="revisit-after" content="7 days" />
	
	<!-- Fav Icon -->
	<link rel="shortcut icon" href="interface/favicon.ico" />
	
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="JavaScript" src="scripts/sb_javascript.js"></script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?></title>
</head>
<?php 
	function page_content() {
		global $month, $year, $day, $category, $logged_in, $entry;
		
		echo ( read_entries( $month, $year, $day, $logged_in, $entry, $category ) );
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
