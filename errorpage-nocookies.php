<?php
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	$page_title = _sb('errorpage-nocookies_title');
	// ---------------
	// POST PROCESSING
	// ---------------

	// ------------
	// PAGE CONTENT
	// ------------
	require_once('scripts/sb_header.php');
	function page_content() {
		global $blog_config, $blog_theme;

		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = _sb('errorpage-nocookies_title');
		$entry_array[ 'entry' ] = '<table width="100%"	border="0"><tr><td><img src="themes/' . $blog_theme . '/images/error_icon.png" alt="" border="0" /></td>';
		$entry_array[ 'entry' ]	 .= '<td>' . _sb('errorline1') . '<br><br>';
		$entry_array[ 'entry' ]	 .= _sb('errorline2') . '<br><br>';
		$entry_array[ 'entry' ]	 .= _sb('clientid') . @gethostbyaddr(getIP()) . '</td></tr></table>';

		// THEME ENTRY
		echo( theme_staticentry( $entry_array ) );
	}
	require_once(ROOT_DIR . '/scripts/sb_footer.php');
?>
