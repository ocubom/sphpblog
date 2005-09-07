<?php
	// Chinese Language File
	// (c) 2004 Jfly, jflycn <at> hotmail <dot> com
	//
	// Simple PHP Version: 0.3.7
	// Language Version:   0.3.7.1
	
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Chinese
		$lang_string['locale'] = 'zh_CN.GB2312'; // for utf8 locale,that should be zh_CN.UTF-8.
		$lang_string['language'] = 'chinese';
		
		// ISO Charset: GB2312
		$lang_string['html_charset'] = 'GB2312';
		$lang_string['php_charset'] = 'GB2312';
		
		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Á´½Ó";
		$lang_string['menu_home'] = "Ê×Ò³";
		$lang_string['menu_contact'] = "Contact Me"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Stats"; // <-- New 0.3.7r
		$lang_string['menu_archive'] = "µµ°¸";
		$lang_string['menu_menu'] = "²Ëµ¥";
		$lang_string['menu_add'] = "Ìí¼ÓÌõÄ¿";
		$lang_string['menu_add_static'] = "Ìí¼Ó¾²Ì¬Ò³Ãæ";
		$lang_string['menu_upload'] = "ÉÏ´«Í¼Æ¬";
		$lang_string['menu_setup'] = "ÉèÖÃ";
		$lang_string['menu_categories'] = "Categories";
		$lang_string['menu_info'] = "Information"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Ñ¡Ïî";
		$lang_string['menu_themes'] = "Ò³ÃæÖ÷Ìâ";
		$lang_string['menu_colors'] = "µ÷É«";
		$lang_string['menu_change_login'] = "¸ü¸ÄµÇÂ¼";
		$lang_string['menu_logout'] = "µÇ³ö";
		$lang_string['menu_login'] = "µÇÂ¼";
		$lang_string['menu_most_recent'] = "×î½üÆÀÂÛ";
		$lang_string['menu_most_recent_entries'] = "Most Recent Entries"; // <-- New 0.3.8
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "Blocks";
		
		// Other
		$lang_string['home'] = "·µ»ØÊ×Ò³";
		$lang_string['nav_next'] = 'Next'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Back'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Search:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Go'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Page Generated in %s seconds'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Ò»ÔÂ', '¶þÔÂ', 'ÈýÔÂ', 'ËÄÔÂ', 'ÎåÔÂ', 'ÁùÔÂ', 'ÆßÔÂ', '°ËÔÂ', '¾ÅÔÂ', 'Ê®ÔÂ', 'Ê®Ò»ÔÂ', 'Ê®¶þÔÂ' );
		$lang_string['sb_default_title'] = 'Ã»ÓÐ±êÌâ';
		$lang_string['sb_default_author'] = 'Ã»ÓÐ×÷Õß';
		$lang_string['sb_default_footer'] = 'Ã»ÓÐÒ³½Å';
		
		$lang_string['sb_edit'] = '±à¼­';
		$lang_string['sb_delete'] = 'É¾³ý';
		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		
		$lang_string['sb_add_comment_btn'] = '·¢±íÆÀÂÛ';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'ÆÀÂÛ';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'ÆÀÂÛ';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' ´Îä¯ÀÀ';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' ´Îä¯ÀÀ';
		
		$lang_string['sb_add_link_btn'] = 'Ìí¼Ó/¹ÜÀíÁ´½Ó';
		
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "ÌâÄ¿£º";
				$lang_string['label_insert'] = "²åÈë±êÇ©£º";
				$lang_string['btn_bold'] = "´Ö";
				$lang_string['btn_italic'] = "Ð±";
				$lang_string['btn_image'] = "Í¼";
				$lang_string['btn_url'] = "Á´";
				$lang_string['view_images'] = "ä¯ÀÀÉÏ´«µÄÍ¼Æ¬";
				$lang_string['label_entry'] = "ÄÚÈÝ£º";
				$lang_string['btn_preview'] = "&nbsp;Ô¤ÀÀ&nbsp;";
				$lang_string['btn_post'] = "&nbsp;·¢±í&nbsp;";
				$lang_string['file_name'] = "Static File Name: (no spaces or file extensions)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "ÊäÈëÒª¸ñÊ½»¯µÄÎÄ×Ö";
				$lang_string['insert_image'] = "ÊäÈëÍ¼Æ¬µÄµØÖ·";
				$lang_string['insert_url1'] = "ÊäÈëÁ´½ÓµÄËµÃ÷ÎÄ×Ö(¿ÉÑ¡)";
				$lang_string['insert_url2'] = "ÊäÈëÁ´½ÓµÄÍêÕûµØÖ·";
				$lang_string['insert_url3'] = "ÔÚÐÂ´°¿ÚÖÐ´ò¿ªÁ´½Ó(¿ÉÑ¡)£º"; // <-- New 0.3.6
				$lang_string['form_error'] = "ÇëÍêÕûÌîÐ´ÌõÄ¿µÄÌâÄ¿ºÍÄÚÈÝ¡£";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = '¿ÉÑ¡£º';
				$lang_string['insert_image_width'] = '¿í¶È(¿ÉÑ¡)£º';
				$lang_string['insert_image_height'] = '¸ß¶È(¿ÉÑ¡)£º';
				$lang_string['insert_image_popup'] = 'µã»÷ºóÔÚµ¯³ö´°¿Úä¯ÀÀÈ«Í¼(¿ÉÑ¡)£º';
				$lang_string['insert_image_float'] = '¸¡¶¯(¿ÉÑ¡)£º';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Ìí¼ÓÌõÄ¿";
				$lang_string['title_ad'] = "Confirm Trackback Pings"; // <-- New 0.3.8
				$lang_string['instructions'] = "Äã×¼±¸ºÃÁËÃ´? ÌîÐ´ÏÂÃæµÄ±íµ¥È»ºó°´¡°Ô¤ÀÀ¡±À´²é¿´ÌõÄ¿µÄÑù×Ó£¬»òÕß°´¡°·¢±í¡±ÒÔ±£´æÌõÄ¿¡£";
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Ô¤ÀÀ/±à¼­ÌõÄ¿";
				$lang_string['instructions_preview'] = "ÏÂÃæÊÇÌõÄ¿µÄÑù×Ó¡£Èç¹ûÄãÊ¹ÓÃÁËÎÄ×ÖÑùÊ½»ò°üº¬ÁËÍ¼Æ¬£¬Çë¼ÇµÃ¹Ø±ÕËùÓÐµÄ±êÇ©¡£";
				$lang_string['title_update'] = "¸üÐÂÌõÄ¿";
				$lang_string['instructions_update'] = "Äã¿ÉÒÔÊ¹ÓÃÏÂÃæµÄ±íµ¥¸üÐÂÄãµÄÌõÄ¿¡£×¼±¸ºÃÁË¾Í°´¡°Ô¤ÀÀ¡±»ò¡°·¢±í¡±¡£";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>ÍÛ£¡</h2>ÌõÄ¿Ã»ÓÐ±£´æ¡£ÔÚ±£´æÌõÄ¿Ê±Óöµ½ÁËÒ»¸öÎÊÌâ¡£<br /><br />·þÎñÆ÷±¨¸æ£º<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Ìí¼Ó¾²Ì¬Ò³Ãæ";
				$lang_string['instructions'] = "ÌîÐ´ÏÂÃæµÄ±íµ¥À´Éú³ÉÒ»¸ö¾²Ì¬Ò³Ãæ¡£ºÍ±ê×¼µÄÈÕÖ¾ÌõÄ¿²»Í¬µÄÊÇ£¬¾²Ì¬ÌõÄ¿µÄÁ´½ÓÖ±½ÓÏÔÊ¾ÔÚÒ³ÃæÓÒ²àµÄ²Ëµ¥¡£ÕâÐ©ÓÃÓÚ³£ÓÃµÄÄÚÈÝ£¬±ÈÈç£º¹ØÓÚÎÒ¡¢ÁªÏµÎÒÃÇ¡¢¹¤×÷¼Æ»®µÈ¡£°´¡°Ô¤ÀÀ¡±À´²é¿´ÌõÄ¿µÄÑù×Ó£¬»òÕß°´¡°·¢±í¡±ÒÔ±£´æÌõÄ¿¡£";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Ô¤ÀÀ/±à¼­ÌõÄ¿";
				$lang_string['instructions_preview'] = "ÏÂÃæÊÇÌõÄ¿µÄÑù×Ó¡£Èç¹ûÄãÊ¹ÓÃÁËÎÄ×ÖÑùÊ½»ò°üº¬ÁËÍ¼Æ¬£¬Çë¼ÇµÃ¹Ø±ÕËùÓÐµÄ±êÇ©¡£";
				$lang_string['title_update'] = "¸üÐÂÌõÄ¿";
				$lang_string['instructions_update'] = "Äã¿ÉÒÔÊ¹ÓÃÏÂÃæµÄ±íµ¥¸üÐÂÄãµÄÌõÄ¿¡£×¼±¸ºÃÁË¾Í°´¡°Ô¤ÀÀ¡±»ò¡°·¢±í¡±¡£";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>ÍÛ£¡</h2>ÌõÄ¿Ã»ÓÐ±£´æ¡£ÔÚ±£´æÌõÄ¿Ê±Óöµ½ÁËÒ»¸öÎÊÌâ¡£<br /><br />·þÎñÆ÷±¨¸æ£º<br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Add / Manage Links";
				$lang_string['instructions'] = "Add custom Blocks";
				$lang_string['up'] = "up";
				$lang_string['down'] = "down";
				$lang_string['edit'] = "edit";
				$lang_string['delete'] = "delete";
				$lang_string['block_name'] = "Block Name:";
				$lang_string['block_content'] = "Block content:";
				$lang_string['instructions_edit'] = "You are currently editing block:";
				$lang_string['instructions_modify'] = "Click below to modify a block:";
				$lang_string['submit_btn_edit'] = "Edit Block";
				$lang_string['submit_btn_add'] = "Add Block";
				$lang_string['form_error'] = "Please complete the Name field.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Static Pages:";
				// Add / Manage Links
				$lang_string['title'] = "Ìí¼Ó/¹ÜÀíÁ´½Ó";
				$lang_string['instructions'] = "Ìí¼Ó×Ô¶¨ÒåµÄÖ¸ÏòÆäËûÕ¾µãµÄÁ´½Ó¡£ÌîÐ´ÏÂÃæµÄ±íµ¥È»ºó°´¡°Ìí¼ÓÁ´½Ó¡±À´Ìí¼ÓÒ»¸öÁ´½Ó¡£°´ÏòÉÏÏòÏÂµÄ°´Å¥À´¸Ä±äÁ´½ÓµÄ´ÎÐò¡£°´±à¼­°´Å¥À´¸Ä¶¯Á´½Ó¡£°´É¾³ý°´Å¥À´ÒÆ³ýÒ»¸öÁ´½Ó¡£";
				$lang_string['up'] = "ÏòÉÏ";
				$lang_string['down'] = "ÏòÏÂ";
				$lang_string['edit'] = "±à¼­";
				$lang_string['delete'] = "É¾³ý";
				$lang_string['link_name'] = "Á´½ÓÃû³Æ£º";
				$lang_string['link_url'] = "Á´½ÓµØÖ·£º(¿ÉÑ¡¡£Áô¿ÕÀ´Éú³ÉÒ»¸ö·Ö¸ô·û¡£)";
				$lang_string['instructions_edit'] = "ÄãÕýÔÚ±à¼­Á´½Ó£º";
				$lang_string['instructions_modify'] = "°´ÏÂÃæµÄ°´Å¥À´¸Ä¶¯Ò»¸öÁ´½Ó£º";
				$lang_string['submit_btn_edit'] = "±à¼­Á´½Ó";
				$lang_string['submit_btn_add'] = "Ìí¼ÓÁ´½Ó";
				$lang_string['form_error'] = "ÇëÌîÐ´Á´½ÓÃû³Æ¡£";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "Add / Manage Categories";
				$lang_string['instructions'] = "Use the form below to add and edit your categories. Each category item should be in this format 'category name (id number)'. Indent items with spaces to create heirarchies.<br /><br /><b>Example:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technology (2)<br />";
				$lang_string['error'] = "Error";
				$lang_string['current_categories'] = "Current Categories";
				$lang_string['no_categories_found'] = "No Categories Found";
				$lang_string['category_list'] = "Category List:";
				$lang_string['validate'] = "Validate";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "µ÷É«";
				$lang_string['instructions'] = "Äã¿ÉÒÔ¸Ä±äÈÕÖ¾µÄÎÄ×ÖºÍ±³¾°µÄÑÕÉ«¡£ÏÈÔÚÏÂÃæÑ¡ÔñÏîÄ¿£¬È»ºóÊ¹ÓÃµ÷É«°åÀ´»ñµÃÑÕÉ«¡£É«ÖµÊÇ×Ô¶¯¸Ä±äµÄ¡£";
				$lang_string['bg_color'] = "ÈÕÖ¾Ò³Ãæ";
				$lang_string['main_bg_color'] = "ÈÕÖ¾Ö÷Ìå";
				$lang_string['border_color'] = "Ò³Ãæ±ß¿ò";
				$lang_string['inner_border_color'] = "ÄÚ±ß¿ò";
				$lang_string['header_bg_color'] = "ÈÕÖ¾Ò³Ã¼";
				$lang_string['header_txt_color'] = "Ò³Ã¼ÎÄ×Ö";
				$lang_string['menu_bg_color'] = "ÈÕÖ¾²Ëµ¥";
				$lang_string['footer_bg_color'] = "ÈÕÖ¾Ò³½Å";
				$lang_string['txt_color'] = "Ö÷ÌåÎÄ×Ö";
				$lang_string['headline_txt_color'] = "±êÌâÎÄ×Ö";
				$lang_string['date_txt_color'] = "ÈÕÆÚÎÄ×Ö";
				$lang_string['footer_txt_color'] = "Ò³½ÅÎÄ×Ö";
				$lang_string['link_reg_color'] = "Á´½ÓÈ±Ê¡";
				$lang_string['link_hi_color'] = "Á´½ÓÐü¸¡";
				$lang_string['link_down_color'] = "Á´½Ó¼¤»î";
				// More Colors
				$lang_string['entry_bg'] = "ÌõÄ¿±³¾°";
				$lang_string['entry_title_bg'] = "ÌõÄ¿±êÌâ±³¾°";
				$lang_string['entry_border'] = "ÌõÄ¿±ß¿ò";
				$lang_string['entry_title_text'] = "ÌõÄ¿±êÌâÎÄ×Ö";
				$lang_string['entry_text'] = "ÌõÄ¿ÎÄ×Ö";
				$lang_string['menu_bg'] = "²Ëµ¥±³¾°";
				$lang_string['menu_title_bg'] = "²Ëµ¥±êÌâ±³¾°";
				$lang_string['menu_border'] = "²Ëµ¥±ß¿ò";
				$lang_string['menu_title_text'] = "²Ëµ¥±êÌâÎÄ×Ö";
				$lang_string['menu_text'] = "²Ëµ¥ÎÄ×Ö";
				$lang_string['menu_link_reg_color'] = "²Ëµ¥Á´½ÓÈ±Ê¡";
				$lang_string['menu_link_hi_color'] = "²Ëµ¥Á´½ÓÐü¸¡";
				$lang_string['menu_link_down_color'] = "²Ëµ¥Á´½Ó¼¤»î";
				// Submit
				$lang_string['color_preset'] = "Color Schemes:"; // 0.3.7q
				$lang_string['scheme_name'] = "Enter a custom color scheme name:"; // 0.3.7q
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Please enter a name for your custom color scheme."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;Ìá½»&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>ÍÛ£¡</h2>ÐÅÏ¢Ã»ÓÐ±£´æ¡£ÔÚ±£´æÐÅÏ¢Ê±Óöµ½ÁËÒ»¸öÎÊÌâ¡£<br /><br />·þÎñÆ÷±¨¸æ£º<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['comment_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "ÆÀÂÛ";
				$lang_string['header'] = "·¢±íÆÀÂÛ";
				$lang_string['instructions'] = "ÌîÐ´ÏÂÃæµÄ±íµ¥À´·¢±íÄãµÄÆÀÂÛ¡£";
				$lang_string['comment_name'] = "ÄãµÄÃû×Ö£º";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Remember me:"; // 0.3.8
				$lang_string['comment_text'] = "ÆÀÂÛ£º";
				$lang_string['post_btn'] = "&nbsp;·¢±íÆÀÂÛ&nbsp;";
				$lang_string['delete_btn'] = "É¾³ý";
				// Error Response
				$lang_string['error_add'] = "<h2>ÍÛ£¡</h2>ÆÀÂÛÃ»ÓÐ±£´æ¡£ÔÚ±£´æÆÀÂÛÊ±Óöµ½ÁËÒ»¸öÎÊÌâ¡£<br /><br />·þÎñÆ÷±¨¸æ£º<br />";
				$lang_string['error_delete'] = "<h2>ÍÛ£¡</h2>ÆÀÂÛÃ»ÓÐÉ¾³ý¡£ÔÚÉ¾³ýÆÀÂÛÊ±Óöµ½ÁËÒ»¸öÎÊÌâ¡£<br /><br />·þÎñÆ÷±¨¸æ£º<br />";
				$lang_string['form_error'] = "ÇëÍêÕûÌîÐ´Ãû×ÖºÍÆÀÂÛÏîÄ¿¡£"; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "É¾³ýÌõÄ¿";
				$lang_string['instructions'] = "ÕâÊÇÄã×¼±¸É¾³ýµÄÌõÄ¿¡£ÇëÈ·¶¨ÄãÕæµÄÏë¸ÉµôËü£¬Õâ¸ö²Ù×÷ÊÇ²»ÄÜÍì»ØµÄ¡­¡­";
				$lang_string['ok_btn'] = "&nbsp;É¾³ý&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;È¡Ïû&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>ÍÛ£¡</h2>ÌõÄ¿Ã»ÓÐÉ¾³ý¡£<br /><br />·þÎñÆ÷±¨¸æ£º<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "É¾³ý¾²Ì¬Ò³Ãæ";
				$lang_string['instructions'] = "ÕâÊÇÄã×¼±¸É¾³ýµÄ¾²Ì¬Ò³Ãæ¡£ÇëÈ·¶¨ÄãÕæµÄÏë¸ÉµôËü£¬Õâ¸ö²Ù×÷ÊÇ²»ÄÜÍì»ØµÄ¡­¡­";
				$lang_string['ok_btn'] = "&nbsp;É¾³ý&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;È¡Ïû&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>ÍÛ£¡</h2>ÌõÄ¿Ã»ÓÐÉ¾³ý¡£<br /><br />·þÎñÆ÷±¨¸æ£º<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Í¼Æ¬ÁÐ±í";
				$lang_string['instructions'] = "µã»÷ÏÂÃæµÄÁ´½ÓÀ´ä¯ÀÀÍ¼Æ¬¡£<br /><br />Òª°ÑÍ¼Æ¬Ìí¼Óµ½ÌõÄ¿£º<br />1) ÓÒ»÷Ò»¸öÁ´½ÓÈ»ºóÑ¡Ôñ¡°¿½±´Á´½Óµ½¼ôÇÐ°å¡±¡£<br />2) »Øµ½Ìí¼ÓÌõÄ¿»ò±à¼­ÌõÄ¿µÄÒ³Ãæ¡£<br />3) µã»÷¡°Í¼¡±°´Å¥È»ºó¸´ÖÆÁ´½ÓµØÖ·¡£";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Meta-Data Information";
				$lang_string['instructions'] = "The information below is used for &quot;meta-data&quot;, which helps search engines correctly find and identify your site. Information may also be used in RSS feeds.";
				$lang_string['info_keywords'] = "Keywords: (List of keywords separated by commas.)";
				$lang_string['info_description'] = "Description: (An abstract or a free-text description of your site.)";
				$lang_string['info_copyright'] = "Rights: (Copyright statement, or link to document containing information.)";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
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
				$lang_string['title'] = "µÇÂ¼";
				$lang_string['instructions'] = "ÇëÊäÈëÄãµÄÓÃ»§ÃûºÍÃÜÂë";
				$lang_string['username'] = "ÓÃ»§Ãû£º";
				$lang_string['password'] = "ÃÜÂë£º";
				$lang_string['submit_btn'] = "&nbsp;Ìá½»&nbsp;";
				// Success
				$lang_string['success'] = "<h2>³É¹¦£¡</h2>ÄãÒÑ¾­µÇÈë¡£ºÇºÇ^_^<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>ÍÛ£¡</h2>ÄãÃ»ÓÐµÇÈë¡£Çë¼ì²éÄãÊäÈëµÄÓÃ»§ÃûºÍÃÜÂëÊÇ·ñÕýÈ·²¢ÔÙÊÔÒ»´Î¡£<p />";
				$lang_string['form_error'] = "ÇëÍêÕûÌîÐ´ÄãµÄÓÃ»§ÃûºÍÃÜÂë¡£"; // <-- Need Translation
				break;
			case 'logout':
				$lang_string['title'] = "µÇ³ö";
				$lang_string['instructions'] = "<h2>ÍÛ£¡</h2>µÇ³öÊ§°Ü¡£²»ÄÜÉ¾³ýcookie¡£ÄãÔõÃ´»¹ÔÚµÇÈë?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>ÍÛ£¡</h2>ÐÅÏ¢Ã»ÓÐ±£´æ¡£ÔÚ±£´æÐÅÏ¢Ê±Óöµ½ÁËÒ»¸öÎÊÌâ¡£<br /><br />·þÎñÆ÷±¨¸æ£º<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "¸Ä±äÓÃ»§Ãû &amp; ÃÜÂë";
				$lang_string['instructions'] = "Ê¹ÓÃÏÂÃæµÄ±íµ¥À´¸Ä±äÄãµÄÓÃ»§ÃûºÍ(»ò)ÃÜÂë¡£ÊäÈëÄãÒªÊ¹ÓÃµÄÓÃ»§ÃûºÍÃÜÂë¡£";
				$lang_string['username'] = "ÓÃ»§Ãû£º";
				$lang_string['password'] = "ÃÜÂë£º";
				$lang_string['submit_btn'] = "&nbsp;Ìá½»&nbsp;";
				// Success
				$lang_string['success'] = "<h2>³É¹¦£¡</h2>ÄãµÄÓÃ»§ÃûºÍÃÜÂëÒÑ¾­¸Ä±ä¡£ºÇºÇ^_^<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>ÍÛ£¡</h2>ÐÅÏ¢Ã»ÓÐ±£´æ¡£ÔÚ±£´æÓÃ»§ÃûºÍÃÜÂëÊ±Óöµ½ÁËÒ»¸öÎÊÌâ¡£<br /><br />·þÎñÆ÷±¨¸æ£º<br />";
				$lang_string['form_error'] = "ÇëÍêÕûÌîÐ´ÄãµÄÓÃ»§ÃûºÍÃÜÂë¡£";
				break;
			case 'install00':
				$lang_string['title'] = "»¶Ó­";
				$lang_string['instructions'] = "¸ÐÐ»ÄúÑ¡ÓÃ Simple PHP Blog£¡";
				
				$lang_string['blog_choose_language'] = "ÇëÑ¡ÔñÓïÑÔ£º";
				$lang_string['submit_btn'] = "&nbsp;Ìá½»&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "»¶Ó­";
				$lang_string['instructions'] = "¸ÐÐ»ÄúÑ¡ÓÃ Simple PHP Blog£¡<br /><br />Simple PHP BlogÊÇÒ»¸öÇá±ãµÄblogÏµÍ³¡£ËüÐèÒªPHP 4.1»ò¸ü¸ß°æ±¾£¬ÒÔ¼°·þÎñÆ÷¶ÎµÄÐ´È¨ÏÞ¡£ËùÓÐÐÅÏ¢±£´æÔÚÎÄ¼þÀï£¬ËùÒÔ²»ÐèÒªÊý¾Ý¿â¡£<br /><br />ÔÚ¿ªÊ¼Ê±£¬ Simple PHP BlogÐèÒª´´½¨Èý¸öÄ¿Â¼('config'¡¢'content'¡¢'images')À´´æ·ÅÐÅÏ¢¡£<br /><br /><b>°´ÏÂÃæµÄ°´Å¥À´¿ªÊ¼°²×°£º</b>";

				$lang_string['begin'] = "[ ¿ªÊ¼°²×° ]";
				break;
			case 'install02':
				$lang_string['title'] = "°²×°";
				$lang_string['instructions'] = "³¢ÊÔ´´½¨'config'¡¢'content'ºÍ'images'Ä¿Â¼£º";
				$lang_string['folder_exists'] = "Ì«ºÃÁË£¡Ä¿Â¼ÒÑ¾­´æÔÚÁË¡£²»ÐèÒª×÷Ê²Ã´¸Ä¶¯¡­¡­";
				$lang_string['folder_failed'] = "ÍÛ£¡²»ÄÜ´´½¨Ä¿Â¼¡­¡­";
				$lang_string['folder_success'] = "³É¹¦ÁË£¡Ä¿Â¼ÒÑ´´½¨¡­¡­";
				// Help
				$lang_string['help'] = "<h2>ÍÛ£¡</h2>²»ÄÜ´´½¨Ò»¸ö»ò¸ü¶àÄ¿Â¼£¡ÕâºÜ¿ÉÄÜÊÇÒòÎª£º<br><i>1) <b>Ð´È¨ÏÞ</b>²»±»ÔÊÐí¡£</i><br><i>2)ÎÄ¼þºÍÄ¿Â¼µÄ<b>UID</b>²»Æ¥Åä¡£</i><p />Çë°´ÕÕÏÂÃæµÄÒÉÄÑ½â´ðÔÙÊÔÒ»´Î£º<p />1) ÊÖ¹¤´´½¨Ä¿Â¼£º<b>config</b>¡¢<b>content</b>¡¢<b>images</b>¡£<p />2) ÔÊÐíÄ¿Â¼µÄ<b>Ð´È¨ÏÞ</b>¡£ÔÚFTP³ÌÐòÀïOwner¡¢UserºÍWorldÓ¦¸ÃÔÊÐí<b>¶Á</b>ºÍ<b>Ð´</b>·ÃÎÊ¡£<i>(Äã¿ÉÄÜÐèÒªÁªÏµÄãµÄ·þÎñÌá¹©ÉÌÀ´×öÕâÐ©¸Ä¶¯¡­¡­)</i><p />3) È·ÈÏÄãµÄÎÄ¼þºÍÄ¿Â¼µÄUID¶¼ÏàÍ¬¡£<i>(Äã¿ÉÄÜÐèÒªÁªÏµÄãµÄ·þÎñÌá¹©ÉÌÀ´×öÕâÐ©¸Ä¶¯¡­¡­)</i>";
				
				
				
				
				
				
				
				
				
				$lang_string['try_again'] = "[ ÔÙÊÔÒ»´Î ]";
				// Success
				$lang_string['success'] = "<h2>³É¹¦ÁË£¡</h2>Ä¿Â¼´´½¨³É¹¦£¡<p /><b>µã»÷ÏÂÃæµÄ°´Å¥¼ÌÐø£º</b>";
				$lang_string['continue'] = "[ ¼ÌÐø ]";
				break;
			case 'install03':
				$lang_string['title'] = "´´½¨ÓÃ»§Ãû &amp; ÃÜÂë";
				$lang_string['instructions'] = "Ê¹ÓÃÏÂÃæµÄ±íµ¥À´´´½¨Ò»¸öÓÃ»§ÃûºÍÃÜÂë¡£";
				$lang_string['username'] = "ÓÃ»§Ãû£º";
				$lang_string['password'] = "ÃÜÂë£º";
				$lang_string['submit_btn'] = "&nbsp;Ìá½»&nbsp;";
				// Success
				$lang_string['success'] = "<h2>×£ºØ£¡</h2>ÄãÒÑ¾­µÇÈë¡£µã»÷ÏÂÃæµÄ°´Å¥À´·ÃÎÊÉèÖÃÒ³Ãæ£¬ÔÚÄÇÀïÄã¿ÉÒÔ¸øÄãµÄblogÃüÃû¡£ºÇºÇ^_^<p />";
				$lang_string['btn_setup'] = "[ ÉèÖÃ ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>ÍÛ£¡</h2>ÐÅÏ¢Ã»ÓÐ±£´æ¡£ÔÚ±£´æÓÃ»§ÃûºÍÃÜÂëÊ±Óöµ½ÁËÒ»¸öÎÊÌâ¡£<br /><br />·þÎñÆ÷±¨¸æ£º<br />";
				$lang_string['form_error'] = "ÇëÍêÕûÌîÐ´ÄãµÄÓÃ»§ÃûºÍÃÜÂë¡£";
				break;
			case 'setup':
				$lang_string['title'] = "ÉèÖÃ";
				$lang_string['instructions'] = "Äã¿ÉÒÔÔÚÏÂÃæ¸Ä±äÄãµÄblogµÄÃû×Ö£¬ÒÔ¼°ÄãµÄ¸öÈËÐÅÏ¢¡£";
				$lang_string['blog_title'] = "BlogÃû£º";
				$lang_string['blog_author'] = "×÷Õß£º";
				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
				$lang_string['blog_footer'] = "Ò³½Å£º";
				$lang_string['blog_choose_language'] = "Ñ¡ÔñÓïÑÔ£º";
				$lang_string['blog_enable_comments'] = "ÔÊÐíÓÃ»§ÆÀÂÛ"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "ÔÚµ¯³ö´°¿Ú´ò¿ªÆÀÂÛ"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "Enable Users to Rate Entries"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Send email notification when comments are posted"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Send weblog &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "Enter full URL (i.e. http://rpc.weblogs.com/RPC2) of service to &quot;ping&quot;.<br />(You can enter more than one address separated by commas.)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Enable trackback in my blog"; // <-- New 0.?.?
				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "×î¶àÏÔÊ¾ÌõÄ¿Êý£º"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "ÔÚÆÀÂÛÖÐÔÊÐíÊ¹ÓÃ±êÇ©£º"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					Since PHP 4.0.4, PHP has had the ability to read and write gzip (.gz) compressed files, 
					thus saving disk-space. It can also transparently compress pages that are sent to browsers 
					which support gzip compression, thus saving bandwidth.<br />
					<br />
					Zlib support in PHP is not enabled by default. If the checkboxes are disabled, then your 
					installation of PHP does not support the Zlib extension."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Enable GZIP Compression for Database Files"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Enable GZIP Compression for HTTP Output"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Ìá½»&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>ÍÛ£¡</h2>ÐÅÏ¢Ã»ÓÐ±£´æ¡£ÔÚ±£´æÐÅÏ¢Ê±Óöµ½ÁËÒ»¸öÎÊÌâ¡£<br /><br />·þÎñÆ÷±¨¸æ£º<br />";
				$lang_string['form_error'] = "ÇëÍêÕûÌîÐ´±êÌâºÍ×÷Õß¡£";
				$lang_string['label_entry_order'] = "ÌõÄ¿´ÎÐò£º";
				$lang_string['select_new_to_old'] = "ÐÂµÄÔÚÇ°";
				$lang_string['select_old_to_new'] = "¾ÉµÄÔÚÇ°";
				$lang_string['label_comment_order'] = "ÆÀÂÛ´ÎÐò£º";
				break;
			case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "Trackback URL for this entry:";
				$lang_string['delete_btn'] = "delete";
				// Error Response
				$lang_string['error_add'] = "Error storing trackback data.";
				break;
			case 'options':
				$lang_string['title'] = "Ñ¡Ïî";
				$lang_string['instructions'] = "Ê¹ÓÃÏÂÃæµÄ±íµ¥À´×Ô¶¨ÒåÌõÄ¿ºÍÆÀÂÛµÄÈÕÆÚºÍÊ±¼äµÄÏÔÊ¾¡£Äã¿ÉÒÔÑ¡Ôñ12»ò24Ð¡Ê±¼ÆÊ±¡£³¤ÈÕÆÚ»ò¶ÌÈÕÆÚ¸ñÊ½¡£<b>Ô¤ÀÀ</b>ÇøÓò»á×Ô¶¯¸üÐÂÒÔÏÔÊ¾Äã¶¨ÒåµÄ¸ñÊ½µÄÑù×Ó¡£";
				// Long Date
				$lang_string['ldate_title'] = "³¤ÈÕÆÚ¸ñÊ½£º";
				$lang_string['weekday'] = "ÐÇÆÚ";
				$lang_string['month'] = "ÔÂ";
				$lang_string['day'] = "ÈÕ";
				$lang_string['year'] = "Äê";
				$lang_string['none'] = "ÎÞ";
				// Short Date
				$lang_string['sdate_title'] = "¶ÌÈÕÆÚ¸ñÊ½";
				$lang_string['s_month'] = "ÔÂ";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "ÈÕ";
				$lang_string['s_year'] = "Äê";
				$lang_string['zero_day'] = "¸öÎ»ÈÕÆÚÇ°¼ÓÁã";
				$lang_string['show_century'] = "ÏÔÊ¾ÊÀ¼Í";
				// Time
				$lang_string['time_title'] = "Ê±¼ä¸ñÊ½£º";
				$lang_string['12hour'] = "12Ð¡Ê±¼ÆÊ±";
				$lang_string['24hour'] = "24Ð¡Ê±¼ÆÊ±";
				$lang_string['before_noon'] = "ÉÏÎç";
				$lang_string['after_noon'] = "ÏÂÎç";
				// Date
				$lang_string['date_title'] = "ÈÕÆÚÏÔÊ¾¸ñÊ½";
				$lang_string['long_date'] = "³¤ÈÕÆÚ";
				$lang_string['short_date'] = "¶ÌÈÕÆÚ";
				$lang_string['time'] = "Ê±¼ä";
				// Menu
				$lang_string['menu_title'] = "²Ëµ¥ÈÕÆÚÏÔÊ¾¸ñÊ½£º";
				$lang_string['long_date'] = "³¤ÈÕÆÚ";
				$lang_string['short_date'] = "¶ÌÈÕÆÚ";
				// Used in multiple places
				$lang_string['zero_day'] = "¸öÎ»ÈÕÆÚÇ°¼ÓÁã";
				$lang_string['zero_month'] = "¸öÎ»ÔÂ·ÝÇ°¼ÓÁã";
				$lang_string['zero_hour'] = "¸öÎ»Ð¡Ê±Ç°¼ÓÁã";
				$lang_string['separator'] = "·Ö¸ô·û";
				$lang_string['preview'] = "Ô¤ÀÀ£º";
				$lang_string['server_offset'] = "·þÎñÆ÷Ê±²î£º";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Ìá½»&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>ÍÛ£¡</h2>ÐÅÏ¢Ã»ÓÐ±£´æ¡£ÔÚ±£´æÐÅÏ¢Ê±Óöµ½ÁËÒ»¸öÎÊÌâ¡£<br /><br />·þÎñÆ÷±¨¸æ£º<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Ò³ÃæÖ÷Ìâ";
				$lang_string['instructions'] = "Ê¹ÓÃÏÂÀ­²Ëµ¥Ñ¡Ôñ²»Í¬µÄÒ³ÃæÖ÷Ìâ";
				// Themes
				$lang_string['choose_theme'] = "Ò³ÃæÖ÷Ìâ£º";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Ìá½»&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>ÍÛ£¡</h2>ÐÅÏ¢Ã»ÓÐ±£´æ¡£ÔÚ±£´æÐÅÏ¢Ê±Óöµ½ÁËÒ»¸öÎÊÌâ¡£<br /><br />·þÎñÆ÷±¨¸æ£º<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "ÉÏ´«Í¼Æ¬";
				$lang_string['instructions'] = "µã»÷°´Å¥Ñ¡ÔñÒªÉÏ´«µÄÎÄ¼þ¡£";
				$lang_string['select_file'] = "Ñ¡ÔñÎÄ¼þ£º";
				$lang_string['upload_btn'] = "ÉÏ´«";
				// Error Response
				$lang_string['error'] = "<h2>ÍÛ£¡</h2>²»ÄÜÉÏ´«Í¼Æ¬¡£Çë¿´¸ü¶àÐÅÏ¢£º<br /><br />·þÎñÆ÷±¨¸æ£º<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "Search Results";
				$lang_string['instructions'] = "Search results for <b>%string</b>:";
				$lang_string['not_found'] = "No results found";
				break;
			case 'contact':
				$lang_string['contact_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Contact Me";
				$lang_string['instructions'] = "Fill in the form:";
				$lang_string['form_error'] = "Please complete the Subject and Comment fields.";
				$lang_string['name'] = "Name:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Subject:";
				$lang_string['comment'] = "Comment:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				$lang_string['success'] = "<h2>Success!</h2>Your message has been sent.<p />";
				$lang_string['failure'] = "<h2>Error!</h2>Your message has not been sent. Most likely the Anti Spam was not entered properly.<p />";
				break;
			case 'stats':
				$lang_string['title'] = "<h2>Statistics</h2>";
				$lang_string['general'] = "<h3>General</h3>";
				$lang_string['entry_info'] = "<b>%s</b> entries using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['comment_info'] = "<b>%s</b> comments using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['trackback_info'] = "<b>%s</b> trackbacks stored in <b>%s</b> bytes";
				$lang_string['static_info'] = "<b>%s</b> static pages using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['most_viewed_entries'] = "<h3>10 Most viewed entries</h3>";
				$lang_string['most_commented_entries'] = "<h3>10 Most commented entries</h3>";
				$lang_string['most_trackbacked_entries'] = "<h3>10 Most trackbacked entries</h3>";
				$lang_string['vote_info'] = "<b>%s</b> votes stored in <b>%s</b> bytes"; // 0.4.1
				$lang_string["most_voted_entries"] = "<h3>10 Most voted entries</h3>"; // 0.4.1
				$lang_string["most_rated_entries"] = "<h3>10 Most rated entries</h3>"; // 0.4.1
				break;
			default:
				break;
		}

	}
		
?>
