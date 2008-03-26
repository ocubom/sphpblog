<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'upload_img' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
			
		// PAGE CONTENT BEGIN
		ob_start(); ?>

		<?php
		$formstate = $_REQUEST['formstate'];
		if($formstate !="showuploaders"){
	echo('<form action="upload_img.php" method="get">'.$GLOBALS['lang_string']['howmany'].' <select id="howmany" name="howmany">');
		for($i=1;$i<=10;$i++){
			echo('<option value="'.$i.'">'.$i.'</option>');
		}
echo <<<EOF
	</select>
	<input name="formstate" type="hidden" value="showuploaders" />
	<input type="submit" value="next &raquo;" />
		</form>
EOF;
		} else {
			$howmany = $_REQUEST['howmany'];
			$formstate = "notshowuploaders";
			
			echo( $GLOBALS['lang_string']['instructions'] );
			echo("<p />");
		
			echo('<form enctype="multipart/form-data" action="upload_img_cgi.php" method="POST">');
			echo( $GLOBALS['lang_string']['select_file'] );
			echo("<br /><br />");
			for($i=1;$i<=$howmany;$i++){
				echo("<input name=\"userfile[]\" type=\"file\"><br />");			
			}
			echo("<input name=\"howmany\" type=\"hidden\" value=\"$howmany\" />");
			echo("<input type=\"submit\" value=\"".$GLOBALS['lang_string']['upload_btn']."\">"); 
			echo("</form>");
		}		
		?>
		<?php
		// PAGE CONTENT END
		$entry_array[ 'entry' ] = ob_get_clean();
		
		// THEME ENTRY
		echo( theme_staticentry( $entry_array ) );
	}
	
	// ----
	// HTML
	// ----
	
	// Main Page Template
	$page_template = new Template(TEMPLATE_DIR.'layouts/index.tpl');
	
	// Meta Data
	get_init_code($page_template);
	
	// Page Title
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '.$GLOBALS['lang_string']['title']);
	
	// Theme Layout
	ob_start();
	theme_pagelayout();	
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
