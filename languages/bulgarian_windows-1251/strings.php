<?php
  // Bulgarian Language File
  // (c) 2004 Alexander Palmo, apalmo <at> bigevilbrain <dot> com 
  // Edits: 26.09.2007 Peicho Dimitrov info <at> alein <dot> org
  // Àêî èìàì ïðàâîïèñíè ãðåøêè, ïîïðàâåòå ñè ãè ;)
  // Ïðåâîäà å íà 98%

  // Simple PHP Version: 0.5.1
  // Language Version:   0.5.1

  function sb_language( $page ) {
    global $language, $html_charset, $php_charset, $lang_string;

    // Language: English
    $lang_string['language'] = 'bulgarian';
    $lang_string['locale'] = array('bg_BG', 'bulgaria', 'bul');
    $lang_string['rss_locale'] = 'bg-BG'; // New 0.4.8

    // ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'windows-1251';
		$lang_string['php_charset'] = 'windows-1251';
    setlocale( LC_TIME, $lang_string['locale'] );

    // Global Strings

    // Menu
    $lang_string['menu_links'] = "Âðúçêè";
    $lang_string['menu_home'] = "Íà÷àëî";
    $lang_string['menu_contact'] = "Îáðàòíà âðúçêà";
    $lang_string['menu_stats'] = "Ñòàòèñòèêà";
    $lang_string['menu_calendar'] = "Êàëåíäàð"; // New for 0.4.8
    $lang_string['menu_archive'] = "Àðõèâ";
    $lang_string['menu_viewarchives'] = "Âèæ Àðõèâ";
    $lang_string['menu_menu'] = "Ìåíþ";
    $lang_string['menu_add'] = "Äîáàâè Íîâèíà";
    $lang_string['menu_add_static'] = "Äîáàâè Ñòðàíèöà";
    $lang_string['menu_upload'] = "Äîáàâè Èçîáðàæåíèå";
    $lang_string['menu_setup'] = "Íàñòðîéêè";
    $lang_string['menu_categories'] = "Êàòåãîðèè";
    $lang_string['menu_info'] = "Ìåòà Òàãîâå";
    $lang_string['manage_users'] = "Ðåäàêöèÿ íà Ïîòðåáèòåëè";
    $lang_string['manage_php_config'] = "PHP Êîíôèãóðàöèÿ"; // New in 0.5.0.1
    $lang_string['menu_options'] = "Äàòà &amp; ×àñ";
    $lang_string['menu_themes'] = "Òåìè";
    $lang_string['menu_colors'] = "Öâåòîâå";
    $lang_string['menu_change_login'] = "Ñìÿíà íà Ëîãèí";
    $lang_string['menu_logout'] = "Èçõîä";
    $lang_string['menu_login'] = "Âõîä";
    $lang_string['menu_most_recent'] = "Ïîñëåäíè êîìåíòàðè";
    $lang_string['menu_most_recent_entries'] = "Ïîñëåäíè íîâèíè";
    $lang_string['menu_most_recent_trackback'] = "Ïîñëåäíè ïðåïðàòêè";
    $lang_string['menu_add_block'] = "Áëîêîâå";
    $lang_string['menu_emoticons'] = "Åìîòèêîíè"; // New for 0.4.7
    $lang_string['menu_avatar'] = "Àâàòàð"; // New for 0.4.7
    $lang_string['menu_moderation'] = "IP Ìîäåðàöèÿ"; // New for 0.4.9
    $lang_string['menu_commentmoderation'] = "×àêàùè êîìåíòàðè"; // New for 0.5.0
	$lang_string['menu_random_entry'] = "Ïðîèçâîëíè Çàïèñè"; // New for 0.5.2
	$lang_string['menu_plugins'] = "Ïëúãèíè"; // New for 0.5.2
    $lang_string['notice_moderator1'] = "Âèå èìàòå ";
    $lang_string['notice_moderator2'] = " êîìåíòàð(è) ÷àêàùè îäîáðåíèå.";
    $lang_string['notice_loggedin'] = "Â ìîìåíòà ñòå âëåçëè.";
    

    // Counter
    $lang_string['counter_today'] = "Äíåñ:"; // New for 0.4.8
    $lang_string['counter_yesterday'] = "Â÷åðà:"; // New for 0.4.8
    $lang_string['counter_totalsidebar'] = "Âñè÷êî:"; // New for 0.4.8
    $lang_string['counter_title'] = "Ïîñåùåíèÿ"; // New for 0.4.8

    // Other
    $lang_string['home'] = 'Êúì íà÷àëîòî';
    $lang_string['nav_next'] = 'Ñëåäâàùà ñòðàíèöà';
    $lang_string['nav_back'] = 'Ïðåäèøíà ñòðàíèöà';
    $lang_string['nav_first'] = 'Ïúðâà'; // New in 0.5.0.1
    $lang_string['nav_last'] = 'Ïîñëåäíà'; // New in 0.5.0.1
    $lang_string['search_title'] = 'Òúðñåíå';
    $lang_string['search_go'] = 'Äàâàé';
    $lang_string['page_generated_in'] = 'Ñòðàíèöàòà çàðåäè çà %s ñåêóíäè';
    $lang_string['counter_total'] = 'Ïîñåùåíèÿ: '; // New in 0.4.8
    $lang_string['read_more'] = 'Ïîâå÷å ïî òåìàòà...'; // New in 0.4.8
    $lang_String['randomentry'] = 'Ïðîèçâîëíè Çàïèñè'; // New in 0.5.0.1
    $lang_string['randomquote'] = 'Ïðîèçâîëíè Öèòàòè'; // New in 0.5.0.1

    // SB Functions
    $lang_string['sb_months'] = array( 'ßíóàðè', 'Ôåâðóàðó', 'Ìàðò', 'Àïðèë', 'Ìàé', 'Þíè', 'Þëè', 'Àâãóñò', 'Ñåïòåìâðè', 'Îêòîìâè', 'Íîåìâðè', 'Äåêåìâðè' );
    $lang_string['sb_default_title'] = 'Áåç Èìå';
    $lang_string['sb_default_author'] = 'Áåç Àâòîð';
    $lang_string['sb_default_footer'] = 'Áåç Ïîäòåêñò';

    $lang_string['sb_edit'] = 'ðåäàêòèðàé';
    $lang_string['sb_delete'] = 'èçòðèé';
    $lang_string['sb_permalink'] = 'ëèíê';
    $lang_string['sb_trackback'] = 'ïðåïðàòêè';
    $lang_string['sb_postedby'] = 'Ïóáëèêóâàíî îò'; // 0.5.0
    $lang_string['sb_admin'] = 'Àäìèíèñòðàòîð'; // 0.5.0
    $lang_string['sb_relatedlink'] = 'ñâúðçàí ëèíê'; // <-- New in 0.4.6

    $lang_string['sb_add_comment_btn'] = 'äîáàâè êîìåíòàð';
    $lang_string['sb_read_entry_btn'] = 'âèæ çàïèñà'; // 0.5.0
    $lang_string['sb_comment_btn_number_first'] = true;
    $lang_string['sb_comment_btn'] = 'êîìåíòàð';
    $lang_string['sb_comment_view'] = 'âèæ'; // 0.5.0
    $lang_string['sb_comments_plural_btn_number_first'] = true;
    $lang_string['sb_comments_plural_btn'] = 'êîìåíòàðà';
    $lang_string['sb_comments_plural_view'] = 'ïðåãëåäàíî'; // 0.5.0

    // ( 1 view )
    $lang_string['sb_view_counter_pre'] = '';
    $lang_string['sb_view_counter_post'] = ' ïðåãëåä';

    // ( 2 views )
    $lang_string['sb_view_counter_plural_pre'] = '';
    $lang_string['sb_view_counter_plural_post'] = ' ïðåãëåäà';

    $lang_string['sb_add_link_btn'] = 'äîáàâè âðúçêà';
    $lang_string['sb_rate_entry_btn'] = 'Êëèêíè çà Îöåíêà';

    // Entry Text Editor
    if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
      $lang_string['label_subject'] = "Îòíîñíî:";
      $lang_string['label_insert'] = "Ñïåöèàëíè Âúçìîæíîñòè:";
      $lang_string['btn_bold'] = " b ";
      $lang_string['btn_italic'] = " i ";
      $lang_string['btn_image'] = "img";
      $lang_string['btn_url'] = "url";
      $lang_string['btn_readmore'] = "Ïîâå÷å..."; // 0.4.8
      $lang_string['view_images'] = "Ïðåãëåäàé ïðèêà÷åíèòå èçîáðàæåíèÿ";
      $lang_string['label_entry'] = "Òåêñò:";
      $lang_string['btn_preview'] = "&nbsp;Ïðåãëåäàé&nbsp;";
      $lang_string['btn_post'] = "&nbsp;Èçïðàòè&nbsp;";
      $lang_string['chk_visiblemenu'] = "Âèäèìî (Ïîêàæè â ìåíþòî)";
      $lang_string['file_name'] = "Èìå íà ñòàòè÷íèÿ ôàéë (áåç èíòåðâàëè èëè ôàéëîâè ðàçøèðåíèÿ)";

      // Javascript Strings
      $lang_string['insert_styles'] = "Âúâåäè ñòèë íà òåêñòà:";
      $lang_string['insert_image'] = "Âúâåäè ïúëåí URL íà èçîáðàæåíèåòî:";
      $lang_string['insert_url1'] = "Âúâåäè òåêñòà, êîéòî ùå ñå èçïèñâà ïðè âðúçêàòà (íåçàäúëæèòåëíî):";
      $lang_string['insert_url2'] = "Âúâåäè ïúëåí URL íà âðúçêàòà:";
      $lang_string['insert_url3'] = "Oòâîðè URL â íîâ ïðîçîðåö (íåçàäúëæèòåëíî):";
      $lang_string['form_error'] = "Ìîëÿ, ïîïúëíè ïîëåòàòà çà òåìà è ñúäúðæàíèå.";

      // More Javascript Strings
      $lang_string['insert_image_optional'] = 'Íåçàäúëæèòåëíî:';
      $lang_string['insert_image_width'] = 'Øèðèíà (íåçàäúëæèòåëíî):';
      $lang_string['insert_image_height'] = 'Âèñî÷èíà (íåçàäúëæèòåëíî):';
      $lang_string['insert_image_popup'] = 'Âèæ â ïúëåí ðàçìåð â íîâ ïðîçîðåö ïðè êëèêâàíå (íåçàäúëæèòåëíî):';
      $lang_string['insert_image_float'] = 'Ñâîáîäíî (íåçàäúëæèòåëíî):';

      $lang_string['day'] = 'Äåí';
      $lang_string['month'] = 'Ìåñåö';
      $lang_string['year'] = 'Ãîäèí';
      $lang_string['hour'] = '×àñ';
      $lang_string['minute'] = 'Ìèíóòà';
      $lang_string['second'] = 'Ñåêóíäà';
    }

    switch ($page) {
      case 'add':
        // Add Entry
        $lang_string['title'] = "Äîáàâÿíå íà íîâèíà";
        $lang_string['instructions'] = "Ïîïúëíè ôîðìàòà, ñëåä çàâúðøâàíå êëèêíè <strong>'Ïðåãëåä'</strong> çà ïðåäâàðèòåëåí ïðåãëåä íà íîâèíàòà èëè <strong>'Èçïðàòè'</strong> çà ïóáëèêóâàíå íîâèíàòà íà ñàéòà.";
        $lang_string['title_ad'] = "Ïîòâúðäè Ïèíãâàíå íà Ïðåïðàòêà";
        $lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
        $lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)";
        $lang_string['label_tb_autodiscovery'] = "àâòîìàòè÷íî îòêðèâàíå";
        $lang_string['label_relatedlink'] = "Ñâúðçàí Ëèíê";
        $lang_string['label_categories'] = "Ñïèñúê íà êàòåãîðèèòå";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Ïðåãëåä / ðåäàêòèðàíå íà íîâèíàòà";
        $lang_string['instructions_preview'] = "Òàêà ùå èçãëåæäà íîâèíàòà. <strong>Îáúðíè âíèìàíèå,</strong>: ÷å àêî èçïîëçâàø ðàçäåëÿíå íà òåêñòà, ïðèêà÷èë ñè èçîîáðàæåíèå èëè ñè äàë ëèíê, òðÿáâà äà ñå óâåðèø, ÷å âñè÷êè òàãîâå ñà çàòâîðåíè.";
        $lang_string['title_update'] = "Îáíîâÿâàíå íà íîâèíàòà";
        $lang_string['instructions_update'] = "Ìîæåø äà ïðîìåíèø íîâèíàòà, èçïîëçâàéêè ñëåäíàòà ôîðìà. Êîãàòî çàâúðøèø, èçïîëçâàé áóòîíèòå <strong>'Ïðåãëåä'</strong> è '<strong>Èçïðàòè'</strong>.";
        $lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Îòìåíè&nbsp;";

        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Íîâèíàòà íå å çàïàçåíà! Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Íîâèíàòà å çàïèñàíà!</h2>Âúâåäåíàòà íîâèíà å óñïåøíî çàïèñàíà."; // 0.4.8.1
        break;

      case 'add_static':
        // Add Entry
        $lang_string['title'] = "Äîáàâè ñòàòè÷íà ñòðàíèöà";
        $lang_string['instructions'] = "Ïîïúëíè ñëåäíàòà ôîðìà çà ñúçäàâàíå íà ñòàòè÷íà ñòðàíèöà. Çà ðàçëèêà îò îáè÷àéíèòå, ñòàòè÷íèòå ñòðàíèöè ñå ïîêàçâàò â ìåíþòî îò äðóãàòà ñòðàíà. Íà òÿõ å óäîáíî äà ñå ïîìåñòâà èíôîðìàöèÿ, êîÿòî òðÿáâà äà áúäå âèíàãè äîñòúïíà: êîíòàêòè, îòãîâîðè íà ÷åñòî çàäàâàíè âúïðîñè, ãðàôèê çà ðàáîòà è ò.í. Èçïîëçâàé áóòîíà 'Ïðåãëåä' çà ïðåäâàðèòåëåí ïðåãëåä íà ñòðàíèöàòà è 'Èçïðàòè' çà çàïàçâàíå íà ñòðàíèöàòà.";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Ïðåãëåä / ðåäàêòèðàíå íà ñòàòè÷íà ñòðàíèöà";
        $lang_string['instructions_preview'] = "Òàêà èçãëåæäà ñòàòè÷íàòà ñòðàíèöà. Àêî èçïîëçâàø ñòèë èëè èçîáðàæåíèå, íå çàáðàâÿé äà çàòâîðèø âñè÷êè 'òàãîâå'.";
        $lang_string['title_update'] = "Îáíîâè ñòàòè÷íàòà ñòðàíèöà";
        $lang_string['instructions_update'] = "Ìîæåø äà ïðîìåíèø ñòðàíèöàòà, èçïîëçâàéêè ôîðìàòà ïî-äîëó. Êîãàòî çàâúðøèø ðåäàêòèðàíåòî, èçïîëçâàé áóòîíèòå 'Ïðåãëåä' è 'Èçïðàòè'.";
        $lang_string['form_error'] = "Ìîëÿ, ïîïúëíè ïîëåòàòà Îòíîñíî, Òåêñò, è Èìå íà ôàéë.";

        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Ñòðàíèöàòà íå å çàïàçåíà.<br /><br />Îòãîâîð íà ñúðâúðà: <br />";
        break;

      case 'add_block':
        // Add / Manage Blocks
        $lang_string['title'] = "Âúâåäè / Îôîðìè Áëîê";
        $lang_string['instructions'] = "Âúâåäè îáè÷àéíè Áëîêîâå";
        $lang_string['up'] = "íàãîðå";
        $lang_string['down'] = "íàäîëó";
        $lang_string['edit'] = "ðåäàêöèÿ";
        $lang_string['delete'] = "èçòðèé";
        $lang_string['block_name'] = "Èìå íà Áëîêà:";
        $lang_string['block_content'] = "Ñúäúðæàíèå íà Áëîêà:";
        $lang_string['instructions_edit'] = "Â ìîìåíòà ðåäàêòèðàòå Áëîê.";
        $lang_string['instructions_modify'] = "Êëèêíåòå ïî-äîëó çà ïðîìåíè â Áëîêà.";
        $lang_string['submit_btn_edit'] = "Ðåäàêòèðàé Áëîêà";
        $lang_string['submit_btn_add'] = "Äîáàâè Áëîê";
        $lang_string['form_error'] = "Ïîïúëåòå ïîëåòî Èìå.";
        break;

      case 'add_link':
        $lang_string['static_pages'] = "Ñòàòè÷íè Ñòðàíèöè:";

        // Add / Manage Links
        $lang_string['title'] = "Äîáàâÿíå / ïðîìÿíà íà âðúçêè";
        $lang_string['instructions'] = "Òóê ìîæåø äà äîáàâèø âðúçêè êúì äðóãè ñàéòîâå. Ïîïúëíè ôîðìàòà è êëèêíè áóòîíà <strong>'Èçïðàòè'</strong>. Êëèêâàé 'íàãîðå' èëè 'íàäîëó' çà ïðîìÿíà íà ïîðåäíîñòòà íà âðúçêèòå. Èçïîëçâàé 'ïðîìåíè' çà ðåäàêòèðàíå íà âðúçêàòà è 'èçòðèé' - çà èçòðèâàíå.";
        $lang_string['up'] = "íàãîðå";
        $lang_string['down'] = "íàäîëó";
        $lang_string['edit'] = "ðåäàêöèÿ";
        $lang_string['delete'] = "èçòðèé";
        $lang_string['link_name'] = "Èìå:";
        $lang_string['link_url'] = "URL:";
        $lang_string['instructions_edit'] = "Âèå Ðåäàêòèðàòå âðúçêàòà:";
        $lang_string['instructions_modify'] = "Ïðîìåíè íóæíàòà âðúçêà:";
        $lang_string['submit_btn_edit'] = "Èçïðàòè";
        $lang_string['submit_btn_add'] = "Äîáàâè Ëèíê";
        $lang_string['form_error'] = "Ïîïúëíè ïîëåòàòà çà Èìå è Àäðåñ íà âðúçêàòà.";
        break;

      case 'categories':

        // Add / Manage Links
        $lang_string['title'] = "Äîáàâÿíå / Îôîðìÿíå íà Êàòåãîðèè";
        $lang_string['instructions'] = "Èçïîëçâàéòå ñëåäíàòà ôîðìà çà äà äîáàâèòå è ðåäàêòèðàòå êàòåãîðèèòå. Âñÿêà êàòåãîðèÿ òðÿáâà äà áúäå â òîçè ôîðìàò 'èìå íà êàòåãîðèÿòà (id íîìåð)'. Ðàçäåëÿéòå ñ èíòåðâàëè çà äà ñúçäàäåòå éåðàðõèè.<br /><br /><b>Ïðèìåð:</b><br />Îáùà (1)<br />Íîâèíè (3)<br />&nbsp;&nbsp;Ñúîáùåíèÿ (6)<br />&nbsp;&nbsp;Ñúáèòèÿ (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Ðàçíè (7)<br />Òåõíèêà (2)<br />";
        $lang_string['error'] = "Ãðåøêà";
        $lang_string['current_categories'] = "Íàñòîÿùè Êàòåãîðèè";
        $lang_string['no_categories_found'] = "Íÿìà Îòêðèòè Êàòåãîðèè";
        $lang_string['category_list'] = "Ñïèñúê íà Êàòåãîðèèòå:";
        $lang_string['validate'] = "Ïîòâúðæäàâàíå";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
        break;

      case 'colors':
        // Change Colors
        $lang_string['title'] = "Ñìÿíà íà Öâåòîâåòå";
        $lang_string['instructions'] = "Ìîæåå äà ïðîìåíèòå öâåòîâåòå, èçïîëçâàíè íà ñòðàíèöàòà. Èçïîëçâàéòå ïàëèòðàòà çà èçáîð íà ïîäõîäÿùèÿ öâÿò, ïîñëå çàïèøåòå øåñòíàäåñåòè÷íîòî îáîçíà÷åíèå íà öâåòà â ñúîòâåòíîòî ïîëå..";
		// Ïî-äîáðå íå ãè ïðåâåæäàéòå.
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

        $lang_string['static_bg'] = "Static BG"; // 0.5.0
        $lang_string['static_title_bg'] = "Static Title BG"; // 0.5.0
        $lang_string['static_border'] = "Static Border"; // 0.5.0
        $lang_string['static_title_text'] = "Static Title Text"; // 0.5.0
        $lang_string['static_text'] = "Static Text"; // 0.5.0

        $lang_string['comment_bg'] = "Comment BG"; // 0.5.0
        $lang_string['comment_title_bg'] = "Comment Title BG"; // 0.5.0
        $lang_string['comment_border'] = "Comment Border"; // 0.5.0
        $lang_string['comment_title_text'] = "Comment Title Text"; // 0.5.0
        $lang_string['comment_text'] = "Comment Text"; // 0.5.0

        $lang_string['menu_bg'] = "Menu BG";
        $lang_string['menu_title_bg'] = "Menu Title BG";
        $lang_string['menu_border'] = "Menu Border";
        $lang_string['menu_title_text'] = "Menu Title Text";
        $lang_string['menu_text'] = "Menu Text";
        $lang_string['menu_link_reg_color'] = "Menu Link Default";
        $lang_string['menu_link_hi_color'] = "Menu Link Hover";
        $lang_string['menu_link_down_color'] = "Menu Link Active";

        // Submit
        $lang_string['color_preset'] = "Öâåòîâè ñõåìè:";
        $lang_string['scheme_name'] = "Âúâåäåòå èìå íà îáè÷àéíà öâåòîâà ñõåìà:";
        $lang_string['scheme_file'] = "Âúâåäåòå èìå íà ôàéëà íà öâåòîâàòà ñõåìà (áåç èíòåðâàëè è ôàéëîâè ðàçøèðåíèÿ)";
        $lang_string['save_btn'] = "&nbsp;Çàïàçè&nbsp;";
        $lang_string['form_error'] = "Âúâåäåòå èìå íà èçáðàíàòà öâåòîâà ñõåìà.";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
        $lang_string['theme_doesnt_allow_colors'] = 'Èçáðàíàòà òåìà íå ïîçâîëÿâà ïðîìÿíà íà öâåòîâåòå.';

        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà! Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Öâåòîâåòå ñà çàïèñàíè!</h2>Èíôîðìàöèÿò å óñïåøíî çàïàçåíà."; // New for 0.4.8.1
        break;

      case 'comments':
        // Comments
        $lang_string['name'] = "Èìå:"; //New in 0.4.6.2
        $lang_string['email'] = "Email:"; //New in 0.4.6.2
        $lang_string['homepage'] = "Ëè÷íà Ñòðàíèöà:"; //New in 0.4.6.2
        $lang_string['comment'] = "Êîìåíòàð:"; //New in 0.4.6.2
        $lang_string['IPAddress'] = "IP Àäðåñ:";  // New for 0.4.6.2
        $lang_string['useragent'] = "Áðàóçúð:";  // New for 0.4.6.2
        $lang_string['wrote'] = "<i>Â %s, %s íàïèñà:</i><br />\n<br />\n%s"; // New for 0.4.6.2

        $lang_string['comment_capcha'] = "Âúâåäåòå Anti-Spam êîäà: "; // 0.4.2
        $lang_string['title'] = "Êîìåíòàðè";
        $lang_string['header'] = "Äîáàâÿíå íà êîìåíòàð";
        $lang_string['instructions'] = "Ïîïúëíè ôîðìàòà ïî-äîëó.";
        $lang_string['comment_name'] = "Âàøåòî èìå/íèêíåéì:";
        $lang_string['comment_email'] = "Email:";
        $lang_string['comment_url'] = "Ñàéò:";
        $lang_string['commentposted'] = "Êîìåíòàðúò å èçïðàòåí íà: ";  // New for 0.4.6.2
        $lang_string['comment_remember'] = "Ïîìíè ìå:";
        $lang_string['comment_text'] = "Êîìåíòàð:";
        $lang_string['post_btn'] = "&nbsp;Èçïðàòè&nbsp;";
        $lang_string['delete_btn'] = "èçòðèé";
        $lang_string['ban_btn'] = "áàí íà IP-òî"; // New for 0.4.8
        $lang_string['expired_comment1'] = "Êîìåíòàðè ñà ðàçðåøåíè ñàìî çà íîâèíè íå ïî-ñòàðè îò "; // New for 0.4.8
        $lang_string['expired_comment2'] = " äíè."; // New for 0.4.8

        $lang_string['blacklisted'] = "Òîçè IP å áàííàò. Êîìåíòàðèòå îò íåãî ñà çàáðàíåíè."; // New for 0.4.8
        $lang_string['bannedword'] = "Âàøèÿò êîìåíòàð, url, èìå èëè e-mail ñúäúðæàò çàáðàíåíè îò ñîáñòâåíèêà íà ñàéòà äóìà(è). Âàøèÿò êîìåíòàð íÿìà äà áúäå ïóáëèêóâàí."; // New for 0.4.8
        $lang_string['nocomments'] = "Êîìåíòàðèòå íå ñà ðàçðåøåíè çà òàçè ñòàòèÿ."; // New for 0.4.9
        $lang_string['email_moderator'] = "Êîìåíòàðúò â ìîìåíòà ïîäëåæè íà îäîáðåíèå. ×àê ñëåä òîâà ùå ñå áúäå âèäèì â ñòðàíèöàòà."; // New for 0.5.0
        $lang_string['user_notice_mod'] = "Âñè÷êè êîìåíòàðè ïîäëåæàò íà îäîáðåíèå îò ñîáñòâåíèêà íà òîçè óåá-ñàéò. Âàøèÿò êîìåíòàð ùå áúäå âèäèì âåäíàãà ñëåä îäîáðåíèåòî ìó."; // new for 0.5.0

        $lang_string['return_to_comments'] = 'Íàçàä êúì Êîìåíòàðèòå';

        // Error Response
        $lang_string['error_add'] = "<h2>Óïñ!</h2>Êîìåíòàðúò íå å çàïàçåí. Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàë ïðîáëåì.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['error_delete'] = "<h2>Óïñ!</h2>Êîìåíòàðúò íå å èçòðèò. Ïðè îïèòà çà èçòðèâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['error_ban'] = "<h2>Óïñ!</h2>IP-òî ÍÅ å äîáàâåíî â áàí ëèñòàòà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success_add'] = "<h2>Êîìåíòàðúò å äîáàâåí!</h2>Âàøèÿò êîìåíòàð áåøå óñïåøíî âúâåäåí."; // New for 0.4.8.1
        $lang_string['success_delete'] = "<h2>Êîìåíòàðúò å Èçòðèò!</h2>Êîìåíòàðúò áåøå èçòðèò."; // New for 0.4.8.1
        $lang_string['success_ban1'] = "<h2>IP-òî å Çàáðàíåíî!";
        $lang_string['success_ban2'] = "</h2>Çàäà ïðåìàõíåòå òàçè ip çàáðàíà â áúäåùå, èçïîëçâàéòå îïðåäåëåíèÿ ëèíê â ìåíþòî."; // New for 0.4.8.1
        $lang_string['form_error'] = "Ìîëÿ, ïîïúëíåòå ïîëåòàòà çà çàãëàâèå è òåêñò íà êîìåíòàðà, êàêòî è Anti-Spam êîäà.";
        $lang_string['error_noip'] = "No IP Provided for Blacklist Request.";

        $lang_string[ 'error_comments_disabled' ] = '<h2>Ãðåøêà!</h2>Åé! Êîìåíòàðèòå ñà çàáðàíåíè â òàçè ñòðàíèöà. Òè ñïàì-áîò ëè ñè?'; // New 0.5.0
        $lang_string[ 'error_no_match' ] = "<h2>Ãðåøêà!</h2>Âàøèÿò IP àäðåñ íå ñúâïàäà ñ ïóáëèêóâàùèÿò IP àäðåñ. Òè ñïàì-áîò ëè ñè?"; // New 0.5.0
        $lang_string[ 'error_fields_missing' ] = '<h2>Ãðåøêà!</h2>Ëèïñâàò ñëåäíèòå ïîëåòà: '; // New 0.5.0
        $lang_string[ 'error_spambot' ] = '<h2>Ãðåøêà!</h2>Íå ñòå âúâåëè Àíòè-Ñïàì êîäà.'; // New 0.5.0
        $lang_string[ 'error_capcha' ] = '<h2>Ãðåøêà!</h2>Âúâåäåíèÿò Àíòè-Ñïàì êîä å íåïðàâèëåí.'; // New 0.5.0
        $lang_string[ 'error_bad_data' ] = '<h2>Ãðåøêà!</h2>Ïóáëèêóâàíàòà èíôîðìàöèÿ å ÍÅÂÀËÈÄÍÀ. Hacking attempt?'; // New 0.5.0
        $lang_string[ 'error_entry_missing' ] = '<h2>Ãðåøêà!</h2>Âèå ñå îïèòâàòå äà èçïðàòèòå êîìåíòàð êúì ñòàòèÿ êîÿòî íå ñúùåñòâóâà.'; // New 0.5.0
        $lang_string[ 'error_empty_text' ] = '<h2>Ãðåøêà!</h2>Íå ñòå âúâåëè êîìåíòàð èëè âàøåòî èìå.'; // New 0.5.0
        break;

      case 'delete':
        $lang_string['title'] = "Èçòðèâàíå íà òåêñò";
        $lang_string['instructions'] = "Ïðåäè äà èçòðèåòå òåêñòà îùå âåäíúæ ñå óâåðåòå, ÷å èñêàòå äà èçòðèåòå òî÷íî íåãî, çàùîòî ñëåä èçòðèâàíåòî ìó, íå å âúçìîæíî äà áúäå âúçñòàíîâåí...";
        $lang_string['ok_btn'] = "&nbsp;Èçòðèé&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Îòìåíè&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Óïì!</h2>Íåóñïåøíî èçòðèâàíå íà áåëåæêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Çàïèñúò å èçòðèò!</h2>Çàïèñúò áåøå óñïåøíî èçòðèò."; // New for 0.4.8.1
        break;

      case 'delete_static':
        $lang_string['title'] = "Èçòðèâàíå íà ñòàòè÷íà ñòðàíèöà";
        $lang_string['instructions'] = "Ïðåäè äà èçòðèåòå òàçè ñòðàíèöà îùå âåäíúæ ñå óâåðåòå, ÷å èñêàòå äà èçòðèåòå òî÷íî íåÿ, çàùîòî íÿìà âúçìîæíîñò çà âúçòàíîâÿâàíå.";
        $lang_string['ok_btn'] = "&nbsp;Èçòðèâàíå&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Îòìåíè&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Ñòðàíèöàòà íå å èçòðèòà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Ñòàòè÷íàòà ñòðàíèöà å èçòðèòà!</h2>Ñòòè÷íàòà ñòðàíèöà å óñïåøíî èçòðèòà."; // New for 0.4.8.1
        break;

      case 'image_list':
        $lang_string['title'] = "Êàòàëîã íà èçîáðàæåíèÿ";
        $lang_string['instructions'] = "Êëèêíåòå ñúîòâåòíàòà âðúçêà çà ïðåãëåæäàíå íà èçîáðàæåíèÿòà.<br /><br />Çà ïîñòàâÿíå íà èçîáðàæåíèå â òåêñòà:<br />1) Êëèêíåòå ñ äåñåí áóòîí íà ìèøêàòà âúðõó âðúçêàòà è èçáåðåòå òî÷êà îò ìåíþòî <em>Êîïèðàíå íà âðúçêà</em>.<br />2) Âúðíåòå ñå â ïðîçîðåöà çà äîáàâÿíå / ïðîìÿíà.<br />3) Êëèêíåòå áóòîí <strong>'img'</strong> è äîáàâåòå â ïîÿâèëîòî ñå ìÿñòî âðúçêàòà îò áóôåðà çà îáìåí.";
        break;

      case 'info':
        $lang_string['title'] = "Meta-Data Èíôîðìàöèÿ";
        $lang_string['instructions'] = "Òàçè èíôîðìàöèÿ &quot;meta-data&quot;, ùå ïîìîãíå íà òúðñà÷êèòå òî÷íî äà èäåíòèôèöèðàò è íàìèðàò ñàéòà. Èíôîðìàöèÿòà ìîæå äà áúäå èçïîëçâàíà è çà RSS feeds.";
        $lang_string['info_keywords'] = "Êëþ÷îâè äóìè (Ñïèñúê íà êëþ÷îâèòå äóìè, ðàçäåëåíè ñúñ çàïåòàéêè)";
        $lang_string['info_description'] = "Îïèñàíèå (Ñâîáîäåí òåêñò ñ îïèñàíèå íà ñàéòà)";
        $lang_string['info_copyright'] = "Ïðàâà (Çàïàçåíè ïðàâà èëè ëèíê êúì äîêóìåíòèòå, ñúäúðæàùè òàçè èíôîðìàöèÿ)";
        $lang_string['tracking_code'] = "Âúíøåí ïðîñëåäÿâàù êîä: (HTML êîä èçèñêâàí îò íÿêîè òúðñà÷êè äà áúäå âúâåäåí â íà÷àëíàòà ñòðàíèöà(â <head>) ïðèìåðíî çà Google áîò-Àíàëèçàòîðèòå)";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàë å ïðîáëåì.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Meta-Data Èíôîðìàöèÿ å çàïèñàíà!</h2>Èíôîðìàöèÿòà áåøå óñïåøíî çàïèñàíà."; // New for 0.4.8.1
        $lang_string['form_error'] = "Ìîëÿ, ïîïúëíåòå ïîëåòàòà Çàãëàâèå è Àâòîð.";
        break;

      case 'index':
        // Index
        break;

      case 'static':
        // Index
        break;

      case 'rating':
        $lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàë å ïðîáëåì.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Ãëàñóâàíåòî óñïåøíî!</h2>Âàïèÿò ðåéòèíã áåøå äîáàâåí óñïåøíî."; // New for 0.4.8.1
        break;

      case 'login':
        $lang_string['upgrade'] = "<h2>Úïãðåéä</h2>"; // New 0.3.8
        $lang_string['upgrade_count'] = "%n êîìåíòàðà èìàò íóæäà îò úïãðåéä:"; // New 0.3.8
        $lang_string['upgrade_url'] = "Úïãðåéä íà Êîìåíòàðèòå"; // New 0.3.8
        $lang_string['title'] = "Âõîä";
        $lang_string['instructions'] = "Ìîëÿ, âúâåäåòå âàøåòî ïîòðåáèòñêî èìå è ïàðîëà";
        $lang_string['username'] = "Username:";
        $lang_string['password'] = "Password";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Âëèçàíåòî áåøå óñïåøíî!</h2>Âå÷å ñòå âëåçëè â ñèñòåìàòà. Ïðèÿòíî ïðåêàðâàíå!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Óïñ!</h2>Íåóñïåøíî âëèçàíå. Ïðîâåðåòå ïðàâèëíî ëè ñà âúâåäåíè èìåòî íà ïîòðåáèòåëÿ è ïàðîëàòà.<br />";
        $lang_string['inactive_account'] = "<h2>Óïñ!</h2>Íåóñïåøíî âëèçàíå â ñèñòåìàòà. Âàøèÿò àêàóíò å äåàêòèâèðàí îò ñîáñòâåíèêà íà ñàéòà ïîðàäè íÿêàêâà ïðè÷èíà.<p />";
        $lang_string['form_error'] = "Ìîëÿ, ïîïúëíåòå ïîëåòàòà çà èìå íà ïîòðåáèòåë è ïàðîëà.";
        break;

      case 'logout':
        $lang_string['title'] = "Èçõîä";
        $lang_string['error'] = "<h2>Äî ñêîðî!</h2>Âèå èçëÿçîõòå îò ñèñòåìàòà.<p />";
        $lang_string['error_no_cookie'] = "<h2>Äî ñêîðî!</h2>Âèå èçëÿçîõòå îò ñèñòåìàòà. (Íå ñà íàìåðåíè cookies.)<p />"; // New 0.5.0
        $lang_string['success'] = "<h2>Äî ñêîðî!</h2>Âèå èçëÿçîõòå îò ñèñòåìàòà.<p />(Ïðåíàñî÷âàíå êúì íà÷àëîòî ñëåä 5 ñåêóíäè.)<p />";
        break;

      case 'forms':
        $lang_string['title'] = "";
        $lang_string['instructions'] = "";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        break;

      case 'set_login':
        $lang_string['title'] = "Ñìåíè Ïîòðåáèòåë &amp; Ïàðîëà";
        $lang_string['instructions'] = "Ïîïúëíåòå ôîðìàòà çà ñìÿíà íà Ïîòðåáèòåë è/èëè Ïàðîëà. Âúâåäåòå íîâèòå Ïîòðåáèòåë è Ïàðîëà.";
        $lang_string['username'] = "Ïîòðåáèòåë:";
        $lang_string['password'] = "Ïàðîëà:";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Óñïåøíà ïðîìÿíà!</h2>Ïîòðåáèòåëÿò è/èëè Ïàðîëàòà ñà àêòèâíè.<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàë ïðîáëåì.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['form_error'] = "Ìîëÿ, ïîïúëíåòå ïîëåòàòà Ïîòðåáèòåë è Ïàðîëà.";
        $lang_string['explanation'] = "Â ïîñëåäíèòå âåðñèè íà÷èíúò íà ñìåíÿâàíå íà ïàðîëàòà å ñìåíåí. Âå÷å íÿìà âúçìîæíîñò çà ñìÿíà íà ïàðîëà è/èëè ïîòðåáèòåë ïðåç ñòðàíèöàòà. Çà äà ïðîìåíèòå ïàðîëàòà è/èëè ïîòðåáèòåëÿ, èçòðèéòå /config/password.php è ñå óâåðåòå, ÷å install*.php ñúùåñòâóâà íà ñúðâúðà. Êîãàòî ñòå ãîòîâè, îïðåñíåòå òàçè ñòðàíèöà (èëè èçëåçòå îò ñèñòåìàòà). Ùå áúäåòå íàñî÷åíè äà ãåíåðèðàòå íîâà ïàðîëà	îò ñúùèÿ ñêðèïò, êîéòî ñå èçïîëçâà ïðè ñúçäàâàíåòî íà ñòðàíèöàòà.";  // New for 0.4.6
        break;

      case 'install00':
        $lang_string['title'] = "Äîáðå Äîøëè";
        $lang_string['instructions'] = "Áëàãîäàðíîñòè ÷å èçáðàõòå Simple PHP Blog!";
        $lang_string['blog_choose_language'] = "Èçáåðåòå Åçèê:";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
        break;

      case 'install01':
        $lang_string['title'] = "Äîáðå Äîøëè";
        $lang_string['instructions'] = "Áëàãîäàðíîñòè ÷å èçáðàõòå Simple PHP Blog!<br /><br />Simple PHP Blog å áëîã ñèñòåìà. Òÿ èçèñêâà äà èìàòå PHP 4.1 èëè ïî-âèñîêà âåðñèÿ, è ïðàâà çà ïèñàíå ïî ôàéëîâåòå íà âàøèÿò õîñòèíã ñúðâúð. Âñè÷êàòà èíôîðìàöèÿ ñå çàïèñâà â îáèêíîâåííè òåêñòîâè ôàéëîâå, òàêà ÷åso íå ñå èçèñêâà ïîääðúæêà íà áàçà äàííè.<br /><br />
        Íÿêîëêî ñòúïêè â íà÷àëîòî, Simple PHP Blog èçèñêâà äà ñúçäàäåòå 3 ïàïêè â îñíîâíàòà äèðåêòîðèÿ íà ñòðàíèöàòà ñè (<b>config</b>, <b>content</b>, è <b>images</b>) êúäåòî âñúùíîñò ùå ñå ñúäúðæà âàøàòà èíôîðìàöèÿ. Ñëåä òîâà, âèå ùå ñúçäàäåòå âàøèÿò ïîòðåáèòåë è ïàðîëà ñ êîèòî ùå ìîæåòå äà ïèøåòå ñòàòèè ïî áëîãà ñè.<br /><br />
        <b>Íàòèñíåòå òóê çà äà çàïî÷íåòå èíñòàëàöèÿòà:</b>";
        $lang_string['begin'] = "[ Çïî÷íè Èíñòàëàöèÿòà ]";
        break;

      case 'install02':
        $lang_string['title'] = "Èíñòàëàöèÿ";
        $lang_string['instructions'] = "Îïèò çà ñúçäàâàíå íà ïàïêèòå <b>config</b>, <b>content</b>, è <b>images</b>:";
        $lang_string['folder_exists'] = "Äîáðå! Ïàïêèòå ñúùåñòâóâàò. Íå ñà íåîáõîäèìè ïðîìåíè...";
        $lang_string['folder_failed'] = "Îïñ! Ïàïêèòå íå ìîãàò äà áúäàò ñúçäàäåíè...";
        $lang_string['folder_success'] = "Óñïåøíî! Ïàïêèòå ñà ñúçäàäåíè...";
        // Help
        $lang_string['help'] = "
        <h2>Îïñ!</h2>
        Íåâúçìîæíîñò çà ñúçäàâàíå íà âñè÷êèòå èëè íà íÿêîÿ îò ïàïêèòå!<br /><br />Òîâà íàé-÷åñòî ñå ñëó÷âà çàùîòî:<br />
        <ol>
        <li><b>Ïðàâàòà çà ïèñàíå</b> íå ñà ðàçðåøåíè<b> ×åòåíå/Ïèñàíå</b> äîñòúïà.</li>
        <li><b>UID</b>-òàòà (ïîòðåáèòåëñêèòå ID-òà) òðÿáâà äà ñà åäíàêâè çà âñè÷êè ôàéëîâå è ïàïêè.</li>
        </ol>
        Ñëåäâàéòå òåçè èíñòðóêöèè ïî-äîëó è êëèêíåòå íà <b>Îïèòàé Îòíîâî</b>:<br />
        <ol>
        <li>Ðú÷íî ñúçäàéòå ñëåäíèòå ïàïêè: <b>config</b>, <b>content</b>, è <b>images</b>.</li>
        <li>Ðàçðåøåòå <b>Ïðàâàòà çà Ïèñàíå</b> íà òåçè ïàïêè: Âúâ âàøàòà FTP ïðîãðàìà, Owner, User, è World òðÿáâà äà èìàò <b>Read</b> è <b>Write</b> äîñòúï. <i>(Òðÿáâà äà ñå ñâúðæåòå ñ âàøèÿò service provider çà äà ãè ñìåíèòå... àêî íÿìàòå ïðàâà çà òîâà.)</i></li>
        <li>Óáåäåòå ñå ÷å âñè÷êè UID-òà íà âñè÷êè ôàéëîâå è ïàïêè ñà åäíè è ñúùè. <i>(Òðÿáâà äà ñå ñâúðæåòå ñ âàøèÿò service provider çà äà ãè ñìåíèòå... àêî íÿìàòå ïðàâà çà òîâà.)</i></li>
        </ol>";
        $lang_string['try_again'] = "[ Îïèòàé Îòíîâî ]";
        // Success
        $lang_string['success'] = "<h2>Óñïåøíî!</h2>Ïàïêèòå ñà ñúçäàäåíè óñïåøíî!<p /><b>Íàòèñíåòå äîëó çà äà ïðîäúëæèòå:</b>";
        $lang_string['continue'] = "[ Ïðîäúëæè ]";
        break;

      case 'install03':
        $lang_string['supported'] = "<b>Âàøèÿò óåá-ñúðâúð ïîääúðæà ñëåäíèòå ñõåìè çà êðèïòèðàíå:</b>";
        $lang_string['standard'] = "Standard DES Encryption: ";
        $lang_string['extended'] = "Extended DES Encryption: ";
        $lang_string['MD5'] = "MD5 Encryption: ";
        $lang_string['blowfish'] = "Blowfish Encryption: ";
        $lang_string['enabled'] = "Àêòèâíà";
        $lang_string['disabled'] = "Íåàêòèâíà";
        $lang_string['using_standard'] = "<b>Èçïîëçâàíå íà Standard DES Encryption...</b>";
        $lang_string['using_extended'] = "<b>Èçïîëçâàíå íà Extended DES Encryption...</b>";
        $lang_string['using_MD5'] = "<b style=\"color: green;\">Èçïîëçâàíå íà MD5 Encryption...</b>";
        $lang_string['using_blowfish'] = "<b style=\"color: green;\">Èçïîëçâàíå íà Blowfish Encryption...</b>";
        $lang_string['using_unknown'] = "<b>Èçïîëçâàíå íà Íåïîçíàòà Ñõåìà...</b>";
        $lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
        $lang_string['title'] = "Ñúçäàâàíå íà Ïîòðåáèòåë &amp; Ïàðîëà";
        $lang_string['instructions'] = "Èçïîëçâàéòå ôîðìàòà ïî-äîëó çà äà ñúçäàäåòå Ïîòðåáèòåë è Ïàðîëà.";
        $lang_string['username'] = "Ïîòðåáèòåë:";
        $lang_string['password'] = "Ïàðîëà:";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Ïîçäðàâëåíèÿ!</h2>Âèå óñïåøíî èíñòàëèðàõòå âñè÷êî íåîáõîäèìî. Êëèêíåòå íà ëèíêà äîëó çà äà ðàçãëåäàòå è ïðîìåíèòå Íàñòðîéêèòå ïî âàøèÿò Áëîã. Ïðèÿòíî ïðåêàðâàíå!<p />";
        $lang_string['btn_setup'] = "[ Íàñòðîéêè ]";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Îïñ!</h2>Èíôîðìàöèÿòà ÍÅ å çàïèñàòà óñïåøíî. Ïðîáëåìà ñå ñúñòîè â çàïèñâàíåòî íà Âàøèÿò Ïîòðåáèòåë è/èëè Ïàðîëà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['form_error'] = "Ìîëÿ, ïîïúëíåòå ïîëåòàòà Ïîòðåáèòåë è Ïàðîëà.";
        break;

      case 'install04':
        $lang_string['title'] = "Ñúçäàâàíå íà ôàéëà ñ Ïàðîëàòà";
        $lang_string['instructions'] = "Òîâà å öåëèÿ òðèê:<br />
        <ol>
        <li>Îòâîðåòå òåêñòîâ ðåäàêòîð. <i>(Notepad, Wordpad, Word, BBEdit, Pico, VI, äð...)</i></li>
        <li>Ñúçäàéòå íîâ òåêñòîâ äîêóìåíò.</li>
        <li>Êîïèðàéòå è âúâåäåòå (Copy/paste) êîäà êîéòî å ïîêàçàí â áëîêà ïî-äîëó â òåêñòîâèÿ ôàéë.</li>
        <li>Çàïèøåòå ôàéëà êàòî <b>password.php</b> <i>(Áúäåòå ñèãóðíè ÷å çàïèñâàòå ôàéëà â <b>text</b> èëè <b>plain text</b> ôîðìàò è ÷å ðàçøèðåíèåòî íà ôàéëà å 100% .php)</i></li>
        <li>Îòâîðåòå âàøàòà FTP ïðîãðàìà.</li>
        <li>Êà÷åòå Âàøèÿò íîâ <b>password.php</b> ôàéë â ïàïêàòà <b>config</b> íà Âàøèÿò óåá-ñàéò.</li>
        <li>Èçòðèéòå <b>password.php</b> îò Âàøèÿò êîìïþòúð.</li>
        </ol>
        ";
        $lang_string['information'] = "<i>Çàáåëåæêà: Àêî èñêàòå äà ñìåíèòå ïàðîëàòà/ïîòðåáèòåëà ñè (àêî ñòå ñè çàáðàâèëè ïàðîëàòà), èçòðèéòå <b>password.php</b> ôàéëà îò <b>config</b> ïàïêàòà íà Âàøèÿò óåá-ñàéò. Âåäíàãà ñëåä òîâà îòâîðåòå ñòðàíèöàòà ñè, êîÿòî ùå âè ïîäêàíè äà ïðåìèíåòå ïðåç ñúùàòà ïðîöåäóðà êàêòî äî ñåãà...</i>";
        $lang_string['code'] = "Êîä çà <b>password.php</b> ôàéëà:";
        $lang_string['continue'] = "[ Ïðîäúëæè ]";
        break;

      case 'install05':
      case 'install06':
        $lang_string['title'] = "Âõîä";
        $lang_string['instructions'] = "Ìîëÿ, âúâåäåòå Âàøèòå Ïîòðåáèòåë/Ïàðîëà ïî-äîëó";
        $lang_string['username'] = "Ïîòðåáèòåë:";
        $lang_string['password'] = "Ïàðîëà";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Ïîçäðàâëåíèÿ!</h2>Âèå âëÿçîõòå â ñèñòåìàòà.<p />
        Êëèêíåòå íà <b>Íàñòðîéêè</b> çà äà ïåðñîíàëèçèðàòå íîâèÿ ñè Áëîã.<p />
        <i>Çàáåëåæêà: Ñåãà, ñëåä êàòî çàâúðøèõòå óñïåøíî èíñòàëàöèÿòà, ïðåïîðú÷âàìå Âè äà èçòðèåòå âñè÷êè <b>installXX.php</b> ôàéëîâå îò Âàøèÿò óåá-ñàéò. (òîåñò îò install00.php äî install06.php)</i><p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Îïñ!</h2>Âëèçàíåòî â ñèñòåìàòà Íå áåøå óñïåøíî. Ìîëÿ, ïðîâåðåòå âúâåäåíèòå îò Âàñ Ïîòðåáèòåë è Ïàðîëà, ñëåä òîâà îïèòàéòå îòíîâî.<p />";
        $lang_string['form_error'] = "Ìîëÿ, ïîïúëíåòå ïîëåòàòà Ïîòðåáèòåë è Ïàðîëà.";
        // Success
        $lang_string['btn_setup'] = "[ Íàñòðîéêè ]";
        $lang_string['btn_try_again'] = "[ Îïèòàé Îòíîâî ]";
        break;

      case 'setup':
        $lang_string['title'] = "Íàñòðîéêè";
        $lang_string['instructions'] = "Îòòóê ìîæåø äà ïðîìåíèø èìåòî íà ñàéòà è ëè÷íàòà èíôîðìàöèÿ.";
        $lang_string['blog_title'] = "Èìå íà ñàéòà:";
        $lang_string['blog_header'] = "Èçîáðàæåíèå íà Õåäúðà - URL: images/blogheader.jpg (Îñòàâåòå ïðàçíî çà õåäúð ïî ïîäðàçáèðàíå íà ñàìèÿ ñòèë).";
        $lang_string['blog_author'] = "Àâòîð:";
        $lang_string['blog_email'] = "Èìåéë: (Ðàçäåëåòå åìàéë àäðåñèòå ñ çàïåòàÿ - àêî å ïðàçíî îïöèÿòà Çà êîíòàêòè å ñïðÿíà)"; // Updated 0.4.7
        $lang_string['blog_avatar'] = "Àâàòð URL: images/avatar.jpg (Îñòàâåòå ïðàçíî àêî èñêàòå äà ñïðåòå òàçè ôóêíöèÿ)."; // <-- New 0.4.7
        $lang_string['blog_footer'] = "Ïîäòåêñò:";
        $lang_string['blog_choose_language'] = "Èçáåðåòå åçèê:";
        $lang_string['blog_enable_comments'] = "Ðàçðåøåòå Êîìåíòàðèòå";
        $lang_string['blog_comments_popup'] = "Îòâàðÿé Êîìåíòàðè â íîâ ïðîçîðåö";
		$lang_string['blog_enable_start_category'] = "Èçïîëçâàé ñïåöèôè÷íà êàòåãîðèÿ çà ïúðâàòà ñòðàíèöà îò çàïèñè: "; // Now for 0.5.1
        $lang_string['blog_search_top'] = "Ïîêàæè òúðñà÷êàòà (âìåñòî òàçè â áëîêà)"; // New for 0.5.0
        $lang_string['blog_enable_static_block'] = "Ïîêàæè îïðåäåëåí áëîê ïðè ïúðâîòî âëèçàíå â áëîã-à: "; // New for 0.5.0
        $lang_string['static_block_border'] = 'Ïîêàçâàé Áîðäåðà'; // New for 0.5.0
        $lang_string['static_block_noborder'] = 'Áåç Áîðäåð'; // New for 0.5.0
        $lang_string['blog_enable_voting'] = "Ðàçðåøè Îöåíêà";
        $lang_string['blog_enable_cache'] = "Ðàçðåøè Êåø íà íîâèíèòå (ìîæå äà óâåëè÷è ñêîðîñòòà ïðè íÿêîè ñúðâúðè)"; // New for 0.4.6
        $lang_string['blog_enable_calendar'] = "Ðàçðåøè áëîê Êàëåíäàð"; // New for 0.4.6
        $lang_string['blog_enable_archives'] = "Ðàçðåøè áëîê Àðõèâ"; // New for 0.4.8
        $lang_string['blog_enable_counter'] = "Ðàçðåøè áëîê Ïîñåùåíèÿ"; // New for 0.4.8
        $lang_string['blog_counter_hours'] = "Ñëåä êîëêî ÷àñà áðîÿ÷úò äà îò÷èòà ïîñåùåíèåòî çà íîâî (çà îïðåäåëåí ip àäðåñ):"; // New for 0.4.8
        $lang_string['blog_enable_login'] = "Ðàçðåøè ëèíê Âõîä (àêî íå, âõîäúò ñòàâà íåâèäèì çà ïîñåòèòåëè, à òè ìîæåø äà âëèçàø ïðåç http://yoursite.com/login.php)"; // New for 0.4.8
        $lang_string['blog_enable_title'] = "Ðàçðåøè èìåòî íà ñàéòà êàòî òåêñò (Íå ìàðêèðàé, àêî èìåòî ñå ñúäúðæà â ëîãîòî)"; // New for 0.4.6
        $lang_string['blog_enable_permalink'] = "Ðàçðåøè Ëèíê íà íîâèíàòà äà ñå âèæäà ïîä íåÿ"; // New for 0.4.6
        $lang_string['blog_enable_capcha'] = "Ðàçðåøè Anti-Spam ôèëòúð"; // New for 0.4.8
        $lang_string['blog_footer_counter'] = "Ðàçðåøè Ïîñåùåíèÿ (îáùî) â ïîäòåêñòà"; // New for 0.4.8
        $lang_string['blog_enable_capcha_image'] = "Anti-Spam èçîáðàæåíèå (GD library only) / Anti-Spam òåêñò"; // New for 0.4.8
        $lang_string['blog_enable_stats'] = "Ðàçðåøè ëèíê Ñòàòèñòèêè"; // New for 0.4.7
        $lang_string['blog_enable_lastcomments'] = "Ðàçðåøè áëîê Ïîñëåäíè êîìåíòàðè"; // New for 0.4.7
        $lang_string['blog_enable_lastentries'] = "Ðàçðåøè áëîê Ïîñëåäíè íîâèíè"; // New for 0.4.7
        $lang_string['blog_email_notification'] = "Èçïðàùàíå íà èìåéë ïðè ïóáëèêóâàíå íà êîìåíòàð";
        $lang_string['blog_send_pings'] = "Èçïðàùàíå íà Ïèíã &quot;pings&quot;";
        $lang_string['blog_ping_urls'] = "Âúâåäè ïúëåí URL (íàïðèìåð http://rpc.weblogs.com/RPC2) íà ïèíãâàùèÿ ñúðâúð &quot;ping&quot;.<br />(Ìîæåø äà âúâåäåø è ïîâå÷å àäðåñè, ðàçäåëåíè îò çàïåòàéêè.)";
        $lang_string['blog_trackback_about'] = "Ïðîñëåäÿâàíåòî íà ïðåïðàòêè å íà÷èí çà èçâåñòÿâàíå ìåæäó áëîãîâå. Ïîçâîëÿâà íà äðóãè áëîãîâå	äà ðàçáåðàò, ÷å â áëîãà òè èìà ëèíê êúì òÿõ, ÷ðåç èçïðàùàíåòî íà ïðîñëåäÿâàù ïèíã. Êàêòî è äà âèäèø êîé å äàë ëèíê êúì òâîÿ áëîã ÷ðåç ïîëó÷àâàíåòî íà ïðîñëåäÿâàù ïèíã.<br />Ìîæåø èëè äà âúâåäåø ðú÷íî ïèíãâàùèÿ URIs èëè äà îñòàâèø òîâà íà àâòîìàòè÷íî îòêðèâàíå.";
        $lang_string['blog_trackback_enabled'] = "Ðàçðåøè Ïðåïðàòêè";
        $lang_string['blog_trackback_auto_discovery'] = "Ðàçðåøè àâòîìàòè÷íî îòêðèâàíå ïðè âúâåæäàíå íà ñúîáùåíèÿ, ñúäúðæàùè URLs";
        $lang_string['blog_max_entries'] = "Ìàêñèìóì ïîêàçâàíè íîâèíè:";
        $lang_string['blog_comment_tags'] = "Ïîçâîëåíè òàãîâå â êîìåíòàðèòå:";
        $lang_string['blog_gzip_about'] = "
          Îò âåðñèÿ PHP 4.0.4, PHP äàâà âúçìîæíîñò çà ÷åòåíå è ïèñàíå íà gzip (.gz) êîìïðåñèðàíè ôàéëîâå,
					ñïåñòÿâàéêè ìÿñòî íà äèñêà. Ìîæå ñúùî äà êîìïðåñèðà ñòðàíèöèòå, êîèòî ñå èçïðàùàò êúì áðàóçúðè,
					ïîääúðæàùè gzip êîìïðàñèÿ, ñïåñòÿâàéêè òðàôèê.<br />
					<br />
					Zlib íå ñå ïîääúðæà îò PHP ïî ïîäðàçáèðàíå. Àêî ëèïñâàò ìåñòàòà çà ìàðêèðàíåòî íà êîìïðåñèÿòà,
					çíà÷è òâîÿòà èíñòàëàöèÿ íà PHP íå ïîääúðæà Zlib ðàçøèðåíèå.";
        $lang_string['blog_enable_gzip_txt'] = "Ðàçðåøè GZIP êîìïðåñèÿ çà Áàçà äàííè ôàéëîâåòå";
        $lang_string['blog_enable_gzip_output'] = "Ðàçðåøè GZIP êîìïðåñèÿ çà HTTP èçïðàùàíå";
        $lang_string['submit_btn'] = "&nbsp;Çàïàçè&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå ìîæå äà ñå çàïàçè. Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Íàñòðîéêèòå ñà Çàïàçåíè!</h2>Èíôîðìàöèÿòà áåøå óñïåøíî çàïèñàíà."; // New for 0.4.8.1
        $lang_string['form_error'] = "Ìîëÿ, ïîïúëíåòå ïîëåòàòà Èìå è Àâòîð.";
        $lang_string['label_entry_order'] = "Ðåä íà ïîêàçâàíå íà íîâèíèòå:";
        $lang_string['select_new_to_old'] = "Çàïî÷íè îò íàé-íîâèòå";
        $lang_string['select_old_to_new'] = "Çàïî÷íè îò íàé-ñòàðèòå";
        $lang_string['label_comment_order'] = "Ðåä íà ïîêàçâàíå íà êîìåíòàðèòå:";
        $lang_string['cal_sunday'] = "Íåäåëÿ";
        $lang_string['cal_monday'] = "Ïîíåäåëíèê";
        $lang_string['label_calendar_start'] = "Íà÷àëî íà ñåäìèöàòà â êàëåíäàðà";
		$lang_string['title_sidebar'] = "Äîïúëíèòåëíè"; // New in 0.4.7
		$lang_string['title_comments'] = "Êîìåíòàðè"; // New in 0.4.7
		$lang_string['title_trackback'] = "Ïðåïðàòêè"; // New in 0.4.7
		$lang_string['title_compression'] = "Êîìïðåñèÿ"; // New in 0.4.7
		$lang_string['title_entries'] = "Íîâèíè"; // New in 0.4.7
		$lang_string['title_general'] = "Ãëàâíè"; // New in 0.4.7
		$lang_string['title_language'] = "Åçèê"; // New in 0.4.7
        $lang_string['blog_comment_days_expiry'] = "Êîëêî äåíà ñëåä ïóáëèêóâàíå íà íîâèíà ìîãàò äà ñå ïèøàò êîìåíòàðè çà íåÿ? (0 îçíà÷àâà áåçñðî÷íî)"; // New in 0.4.8
        $lang_string['blog_comments_moderation'] = "Îäîáðåíèå íà êîìåíòàðèòå ïðåäè äà áúäàò ïóáëè÷íî äîñòúïíè (âèíàãè âèäèìè çà âëåçëè â ñèñòåìàòà ïîòðåáèòåëè)"; // New in 0.5.0
        $lang_string['comment_moderation'] = "Íàñòðîéêè íà Ìîäåðàöèÿò"; // New in 0.5.0
        break;
      case 'comment_moderation':
        $lang_string['title'] = "×àêàùè êîìåíòàðè";
        $lang_string['instructions'] = "Òîâà å ñïèñúê ñ âñè÷êè êîìåíòàðè êîèòî íå ñà âëåçëè â ñèñòåìàòà çàùîòî òå òðÿáâà äà áúäàò îäîáðåíè îò ñîáñâåíèêà íà óåá-ñàéòà.";
        $lang_string['header'] = "Ñïèñúê çà Ìîäåðèðàíå";
        $lang_string['enteredby'] = "Äîáàâåíî îò: ";
        $lang_string['entrydate'] = "Äîáàâåíî íà: ";
        $lang_string['blogentrytitle'] = "Çàãëàâèå: ";
        $lang_string['enteredcontent'] = "Ñúäúðæàíèå: ";
        $lang_string['totalunmodded'] = " êîìåíòàðà î÷àêâàùè ïðîâåðêà/îäîáðåíèå.";
        $lang_string['mod_approve'] = "[Îäîáðè] ";
        $lang_string['mod_delete'] = "[Èçòðèé]";
        break;
      case 'moderation':
        $lang_string['title'] = "Íàñòðîéêè íà Ìîäåðèðàíåòî";
        $lang_string['instructions'] = "Ìîæåòå äà êîíôèãóðèðàòå àâòîìàòè÷íî îòñÿâàíå.";
        $lang_string['submit_btn'] = "&nbsp;Çàïèøè Íàñòðîéêèòå&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Îïñ!</h2>Èíôîðìàöèÿòà Íå áåøå çàïèñàíà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Íàñòðîéêèòå ñà çàïèñàíè!</h2>Èíôîðìàöèÿòà å çàïàçåíà óñïåøíî."; // New for 0.4.8.1
        $lang_string['banned_address_list_title'] = "<h2>Çàáðàíåíè IP àäðåñè</h2>";
        $lang_string['banned_address_list'] = "Ïî-äîëó å ñïèñúêà ñ ip àäðåñèòå, êîèòî íÿìàò ïðàâî äà äîáàâÿò êîìåíòàðè. Âñÿêî ip òðÿáâà äà áúäå íà îòäåëåí ðåä è òðÿáâà äà áúäå âúâåäåíî êàòî ip àäðå, à íå êàòî hostname(áåç DNS èìåíà). Ñëåä êàòî âëåçåòå â ñèñòåìàòà, IP-òî ìîæå äà áúäå çàáðàíåíî íàïðàâî ïðè ðàçãëåæäàíåòî íà ñàìèÿ êîìåíòàð.";
        $lang_string['banned_word_list_title'] = "<h2>Çàáðàíåíè Äóìè</h2>";
        $lang_string['banned_word_list'] = "Ïî-äîëó å ñïèñúêà îò çàáðàíåíèòå äóìè, êîèòî íå ñà ðàçðåøåíè çà âúâåæäàíå â êîìåíòàðèòå. Âñÿêà äóìà òðÿáâà äà áúäå íà îòäåëåí ñàìîñòîÿòåëåí ðåä.";
        break;
      case 'trackbacks':
        // Trackbacks
        $lang_string['title'] = "Ïðåïðàòêè";
        $lang_string['header'] = "Àäðåñ çà ïðåïðàòêà:";
        $lang_string['delete_btn'] = "èçòðèé";
        // Error Response
        $lang_string['error_add'] = "Ãðåøêà ïðè çàïàçâàíåòî íà äàííèòå çà ïðåïðàòêàòà.";
        $lang_string['error_delete'] = "<h2>Îïñ!</h2>Ïðåïðàòêàòà Íå áåøå èçòðèòà. Âúçíèêíà ïðîáëåì ïðè èçòðèâàíåòî.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success_delete'] = "<h2>Ïðåïðàòêàòà å èçòðèòà!</h2>Ïðåïðàòêàòà áåøå óñïåøíî èçòðèòà."; // New for 0.4.8.1
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
        $lang_string['s_mon'] = "MMM";
        $lang_string['s_day'] = "Äåí";
        $lang_string['s_year'] = "Ãîäèíà";
        $lang_string['zero_day'] = "01 âìåñòî 1";
        $lang_string['show_century'] = "Ïîêàçâàé õèëÿäîëåòèå";
        // Time
        $lang_string['time_title'] = "Ôîðìàò íà ÷àñ:";
        $lang_string['12hour'] = "12-÷àñîâ ôîðìàò";
        $lang_string['24hour'] = "24-÷àñîâ ôîðìàò";
        $lang_string['before_noon'] = "Äî îáÿä";
        $lang_string['after_noon'] = "Ñëåä îáÿä";
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
        $lang_string['server_offset'] = "Ðàçëèêà îò ñúðâúðà:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Çàïàçè&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Ïàðàìåòðèòå íå ñà çàïàçåíè. Âúçíèêíàëà ãðåøêà ïðè îïèòà çà çàïàçâàíå.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Íàñòðîéêèòå ñà çàïèñàíè!</h2> Èíôîðìàöèÿòà áåøå çàïàçåíà óñïåøíî."; // New for 0.4.8.1
        break;

      case 'themes':
        $lang_string['title'] = "Òåìè";
        $lang_string['instructions'] = "Èçïîëçâàé ïàäàùîòî ìåíþ, çà äà ñè èçáåðåø ïðåäïî÷èòàíà òåìà.";
        // Themes
        $lang_string['choose_theme'] = "Òåìè:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Âúçíèêíàë å ïðîáëåì ïðè îïèòà çà çàïàçâàíå.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Íàñòðîéêèòå ñà çàïèñàíè!</h2> Èíôîðìàöèÿòà áåøå çàïàçåíà óñïåøíî."; // New for 0.4.8.1
        break;

      case 'upload_img':
        $lang_string['title'] = "Ïðèêà÷âàíå íà èçîáðàæåíèå";
        $lang_string['instructions'] = "Êëèêíè áóòîí 'Ïðåãëåä' çà äà èçáåðåø èçîáðàæåíèå îò ëîêàëíèÿ äèñê.";
        $lang_string['select_file'] = "Èçáåðè ôàéë:";
        $lang_string['upload_btn'] = "Äîáàâè";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Ïðè îïèòà çà ïðèêà÷âàíå íà èçîáðàæåíèåòî å âúçíèêíàëà ãðåøêà. Ñëóæåáíà èíôîðìàöèÿ:<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Èçîáðàæåíèåòî å êà÷åíî!</h2> Èíôîðìàöèÿòà áåøå çàïàçåíà óñïåøíî."; // New for 0.4.8.1
        break;

      case 'search':
        $lang_string['title'] = "Ðåçóëòàòè îò Òúðñåíåòî";
        $lang_string['instructions'] = "Ðåçóëòàòè îò òúðñåíåòî íà <b>%string</b>:";
        $lang_string['not_found'] = "Íÿìà íàìåðåíè ðåçóëòàòè";
        break;

      case 'contact':
        $lang_string['contact_capcha'] = "Âúâåäåòå Anti-Spam êîäà "; // 0.4.2
        $lang_string['title'] = "Çà êîíòàêòè";
        $lang_string['instructions'] = "Ìîëÿ, ïîïúëåòå ôîðìàòà:";
        $lang_string['form_error'] = "Ìîëÿ, Ïîïúëíåòå ïîëåòàòà Îòíîñíî è Òåêñò.";
        $lang_string['name'] = "Èìå:";
        $lang_string['email'] = "Åìàéë:";
        $lang_string['subject'] = "Îòíîñíî:";
        $lang_string['comment'] = "Òåêñò:";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàòè&nbsp;";
        $lang_string['success'] = "<h2>Áëàãîäàðÿ!</h2>Ñúîáùåíèåòî áåøå èçïðàòåíî óñïåøíî.<p />";
        $lang_string['failure'] = "<h2>Ãðåøêà!</h2>Ñúîáùåíèåòî íå áåøå èçïðàòåíî. Íàé-âåðîÿòíî êîäúò çà Anti Spam íå å áèë âúâåäåí ïðàâèëíî.<p />";
        $lang_string['contactsent'] = "Êîíòàêòíàòà ôîðìà å èçïðàòåíà îò: ";  // New for 0.4.6
        $lang_string['IPAddress'] = "IP Àäðåñ:";  // New for 0.4.6
        $lang_string['useragent'] = "User Agent:";  // New for 0.4.6
        $lang_string['wrote'] = "<i>Â %s, %s íàïèñà:</i><br />\n<br />\n%s"; // New for 0.4.6.2
        break;

      case 'stats':
        $lang_string["title"] = "Ñòàòèñòèêè";
        $lang_string["general"] = "Îáùî";
        $lang_string["entry_info"] = "<b>%s</b> ñòàòèè, èçïîëçâàíè ñà <b>%s</b> äóìè èëè <b>%s</b> áàéòà";
        $lang_string["comment_info"] = "<b>%s</b> êîìåíòàðà, èçïîëçâàíè ñà <b>%s</b> äóìè èëè <b>%s</b> áàéòà";
        $lang_string["trackback_info"] = "<b>%s</b> ïðåïðàòêè èëè <b>%s</b> áàéòà";
        $lang_string["static_info"] = "<b>%s</b> ñòàòè÷íè ñòðàíèöè, èçïîëçâàíè ñà <b>%s</b> äóìè èëè <b>%s</b> áàéòà";
        $lang_string["most_viewed_entries"] = "10-òå íàé-ïðåãëåæäàíè ñòàòèè";
        $lang_string["most_commented_entries"] = "10-òå íàé-êîìåíòèðàíè ñòàòèè";
        $lang_string["most_trackbacked_entries"] = "10-òå íàé-ïðåïðàùàíè ñòàòèè";
        $lang_string['vote_info'] = "<b>%s</b> ãëàñà èëè <b>%s</b> áàéòà"; // 0.4.1
        $lang_string["most_voted_entries"] = "10-òå íàé-÷åñòî îöåíÿâàíè ñòàòèè"; // 0.4.1
        $lang_string["most_rated_entries"] = "10-òå íàé-âèñîêî îöåíåíè ñòàòèè"; // 0.4.1
        break;

      case 'errorpage-nocookies':  // New for 0.4.6
        $lang_string["title"] = 'HTTP Error 403.8 - Ñòðàíèöàòà / Ôóíêöèÿòà å íåäîñòúïíà';
        $lang_string["errorline1"] = 'Ñòðàíèöàòà èëè ôóíêöèÿòà, êîÿòî èñêàø äà ïîëçâàø, ñå íóæäàÿò îò cookies.';
        $lang_string["errorline2"] = 'Ïîïðàâè â áðàóçúðà ñè èëè â äðóã àêòèâèðàí çàùèòåí ñîôòóåð íàñòðîéêèòå çà cookies è îïèòàé îòíîâî.';
        $lang_string["clientid"] = 'Êëèåíòñêî ID: ';
        break;

      case 'errorpage':  // New for 0.4.6
        $lang_string["403.8"] = 'HTTP Error 403.8 - Ñòðàíèöàòà / Ôóíêöèÿòà å íåäîñòúïíà.';
        $lang_string["404"] = 'HTTP Error 404 - Ñòðàíèöàòà / Ôóíêöèÿòà íå ñúùåñòâóâà.';
        $lang_string["error_404"] = 'Ñòðàíèöàòà èëè ôóíêöèÿòà, êîÿòî ñå îïèòâàø äà íàìåðèø, íå ñúùåñòâóâà.';
        $lang_string["error_javascript"] = 'Ñòðàíèöàòà èëè ôóíêöèÿòà, êîÿòî ñå îïèòâàø äà íàìåðèø, èçèñêâà javascript çà äà ðàáîòè.';
        $lang_string["error_emailnotsent"] = 'Íåóñïåøíî èçïðàùàíå íà ñúîáùåíèåòî.';
        $lang_string["error_emailnotsentcapcha"] = 'Íåóñïåøíî èçïðàùàíå íà ñúîáùåíèåòî, ïîðàäè ïðàçíî èëè íåòî÷íî ïîïúëíåíî ïîëå íà Anti Spam êîä.';
        $lang_string["clientid"] = 'Êëèåíòñêî ID: ';
        break;

      case 'emoticons':  // New for 0.4.7
        $lang_string['title'] = "Àäìèí Åìîòèêîíè";
        $lang_string['instructions'] = "
          Îòáåëåæè åìîòèêîíèòå, êîèòî èñêàø äà èçïîëçâàø. Ñðåùó òÿõ íàïèøè òàãîâåòå, êîèòî èñêàø
					äà çàìåñòâàò êàðòèíêèòå. Ìîãàò äà ñå èçïîçâàò ìíîæåñòâî òàãîâå, íî òðÿáâà äà ñå
					ðàçäåëÿò ñ ïðàçíî ìÿñòî.<br /><br />
					Íàïðèìåð:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />
					<i>(Â òîçè ñëó÷àé å çàäúëæèòåëíî äà èçïîëçâàø òàãîâå ñ ïîâå÷å îò 2 çíàêà,
					èíà÷å ìîæå äà ñå ïîëó÷è íåî÷àêâàíî çàìåñòâàíå.)</i>";
        $lang_string["upload_instructions"] = 'Êà÷è íîâè åìîòèêîíè:';
        $lang_string["upload_success"] = 'Óñïåøíî! Èçîáðàæåíèÿòà ñà êà÷åíè óñïåøíî!';
        $lang_string["upload_error"] = 'Ãðåøêà! Èçîáðàæåíèÿòà íå ñà êà÷åíè.';
        $lang_string["upload_invalid"] = 'Ãðåøêà! Íåâàëèäåí ôàéë íà èçîáðàæåíèå. Èçîáðàæåíèÿòà òðÿáâà äà ñà ñ ðàçøèðåíèå png, jpg, èëè gif.';
        $lang_string["save_success"] = 'Ïðåäïî÷èòàíèòå åìîòèêîíè ñà óñïåøíî çàïàçåíè!';
        $lang_string["save_error"] = 'Ãðåøêà! Ïðåäïî÷èòàíèòå åìîòèêîíè íå ñà çàïàçåíè.';
        $lang_string["save_button"] = 'Èçïðàòè';
        break;

      case 'archives': // New for 0.4.8
        $lang_string['title'] = "Àðõèâè";
        $lang_string['showall'] = "Ïîêàæè Âñè÷êè";
        break;

      case 'manage_users':
        $lang_string['title'] = "Óïðàâëåíèå è Ðåäàêöèÿ íà Ïîòðåáèòåëè";
        $lang_string['instructions'] = "Äîáàâÿíå, Ðåäàêöèÿ èëè Èçòðèâàíå íà ïîðåáèòåëè êîèòî íå ñà àäìèíèñòðàòîðè íî èìàò ïðàâà çà ïèñàíå ïî ñòðàíèöàòà è ìîäåðèðàíå íà êîìåíòàðèòå.";
        $lang_string['fulladminerror'] = "Âèå òðÿáâà äà ñòå àäìèíèñòðàòîð çà äà íàïðâèòå òîâà!";
        $lang_string['header_user'] = "Ïîòðåáèòåë: ";
        $lang_string['header_property'] = "Ñâîéñòâî";
        $lang_string['header_value'] = "Ñòîéíîñò";
        $lang_string['prop_username'] = "Ïîòðåáèòåë:";
        $lang_string['prop_fullname'] = "Èìå:";
        $lang_string['prop_password'] = "Ïàðîëà:";
        $lang_string['prop_email'] = "Åìàéë:";
        $lang_string['prop_avatar'] = "Àâàòàð URL:";
        $lang_string['prop_state'] = "Àêòèâåí?";
        $lang_string['prop_sec_Moderate'] = "Ìîäåðàöèÿ íà Êîìåíòàðèòå?";
        $lang_string['prop_sec_Delete'] = "Òðèåíå íà Çàïèñè?";
        $lang_string['prop_sec_Edit'] = "Ðåäàêöèÿ íà Âñè÷êî?";
        $lang_string['btn_SaveChanges'] = "Çàïèøè Ïðîìåíèòå";
        $lang_string['btn_CreateUser'] = "Ñúçäàâàíå íà Ïîòðåáèòåë";
        $lang_string['btn_Cancel'] = "Îòìåíè";  
        $lang_string['grid_header'] = "Ñïèñúê ñ Ïîòðåáèòåëè";
        $lang_string['grid_login'] = 'Áõîä';
        $lang_string['grid_email'] = 'Åìàéë';
        $lang_string['grid_avatar'] = 'Àâàòàð';
        $lang_string['grid_state'] = 'Àêòèâåí?';
        $lang_string['btn_modify'] = 'Ðåäàêöèÿ';
        $lang_string['btn_delete'] = 'Èçòðèé';
        $lang_string['create_user'] = 'Ñúçäàâàíå íà Íîâ Ïîòðåáèòåë';
        break;

      default:
        break;
    }
  }
?>
