<?php
	// rdf feed support
	// (c) 2004 Javier Gutiérrez Chamorro (Guti), guti <at> ya <dot> com
	//
	// Simple PHP Version: 0.3.7b
	// rdf Version:		0.3.7b

	// Include Required Functions
	require_once('scripts/sb_functions.php');

	read_config();

	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'index' );

	// Output Page
	generate_rdf( @$_GET[ 'n' ], @$_GET[ 'c' ] );
?>
