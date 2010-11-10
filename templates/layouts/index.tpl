<?xml version="1.0" encoding="{HTML_CHARSET}" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{PAGE_TITLE}</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset={HTML_CHARSET}" />
	
	<!-- Meta Data -->
	<meta name="generator" content="Simple PHP Blog" />
	<link rel="alternate" type="application/rss+xml" title="Get RSS 2.0 Feed" href="rss.php{CATEGORY_ID}" />
	<link rel="alternate" type="application/rdf+xml" title="Get RDF 1.0 Feed" href="rdf.php{CATEGORY_ID}" />
	<link rel="alternate" type="application/atom+xml" title="Get Atom 0.3 Feed" href="atom.php{CATEGORY_ID}" />
	<link rel="search" type="application/opensearchdescription+xml" title="{BLOG_TITLE}" href="{SEARCH_URI}" />
	
	<!-- Meta Data -->
	<!-- http://dublincore.org/documents/dces/ -->
	<meta name="dc.title"       content="{BLOG_TITLE}" />
	<meta name="author"         content="{BLOG_AUTHOR}" />
	<meta name="dc.creator"     content="{BLOG_AUTHOR}" />
	<meta name="dc.subject"     content="{INFO_KEYWORDS}" />
	<meta name="keywords"       content="{INFO_KEYWORDS}" />
	<meta name="dc.description" content="{INFO_DESCRIPTION}" />
	<meta name="description"    content="{INFO_DESCRIPTION}" />
	<meta name="dc.type"        content="weblog" />
	<meta name="dc.type"        content="blog" />
	<meta name="resource-type"  content="document" />
	<meta name="dc.format"      scheme="IMT" content="text/html" />
	<meta name="dc.source"      scheme="URI" content="{URI}" />
	<meta name="dc.language"    scheme="RFC1766" content="{LOCALE}" />
	<meta name="dc.coverage"    content="global" />
	<meta name="distribution"   content="GLOBAL" />
	<meta name="dc.rights"      content="{INFO_COPYRIGHT}" />
	<meta name="copyright"      content="{INFO_COPYRIGHT}" />
	
	<!-- Robots -->
	<meta name="robots" content="ALL,INDEX,FOLLOW,ARCHIVE" />
	<meta name="revisit-after" content="7 days" />
	{META}
	
	<!-- Fav Icon -->
	<link rel="shortcut icon" href="interface/favicon.ico" />
	
	<link rel="stylesheet" type="text/css" media="all" href="themes/common.css" />
	<link rel="stylesheet" type="text/css" media="all" href="themes/{BLOG_THEME}/user_style.php" />
	<link rel="stylesheet" type="text/css" media="all" href="themes/{BLOG_THEME}/style.css" />
	<link rel="stylesheet" type="text/css" media="print" href="themes/print.css" />
	{CSS}
	
	{JAVASCRIPT}
	
</head>
{BODY}
</html>
