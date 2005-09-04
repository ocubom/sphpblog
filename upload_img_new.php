<?php 
	require("scripts/sb_functions.php");
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require("languages/" . $blog_config[ "blog_language" ] . "/strings.php");
	sb_language( "upload_img" );
	
	// Base Directory
	global $basedir;	
	if ( isset( $_GET["basedir"] ) ) {
		$basedir = urldecode( $_GET["basedir"] );
	} else {
		$basedir = "images/";
	}
	
	// File IO Functions
	if ( count( $_POST ) > 0 ) {
		switch ( $_POST[ "btn_command" ] ) {
			case "new_dir":
				if ( !file_exists( $basedir . $_POST[ "btn_value" ] . "/" ) ) {
					$oldumask = umask(0);
					$ok = mkdir( $basedir . $_POST[ "btn_value" ] . "/", 0777 );
					umask($oldumask);
				} else {
					// File or Folder Already Exists
				}
				break;
			default:
				break;
		}	
	}
	
	// File Browser Scripts
	function fb_folder_listing( $dir, $ext_array ) {
		// Return an array of files in a directory
		//
		clearstatcache();
		$result = array();
		
		if ( is_dir($dir) ) {
			$dhandle = opendir($dir);
			if ( $dhandle ) {
				// Loop through files
				$filename = readdir( $dhandle );
				while ( $filename ) {
					if ( is_file( $dir . $filename ) ) {
						if ( count( $ext_array ) > 0 ) {
							// Filter files by extension
							$ok = false;
							for ( $i = 0; $i < count( $ext_array ); $i++ ) {
								if ( strrchr( $filename, "." ) == $ext_array[$i] ) {
									$ok = true;
									break;
								}
							}
							if ( $ok == true ) {
								if ( strpos( $filename, "." ) !== 0 ) {
									array_push( $result, file_properties( $dir, $filename ) );
								}
							}
						} else {
							// No filter
							if ( strpos( $filename, "." ) !== 0 ) {
								array_push( $result, file_properties( $dir, $filename ) );
							}
						}
					} else {
						if ( strpos( $filename, "." ) !== 0 ) {
							array_push( $result, array( "folder", $filename, bytesToHumanReadableUsage( filesize( $dir . $filename ) ), date( "g:ia m/d/y", filemtime( $dir . $filename ) ) ) );
						}
					}
					$filename = readdir( $dhandle );
				}
			}
			closedir( $dhandle) ;
		}
		
		return( $result );
	}

	
	function file_properties ( $dir, $filename ) {
		$result = array();
		array_push( $result, "file" );
		array_push( $result, $filename );
		array_push( $result, bytesToHumanReadableUsage( filesize( $dir . $filename ) ) );
		array_push( $result, date( "g:ia m/d/y", filemtime( $dir . $filename ) ) );
		return( $result );
	}
	
	function bytesToHumanReadableUsage($bytes, $precision = 2, $names = "") {
		if (!is_numeric($bytes) || $bytes < 0) {
			return false;
		}
		
		for ($level = 0; $bytes >= 1024; $level++) {	 	 
			$bytes /= 1024;	 	 	 
		}
		
		switch ($level)
		{
			case 0:
				$suffix = (isset($names[0])) ? $names[0] : "Bytes";
				break;
			case 1:
				$suffix = (isset($names[1])) ? $names[1] : "KB";
				break;
			case 2:
				$suffix = (isset($names[2])) ? $names[2] : "MB";
				break;
			case 3:
				$suffix = (isset($names[3])) ? $names[3] : "GB";
				break;	 	 	 
			case 4:
				$suffix = (isset($names[4])) ? $names[4] : "TB";
				break;	 	 	 	 	 	 	 	 	 	 	 	 	 	 
			default:
				$suffix = (isset($names[$level])) ? $names[$level] : "";
				break;
		}
		
		if (empty($suffix)) {
			trigger_error("Unable to find suffix for case " . $level);
			return false;
		}
		
		return round($bytes, $precision) . " " . $suffix;
	}
	
	function folder_list () {
		// Get a list of images in the image folder. Return HTML.
		//
		global $basedir;	
		$dir = $basedir;
		// $filter = array( ".jpg", ".gif", ".zip", ".sit" );
		$filter = array();
		$contents = fb_folder_listing( $dir, $filter );
		
		global $theme_vars;
		$str = '<table id="filebrowser" border="0" width="100%" cellspacing="0" cellpadding="3">';
		$str = $str . "\n".'<tr id="row_header">';
		$str = $str . "\n\t".'<td id="row_vertline"><input type="checkbox" onClick=""></td>';
		$str = $str . "\n\t".'<td colspan="2" id="row_vertline">Name</td>';
		$str = $str . "\n\t".'<td id="row_vertline">Size</td>';
		$str = $str . "\n\t".'<td>Last Modified</td>';
		$str = $str . "\n".'</tr>';
		if ($contents) {
			for ( $i = 0; $i < count( $contents ); $i++ ) {
				$fileinfo = $contents[$i];
				if ( $i % 2 ) {
					// Odd
					$str = $str . "\n".'<tr id="row_odd">';
				} else {
					// Even
					$str = $str . "\n".'<tr id="row_even">';
				}
				if ( $fileinfo[0] == "file" ) {
					$str = $str . "\n\t".'<td id="vertline"><input type="checkbox" name="'.$fileinfo[1].'"></td>';
					$str = $str . "\n\t".'<td id="topline"><img src="interface/filebrowser/file_icon.gif" alt="" width="16" height="16" border="0"></td>';
					$str = $str . "\n\t".'<td id="vertline" width="50%"><a href="'.$dir.$fileinfo[1].'">'.$fileinfo[1].'</a></td>';
					$str = $str . "\n\t".'<td id="vertline">'.$fileinfo[2].'</td>';
					$str = $str . "\n\t".'<td id="topline">'.$fileinfo[3].'</td>';
				} else {
					$str = $str . "\n\t".'<td id="vertline"><input type="checkbox" name="'.$fileinfo[1].'"></td>';
					$str = $str . "\n\t".'<td id="topline"><img src="interface/filebrowser/folder_icon.gif" alt="" width="16" height="16" border="0"></td>';
					$str = $str . "\n\t".'<td id="vertline"><a href="upload_img.php?basedir='.(urlencode($dir.$fileinfo[1].'/')).'">'.$fileinfo[1].'</a></td>';
					$str = $str . "\n\t".'<td id="vertline">'.$fileinfo[2].'</td>';
					$str = $str . "\n\t".'<td id="topline">'.$fileinfo[3].'</td>';
				}
				$str = $str . "\n".'</tr>';
			}
		}
		$str = $str . "\n".'</tr>';
		$str = $str . "\n".'</table>';
		
		return ( $str );
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string['html_charset'] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require("themes/" . $blog_theme . "/user_style.php"); ?>
	<script language="JavaScript" src="scripts/sb_javascript.js"></script>
	<title><?php echo($blog_config[ "blog_title" ]); ?> - <?php echo( $lang_string["title"] ); ?></title>
	
	<style type="text/css">
		#filebrowser {
			color: #<?php echo( DecToHex( hsv_to_rgb( 200, 0, 0 ) ) ); ?>;
			border-color: #<?php echo( DecToHex( hsv_to_rgb( 200, 40, 60 ) ) ); ?>;
			border-width: 1px;
			border-style: solid;
			text-align: left;
			margin: 0px;
			padding: 0px;
		}
		
		#filebrowser #row_header { 
			color: #<?php echo( DecToHex( hsv_to_rgb( 200, 0, 100 ) ) ); ?>;
			background-color: #<?php echo( DecToHex( hsv_to_rgb( 200, 40, 80 ) ) ); ?>;
			font-weight: bold;
		}
		
		#filebrowser #row_vertline {
			border-right: 1px solid #<?php echo( DecToHex( hsv_to_rgb( 200, 40, 60 ) ) ); ?>;
		}
		
		#filebrowser #row_odd {
			color: #000;
			background-color: #<?php echo( DecToHex( hsv_to_rgb( 200, 10, 100 ) ) ); ?>;
		}
		
		#filebrowser #row_even {
			color: #000;
			background-color: #<?php echo( DecToHex( hsv_to_rgb( 200, 0, 100 ) ) ); ?>;
		}
		
		#filebrowser #vertline {
			border-right: 1px solid #<?php echo( DecToHex( hsv_to_rgb( 200, 20, 90 ) ) ); ?>;
			border-bottom: 1px solid #<?php echo( DecToHex( hsv_to_rgb( 200, 20, 90 ) ) ); ?>;
		}
		
		#filebrowser #topline {
			border-bottom: 1px solid #<?php echo( DecToHex( hsv_to_rgb( 200, 20, 90 ) ) ); ?>;
		}
		
		#filebrowser a {
			font-weight: bold;
			text-decoration: none;
		}
		
		#filebrowser a:link, #filebrowser a:visited {
			color: #<?php echo( DecToHex( hsv_to_rgb( 200, 40, 20 ) ) ); ?>;
		}
		
		#filebrowser a:hover {
			color: #<?php echo( DecToHex( hsv_to_rgb( 200, 40, 40 ) ) ); ?>;
		}
		
		#filebrowser a:active {
			color: #<?php echo( DecToHex( hsv_to_rgb( 200, 40, 60 ) ) ); ?>;
		}
	</style>
	
	<script type="text/javascript">
		<!--
		// New Directory/Folder
		function new_directory(formObj, strCommand) {
			// inserts named url link - [url=mylink new=true]text[/url]
			folderName = prompt("New Directory: Enter Name","");
			if ( (folderName != null) ) {
				formObj.btn_command.value = strCommand;
				formObj.btn_value.value = folderName;
				formObj.submit();
			}
		}
		-->
	</script>
	
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors;
		
		?>
		
		<h2><?php echo( $lang_string["title"] ); ?></h2>
		<?php echo( $lang_string["instructions"] ); ?><p />
		
		<hr noshade size="1" color=#<?php echo( $user_colors["inner_border_color"] ); ?>>
		
		<form enctype="multipart/form-data" action="upload_img.php<?php global $basedir; echo( '?basedir=' . urlencode($basedir) ); ?>" method="POST">
			<?php echo( folder_list() ); ?>
			<hr noshade size="1" color=#<?php echo( $user_colors["inner_border_color"] ); ?>>
			<input type="button" class="bginput" name="new_dir" value="New Dir" onclick="new_directory(this.form, 'new_dir');">
			<input type="submit" name="copy" value="Copy">
			<input type="submit" name="move" value="Move">
			<input type="submit" name="delete" value="Delete">
			<hr noshade size="1" color=#<?php echo( $user_colors["inner_border_color"] ); ?>>
			<input type="submit" name="rename" value="Rename">
			<input type="submit" name="chmod" value="Chmod">
			<input type="submit" name="zip_unzip" value="Zip/Unzip">
			<hr noshade size="1" color=#<?php echo( $user_colors["inner_border_color"] ); ?>>
			<input type="file" name="userfile"><br /><br />
			<input type="submit" value="<?php echo( $lang_string['upload_btn'] ); ?>">
			<input type="hidden" name="btn_command" value="">
			<input type="hidden" name="btn_value" value="">
		</form>
		
		
		<br />
		
		<?php 
		//
		if ( count( $_POST ) > 0 ) {
			echo("<pre>");
			print_r($_POST);
			echo("</pre>");
		}
		//
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
