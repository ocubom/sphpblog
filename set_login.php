<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'set_login' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
	global $lang_string, $blog_config;
	
	// SUBJECT
	$entry_array = array();
	$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
	
	// PAGE CONTENT
	$entry_array[ 'entry' ] = $lang_string['explanation'];
	
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
	
	// Extra Javascript
	ob_start();
?>
	<script type="text/javascript">
		// <!--
		function validate(theform) {
			if (theform.user.value=="" || theform.pass.value=="") {
				alert("<?php echo( $GLOBALS['lang_string']['form_error'] ); ?>");
				return false;
			} else {
				return true;
			}
		}
		// -->
	</script>
<?php
	$page_template->appendTag('{JAVASCRIPT}', ob_get_clean());
	
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
