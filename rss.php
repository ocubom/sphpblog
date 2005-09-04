<?php
	// RSS feed support
	// (c) 2004 Javier Gutiérrez Chamorro (Guti), guti <at> ya <dot> com
	//
	// Simple PHP Version: 0.3.7b
	// RSS Version:   0.3.7b
	
	// Include Required Functions
	require('scripts/sb_functions.php');
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'index' );
	
	// Output Page
	generate_rss( @$_GET['n'] );
?>
