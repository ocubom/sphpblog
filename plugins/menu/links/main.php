<?php
	function menu_plugin_links_init () {
		// Initialization Code
	}
	
	function menu_plugin_links_enable () {
		// Enable Menu Plugin
	}
	
	function menu_plugin_links_disable () {
		// Disable Menu Plugin
	}
	
	function  menu_plugin_links_display () {
		// Display Code
		
		global $lang_string, $logged_in, $blog_config;
		
		// Home
		$str = '<a href="index.php">' . $lang_string[ 'menu_home' ] . '</a><br />';
		if ( !empty( $blog_config[ 'blog_email' ] ) ) {
			// Contact
			$str .= '<a href="contact.php">' . $lang_string[ 'menu_contact' ] . '</a><br />';
		}
		// Stats
		$str .= '<a href="stats.php">' . $lang_string[ 'menu_stats' ] . '</a><br />';
		
		// User Links
		$filename = 'config/links.txt';
		$result = sb_read_file( $filename );
		
		// Append new links.
		if ( $result ) {
			$array = explode('|', $result);
			for ( $i = 0; $i < count( $array ); $i = $i + 2 ) {
				if ( $array[$i+1] == '' ) {
					$str .= '<br />' . $array[$i] . '<br />';
				} else {
					$str .= '<a href="' . $array[$i+1] . '">' . $array[$i] . '</a><br />';
				}
			}
		}
		
		if ( $logged_in === true ) {
			$str .= '<a href="add_link.php">[ ' . $lang_string[ 'sb_add_link_btn' ]  . ' ]</a><br />';
		}
		
		// Return Result
		$result = array();
		$result[ 'title' ] = $lang_string[ 'menu_links' ];
		$result[ 'content' ] = $str;
		
		return( $result );
	}
?>
