<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'add_static' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string[ 'html_charset' ] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="javascript" src="scripts/sb_javascript.js" type="text/javascript"></script>
	<?php require_once('scripts/sb_editor.php'); ?>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors, $theme_vars;
		
		$entry_array = array();
		$entry_array[ 'subject' ] = $lang_string[ 'title' ];
		$entry_array[ 'entry' ] = $lang_string[ 'instructions' ] . '<p /><hr />';
    	$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<form accept-charset="' . $lang_string[ 'html_charset' ] . ',iso-8859-1,utf-8" action="add_static_cgi.php" method="POST" name="editor" id="editor" onSubmit="return validate_static(this)">';
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<label for="blog_subject">' . $lang_string[ 'label_subject' ] . '</label><br />';
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<input type="text" name="blog_subject" autocomplete="OFF" value="" size="40"><br /><br />';
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] . $lang_string[ 'label_insert' ] . '<br />';
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<input type="button" class="bginput" value="' . $lang_string[ 'btn_bold' ] . '" onclick="ins_styles(this.form.blog_text,&quot;b&quot;,&quot;&quot;);" />';
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<input type="button" class="bginput" value="' . $lang_string[ 'btn_italic' ] . '" onclick="ins_styles(this.form.blog_text,&quot;i&quot;,&quot;&quot;);" />';
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<input type="button" class="bginput" value="' . $lang_string[ 'btn_url' ] . '" onclick="ins_url(this.form.blog_text);" />';
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<input type="button" class="bginput" value="' . $lang_string[ 'btn_image' ] . '" onclick="ins_image_v2(this.form.blog_text);"/>';
		
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<select name="style_dropdown" onchange="ins_style_dropdown(this.form.blog_text,this.form.style_dropdown.value);">';
			$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<option label="--" value="--">--</option>';
			$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<option label="[blockquote]xxx[/blockquote]" value="blockquote">[blockquote]xxx[/blockquote]</option>';
			$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<option label="[pre]xxx[/pre]" value="pre">[pre]xxx[/pre]</option>';
			$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<option label="[code]xxx[/code]" value="code">[code]xxx[/code]</option>';
			$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<option label="[strong]xxx[/strong]" value="strong">[strong]xxx[/strong]</option>';
			$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<option label="[b]xxx[/b]" value="b">[b]xxx[/b]</option>';
			$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<option label="[em]xxx[/em]" value="em">[em]xxx[/em]</option>';
			$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<option label="[i]xxx[/i]" value="i">[i]xxx[/i]</option>';
			$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<option label="[h?]xxx[/h?] (?=1-6)" value="h?">[h?]xxx[/h?] (?=1-6)</option>';
			$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<option label="[html]xxx[/html]" value="html">[html]xxx[/html]</option>';
			$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<option label="[del]xxx[/del]" value="del">[del]xxx[/del]</option>';
			$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<option label="[ins]xxx[/ins]" value="ins">[ins]xxx[/ins]</option>';
			$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<option label="[strike]xxx[/strike]" value="strike">[strike]xxx[/strike]</option>';
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'</select>';
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<input type="button" class="bginput" value="ok" onclick="ins_style_dropdown(this.form.blog_text,this.form.style_dropdown.value);"/><br /><br />';
		
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] .'<a href="javascript:openpopup(&quot;image_list.php&quot;,' . $theme_vars[ 'popup_window' ][ 'width' ] . ',' . $theme_vars[ 'popup_window' ][ 'height' ] . ',true);">' . $lang_string[ 'view_images' ] . '</a><br />';
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] . image_dropdown() . '<br />';
		
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] . '<label for="blog_text">' . $lang_string[ 'label_entry' ] . '</label><br />';
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] . '<textarea style="width: ' . $theme_vars[ 'max_image_width' ] . 'px;" id="text" name="blog_text" rows="20" cols="50" autocomplete="OFF"></textarea><br /><br />';
		
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] . '<label for="file_name">' . $lang_string[ 'file_name' ] . '</label><br/>';
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] . '<input type="text" name="file_name" autocomplete="OFF" size="40" value="static' . date('ymd-His') . '"><br /><br />';
		
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] . '<input type="submit" name="preview" value="' . $lang_string[ 'btn_preview' ] . '" onclick="this.form.action="preview_static_cgi.php";" />';
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] . '<input type="submit" name="submit" value="' . $lang_string[ 'btn_post' ] . '" onclick="this.form.action="add_static_cgi.php";" />';
		
		$entry_array[ 'entry' ] = $entry_array[ 'entry' ] . '</form>';
		
		echo( theme_staticentry( $entry_array ) );
		
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
