<?php 
	require('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
		
	if ( isset( $_GET['blog_language'] ) ) {	
		$blog_config[ 'blog_language' ] = $_GET['blog_language'];
	}
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'setup' );
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string['html_charset'] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="JavaScript" src="scripts/sb_javascript.js"></script>
	<script type="text/javascript">
		<!--
		function validate(theform) {
			if (theform.blog_title.value=="" || theform.blog_author.value=="" ) {
				alert("<?php echo( $lang_string['form_error'] ); ?>");
				return false;
			} else {
				return true;
			}
		}
		//-->
	</script>
	<title><?php echo( $blog_config[ 'blog_title' ] ); ?> - <?php echo( $lang_string['title'] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors;
		
		global $blog_config;
		?>
		
		<h2><?php echo( $lang_string['title'] ); ?></h2>
		<?php echo( $lang_string['instructions'] ); ?><p />
		
		<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>
		
		<form action="setup_cgi.php" method="POST" name="setup" name="setup" onSubmit="return validate(this)">
			
			<label for="blog_language"><?php echo( $lang_string['blog_choose_language'] ); ?></label><br />
			<select name="blog_language">
				<?php
					$dir = 'languages/';
					$installed_languages = array();
					
					clearstatcache();
					if ( is_dir($dir) ) {
						$dhandle = opendir($dir);
						if ( $dhandle ) {
							$sub_dir = readdir( $dhandle );
							while ( $sub_dir ) {
								if ( is_dir( $dir . $sub_dir . '/' ) == true && $sub_dir != '.' && $sub_dir != '..' ) {
									$lang_dir = $sub_dir;
									$lang_name = sb_read_file( $dir . $sub_dir . '/id.txt' );
									if ( $lang_name ) {
										$str = '<option label="' . $lang_name . '" value="' . $lang_dir . '"';
										if ( $blog_config[ 'blog_language' ] == $lang_dir ) {
											$str = $str . ' selected';
										}
										$str = $str . '>' . $lang_name . '</option>';
										
										echo( $str );
									}
								}
								$sub_dir = readdir( $dhandle );
							}
						}
						closedir( $dhandle );
					}
				?>
			</select><br />
			
			<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>
			
			<label for="blog_title"><?php echo( $lang_string['blog_title'] ); ?></label><br />
			<input type="text" name="blog_title" value="<?php echo($blog_config[ 'blog_title' ]); ?>" autocomplete="OFF" size="40" style="width: <?php global $theme_vars; echo( $theme_vars['max_image_width'] ); ?>px;"><br /><br />
			
			<label for="blog_author"><?php echo( $lang_string['blog_author'] ); ?></label><br />
			<input type="text" name="blog_author" value="<?php echo($blog_config[ 'blog_author' ]); ?>" autocomplete="OFF" size="40" style="width: <?php global $theme_vars; echo( $theme_vars['max_image_width'] ); ?>px;"><br /><br />
			
			<label for="blog_email"><?php echo( $lang_string['blog_email'] ); ?></label><br />
			<input type="text" name="blog_email" value="<?php echo($blog_config[ 'blog_email' ]); ?>" autocomplete="OFF" size="40" style="width: <?php global $theme_vars; echo( $theme_vars['max_image_width'] ); ?>px;"><br /><br />
			
			<label for="blog_footer"><?php echo( $lang_string['blog_footer'] ); ?></label><br />
			<input type="text" name="blog_footer" value="<?php echo($blog_config[ 'blog_footer' ]); ?>" autocomplete="OFF" size="40" style="width: <?php global $theme_vars; echo( $theme_vars['max_image_width'] ); ?>px;">
		
			<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>
			
			<label for="blog_entry_order"><?php echo( $lang_string['label_entry_order'] ); ?></label><br />
			<select name="blog_entry_order">
				<option label="<?php echo( $lang_string['select_new_to_old'] ); ?>" value="new_to_old"<?php if ($blog_config[ 'blog_entry_order' ] == 'new_to_old') { echo ' selected'; } ?>><?php echo( $lang_string['select_new_to_old'] ); ?></option>
				<option label="<?php echo( $lang_string['select_old_to_new'] ); ?>" value="old_to_new"<?php if ($blog_config[ 'blog_entry_order' ] == 'old_to_new') { echo ' selected'; } ?>><?php echo( $lang_string['select_old_to_new'] ); ?></option>
			</select><br /><br />
			
			<label for="blog_comment_order"><?php echo( $lang_string['label_comment_order'] ); ?></label><br /> 
			<select name="blog_comment_order">
				<option label="<?php echo( $lang_string['select_new_to_old'] ); ?>" value="new_to_old"<?php if ($blog_config[ 'blog_comment_order' ] == 'new_to_old') { echo ' selected'; } ?>><?php echo( $lang_string['select_new_to_old'] ); ?></option>
				<option label="<?php echo( $lang_string['select_old_to_new'] ); ?>" value="old_to_new"<?php if ($blog_config[ 'blog_comment_order' ] == 'old_to_new') { echo ' selected'; } ?>><?php echo( $lang_string['select_old_to_new'] ); ?></option>
			</select><br /><br />
			
			<label for="blog_max_entries"><?php echo( $lang_string['blog_max_entries'] ); ?></label><br />
			<input type="text" name="blog_max_entries" value="<?php echo( $blog_config[ 'blog_max_entries' ] ); ?>" autocomplete="OFF" size="6">
			
			<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>
			
			<input type="checkbox" id="blog_enable_comments" name="blog_enable_comments"<?php if ( $blog_config[ 'blog_enable_comments' ] == 1 ) { echo ( ' checked' ); } ?>> <?php echo( $lang_string['blog_enable_comments'] ); ?><br />
			<input type="checkbox" id="blog_comments_popup" name="blog_comments_popup"<?php if ( $blog_config[ 'blog_comments_popup' ] == 1 ) { echo ( ' checked' ); } ?>> <?php echo( $lang_string['blog_comments_popup'] ); ?><br />
			
			<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>
			
			<input type="checkbox" id="blog_enable_voting" name="blog_enable_voting"<?php if ( $blog_config[ 'blog_enable_voting' ] == 1 ) { echo ( ' checked' ); } ?>> <?php echo( $lang_string['blog_enable_voting'] ); ?><br />
			
			<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>
			
			<input type="checkbox" id="blog_email_notification" name="blog_email_notification"<?php if ( $blog_config[ 'blog_email_notification' ] == 1 ) { echo ( ' checked' ); } ?>> <?php echo( $lang_string['blog_email_notification'] ); ?><br />
			<input type="checkbox" id="blog_send_pings" name="blog_send_pings"<?php if ( $blog_config[ 'blog_send_pings' ] == 1 ) { echo ( ' checked' ); } ?>> <?php echo( $lang_string['blog_send_pings'] ); ?><br /><br />
			
			<label for="blog_ping_urls"><?php echo( $lang_string['blog_ping_urls'] ); ?></label><br />
			<input type="text" name="blog_ping_urls" value="<?php echo($blog_config[ 'blog_ping_urls' ]); ?>" autocomplete="OFF" size="40" style="width: <?php global $theme_vars; echo( $theme_vars['max_image_width'] ); ?>px;"><br />
			
			<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>
			
			<?php echo( $lang_string['blog_trackback_about'] ); ?><br /><br />
			<input type="checkbox" id="blog_trackback_enabled" name="blog_trackback_enabled"<?php if ( $blog_config[ 'blog_trackback_enabled' ] == 1 ) { echo ( ' checked' ); } ?>> <?php echo( $lang_string['blog_trackback_enabled'] ); ?><br />
			<input type="checkbox" id="blog_trackback_auto_discovery" name="blog_trackback_auto_discovery"<?php if ( $blog_config[ 'blog_trackback_auto_discovery' ] == 1 ) { echo ( ' checked' ); } ?>> <?php echo( $lang_string['blog_trackback_auto_discovery'] ); ?><br />

			<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>

			<label for="area"><?php echo( $lang_string['blog_comment_tags'] ); ?></label><br />
			<table border="0" width="<?php global $theme_vars; echo( $theme_vars['max_image_width'] ); ?>" cellspacing="0" cellpadding="0">
				<tr align="left" valign="top">
					<td width="50%">
						<input type="checkbox" id="b" name="b"<?php if ( in_array( 'b', $blog_config[ 'comment_tags_allowed' ] ) ) { echo ( ' checked' ); } ?>> [b] = Bold<br />
						<input type="checkbox" id="i" name="i"<?php if ( in_array( 'i', $blog_config[ 'comment_tags_allowed' ] ) ) { echo ( ' checked' ); } ?>> [i] = Italic<br />
						<input type="checkbox" id="strong" name="strong"<?php if ( in_array( 'strong', $blog_config[ 'comment_tags_allowed' ] ) ) { echo ( ' checked' ); } ?>> [strong] = Strong<br />
						<input type="checkbox" id="em" name="em"<?php if ( in_array( 'em', $blog_config[ 'comment_tags_allowed' ] ) ) { echo ( ' checked' ); } ?>> [em] = Emphasis<br />
						<br />
						<input type="checkbox" id="del" name="del"<?php if ( in_array( 'del', $blog_config[ 'comment_tags_allowed' ] ) ) { echo ( ' checked' ); } ?>> [del] = Delete<br />
						<input type="checkbox" id="ins" name="ins"<?php if ( in_array( 'ins', $blog_config[ 'comment_tags_allowed' ] ) ) { echo ( ' checked' ); } ?>> [ins] = Insert<br />
						<input type="checkbox" id="strike" name="strike"<?php if ( in_array( 'strike', $blog_config[ 'comment_tags_allowed' ] ) ) { echo ( ' checked' ); } ?>> [strike] = Strike-out<br />
					</td>
					<td width="50%">
						<input type="checkbox" id="img" name="img"<?php if ( in_array( 'img', $blog_config[ 'comment_tags_allowed' ] ) ) { echo ( ' checked' ); } ?>> [img] = Image<br />
						<input type="checkbox" id="url" name="url"<?php if ( in_array( 'url', $blog_config[ 'comment_tags_allowed' ] ) ) { echo ( ' checked' ); } ?>> [url] = URL<br />
						<br />
						<input type="checkbox" id="blockquote" name="blockquote"<?php if ( in_array( 'blockquote', $blog_config[ 'comment_tags_allowed' ] ) ) { echo ( ' checked' ); } ?>> [blockquote] = Block Quote<br />
						<input type="checkbox" id="hN" name="hN"<?php if ( in_array( 'hN', $blog_config[ 'comment_tags_allowed' ] ) ) { echo ( ' checked' ); } ?>> [hN] = Headline<br />
						<br />
						<input type="checkbox" id="pre" name="pre"<?php if ( in_array( 'pre', $blog_config[ 'comment_tags_allowed' ] ) ) { echo ( ' checked' ); } ?>> [pre] = Preformatted<br />
						<input type="checkbox" id="code" name="code"<?php if ( in_array( 'code', $blog_config[ 'comment_tags_allowed' ] ) ) { echo ( ' checked' ); } ?>> [code] = Code<br />
						<input type="checkbox" id="html" name="html"<?php if ( in_array( 'html', $blog_config[ 'comment_tags_allowed' ] ) ) { echo ( ' checked' ); } ?>> [html] = HTML<br />
					</td>
				</tr>
			</table>
			
			<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>
			
			<?php echo( $lang_string['blog_gzip_about'] ); ?><br /><br />
			<input type="checkbox" id="blog_enable_gzip_txt" name="blog_enable_gzip_txt"<?php if ( $blog_config[ 'blog_enable_gzip_txt' ] == 1 ) { echo ( ' checked' ); } if ( extension_loaded( 'zlib' ) == false ) { echo ( ' disabled' ); } ?>> <?php echo( $lang_string['blog_enable_gzip_txt'] ); ?><br />
			<input type="checkbox" id="blog_enable_gzip_output" name="blog_enable_gzip_output"<?php if ( $blog_config[ 'blog_enable_gzip_output' ] == 1 ) { echo ( ' checked' ); } if ( extension_loaded( 'zlib' ) == false ) { echo ( ' disabled' ); } ?>> <?php echo( $lang_string['blog_enable_gzip_output'] ); ?><br />
			
			<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>
			
			<input type="submit" name="submit" value="<?php echo( $lang_string['submit_btn'] ); ?>" /><br /><br />
		</form>
		
		<?php 
	}
?>
<?php 
	theme_pagelayout();
?>

</html>
