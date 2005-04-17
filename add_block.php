<?php
	/**************************************************************************
	MODIFICACIONES PARA LA GESTION DE LOS BLOQUES FIJOS DEL SPHPBLOG
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	En el fichero "blocks.txt" del directorio "config" se definen los bloques
	por defecto:

	#menu_home|{menu_display_links}|#menu_menu|{menu_display_user}|#menu_archive|{menu_display_blognav}|#menu_categories|{menu_display_categories}|#menu_setup|{menu_display_setup}|#menu_most_recent|{menu_most_recent_comments}|#search_title|{menu_search_field}|#menu_most_recent_trackback|{menu_most_recent_trackbacks}|#menu_most_recent_entries|{menu_most_recent_entries}

	De modo que "#cadena1" es el identificador del bloque usado para los
	lenguajes, y "{cadena2}" es el nombre de la funcion de "sb_theme.php" que
	construye el bloque.

	El caracter "#" lo usamos tanto para mostrar el titulo en el lenguage
	seleccionado, como para deshabilitar la edicion y borrado del bloque.
	Lineas 76 a 80 y 92 a 98 respectivamente.
	**************************************************************************/

	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'add_block' );
	
	if ( isset( $_POST[ 'block_name' ] ) ) {
		if(!isset($_POST[ 'block_id' ])) $_POST[ 'block_id' ] = '';
		$ok = write_block( stripslashes( $_POST[ 'block_name' ] ), stripslashes( $_POST[ 'block_content' ] ), $_POST[ 'block_id' ], $_POST[ 'block_scope' ] , $_POST[ 'position_dropdown'] );
	}
	
	if ( isset( $_GET[ 'action' ] ) ) {
		$action = stripslashes( $_GET[ 'action' ] );
		if ( $action === 'edit' ) {
			$block_id = stripslashes( $_GET[ 'block_id' ] );
			// nothing
		} else {
			$ok = modify_block( $action, stripslashes( $_GET[ 'block_id' ] ) );
		}
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
	<script type="text/javascript">
		<!--
		// Validate the Form
		function validate_block(theform) {
			if (theform.block_name.value=="" || theform.block_content.value=="") {
				alert("<?php echo( $lang_string[ 'form_error' ] ); ?>");
				return false;
			} else {
				return true;
			}
		}
		-->
	</script>
	<?php require_once('scripts/sb_editor.php'); ?>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
</head>
<?php 
	function page_content() {
		global $block_id, $block_name, $block_content, $action, $lang_string, $user_colors, $theme_vars;

		//$result = initialize_blocks();

		echo( '<h2>' . $lang_string[ 'title' ] . '</h2>' );
		echo( '<p>' . $lang_string[ 'instructions' ] . '</p>' );
		
		// Read blocks file.
		$filename = 'config/blocks.txt';
		$result = sb_read_file( $filename );
		
		// Create array.
		$str = NULL;
		if ( $result ) {
			
			echo( '<div class="hr"><hr /></div>' );
			echo '<p>' . $lang_string[ 'instructions_modify' ] . '</p>';
	
			$block_content = '';
			$block_name = '';
			$block_scope = '';
			$block_status = '';
			$block_position = '';
			if($action != 'edit')
				$block_id = NULL;
		
			$array = explode('|', $result);
			for ( $i = 0; $i < count( $array ); $i+=2 ) {
				$array2 = explode('¤', $array[$i]); //This is the 255 ascii char

				if (substr ($array[$i], 0, 1) != '#') {
					$block_title =  $array2[0];
				} else {
					$block_title =  '[' . $lang_string[substr($array2[0],1)] . ']';
				}
				$block_title .= '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
				//Scope
				if ($array2[1] == '1') 
					$block_title .= '(' . $lang_string[ 'block_scope_pri' ] . ' - ';
				else
					$block_title .= '(' . $lang_string[ 'block_scope_pub' ] . ' - ';

				//Status
				if ($array2[2] == '1') 
					$block_title .= ' ' . $lang_string[ 'block_status_dis' ] . ' - ';
				else
					$block_title .= ' ' . $lang_string[ 'block_status_ena' ] . ' - ';
					
				//Position
				switch ($array2[3]) {
				  case "T" : 
				  	$block_title .= ' ' . $lang_string[ 'block_position_top' ] . ') ';
					break;
				  case "B" :
				  	$block_title .= ' ' . $lang_string[ 'block_position_botton' ] . ') ';
					break;
				  case "L" :
				  	$block_title .= ' ' . $lang_string[ 'block_position_left' ] . ') ';
					break;
				  case "C" :
				  	$block_title .= ' ' . $lang_string[ 'block_position_center' ] . ') ';
					break;
				  default :
				  	$block_title .= ' ' . $lang_string[ 'block_position_right' ] . ') ';
					break;
				};

				$str = $str . ( 1 + ($i/2) ) . ' - ' . $block_title . '<br />';

				$str = $str . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
				if ( $i > 1 ) {
					$str = $str . '<a href="add_block.php?action=up&block_id='.$i.'">' . $lang_string[ 'up' ] . '</a> | ';
				} else {
					$str = $str . $lang_string[ 'up' ] . ' | ';
				}
				if ( $i < ( count( $array ) - 2 ) ) {
					$str = $str . '<a href="add_block.php?action=down&block_id='.$i.'">' . $lang_string[ 'down' ] . '</a> | ';
				} else {
					$str = $str . $lang_string[ 'down' ] . ' | ';
				}
				if (substr ($array[$i], 0, 1) != '#') {
					$str = $str . '<a href="add_block.php?action=edit&block_id='.$i.'">' . $lang_string[ 'edit' ] . '</a> | ';
					$str = $str . '<a href="add_block.php?action=delete&block_id='.$i.'">' . $lang_string[ 'delete' ] . '</a> | ';
				} else {
					$str = $str .  $lang_string[ 'edit' ] . ' | ';
					$str = $str .  $lang_string[ 'delete' ] . ' | ';
				}

				//Status
				if ($array2[2] == '1') 
					$str = $str . '<a href="add_block.php?action=enable&block_id='.$i.'">' . $lang_string[ 'enable' ] . '</a> ';
				else
					$str = $str . '<a href="add_block.php?action=disable&block_id='.$i.'">' . $lang_string[ 'disable' ] . '</a> ';
				

				$str = $str . '<br /><br />';
				if($action === 'edit' && $i == $block_id) {
					$block_content = $array[$i+1];
					$block_name = $array2[0];
					//Scope
					if ($array2[1] == '1') 
						$block_scope = 'CHECKED'; 
						
					//Position
					if (isset($array2[3]))
						$block_position = $array2[3];
					else
						$block_position = "R";
				} 
			}
		}
		
		echo( $str );
		
		echo( '<div class="hr"><hr /></div>' );
		
		?>
		
		<form action='add_block.php' method="POST" name="editor" id="editor" onSubmit="return validate_block(this)">
		
			<label for="block_name"><?php echo( $lang_string[ 'block_name' ] ); ?></label><br />
			<input type="text" name="block_name" value="<?php echo $block_name; ?>" size="40" /><br /><br />
			
			<?php echo( $lang_string[ 'block_content' ] ); ?><br />
			<input type="button" class="bginput" value="<?php echo( $lang_string[ 'btn_bold' ] ); ?>" onclick="ins_styles(this.form.block_content,'b','');" />
			<input type="button" class="bginput" value="<?php echo( $lang_string[ 'btn_italic' ] ); ?>" onclick="ins_styles(this.form.block_content,'i','');" />
			<input type="button" class="bginput" value="<?php echo( $lang_string[ 'btn_url' ] ); ?>" onclick="ins_url(this.form.block_content);" />
			<input type="button" class="bginput" value="<?php echo( $lang_string[ 'btn_image' ] ); ?>" onclick="ins_image_v2(this.form.block_content);"/>
			
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
			<input type="button" class="bginput" value="ok" onclick="ins_style_dropdown(this.form.block_content,this.form.style_dropdown.value);" /><br /><br />
			
			<a href="javascript:openpopup('image_list.php',<?php echo( $theme_vars[ 'popup_window' ][ 'width' ] ); ?>,<?php echo( $theme_vars[ 'popup_window' ][ 'height' ] ); ?>,true);"><?php echo( $lang_string[ 'view_images' ] ); ?></a><br />
			<?php echo image_dropdown(); ?><br />

			<label for="block_scope"><?php echo( $lang_string[ 'block_scope_pri' ] ); ?></label>&nbsp;<input type="checkbox" id="block_scope" name="block_scope" <?php echo $block_scope; ?>>
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <label for="position_dropdown"><?php echo( $lang_string[ 'block_position' ] ); ?></label>

			<select name="position_dropdown">
				<option label="<?php echo( $lang_string[ 'block_position_top' ] ); ?>" value="T"><?php echo( $lang_string[ 'block_position_top' ] ); ?></option>
				<option label="<?php echo( $lang_string[ 'block_position_left' ] ); ?>" value="L"><?php echo( $lang_string[ 'block_position_left' ] ); ?></option>
				<option label="<?php echo( $lang_string[ 'block_position_center' ] ); ?>" value="C"><?php echo( $lang_string[ 'block_position_center' ] ); ?></option>
				<option label="<?php echo( $lang_string[ 'block_position_right' ] ); ?>" value="R"><?php echo( $lang_string[ 'block_position_right' ] ); ?></option>
				<option label="<?php echo( $lang_string[ 'block_position_botton' ] ); ?>" value="B"><?php echo( $lang_string[ 'block_position_botton' ] ); ?></option>
			</select><br /><br />
			<script LANGUAGE="Javascript">
				document.editor.position_dropdown.value='<?php echo $block_position; ?>';
			</script>			
			<label for="block_content"><?php echo( $lang_string[ 'label_entry' ] ); ?></label><br />
			<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="block_content" name="block_content" rows="20" cols="50"><?php echo $block_content; ?></textarea><br /><br />
			
			<?php if( isset( $block_id ) ) { ?>
			<input type="hidden" name="block_id" value="<?php echo $block_id; ?>" />
			<?php } ?>
			<input type="submit" name="submit" value="&nbsp;<?php if ( isset ( $block_id ) && $action === 'edit' ) { echo $lang_string[ 'submit_btn_edit' ]; } else { echo $lang_string[ 'submit_btn_add' ]; } ?>&nbsp;" onclick="this.form.action='add_block.php';" />

		</form>
		
		<?php 
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
