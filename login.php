<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	
	read_config();
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'login' );
	
	// ---------------
	// POST PROCESSING
	// ---------------

		if ($_SERVER["HTTPS"] != 'on') {
		    if ($blog_config->getTag('HTTPS') == 'REQUIRE') {
                        $url = $blog_config->getTag('HTTPS_URL');
                        if (empty($url)) {
			    $url = str_replace('http://', 'https://', sb_curPageURL()); 
			}
			header("Location: $url");
		    }
		}
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $logged_in, $theme_vars, $blog_theme, $blog_config;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
			
		// PAGE CONTENT BEGIN
		ob_start(); 

		if ($_SERVER["HTTPS"] != 'on') {
		    if ($blog_config->getTag('HTTPS') == 'WARN') {
			print "<p style='background-color: red; color: white'>WARNING: Password will be sent unencrypted!</p>"; 
                        $url = $blog_config->getTag('HTTPS_URL');
                        if (empty($url)) {
			    $url = str_replace('http://', 'https://', sb_curPageURL()); 
			}
			print "<p><a href='$url'>Attempt secure mode</a>.</p>"; 
		    }
		}

?>
		<p><?php echo( $GLOBALS['lang_string']['instructions'] ); ?></p>
		
		<hr />
		
		<form action="login_cgi.php" method="post" onsubmit="return validate(this)">
			<label for="user"><?php echo( $GLOBALS['lang_string']['username'] ); ?></label><br />
			<input type="text" name="user" size="40"><p />
			
			<label for="pass"><?php echo( $GLOBALS['lang_string']['password'] ); ?></label><br />
			<input type="password" name="pass" size="40"><p />
			
			<input type="submit" name="submit" value="<?php echo( $GLOBALS['lang_string']['submit_btn'] ); ?>" />
		</form>
		
		<?php 

                $restored = restore_post();

                if (!empty($restored)) {
                        $type = $restored[0];
                        // TODO add to language file
                        echo( "<p>Don't worry!  Your draft has been saved, login to restore your last draft.</p>");
                }

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
	
	// Extra Javascript
	ob_start();
?>
<script type="text/javascript">
	// <!--
	function validate(theform) {
		if (theform.user.value=="" || theform.pass.value=="") {
			alert("<?php echo( $GLOBALS['lang_string']['form_error'] ); ?>");
			return false;
		} else {
			return true;
		}
	}
	// -->
	</script>
<?php
	$page_template->appendTag('{JAVASCRIPT}', ob_get_clean());

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
