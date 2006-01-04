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
			$str = $str . "</select><p />\n";
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
		
		<hr />
		
		<form action='add_cgi.php' method="POST" name="editor" id="editor" onSubmit="return validate(this)">
		
			<label for="blog_subject"><?php echo( $lang_string[ 'label_subject' ] ); ?></label><br />
			<input type="text" name="blog_subject" autocomplete=OFF value="" size="40"><p />
			
			<?php
				// Edit / Select Date
				$faketime = time();
				$e_day = date('d', $faketime);
				$e_month = date('n', $faketime);
				$e_year = date('Y', $faketime);
				$e_hour = date('G', $faketime);
				$e_minute = date('i', $faketime);
				$e_second = date('s', $faketime);
				
				// Day Drop Down
				$itemArray = array();
				for ( $i = 1; $i <= 31; $i++ ) {
					$item = array( 'label' => $i, 'value' => $i );
					if ( $i == $e_day ) {
						$item['selected'] = true;
					}
					array_push( $itemArray, $item );
				}
				$dd_day = HTML_dropdown( 'Day', 'day', $itemArray, false );
				
				// Month Drop Down
				$itemArray = array();
				for ( $i = 12; $i >= 1; $i-- ) {
					$timestamp = mktime(0, 0, 0, $i, date('d'), date('Y'));
					
					$item = array( 'label' => strftime('%B', $timestamp), 'value' => date('m', $timestamp) );
					if ( $i == $e_month ) {
						$item['selected'] = true;
					}
					array_push( $itemArray, $item );
				}
				$dd_month = HTML_dropdown( 'Month', 'month', $itemArray, false );
				
				// Year Drop Down
				$itemArray = array();
				for ( $i = 1	; $i >= -10; $i-- ) {
					$timestamp = mktime(0, 0, 0, date('m'), date('d'), date('Y')+$i);
					
					$item = array( 'label' => strftime('%Y', $timestamp), 'value' => date('Y', $timestamp) );
					if ( date('Y', $timestamp) == $e_year ) {
						$item['selected'] = true;
					}
					array_push( $itemArray, $item );
				}
				$dd_year = HTML_dropdown( 'Year', 'year', $itemArray, false );
				
				echo($dd_day . ' ' . $dd_month . ' ' . $dd_year . '<p />');
				
				// $timestamp = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
				
				// Hour
				$itemArray = array();
				for ( $i = 24; $i >= 1; $i-- ) {
					$timestamp = mktime($i, date('i'), date('s'), date('m'), date('d'), date('Y'));
					if ( $i < 12) {
						$item = array( 'label' => date('h \a\m / H', $timestamp), 'value' => date('H', $timestamp) );
					} else {
						$item = array( 'label' => date('h \p\m / H', $timestamp), 'value' => date('H', $timestamp) );
					}
						
					if ( $i == $e_hour ) {
						$item['selected'] = true;
					}
					array_push( $itemArray, $item );
				}
				$dd_hour = HTML_dropdown( 'Hour', 'hour', $itemArray, false );
				$dd_minute = '<label for="mm">Minute</label> <input name="minute" id="minute" type="text" value="'.$e_minute.'" size="2" maxlength="2" />';
				$dd_second = '<label for="mm">Second</label> <input name="second" id="second" type="text" value="'.$e_second.'" size="2" maxlength="2" />';
				echo($dd_hour . ' ' . $dd_minute . ' ' . $dd_second . '<p />');
			?>
			
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
			<input type="button" class="bginput" value="ok" onclick="ins_style_dropdown(this.form.blog_text,this.form.style_dropdown.value);"/><p />
			
			<?php emoticons_show(); ?><p />
			
			<a href="javascript:openpopup('image_list.php',<?php echo( $theme_vars[ 'popup_window' ][ 'width' ] ); ?>,<?php echo( $theme_vars[ 'popup_window' ][ 'height' ] ); ?>,true);"><?php echo( $lang_string[ 'view_images' ] ); ?></a><br />
			<?php echo image_dropdown(); ?><p />
			
			<label for="blog_text"><?php echo( $lang_string[ 'label_entry' ] ); ?></label><br />
			<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="text" name="blog_text" rows="20" cols="50" autocomplete=OFF></textarea><p />
			
			<label for="blog_relatedlink"><?php echo( $lang_string[ 'label_relatedlink' ] ); ?></label><br />
			<input type="text" name="blog_relatedlink" autocomplete=OFF value="" style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;"><p />
			
			<?php if ( $blog_config[ 'blog_trackback_enabled' ] ) { ?>
		      <label for="tb_ping"><?php echo( $lang_string[ 'label_tb_ping' ] ); ?></label><br />
		      <input type="text" id="tb_ping" name="tb_ping" 
		      <?php if( $blog_config[ 'blog_trackback_auto_discovery' ] ) { echo ' value="' . $lang_string[ 'label_tb_autodiscovery' ] . '" '; } ?>
		      style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;"><p />
			<?php } ?>
			
			<?php echo( category_selection_box() ); ?>
			
			<input type="submit" name="preview" value="<?php echo( $lang_string[ 'btn_preview' ] ); ?>" onclick="this.form.action='preview_cgi.php';" />
			<input type="submit" name="submit" value="<?php echo( $lang_string[ 'btn_post' ] ); ?>" onclick="this.form.action='add_cgi.php';" /><p />
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
