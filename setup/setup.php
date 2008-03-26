<?php
	// Root Directory
	if (!defined('ROOT_DIR')){
		define('ROOT_DIR', '');
	}
	
	// Database
	// define(MYSQL_USER, '');
	// define(MYSQL_PASSWORD, '');
	// define(MYSQL_DATABASE, '');
	
	// Base URL
	define('BASEURL', '');
	
	// Variables
	// define('USE_MOD_REWRITE', false);
	
	// FOLDER LOCATIONS
	define('CONTENT_DIR',	ROOT_DIR.'content/');
	define('IMAGES_DIR',	ROOT_DIR.'images/');
	define('TEMPLATE_DIR',	ROOT_DIR.'templates/');
	define('CONFIG_DIR',	ROOT_DIR.'config/');
	define('CACHE_DIR',		CONFIG_DIR.'cache/');
	define('SCRIPTS_DIR',	ROOT_DIR.'scripts/');
	define('CLASSES_DIR',	SCRIPTS_DIR.'classes/');
	
	// Server
	$sessionpath = session_save_path();
	if (strpos($sessionpath, ";") !== FALSE) {
		$sessionpath = substr($sessionpath, strpos ($sessionpath, ";")+1); // '5;/tmp'
	}
	define('SESSION_SAVE_PATH', $sessionpath); // Default is '/tmp'
?>
