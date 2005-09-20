<?php 

	// The Simple PHP Blog is released under the GNU Public License.
	//
	// You are free to use and modify the Simple PHP Blog. All changes 
	// must be uploaded to SourceForge.net under Simple PHP Blog or
	// emailed to apalmo <at> bigevilbrain <dot> com
	
	// ----------------------
	// Plugin Functions
	// ----------------------
	
	function plugin_init () {
		// This function loads all the plugin scripts
		$plugin_array = get_menu_plugins( true );
	}
	
	function get_menu_plugins ( $init=false ) {
		// 1) Loop through all the folder in "plugins/menu/".
		// 2) Include the "main.php" file (inside each plugin's folder.)
		// 3) Call the "MenuPlugin_FOLDERNAME_init()" function.
		// 4) Return array of plugins.
		
		$dir = 'plugins/menu/';
		
		$plugin_array = array();
		
		if ( is_dir($dir) ) {
			$dhandle = opendir($dir);
			if ( $dhandle ) {
				// Loop through files
				$filename = readdir( $dhandle );
				while ( $filename ) {
					if ( is_dir( $dir . $filename ) && $filename != '.' && $filename != '..' ) {
						// Found plugin directory
						
						$plugin = array();
						$plugin[ 'PATH' ] = $dir . $filename . '/';
						$plugin[ 'NAME' ] = $filename;
						$plugin[ 'ID' ] = sb_read_file( $plugin[ 'PATH' ] . 'id.txt' );
						
						// Include main.php file
						if ( file_exists( $plugin[ 'PATH' ] . 'main.php' ) ) {
							require_once( $plugin[ 'PATH' ] . 'main.php' );
							
							// Call the plugin init function
							$plugin[ 'FUNCTION' ] = 'MenuPlugin_' . $plugin[ 'NAME' ] . '_';
							if ( function_exists( $plugin[ 'FUNCTION' ] . 'init' ) ) {
								if ( $init == true ) {
									call_user_func( $plugin[ 'FUNCTION' ] . 'init', $plugin );
								}
								
								// Append to array
								array_push( $plugin_array, $plugin );
							}
						}
					}
					$filename = readdir( $dhandle );
				}
			}
			closedir( $dhandle );
		}
		
		return( $plugin_array );
	}
?>
