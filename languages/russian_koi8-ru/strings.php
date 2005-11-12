<?php
	// Russian Language Translation(s)
	// (c) 2004 Artyom Pervukhin, trem <at> pm <dot> convex <dot> ru (0.3.7)
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: English
		$lang_string['language'] = 'russian';
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'koi8-ru';
		$lang_string['php_charset'] = 'koi8-ru';
		
		$lang_string['locale'] = 'RUS'; // <-- New 0.3.7
		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "óÓÙÌËÉ";
		$lang_string['menu_home'] = "îÁ ÇÌÁ×ÎÕÀ";
		$lang_string['menu_contact'] = "Contact Me"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Stats"; // <-- New 0.3.7r
		$lang_string['menu_archive'] = "Archives";
		$lang_string['menu_menu'] = "íÅÎÀ";
		$lang_string['menu_most_recent'] = "ðÏÓÌÅÄÎÉÊ ËÏÍÍÅÎÔÁÒÉÊ";
		$lang_string['menu_add'] = "äÏÂÁ×ÉÔØ ÎÏ×ÏÓÔØ";
		$lang_string['menu_add_static'] = "äÏÂÁ×ÉÔØ ÓÔÒÁÎÉÃÕ";
		$lang_string['menu_upload'] = "äÏÂÁ×ÉÔØ ËÁÒÔÉÎËÕ";
		$lang_string['menu_setup'] = "îÁÓÔÒÏÊËÉ";
		$lang_string['menu_categories'] = "Categories"; // 0.3.7q
		$lang_string['menu_info'] = "Information"; // <-- New 0.3.7
		$lang_string['menu_options'] = "ðÁÒÁÍÅÔÒÙ";
		$lang_string['menu_themes'] = "Themes";
		$lang_string['menu_colors'] = "ã×ÅÔÁ";
		$lang_string['menu_change_login'] = "éÚÍÅÎÉÔØ ÐÏÌØÚÏ×ÁÔÅÌÑ";
		$lang_string['menu_logout'] = "÷ÙÈÏÄ";
		$lang_string['menu_login'] = "úÁÊÔÉ";
		$lang_string['menu_most_recent_entries'] = "Most Recent Entries";
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "Blocks";
		
		// Other
		$lang_string['home'] = "÷ÅÒÎÕÔØÓÑ ÎÁ ÇÌÁ×ÎÕÀ";
		$lang_string['nav_next'] = 'Next'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Back'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Search:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Go'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Page Generated in %s seconds'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( 'ñÎ×ÁÒØ', 'æÅ×ÒÁÌØ', 'íÁÒÔ', 'áÐÒÅÌØ', 'íÁÊ', 'éÀÎØ', 'éÀÌØ', 'á×ÇÕÓÔ', 'óÅÎÔÑÂÒØ', 'ïËÔÑÂÒØ', 'îÏÑÂÒØ', 'äÅËÁÂÒØ' );
		$lang_string['sb_default_title'] = 'îÅÔ ÎÁÚ×ÁÎÉÑ';
		$lang_string['sb_default_author'] = 'îÅÔ Á×ÔÏÒÁ';
		$lang_string['sb_default_footer'] = 'îÅÔ ÐÏÄ×ÁÌÁ';
		
		$lang_string['sb_edit'] = 'ÉÚÍÅÎÉÔØ';
		$lang_string['sb_delete'] = 'ÕÄÁÌÉÔØ';
		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		$lang_string['sb_relatedlink'] = 'related link'; // <-- New in 0.4.6
		
		$lang_string['sb_add_comment_btn'] = 'ÄÏÂÁ×ÉÔØ ËÏÍÍÅÎÔÁÒÉÊ';
		$lang_string['sb_comment_btn_number_first'] = false;
		$lang_string['sb_comment_btn'] = 'ËÏÍÍÅÎÔÁÒÉÊ';
		$lang_string['sb_comments_plural_btn_number_first'] = false;
		$lang_string['sb_comments_plural_btn'] = 'ËÏÍÍÅÎÔÁÒÉÅ×:';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' ÐÒÏÓÍÏÔÒ';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = 'ÐÒÏÓÍÏÔÒÏ×: ';
		$lang_string['sb_view_counter_plural_post'] = '';
		
		$lang_string['sb_add_link_btn'] = 'ÄÏÂÁ×ÉÔØ ÓÓÙÌËÕ';
		
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "ôÅÍÁ:";
				$lang_string['label_insert'] = "óÐÅÃÉÁÌØÎÙÅ ×ÏÚÍÏÖÎÏÓÔÉ:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
				$lang_string['view_images'] = "ðÒÏÓÍÏÔÒÅÔØ ÚÁËÁÞÁÎÎÙÅ ËÁÒÔÉÎËÉ";
				$lang_string['label_entry'] = "ôÅËÓÔ ÚÁÍÅÔËÉ:";
				$lang_string['btn_preview'] = "&nbsp;ðÒÏÓÍÏÔÒÅÔØ&nbsp;";
				$lang_string['btn_post'] = "&nbsp;ïÐÕÂÌÉËÏ×ÁÔØ&nbsp;";
				$lang_string['file_name'] = "Static File Name: (no spaces or file extensions)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "÷×ÅÄÉÔÅ ÆÏÒÍÁÔÉÒÕÅÍÙÊ ÔÅËÓÔ";
				$lang_string['insert_image'] = "÷×ÅÄÉÔÅ ÐÏÌÎÙÊ URL ËÁÒÔÉÎËÉ";
				$lang_string['insert_url1'] = "÷×ÅÄÉÔÅ ÔÅËÓÔ, ÏÔÏÂÒÁÖÁÅÍÙÊ × ×ÉÄÅ ÓÓÙÌËÉ (ÎÅÏÂÑÚÁÔÅÌØÎÏ)";
				$lang_string['insert_url2'] = "÷×ÅÄÉÔÅ ÐÏÌÎÙÊ URL ÓÓÙÌËÉ";
				$lang_string['insert_url3'] = "Open URL in new window (Optional):"; // <-- New 0.3.6
				$lang_string['form_error'] = "ðÏÖÁÌÕÊÓÔÁ, ÚÁÐÏÌÎÉÔÅ ÐÏÌÑ ÔÅÍÙ É ÓÏÄÅÒÖÁÎÉÑ.";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Optional:';
				$lang_string['insert_image_width'] = 'Width (Optional):';
				$lang_string['insert_image_height'] = 'Height (Optional):';
				$lang_string['insert_image_popup'] = 'View full-size in pop-up when clicked (Optional):';
				$lang_string['insert_image_float'] = 'Float (Optional):';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "äÏÂÁ×ÌÅÎÉÅ ÚÁÍÅÔËÉ";
				$lang_string['instructions'] = "úÁÐÏÌÎÉÔÅ ÆÏÒÍÕ, ÐÏ ÚÁ×ÅÒÛÅÎÉÉ ÎÁÖÍÉÔÅ <strong>'ðÒÏÓÍÏÔÒÅÔØ'</strong> ÄÌÑ ÐÒÅÄ×ÁÒÉÔÅÌØÎÏÇÏ ÐÒÏÓÍÏÔÒÁ ÚÁÍÅÔËÉ ÉÌÉ <strong>'ïÐÕÂÌÉËÏ×ÁÔØ'</strong> ÄÌÑ ÐÕÂÌÉËÁÃÉÉ ÚÁÍÅÔËÉ ÎÁ ÓÁÊÔÅ.";
				$lang_string['title_ad'] = "Confirm Trackback Pings"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				$lang_string['label_relatedlink'] = "Related Link"; // New for 0.4.6
				// Preview / Edit Entry
				$lang_string['title_preview'] = "ðÒÏÓÍÏÔÒ / ÒÅÄÁËÔÉÒÏ×ÁÎÉÅ ÚÁÍÅÔËÉ";
				$lang_string['instructions_preview'] = "ôÁË ×ÙÇÌÑÄÉÔ ×ÁÛÁ ÚÁÍÅÔËÁ. <strong>ïÂÒÁÔÉÔÅ ×ÎÉÍÁÎÉÅ</strong>: ÅÓÌÉ ×Ù ÉÓÐÏÌØÚÕÅÔÅ ×ÙÄÅÌÅÎÉÅ ÔÅËÓÔÁ, ÌÉÂÏ ×ÓÔÁ×ÉÌÉ ËÁÒÔÉÎËÉ ÉÌÉ ÓÓÙÌËÉ, ÕÂÅÄÉÔÅÓØ, ÞÔÏ ×ÓÅ ÔÜÇÉ ÉÍÅÀÔ ÚÁËÒÙ×ÁÀÝÕÀ ÐÁÒÕ.";
				$lang_string['title_update'] = "ïÂÎÏ×ÌÅÎÉÅ ÚÁÍÅÔËÉ";
				$lang_string['instructions_update'] = "÷Ù ÍÏÖÅÔÅ ÉÚÍÅÎÉÔØ ×ÁÛÕ ÚÁÍÅÔËÕ, ×ÏÓÐÏÌØÚÏ×Á×ÛÉÓØ ÓÌÅÄÕÀÝÅÊ ÆÏÒÍÏÊ. ëÏÇÄÁ ÚÁËÏÎÞÉÔÅ, ÉÓÐÏÌØÚÕÊÔÅ ËÎÏÐËÉ <strong>'ðÒÏÓÍÏÔÒÅÔØ'</strong> É '<strong>ïÐÕÂÌÉËÏ×ÁÔØ'</strong>.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>õÐÓ!</h2>úÁÍÅÔËÁ ÎÅ ÓÏÈÒÁÎÅÎÁ! ðÒÉ ÐÏÐÙÔËÅ ÓÏÈÒÁÎÅÎÉÑ ×ÏÚÎÉËÌÁ ÏÛÉÂËÁ.<br /><br />ïÔ×ÅÔ ÓÅÒ×ÅÒÁ:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "äÏÂÁ×ÉÔØ ÓÔÁÔÉÞÅÓËÕÀ ÓÔÒÁÎÉÃÕ";
				$lang_string['instructions'] = "úÁÐÏÌÎÉÔÅ ÓÌÅÄÕÀÝÕÀ ÆÏÒÍÕ ÄÌÑ ÓÏÚÄÁÎÉÑ ÓÔÁÔÉÞÅÓËÏÊ ÓÔÒÁÎÉÃÙ. ÷ ÏÔÌÉÞÉÅ ÏÔ ÏÂÙÞÎÙÈ ÐÏÓÔÏ×, ÓÔÁÔÉÞÅÓËÉÅ ÓÔÒÁÎÉÃÙ ÏÔÏÂÒÁÖÁÀÔÓÑ × ÍÅÎÀ ÓÐÒÁ×Á. îÁ ÎÉÈ ÕÄÏÂÎÏ ÒÁÚÍÅÝÁÔØ ÉÎÆÏÒÍÁÃÉÀ, ËÏÔÏÒÁÑ ÄÏÌÖÎÁ ÂÙÔØ ×ÓÅÇÄÁ ÄÏÓÔÕÐÎÁ: ËÏÎÔÁËÔÙ, ÏÔ×ÅÔÙ ÎÁ ÞÁÓÔÏ ÚÁÄÁ×ÁÅÍÙÅ ×ÏÐÒÏÓÙ, ÒÁÓÐÉÓÁÎÉÅ ÒÁÂÏÔÙ É Ô.Ä. éÓÐÏÌØÚÕÊÔÅ ËÎÏÐËÕ 'ðÒÏÓÍÏÔÒÅÔØ' ÄÌÑ ÐÒÅÄ×ÁÒÉÔÅÌØÎÏÇÏ ÐÒÏÓÍÏÔÒÁ ÓÔÒÁÎÉÃÙ, ÉÌÉ 'ïÐÕÂÌÉËÏ×ÁÔØ' ÄÌÑ ÓÏÈÒÁÎÅÎÉÑ ÓÔÒÁÎÉÃÙ.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "ðÒÏÓÍÏÔÒ / ÒÅÄÁËÔÉÒÏ×ÁÎÉÅ ÓÔÁÔÉÞÅÓËÏÊ ÓÔÒÁÎÉÃÙ";
				$lang_string['instructions_preview'] = "ôÁË ×ÙÇÌÑÄÉÔ ×ÁÛÁ ÓÔÁÔÉÞÅÓËÁÑ ÓÔÒÁÎÉÃÙ. åÓÌÉ ×Ù ÉÓÐÏÌØÚÕÅÔÅ ÆÏÒÍÁÔÉÒÏ×ÁÎÉÅ ÉÌÉ ËÁÒÔÉÎËÉ, ÎÅ ÚÁÂÕÄØÔÅ ÚÁËÒÙÔØ ×ÓÅ 'ÔÅÇÉ'.";
				$lang_string['title_update'] = "ïÂÎÏ×ÉÔØ ÓÔÁÔÉÞÅÓËÕÀ ÓÔÒÁÎÉÃÕ";
				$lang_string['instructions_update'] = "÷Ù ÍÏÖÅÔÅ ÉÚÍÅÎÉÔØ ÓÔÒÁÎÉÃÕ, ÉÓÐÏÌØÚÕÑ ÓÌÅÄÕÀÝÕÀ ÆÏÒÍÕ. ëÏÇÄÁ ÚÁËÏÎÞÉÔÅ ÒÅÄÁËÔÉÒÏ×ÁÎÉÅ, ÉÓÐÏÌØÚÕÊÔÅ ËÎÏÐËÉ 'ðÒÏÓÍÏÔÒ' É 'ïÐÕÂÌÉËÏ×ÁÔØ'.";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>õÐÓ!</h2>óÔÒÁÎÉÃÁ ÎÅ ÓÏÈÒÁÎÅÎÁ.<br /><br />ïÔ×ÅÔ ÓÅÒ×ÅÒÁ:<br />";
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
				$lang_string['title'] = "äÏÂÁ×ÌÅÎÉÅ / ÉÚÍÅÎÅÎÉÅ ÓÓÙÌÏË";
				$lang_string['instructions'] = "úÄÅÓØ ×Ù ÍÏÖÅÔÅ ÄÏÂÁ×ÉÔØ ÓÓÙÌËÉ ÎÁ ÄÒÕÇÉÅ ÓÁÊÔÙ. úÁÐÏÌÎÉÔÅ ÆÏÒÍÕ É ÎÁÖÍÉÔÅ ËÎÏÐËÕ <strong>'äÏÂÁ×ÉÔØ'</strong>. îÁÖÉÍÁÊÔÅ '÷×ÅÒÈ' ÉÌÉ '÷ÎÉÚ' ÄÌÑ ÉÚÍÅÎÅÎÉÑ ÐÏÒÑÄËÁ ÒÁÚÍÅÝÅÎÉÑ ÓÓÙÌÏË. éÓÐÏÌØÚÕÊÔÅ 'éÚÍÅÎÉÔØ' ÄÌÑ ÒÅÄÁËÔÉÒÏ×ÁÎÉÑ ÓÓÙÌËÉ; 'ÕÄÁÌÉÔØ' - ÄÌÑ ÕÄÁÌÅÎÉÑ.";
				$lang_string['up'] = "××ÅÒÈ";
				$lang_string['down'] = "×ÎÉÚ";
				$lang_string['edit'] = "ÉÚÍÅÎÉÔØ";
				$lang_string['delete'] = "ÕÄÁÌÉÔØ";
				$lang_string['link_name'] = "îÁÚ×ÁÎÉÅ:";
				$lang_string['link_url'] = "URL:";
				$lang_string['instructions_edit'] = "÷Ù ÒÅÄÁËÔÉÒÕÅÔÅ ÓÌÅÄÕÀÝÕÀ ÓÓÙÌËÕ:";
				$lang_string['instructions_modify'] = "éÚÍÅÎÉÔÅ ÎÕÖÎÕÀ ÓÓÙÌËÕ:";
				$lang_string['submit_btn_edit'] = "éÚÍÅÎÉÔØ ÓÓÙÌËÕ";
				$lang_string['submit_btn_add'] = "äÏÂÁ×ÉÔØ ÓÓÙÌËÕ";
				$lang_string['form_error'] = "ðÏÖÁÌÕÊÓÔÁ, ÚÁÐÏÌÎÉÔÅ ÐÏÌÑ ÎÁÚ×ÁÎÉÑ É ÁÄÒÅÓÁ.";
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
				$lang_string['title'] = "îÁÓÔÒÏÊËÉ Ã×ÅÔÏ×ÏÊ ÇÁÍÍÙ";
				$lang_string['instructions'] = "÷Ù ÍÏÖÅÔÅ ÍÅÎÑÔØ Ã×ÅÔÁ, ÉÓÐÏÌØÚÕÅÍÙÅ ÎÁ ×ÁÛÅÊ ÓÔÒÁÎÉÞËÅ. éÓÐÏÌØÚÕÊÔÅ ÐÁÌÉÔÒÕ ÄÌÑ ×ÙÂÏÒÁ ÐÏÄÈÏÄÑÝÅÇÏ Ã×ÅÔÁ, ÚÁÔÅÍ ×ÐÉÛÉÔÅ ÛÅÓÔÎÁÄÃÁÔÅÒÉÞÎÏÅ ÚÎÁÞÅÎÉÅ Ã×ÅÔÁ × ÐÏÌÑ ×ÎÉÚÕ.";
				$lang_string['bg_color'] = "æÏÎ ÓÔÒÁÎÉÃÙ";
				$lang_string['main_bg_color'] = "æÏÎ ÏÓÎÏ×ÎÏÊ ÏÂÌÁÓÔÉ";
				$lang_string['border_color'] = "òÁÍËÁ";
				$lang_string['inner_border_color'] = "÷ÎÕÔÒÅÎÎÑÑ ÒÁÍËÁ";
				$lang_string['header_bg_color'] = "æÏÎ ÛÁÐËÉ";
				$lang_string['header_txt_color'] = "ôÅËÓÔ ÛÁÐËÉ";
				$lang_string['menu_bg_color'] = "æÏÎ ÍÅÎÀ";
				$lang_string['footer_bg_color'] = "æÏÎ ÐÏÄ×ÁÌÁ";
				$lang_string['txt_color'] = "ïÓÎÏ×ÎÏÊ ÔÅËÓÔ";
				$lang_string['headline_txt_color'] = "úÁÇÏÌÏ×ÏË";
				$lang_string['date_txt_color'] = "ôÅËÓÔ ÄÁÔÙ";
				$lang_string['footer_txt_color'] = "ôÅËÓÔ ÐÏÄ×ÁÌÁ";
				$lang_string['link_reg_color'] = "ïÂÙÞÎÁÑ ÓÓÙÌËÁ";
				$lang_string['link_hi_color'] = "óÓÙÌËÁ ÁËÔÉ×ÎÁÑ";
				$lang_string['link_down_color'] = "óÓÙÌËÁ ÎÁÖÁÔÁÑ";
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
				$lang_string['submit_btn'] = "&nbsp;õÓÔÁÎÏ×ÉÔØ&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>õÐÓ!</h2>éÎÆÏÒÍÁÃÉÑ ÎÅ ÓÏÈÒÁÎÅÎÁ! ÷Ï ×ÒÅÍÑ ÐÏÐÙÔËÉ ÓÏÈÒÁÎÅÎÉÑ ÐÒÏÉÚÏÛÌÁ ÏÛÉÂËÁ.<br /><br />ïÔ×ÅÔ ÓÅÒ×ÅÒÁ:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['comment_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "ëÏÍÍÅÎÔÁÒÉÉ";
				$lang_string['header'] = "äÏÂÁ×ÌÅÎÉÅ ËÏÍÍÅÎÔÁÒÉÑ";
				$lang_string['instructions'] = "úÁÐÏÌÎÉÔÅ ÆÏÒÍÕ ÄÌÑ ÄÏÂÁ×ÌÅÎÉÑ ×ÁÛÅÇÏ ËÏÍÍÅÎÔÁÒÉÑ.";
				$lang_string['comment_name'] = "÷ÁÛÅ ÉÍÑ:";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Remember me:"; // 0.3.8
				$lang_string['comment_text'] = "ôÅËÓÔ ËÏÍÍÅÎÔÁÒÉÑ:";
				$lang_string['post_btn'] = "&nbsp;äÏÂÁ×ÉÔØ&nbsp;";
				$lang_string['delete_btn'] = "ÕÄÁÌÉÔØ";
				// Error Response
				$lang_string['error_add'] = "<h2>õÐÓ!</h2>ëÏÍÍÅÎÔÁÒÉÊ ÎÅ ÓÏÈÒÁÎÅÎ. ðÒÉ ÐÏÐÙÔËÅ ÓÏÈÒÁÎÅÎÉÑ ÐÒÏÉÚÏÛÌÁ ÎÅÐÏÌÁÄËÁ.<br /><br />ïÔ×ÅÔ ÓÅÒ×ÅÒÁ:<br />";
				$lang_string['error_delete'] = "<h2>õÐÓ!</h2>ëÏÍÍÅÎÔÁÒÉÊ ÎÅ ÂÙÌ ÕÄÁÌÅÎ. ðÒÉ ÐÏÐÙÔËÅ ÕÄÁÌÅÎÉÑ ÐÒÏÉÚÏÛÌÁ ÏÛÉÂËÁ.<br /><br />ïÔ×ÅÔ ÓÅÒ×ÅÒÁ:<br />";
				$lang_string['form_error'] = "ðÏÖÁÌÕÊÓÔÁ, ÚÁÐÏÌÎÉÔÅ ÐÏÌÑ ÉÍÅÎÉ É ÔÅËÓÔÁ ËÏÍÍÅÎÔÁÒÉÑ.";
				break;
			case 'delete':
				$lang_string['title'] = "õÄÁÌÅÎÉÅ ÚÁÍÅÔËÉ";
				$lang_string['instructions'] = "÷Ù ÓÏÂÉÒÁÅÔÅÓØ ÕÄÁÌÉÔØ ÜÔÕ ÚÁÍÅÔËÕ. åÝÅ ÒÁÚ ÕÄÏÓÔÏ×ÅÒØÔÅÓØ ÞÔÏ ×Ù ÈÏÔÉÔÅ ÕÄÁÌÉÔØ ÉÍÅÎÎÏ ÜÔÕ, ÔÁË ËÁË ×ÏÚÍÏÖÎÏÓÔÉ ×ÏÓÓÔÁÎÏ×ÉÔØ ÕÄÁÌÅÎÎÏÅ ÎÅ ÐÒÅÄÕÓÍÏÔÒÅÎÏ...";
				$lang_string['ok_btn'] = "&nbsp;õÄÁÌÉÔØ&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;ïÔÍÅÎÁ&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>õÐÍ!</h2>îÅ ×ÙÛÌÏ ÕÄÁÌÉÔØ ÚÁÍÅÔËÕ.<br /><br />ïÔ×ÅÔ ÓÅÒ×ÅÒÁ:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "õÄÁÌÉÔØ ÓÔÁÔÉÞÅÓËÕÀ ÓÔÒÁÎÉÃÕ";
				$lang_string['instructions'] = "÷Ù ÓÏÂÉÒÁÅÔÅÓØ ÕÄÁÌÉÔØ ÜÔÕ ÓÔÒÁÎÉÃÕ. õÂÅÄÉÔÅÓØ ÅÝÅ ÒÁÚ, ÞÔÏ ÈÏÔÉÔÅ ÕÄÁÌÉÔØ ÉÍÅÎÎÏ ÅÅ, ×ÏÚÍÏÖÎÏÓÔÉ ÏÔÍÅÎÙ ÎÅ ÐÒÅÄÕÓÍÏÔÒÅÎÏ.";
				$lang_string['ok_btn'] = "&nbsp;ïë&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;ïÔÍÅÎÁ&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>õÐÓ!</h2>óÔÒÁÎÉÃÁ ÎÅ ÂÙÌÁ ÕÄÁÌÅÎÁ.<br /><br />ïÔ×ÅÔ ÓÅÒ×ÅÒÁ:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "ëÁÔÁÌÏÇ ËÁÒÔÉÎÏË";
				$lang_string['instructions'] = "îÁÖÉÍÁÊÔÅ ÎÁ ÓÏÏÔ×ÅÔÓÔ×ÕÀÝÉÅ ÓÓÙÌËÉ ÄÌÑ ÐÒÏÓÍÏÔÒÁ ËÁÒÔÉÎÏË.<br /><br />äÌÑ ×ÓÔÁ×ÌÅÎÉÑ ËÁÒÔÉÎËÉ × ÔÅËÓÔ ÚÁÍÅÔËÉ:<br />1) îÁÖÍÉÔÅ ÐÒÁ×ÏÊ ËÎÏÐËÏÊ ÍÙÛÉ ÎÁ ÓÓÙÌËÅ É ×ÙÂÅÒÉÔÅ ÐÕÎËÔ ÍÅÎÀ <em>ëÏÐÉÒÏ×ÁÔØ ÓÓÙÌËÕ</em>.<br />2) ÷ÅÒÎÉÔÅÓØ × ÏËÎÏ ÄÏÂÁ×ÌÅÎÉÑ / ÉÚÍÅÎÅÎÉÑ ÚÁÍÅÔËÉ.<br />3) îÁÖÍÉÔÅ ËÎÏÐËÕ <strong>'img'</strong> É ×ÓÔÁ×ØÔÅ × ÐÏÑ×É×ÛÅÅÓÑ ÏËÏÛËÏ ÓÓÙÌËÕ ÉÚ ÂÕÆÅÒÁ ÏÂÍÅÎÁ.";
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
				$lang_string['title'] = "÷ÈÏÄ";
				$lang_string['instructions'] = "÷×ÅÄÉÔÅ ÉÍÑ ÐÏÌØÚÏ×ÁÔÅÌÑ É ÐÁÒÏÌØ";
				$lang_string['username'] = "éÍÑ ÐÏÌØÚÏ×ÁÔÅÌÑ:";
				$lang_string['password'] = "ðÁÒÏÌØ:";
				$lang_string['submit_btn'] = "&nbsp;÷ÏÊÔÉ&nbsp;";
				// Success
				$lang_string['success'] = "<h2>ðÏÚÄÒÁ×ÌÑÅÍ!</h2>÷Ù ÕÓÐÅÛÎÏ ÚÁÒÅÇÉÓÔÒÉÒÏ×ÁÌÉÓØ × ÓÉÓÔÅÍÅ. õÄÁÞÎÏÇÏ ÎÏ×ÏÓÔÅÐÉÓÁÎÉÑ! :)<br />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>õÐÓ!</h2>÷ÁÍ ÎÅ ÕÄÁÌÏÓØ ÚÁÒÅÇÉÓÔÒÉÒÏ×ÁÔØÓÑ. ðÒÏ×ÅÒØÔÅ ÐÒÁ×ÉÌØÎÏÓÔØ ××ÏÄÁ ÉÍÅÎÉ ÐÏÌØÚÏ×ÁÔÅÌÑ É ÐÁÒÏÌÑ.<br />";
				$lang_string['form_error'] = "ðÏÖÁÌÕÊÓÔÁ, ÚÁÐÏÌÎÉÔÅ ÐÏÌÑ ÉÍÅÎÉ ÐÏÌØÚÏ×ÁÔÅÌÑ É ÐÁÒÏÌÑ.";
				break;
			case 'logout':
				$lang_string['title'] = "÷ÙÈÏÄ";
				$lang_string['instructions'] = "<h2>õÐÓ!</h2>÷ÙÈÏÄ ÎÅ ÕÄÁÌÓÑ: ÎÅ ÓÍÏÇÌÉ ÕÄÁÌÉÔØÓÑ cookie. óÔÒÁÎÎÏ, É ÐÏÞÅÍÕ ×Ù ×ÓÅ ÅÝÅ ÚÁÒÅÇÉÓÔÒÉÒÏ×ÁÎÙ?..<br />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>õÐÓ!</h2>éÎÆÏÒÍÁÃÉÑ ÎÅ ÓÏÈÒÁÎÅÎÁ. ðÒÉ ÐÏÐÙÔËÅ ÓÏÈÒÁÎÅÎÉÑ ÐÒÏÉÚÏÛÌÁ ÏÛÉÂËÁ.<br /><br />ïÔ×ÅÔ ÓÅÒ×ÅÒÁ:<br />";
				break;
			case 'set_login': // <-- New
				$lang_string['title'] = "Change Username &amp; Password";
				$lang_string['instructions'] = "Use the form below to change your Username and/or Password. Enter the Username and Password that you want to use.";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				$lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
					and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
					exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
					to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
				// Success
				$lang_string['success'] = "<h2>Success!</h2>Your Username and/or Password is active. Happy blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Username and Password fields.";
				break;
			case 'install00': // <-- New
				$lang_string['title'] = "Welcome";
				$lang_string['instructions'] = "
				Thank you for choosing Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Choose Language:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				break;
			case 'install01': // <-- New
				$lang_string['title'] = "Welcome";
				$lang_string['instructions'] = "
				Thank you for choosing Simple PHP Blog!<br /><br />Simple PHP Blog is a light-weight blogging system. It requires PHP 4.1 or greater, and write-permissions on the server. All information is stored in flat-files, so no database is required.<br /><br />
				In order to begin, Simple PHP Blog needs to create three folders ('config', 'content', and 'images') in which to store your information.<br /><br />
				<b>Click below to begin setup:</b>";
				$lang_string['begin'] = "[ Begin Setup ]";
				break;
			case 'install02': // <-- New
				$lang_string['title'] = "Setup";
				$lang_string['instructions'] = "Trying to create 'config', 'content', and 'images' folders:";
				$lang_string['folder_exists'] = "Okay! Folder already exists. No changes made...";
				$lang_string['folder_failed'] = "Whoops! Could not create folder...";
				$lang_string['folder_success'] = "Success! Folder created...";
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
				$lang_string['success'] = "<h2>Success!</h2>Folders created successfully!<p /><b>Click below to continue:</b>";
				$lang_string['continue'] = "[ Continue ]";
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
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />"; // <-- New
				$lang_string['title'] = "Create Username &amp; Password";
				$lang_string['instructions'] = "Use the form below to Create a Username and Password.";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Congratulations!</h2>You are now logged in. Click below to visit the Setup page, where you can name your blog. Happy blogging!<p />";
				$lang_string['btn_setup'] = "[ Setup ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Username and Password fields.";
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
				$lang_string['title'] = "îÁÓÔÒÏÊËÉ";
				$lang_string['instructions'] = "úÄÅÓØ ×Ù ÍÏÖÅÔÅÌ ÉÚÍÅÎÉÔØ ÎÁÚ×ÁÎÉÅ Ó×ÏÅÇÏ ÂÌÏÇÁ/ÓÔÒÁÎÉÞËÉ É ÎÅËÏÔÏÒÕÀ ÐÅÒÓÏÎÁÌØÎÕÀ ÉÎÆÏÒÍÁÃÉÀ.";
				$lang_string['blog_title'] = "îÁÚ×ÁÎÉÅ ÓÔÒÁÎÉÞËÉ:";
				$lang_string['blog_author'] = "á×ÔÏÒ:";
				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
				$lang_string['blog_footer'] = "ðÏÄ×ÁÌ:";
				$lang_string['blog_choose_language'] = "÷ÙÂÅÒÉÔÅ ÑÚÙË:";
				$lang_string['blog_enable_comments'] = "Enable User Comments"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Open Comments in Popup Window"; // <-- New 0.3.6
				$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
				$lang_string['blog_enable_voting'] = "Enable Users to Rate Entries"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Send email notification when comments are posted"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Send weblog &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "Enter full URL (i.e. http://rpc.weblogs.com/RPC2) of service to &quot;ping&quot;.<br />(You can enter more than one address separated by commas.)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Enable trackback in my blog"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "Maximum Entries to Display:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Tags to Allow in Comments:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					Since PHP 4.0.4, PHP has had the ability to read and write gzip (.gz) compressed files, 
					thus saving disk-space. It can also transparently compress pages that are sent to browsers 
					which support gzip compression, thus saving bandwidth.<br />
					<br />
					Zlib support in PHP is not enabled by default. If the checkboxes are disabled, then your 
					installation of PHP does not support the Zlib extension."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Enable GZIP Compression for Database Files"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Enable GZIP Compression for HTTP Output"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;óÏÈÒÁÎÉÔØ&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>õÐÓ!</h2>éÎÆÏÒÍÁÃÉÑ ÎÅ ÍÏÖÅÔ ÂÙÔØ ÓÏÈÒÁÎÅÎÁ. ðÒÉ ÐÏÐÙÔËÅ ÓÏÈÒÁÎÅÎÉÑ ÐÒÏÉÚÏÛÌÁ ÏÛÉÂËÁ.<br /><br />ïÔ×ÅÔ ÓÅÒ×ÅÒÁ:<br />";
				$lang_string['form_error'] = "ðÏÖÁÌÕÊÓÔÁ, ÕËÁÖÉÔÅ ÎÁÚ×ÁÎÉÅ É Á×ÔÏÒÁ.";
				$lang_string['label_entry_order'] = "ðÏÒÑÄÏË ÏÔÏÂÒÁÖÅÎÉÑ ÐÏÓÔÏ×:";
				$lang_string['select_new_to_old'] = "îÏ×ÙÅ ÐÅÒ×ÙÍÉ";
				$lang_string['select_old_to_new'] = "îÏ×ÙÅ ÐÏÓÌÅÄÎÉÍÉ";
				$lang_string['label_comment_order'] = "ðÏÒÑÄÏË ÏÔÏÂÒÁÖÅÎÉÑ ËÏÍÍÅÎÔÁÒÉÅ×:";
								$lang_string['cal_sunday'] = "Sunday"; // New for 0.4.6
				$lang_string['cal_monday'] = "Monday"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "Calendar Week Start Day"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Enable Calendar / Archives Block"; // New for 0.4.6
				$lang_string['blog_enable_title'] = "Enable Plain Text Title Block (Clear checkbox if the title is in the header graphic)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Enable Permalink on Blog Entries"; // New for 0.4.6
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
				$lang_string['title'] = "ðÁÒÁÍÅÔÒÙ";
				$lang_string['instructions'] = "îÁÓÔÒÏÊÔÅ ÐÁÒÁÍÅÔÒÙ ÏÔÏÂÒÁÖÅÎÉÑ ÄÁÔÙ É ×ÒÅÍÅÎÉ. ðÏÌÑ <strong>ðÒÅÄ×ÁÒÉÔÅÌØÎÙÊ ÐÒÏÓÍÏÔÒ</strong> Á×ÔÏÍÁÔÉÞÅÓËÉ ÏÂÎÏ×ÌÑÀÔÓÑ ÐÒÉ ÉÚÍÅÎÅÎÉÉ ËÁËÏÇÏ-ÌÉÂÏ ÐÁÒÁÍÅÔÒÁ.";
				// Long Date
				$lang_string['ldate_title'] = "äÌÉÎÎÙÊ ÆÏÒÍÁÔ ÄÁÔÙ:";
				$lang_string['weekday'] = "äÅÎØ ÎÅÄÅÌÉ";
				$lang_string['month'] = "íÅÓÑÃ";
				$lang_string['day'] = "äÅÎØ";
				$lang_string['year'] = "çÏÄ";
				$lang_string['none'] = "ÐÕÓÔÏ";
				// Short Date
				$lang_string['sdate_title'] = "ëÏÒÏÔËÉÊ ÆÏÒÍÁÔ ÄÁÔÙ:";
				$lang_string['s_month'] = "íÅÓÑÃ";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "äÅÎØ";
				$lang_string['s_year'] = "çÏÄ";
				$lang_string['zero_day'] = "01 ×ÍÅÓÔÏ 1";
				$lang_string['show_century'] = "Show century";
				// Time
				$lang_string['time_title'] = "æÏÒÍÁÔ ×ÒÅÍÅÎÉ:";
				$lang_string['12hour'] = "12-ÞÁÓÏ×ÏÊ ÆÏÒÍÁÔ";
				$lang_string['24hour'] = "24-ÞÁÓÏ×ÏÊ ÆÏÒÍÁÔ";
				$lang_string['before_noon'] = "äÏ ÐÏÌÕÄÎÑ";
				$lang_string['after_noon'] = "ðÏÓÌÅ ÐÏÌÕÄÎÑ";
				// Date
				$lang_string['date_title'] = "æÏÒÍÁÔ ÏÔÏÂÒÁÖÅÎÉÑ:";
				$lang_string['long_date'] = "äÌÉÎÎÁÑ ÄÁÔÁ";
				$lang_string['short_date'] = "ëÏÒÏÔËÁÑ ÄÁÔÁ";
				$lang_string['time'] = "÷ÒÅÍÑ";
				// Menu
				$lang_string['menu_title'] = "Menu Date Display Format:";
				$lang_string['long_date'] = "Long Date";
				$lang_string['short_date'] = "Short Date";
				// Used in multiple places
				$lang_string['zero_day'] = "01 ×ÍÅÓÔÏ 1 ÄÌÑ ÄÎÑ";
				$lang_string['zero_month'] = "01 ×ÍÅÓÔÏ 1 ÄÌÑ ÄÌÑ ÍÅÓÑÃÁ";
				$lang_string['zero_hour'] = "01 ×ÍÅÓÔÏ 1 ÄÌÑ ÞÁÓÁ";
				$lang_string['separator'] = "òÁÚÄÅÌÉÔÅÌØ:";
				$lang_string['preview'] = "ðÒÅÄ×ÁÒÉÔÅÌØÎÙÊ ÐÒÏÓÍÏÔÒ:";
				$lang_string['server_offset'] = "Server Offset:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;óÏÈÒÁÎÉÔØ&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>õÐÓ!</h2>ðÒÉ ÓÏÈÒÁÎÅÎÉÉ ÐÁÒÁÍÅÔÒÏ× ×ÏÚÎÉËÌÁ ÏÛÉÂËÁ. ðÁÒÁÍÅÔÒÙ ÎÅ ÓÏÈÒÁÎÅÎÙ.<br /><br />ïÔ×ÅÔ ÓÅÒ×ÅÒÁ:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Themes";
				$lang_string['instructions'] = "Use the drop-down menu to select a different theme.";
				// Themes
				$lang_string['choose_theme'] = "Themes:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "úÁËÁÞËÁ ËÁÒÔÉÎËÉ";
				$lang_string['instructions'] = "îÁÖÍÉÔÅ ËÎÏÐËÕ 'ïÂÚÏÒ' ÞÔÏÂÙ ×ÙÂÒÁÔØ ËÁÒÔÉÎËÕ ÎÁ ÌÏËÁÌØÎÏÍ ÄÉÓËÅ.";
				$lang_string['select_file'] = "÷ÙÂÅÒÉÔÅ ÆÁÊÌ:";
				$lang_string['upload_btn'] = "äÏÂÁ×ÉÔØ";
				// Error Response
				$lang_string['error'] = "<h2>õÐÓ!</h2>ðÒÉ ÐÏÐÙÔËÅ ÚÁËÁÞÉ×ÁÎÉÑ ËÁÒÔÉÎËÉ ÐÒÏÉÚÏÛÌÁ ÏÛÉÂËÁ. óÌÕÖÅÂÎÁÑ ÉÎÆÏÒÍÁÃÉÑ:<br /><br />ïÔ×ÅÔ ÓÅÒ×ÅÒÁ:<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "Search Results";
				$lang_string['instructions'] = "Search results for <b>%string</b>:";
				$lang_string['not_found'] = "No results found";
				break;
			case 'contact': // <-- New 0.3.8
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
				$lang_string['contact_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2	
				$lang_string['contactsent'] = "Contact sent through: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				break;
			case 'stats':
				$lang_string['title'] = "Statistics";
				$lang_string['general'] = "General";
				$lang_string['entry_info'] = "<b>%s</b> entries using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['comment_info'] = "<b>%s</b> comments using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['trackback_info'] = "<b>%s</b> trackbacks stored in <b>%s</b> bytes";
				$lang_string['static_info'] = "<b>%s</b> static pages using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['most_viewed_entries'] = "10 Most viewed entries";
				$lang_string['most_commented_entries'] = "10 Most commented entries";
				$lang_string['most_trackbacked_entries'] = "10 Most trackbacked entries";
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
