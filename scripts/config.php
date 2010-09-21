<?php
	// Root Directory
	if (!defined('ROOT_DIR')){
		define('ROOT_DIR', dirname(dirname(__file__)) . '/');
	}
	
	// Base URL
	// You need to set this manually if you are using symlinks, sorry, this is a PHP limitation
	// we will assume this is a directory off of your root
	if ($_SERVER['SCRIPT_FILENAME'] == realpath($_SERVER['SCRIPT_FILENAME'])) {
		define('BASEURL', preg_replace("/^" . str_replace("/", "\/", $_SERVER["DOCUMENT_ROOT"]) . "/", "", ROOT_DIR));
	} else {
		define('BASEURL', '/' . basename(dirname(dirname(__file__))) . '/');
	}

	// Variables
	// define('USE_MOD_REWRITE', false);
	
	// FOLDER LOCATIONS
	define('CONTENT_DIR',	ROOT_DIR.'content/');
	define('IMAGES_DIR',	ROOT_DIR.'images/');
	
	define('TEMPLATE_DIR',	ROOT_DIR.'templates/');
	
	define('CONFIG_DIR',	ROOT_DIR.'config/');
	define('CACHE_DIR',		CONFIG_DIR.'cache/');
	define('USER_DIR',		CONFIG_DIR.'users/');
	define('GROUP_DIR',		CONFIG_DIR.'groups/');
	
	define('CLASSES_DIR',	'classes/');
	
	
	
	// Server
	$sessionpath = session_save_path();
	if (strpos($sessionpath, ";") !== FALSE) {
		$sessionpath = substr($sessionpath, strpos ($sessionpath, ";")+1); // '5;/tmp'
	}
	define('SESSION_SAVE_PATH', $sessionpath); // Default is '/tmp'
?>
