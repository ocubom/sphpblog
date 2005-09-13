<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'add' );
	
	function category_selection_box () {
		// Returns categories HTML.
		global $lang_string, $theme_vars;
		
		$blog_categories = $_POST[ 'catlist' ];
		
		$catArray = get_category_array();
		if ( count($catArray) > 0) {
			$str = '<select name="catlist[]" size="'. min( 8, count($catArray) ) ."\" multiple>\n";
			for ( $i = 0; $i < count( $catArray ); $i++ ) {
				$id_number = $catArray[$i][0];
				$name_str = $catArray[$i][1];
				$space_count = $catArray[$i][2];
				
				$label = '';
				for ( $j = 0; $j < $space_count; $j++ ) {
					$label = $label . '&nbsp;';
				}
				$label = $label . $name_str;
				
				$selected = false;
				for ( $j=0; $j < count( $blog_categories ); $j++) {
					if ( $blog_categories[$j] == $id_number ) {
						$selected = true;
						break;
					}
				}
				
				if ( $selected == true ) {
					$str = $str . '<option label="' . $label . '" value="' . $id_number . '" selected>' . $label . "</option>\n";
				} else {
					$str = $str . '<option label="' . $label . '" value="' . $id_number . '">' . $label . "</option>\n";
				}
				
			}
			$str = $str . "</select>\n";
		}
		
		return ( $str );
	}
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
		global $lang_string, $user_colors, $blog_config, $theme_vars;
		
		$entry_array = array();
		$entry_array[ 'subject' ] = $lang_string[ 'title' ];
		ob_start();
		?>
		
		<?php echo( $lang_string[ 'instructions' ] ); ?><p />
		
		<hr noshade size="1" color="#<?php echo( $user_colors[ 'inner_border_color' ] ); ?>" />
		
		<form accept-charset="<?php echo( $lang_string[ 'html_charset' ] ); ?>,iso-8859-1,utf-8" action='add_cgi.php' method="POST" name="editor" id="editor" onSubmit="return validate(this)">
		
			<label for="blog_subject"><?php echo( $lang_string[ 'label_subject' ] ); ?></label><br />
			<input type="text" name="blog_subject" autocomplete=OFF value="" size="40"><br /><br />
			
			<?php echo( $lang_string[ 'label_insert' ] ); ?><br />
			<input type="button" class="bginput" value="<?php echo( $lang_string[ 'btn_bold' ] ); ?>" onclick="ins_styles(this.form.blog_text,'b','');" />
			<input type="button" class="bginput" value="<?php echo( $lang_string[ 'btn_italic' ] ); ?>" onclick="ins_styles(this.form.blog_text,'i','');" />
			<input type="button" class="bginput" value="<?php echo( $lang_string[ 'btn_url' ] ); ?>" onclick="ins_url(this.form.blog_text);" />
			<input type="button" class="bginput" value="<?php echo( $lang_string[ 'btn_image' ] ); ?>" onclick="ins_image_v2(this.form.blog_text);"/>
			
			<select name="style_dropdown" onchange="ins_style_dropdown(this.form.blog_text,this.form.style_dropdown.value);">
				<option label="--" value="--">--</option>
				<option label="[blockquote]xxx[/blockquote]" value="blockquote">[blockquote]xxx[/blockquote]</option>
				<option label="[pre]xxx[/pre]" value="pre">[pre]xxx[/pre]</option>
				<option label="[code]xxx[/code]" value="code">[code]xxx[/code]</option>
				<option label="[strong]xxx[/strong]" value="strong">[strong]xxx[/strong]</option>
				<option label="[b]xxx[/b]" value="b">[b]xxx[/b]</option>
				<option label="[em]xxx[/em]" value="em">[em]xxx[/em]</option>
				<option label="[i]xxx[/i]" value="i">[i]xxx[/i]</option>
				<option label="[h?]xxx[/h?] (?=1-6)" value="h?">[h?]xxx[/h?] (?=1-6)</option>
				<option label="[html]xxx[/html]" value="html">[html]xxx[/html]</option>
				<option label="[del]xxx[/del]" value="del">[del]xxx[/del]</option>
				<option label="[ins]xxx[/ins]" value="ins">[ins]xxx[/ins]</option>
				<option label="[strike]xxx[/strike]" value="strike">[strike]xxx[/strike]</option>
			</select>
			<input type="button" class="bginput" value="ok" onclick="ins_style_dropdown(this.form.blog_text,this.form.style_dropdown.value);"/><br /><br />
			
			<a href="javascript:openpopup('image_list.php',<?php echo( $theme_vars[ 'popup_window' ][ 'width' ] ); ?>,<?php echo( $theme_vars[ 'popup_window' ][ 'height' ] ); ?>,true);"><?php echo( $lang_string[ 'view_images' ] ); ?></a><br />
			<?php echo image_dropdown(); ?><br /><br />
			
			<label for="blog_text"><?php echo( $lang_string[ 'label_entry' ] ); ?></label><br />
			<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="text" name="blog_text" rows="20" cols="50" autocomplete=OFF></textarea><br /><br />
			
			<?php if ( $blog_config[ 'blog_trackback_enabled' ] ) { ?>
		      <label for="tb_ping"><?php echo( $lang_string[ 'label_tb_ping' ] ); ?></label><br />
		      <input type="text" id="tb_ping" name="tb_ping" 
		      <?php if( $blog_config[ 'blog_trackback_auto_discovery' ] ) { echo ' value="' . $lang_string[ 'label_tb_autodiscovery' ] . '" '; } ?>
		      style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;"><br /><br />
			<?php } ?>
			
			<?php echo( category_selection_box() ); ?><br /><br />
			
			<input type="submit" name="preview" value="<?php echo( $lang_string[ 'btn_preview' ] ); ?>" onclick="this.form.action='preview_cgi.php';" />
			<input type="submit" name="submit" value="<?php echo( $lang_string[ 'btn_post' ] ); ?>" onclick="this.form.action='add_cgi.php';" /><br />
		</form>
		
		<?php 
		$entry_array[ 'entry' ] = ob_get_clean();
		echo( theme_staticentry( $entry_array ) );	
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
