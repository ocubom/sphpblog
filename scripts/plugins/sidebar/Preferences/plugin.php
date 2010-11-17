<?php
	/**
	* Preferences menu widget.
	*
	* Alexander Palmo <apalmo at bigevilbrain dot com>
	*/
	
	class Preferences extends Sidebar {
		var $plugin;
		
		/* ------ INITIALIZE ------ */
		
		function Preferences () {
			$this->plugin = 'Preferences';
			$this->loadPrefs();
		}
		
		/* ------ GETTERS & SETTERS ------ */
		
		function getTitle () {
			return $GLOBALS[ 'lang_string' ][ 'menu_setup' ];
		}
		
		function getContent () {
			global $blog_config;
			$str = '';
	
			if ( $GLOBALS[ 'logged_in' ] == true ) {
				$str = '';
				$str  .= '<a href="' . BASEURL . 'categories.php">' . $GLOBALS[ 'lang_string' ][ 'menu_categories' ] . '</a><br />';
				$str  .= '<a href="' . BASEURL . 'add_block.php">' . $GLOBALS[ 'lang_string' ][ 'menu_add_block' ] . '</a><br />';
				$str  .= '<a href="' . BASEURL . 'setup.php">' . $GLOBALS[ 'lang_string' ][ 'menu_setup' ] . '</a><br />';
				$str  .= '<a href="' . BASEURL . 'plugins.php">' . $GLOBALS[ 'lang_string' ][ 'menu_plugins' ] . '</a><br />';
				if ($blog_config->getTag('USE_EMOTICONS')) {
					$str  .= '<a href="' . BASEURL . 'emoticons.php">' . $GLOBALS[ 'lang_string' ][ 'menu_emoticons' ] . '</a><br />';
				}
				$str  .= '<a href="' . BASEURL . 'themes.php">' . $GLOBALS[ 'lang_string' ][ 'menu_themes' ] . '</a><br />';
				$str  .= '<a href="' . BASEURL . 'colors.php">' . $GLOBALS[ 'lang_string' ][ 'menu_colors' ] . '</a><br />';
				$str  .= '<a href="' . BASEURL . 'options.php">' . $GLOBALS[ 'lang_string' ][ 'menu_options' ] . '</a><br />';
				$str  .= '<a href="' . BASEURL . 'info.php">' . $GLOBALS[ 'lang_string' ][ 'menu_info' ] . '</a><br />';
				$str  .= '<a href="' . BASEURL . 'manage_users.php">' . $GLOBALS[ 'lang_string' ][ 'manage_users' ] . '</a><br />';
				$str  .= '<a href="' . BASEURL . 'phpinfo.php">' . $GLOBALS[ 'lang_string' ][ 'manage_php_config' ] . '</a><br />';
				$str  .= '<hr />';
				$str  .= '<a href="' . BASEURL . 'moderation.php">' . $GLOBALS[ 'lang_string' ][ 'menu_moderation' ] . '</a><br />';
				if ( $blog_config->getTag( 'blog_comments_moderation' ) ) {
					$str  .= '<a href="' . BASEURL . 'comments_moderation.php">' . $GLOBALS[ 'lang_string' ][ 'menu_commentmoderation' ] . ' (' . get_unmodded_count(1) . ')</a><br />';
				}
			}
			
			return $str;
		}
	}
?>
