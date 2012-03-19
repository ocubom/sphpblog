<?php
	// Simple PHP Blog is released under the GNU Public License.
	// Error reporting should be set to 0 in production environments.
	error_reporting( E_ALL ^ E_NOTICE );
	error_reporting( 0 );

	// Root Directory
	if (!defined('ROOT_DIR')){
		define('ROOT_DIR', dirname(dirname(__file__)) . '/');
	}
	
	// Base URL
	// You need to set this manually if you are using symlinks, sorry, this is a PHP limitation
	// we will assume this is a directory off of your root

function getbaseurl($root_dir, $docroot) {
	if ($_SERVER['SCRIPT_FILENAME'] == realpath($_SERVER['SCRIPT_FILENAME'])) {
                $delimiter = "/";
                if (strpos($docroot, "\\") !== FALSE) {
			$delimiter = "\\";
		}
                $pattern = str_replace($delimiter, "\/", $docroot);
		//print $pattern . "<br>";
                $root = str_replace("\\", "/", $root_dir);

		return preg_replace("/^" . $pattern . "/", "", $root);
	} else {
		return '/' . basename(dirname(dirname(__file__))) . '/';
	}
	return "";
}

        // SESSION LOCATION
        $sessionpath = session_save_path();
        if (strpos($sessionpath, ";") !== FALSE) {
                $sessionpath = substr($sessionpath, strpos ($sessionpath, ";")+1); // '5;/tmp'
        }
        define('SESSION_SAVE_PATH', $sessionpath); // Default is '/tmp'

/* for debugging
print getbaseurl(ROOT_DIR, $_SERVER["DOCUMENT_ROOT"]);
print "<br>";
print getbaseurl("D:\\Inetpub\\wwwroot\\blog\\", "D:\\Inetpub\\wwwroot");
print "<br>";
*/
	define('BASEURL', getbaseurl(ROOT_DIR, $_SERVER["DOCUMENT_ROOT"]));

	// Variables
	// define('USE_MOD_REWRITE', false);

	define('BLOG_MASK', 0775);
	
	// FOLDER LOCATIONS
	define('CONTENT_DIR',	ROOT_DIR.'content/');
	define('IMAGES_DIR',	ROOT_DIR.'images/');
	
	define('TEMPLATE_DIR',	ROOT_DIR.'templates/');
	
	define('CONFIG_DIR',	ROOT_DIR.'config/');
	define('CACHE_DIR',		CONFIG_DIR.'cache/');
	define('USER_DIR',		CONFIG_DIR.'users/');
	define('GROUP_DIR',		CONFIG_DIR.'groups/');
	
	define('CLASSES_DIR',	'classes/');
	
        require_once(CLASSES_DIR.'fileio.php');
        require_once(CLASSES_DIR.'arrays.php');
        require_once(CLASSES_DIR.'template.php');
        require_once(CLASSES_DIR.'html.php');
        require_once(CLASSES_DIR.'container.php');
        require_once(CLASSES_DIR.'configuration.php');
        require_once(CLASSES_DIR.'user.php');
        require_once(CLASSES_DIR.'group.php');

       // Read configuration file
        require_once('sb_config.php');
        read_config();

        require_once(ROOT_DIR . "/languages/sb_lang.php");
        // Load language strings
        $lang = $GLOBALS['blog_config']->getTag('BLOG_LANGUAGE');
        sb_import_lang($lang);

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
        require_once('sb_feed.php');
        require_once('sb_categories.php');
        require_once('sb_forms.php');
        require_once('sb_texteditor.php');
        require_once('sb_counter.php');
        require_once('sb_blacklist.php');

        require_once('sb_sidebar.php');

	

        // Last version and update information.
        //
        global $sb_info;
        $sb_info[ 'version' ] = "0.7.0";
        $sb_info[ 'last_update' ] = '11/18/10';

        //Remove timeout limit
        //@set_time_limit( 0 );

        // Store "time" for benchmarking.
        function getmicrotime() {
                return( microtime( true ) );
        }

        global $page_timestamp;
        $page_timestamp = getmicrotime();

?>
