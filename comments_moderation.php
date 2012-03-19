<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );

	// Create a session for the anti-spam cookie
	if ( !session_id() ) {
		session_start();
	}

	// ---------------
	// POST PROCESSING
	// ---------------
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $user_colors, $logged_in, $theme_vars, $blog_theme, $blog_config;

		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = _sb('comment_moderation_title');

		// PAGE CONTENT BEGIN
		ob_start(); ?>

		<?php echo( _sb('comment_moderation_instructions') ); ?><p />

		<?php echo( read_unmodded_comments($logged_in) ); ?><p />

		<?php
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
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '.get_entry_title(substr($_GET['entry'], 5, 2), substr($_GET['entry'], 7, 2), $_GET['entry']));
	
	// Theme Layout
	ob_start();	
	theme_pagelayout();
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
