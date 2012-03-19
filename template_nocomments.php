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
    $entry_array[ 'subject' ] = _sb('index_title');
    // $entry_array[ 'subject' ] = 'Subject Line';
    // $entry_array[ 'entry' ] = 'Body Content<br /><a href="http://www.google.com/">Google</a>';
    
    // PAGE CONTENT BEGIN
    ob_start();
    ?>
    Body Content
  
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
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '. _sb('index_title'));
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
