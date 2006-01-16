<?php
	// Bulgarian Language Translation(s)
	// (c) 2005 Lucy Pearl, lusinda <at> gbg <dot> bg
	//
	// Simple PHP Version: 0.4.6.1
	// Language Version:   0.4.6.1
	

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: English
		$lang_string['language'] = 'bulgarian';
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'windows-1251';
		$lang_string['php_charset'] = 'windows-1251';
		
		$lang_string['locale'] = 'bg_BG'; // <-- New 0.3.7
		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Âðúçêè";
		$lang_string['menu_home'] = "Íà ãëàâíàòà";
		$lang_string['menu_contact'] = "Çà êîíòàêòè"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Ñòàòèñòèêè"; // <-- New 0.3.7r
		$lang_string['menu_archive'] = "Àðõèâ"; // <-- New
		$lang_string['menu_menu'] = "Ìåíþ";
		$lang_string['menu_most_recent'] = "Ïîñëåäíè êîìåíòàðè";
		$lang_string['menu_add'] = "Äîáàâè íîâèíà";
		$lang_string['menu_add_static'] = "Äîáàâè ñòðàíèöà";
		$lang_string['menu_upload'] = "Äîáàâè èçîáðàæåíèå";
		$lang_string['menu_setup'] = "Íàñòðîéêè";
		$lang_string['menu_categories'] = "Êàòåãîðèè"; // 0.3.7q
		$lang_string['menu_info'] = "Èíôîðìàöèÿ"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Ïàðàìåòðè";
		$lang_string['menu_themes'] = "Òåìè";
		$lang_string['menu_colors'] = "Öâåòîâå";
		$lang_string['menu_change_login'] = "Ñìåíè ïîòðåáèòåëÿ";
		$lang_string['menu_logout'] = "Èçõîä";
		$lang_string['menu_login'] = "Âëåç";
		$lang_string['menu_most_recent_entries'] = "Ïîñëåäíè íîâèíè";
		$lang_string['menu_most_recent_trackback'] = "Ïîñëåäíè ïðåïðàòêè"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "Áëîêîâå";
		$lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Other
		$lang_string['home'] = "Íà ãëàâíàòà";
		$lang_string['nav_next'] = 'Ñëåäâàùà'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Ïðåäèøíà'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Òúðñåíå:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Òúðñè'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Ñòðàíèöàòà çàðåäè çà %s ñåêóíäè'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( 'ßíóàðè', 'Ôåâðóàðè', 'Ìàðò', 'Àïðèë', 'Ìàé', 'Þíè', 'Þëè', 'Àâãóñò', 'Ñåïòåìâðè', 'Îêòîìâðè', 'Íîåìâðè', 'Äåêåìâðè' );
		$lang_string['sb_default_title'] = 'Áåç èìå';
		$lang_string['sb_default_author'] = 'Áåç àâòîð';
		$lang_string['sb_default_footer'] = 'Áåç ïîäòåêñò';
		
		$lang_string['sb_edit'] = 'ðåäàêòèðàé';
		$lang_string['sb_delete'] = 'èçòðèé';
		$lang_string['sb_permalink'] = 'ëèíê'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'ïðåïðàòêè'; // <-- New 0.3.8
		$lang_string['sb_relatedlink'] = 'ñâúðçàí ëèíê'; // <-- New in 0.4.6
		
		$lang_string['sb_add_comment_btn'] = 'äîáàâè êîìåíòàð';
		$lang_string['sb_comment_btn_number_first'] = false;
		$lang_string['sb_comment_btn'] = 'êîìåíòàð';
		$lang_string['sb_comments_plural_btn_number_first'] = false;
		$lang_string['sb_comments_plural_btn'] = 'êîìåíòàðè:';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' ïðåãëåä';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = 'ïðåãëåäà: ';
		$lang_string['sb_view_counter_plural_post'] = '';
		
		$lang_string['sb_add_link_btn'] = 'äîáàâè âðúçêà';
		
		$lang_string['sb_rate_entry_btn'] = 'Êëèêíè çà îöåíêà';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Çàãëàâèå:";
				$lang_string['label_insert'] = "Ñïåöèàëíè âúçìîæíîñòè:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
				$lang_string['view_images'] = "Ïðåãëåäàé ïðèêà÷åíèòå èçîáðàæåíèÿ";
				$lang_string['label_entry'] = "Òåêñò íà íîâèíàòà:";
				$lang_string['btn_preview'] = "&nbsp;Ïðåãëåä&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Ïóáëèêóâàé&nbsp;";
				$lang_string['file_name'] = "Èìå íà ñòàòè÷íèÿ ôàéë: (áåç èíòåðâàëè èëè ôàéëîâè ðàçøèðåíèÿ)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "Âúâåäè ñòèë íà òåêñòà";
				$lang_string['insert_image'] = "Âúâåäè ïúëåí URL íà èçîáðàæåíèåòî";
				$lang_string['insert_url1'] = "Âúâåäè òåêñòà, êîéòî ùå ñå èçïèñâà ïðè âðúçêàòà (íåçàäúëæèòåëíî)";
				$lang_string['insert_url2'] = "Âúâåäè ïúëåí URL íà âðúçêàòà";
				$lang_string['insert_url3'] = "Oòâîðè URL â íîâ ïðîçîðåö (íåçàäúëæèòåëíî):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Ìîëÿ, ïîïúëíè ïîëåòàòà çà òåìà è ñúäúðæàíèå.";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Íåçàäúëæèòåëíî:';
				$lang_string['insert_image_width'] = 'Øèðèíà (íåçàäúëæèòåëíî):';
				$lang_string['insert_image_height'] = 'Âèñî÷èíà (íåçàäúëæèòåëíî):';
				$lang_string['insert_image_popup'] = 'Âèæ â ïúëåí ðàçìåð â íîâ ïðîçîðåö ïðè êëèêâàíå (íåçàäúëæèòåëíî):';
				$lang_string['insert_image_float'] = 'Ñâîáîäíî (íåçàäúëæèòåëíî):';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Äîáàâÿíå íà íîâèíà";
				$lang_string['instructions'] = "Ïîïúëíè ôîðìàòà, ñëåä çàâúðøâàíå êëèêíè <strong>'Ïðåãëåä'</strong> çà ïðåäâàðèòåëåí ïðåãëåä íà íîâèíàòà èëè <strong>'Ïóáëèêóâàé'</strong> çà ïóáëèêóâàíå íîâèíàòà íà ñàéòà.";
				$lang_string['title_ad'] = "Ïîòâúðäè Ïèíãâàíå íà Ïðåïðàòêà"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "àâòîìàòè÷íî îòêðèâàíå"; // <-- New 0.3.8
				$lang_string['label_relatedlink'] = "Ñâúðçàí Ëèíê"; // New for 0.4.6
				$lang_string['label_categories'] = "Category List";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Ïðåãëåä / ðåäàêòèðàíå íà íîâèíàòà";
				$lang_string['instructions_preview'] = "Òàêà ùå èçãëåæäà íîâèíàòà. <strong>Îáúðíè âíèìàíèå,</strong>: ÷å àêî èçïîëçâàø ðàçäåëÿíå íà òåêñòà, ïðèêà÷èë ñè èçîîáðàæåíèå èëè ñè äàë ëèíê, òðÿáâà äà ñå óâåðèø, ÷å âñè÷êè òàãîâå ñà çàòâîðåíè.";
				$lang_string['title_update'] = "Îáíîâÿâàíå íà íîâèíàòà";
				$lang_string['instructions_update'] = "Ìîæåø äà ïðîìåíèø íîâèíàòà, èçïîëçâàéêè ñëåäíàòà ôîðìà. Êîãàòî çàâúðøèø, èçïîëçâàé áóòîíèòå <strong>'Ïðåãëåä'</strong> è '<strong>Ïóáëèêóâàé'</strong>.";
				$lang_string['ok_btn'] = "&nbsp;ÎÊ&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Îòìåíè&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>Óïñ!</h2>Íîâèíàòà íå å çàïàçåíà! Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Äîáàâè ñòàòè÷íà ñòðàíèöà";
				$lang_string['instructions'] = "Ïîïúëíè ñëåäíàòà ôîðìà çà ñúçäàâàíå íà ñòàòè÷íà ñòðàíèöà. Çà ðàçëèêà îò îáè÷àéíèòå, ñòàòè÷íèòå ñòðàíèöè ñå ïîêàçâàò â ìåíþòî îòäÿñíî. Íà òÿõ å óäîáíî äà ñå ïîìåñòâà èíôîðìàöèÿ, êîÿòî òðÿáâàäà áúäå âèíàãè äîñòúïíà: êîíòàêòû, îòãîâîðè íà ÷åñòî çàäàâàíè âúïðîñè, ðàçïèñàíèå çà ðàáîòà è ò.í. Èçïîëçâàé áóòîíà 'Ïðåãëåä' çà ïðåäâàðèòåëåí ïðåãëåä íà ñòðàíèöàòà, èëè 'Ïóáëèêóâàé' çà çàïàçâàíå íà ñòðàíèöàòà.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Ïðåãëåä / ðåäàêòèðàíå íà ñòàòè÷íà ñòðàíèöà";
				$lang_string['instructions_preview'] = "Òàêà èçãëåæäà ñòàòè÷íàòà ñòðàíèöà. Àêî èçïîëçâàø ñòèë èëè èçîáðàæåíèå, íå çàáðàâÿé äà çàòâîðèø âñè÷êè 'òàãîâå'.";
				$lang_string['title_update'] = "Îáíîâè ñòàòè÷íàòà ñòðàíèöà";
				$lang_string['instructions_update'] = "Ìîæåø äà ïðîìåíèø ñòðàíèöàòà, èçïîëçâàéêè ñëåäíàòà ôîðìà. Êîãàòî çàâúðøèø ðåäàêòèðàíåòî, èçïîëçâàé áóòîíèòå 'Ïðåãëåä' è 'Ïóáëèêóâàé'.";
				$lang_string['form_error'] = "Ìîëÿ, ïîïúëíè ïîëåòàòà çà Èìå, Íîâèíà, è Èìå íà ôàéë.";	
				// Error Response
				$lang_string['error'] = "<h2>Óïñ!</h2>Ñòðàíèöàòà íå å çàïàçåíà.<br /><br />Îòãîâîð íà ñúðâúðà: <br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Âúâåäè / Îôîðìè Âðúçêè";
				$lang_string['instructions'] = "Âúâåäè îáè÷àéíè Áëîêîâå";
				$lang_string['up'] = "íàãîðå";
				$lang_string['down'] = "íàäîëó";
				$lang_string['edit'] = "ðåäàêòèðàé";
				$lang_string['delete'] = "èçòðèé";
				$lang_string['block_name'] = "Èìå íà Áëîêà:";
				$lang_string['block_content'] = "Ñúäúðæàíèå íà Áëîêà:";
				$lang_string['instructions_edit'] = "Â ìîìåíòà ðåäàêòèðàø áëîê:";
				$lang_string['instructions_modify'] = "Êëèêíè ïî-äîëó äà èçìåíèø áëîê:";
				$lang_string['submit_btn_edit'] = "Ðåäàêòèðàé Áëîê";
				$lang_string['submit_btn_add'] = "Âúâåäè Áëîê";
				$lang_string['form_error'] = "Ïîïúëíè ïîëåòî Èìå.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Ñòàòè÷íè Ñòðàíèöè:";
				// Add / Manage Links
				$lang_string['title'] = "Äîáàâÿíå / ïðîìÿíà íà âðúçêàòà";
				$lang_string['instructions'] = "Òóê ìîæåø äà äîáàâèø âðúçêè êúì äðóãè ñàéòîâå. Ïîïúëíè ôîðìàòà è êëèêíè áóòîíà <strong>'Äîáàâè'</strong>. Êëèêâàé 'Íàãîðå' èëè 'Íàäîëó' çà ïðîìÿíà íà ïîðåäíîñòòà íà âðúçêèòå. Èçïîëçâàé 'Ïðîìåíè' çà ðåäàêòèðàíå íà âðúçêàòà; 'Èçòðèé' - çà èçòðèâàíå.";
				$lang_string['up'] = "íàãîðå";
				$lang_string['down'] = "íàäîëó";
				$lang_string['edit'] = "ïðîìåíè";
				$lang_string['delete'] = "èçòðèé";
				$lang_string['link_name'] = "Èìå:";
				$lang_string['link_url'] = "URL:";
				$lang_string['instructions_edit'] = "Ðåäàêòèðàø âðúçêàòà:";
				$lang_string['instructions_modify'] = "Ïðîìåíè íóæíàòà âðúçêà:";
				$lang_string['submit_btn_edit'] = "Ïðîìåíè âðúçêà";
				$lang_string['submit_btn_add'] = "Äîáàâè âðúçêà";
				$lang_string['form_error'] = "Ïîïúëíè ïîëåòàòà çà èìå è àäðåñ.";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "Äîáàâÿíå / Îôîðìÿíå íà Êàòåãîðèè";
				$lang_string['instructions'] = "Èçïîëçâàé ñëåäíàòà ôîðìà çà äà äîáàâèø è ðåäàêòèðàø êàòåãîðèèòå. Âñÿêà êàòåãîðèÿ òðÿáâà äà áúäå â òîçè ôîðìàò 'èìå íà êàòåãîðèÿòà (id íîìåð)'. Ðàçäåëÿé ñ èíòåðâàëè çà äà ñúçäàäåø éåðàðõèè.<br /><br /><b>Ïðèìåð:</b><br />Îáùà (1)<br />Íîâèíè (3)<br />&nbsp;&nbsp;Ñúîáùåíèÿ (6)<br />&nbsp;&nbsp;Ñúáèòèÿ (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Ðàçíè (7)<br />Òåõíèêà (2)<br />";
				$lang_string['error'] = "Ãðåøêà";
				$lang_string['current_categories'] = "Íàñòîÿùè Êàòåãîðèè";
				$lang_string['no_categories_found'] = "Íÿìà Îòêðèòè Êàòåãîðèè";
				$lang_string['category_list'] = "Ñïèñúê íà Êàòåãîðèèòå:";
				$lang_string['validate'] = "Ïîòâúðæäàâàíå";
				$lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Íàñòðîéêà íà öâåòîâàòà ãàìà";
				$lang_string['instructions'] = "Ìîæåø äà ïðîìåíèø öâåòîâåòå, èçïîëçâàíè íà ñòðàíèöàòà. Èçïîëçâàé ïàëèòðàòà çà èçáîð íà ïîäõîäÿùèÿ öâÿò, ïîñëå çàïèøè øåñòíàäåñåòîðíîòî îáîçíà÷åíèå íà öâåòà â ïîëåòî äîëó.";
				$lang_string['bg_color'] = "Ôîí íà ñòðàíèöàòà";
				$lang_string['main_bg_color'] = "Ôîí íà îñíîâíàòà îáëàñò";
				$lang_string['border_color'] = "Ðàìêà";
				$lang_string['inner_border_color'] = "Âúòðåøíà ðàìêà";
				$lang_string['header_bg_color'] = "Ôîí íà øàïêàòà";
				$lang_string['header_txt_color'] = "Òåêñò íà øàïêàòà";
				$lang_string['menu_bg_color'] = "Ôîí íà ìåíþòî";
				$lang_string['footer_bg_color'] = "Ôîí íà ïîäòåêñòà";
				$lang_string['txt_color'] = "Îñíîâåí òåêñò";
				$lang_string['headline_txt_color'] = "Çàãëàâèå";
				$lang_string['date_txt_color'] = "Òåêñò íà äàòàòà";
				$lang_string['footer_txt_color'] = "Òåêñò íà ïîäòåêñòà";
				$lang_string['link_reg_color'] = "Îáè÷àéíà âðúçêà";
				$lang_string['link_hi_color'] = "Àêòèâíà âðúçêà";
				$lang_string['link_down_color'] = "Êëèêíàòà âðúçêà";
				// More Colors
				$lang_string['entry_bg'] = "Ôîí íà íîâèíèòå";
				$lang_string['entry_title_bg'] = "Ôîí íà çàãëàâèå íà íîâèíèòå";
				$lang_string['entry_border'] = "Ðàìêà íà íîâèíèòå";
				$lang_string['entry_title_text'] = "Òåêñò íà çàãëàâèå íà íîâèíèòå";
				$lang_string['entry_text'] = "Òåêñò íà íîâèíèòå";
				$lang_string['menu_bg'] = "Ôîí íà ìåíþ";
				$lang_string['menu_title_bg'] = "Ôîí íà çàãëàâèå íà ìåíþ";
				$lang_string['menu_border'] = "Ðàìêà íà ìåíþ";
				$lang_string['menu_title_text'] = "Òåêñò íà çàãëàâèå íà ìåíþ";
				$lang_string['menu_text'] = "Òåêñò íà ìåíþ";
				$lang_string['menu_link_reg_color'] = "Îáè÷àéíà âðúçêà â ìåíþ";
				$lang_string['menu_link_hi_color'] = "Àêòèâíà âðúçêà â ìåíþ";
				$lang_string['menu_link_down_color'] = "Êëèêíàòà âðúçêà â ìåíþ";
				// Submit
				$lang_string['color_preset'] = "Öâåòîâè ñõåìè:"; // 0.3.7q
				$lang_string['scheme_name'] = "Âúâåäè èìå íà îáè÷àéíà öâåòîâà ñõåìà:"; // 0.3.7q
				$lang_string['scheme_file'] = "Âúâåäè èìå íà ôàéëà íà öâåòîâàòà ñõåìà: (áåç èíòåðâàëè è ôàéëîâè ðàçøèðåíèÿ)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Çàïàçè&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Âúâåäè èìå íà ïðåäïî÷åòåíàòà öâåòîâà ñõåìà."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'The currently selected theme does not allow for custom colors.';
				// Error Response
				$lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà! Ïî âåðìå íà îïèòà çà çàïàçâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Name:"; //New in 0.4.6.2
				$lang_string['email'] = "Email:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Homepage:"; //New in 0.4.6.2
				$lang_string['comment'] = "Comment:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6.2
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				$lang_string['commentposted'] = "New comment posted at: ";  // New for 0.4.6.2
				$lang_string['comment_capcha'] = "Anti-Spam: Âúâåäè êîäà: <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Êîìåíòàðè";
				$lang_string['header'] = "Äîáàâÿíå íà êîìåíòàð";
				$lang_string['instructions'] = "Ïîïúëíè ôîðìàòà çà äîáàâÿíå íà êîìåíòàð.";
				$lang_string['comment_name'] = "Èìå:";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Ïîìíè ìå:"; // 0.3.8
				$lang_string['comment_text'] = "Òåêñò íà êîìåíòàðà:";
				$lang_string['post_btn'] = "&nbsp;Äîáàâè&nbsp;";
				$lang_string['delete_btn'] = "èçòðèé";
				// Error Response
				$lang_string['error_add'] = "<h2>Óïñ!</h2>Êîìåíòàðúò íå å çàïàçåí. Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàë ïðîáëåì.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
				$lang_string['error_delete'] = "<h2>Óïñ!</h2>Êîìåíòàðúò íå å èçòðèò. Ïðè îïèòà çà èçòðèâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
				$lang_string['form_error'] = "Ïîïúëíè ïîëåòàòà çà èìå è òåêñò íà êîìåíòàðà.";
				break;
			case 'delete':
				$lang_string['title'] = "Èçòðèâàíå íà òåêñò";
				$lang_string['instructions'] = "Ïðåäè äà èçòðèåø òåêñòà îùå âåäíúæ ñå óâåðè, ÷å èñêàø äà èçòðèåø òî÷íî íåãî, çàùîòî ñëåä èçòðèâàíåòî ìó, íå å âúçìîæíî äà áúäå âúçñòàíîâåí...";
				$lang_string['ok_btn'] = "&nbsp;Èçòðèé&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Îòìåíè&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Óïì!</h2>Íåóñïåøíî èçòðèâàíå íà áåëåæêà.<br /><br />Îòãîâîðúò íà ñúðâúðà:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Èçòðèâàíå íà ñòàòè÷íà ñòðàíèöà";
				$lang_string['instructions'] = "Ïðåäè äà èçòðèåø òàçè ñòðàíèöà îùå âåäíúæ ñå óâåðè, ÷å èñêàø äà èçòðèåø òî÷íî íåÿ, çàùîòî íÿìà âúçìîíæíîñò çà îòìåíÿíå.";
				$lang_string['ok_btn'] = "&nbsp;ÎÊ&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Îòìåíè&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Óïñ!</h2>Ñòðàíèöàòà íå å èçòðèòà.<br /><br />Îòãîâîðúò íà ñúðâúðà:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Êàòàëîã íà èçîáðàæåíèÿ";
				$lang_string['instructions'] = "Êëèêíè ñúîòâåòíàòà âðúçêà çà ïðåãëåæäàíå íà èçîáðàæåíèÿòà.<br /><br />Çà ïîñòàâÿíå íà èçîáðàæåíèå â òåêñòà íà áåëåæêàòà:<br />1) Êëèêíè ñ äåñåí áóòîí íà ìèøêàòà âúðõó âðúçêàòà è èçáåðè òî÷êà îò ìåíþòî <em>Êîïèðàíå íà âðúçêà</em>.<br />2) Âúðíè ñå â ïðîçîðåöà çà äîáàâÿíå / ïðîìÿíà íà áåëåæêàòà.<br />3) Êëèêíè áóòîí <strong>'img'</strong> è äîáàâåòå â ïîÿâèëîòî ñå ìÿñòî âðúçêàòà îò áóôåðà çà îáìåí.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Meta-Data Èíôîðìàöèÿ";
				$lang_string['instructions'] = "Òàçè èíôîðìàöèÿ &quot;meta-data&quot;, ùå ïîìîãíå íà òúðñà÷êèòå òî÷íî äà èäåíòèôèöèðàò è íàìèðàò ñàéòà. Èíôîðìàöèÿòà ìîæå äà áúäå èçïîëçâàíà è çà in RSS feeds.";
				$lang_string['info_keywords'] = "Êëþ÷îâè äóìè: (Ñïèñúê íà êëþ÷îâèòå äóìè, ðàçäåëåíè ñúñ çàïåòàéêè.)";
				$lang_string['info_description'] = "Îïèñàíèå: (Ñâîáîäåí òåêñò ñ îïèñàíèå íà ñàéòà.)";
				$lang_string['info_copyright'] = "Ïðàâà: (Çàïàçåíè ïðàâà èëè ëèíê êúì äîêóìåíòèòå, ñúäúðæàùè òàçè èíôîðìàöèÿ.)";
				$lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Âúçíèêíàë å ïðîáëåì ïî âðåìå íà çàïàçâàíåòî é.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
				$lang_string['form_error'] = "Ïîïúëíè ïîëåòàòà Çàãëàâèå è Àâòîð.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Âúçíèêíàë å ïðîáëåì ïî âðåìå íà çàïàçâàíå íà èíôîðìàöèÿòà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Upgrade</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n comment files need to be upgraded:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Upgrade Comments"; // New 0.3.8
				$lang_string['title'] = "Âõîä";
				$lang_string['instructions'] = "Âúâåäè èìå íà ïîòðåáèòåëÿ è ïàðîëà";
				$lang_string['username'] = "Èìå íà ïîòðåáèòåë:";
				$lang_string['password'] = "Ïàðîëà:";
				$lang_string['submit_btn'] = "&nbsp;Âëåç&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Ïîçäðàâëåíèÿ!</h2>Ðåãèñòðàöèÿòà â ñèñòåìàòà å óñïåøíà. Ïðèÿòíî íîâèíàðñòâàíå! :)<br />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Óïñ!</h2>Íåóñïåøíà ðåãèñòðàöèÿ. Ïðîâåðè ïðàâèëíî ëè ñà âúâåäåíè èìåòî íà ïîòðåáèòåëÿ è ïàðîëàòà.<br />";
				$lang_string['form_error'] = "Ïîïúëíè ïîëåòàòà çà èìå íà ïîòðåáèòåë è ïàðîëà.";
				break;
			case 'logout':
				$lang_string['title'] = "Èçõîä";
				$lang_string['instructions'] = "<h2>Óïñ!</h2>Íåóñïåøíî èçëèçàíå: íå ñà îòñòðàíåíè cookie. Ñòðàííî, è êàê òàêà âñå îùå ñè ðåãèñòðèðàí?..<br />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Ñìåíè ïîòðåáèòåë &amp; Ïàðîëà";
				$lang_string['instructions'] = "Ïîïúëíè ôîðìàòà çà ñìÿíà íà Ïîòðåáèòåë è/èëè Ïàðîëà. Âúâåäè íîâèòå Ïîòðåáèòåë è Ïàðîëà.";
				$lang_string['username'] = "Ïîòðåáèòåë:";
				$lang_string['password'] = "Ïàðîëà:";
				$lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Óñïåõ!</h2>Ïîòðåáèòåëÿò è/èëè Ïàðîëàòà ñà àêòèâíè. Ïðèÿòíî íîâèíàðñòâàíå!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Âúçíèêíàë å ïðîáëåì ïðè çàïàçâàíåòî íà Ïîòðåáèòåë è/èëè Ïàðîëà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
				$lang_string['form_error'] = "Ïîïúëíè ïîëåòàòà Ïîòðåáèòåë è Ïàðîëà.";
				$lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
					and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
					exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
					to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Ïðèâåò";
				$lang_string['instructions'] = "
				Thank you for choosing Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Èçáåðè Åçèê:";
				$lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Ïðèâåò";
				$lang_string['instructions'] = "
				Thank you for choosing Simple PHP Blog!<br /><br />Simple PHP Blog is a light-weight blogging system. It requires PHP 4.1 or greater, and write-permissions on the server. All information is stored in flat-files, so no database is required.<br /><br />
				In order to begin, Simple PHP Blog needs to create three folders ('config', 'content', and 'images') in which to store your information.<br /><br />
				<b>Click below to begin setup:</b>";
				$lang_string['begin'] = "[ Begin Setup ]";
				break;
			case 'install02':
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
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
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
				$lang_string['title'] = "Íàñòðîéêè";
				$lang_string['instructions'] = "Îòòóê ìîæåø äà ïðîìåíèø èìåòî íà áëîãà/ñòðàíèöàòà è ëè÷íàòà èíôîðìàöèÿ.";
				$lang_string['blog_title'] = "Èìå íà ñòðàíèöàòà:";
				$lang_string['blog_author'] = "Àâòîð:";
				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
				$lang_string['blog_avatar'] = "Avatar URL: (Leave blank for none)."; // <-- New 0.4.6.3
				$lang_string['blog_footer'] = "Ïîäòåêñò:";
				$lang_string['blog_choose_language'] = "Èçáåðè åçèê:";
				$lang_string['blog_enable_comments'] = "Âúçìîæíè êîìåíòàðèòå"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Îòâàðÿé Êîìåíòàðè â Popup ïðîçîðåö"; // <-- New 0.3.6
				$lang_string['blog_enable_cache'] = "Âúçìîæåí Êåø íà íîâèíèòå (ìîæå äà çàáàâè ñêîðîñòòà ïðè íÿêîè ñúðâúðè)"; // New for 0.4.6
				$lang_string['blog_enable_voting'] = "Âúçìîæíî îöåíÿâàíåòî íà íîâèíè"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Èçïðàùàíå íà email ïðè ïóáëèêóâàíå íà êîìåíòàð"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Èçïðàùàíå íà ïèíãîâå &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "Âúâåäè ïúëåí URL (i.e. http://rpc.weblogs.com/RPC2) íà ïèíãâàùèÿ ñúðâúð &quot;ping&quot;.<br />(Ìîæåø äà âúâåäåø è ïîâå÷å àäðåñè, ðàçäåëåíè îò çàïåòàéêè.)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Âúçìîæíè ïðåïðàòêèòå â ñàéòà"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "Ìàêñèìóì ïîêàçâàíè íîâèíè:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Ïîçâîëåíè òàãîâå â êîìåíòàðèòå:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					Since PHP 4.0.4, PHP has had the ability to read and write gzip (.gz) compressed files, 
					thus saving disk-space. It can also transparently compress pages that are sent to browsers 
					which support gzip compression, thus saving bandwidth.<br />
					<br />
					Zlib support in PHP is not enabled by default. If the checkboxes are disabled, then your 
					installation of PHP does not support the Zlib extension."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Enable GZIP Compression for Database Files"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Enable GZIP Compression for HTTP Output"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Çàïàçè&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå ìîæå äà ñå çàïàçè. Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
				$lang_string['form_error'] = "Ïîñî÷è èìå è àâòîð.";
				$lang_string['label_entry_order'] = "Ðåä íà ïîêàçâàíå íà íîâèíèòå:";
				$lang_string['select_new_to_old'] = "Çàïî÷íè îò íàé-íîâèòå";
				$lang_string['select_old_to_new'] = "Çàïî÷íè îò íàé-ñòàðèòå";
				$lang_string['label_comment_order'] = "Ðåä íà ïîêàçâàíå íà êîìåíòàðèòå:";
			      $lang_string['cal_sunday'] = "Íåäåëÿ"; // New for 0.4.6
				$lang_string['cal_monday'] = "Ïîíåäåëíèê"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "Íà÷àëî íà ñåäìèöàòà â êàëåíäàðà"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Àêòèâèðàíå íà êàëåíäàð / Áëîê Àðõèâ"; // New for 0.4.6
				$lang_string['blog_enable_title'] = "Ïîêàæè çàãëàâèåòî íà ñàéòà â òåêñò (Íå ìàðêèðàé, àêî èìåòî ñå ñúäúðæà â ãðàôè÷íèÿ õåäúð)"; // New for 0.4.6
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
				$lang_string['title'] = "Ïàðàìåòðè";
				$lang_string['instructions'] = "Íàñòðîéêè íà ïàðàìåòðèòå çà ïîêàçâàíå íà äàòà è ÷àñ. Ïîëåòàòà <strong>Ïðåäâàðèòåëåí ïðåãëåä</strong> àâòîìàòè÷íî ñå îáíîâÿâàò ïðè ïðîìÿíà íà êîéòî è äà å ïàðàìåòúð.";
				// Long Date
				$lang_string['ldate_title'] = "Äúëúã ôîðìàò íà äàòà:";
				$lang_string['weekday'] = "Äåí îò ñåäìèöàòà";
				$lang_string['month'] = "Ìåñåö";
				$lang_string['day'] = "Äåí";
				$lang_string['year'] = "Ãîäèíà";
				$lang_string['none'] = "ïðàçíî";
				// Short Date
				$lang_string['sdate_title'] = "Êðàòúê ôîðìàò íà äàòà:";
				$lang_string['s_month'] = "Ìåñåö";
				$lang_string['s_mon'] = "ÌÌÌ";
				$lang_string['s_day'] = "Äåí";
				$lang_string['s_year'] = "Ãîäèíà";
				$lang_string['zero_day'] = "01 âìåñòî 1";
				$lang_string['show_century'] = "Ïîêàçâàé õèëÿäîëåòèå";
				// Time
				$lang_string['time_title'] = "Ôîðìàò íà ÷àñ:";
				$lang_string['12hour'] = "12-÷àñîâ ôîðìàò";
				$lang_string['24hour'] = "24-÷àñîâ ôîðìàò";
				$lang_string['before_noon'] = "Äî îáÿä";
				$lang_string['after_noon'] = "Ñëåäîáåä";
				// Date
				$lang_string['date_title'] = "Ôîðìàò íà ïîêàçâàíå:";
				$lang_string['long_date'] = "Äúëãà äàòà";
				$lang_string['short_date'] = "Êðàòêà äàòà";
				$lang_string['time'] = "×àñ";
				// Menu
				$lang_string['menu_title'] = "Ìåíþ Ôîðìàò íà ïîêàçâàíå íà äàòà:";
				$lang_string['long_date'] = "Äúëãà äàòà";
				$lang_string['short_date'] = "Êðàòêà äàòà";
				// Used in multiple places
				$lang_string['zero_day'] = "01 âìåñòî 1 çà äåí";
				$lang_string['zero_month'] = "01 âìåñòî 1 çà ìåñåö";
				$lang_string['zero_hour'] = "01 âìåñòî 1 çà ÷àñ";
				$lang_string['separator'] = "Ðàçäåëèòåë:";
				$lang_string['preview'] = "Ïðåäâàðèòåëåí ïðåãëåä:";
				$lang_string['server_offset'] = "Server Offset:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Çàïàçè&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Óïñ!</h2>Ïðè çàïàçâàíå íà ïàðàìåòðèòå å âúçíèêíàëà ãðåøêà. Ïàðàìåòðû íå ñà çàïàçåíè.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Òåìè";
				$lang_string['instructions'] = "Èçïîëçâàé ïàäàùîòî ìåíþ, çà äà ñè èçáåðåø ïðåäïî÷èòàíà òåìà.";
				// Themes
				$lang_string['choose_theme'] = "Òåìè:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Âúçíèêíàë å ïðîáëåì ïî âðåìå íà çàïàçâàíåòî é.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Ïðèêà÷âàíå íà èçîáðàæåíèå";
				$lang_string['instructions'] = "Êëèêíè áóòîí 'Ïðåãëåä' çà äà èçáåðåø èçîáðàæåíèå îò ëîêàëíèÿ äèñê.";
				$lang_string['select_file'] = "Èçáåðè ôàéë:";
				$lang_string['upload_btn'] = "Äîáàâè";
				// Error Response
				$lang_string['error'] = "<h2>Óïñ!</h2>Ïðè îïèòà çà ïðèêà÷âàíå íà èçîáðàæåíèåòî å âúçíèêíàëà ãðåøêà. Ñëóæåáíà èíôîðìàöèÿ:<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "Ðåçóëòàòè îò Òúðñåíåòî";
				$lang_string['instructions'] = "Ðåçóëòàòè îò òúðñåíåòî íà <b>%string</b>:";
				$lang_string['not_found'] = "Íÿìà íàìåðåíè ðåçóëòàòè";
				break;
			case 'contact': // <-- New 0.3.8
				$lang_string['title'] = "Çà êîíòàêò";
				$lang_string['instructions'] = "Ïîïúëíè ôîðìàòà:";
				$lang_string['form_error'] = "Ïîïúëíè ïîëåòàòà Çàãëàâèå è Êîìåíòàð.";
				$lang_string['name'] = "Èìå:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Çàãëàâèå:";
				$lang_string['comment'] = "Êîìåíòàð:";
				$lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
				$lang_string['success'] = "<h2>Óñïåõ!</h2>Ñúîáùåíèåòî áåøå èçïðàòåíî.<p />";
				$lang_string['failure'] = "<h2>Ãðåøêà!</h2>Ñúîáùåíèåòî íå áåøå èçïðàòåíî. Íàé-âåðîÿòíî êîäúò çà Anti Spam íå å áèë âúâåäåí ïðàâèëíî.<p />";
				$lang_string['contact_capcha'] = "Anti-Spam: Âúâåäè êîäà: <b>%s</b>"; // 0.4.2	
				$lang_string['contactsent'] = "Êîíòàêòíàòà ôîðìà å èçïðàòåíà îò: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Àäðåñ:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string['title'] = "Ñòàòèñòèêè";
				$lang_string['general'] = "Îáùî";
				$lang_string['entry_info'] = "<b>%s</b> áðîÿ íîâèíè, èçïîëçâàíè ñà <b>%s</b> äóìè, ïîáðàíè â <b>%s</b> bytes";
				$lang_string['comment_info'] = "<b>%s</b> áðîÿ êîìåíòàðà, èçïîëçâàíè ñà <b>%s</b> äóìè, ïîáðàíè â <b>%s</b> bytes";
				$lang_string['trackback_info'] = "<b>%s</b> áðîÿ ïðåïðàòêè, ïîáðàíè â <b>%s</b> bytes";
				$lang_string['static_info'] = "<b>%s</b> áðîÿ ñòàòè÷íè ñòðàíèöè, èçïîëçâàíè ñà <b>%s</b> äóìè, ïîáðàíè â <b>%s</b> bytes";
				$lang_string['most_viewed_entries'] = "10-òå íàé-ïðåãëåæäàíè íîâèíè";
				$lang_string['most_commented_entries'] = "10-òå íàé-êîìåíòèðàíè íîâèíè";
				$lang_string['most_trackbacked_entries'] = "10-òå íàé-ïðåïðàùàíè íîâèíè";
				$lang_string['vote_info'] = "<b>%s</b> ãëàñà, ïîáðàíè â <b>%s</b> bytes"; // 0.4.1
				$lang_string["most_voted_entries"] = "10-òå íàé-ìíîãî ãëàñóâàíè íîâèíè"; // 0.4.1
				$lang_string["most_rated_entries"] = "10-òå íàé-âèñîêî îöåíåíè íîâèíè"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Error 403.8 - Ñòðàíèöàòà/Äîñòúïúò äî òàçè ôóíêöèÿ å îòêàçàí';
				$lang_string["errorline1"] = 'Ñòðàíèöàòà èëè ôóíêöèÿòà, êîÿòî èñêàø äà ïîëçâàø, ñå íóæäàÿò îò cookies.';
				$lang_string["errorline2"] = 'Ïîïðàâè â áðàóçúðà ñè èëè â äðóã àêòèâèðàí çàùèòåí ñîôòóåð íàñòðîéêèòå çà cookie è îïèòàé îòíîâî.';
				$lang_string["clientid"] = 'Êëèåíòñêî ID: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Error 403.8 - Ñòðàíèöàòà/Äîñòúïúò äî òàçè ôóíêöèÿ å îòêàçàí';
				$lang_string["404"] = 'HTTP Error 404 - Ñòðàíèöàòà/Ôóíêöèÿòà íå ñúùåñòâóâà';
				$lang_string["error_404"] = 'Ñòðàíèöàòà èëè ôóíêöèÿòà, êîÿòî ñå îïèòâàø äà íàìåðèø, íå ñúùåñòâóâà.';
				$lang_string["error_javascript"] = 'Ñòðàíèöàòà èëè ôóíêöèÿòà, êîèòî îïèòâàø äà íàìåðèø èçèñêâà javascript çà äà ðàáîòÿò.';
				$lang_string["error_emailnotsent"] = 'Íåóñïåøíî èçïðàùàíå íà ñúîáùåíèåòî.';
				$lang_string["error_emailnotsentcapcha"] = 'Íåóñïåøíî èçïðàùàíå íà ñúîáùåíèåòî ïîðàäè íåòî÷íî èëè íåïîïúëíåíî ïîëå íà Anti Spam êîä.';
				$lang_string["clientid"] = 'Êëèåíòñêî ID: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Admin Emoticons";
				$lang_string['instructions'] = "
					Check the emoticons you want to use. Write in the box the Tags you want 
					to be replaced by the image. Multiple tags may be used, just separated them 
					by spaces.<br /><br />
		
					For instance:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />
					
					<i>(It is highly recommended that you make the Tags longer than 2 characters, 
					otherwise unexpected substitutions may occur.)</i>";
				$lang_string["upload_instructions"] = 'Upload New Emoticon:';
				$lang_string["upload_success"] = 'Success! Image uploaded successfully!';
				$lang_string["upload_error"] = 'Error! Image was not uploaded.';
				$lang_string["upload_invalid"] = 'Error! Invalid image file. Image must be a png, jpg, or gif.';
				$lang_string["save_success"] = 'Emoticon preferences saved successfully!';
				$lang_string["save_error"] = 'Error! Emoticon preferences not saved.';
				$lang_string["save_button"] = 'Save Emoticons';
				break;
			default:
				break;
		}

	}
		
?>
