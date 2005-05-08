<?php
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	if ( !session_id() ) {
		session_start();
	}

	read_config();

	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'contact' );
	$_SESSION[ 'capcha_contact' ] = sb_get_capcha();
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
	<script type="text/javascript">
	<!--
	function validate(theform) {
		if (theform.subject.value=="" || theform.comment.value==""  || theform.capcha.value=="") {
			alert("<?php echo( $lang_string[ 'form_error' ] ); ?>");
			return false;
		} else {
			return true;
		}
	}
	//-->
	</script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
</head>
<?php
	function page_content() {
		global $lang_string, $user_colors;

		?>

		<h2><?php echo( $lang_string[ 'title' ] ); ?></h2>
		<?php echo( $lang_string[ 'instructions' ] ); ?><p />

		<div class="hr"><hr /></div>

		<form accept-charset="<?php echo( $lang_string[ 'html_charset' ] ); ?>,iso-8859-1,utf-8" action="contact_cgi.php" method="POST" onSubmit="return validate(this)">

		<label for="name"><?php echo( $lang_string[ 'name' ] ); ?></label><br />
		<input type="text" name="name" id="name" size="40" /><br /><br />
		<label for="email"><?php echo( $lang_string[ 'email' ] ); ?></label><br />
		<input type="text" name="email" id="email"size="40" /><br /><br />
		<label for="subject"><?php echo( $lang_string[ 'subject' ] ); ?></label><br />
		<input type="text" name="subject" id="subject" size="40" /><br /><br />
		<label for="comment"><?php echo( $lang_string[ 'comment' ] ); ?></label><br />
		<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="comment" name="comment" rows="20" cols="50"></textarea><br /><br />
		<label for="capcha"><?php 
			if ( function_exists('imagecreate') ) {
				printf( $lang_string[ 'capcha' ], '<br /><img src="capcha.php?entry=contact" alt="CAPTCHA (Completely Automated Public Turing test to tell Computers and Humans Apart)" />' );
			}
			else {
				printf( $lang_string[ 'capcha' ], sb_str_to_ascii( $_SESSION[ 'capcha_contact' ] ) );
			}
		?></label><br />
		<input type="text" name="capcha" id="capcha" value="" maxlength="6" /><br /><br />
		<div class="hr"><hr /></div>

		<input type="submit" name="submit" id="submit" value="<?php echo( $lang_string[ 'submit_btn' ] ); ?>" />
		</form>

		<?php
	}
?>
<?php
	theme_pagelayout();
?>
</html>
