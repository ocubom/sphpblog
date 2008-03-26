<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	if ( !session_id() ) {
		session_start();
	}

	read_config();

	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'comments' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	$admin = $_SESSION[ 'fulladmin' ];
	if (( $logged_in == true) and ( $admin == 'no' ) and ( CheckUserSecurity( $_SESSION[ 'username' ], 'MOD' ) == false ) )
		{ redirect_to_url( 'index.php' ); }

	// Verify information being passed
	global $ok;
	$ok = false;
	if (isset( $_GET[ "ban" ] ) ) {
		$ok = add_to_blacklist ( $_GET[ "ban" ] );
	} else {
		$ok = $GLOBALS['lang_string']['error_noip'];
	}
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config, $ok;
	
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		if ( $ok !== true ) {
			echo $GLOBALS['lang_string']['error_ban'] . $ok . '<p />';
		} else {
			echo $GLOBALS['lang_string']['success_ban1'] . '(' . $_GET[ "ban" ] . ')' . $GLOBALS['lang_string']['success_ban2'] . '<p />';
		}
		echo( '<a href="index.php">' . $GLOBALS['lang_string']['home'] . '</a>' );
		
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
	if ( $GLOBALS['blog_config'][ 'blog_comments_popup' ] == 1 ) {
		theme_popuplayout();
	} else {
		theme_pagelayout();
	}
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
