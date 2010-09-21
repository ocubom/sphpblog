<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	
	read_config();
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'search' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	global $search_string;
	$search_string = $_GET[ 'q' ];
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config, $search_string;
		$entry_array = array();
		$search = new Search();

		if (empty($search_string)) {
			// search start page
			$entry_array[ 'subject' ] = $search->getTitle();
		} else {	
			// SUBJECT
			$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		}
		
		// PAGE CONTENT BEGIN
		ob_start();

?>
		<input style="float: right" type="button" value="Add to Search Bar" onclick='window.external.AddSearchProvider("<?php echo dirname(sb_curPageURL()) ?>/plugins/search.php");' />
<?php
		print $search->getContent();

		if (!empty($search_string)) {			
		echo ( str_replace( '%string', @htmlspecialchars( $search_string, ENT_QUOTES, $GLOBALS['lang_string']['php_charset'] ), $GLOBALS['lang_string']['instructions'] ) . '<br />' );
		
		echo( '<hr />' );

		$output = search( $search_string, @$_GET[ 'n' ] );
		
		if ( $output ) {
			echo ( $output );
		} else {
			echo( $GLOBALS['lang_string']['not_found'] );
		}
		}
		
		// PAGE CONTENT END
		$entry_array[ 'entry' ] = ob_get_clean();
		
		// THEME ENTRY
		echo( theme_staticentry( $entry_array ) );	
	}

	// ----
	// HTML
	// ----
	
	// Main Page Template
	$page_template = new Template(TEMPLATE_DIR.'layouts/index.tpl');
	
	// Meta Data
	get_init_code($page_template);
	
	// Page Title
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '.$GLOBALS['lang_string']['title']);
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
