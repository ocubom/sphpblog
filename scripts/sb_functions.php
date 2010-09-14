<?php
	// Simple PHP Blog is released under the GNU Public License.

	// Error reporting should be set to 0 in production environments.
	error_reporting( E_ALL ^ E_NOTICE );
	error_reporting( 0 );
		
	require_once('setup/setup.php');
	
	// Last version and update information.
	//
	global $sb_info;
	$sb_info[ 'version' ] = "0.6.0";
	$sb_info[ 'last_update' ] = '8/14/10';	
	
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
	
	require_once(SCRIPTS_DIR.'sb_fileio.php');
	require_once(SCRIPTS_DIR.'sb_config.php');
	require_once(SCRIPTS_DIR.'sb_login.php');
	require_once(SCRIPTS_DIR.'sb_theme.php');
	require_once(SCRIPTS_DIR.'sb_formatting.php');
	require_once(SCRIPTS_DIR.'sb_emoticons.php');
	require_once(SCRIPTS_DIR.'sb_date.php');
	require_once(SCRIPTS_DIR.'sb_communicate.php');
	require_once(SCRIPTS_DIR.'sb_comments.php');
	require_once(SCRIPTS_DIR.'sb_static.php');
	require_once(SCRIPTS_DIR.'sb_utility.php');
	require_once(SCRIPTS_DIR.'sb_menu.php');
	require_once(SCRIPTS_DIR.'sb_search.php');
	require_once(SCRIPTS_DIR.'sb_entry.php');
	require_once(SCRIPTS_DIR.'sb_image.php');
	require_once(SCRIPTS_DIR.'sb_display.php');
	require_once(SCRIPTS_DIR.'sb_color.php'); // These functions don't get used
	require_once(SCRIPTS_DIR.'sb_trackback.php');
	require_once(SCRIPTS_DIR.'sb_feed.php');
	require_once(SCRIPTS_DIR.'sb_categories.php');
	require_once(SCRIPTS_DIR.'sb_forms.php');
	require_once(SCRIPTS_DIR.'sb_texteditor.php');
	require_once(SCRIPTS_DIR.'sb_counter.php');
	require_once(SCRIPTS_DIR.'sb_blacklist.php');
	
	require_once(SCRIPTS_DIR.'sb_sidebar.php');
	
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
