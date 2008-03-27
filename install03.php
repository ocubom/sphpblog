<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, false );
	
	read_config();
	
	// ---------------
	// POST PROCESSING
	// ---------------
	
	// Validate Language
	$temp_lang = '';
	if ( isset( $_POST['blog_language'] ) ) {
		$temp_lang = sb_stripslashes( $_POST['blog_language'] );
	} else if ( array_key_exists( 'blog_language', $_GET ) ) {	
		$temp_lang = sb_stripslashes( $_GET['blog_language'] );
	}
	if (validate_language($temp_lang) == false) {
		$temp_lang = 'english';
	}
	
	global $blog_config;
	$blog_config->getTag('BLOG_LANGUAGE') = $temp_lang;
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'install03' );
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $lang_string, $blog_config;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = $GLOBALS['lang_string']['title'];
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		echo( $GLOBALS['lang_string']['instructions'] . '<p />' );
		
		echo( $GLOBALS['lang_string']['supported']. '<br />');
		echo( $GLOBALS['lang_string']['standard'] . ( CRYPT_STD_DES == 1 ? '<b style="color: green;">' . $GLOBALS['lang_string']['enabled'] . '</b>' : '<b style="color: red;">' . $GLOBALS['lang_string']['disabled'] . '</b>' ) . '<br />');
		echo( $GLOBALS['lang_string']['extended'] . ( CRYPT_EXT_DES == 1 ? '<b style="color: green;">' . $GLOBALS['lang_string']['enabled'] . '</b>' : '<b style="color: red;">' . $GLOBALS['lang_string']['disabled'] . '</b>' ) . '<br />');
		echo( $GLOBALS['lang_string']['MD5'] . ( CRYPT_MD5 == 1 ?'<b style="color: green;">' . $GLOBALS['lang_string']['enabled'] . '</b>' : '<b style="color: red;">' . $GLOBALS['lang_string']['disabled'] . '</b>' ) . '<br />');
		echo( $GLOBALS['lang_string']['blowfish'] . ( CRYPT_BLOWFISH == 1 ? '<b style="color: green;">' . $GLOBALS['lang_string']['enabled'] . '</b>' : '<b style="color: red;">' . $GLOBALS['lang_string']['disabled'] . '</b>' ) . '<br />');
		echo('<br />');
	
		$hashtest = crypt('test');
		if ( strlen( $hashtest ) <= 13 ) {
			echo( $GLOBALS['lang_string']['using_standard'] );
		} else if ( strlen( $hashtest ) <= 20 ) {
			echo( $GLOBALS['lang_string']['using_extended'] );
		} else if ( substr( $hashtest, 0, 3 ) == '$1$' ) {
			echo( $GLOBALS['lang_string']['using_MD5'] );
		} else if ( substr( $hashtest, 0, 3 ) == '$2$' || substr( $hashtest, 0, 4 ) == '$2a$' ) {
			echo( $GLOBALS['lang_string']['using_blowfish'] );
		} else {
			echo( $GLOBALS['lang_string']['using_unknown'] );
		}
		echo( str_replace( '%string', CRYPT_SALT_LENGTH, $GLOBALS['lang_string']['salt_length'] ) );
		?>
		
		<hr />
		
		<form action="install04.php?blog_language=<?php echo( $blog_config->getTag('BLOG_LANGUAGE') ); ?>" method="post" onsubmit="return validate(this)">
			<label for="user"><?php echo( $lang_string['username'] ); ?></label><br />
			<input type="text" name="user" autocomplete="OFF" size="40"><br /><br />
			
			<label for="pass"><?php echo( $lang_string['password'] ); ?></label><br />
			<input type="password" name="pass" autocomplete="OFF" size="40"><br /><br />
			
			<input type="submit" name="submit" value="<?php echo( $lang_string['submit_btn'] ); ?>" />
		</form>
		
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
	
	// Extra Javascript
	ob_start();
?>	
	<script type="text/javascript">
	<!--
	function validate(theform) {
		if (theform.user.value=="" || theform.pass.value=="") {
			alert("<?php echo( $GLOBALS['lang_string']['form_error'] ); ?>");
			return false;
		} else {
			return true;
		}
	}
	//-->
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
