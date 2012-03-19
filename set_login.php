<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
	global $blog_config;
	
	// SUBJECT
	$entry_array = array();
	$entry_array[ 'subject' ] = _sb('set_login_title');
	
	// PAGE CONTENT
	$entry_array[ 'entry' ] = _sb('explanation');
	
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
				alert("<?php echo( _sb('set_login_form_error') ); ?>");
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
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '. _sb('set_login_title'));
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
