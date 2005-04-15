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
	<title><?php echo( $lang_string[ 'title_preview' ] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors, $theme_vars;
		
		?>
		
		<h2><?php echo( $lang_string[ 'title_preview' ] ); ?></h2>
		<?php echo( $lang_string[ 'instructions_preview' ] ); ?><p />
		
		<div class="hr"><hr /></div>

		<?php
			global $blog_subject, $blog_text, $temp_subject, $temp_text, $entry;
			
			if ( isset( $_GET[ 'entry' ] ) ) {
				$entry = $_GET[ 'entry' ];
		
				if ( file_exists( 'content/static/' . $entry . '.txt' ) ) {
					$filename = 'content/static/' . $entry . '.txt';
				} elseif ( file_exists( 'content/static/' . $entry . '.txt.gz' ) ) {
					$filename = 'content/static/' . $entry . '.txt.gz';
				}
				$blog_entry_data = static_entry_to_array( $filename )
				;
				$temp_subject = $blog_entry_data[ 'SUBJECT' ];
				$temp_text = $blog_entry_data[ 'CONTENT' ];
				$temp_file_name = $entry;
				
				$blog_content = get_static_entry_by_file( $entry );
				echo( $blog_content );
			} else {
				$entry = NULL;
				if ( isset( $_POST[ 'entry' ] ) ) {
					$entry = $_POST[ 'entry' ];
				}
				
				$temp_subject = $_POST[ 'blog_subject' ];
				$temp_text = $_POST[ 'blog_text' ];
				$blog_content = preview_static_entry( $temp_subject, $temp_text );
				$temp_file_name = stripslashes( $_POST[ 'file_name' ] );
				echo( $blog_content );
			}
		?>
		<p />
		<h2><?php echo( $lang_string[ 'title_update' ] ); ?></h2>
		<?php echo( $lang_string[ 'instructions_update' ] ); ?><p />
		
		<div class="hr"><hr /></div>

		<form action='add_static_cgi.php' method="POST" name="editor" id="editor" onSubmit="return validate_static(this)">
		
			<input type="hidden" name="entry" value="<?php global $entry; echo( $entry ); ?>">
			
			<label for="blog_subject"><?php echo( $lang_string[ 'label_subject' ] ); ?></label><br />
			<input type="text" name="blog_subject" value="<?php global $temp_subject; echo( htmlentities( $temp_subject ) ); ?>" size="40"><br /><br />
			
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
			
			<label for="blog_text"><?php echo( htmlentities( $lang_string[ 'label_entry' ] ) ); ?></label><br />
			<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="text" name="blog_text" rows="20" cols="50"><?php global $temp_text; echo( $temp_text ); ?></textarea><br /><br />
			
			<label for="file_name"><?php echo( $lang_string[ 'file_name' ] ); ?></label><br/>
			<input type="text" name="file_name" value="<?php echo( $temp_file_name ); ?>" size="40"><br /><br />
			
			<input type="submit" name="preview" value="<?php echo( $lang_string[ 'btn_preview' ] ); ?>" onclick="this.form.action='preview_static_cgi.php';" />
			<input type="submit" name="submit" value="<?php echo( $lang_string[ 'btn_post' ] ); ?>" onclick="this.form.action='add_static_cgi.php';" />
		</form>
		
		<?php 
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
