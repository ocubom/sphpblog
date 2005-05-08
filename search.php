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
	<meta name="dc.source"      scheme="URI" content="<?php if ( ( dirname($_SERVER[ 'PHP_SELF' ]) == '\\' || dirname($_SERVER[ 'PHP_SELF' ]) == '/' ) ) { echo( 'http://'.$_SERVER[ 'HTTP_HOST' ].'/index.php' ); } else { echo( 'http://'.$_SERVER[ 'HTTP_HOST' ].dirname($_SERVER[ 'PHP_SELF' ]).'/index.php' ); } ?>" />
	<meta name="dc.language"    scheme="RFC1766" content="<?php echo( str_replace('_', '-', $lang_string[ 'locale' ]) ); ?>" />
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
