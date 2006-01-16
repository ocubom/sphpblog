<?php 

	

	// Simple PHP Blog

	// ------------------------------

	// Created by: Alexander Palmo, apalmo <at> bigevilbrain <dot> com

	//

	// RSS/PING/GZIP/EMAIL/SEARCH Code:

	// Contributed by: Javier Gutierrez, guti <at> ya <dot> com

	//

	

	// The Simple PHP Blog is released under the GNU Public License.

	//

	// You are free to use and modify the Simple PHP Blog. All changes 

	// must be uploaded to SourceForge.net under Simple PHP Blog or

	// emailed to apalmo <at> bigevilbrain <dot> com

	//

	// Credit should be give to the original authors and the Simple PHP Blog

	// logo graphic must appear on the site and link to the project

	// on SourceForge.net

	

	

	// Last version and update information.

	//

	global $sb_info;

	$sb_info[ 'version' ] = "0.4.6.4";

	$sb_info[ 'last_update' ] = '1/13/06';	

	

	// Error reporting should be set to 0 in production environments.

	//

	error_reporting( E_ALL ^ E_NOTICE );

	// error_reporting( 0 );

	

	//Remove timeout limit

	@set_time_limit( 0 );

	

	// Store "time" for benchmarking.

	//

	function getmicrotime() { 

		if ( version_compare( phpversion(), '5.0.0' ) == -1 ) {

			list($usec, $sec) = explode(' ', microtime()); 

			return ((float)$usec + (float)$sec); 

		}

		else {

			return( microtime( true ) );

		}

	}

	global $page_timestamp;

	$page_timestamp = getmicrotime();

	

	// Load all the other functions.

	require_once('scripts/sb_fileio.php');

	require_once('scripts/sb_config.php');

	require_once('scripts/sb_login.php');

	require_once('scripts/sb_theme.php');

	require_once('scripts/sb_formatting.php');

	require_once('scripts/sb_emoticons.php');

	require_once('scripts/sb_date.php');

	require_once('scripts/sb_communicate.php');

	require_once('scripts/sb_comments.php');

	require_once('scripts/sb_static.php');

	require_once('scripts/sb_utility.php');

	require_once('scripts/sb_menu.php');

	require_once('scripts/sb_search.php');

	require_once('scripts/sb_entry.php');

	require_once('scripts/sb_image.php');

	require_once('scripts/sb_display.php');

	require_once('scripts/sb_color.php'); // These functions don't get used

	require_once('scripts/sb_trackback.php');

	require_once('scripts/sb_feed.php');

	require_once('scripts/sb_categories.php');

	require_once('scripts/sb_forms.php');

	require_once('scripts/sb_texteditor.php');

	

?>
