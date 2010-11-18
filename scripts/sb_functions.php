<?php
	// Simple PHP Blog is released under the GNU Public License.

	// Error reporting should be set to 0 in production environments.
	//error_reporting( E_ALL ^ E_NOTICE );
	error_reporting( 0 );

	require_once('config.php');
	
	// Last version and update information.
	//
	global $sb_info;
	$sb_info[ 'version' ] = "0.7.0";
	$sb_info[ 'last_update' ] = '11/18/10';	
	
	//Remove timeout limit
	@set_time_limit( 0 );
	
	// Store "time" for benchmarking.
	function getmicrotime() { 
		return( microtime( true ) );
	}

	global $page_timestamp;
	$page_timestamp = getmicrotime();
	
	// SESSION LOCATION
	$sessionpath = session_save_path();
	if (strpos($sessionpath, ";") !== FALSE) {
		$sessionpath = substr($sessionpath, strpos ($sessionpath, ";")+1); // '5;/tmp'
	}
	define('SESSION_SAVE_PATH', $sessionpath); // Default is '/tmp'
	
	// Load all the other functions.
	
	require_once('sb_fileio.php');
	require_once('sb_config.php');
	require_once('sb_login.php');
	require_once('sb_theme.php');
	require_once('sb_formatting.php');
	require_once('sb_emoticons.php');
	require_once('sb_date.php');
	require_once('sb_communicate.php');
	require_once('sb_comments.php');
	require_once('sb_static.php');
	require_once('sb_utility.php');
	require_once('sb_menu.php');
	require_once('sb_search.php');
	require_once('sb_entry.php');
	require_once('sb_image.php');
	require_once('sb_display.php');
	require_once('sb_color.php'); // These functions don't get used
	require_once('sb_trackback.php');
	require_once('sb_feed.php');
	require_once('sb_categories.php');
	require_once('sb_forms.php');
	require_once('sb_texteditor.php');
	require_once('sb_counter.php');
	require_once('sb_blacklist.php');
	
	require_once('sb_sidebar.php');
	
	require_once(CLASSES_DIR.'fileio.php');
	require_once(CLASSES_DIR.'arrays.php');
	require_once(CLASSES_DIR.'template.php');
	require_once(CLASSES_DIR.'html.php');
	require_once(CLASSES_DIR.'container.php');
	require_once(CLASSES_DIR.'configuration.php');
	require_once(CLASSES_DIR.'user.php');
	require_once(CLASSES_DIR.'group.php');
	
	// require_once(CLASSES_DIR.'login.php');
	// require_once(CLASSES_DIR.'template.php');
	// require_once(CLASSES_DIR.'utility.php');
	// require_once(CLASSES_DIR.'html.php');
	// require_once(CLASSES_DIR.'logging.php');
	// require_once(CLASSES_DIR.'datawrapper.php');
	// require_once(CLASSES_DIR.'datacontainer.php');
	// require_once(CLASSES_DIR.'posts.php');
	// require_once(CLASSES_DIR.'entry.php');
?>
