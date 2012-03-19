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
	$key_array = array( 'lDate_slotOne',
						'lDate_slotOneSeparator',
						'lDate_slotTwo',
						'lDate_slotTwoSeparator',
						'lDate_slotThree',
						'lDate_slotThreeSeparator',
						'lDate_slotFour',
						'lDate_slotFourSeparator',
						'lDate_leadZeroDay',
						'sDate_order',
						'sDate_separator',
						'sDate_leadZeroDay',
						'sDate_leadZeroMonth',
						'sDate_fullYear',
						'time_clockFormat',
						'time_leadZeroHour',
						'time_AM',
						'time_PM',
						'time_separator',
						'eFormat_slotOne',
						'eFormat_separator',
						'eFormat_slotTwo',
						'server_offset',
						'mFormat' );
	
	$array = array();
	for ( $i = 0; $i < count( $key_array ); $i++ ) {
		if (in_array($key_array[$i], array('time_AM', 'time_PM'))) {
			array_push( $array, str_replace( '|', ':', htmlspecialchars($_POST[ $key_array[$i] ]) ) );			
		} else {
			array_push( $array, str_replace( '|', ':', $_POST[ $key_array[$i] ] ) );
		}
	}
	
	global $ok;
	$ok = write_dateFormat( $array );
	
	if ( $ok === true ) {
		redirect_to_url( 'index.php' );
	}
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config, $ok;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = _sb('options_title');
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		if ( $ok !== true ) {
			echo( _sb('options_error') . $ok . '<p />' );
		} else {
			echo( _sb('options_success') . '<p />' );
		}
		
		echo( '<a href="index.php">' . _sb('home') . '</a>' );
		
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
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '. _sb('options_title'));
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
