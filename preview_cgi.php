<?php 

	require('scripts/sb_functions.php');

	global $logged_in;

	$logged_in = logged_in( true, true );

	

	read_config();

	

	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');

	sb_language( 'add' );

	

	function category_selection_box () {

		// Returns categories HTML.

		global $lang_string, $theme_vars, $temp_categories;

		

		if ( array_key_exists( "catlist", $_POST ) ) {

			$blog_categories = $_POST["catlist"];

		} else {

			if ( isset( $temp_categories ) ) {			

				$blog_categories = explode( ",", $temp_categories );

			}

		}

		

		$catArray = get_category_array();

		if ( count($catArray) > 0) {

			$str = "<select name=\"catlist[]\" size=\"". min( 8, count($catArray) ) ."\" multiple>\n";

			for ( $i = 0; $i < count( $catArray ); $i++ ) {

				$id_number = $catArray[$i][0];

				$name_str = $catArray[$i][1];

				$space_count = $catArray[$i][2];

				

				$label = "";

				for ( $j = 0; $j < $space_count; $j++ ) {

					$label = $label . "&nbsp;";

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

					$str = $str . "<option label=\"$label\" value=\"$id_number\" selected>$label</option>\n";

				} else {

					$str = $str . "<option label=\"$label\" value=\"$id_number\">$label</option>\n";

				}

				

			}

			$str = $str . "</select>\n";

		}

		

		return ( $str );

	}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

        "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string['html_charset'] ); ?>" />

	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />

	<?php require('themes/' . $blog_theme . '/user_style.php'); ?>

	<script language="JavaScript" src="scripts/sb_javascript.js"></script>

	<?php require('scripts/sb_editor.php'); ?>

	<title><?php echo( $lang_string['title_preview'] ); ?></title>

</head>

<?php 

	function page_content() {

		global $lang_string, $user_colors, $blog_config, $theme_vars;

		

		?>

		

		<h2><?php echo( $lang_string['title_preview'] ); ?></h2>

		<?php echo( $lang_string['instructions_preview'] ); ?><p />

		

		<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>

		<?php

			global $blog_subject, $blog_text, $temp_subject, $temp_text, $entry, $temp_tb_ping, $temp_categories;

			

			if ( isset( $_GET['entry'] ) ) {

				$entry = 'content/'.$_GET['y'].'/'.$_GET['m'].'/'.$_GET['entry'];

				

				$blog_content = read_entry_from_file( $entry );

				

				if ( file_exists( $entry . ".txt" ) ) {

					$filename = $entry . ".txt";

				} elseif ( file_exists( $entry . ".txt.gz" ) ) {

					$filename = $entry . ".txt.gz";

				}

				$blog_entry_data = blog_entry_to_array( $filename );

				

				$temp_subject = $blog_entry_data["SUBJECT"];

				$temp_text = $blog_entry_data["CONTENT"];

				$temp_tb_ping = $blog_entry_data["TB_PING"];

				if ( array_key_exists( "CATEGORIES", $blog_entry_data ) ) {

					$temp_categories = $blog_entry_data["CATEGORIES"];

				}

				

				echo( $blog_content );

			} else {

				$entry = NULL;

				if ( isset( $_POST['entry'] ) ) {

					$entry = $_POST['entry'];

				}

				

				$temp_subject = stripslashes( $_POST['blog_subject'] );

				$temp_text = stripslashes( $_POST['blog_text'] );

				$temp_tb_ping = stripslashes( $_POST['tb_ping'] );

				

				$blog_content = preview_entry( $temp_subject, $temp_text, $temp_tb_ping );		

				

				echo( $blog_content );

			}

		?>

		<p />

		<h2><?php echo( $lang_string['title_update'] ); ?></h2>

		<?php echo( $lang_string['instructions_update'] ); ?><p />

		

		<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>

		<form action='add_cgi.php' method="POST" name="editor" id="editor" onSubmit="return validate(this)">

		

			<input type="hidden" name="entry" value="<?php global $entry; echo( $entry ); ?>">

			

			<label for="blog_subject"><?php echo( $lang_string['label_subject'] ); ?></label><br />

			<input type="text" name="blog_subject" autocomplete="OFF" value="<?php global $temp_subject; echo( $temp_subject ); ?>" size="40"><br /><br />

			

			<?php echo( $lang_string['label_insert'] ); ?><br />

			<input type="button" class="bginput" value="<?php echo( $lang_string['btn_bold'] ); ?>" onclick="ins_styles(this.form.blog_text,'b','');" />

			<input type="button" class="bginput" value="<?php echo( $lang_string['btn_italic'] ); ?>" onclick="ins_styles(this.form.blog_text,'i','');" />

			<input type="button" class="bginput" value="<?php echo( $lang_string['btn_url'] ); ?>" onclick="ins_url(this.form.blog_text);" />

			<input type="button" class="bginput" value="<?php echo( $lang_string['btn_image'] ); ?>" onclick="ins_image_v2(this.form.blog_text);"/>

			

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

			<input type="button" class="bginput" value="ok" onclick="ins_style_dropdown(this.form.blog_text,this.form.style_dropdown.value);"/><br><br>

			

			<a href="javascript:openpopup('image_list.php',<?php echo( $theme_vars['popup_window']['width'] ); ?>,<?php echo( $theme_vars['popup_window']['height'] ); ?>,true);"><?php echo( $lang_string['view_images'] ); ?></a><br />

			<?php echo image_dropdown(); ?><br /><br />

			

			<label for="blog_text"><?php echo( $lang_string['label_entry'] ); ?></label><br />

			<textarea style="width: <?php global $theme_vars; echo( $theme_vars['max_image_width'] ); ?>px;" id="text" name="blog_text" rows="20" cols="50" autocomplete="OFF"><?php global $temp_text; echo( $temp_text ); ?></textarea><br /><br />

			

			<?php if ( $blog_config[ 'blog_trackback_enabled' ] ) { ?>

		      <label for="tb_ping"><?php echo( $lang_string['label_tb_ping'] ); ?></label><br />

		      <input type="text" id="tb_ping" name="tb_ping" 

		      <?php global $temp_tb_ping; if( $blog_config[ 'blog_trackback_auto_discovery' ] ) { echo ' value="' . $temp_tb_ping . '" '; } ?>

		      style="width: <?php global $theme_vars; echo( $theme_vars['max_image_width'] ); ?>px;"><br /><br />

			<?php } ?>

			

			<?php echo( category_selection_box() ); ?><br /><br />

			<input type="submit" name="preview" value="<?php echo( $lang_string['btn_preview'] ); ?>" onclick="this.form.action='preview_cgi.php'"; />

			<input type="submit" name="submit" value="<?php echo( $lang_string['btn_post'] ); ?>" onclick="this.form.action='add_cgi.php'" />

			

		</form>

		

		<?php 

	}

?>

<?php 

	theme_pagelayout();

?>

</html>

