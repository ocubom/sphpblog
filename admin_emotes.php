<?php 
	require('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'upload_img' );
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=<?php echo( $lang_string['html_charset'] ); ?>' />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="JavaScript" src="scripts/sb_javascript.js"></script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string['title'] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors;
		
		// -------------------------------
		// Emoticon code by NoWhereMan and Hydra.
		// -------------------------------

		function upload_emoticons() {
			// Emoticon upload form results
			$path = 'images/emoticons';
			$uploaddir = $path;
			
			$ok = false;
			if ( $_FILES[ 'user_emot' ][ 'error' ] == 0 ) {
				if (!file_exists($uploaddir)) {
					$oldumask = umask(0);
					@mkdir($uploaddir, 0777 );
					@umask($oldumask);
				}
				
				$uploaddir = $uploaddir.'/';
				$uploadfile = $uploaddir . preg_replace("/ /","_",$_FILES[ 'user_emot' ][ 'name' ]);
		
				if ( @getimagesize($_FILES['user_emot']['tmp_name']) == FALSE ){
					$ok = -1;
				} else {
					if ( @move_uploaded_file($_FILES[ 'user_emot' ][ 'tmp_name' ], $uploadfile ) ) {
						chmod( $uploadfile, 0777 );
						$ok = true;
					}
				}
			}
			
			return $ok;
		}

		function emoticons_admin_display() {
			global $theme_vars;
			// Emoticon table
			$emo = emoticons_load();
			
			
			$str_out = '<form enctype="multipart/form-data" name="emoticons" method="post" action="admin_emotes.php">';
			$str_out .= "\n\t<table width=\"". $theme_vars[ 'max_image_width' ] . "\">\n";
			
			for ( $i = 0; $i < count ($emo); $i++) {
				
				$tags=emoticons_check_tags($emo[$i]);
				
				$str_out .=  "\t\t<tr>\n";
				$str_out .=  "\t\t\t<td><input type=\"checkbox\" name=\"emo$i\" ";
										if ($tags) { $str_out .=  'checked="checked" '; }
															$str_out .=  "/></td>\n";
				$str_out .=  "\t\t\t<td><img src=\"" . $emo[$i] . "\" alt=\"emo$i\" />";
						$str_out .=  "<input type=\"hidden\" name=\"emo_name$i\" value=\"" . $emo[$i] . '" />';
				$str_out .=  "</td>\n";
				$str_out .=  "\t\t\t<td>$emo[$i]</td>\n";
				$str_out .=  "\t\t\t<td><input type=\"text\" name=\"tag$i\" value=\"" . $tags . "\" /></td>\n";
				$str_out .=  "\t\t</tr>\n";
			
			}
		
			$str_out .=  '<input type="hidden" name="emo_count" value="' . count($emo) . '" />';
			$str_out .=  "\t</table>\n\t";
			
			$str_out .=  '<hr />';
			$str_out .=  "\t<input type=\"submit\" value=\"Save Emoticons\" />\n";
			$str_out .=  "</form>\n";
			
			return $str_out;
		}
		
		function emoticons_getform() {
			// Emoticon preferences form results
		
			$form_arr = Array();
			for ( $i = 0; $i < $_POST['emo_count']; $i++) {
				if ($_POST['emo' . $i] == 'on') {
					if ($_POST['tag' . $i] !== '') {
						$temp_arr = Array();
						$temp_arr['PATH'] = $_POST['emo_name' . $i];
						$temp_arr['TAGS'] = $_POST['tag' . $i];
						array_push( $form_arr, $temp_arr );
					}
				}
			}
			
			// echo('<pre>');
			// print_r($form_arr);
			// echo('</pre>');
			
			return $form_arr;
		}
	
		function emoticons_save($form_arr) {
			// Convert array format to a string.
			
			$str = '';
			$emote_arr = Array();
			for ( $i = 0; $i < count($form_arr); $i++) {
				$temp_arr = Array();
				$tags = $form_arr[$i]['TAGS'];
				$tags = str_replace( '|', '&#124;', $tags );
				$tags = str_replace( '=', '&#61;', $tags );
				
				$temp_arr['PATH'] = $form_arr[$i]['PATH'];
				$temp_arr['TAGS'] = $tags;
				
				array_push( $emote_arr, implode_with_keys( $temp_arr, '=' ) );
			}
			$str = implode( '|', $emote_arr );
			
			return sb_write_file( 'config/emoticons.txt', $str );
		}
	
		?>
		<h2>Admin Emoticons</h2>
		Check the emoticons you want to use. Write in the box the Tags you want to be replaced by the image.
		Multiple tags may be used, just separated them by spaces.<p />
		
		For instance:<br />
		:) :-) :SMILE: :HAPPY:<p />
		
		<i>(It is highly recommended that you make the Tags longer than 2 characters, otherwise unexpected
		substitutions may occur.)</i><p />
		
		<hr />
		
		<!-- Upload New Emoticon Form -->
		<form enctype="multipart/form-data" name="emoticons_up" method="post" action="admin_emotes.php">
			Upload New Emoticon: <input name="user_emot" type="file" /><input type="submit" value="Upload" />
		</form>
		<!-- Upload New Emoticon Form -->
		
		
		<?php 
		if ($_FILES["user_emot"]) {
			// User is trying to upload a graphic.
			$ok = upload_emoticons();
			switch( $ok ) {
				case true:
					echo( 'Success! Image uploaded successfully!' );
					break;
				case false:
					echo( 'Error! Image was not uploaded.' );
					break;
				case -1:
					echo( 'Error! Invalid image file. Image must be a png, jpg, or gif.' );
					break;
			}
		}
		
		echo '<hr />';
		echo( emoticons_admin_display() );
		
		if (!$_FILES["user_emot"] && $_POST && !$_POST["user_emot"]) {
			// User is updating emoticon preferences.
			$form_arr = emoticons_getform();
			if ( emoticons_save($form_arr) ) {
				echo "Emoticon preferences saved successfully!";
			} else {
				echo "Error! Emoticon preferences not saved.";
			}
		}

		echo '<hr />';
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
