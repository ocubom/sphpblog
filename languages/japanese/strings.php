<?php
	// Japanese Language Translations
	// (c) 2004 Sanshiro Akiyama (0.3.7)
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Japanese
		$lang_string['language'] = 'japanese';
		
		// ISO Charset: EUC-JP
		$lang_string['html_charset'] = 'EUC-JP';
		$lang_string['php_charset'] = 'EUC-JP';
		
		$lang_string['locale'] = 'ja_JA'; // <-- New 0.3.7
		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
	$lang_string['menu_links'] = "¥³¥ó¥Æ¥ó¥Ä";
	$lang_string['menu_home'] = "¥Û¡¼¥à";
	$lang_string['menu_contact'] = "¥á¡¼¥ë"; // <-- New 0.3.8
	$lang_string['menu_stats'] = "Åý·×¥Ç¡¼¥¿"; // <-- New 0.3.7r
	$lang_string['menu_archive'] = "¥¢¡¼¥«¥¤¥Ö";
	$lang_string['menu_menu'] = "¥á¥Ë¥å¡¼";
	$lang_string['menu_add'] = "¿·µ¬¥¨¥ó¥È¥ê¡¼";
	$lang_string['menu_add_static'] = "ÀÅÅª¥Ú¡¼¥¸¤ÎºîÀ®";
	$lang_string['menu_upload'] = "²èÁü¤Î¥¢¥Ã¥×¥í¡¼¥É";
	$lang_string['menu_setup'] = "ÀßÄê";
	$lang_string['menu_categories'] = "¥«¥Æ¥´¥ê¡¼"; // 0.3.7q
	$lang_string['menu_info'] = "¥¤¥ó¥Õ¥©¥á¡¼¥·¥ç¥ó"; // <-- New 0.3.7
	$lang_string['menu_options'] = "¥ª¥×¥·¥ç¥óÀßÄê";
	$lang_string['menu_themes'] = "¥Æ¡¼¥Þ";
	$lang_string['menu_colors'] = "ÇÛ¿§";
	$lang_string['menu_change_login'] = "¥í¥°¥¤¥ó¥­¡¼ÊÑ¹¹";
	$lang_string['menu_logout'] = "¥í¥°¥¢¥¦¥È";
	$lang_string['menu_login'] = "¥í¥°¥¤¥ó";
	$lang_string['menu_most_recent'] = "ºÇ¿·¤Î¥³¥á¥ó¥È";
	$lang_string['menu_most_recent_entries'] = "ºÇ¿·¤Î¥¨¥ó¥È¥ê¡¼";
	$lang_string['menu_most_recent_trackback'] = "ºÇ¿·¤Î¥È¥é¥Ã¥¯¥Ð¥Ã¥¯"; 
	$lang_string['menu_add_block'] = "¥«¥¹¥¿¥à¥Ö¥í¥Ã¥¯";
		
	// Other
	$lang_string['home'] = 'Return to Home';
	$lang_string['nav_next'] = 'Next'; // <-- New 0.3.7
	$lang_string['nav_back'] = 'Back'; // <-- New 0.3.7
	$lang_string['search_title'] = '¥µ¥¤¥ÈÆâ¸¡º÷'; // <-- New 0.3.7
	$lang_string['search_go'] = '¸¡º÷'; // <-- New 0.3.7
	$lang_string['page_generated_in'] = 'Page Generated in %s seconds'; // <-- New 0.3.7
		
	// SB Functions
	$lang_string['sb_months'] = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
	$lang_string['sb_default_title'] = 'No Title';
	$lang_string['sb_default_author'] = 'No Author';
	$lang_string['sb_default_footer'] = 'No Footer';
		
	$lang_string['sb_edit'] = 'ÊÔ½¸';
	$lang_string['sb_delete'] = 'ºï½ü';
	$lang_string['sb_permalink'] = '¤³¤Î¥¨¥ó¥È¥ê¡¼¤ÎURL'; // <-- New 0.3.8
	$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
	$lang_string['sb_relatedlink'] = 'related link'; // <-- New in 0.4.6
		
	$lang_string['sb_add_comment_btn'] = '¥³¥á¥ó¥È¤ò½ñ¤¯';
	$lang_string['sb_comment_btn_number_first'] = true;
	$lang_string['sb_comment_btn'] = 'comment';
	$lang_string['sb_comments_plural_btn_number_first'] = true;
	$lang_string['sb_comments_plural_btn'] = 'comments';
		
	// ( 1 view )
	$lang_string['sb_view_counter_pre'] = '';
	$lang_string['sb_view_counter_post'] = ' view';
	// ( 2 views )
	$lang_string['sb_view_counter_plural_pre'] = '';
	$lang_string['sb_view_counter_plural_post'] = ' views';
		
	$lang_string['sb_add_link_btn'] = '¥ê¥ó¥¯¤ÎÀßÄê¡¦ÄÉ²Ã';
		
	$lang_string['sb_rate_entry_btn'] = '¥¨¥ó¥È¥ê¡¼¤òºÎÅÀ';
		
	// Entry Text Editor
	if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
	$lang_string['label_subject'] = "¥¿¥¤¥È¥ë";
	$lang_string['label_insert'] = "¥¿¥°¤ÎÁÞÆþ";
	$lang_string['btn_bold'] = "¥Ü¡¼¥ë¥É";
	$lang_string['btn_italic'] = "¥¤¥¿¥ê¥Ã¥¯";
	$lang_string['btn_image'] = "¥¤¥á¡¼¥¸";
	$lang_string['btn_url'] = "¥ê¥ó¥¯";
	$lang_string['view_images'] = "¥¢¥Ã¥×¥í¡¼¥É²èÁü¤Î»²¾È";
	$lang_string['label_entry'] = "ÆâÍÆ";
	$lang_string['btn_preview'] = "&nbsp;¥×¥ì¥Ó¥å¡¼&nbsp;";
	$lang_string['btn_post'] = "&nbsp;Åê¹Æ&nbsp;";
	$lang_string['file_name'] = "¤³¤Î¥¨¥ó¥È¥ê¡¼¤Î¥Õ¥¡¥¤¥ëÌ¾ (¶õÍóÉÔ²Ä)"; 
	// <-- New 0.3.8
	// Javascript Strings
	$lang_string['insert_styles'] = "¥Æ¥­¥¹¥È¤òÆþÎÏ¤·¤Æ¤¯¤À¤µ¤¤¡£";
	$lang_string['insert_image'] = "²èÁü¤ÎURL¤òÆþÎÏ";
	$lang_string['insert_url1'] = "¥ê¥ó¥¯¥Æ¥­¥¹¥È(¥ª¥×¥·¥ç¥ó)";
	$lang_string['insert_url2'] = "¥ê¥ó¥¯ÀèURL";
	$lang_string['insert_url3'] = "¿·¤·¤¤¥¦¥£¥ó¥É¥¦¤Ç³«¤¯ (¥ª¥×¥·¥ç¥ó)"; 
	// <-- New 0.3.6
	$lang_string['form_error'] = "¥¿¥¤¥È¥ë¤ÈÆâÍÆ¤òµ­Æþ¤·¤Æ²¼¤µ¤¤¡£";	
	// More Javascript Strings <-- New 0.3.6
	$lang_string['insert_image_optional'] = '¥ª¥×¥·¥ç¥ó:';
	$lang_string['insert_image_width'] = '²£¥µ¥¤¥º (¥ª¥×¥·¥ç¥ó):';
	$lang_string['insert_image_height'] = '½Ä¥µ¥¤¥º (¥ª¥×¥·¥ç¥ó):';
	$lang_string['insert_image_popup'] = '¥Ý¥Ã¥×¥¢¥Ã¥×¥¦¥£¥ó¥É¥¦ÀßÄê(¥ª¥×¥·¥ç¥ó):';
	$lang_string['insert_image_float'] = '²èÁü¤Î²ó¤ê¹þ¤ß°ÌÃÖ(¥ª¥×¥·¥ç¥ó):';
		}
	
	switch ($page) {
	case 'add':
	// Add Entry
	$lang_string['title'] = "¿·µ¬¥¨¥ó¥È¥ê¡¼";
	$lang_string['instructions'] = "¿·¤·¤¤¥¨¥ó¥È¥ê¡¼¤òºîÀ®¤·¤Þ¤¹¡£<br />¥¨¥ó¥È¥ê¡¼¤Î³ÎÇ§¤Ï¡Ö¥×¥ì¥Ó¥å¡¼¡×¥Ü¥¿¥ó¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤¡£<br />´°À®¤·¤¿¥¨¥ó¥È¥ê¡¼¤ÎÅê¹Æ¤Ï¡ÖÅê¹Æ¡×¥Ü¥¿¥ó¤ò¥¯¥ê¥Ã¥¯¤·¤Æ²¼¤µ¤¤¡£";
	$lang_string['title_ad'] = "¥È¥é¥Ã¥¯¥Ð¥Ã¥¯¤Î³ÎÇ§"; // <-- New 0.3.8
	$lang_string['instructions_ad'] = "¼«Æ°Åª¤Ë¸¡½Ð¤µ¤ì¤¿URL¤Ç¤¹¡£¥È¥é¥Ã¥¯¥Ð¥Ã¥¯¤òµö²Ä¤¹¤ë¾ì¹ç¤Ï¡ÖOK¡×¥Ü¥¿¥ó¤ò²¡¤·¤Æ¤¯¤À¤µ¤¤¡£"; // <-- New 0.3.8
	$lang_string['label_tb_ping'] = "¥È¥é¥Ã¥¯¥Ð¥Ã¥¯Á÷¿® (¥«¥ó¥Þ¤Ç¶èÀÚ¤Ã¤ÆÊ£¿ô»ØÄê²ÄÇ½)"; // <-- New 0.3.8
	$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
	$lang_string['label_relatedlink'] = "Related Link"; // New for 0.4.6
	// Preview / Edit Entry
	$lang_string['title_preview'] = "¥×¥ì¥Ó¥å¡¼ / ÊÔ½¸";
	$lang_string['instructions_preview'] = "¥¨¥ó¥È¥ê¡¼¤ÎÊÔ½¸¤ò¹Ô¤¤¤Þ¤¹¡£¡Ê¥¿¥°¤ÏÉ¬¤ºÊÄ¤¸¤Æ²¼¤µ¤¤¡Ë'.";
	$lang_string['title_update'] = "¥¨¥ó¥È¥ê¡¼¤òºÆÅê¹Æ";
	$lang_string['instructions_update'] = "¥¨¥ó¥È¥ê¡¼¤ÎÅê¹Æ¡¢³ÎÇ§¤ò¹Ô¤¦»ö¤¬½ÐÍè¤Þ¤¹¡£";
	$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
	$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>¥¨¥ó¥È¥ê¡¼¤ÎÊÝÂ¸¤Ë¼ºÇÔ¤·¤Þ¤·¤¿¡£<br /><br />Server Reported:<br />";
	break;
	case 'add_static':
	// Add Entry
	$lang_string['title'] = "ÀÅÅª¥Ú¡¼¥¸¤ÎºîÀ®";
	$lang_string['instructions'] = "¥Ú¡¼¥¸±¦Â¦¤Î¥³¥ó¥Æ¥ó¥Ä¥¨¥ê¥¢¤Ë¥ê¥ó¥¯¤µ¤ì¤ëÀÅÅª¥Ú¡¼¥¸¤òºîÀ®¤·¤Þ¤¹¡£";
	// Preview / Edit Entry
				$lang_string['title_preview'] = "³ÎÇ§ / ÊÔ½¸";
	$lang_string['instructions_preview'] = "¤³¤³¤Ë¥×¥ì¥Ó¥å¡¼¤¬É½¼¨¤µ¤ì¤Þ¤¹¡Ê¥¿¥°¤ÏÉ¬¤ºÊÄ¤¸¤Æ²¼¤µ¤¤¡Ë";
	$lang_string['title_update'] = "ÀÅÅª¥Ú¡¼¥¸¤Î¥¢¥Ã¥×¥Ç¡¼¥È";
	$lang_string['instructions_update'] = "ÀÅÅª¥Ú¡¼¥¸¤ÎÅê¹Æ¡¢¥×¥ì¥Ó¥å¡¼¤¬¹Ô¤¨¤Þ¤¹¡£";
	$lang_string['form_error'] = "¥¿¥¤¥È¥ë¡¢ÆâÍÆ¡¢¥Õ¥¡¥¤¥ë¥Í¡¼¥à¤òµ­Æþ¤·¤Æ²¼¤µ¤¤";	
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>En¥¨¥ó¥È¥ê¡¼¤¬ÅÐÏ¿¤Ç¤­¤Þ¤»¤ó<br /><br />Server Reported:<br />";
				break;
	case 'add_block':
	// Add / Manage Blocks
	$lang_string['title'] = "¥Ö¥í¥Ã¥¯¤ÎÊÔ½¸¤ÈÄÉ²Ã";
	$lang_string['instructions'] = "¥«¥¹¥¿¥à¥Ö¥í¥Ã¥¯¤ÎÄÉ²Ã¤ÈÊÔ½¸¤ò¹Ô¤¤¤Þ¤¹¡£<br />¥«¥¹¥¿¥à¥Ö¥í¥Ã¥¯¤È¤Ï¥Ú¡¼¥¸±¦Éô¤Î¥á¥Ë¥å¡¼Æâ¤ËÇ¤°Õ¤ËÁý¤ä¤»¤ë¥Ö¥í¥Ã¥¯¤Ç¤¹¡£";
	$lang_string['up'] = "¾å¤ë";
	$lang_string['down'] = "²¼¤¬¤ë";
	$lang_string['edit'] = "ÊÔ½¸";
	$lang_string['delete'] = "ºï½ü";
	$lang_string['block_name'] = "¥Ö¥í¥Ã¥¯¥¿¥¤¥È¥ë";
	$lang_string['block_content'] = "¥Ö¥í¥Ã¥¯¤ÎÆâÍÆ";
	$lang_string['instructions_edit'] = "¥Ö¥í¥Ã¥¯ÊÔ½¸Ãæ";
$lang_string['instructions_modify'] = "¥¯¥ê¥Ã¥¯¤·¤Æ¥Ö¥í¥Ã¥¯¤òÊÑ¹¹¤·¤Æ²¼¤µ¤¤";
	$lang_string['submit_btn_edit'] = "¥¨¥Ç¥£¥Ã¥È";
	$lang_string['submit_btn_add'] = "ÄÉ²Ã";
	$lang_string['form_error'] = "¥¿¥¤¥È¥ë¤òµ­Æþ¤·¤Æ²¼¤µ¤¤¡£";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Static Pages:";
// Add / Manage Links
$lang_string['title'] = "¥ê¥ó¥¯¤ÎÄÉ²Ã¡¦ÊÔ½¸";
$lang_string['instructions'] = "Â¾¤Î¥µ¥¤¥È¤Ø¤Î¥ê¥ó¥¯¤òÄÉ²Ã¤·¤Þ¤¹¡£<br />ÄÉ²Ã¤Ï¥¢¥É¥ì¥¹¤òµ­Æþ¤·¡Ö¥ê¥ó¥¯¤ò²Ã¤¨¤ë¡×¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤¡£¥ê¥ó¥¯¤Î½ç½ø¤òÊÑ¹¹¤¹¤ë¤Ë¤Ï¡Ö¾å¤Ø¡×¡Ö²¼¤Ø¡×¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤¡£¥ê¥ó¥¯¤ò½¤Àµ¤¹¤ë¤Ë¤ÏÊÔ½¸¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤¡£¥ê¥ó¥¯¤òºï½ü¤Ïºï½ü¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤¡£";
$lang_string['up'] = "¾å¤Ø";
$lang_string['down'] = "²¼¤Ø";
$lang_string['edit'] = "½¤Àµ";
$lang_string['delete'] = "ºï½ü";
$lang_string['link_name'] = "Ì¾Á°:";
$lang_string['link_url'] = "¥ê¥ó¥¯ÀèURL: (¶õÍó¤Ç¥»¥Ñ¥ì¡¼¥¿¡¼¤Ë¤Ê¤ê¤Þ¤¹¡£)";
$lang_string['instructions_edit'] = "¥ê¥ó¥¯¤ÎÊÔ½¸Ãæ:";
$lang_string['instructions_modify'] = "¥ê¥ó¥¯¤ò½¤Àµ¤¹¤ë¤Ë¤Ï²¼¤Ë¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤¡£:";
$lang_string['submit_btn_edit'] = "¥ê¥ó¥¯¤ÎÊÔ½¸";
$lang_string['submit_btn_add'] = "¥ê¥ó¥¯¤ò²Ã¤¨¤ë";
$lang_string['form_error'] = "Ì¾Á°¤òµ­Æþ¤·¤Æ²¼¤µ¤¤¡£";
				break;
case 'categories':
// Add / Manage Links
$lang_string['title'] = "¥«¥Æ¥´¥ê¡¼¤ÎÄÉ²Ã¤ÈÊÔ½¸";

$lang_string['instructions'] = "°Ê²¼¤Î¥Õ¥©¡¼¥à¤ò»ÈÍÑ¤·¤Æ¥«¥Æ¥´¥ê¡¼¤ÎÄÉ²Ã¤ÈÊÔ½¸¤ò¹Ô¤¤¤Þ¤¹¡£<br /> ¤½¤ì¤¾¤ì¤Î¥«¥Æ¥´¥ê¹àÌÜ¤Ë¤Ï'¥«¥Æ¥´¥êÌ¾(IDÈÖ¹æ)'¤òÉÕ¤±¤Æ²¼¤µ¤¤¡£ <br />¥¹¥Ú¡¼¥¹¤¬¤¢¤ë¾ì¹ç¤Ï¤½¤Î¤Þ¤ÞÈ¿±Ç¤·¤Þ¤¹¡£<br /><br /><b>Îã:</b><br />°ìÈÌ(1)<br />¥Ë¥å¡¼¥¹(3)<br />&nbsp;&nbsp;¹ðÃÎ (6)<br />&nbsp;&nbsp;¥¤¥Ù¥ó¥È (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;²»³Ú (7)<br />¥Æ¥¯¥Î¥í¥¸¡¼ (2)<br />";
		$lang_string['error'] = "¥¨¥é¡¼";
		$lang_string['current_categories'] = "¥«¥ì¥ó¥È¥«¥Æ¥´¥ê¡¼";
		$lang_string['no_categories_found'] = "¥«¥Æ¥´¥ê¡¼¤¬¤¢¤ê¤Þ¤»¤ó";
		$lang_string['category_list'] = "¥«¥Æ¥´¥ê¡¼¥ê¥¹¥È";
		$lang_string['validate'] = "¥«¥Æ¥´¥ê¡¼¤òÍ­¸ú¤Ë¤¹¤ë";
		$lang_string['submit_btn'] = "&nbsp;·èÄê&nbsp;";
				break;
	case 'colors':
	// Change Colors
	$lang_string['title'] = "ÇÛ¿§ÊÑ¹¹";
	$lang_string['instructions'] = "¥Ú¡¼¥¸¤ÎÇÛ¿§¤òÊÑ¹¹¤·¤Þ¤¹¡£<br />³Æ¹àÌÜ¤òÁªÂò¤·¤Æ¥«¥é¡¼¥Ô¥Ã¥«¡¼¤â¤·¤¯¤Ï¿ôÃÍ¤Ç¿§¤ò»ØÄê¤·¤Æ¤¯¤À¤µ¤¤¡£";
	$lang_string['bg_color'] = "BG Page";
	$lang_string['main_bg_color'] = "BG Main Page";
	$lang_string['border_color'] = "Page Border";
	$lang_string['inner_border_color'] = "Inner Border";
	$lang_string['header_bg_color'] = "BG Header";
	$lang_string['header_txt_color'] = "Header Text";
	$lang_string['menu_bg_color'] = "BG Menu";
	$lang_string['footer_bg_color'] = "BG Footer";
	$lang_string['txt_color'] = "Main Text";
	$lang_string['headline_txt_color'] = "Headline Text";
	$lang_string['date_txt_color'] = "Date Text";
	$lang_string['footer_txt_color'] = "Footer Text";
	$lang_string['link_reg_color'] = "Link Default";
	$lang_string['link_hi_color'] = "Link Hover";
	$lang_string['link_down_color'] = "Link Active";
	// More Colors
	$lang_string['entry_bg'] = "Entry BG";
	$lang_string['entry_title_bg'] = "Entry Title BG";
	$lang_string['entry_border'] = "Entry Border";
	$lang_string['entry_title_text'] = "Entry Title Text";
	$lang_string['entry_text'] = "Entry Text";
	$lang_string['menu_bg'] = "Menu BG";
	$lang_string['menu_title_bg'] = "Menu Title BG";
	$lang_string['menu_border'] = "Menu Border";
	$lang_string['menu_title_text'] = "Menu Title Text";
	$lang_string['menu_text'] = "Menu Text";
	$lang_string['menu_link_reg_color'] = "Menu Link Default";
	$lang_string['menu_link_hi_color'] = "Menu Link Hover";
	$lang_string['menu_link_down_color'] = "Menu Link Active";
	// Submit
	$lang_string['color_preset'] = "Color Schemes:"; // 0.3.7q
	$lang_string['scheme_name'] = "Enter a custom color scheme name:"; // 0.3.7q
	$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Please enter a name for your custom color scheme."; // 0.3.7q
	$lang_string['submit_btn'] = "&nbsp;·èÄê&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";
				break;
			case 'comments':
	// Comments
	$lang_string['comment_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
	$lang_string['title'] = "¥³¥á¥ó¥È";
	$lang_string['header'] = "¥³¥á¥ó¥È¤ò½ñ¤¯";
	$lang_string['instructions'] = "É¬Í×»ö¹à¤È¥³¥á¥ó¥È¤òÆþÎÏ¤·¤Æ²¼¤µ¤¤¡£";
	$lang_string['comment_name'] = "Ì¾Á°:";
	$lang_string['comment_email'] = "Email:"; // 0.3.8
	$lang_string['comment_url'] = "URL:"; // 0.3.8
	$lang_string['comment_remember'] = "¾ðÊó¤òÅÐÏ¿¤¹¤ë:"; // 0.3.8
	$lang_string['comment_text'] = "¥³¥á¥ó¥È:";
	$lang_string['post_btn'] = "&nbsp;¥³¥á¥ó¥È¤òÅê¹Æ&nbsp;";
	$lang_string['delete_btn'] = "ºï½ü";

	// Error Response
	$lang_string['error_add'] = "<h2>Whoops!</h2>¥³¥á¥ó¥È¤¬Åê¹Æ¤Ç¤­¤Þ¤»¤ó¤Ç¤·¤¿¡£<br /><br />Server Reported:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Comment not deleted. I ran into a problem while deleting your comment.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Name and Comment fields."; // <-- Need Translation
				break;
	case 'delete':
	$lang_string['title'] = "¥¨¥ó¥È¥ê¡¼¤Îºï½ü";
	$lang_string['instructions'] = "¥¨¥ó¥È¥ê¡¼¤Îºï½ü¤ò¹Ô¤¤¤Þ¤¹¡£<br />°ìÅÙºï½ü¤·¤¿¥¨¥ó¥È¥ê¡¼¤Ï¸µ¤ËÌá¤¹»ö¤Ï½ÐÍè¤Þ¤»¤ó¡£";
	$lang_string['ok_btn'] = "&nbsp;ºï½ü&nbsp;";
	$lang_string['cancel_btn'] = "&nbsp;¥­¥ã¥ó¥»¥ë&nbsp;";
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>ºï½ü¤Ç¤­¤Þ¤»¤ó¤Ç¤·¤¿¡£<br /><br />Server Reported:<br />";
				break;
	case 'delete_static':
				$lang_string['title'] = "ÀÅÅª¥Ú¡¼¥¸¤Îºï½ü";
	$lang_string['instructions'] = "ÀÅÅª¥Ú¡¼¥¸¤Îºï½ü¤ò¹Ô¤¤¤Þ¤¹¡£°ìÅÙºï½ü¤·¤¿¥Ú¡¼¥¸¤ò¸µ¤ËÌá¤¹»ö¤Ï¤Ç¤­¤Þ¤»¤ó¡£";
	$lang_string['ok_btn'] = "&nbsp;ºï½ü¤¹¤ë&nbsp;";
	$lang_string['cancel_btn'] = "&nbsp;¥­¥ã¥ó¥»¥ë&nbsp;";
				// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>ºï½ü¤Ë¼ºÇÔ¤·¤Þ¤·¤¿<br /><br />Server Reported:<br />";
				break;
	case 'image_list':
	$lang_string['title'] = "Image List";
	$lang_string['instructions'] = "¥Õ¥¡¥¤¥ëÌ¾¤ò¥¯¥ê¥Ã¥¯¤Ç²èÁü¤ò»²¾È¤·¤Þ¤¹¡£<br /><br />¥¨¥ó¥È¥ê¡¼¤Ë²èÁü¤ò²Ã¤¨¤ëÊýË¡:<br />1) ¥ê¥ó¥¯¤ò¥³¥ó¥È¥í¡¼¥ë¥¯¥ê¥Ã¥¯¤·¤Æ¡¢<br />¡Ö¥¯¥ê¥Ã¥×¥Ü¡¼¥É¤Ø¤Î¥³¥Ô¡¼¡¦¥ê¥ó¥¯¡×¤òÁª¤ó¤Ç¤¯¤À¤µ¤¤¡£.<br />2) ¿·µ¬¥¨¥ó¥È¥ê¡¼¤ØÌá¤ê¡¢ÊÔ½¸¤·¤Æ¤¯¤À¤µ¤¤¡£<br />3) ¡Öimg¡×¥Ü¥¿¥ó¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¡¢¥¦¥£¥ó¥É¥¦¤ØURL¤ò»ØÄê¤·¤Æ¤¯¤À¤µ¤¤¡£";
				break;
	case 'info': // New 0.3.7
	$lang_string['title'] = "¥á¥¿¾ðÊó";
	$lang_string['instructions'] = "¥µ¡¼¥Á¥¨¥ó¥¸¥ó¤äRSSÇÛ¿®¤Ë»ÈÍÑ¤µ¤ì¤ë¾ðÊó¤òÀßÄê¤·¤Þ¤¹¡£";
	$lang_string['info_keywords'] = "¥­¡¼¥ï¡¼¥É(¥«¥ó¥Þ¤ÇÊ£¿ô»ØÄê²ÄÇ½¡£Îã:
¥·¥ó¥×¥ë,PHP,¥Ö¥í¥°)";
	$lang_string['info_description'] = "ÀâÌÀ(¥µ¥¤¥È¤Î¾Ò²ð¤òµ­Æþ¤·¤Æ²¼¤µ¤¤¡£)";
	$lang_string['info_copyright'] = "Ãøºî¸¢É½¼¨(Ãøºî¸¢É½¼¨¤Î¥Æ¥­¥¹¥È¤äÃøºî¸¢É½¼¨¥Ú¡¼¥¸¤Î¥¢¥É¥ì¥¹¤Ê¤É)";
	$lang_string['submit_btn'] = "&nbsp;ÅÐÏ¿&nbsp;";
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Title and Author fields.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				break;
case 'login':
				$lang_string['upgrade'] = "<h2>Upgrade</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n comment files need to be upgraded:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Upgrade Comments"; // New 0.3.8
				$lang_string['title'] = "¥í¥°¥¤¥ó";
				$lang_string['instructions'] = "¥æ¡¼¥¶Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤òµ­Æþ¤·¤Æ²¼¤µ¤¤¡£";
				$lang_string['username'] = "¥æ¡¼¥¶¡¼Ì¾:";
				$lang_string['password'] = "¥Ñ¥¹¥ï¡¼¥É";
				$lang_string['submit_btn'] = "&nbsp;¥í¥°¥¤¥ó&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Success!</h2>¥í¥°¥¤¥ó¤·¤Þ¤·¤¿¡£¤½¤ì¤Ç¤Ï¤ª³Ú¤·¤ß²¼¤µ¤¤!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>¥í¥°¥¤¥ó¤Ç¤­¤Þ¤»¤ó¤Ç¤·¤¿¡£Àµ¤·¤¤¥æ¡¼¥¶Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤òºÆµ­Æþ¤·¤Æ²¼¤µ¤¤¡£<p />";
				$lang_string['form_error'] = "¥æ¡¼¥¶Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤òµ­Æþ¤·¤Æ²¼¤µ¤¤¡£";
				break;
case 'logout':
	$lang_string['title'] = "¥í¥°¥¢¥¦¥È";
	$lang_string['instructions'] = "<h2>Whoops!</h2>¥¯¥Ã¥­¡¼¤¬Àµ¾ï¤Ëºï½ü¤µ¤ì¤º¥í¥°¥¢¥¦¥È¤Ë¼ºÇÔ¤·¤Þ¤·¤¿¡£<p />";
				break;
	case 'forms':
	$lang_string['title'] = "";
	$lang_string['instructions'] = "";
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>ÊÝÂ¸¤Ë¼ºÇÔ¤·¤Þ¤·¤¿¡£<br /><br />Server Reported:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "¥æ¡¼¥¶¡¼Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤ÎÊÑ¹¹";
				$lang_string['instructions'] = "¤¢¤Ê¤¿¤Î¥æ¡¼¥¶¡¼Ì¾¤Þ¤¿¤Ï¥Ñ¥¹¥ï¡¼¥É¤òÊÑ¹¹¤·¤Þ¤¹¡£<br />¿·¤·¤¤¥æ¡¼¥¶¡¼Ì¾¤ª¤è¤Ó¥Ñ¥¹¥ï¡¼¥É¤òÆþÎÏ¤·¤Æ¤¯¤À¤µ¤¤¡£";
				$lang_string['username'] = "¥æ¡¼¥¶¡¼Ì¾:";
				$lang_string['password'] = "¥Ñ¥¹¥ï¡¼¥É:";
				$lang_string['submit_btn'] = "&nbsp;·èÄê&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Success!</h2>¿·¤·¤¤¥æ¡¼¥¶¡¼Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤¬Í­¸ú¤Ë¤Ê¤ê¤Þ¤·¤¿¡£<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>¿·¤·¤¤¥æ¡¼¥¶¡¼Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤ÎÅÐÏ¿¤Ë¼ºÇÔ¤·¤Þ¤·¤¿¡£<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "¥æ¡¼¥¶¡¼Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤òµ­Æþ¤·¤Æ²¼¤µ¤¤¡£";
				$lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
					and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
					exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
					to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Welcome";
				$lang_string['instructions'] = "Thank you for choosing Simple PHP Blog!";
				
				$lang_string['blog_choose_language'] = "Choose Language:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				break;
			case 'install01':
$lang_string['title'] = "Simple PHP Blog¤Ø¤è¤¦¤³¤½¡ª";
$lang_string['instructions'] = "Thank you for choosing Simple PHP Blog!<br /><br />Simple PHP Blog ¤ÏPHP 4.1°Ê¹ß¤ÇÆ°ºî¤¹¤ë¥Ö¥í¥°¥·¥¹¥Æ¥à¤Ç¤¹¡£<br />¥í¥°¥Õ¥¡¥¤¥ë¤ò¥Æ¥­¥¹¥È¥Õ¥¡¥¤¥ë¤Ë¤è¤ê´ÉÍý¤¹¤ë¤Î¤Ç¥Ç¡¼¥¿¥Ù¡¼¥¹¤òÉ¬Í×¤È¤·¤Þ¤»¤ó¡£<br />¥Ç¡¼¥¿¤ò³ÊÇ¼¤¹¤ë£³¤Ä¤Î¥Õ¥©¥ë¥À('config', 'content', and 'images')¤ò¼«Æ°ºîÀ®¤·¤Þ¤¹¡£<br /><b>²¼¤Î¥á¥Ã¥»¡¼¥¸¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¼¡¤Ë¿Ê¤ó¤Ç¤¯¤À¤µ¤¤:</b>";
$lang_string['begin'] = "[ ¥»¥Ã¥È¥¢¥Ã¥×¤òÂ³¤±¤ë ]";
				break;
			case 'install02':
				$lang_string['title'] = "¥»¥Ã¥È¥¢¥Ã¥×";
$lang_string['instructions'] = "¥Ç¡¼¥¿³ÊÇ¼¥Õ¥©¥ë¥À¤òºîÀ®¤·¤Þ¤¹¡£";
$lang_string['folder_exists'] = "¥Õ¥©¥ë¥À¤Ï´û¤ËºîÀ®ºÑ¤ß¤Ç¤¹¡£";
$lang_string['folder_failed'] = "¥Õ¥©¥ë¥ÀºîÀ®¤Ë¼ºÇÔ¤·¤Þ¤·¤¿";
$lang_string['folder_success'] = "¥Õ¥©¥ë¥ÀºîÀ®´°Î»¤·¤Þ¤·¤¿";
				// Help
				$lang_string['help'] = "
				<h2>Whoops!</h2>
				Could not create one or more folders! This is most likely due to:<br>
				<i>1) <b>Write Permissions</b> aren't set to allow <b>Read/Write</b> access.</i><br>
				<i>2) The <b>UID</b>'s (user ID's) of all files and folder must match.</i><p />
				
				Follow the trouble-shooting instructions below and please try again:<p />				
				1) Manually create the following folders: <b>config</b>, <b>content</b>, and <b>images</b>.<p />
				2) Enabled <b>Write Permissions</b> on the folders. In your FTP program, Owner, User, and World should have <b>Read</b> and <b>Write</b> access. <i>(You may need to contact your service provider to change these...)</i><p />
				3) Make sure the UID's of all your files and folders are the same. <i>(You may need to contact your service provider to change these...)</i>";
				$lang_string['try_again'] = "[ Try Again ]";
// Success
$lang_string['success'] = "<h2>À®¸ù!</h2>¥Õ¥©¥ë¥ÀºîÀ®¤¬´°Î»¤·¤Þ¤·¤¿¡£<p /><b>¥»¥Ã¥È¥¢¥Ã¥×¤òÂ³¤±¤ë¤ò¥¯¥ê¥Ã¥¯¤·¤Æ²¼¤µ¤¤:</b>";
	$lang_string['continue'] = "[ ¥»¥Ã¥È¥¢¥Ã¥×¤òÂ³¤±¤ë ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>Your web server supports the following encryption schemes:</b>";
				$lang_string['standard'] = "Standard DES Encryption: ";
				$lang_string['extended'] = "Extended DES Encryption: ";
				$lang_string['MD5'] = "MD5 Encryption: ";
				$lang_string['blowfish'] = "Blowfish Encryption: ";
				$lang_string['enabled'] = "enabled";
				$lang_string['disabled'] = "disabled";
				$lang_string['using_standard'] = "<b>Using Standard DES Encryption...</b>";
				$lang_string['using_extended'] = "<b>Using Extended DES Encryption...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Using MD5 Encryption...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Using Blowfish Encryption...</b>";
				$lang_string['using_unknown'] = "<b>Using Unknown Encryption...</b>";
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
$lang_string['title'] = "¥æ¡¼¥¶¡¼Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤ÎÀßÄê";
$lang_string['instructions'] = "¥æ¡¼¥¶¡¼Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤òµ­Æþ¤·¤Æ²¼¤µ¤¤¡£";
$lang_string['username'] = "¥æ¡¼¥¶¡¼Ì¾:";
$lang_string['password'] = "¥Ñ¥¹¥ï¡¼¥É:";
$lang_string['submit_btn'] = "&nbsp;ÅÐÏ¿&nbsp;";
// Success
$lang_string['success'] = "<h2>Congratulations!</h2>¥¤¥ó¥¹¥È¡¼¥ë¤Ï´°Î»¤·¤Þ¤·¤¿¡£¤½¤ì¤Ç¤Ï¤ª³Ú¤·¤ß¤¯¤À¤µ¤¤¡£<p />";
$lang_string['btn_setup'] = "[ ÀßÄê¤Ë¿Ê¤à ]";
	// Wrong Password
	$lang_string['wrong_password'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />Server Reported:<br />";
$lang_string['form_error'] = "¥æ¡¼¥¶¡¼Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤òµ­Æþ¤·¤Æ¤¯¤À¤µ¤¤¡£";
				break;
			case 'install04':
				$lang_string['title'] = "Create Password File";
				$lang_string['instructions'] = "Here's the tricky part:<br />
				<ol>
				<li>Open a Text Editor application. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
				<li>Create a New Text Document.</li>
				<li>Copy and paste the code in the box below into your document.</li>
				<li>Save your file and name it <b>password.php</b> <i>(Be sure to save it in <b>text</b> or <b>plain text</b> format.)</i></li>
				<li>Open a FTP application.</li>
				<li>Upload your new <b>password.php</b> into the <b>config</b> folder on your web site.</li>
				<li>Delete the <b>password.php</b> from your hard drive.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Note: If you want to reset your username and password (probably because you forgot it), delete the <b>password.php</b> file in the <b>config</b> folder on your web site. The next time you visit your site, it will walk you through this installation process again...</i>";
				$lang_string['code'] = "Code for <b>password.php</b> file:";
				$lang_string['continue'] = "[ Continue ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Login";
				$lang_string['instructions'] = "Please enter your Username and Password below";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Congratulations!</h2>You are now logged in.<p />
				Click below to visit the <b>Setup</b> page, where you can personalize your new blog.<p />
				<i>Note: Now that you've completed the installation process, it is recommended that you delete the <b>installXX.php</b> files from your web site. (i.e. install00.php through install06.php)</i><p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>You are not logged in. Please verify that you typed your Username and Password correctly and try again.<p />";
				$lang_string['form_error'] = "Please complete the Username and Password fields.";
				// Success
				$lang_string['btn_setup'] = "[ Setup ]";
				$lang_string['btn_try_again'] = "[ Try Again ]";
				break;
	case 'setup':
	$lang_string['title'] = "ÀßÄê";
	$lang_string['instructions'] = "blog¤ÎÀßÄê¤È´ÉÍý¼Ô¾ðÊó¤òÀßÄê¤·¤Þ¤¹¡£";
	$lang_string['blog_title'] = "¥Ö¥í¥°¥¿¥¤¥È¥ë";
	$lang_string['blog_author'] = "´ÉÍý¼ÔÌ¾";
	$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
	$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
	$lang_string['blog_footer'] = "¥Õ¥Ã¥¿¡¼";
	$lang_string['blog_choose_language'] = "¸À¸ìÁªÂò";
	$lang_string['blog_enable_comments'] = "¥³¥á¥ó¥Èµ¡Ç½¤ò»È¤¦"; 
	// <-- New 0.3.6
	$lang_string['blog_comments_popup'] = "¥³¥á¥ó¥È¤ò¥Ý¥Ã¥×¥¢¥Ã¥×¥¦¥¤¥ó¥É¥¦¤ÇÉ½¼¨"; // <-- New 0.3.6
	$lang_string['blog_enable_voting'] = "¥¨¥ó¥È¥ê¡¼É¾²Áµ¡Ç½¤ò»È¤¦"; 
	// <-- New 0.3.8
	$lang_string['blog_email_notification'] = "¿·¤·¤¤¥³¥á¥ó¥È¤¬¤¢¤ë¾ì¹ç¥á¡¼¥ë¤ÇÃÎ¤é¤»¤ë"; // <-- New 0.3.7
	$lang_string['blog_send_pings'] = "¥µ¡¼¥Ð¡¼¤ËPing¤òÁ÷¿®¤¹¤ë"; // <-- New 0.3.7
	$lang_string['blog_ping_urls'] = "Àµ³Î¤ÊURL¤òµ­Æþ¤·¤Æ²¼¤µ¤¤¡£ (Îã¡§http://rpc.weblogs.com/RPC2)<br />(¥«¥ó¥Þ¤Ç¶èÀÚ¤ë»ö¤Ë¤è¤êÊ£¿ô¤Î¥µ¡¼¥Ð¡¼¤ò»ØÄê¤¹¤ë¤³¤È¤¬½ÐÍè¤Þ¤¹¡£)"; // <-- New 0.3.7
	$lang_string['blog_trackback_about'] = "¥È¥é¥Ã¥¯¥Ð¥Ã¥¯Á÷¼õ¿®µ¡Ç½¤ÎÀßÄê¤ò¹Ô¤¤¤Þ¤¹¡£<br /> ¼êÆ°¤Ç¥È¥é¥Ã¥¯¥Ð¥Ã¥¯¤òÄÉ²Ã¤¹¤ë¤«¼«Æ°¸¡½Ðµ¡Ç½¤ò»ÈÍÑ¤¹¤ë¤«ÁªÂò¤Ç¤­¤Þ¤¹¡£"; // <-- New 0.3.8
$lang_string['blog_trackback_enabled'] = "¥È¥é¥Ã¥¯¥Ð¥Ã¥¯µ¡Ç½¤ò»ÈÍÑ¤¹¤ë";
// <-- New 0.3.8
	$lang_string['blog_trackback_auto_discovery'] = "¥È¥é¥Ã¥¯¥Ð¥Ã¥¯¤Î¼«Æ°Á÷¼õ¿®µ¡Ç½¤ò»ÈÍÑ¤¹¤ë¡£"; // <-- New 0.?.?
	$lang_string['blog_max_entries'] = "£±¥Ú¡¼¥¸Æâ¤ÎºÇÂçÉ½¼¨¥¨¥ó¥È¥ê¿ô"; 
	// <-- New 0.3.6
	$lang_string['blog_comment_tags'] = "¥³¥á¥ó¥ÈÆâ¤Ç»ÈÍÑ²ÄÇ½¤Ê¥¿¥°"; 
	// <-- New 0.3.6
	$lang_string['blog_gzip_about'] = "SPHP 4.0.4°Ê¹ß¤«¤é»ÈÍÑ²ÄÇ½¤Êgzip(.gz)°µ½Ìµ¡Ç½¤ÎÀßÄê¤ò¹Ô¤¤¤Þ¤¹¡£<br />¥Õ¥¡¥¤¥ë¤ò°µ½Ì¤¹¤ë»ö¤Ë¤è¤ê¥Ç¥£¥¹¥¯¥¹¥Ú¡¼¥¹¤ÎÀáÌó¤È¥µ¡¼¥Ð¡¼¤Ø¤ÎÉé²Ù¤òÍÞ¤¨¤ë»ö¤¬¤Ç¤­¤Þ¤¹¡£<br />½é´üÀßÄê¤Ç¤Ï¥ª¥Õ¤Ë¤Ê¤Ã¤Æ¤ª¤ê¤Þ¤¹¤Î¤ÇÉ¬Í×¤Ë±þ¤¸¤ÆÍ­¸ú¤Ë¤·¤Æ²¼¤µ¤¤¡£"; // <-- New 0.3.7
	$lang_string['blog_enable_gzip_txt'] = "¥í¥°¥Õ¥¡¥¤¥ë¤ògzip¤Ç°µ½Ì¤¹¤ë"; 
	// <-- New 0.3.7
	$lang_string['blog_enable_gzip_output'] = "HTTP½ÐÎÏÍÑ¤Îgzip°µ½Ì¤ò»ÈÍÑ¤·¤Þ¤¹"; // <-- New 0.3.7
	$lang_string['submit_btn'] = "&nbsp;·èÄê&nbsp;";
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>ÀßÄê¤ÎÊÝÂ¸¤Ë¼ºÇÔ¤·¤Þ¤·¤¿<br /><br />Server Reported:<br />";
	$lang_string['form_error'] = "Please complete the Title and Author fields.";
	$lang_string['label_entry_order'] = "¥¨¥ó¥È¥ê¡¼¤ÎÉ½¼¨";
	$lang_string['select_new_to_old'] = "¿·¤·¤¤½ç¤ËÉ½¼¨";
	$lang_string['select_old_to_new'] = "¸Å¤¤½ç¤ËÉ½¼¨";
	$lang_string['label_comment_order'] = "¥³¥á¥ó¥È¤ÎÉ½¼¨";
					$lang_string['cal_sunday'] = "Sunday"; // New for 0.4.6
				$lang_string['cal_monday'] = "Monday"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "Calendar Week Start Day"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Enable Calendar / Archives Block"; // New for 0.4.6
				break;
	case 'trackbacks':  // <-- New 0.3.8
	// Trackbacks
	$lang_string['title'] = "¥È¥é¥Ã¥¯¥Ð¥Ã¥¯";
	$lang_string['header'] = "¤³¤Î¥¨¥ó¥È¥ê¡¼¤Î¥È¥é¥Ã¥¯¥Ð¥Ã¥¯URL";
	$lang_string['delete_btn'] = "ºï½ü";
	// Error Response
	$lang_string['error_add'] = "Error storing trackback data.";
				break;
	case 'options':
	$lang_string['title'] = "¥ª¥×¥·¥ç¥óÀßÄê";
				$lang_string['instructions'] = "¥³¥á¥ó¥È¤È¥¨¥ó¥È¥ê¡¼¤ÎÆüÉÕÉ½¼¨¤È»þ´ÖÉ½¼¨¤ò¥«¥¹¥¿¥Þ¥¤¥º¤¹¤ë¤¿¤á¤ÎÀßÄê¤Ç¤¹¡£<br />ÆüÉÕ¤ÏÃ»¤¤ÆüÉÕ¤«Ä¹¤¤ÆüÉÕ¡¢»þ¹ïÉ½¼¨¤Ï12»þ´ÖÀ©¤¢¤ë¤¤¤Ï24»þ´ÖÀ©¤Î»þ¹ïÉ½¼¨¤òÁªÂò¤¹¤ë¤³¤È¤¬¤Ç¤­¤Þ¤¹¡£<br />¥×¥ì¥Ó¥å¡¼¤Ç³ÎÇ§¤¹¤ë»ö¤¬¤Ç¤­¤Þ¤¹¡£";
		// Long Date
	$lang_string['ldate_title'] = "Ä¹¤¤ÆüÉÕ·Á¼°";
	$lang_string['weekday'] = "ÍËÆü";
	$lang_string['month'] = "·î";
	$lang_string['day'] = "Æü";
	$lang_string['year'] = "Ç¯";
	$lang_string['none'] = "Ìµ¤·";
				// Short Date
		$lang_string['sdate_title'] = "Ã»¤¤ÆüÉÕ:";
		$lang_string['s_month'] = "·î";
				$lang_string['s_mon'] = "MMM";
		$lang_string['s_day'] = "Æü";
		$lang_string['s_year'] = "Ç¯";
		$lang_string['zero_day'] = "ÆüÉÕ¤Ë¥¼¥í¤òÉÕ¤±¤ë¡ÊÎã¡§01¡Ë";
		$lang_string['show_century'] = "À¾Îñ¡ÊÎ¬¼°¡Ë¤òÉ½¼¨";
		// Time
		$lang_string['time_title'] = "»þ¹ïÉ½¼¨";
		$lang_string['12hour'] = "12»þ´ÖÀ©";
		$lang_string['24hour'] = "24»þ´ÖÀ©";
		$lang_string['before_noon'] = "¸áÁ°";
		$lang_string['after_noon'] = "¸á¸å";
		// Date
		$lang_string['date_title'] = "ÆüÉÕ¤ÎÉ½¼¨·Á¼°:";
		$lang_string['long_date'] = "Ä¹¤¤ÆüÉÕ";
		$lang_string['short_date'] = "Ã»¤¤ÆüÉÕ";
		$lang_string['time'] = "»þ¹ï";
		// Menu
		$lang_string['menu_title'] = "¥á¥Ë¥å¡¼¤ÎÆüÉÕÉ½¼¨·Á¼°:";
		$lang_string['long_date'] = "Ä¹¤¤ÆüÉÕ";
		$lang_string['short_date'] = "Ã»¤¤ÆüÉÕ";
		// Used in multiple places
		$lang_string['zero_day'] = "¥¼¥í¤òÉÕ¤±¤ë¡ÊÎã¡§01¡Ë";
		$lang_string['zero_month'] = "¥¼¥í¤òÉÕ¤±¤ë¡ÊÎã¡§01¡Ë";
		$lang_string['zero_hour'] = "»þ¹ï¤Ë¥¼¥í¤òÉÕ¤±¤ë¡ÊÎã¡§01¡Ë";
		$lang_string['separator'] = "¥»¥Ñ¥ì¡¼¥¿¡¼";
		$lang_string['preview'] = "¥×¥ì¥Ó¥å¡¼";
		$lang_string['server_offset'] = "¥µ¡¼¥Ð¡¼¥ª¥Õ¥»¥Ã¥È";
				
// Buttons
		$lang_string['submit_btn'] = "&nbsp;·èÄê&nbsp;";
// Error Response
		$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
		break;
		case 'themes':
		$lang_string['title'] = "³°´Ñ¤ÎÊÑ¹¹";
$lang_string['instructions'] = "¥×¥ë¥À¥¦¥ó¥á¥Ë¥å¡¼¤«¤é»ÈÍÑ¤¹¤ë¥Æ¡¼¥Þ¤òÁªÂò¤·¤Æ¤¯¤À¤µ¤¤¡£";
	// Themes
	$lang_string['choose_theme'] = "themes";
	// Buttons
	$lang_string['submit_btn'] = "&nbsp;·èÄê&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				break;
	case 'upload_img':
	$lang_string['title'] = "²èÁü¤Î¥¢¥Ã¥×¥í¡¼¥É";
	$lang_string['instructions'] = "²èÁü¥Õ¥¡¥¤¥ë¤Î¥¢¥Ã¥×¥í¡¼¥É¤ò¹Ô¤¤¤Þ¤¹¡£";
	$lang_string['select_file'] = "¥Õ¥¡¥¤¥ë¤ÎÁªÂò";
	$lang_string['upload_btn'] = "¥¢¥Ã¥×¥í¡¼¥É";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Couldn't upload image. Here's some more information:<br /><br />Server Reported:<br />";
				break;
	case 'search': // <-- New 0.3.7
	$lang_string['title'] = "Ãµº÷·ë²Ì";
	$lang_string['instructions'] = "¸¡º÷¥­¡¼¥ï¡¼¥É¡§<b>%string</b>:";
	$lang_string['not_found'] = "¸«¤Ä¤«¤ê¤Þ¤»¤ó¤Ç¤·¤¿¡£<br />°ã¤¦¥­¡¼¥ï¡¼¥É¤ÇºÆ¸¡º÷¤·¤Æ²¼¤µ¤¤¡£";
				break;
case 'contact': // <-- New 0.3.8
$lang_string['title'] = "¥³¥ó¥¿¥¯¥È";
$lang_string['instructions'] = "´ÉÍý¿Í¤Ø¤Î¥á¥Ã¥»¡¼¥¸¡¦Ï¢Íí¤Ï¤³¤Á¤é¤Ø¤ª´ê¤¤¤·¤Þ¤¹¡£";
$lang_string['form_error'] = "¥¿¥¤¥È¥ë¤È¥á¥Ã¥»¡¼¥¸¤òµ­Æþ¤·¤Æ²¼¤µ¤¤¡£";
$lang_string['name'] = "¤ªÌ¾Á°¤òµ­Æþ¤·¤Æ²¼¤µ¤¤¡£";
$lang_string['email'] = "Email¥¢¥É¥ì¥¹¤òµ­Æþ¤·¤Æ²¼¤µ¤¤¡£";
$lang_string['subject'] = "¥¿¥¤¥È¥ë¤òµ­Æþ¤·¤Æ²¼¤µ¤¤¡£";
$lang_string['comment'] = "¥á¥Ã¥»¡¼¥¸¤ò¤ª´ê¤¤¤·¤Þ¤¹¡£";
$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				$lang_string['success'] = "<h2>Success!</h2>Your message has been sent.<p />";
				$lang_string['failure'] = "<h2>Error!</h2>Your message has not been sent. Most likely the Anti Spam was not entered properly.<p />";
				$lang_string['contact_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
				$lang_string['contactsent'] = "Contact sent through: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6	
				break;
			case 'stats':
				$lang_string['title'] = "Åý·×";
				$lang_string['general'] = "Á´ÂÎ";
				$lang_string['entry_info'] = "<b>%s</b> ¥¨¥ó¥È¥ê¡¼»ÈÍÑÍÆÎÌ <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['comment_info'] = "<b>%s</b> ¥³¥á¥ó¥È»ÈÍÑÎÌ <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['trackback_info'] = "<b>%s</b> ÊÝÂ¸¥È¥é¥Ã¥¯¥Ð¥Ã¥¯ <b>%s</b> bytes";
				$lang_string['static_info'] = "<b>%s</b> ÀÅÅª¥Ú¡¼¥¸ <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['most_viewed_entries'] = "10 ¥¨¥ó¥È¥ê¡¼»²¾È¿ô";
				$lang_string['most_commented_entries'] = "10 ¥¨¥ó¥È¥ê¡¼É¾²Á";
				$lang_string['most_trackbacked_entries'] = "10 ¥È¥é¥Ã¥¯¥Ð¥Ã¥¯¿ô";
				$lang_string['vote_info'] = "<b>%s</b> votes stored in <b>%s</b> bytes"; // 0.4.1
				$lang_string["most_voted_entries"] = "10 Most voted entries"; // 0.4.1
				$lang_string["most_rated_entries"] = "10 Most rated entries"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Error 403.8 - Page/Function Access Denied';
				$lang_string["errorline1"] = 'The page or function you attempted to process requires the use of cookies.';
				$lang_string["errorline2"] = 'Restore cookie functionality within your browser or protection software and attempt your request again.';
				$lang_string["clientid"] = 'Client ID: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Error 403.8 - Page/Function Access Denied';
				$lang_string["404"] = 'HTTP Error 404 - Page/Function Does Not Exist';
				$lang_string["error_404"] = 'The page or function you attempted to process does not exist.';
				$lang_string["error_javascript"] = 'The page or function you attempted requires javascript in order to properly function.';
				$lang_string["error_emailnotsent"] = 'The message you attempted to send has failed.';
				$lang_string["error_emailnotsentcapcha"] = 'The message you attempted to send has failed because the anti-spam entry was incorrect or missing.';
				$lang_string["clientid"] = 'Client ID: ';
				break;
			default:
				break;
		}

	}
		
?>
