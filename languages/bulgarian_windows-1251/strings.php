<?php
  // Bulgarian Language File
  // (c) 2005 Lucy Pearl, lusinda <at> gbg <dot> bg, Ìîëÿ, àêî çàáåëåæèòå ãðåøêè èëè íåòî÷íîñòè, ñâúðæåòå ñå ñ ìåí íà èìåéëà. Ïîçäðàâè! :)
  // Edits: 2007 lusinda, Lucy Pearl

  // Simple PHP Version: 0.5.0
  // Language Version:   0.5.0

  function sb_language( $page ) {
    global $language, $html_charset, $php_charset, $lang_string;

    // Language: Bulgarian
    $lang_string['language'] = 'bulgarian';
    $lang_string['locale'] = array('bg_BG', 'bulgaria', 'bul', 'bgr');
    $lang_string['rss_locale'] = 'bg-BG'; // New 0.4.8

    // Charset: windows-1251
    $lang_string['html_charset'] = 'windows-1251';
    $lang_string['php_charset'] = 'windows-1251';
    setlocale( LC_TIME, $lang_string['locale'] );

    // Global Strings

    // Menu
    $lang_string['menu_links'] = "Ñúäúðæàíèå";
    $lang_string['menu_home'] = "Íà÷àëî";
    $lang_string['menu_contact'] = "Çà êîíòàêòè";
    $lang_string['menu_stats'] = "Ñòàòèñòèêè";
    $lang_string['menu_calendar'] = "Êàëåíäàð"; // New for 0.4.8
    $lang_string['menu_archive'] = "Àðõèâ";
    $lang_string['menu_viewarchives'] = "Âèæòå àðõèâ";
    $lang_string['menu_menu'] = "Ìåíþ";
    $lang_string['menu_add'] = "Äîáàâåòå íîâèíà";
    $lang_string['menu_add_static'] = "Äîáàâåòå ñòðàíèöà";
    $lang_string['menu_upload'] = "Äîáàâåòå èçîáðàæåíèå";
    $lang_string['menu_setup'] = "Íàñòðîéêè";
    $lang_string['menu_categories'] = "Êàòåãîðèè";
    $lang_string['menu_info'] = "Èíôîðìàöèÿ";
    $lang_string['manage_users'] = "Óïðàâëåíèå íà ïîòðåáèòåëèòå";
    $lang_string['menu_options'] = "Äàòà &amp; ×àñ";
    $lang_string['menu_themes'] = "Òåìè";
    $lang_string['menu_colors'] = "Öâåòîâå";
    $lang_string['menu_change_login'] = "Ñìåíåòå ïîòðåáèòåëÿ";
    $lang_string['menu_logout'] = "Èçõîä";
    $lang_string['menu_login'] = "Âõîä";
    $lang_string['menu_most_recent'] = "Ïîñëåäíè êîìåíòàðè";
    $lang_string['menu_most_recent_entries'] = "Ïîñëåäíè íîâèíè";
    $lang_string['menu_most_recent_trackback'] = "Ïîñëåäíè ïðåïðàòêè";
    $lang_string['menu_add_block'] = "Áëîêîâå";
    $lang_string['menu_emoticons'] = "Åìîòèêîíè"; // New for 0.4.7
    $lang_string['menu_avatar'] = "Àâàòàð"; // New for 0.4.7
    $lang_string['menu_moderation'] = "Ìîäåðèðàíå äóìè è IP"; // New for 0.4.9
    $lang_string['menu_commentmoderation'] = "Íåïðåãëåäàíè êîìåíòàðè"; // New for 0.5.0
    $lang_string['notice_moderator1'] = "Èìàòå ";
    $lang_string['notice_moderator2'] = " êîìåíòàð(à), ÷àêàùè îäîáðåíèå.";
    $lang_string['notice_loggedin'] = "Âå÷å ñòå âëåçíàëè.";

    // Counter
    $lang_string['counter_today'] = "Äíåñ:";  // New for 0.4.8
    $lang_string['counter_yesterday'] = "Â÷åðà:"; // New for 0.4.8
    $lang_string['counter_totalsidebar'] = "Âñè÷êî:"; // New for 0.4.8
    $lang_string['counter_title'] = "Ïîñåùåíèÿ"; // New for 0.4.8

    // Other
    $lang_string['home'] = 'Âðúùàíå êúì íà÷àëî';
    $lang_string['nav_next'] = 'Ñëåäâàùà';
    $lang_string['nav_back'] = 'Ïðåäèøíà';
    $lang_string['search_title'] = 'Òúðñåíå:';
    $lang_string['search_go'] = 'Òúðñè';
    $lang_string['page_generated_in'] = 'Ñòðàíèöàòà áå ãåíåðèðàíà çà %s ñåêóíäè';
    $lang_string['counter_total'] = 'Ïîñåùåíèÿ: '; // New in 0.4.8
    $lang_string['read_more'] = 'Îùå...'; // New in 0.4.8

    // SB Functions
    $lang_string['sb_months'] = array( 'ßíóàðè', 'Ôåâðóàðè', 'Ìàðò', 'Àïðèë', 'Ìàé', 'Þíè', 'Þëè', 'Àâãóñò', 'Ñåïòåìâðè', 'Îêòîìâðè', 'Íîåìâðè', 'Äåêåìâðè' );
    $lang_string['sb_default_title'] = 'Áåç èìå';
    $lang_string['sb_default_author'] = 'Áåç àâòîð';
    $lang_string['sb_default_footer'] = 'Áåç ïîäòåêñò';

    $lang_string['sb_edit'] = 'ðåäàêòèðàíå';
    $lang_string['sb_delete'] = 'èçòðèâàíå';
    $lang_string['sb_permalink'] = 'ëèíê';
    $lang_string['sb_trackback'] = 'ïðåïðàòêè';
    $lang_string['sb_postedby'] = 'Íàïèñàíî îò'; // 0.5.0
    $lang_string['sb_admin'] = 'Àäìèíèñòðàòîð'; // 0.5.0
    $lang_string['sb_relatedlink'] = 'ñâúðçàí ëèíê'; // <-- New in 0.4.6

    $lang_string['sb_add_comment_btn'] = 'äîáàâåòå êîìåíòàð';
    $lang_string['sb_read_entry_btn'] = 'âèæòå íîâèíà'; // 0.5.0
    $lang_string['sb_comment_btn_number_first'] = óñïåõ;
    $lang_string['sb_comment_btn'] = 'êîìåíòàð';
    $lang_string['sb_comment_view'] = 'ïðåãëåä'; // 0.5.0
    $lang_string['sb_comments_plural_btn_number_first'] = óñïåõ;
    $lang_string['sb_comments_plural_btn'] = 'êîìåíòàðà';
    $lang_string['sb_comments_plural_view'] = 'ïðåãëåäà'; // 0.5.0

    // ( 1 view )
    $lang_string['sb_view_counter_pre'] = '';
    $lang_string['sb_view_counter_post'] = ' ïðåãëåä';

    // ( 2 views )
    $lang_string['sb_view_counter_plural_pre'] = '';
    $lang_string['sb_view_counter_plural_post'] = ' ïðåãëåäà';

    $lang_string['sb_add_link_btn'] = 'äîáàâåòå âðúçêà';
    $lang_string['sb_rate_entry_btn'] = 'Êëèêíåòå çà îöåíêà';

    // Entry Text Editor
    if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
      $lang_string['label_subject'] = "Èìå:";
      $lang_string['label_insert'] = "Ñïåöèàëíè âúçìîæíîñòè:";
      $lang_string['btn_bold'] = " b ";
      $lang_string['btn_italic'] = " i ";
      $lang_string['btn_image'] = "img";
      $lang_string['btn_url'] = "url";
      $lang_string['btn_readmore'] = "more"; // 0.4.8
      $lang_string['view_images'] = "Ïðåãëåäàéòå êà÷åíèòå èçîáðàæåíèÿ";
      $lang_string['label_entry'] = "Òåêñò:";
      $lang_string['btn_preview'] = "&nbsp;Ïðåãëåä&nbsp;";
      $lang_string['btn_post'] = "&nbsp;Èçïðàùàíå&nbsp;";
      $lang_string['chk_visiblemenu'] = "Âèäèìà (â ìåíþòî)";
      $lang_string['file_name'] = "Èìå íà ñòàòè÷íèÿ ôàéë (áåç èíòåðâàëè èëè ôàéëîâè ðàçøèðåíèÿ):";

      // Javascript Strings
      $lang_string['insert_styles'] = "Âúâåäåòå ñòèë íà òåêñòà";
      $lang_string['insert_image'] = "Âúâåäåòå URL íà èçîáðàæåíèåòî";
      $lang_string['insert_url1'] = "Âúâåäåòå òåêñòà, êîéòî ùå ñå èçïèñâà ïðè âðúçêàòà (íåçàäúëæèòåëíî)";
      $lang_string['insert_url2'] = "Âúâåäåòå ïúëåí URL íà âðúçêàòà";
      $lang_string['insert_url3'] = "Oòâàðÿíå íà URL â íîâ ïðîçîðåö (íåçàäúëæèòåëíî):";
      $lang_string['form_error'] = "Ìîëÿ, ïîïúëíåòå ïîëåòàòà çà òåìà è ñúäúðæàíèå.";

      // More Javascript Strings
      $lang_string['insert_image_optional'] = 'Íåçàäúëæèòåëíî:';
      $lang_string['insert_image_width'] = 'Øèðèíà (íåçàäúëæèòåëíî):';
      $lang_string['insert_image_height'] = 'Âèñî÷èíà (íåçàäúëæèòåëíî):';
      $lang_string['insert_image_popup'] = 'Ïðåãëåä íà ïúëåí ðàçìåð â íîâ ïðîçîðåö ïðè êëèêâàíå (íåçàäúëæèòåëíî):';
      $lang_string['insert_image_float'] = 'Ñâîáîäíî (íåçàäúëæèòåëíî):';

      $lang_string['day'] = 'Äåí';
      $lang_string['month'] = 'Ìåñåö';
      $lang_string['year'] = 'Ãîäèíà';
      $lang_string['hour'] = '×àñ';
      $lang_string['minute'] = 'Ìèíóòà';
      $lang_string['second'] = 'Ñåêóíäà';
    }

    switch ($page) {
      case 'add':
        // Add Entry
        $lang_string['title'] = "Äîáàâÿíå íà íîâèíà";
        $lang_string['instructions'] = "Ïîïúëíåòå ôîðìàòà, ñëåä çàâúðøâàíå êëèêíåòå <strong>'Ïðåãëåä'</strong> çà ïðåäâàðèòåëåí ïðåãëåä íà íîâèíàòà èëè <strong>'Èçïðàùàíå'</strong> çà ïóáëèêóâàíå íîâèíàòà íà ñàéòà.";
        $lang_string['title_ad'] = "Ïîòâúðäåòå Ïèíãâàíå íà Ïðåïðàòêà";
        $lang_string['instructions_ad'] = "Òîâà ñà àâòîìàòè÷íî îòêðèâàùè URIs çà ïèíãâàíå. Àêî íå èñêàòå ïèíã êúì íèòî åäèí URI, ðàçìàðêèðàéòå ãè. Ïîñëå íàòèñíåòå 'OK' áóòîíà çà ïèíã íà ìàðêèðàíèòå URIs èëè íàòèñíåòå 'Îòêàç' çà äà íå ãè ïèíãâàòå.";
        $lang_string['label_tb_ping'] = "Ïðåïðàòêà íà ïèíã(îâå) çà èçïðàùàíå (îòäåëåíè ñúñ çàïåòàè)";
        $lang_string['label_tb_autodiscovery'] = "àâòîìàòè÷íî îòêðèâàíå";
        $lang_string['label_relatedlink'] = "Ñâúðçàí ëèíê";
        $lang_string['label_categories'] = "Ñïèñúê íà êàòåãîðèèòå";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Ïðåãëåä / ðåäàêòèðàíå íà íîâèíàòà";
        $lang_string['instructions_preview'] = "Òàêà ùå èçãëåæäà íîâèíàòà. <strong>Îáúðíåòå âíèìàíèå,</strong>: ÷å àêî èçïîëçâàòå ðàçäåëÿíå íà òåêñòà, ïðèêà÷èëè ñòå èçîáðàæåíèå èëè ñòå äàëè ëèíê, òðÿáâà äà ñå óâåðèòå, ÷å âñè÷êè òàãîâå ñà çàòâîðåíè.";
        $lang_string['title_update'] = "Îáíîâÿâàíå íà íîâèíàòà";
        $lang_string['instructions_update'] = "Ìîæåòå äà ïðîìåíèòå íîâèíàòà, èçïîëçâàéêè ôîðìàòà ïî-äîëó. Êîãàòî çàâúðøèòå, èçïîëçâàéòå áóòîíèòå <strong>'Ïðåãëåä'</strong> è '<strong>Èçïðàùàíå'</strong>.";
        $lang_string['ok_btn'] = "&nbsp;ÎÊ&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Îòêàç&nbsp;";

        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Íîâèíàòà íå å çàïàçåíà! Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Íîâèíàòà å çàïàçåíà!</h2>Âàøàòà íîâèíà áåøå óñïåøíî çàïàçåíà."; // 0.4.8.1
        break;

      case 'add_static':
        // Add Entry
        $lang_string['title'] = "Äîáàâåòå ñòàòè÷íà ñòðàíèöà";
        $lang_string['instructions'] = "Ïîïúëíåòå ñëåäíàòà ôîðìà çà ñúçäàâàíå íà ñòàòè÷íà ñòðàíèöà. Çà ðàçëèêà îò íîâèíèòå, ñòàòè÷íèòå ñòðàíèöè ñå ïîêàçâàò êàòî ëèíêîâå â ìåíþòî Ñúäúðæàíèå. Íà òÿõ å óäîáíî äà ñå ïîìåñòâà èíôîðìàöèÿ, êîÿòî òðÿáâà äà áúäå âèíàãè äîñòúïíà: êîíòàêòè, îòãîâîðè íà ÷åñòî çàäàâàíè âúïðîñè, ãðàôèê çà ðàáîòà è ò.í. Èçïîëçâàéòå áóòîíà 'Ïðåãëåä' çà ïðåäâàðèòåëåí ïðåãëåä íà ñòðàíèöàòà è 'Èçïðàùàíå' çà çàïàçâàíå íà ñòðàíèöàòà.";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Ïðåãëåä / ðåäàêòèðàíå íà ñòàòè÷íà ñòðàíèöà";
        $lang_string['instructions_preview'] = "Òàêà èçãëåæäà ñòàòè÷íàòà ñòðàíèöà. Àêî èçïîëçâàòå ñòèë èëè èçîáðàæåíèå, íå çàáðàâÿéòå äà çàòâîðèø âñè÷êè 'òàãîâå'.";
        $lang_string['title_update'] = "Îáíîâåòå ñòàòè÷íàòà ñòðàíèöà";
        $lang_string['instructions_update'] = "Ìîæåòå äà ïðîìåíèòå ñòðàíèöàòà, èçïîëçâàéêè ôîðìàòà ïî-äîëó. Êîãàòî çàâúðøèòå ðåäàêòèðàíåòî, èçïîëçâàéòå áóòîíèòå 'Ïðåãëåä' è 'Èçïðàùàíå'.";
        $lang_string['form_error'] = "Ìîëÿ, ïîïúëíåòå ïîëåòàòà Èìå, Òåêñò, è Èìå íà ôàéë.";

        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Ñòðàíèöàòà íå å çàïàçåíà.<br /><br />Îòãîâîð íà ñúðâúðà: <br />";
        break;

      case 'add_block':
        // Add / Manage Blocks
        $lang_string['title'] = "Âúâåæäàíå / Îôîðìÿíå íà Áëîê";
        $lang_string['instructions'] = "Âúâåäåòå îáè÷àéíè Áëîêîâå.";
        $lang_string['up'] = "íàãîðå";
        $lang_string['down'] = "íàäîëó";
        $lang_string['edit'] = "ðåäàêòèðàíå";
        $lang_string['delete'] = "èçòðèâàíå";
        $lang_string['block_name'] = "Èìå íà Áëîêà:";
        $lang_string['block_content'] = "Ñúäúðæàíèå íà Áëîêà:";
        $lang_string['instructions_edit'] = "Ðåäàêòèðàíå íà Áëîê.";
        $lang_string['instructions_modify'] = "Êëèêíåòå âúðõó æåëàíèòå ïðîìåíè â Áëîê:";
        $lang_string['submit_btn_edit'] = "Èçïðàùàíå";
        $lang_string['submit_btn_add'] = "Âúâåäåòå Áëîê";
        $lang_string['form_error'] = "Ïîïúëíåòå ïîëåòî Èìå.";
        break;

      case 'add_link':
        $lang_string['static_pages'] = "Ñòàòè÷íè Ñòðàíèöè:";

        // Add / Manage Links
        $lang_string['title'] = "Äîáàâÿíå / ïðîìÿíà íà Âðúçêè";
        $lang_string['instructions'] = "Òóê ìîæåòå äà äîáàâèòå âðúçêè êúì äðóãè ñàéòîâå. Ïîïúëíåòå ôîðìàòà è êëèêíåòå áóòîíà <strong>'Èçïðàùàíå'</strong>. Êëèêâàéòå 'íàãîðå' èëè 'íàäîëó' çà ïðîìÿíà íà ïîðåäíîñòòà íà âðúçêèòå. Èçïîëçâàéòå 'ïðîìÿíà' çà ðåäàêòèðàíå íà âðúçêàòà è 'èçòðèâàíå' - çà èçòðèâàíå.";
        $lang_string['up'] = "íàãîðå";
        $lang_string['down'] = "íàäîëó";
        $lang_string['edit'] = "ïðîìÿíà";
        $lang_string['delete'] = "èçòðèâàíå";
        $lang_string['link_name'] = "Èìå:";
        $lang_string['link_url'] = "URL: (Íåçàäúëæèòåëíî. Îñòàâåòå ïðàçíî, àêî èñêàòå äà ãî èçïîëçâàòå êàòî ðàçäåëèòåë)";
        $lang_string['instructions_edit'] = "Ðåäàêòèðàíå íà Âðúçêà:";
        $lang_string['instructions_modify'] = "Ïðîìÿíà íà íóæíàòà Âðúçêà:";
        $lang_string['submit_btn_edit'] = "Èçïðàùàíå";
        $lang_string['submit_btn_add'] = "Âúâåäåòå Âðúçêà";
        $lang_string['form_error'] = "Ïîïúëíåòå ïîëåòàòà çà Èìå è Àäðåñ íà Âðúçêàòà.";
        break;

      case 'categories':

        // Add / Manage Links
        $lang_string['title'] = "Äîáàâÿíå / Îôîðìÿíå íà Êàòåãîðèè";
        $lang_string['instructions'] = "Èçïîëçâàéòå ôîðìàòà ïî-äîëó, çà äà äîáàâèòå è ðåäàêòèðàòå êàòåãîðèè. Âñÿêà êàòåãîðèÿ òðÿáâà äà áúäå â òîçè ôîðìàò: 'èìå íà êàòåãîðèÿòà (id íîìåð)'. Ðàçäåëÿéòå ñ èíòåðâàëè çà äà ñúçäàäåòå éåðàðõèè.<br /><br /><b>Ïðèìåð:</b><br />Îáùà (1)<br />Íîâèíè (3)<br />&nbsp;&nbsp;Ñúîáùåíèÿ (6)<br />&nbsp;&nbsp;Ñúáèòèÿ (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Ðàçíè (7)<br />Òåõíèêà (2)<br />";
        $lang_string['error'] = "Ãðåøêà";
        $lang_string['current_categories'] = "Íàñòîÿùè Êàòåãîðèè";
        $lang_string['no_categories_found'] = "Íÿìà Îòêðèòè Êàòåãîðèè";
        $lang_string['category_list'] = "Ñïèñúê íà Êàòåãîðèèòå:";
        $lang_string['validate'] = "Ïîòâúðæäàâàíå";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàùàíå&nbsp;";
        break;

      case 'colors':
        // Change Colors
        $lang_string['title'] = "Íàñòðîéêà íà öâåòîâàòà ãàìà";
        $lang_string['instructions'] = "Ìîæåòå äà ïðîìåíèòå öâåòîâåòå, èçïîëçâàíè íà ñòðàíèöàòà. Èçïîëçâàéòå ïàëèòðàòà çà èçáîð íà ïîäõîäÿùèÿ öâÿò, ïîñëå çàïèøåòå øåñòíàäåñåòè÷íîòî îáîçíà÷åíèå íà öâåòà â ñúîòâåòíîòî ïîëå.";
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

        $lang_string['static_bg'] = "Ôîí íà ñòàòè÷íà ñòðàíèöà"; // 0.5.0
        $lang_string['static_title_bg'] = "Çàãëàâèå íà ñòàòè÷íà ñòðàíèöà"; // 0.5.0
        $lang_string['static_border'] = "Ðàìêà íà ñòàòè÷íà ñòðàíèöà"; // 0.5.0
        $lang_string['static_title_text'] = "Òåêñò íà çàãëàâèå íà ñòàòè÷íà ñòðàíèöà"; // 0.5.0
        $lang_string['static_text'] = "Òåêñò íà ñòàòè÷íà ñòðàíèöà"; // 0.5.0

        $lang_string['comment_bg'] = "Ôîí íà êîìåíòàð"; // 0.5.0
        $lang_string['comment_title_bg'] = "Çàãëàâèå íà êîìåíòàð"; // 0.5.0
        $lang_string['comment_border'] = "Ðàìêà íà êîìåíòàð"; // 0.5.0
        $lang_string['comment_title_text'] = "Òåêñò íà çàãëàâèå íà êîìåíòàð"; // 0.5.0
        $lang_string['comment_text'] = "Òåêñò íà êîìåíòàð"; // 0.5.0

        $lang_string['menu_bg'] = "Ôîí íà ìåíþ";
        $lang_string['menu_title_bg'] = "Ôîí íà çàãëàâèå íà ìåíþ";
        $lang_string['menu_border'] = "Ðàìêà íà ìåíþ";
        $lang_string['menu_title_text'] = "Òåêñò íà çàãëàâèå íà ìåíþ";
        $lang_string['menu_text'] = "Òåêñò íà ìåíþ";
        $lang_string['menu_link_reg_color'] = "Îáè÷àéíà âðúçêà â ìåíþ";
        $lang_string['menu_link_hi_color'] = "Àêòèâíà âðúçêà â ìåíþ";
        $lang_string['menu_link_down_color'] = "Êëèêíàòà âðúçêà â ìåíþ";

        // Submit
        $lang_string['color_preset'] = "Öâåòîâè ñõåìè:";
        $lang_string['scheme_name'] = "Âúâåäåòå èìå íà îáè÷àéíà öâåòîâà ñõåìà:";
        $lang_string['scheme_file'] = "Âúâåäåòå èìå íà ôàéëà íà öâåòîâàòà ñõåìà (áåç èíòåðâàëè è ôàéëîâè ðàçøèðåíèÿ):";
        $lang_string['save_btn'] = "&nbsp;Çàïàçâàíå&nbsp;";
        $lang_string['form_error'] = "Âúâåäåòå èìå íà èçáðàíàòà öâåòîâà ñõåìà.";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàùàíå&nbsp;";
        $lang_string['theme_doesnt_allow_colors'] = 'Èçáðàíàòà òåìà íå ïîçâîëÿâà ïðîìÿíà íà öâåòîâåòå.';

        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà! Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Öâåòúò å çàïàçåí!</h2>Èíôîðìàöèÿòà áåøå óñïåøíî çàïàçåíà."; // New for 0.4.8.1
        break;

      case 'comments':
        // Comments
        $lang_string['name'] = "Èìå:"; //New in 0.4.6.2
        $lang_string['email'] = "Èìåéë:"; //New in 0.4.6.2
        $lang_string['homepage'] = "Ñàéò:"; //New in 0.4.6.2
        $lang_string['comment'] = "Êîìåíòàð:"; //New in 0.4.6.2
        $lang_string['IPAddress'] = "IP Àäðåñ:";  // New for 0.4.6.2
        $lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2
        $lang_string['wrote'] = "<i>Â %s, %s íàïèñà:</i><br />\n<br />\n%s"; // New for 0.4.6.2

        $lang_string['comment_capcha'] = "Âúâåäåòå Anti-Spam êîäà <b>%s</b>"; // 0.4.2
        $lang_string['title'] = "Êîìåíòàðè";
        $lang_string['header'] = "Äîáàâÿíå íà êîìåíòàð";
        $lang_string['instructions'] = "Ïîïúëíåòå ôîðìàòà ïî-äîëó.";
        $lang_string['comment_name'] = "Èìå (Çàäúëæèòåëíî):";
        $lang_string['comment_email'] = "Èìåéë (Çàäúëæèòåëíî. Âèæäà ñå ñàìî îò àäìèíèñòðàòîðà):";
        $lang_string['comment_url'] = "Ñàéò (Íåçàäúëæèòåëíî):";
        $lang_string['commentposted'] = "Êîìåíòàðúò å èçïðàòåí íà: ";  // New for 0.4.6.2
        $lang_string['comment_remember'] = "Çàïàìåòÿâàíå íà äàííèòå ìè (Çà âàøå óëåñíåíèå):";
        $lang_string['comment_text'] = "Òåêñò íà êîìåíòàðà:";
        $lang_string['post_btn'] = "&nbsp;Èçïðàùàíå&nbsp;";
        $lang_string['delete_btn'] = "èçòðèâàíå";
        $lang_string['ban_btn'] = "ban ip"; // New for 0.4.8
        $lang_string['expired_comment1'] = "Êîìåíòàðè ñà ðàçðåøåíè ñàìî çà íîâèíè íå ïî-ñòàðè îò  "; // New for 0.4.8
        $lang_string['expired_comment2'] = " äåíà."; // New for 0.4.8

        $lang_string['blacklisted'] = "Òîçè IP å áàííàò. Êîìåíòàðèòå îò íåãî ñà çàáðàíåíè."; // New for 0.4.8
        $lang_string['bannedword'] = "Âàøèÿò êîìåíòàð, url, èìå èëè èìåéë ñúäúðæàò äóìà(è), çàáðàíåíè îò àäìèíèñòðàòîðà. Âàøèÿò êîìåíòàð ÍÅ å ïóáëèêóâàí."; // New for 0.4.8
        $lang_string['nocomments'] = "Êîìåíòàðèòå íå ñà ðàçðåøåíè çà òàçè íîâèíà."; // New for 0.4.9
        $lang_string['email_moderator'] = "Êîìåíòàðèòå ñà ìîäåðèðàíè. Òîçè êîìåíòàð òðÿáâà äà áúäå îäîáðåí, ïðåäè äà áúäå ïóáëèêóâàí."; // New for 0.5.0
        $lang_string['user_notice_mod'] = "Âàøèÿò êîìåíòàð òðÿáâà äà áúäå îäîáðåí îò àäìèíèñòðàòîð ïðåäè äà ñå ïóáëèêóâà."; // new for 0.5.0

        $lang_string['return_to_comments'] = 'Âðúùàíå êúì Êîìåíòàðè';

        // Error Response
        $lang_string['error_add'] = "<h2>Óïñ!</h2>Êîìåíòàðúò íå å çàïàçåí. Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàë ïðîáëåì.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['error_delete'] = "<h2>Óïñ!</h2>Êîìåíòàðúò íå å èçòðèò. Ïðè îïèòà çà èçòðèâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['error_ban'] = "<h2>Óïñ!</h2>IP íå å âúâåäåíî â ñïèñúêà ñ áàííàòè ip.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success_add'] = "<h2>Êîìåíòàðúò å âúâåäåí!</h2>Âàøèÿò êîìåíòàð áåøå óñïåøíî çàïàçåí."; // New for 0.4.8.1
        $lang_string['success_delete'] = "<h2>Êîìåíòàðúò èçòðèò!</h2>Êîìåíòàðúò áåøå èçòðèò."; // New for 0.4.8.1
        $lang_string['success_ban1'] = "<h2>Áàííàò IP àäðåñ!";
        $lang_string['success_ban2'] = "</h2>Çà äà ïðåìàõíåòå òîçè áàí çà â áúäåùå, èçïîëçâàéòå  Ìîäåðèðàíå îò ìåíþ Íàñòðîéêè."; // New for 0.4.8.1
        $lang_string['form_error'] = "Ïîïúëíåòå ïîëåòàòà çà çàãëàâèå è òåêñò íà êîìåíòàðà, êàêòî è Anti-Spam êîäà.";
        $lang_string['error_noip'] = "Íÿìà óñòàíîâåíè IP çà âïèñâàíå â ÷åðíèÿ ñïèñúê.";

        $lang_string[ 'error_comments_disabled' ] = '<h2>Error!</h2>Hey! Comments are disabled on this blog. Are you a spambot?'; // New 0.5.0
        $lang_string[ 'error_no_match' ] = '<h2>Error!</h2>You IP address doesn\t match posted IP address. Are you a spambot?'; // New 0.5.0
        $lang_string[ 'error_fields_missing' ] = '<h2>Error!</h2>Missing the following fields: '; // New 0.5.0
        $lang_string[ 'error_spambot' ] = '<h2>Error!</h2>Capcha data is missing. Are you a spambot?'; // New 0.5.0
        $lang_string[ 'error_capcha' ] = '<h2>Error!</h2>The capcha you entered is incorrect.'; // New 0.5.0
        $lang_string[ 'error_bad_data' ] = '<h2>Error!</h2>Post data is not valid. Are you a hacker?'; // New 0.5.0
        $lang_string[ 'error_entry_missing' ] = '<h2>Error!</h2>You are trying to comment on an entry that doesn\'t exist'; // New 0.5.0
        $lang_string[ 'error_empty_text' ] = '<h2>Error!</h2>You didn\'t enter any comments or your name.'; // New 0.5.0
        break;

      case 'delete':
        $lang_string['title'] = "Èçòðèâàíå íà òåêñò";
        $lang_string['instructions'] = "Ïðåäè äà èçòðèåòå òåêñòà îùå âåäíúæ ñå óâåðåòå, ÷å èñêàòå äà èçòðèåòå òî÷íî íåãî, çàùîòî ñëåä èçòðèâàíåòî ìó íå å âúçìîæíî äà áúäå âúçñòàíîâåí...";
        $lang_string['ok_btn'] = "&nbsp;Èçòðèâàíå&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Îòêàç&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Íåóñïåøíî èçòðèâàíå íà áåëåæêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Òåêñòúò èçòðèò!</h2>Òåêñòúò áåøå èçòðèò."; // New for 0.4.8.1
        break;

      case 'delete_static':
        $lang_string['title'] = "Èçòðèâàíå íà ñòàòè÷íà ñòðàíèöà";
        $lang_string['instructions'] = "Ïðåäè äà èçòðèåòå òàçè ñòðàíèöà îùå âåäíúæ ñå óâåðåòå, ÷å èñêàòå äà èçòðèåòå òî÷íî íåÿ, çàùîòî ñëåä èçòðèâàíåòî é íå å âúçìîæíî äà áúäå âúçñòàíîâåíà.";
        $lang_string['ok_btn'] = "&nbsp;ÎÊ&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Îòêàç&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Ñòðàíèöàòà íå å èçòðèòà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Ñòàòè÷íàòà èçòðèòà!</h2>Ñòàòè÷íàòà ñòðàíèöà áåøå èçòðèòà."; // New for 0.4.8.1
        break;

      case 'image_list':
        $lang_string['title'] = "Ñïèñúê íà èçîáðàæåíèÿ";
        $lang_string['instructions'] = "Êëèêíåòå ñúîòâåòíàòà âðúçêà çà ïðåãëåæäàíå íà èçîáðàæåíèÿòà.<br /><br />Çà ïîñòàâÿíå íà èçîáðàæåíèå â òåêñòà:<br />1) Êëèêíåòå ñ äåñåí áóòîí íà ìèøêàòà âúðõó âðúçêàòà è èçáåðåòå òî÷êà îò ìåíþòî <em>Êîïèðàíå íà âðúçêà</em>.<br />2) Âúðíåòå ñå â ïðîçîðåöà çà äîáàâÿíå / ïðîìÿíà.<br />3) Êëèêíåòå áóòîí <strong>'img'</strong> è äîáàâåòå â ïîÿâèëîòî ñå ìÿñòî âðúçêàòà îò áóôåðà çà îáìåí.";
        break;

      case 'info':
        $lang_string['title'] = "Meta-Data Èíôîðìàöèÿ";
        $lang_string['instructions'] = "Òàçè èíôîðìàöèÿ &quot;meta-data&quot;, ùå ïîìîãíå íà òúðñà÷êèòå òî÷íî äà èäåíòèôèöèðàò è íàìèðàò ñàéòà. Èíôîðìàöèÿòà ìîæå äà áúäå èçïîëçâàíà è çà RSS feeds.";
        $lang_string['info_keywords'] = "Êëþ÷îâè äóìè (Ñïèñúê íà êëþ÷îâèòå äóìè, ðàçäåëåíè ñúñ çàïåòàéêè):";
        $lang_string['info_description'] = "Îïèñàíèå (Ñâîáîäåí òåêñò ñ îïèñàíèå íà ñàéòà):";
        $lang_string['info_copyright'] = "Ïðàâà (Çàïàçåíè ïðàâà èëè ëèíê êúì äîêóìåíòèòå, ñúäúðæàùè òàçè èíôîðìàöèÿ):";
        $lang_string['tracking_code'] = "Âúíøåí êîä çà ïðåïðàòêà: (HTML êîä, êîéòî òðÿáâà äà ñå ïîìåñòè íà ãëàâíàòà ñòðàíèöà(â òàãîâåòå íà øàïêàòà, çà ñèãóðíîñò) ñàìî çà âñåêè ïîñåòèòåë íà ñàéòà êàòî Google Analytics)";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàùàíå&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Ìåòà-èíôîðìàöèÿòà çàïàçåíà!</h2>Èíôîðìàöèÿòà áåøå óñïåøíî çàïàçåíà."; // New for 0.4.8.1
        $lang_string['form_error'] = "Ïîïúëíåòå ïîëåòàòà Çàãëàâèå è Àâòîð.";
        break;

      case 'index':
        // Index
        break;

      case 'static':
        // Index
        break;

      case 'rating':
        $lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Ãëàñúò å çàïàçåí!</h2>Âàøèÿò ãëàñ áåøå óñïåøíî çàïàçåí."; // New for 0.4.8.1
        break;

      case 'login':
        $lang_string['upgrade'] = "<h2>Îáíîâÿâàíå</h2>"; // New 0.3.8
        $lang_string['upgrade_count'] = "%n êîìåíòàðà òðÿáâà äà áúäàò îáíîâåíè:"; // New 0.3.8
        $lang_string['upgrade_url'] = "Îáíîâÿâàíå íà êîìåíòàðè"; // New 0.3.8
        $lang_string['title'] = "Âõîä";
        $lang_string['instructions'] = "Âúâåäåòå Ïîòðåáèòåë è Ïàðîëà";
        $lang_string['username'] = "Ïîòðåáèòåë:";
        $lang_string['password'] = "Ïàðîëà";
        $lang_string['submit_btn'] = "&nbsp;Âëèçàíå&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Ïîçäðàâëåíèÿ!</h2>Ðåãèñòðàöèÿòà â ñèñòåìàòà å óñïåøíà. Ïðèÿòíî íîâèíàðñòâàíå!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Óïñ!</h2>Íåóñïåøíà ðåãèñòðàöèÿ. Ïðîâåðåòå ïðàâèëíî ëè ñà âúâåäåíè Ïîòðåáèòåë è Ïàðîëà.<p />";
        $lang_string['inactive_account'] = "<h2>Óïñ!</h2>Íåóñïåøíî âëèçàíå. Âàøèÿò ïðîôèë å áèë ïðåìàõíàò îò àäìèíèñòðàòîð ïî íÿêàêâà ïðè÷èíà.<p />";
        $lang_string['form_error'] = "Ïîïúëíåòå ïîëåòàòà çà Ïîòðåáèòåë è Ïàðîëà.";
        break;

      case 'logout':
        $lang_string['title'] = "Èçõîä";
        $lang_string['error'] = "<h2>Äîâèæäàíå!</h2>Âèå èçëåçíàõòå. (Íå ñòå âëåçíàëè!)<p />";
        $lang_string['error_no_cookie'] = '<h2>Äîâèæäàíå!</h2>Âèå èçëåçíàõòå. (Íå ñà îòêðèòè "áèñêâèòêè". Íå ñòå âëåçíàëè!)<p />'; // New 0.5.0
        $lang_string['success'] = "<h2>Äîâèæäàíå!</h2>Âå÷å ñòå èçëåçíàëè.<p />(Ïðåíàñî÷âàíå êúì Íà÷àëî ñëåä 5 ñåêóíäè.)<p />";
        break;

      case 'forms':
        $lang_string['title'] = "";
        $lang_string['instructions'] = "";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        break;

      case 'set_login':
        $lang_string['title'] = "Ñìåíåòå Ïîòðåáèòåë &amp; Ïàðîëà";
        $lang_string['instructions'] = "Ïîïúëíåòå ôîðìàòà çà ñìÿíà íà Ïîòðåáèòåë è/èëè Ïàðîëà. Âúâåäåòå íîâèòå Ïîòðåáèòåë è Ïàðîëà.";
        $lang_string['username'] = "Ïîòðåáèòåë:";
        $lang_string['password'] = "Ïàðîëà:";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàùàíå&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Óñïåõ!</h2>Ïîòðåáèòåëÿò è/èëè Ïàðîëàòà ñà àêòèâíè. Ïðèÿòíî íîâèíàðñòâàíå!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['form_error'] = "Ïîïúëíåòå ïîëåòàòà Ïîòðåáèòåë è Ïàðîëà.";
        $lang_string['explanation'] = "Â ïîñëåäíèòå âåðñèè íà÷èíúò íà ñìåíÿâàíå íà ïàðîëàòà å ïðîìåíåí.  Âå÷å íÿìà âúçìîæíîñò çà ñìÿíà íà ïàðîëà
      è/èëè ïîòðåáèòåë ïðåç áëîãà.  Çà äà ïðîìåíèòå ïàðîëàòà è/èëè ïîòðåáèòåëÿ, èçòðèéòå /config/password.php è ñå óâåðåòå, ÷å install*.php
      ñúùåñòâóâà íà ñúðâúðà.  Êîãàòî ñòå ãîòîâè, îïðåñíåòå òàçè ñòðàíèöà (èëè èçëåçíåòå îò áëîãà). Ùå áúäåòå íàñî÷åíè äà ãåíåðèðàòå íîâà ïàðîëà
      îò ñúùèÿ ñêðèïò, êîéòî ñå èçïîëçâà ïðè ñúçäàâàíåòî íà áëîãà.";  // New for 0.4.6
        break;

      case 'install00':
        $lang_string['title'] = "Welcome";
        $lang_string['instructions'] = "Thank you for choosing Simple PHP Blog!";
        $lang_string['blog_choose_language'] = "Choose Language:";
        $lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
        break;

      case 'install01':
        $lang_string['title'] = "Äîáðå äîøëè";
        $lang_string['instructions'] = "
          Áëàãîäàðèì âè, ÷å èçáðàõòå Simple PHP Blog!<br /><br />Simple PHP Blog is å ëåêà áëîãîâà ñèñòåìà. Èçèñêâà PHP 4.1 èëè ïî-íîâà âåðñèÿ è write-permissions íà ñúðâúðà. Öÿëàòà èíôîðìàöèÿ ñå ñúõðàíÿâà â òåêñòîâè ôàéëîâå è íå å íóæíà áàçà äàííè.<br /><br />
      Çà íà÷àëî Simple PHP Blog òðÿáâà äà ñúçäàäå òðè ïàïêè (<b>config</b>, <b>content</b> è <b>images</b>), â êîèòî ùå ñúõðàíÿâà âàøàòà èíôîðìàöèÿ. Ñëåä òîâà âèå ùå ñúçäàäåòå ñâîÿ ïàðîëà è ïîñëå ìîæåòå äà çàïî÷âàòå äà íîâèíàðñòâàòå.<br /><br />
      <b>Íàòèñíåòå ïî-äîëó, çà äà çàïî÷íåòå èíñòàëèðàíåòî:</b>";
        $lang_string['begin'] = "[ Íà÷àëî íà Èíñòàëèðàíå ]";
        break;

      case 'install02':
        $lang_string['title'] = "Èíñòàëèðàíå";
        $lang_string['instructions'] = "Ñúçäàâàíå íà<b>config</b>, <b>content</b> è <b>images</b> ïàïêè:";
        $lang_string['folder_exists'] = "Oê! Ïàïêàòà âå÷å ñúùåñòâóâà. Íå ñà íàïðàâåíè ïðîìåíè...";
        $lang_string['folder_failed'] = "Óïñ! Íå ìîæå äà ñå ñúçäàäå ïàïêà...";
        $lang_string['folder_success'] = "Óñïåõ! Ïàïêàòà å ñúçäàäåíà...";
        // Help
        $lang_string['help'] = "
          <h2>Óïñ!</h2>
      Íå ìîæå äà ñå ñúçäàäå åäíà èëè ïîâå÷å îò ïàïêèòå!<br /><br />Íàé-âåðîÿòíî, çàùîòî:<br />
          <ol>
          <li><b>Write Permissions</b> íå ñà íàñòðîåíè íà ðàçðåøàâàíå íà <b>Read/Write</b> äîñòúï.</li>
          <li>The <b>UID</b>'s (ïîòðåáèòåëñêè ID's) çà âñè÷êè ôàéëîâå è ïàïêè òðÿáâà äà ñúâïàäàò.</li>
          </ol>
          Ñëåäâàéòå èñòðóêöèèòå ïî-äîëó è êëèêíåòå <b>Îïèòàéòå îòíîâî</b>:<br />
          <ol>
          <li>Ñúçäàéòå ðú÷íî ñëåäíèòå ïàïêè: <b>config</b>, <b>content</b> è <b>images</b>.</li>
          <li>Ïîçâîëåòå <b>Write Permissions</b> çà ïàïêèòå: Ïðåç âàøàòà FTP ïðîãðàìà, Owner, User è World òðÿáâà äà èìàò <b>Read</b> è <b>Write</b> äîñòúï. <i>(Ìîæå äà ñå íàëîæè äà ñå ñâúðæåòå ñ âàøèÿ ñúðâúð äîñòàâ÷èê, çà äà ãè ïðîìåíèòå...)</i></li>
          <li>Óâåðåòå ñå, ÷å UID's íà âñè÷êè âàøè ôàéëîâå è ïàïêè ñà åäíàêâè. <i>(Ìîæå äà ñå íàëîæè äà ñå ñâúðæåòå ñ âàøèÿ ñúðâúð äîñòàâ÷èê, çà äà ãè ïðîìåíèòå...)</i></li>
          </ol>";
        $lang_string['try_again'] = "[ Îïèòàéòå îòíîâî ]";
        // Success
        $lang_string['success'] = "<h2>Óñïåõ!</h2>Ïàïêèòå ñà óñïåøíî ñúçäàäåíè!<p /><b>Íàòèñíåòå ïî-äîëó, çà äà ïðîäúëæèòå:</b>";
        $lang_string['continue'] = "[ Ïðîäúëæåòå ]";
        break;

      case 'install03':
        $lang_string['supported'] = "<b>Âàøèÿò óåá ñúðâúð ïîääúðæà ñëåäíèòå êðèïòèðàùè ñõåìè:</b>";
        $lang_string['standard'] = "Standard DES Encryption: ";
        $lang_string['extended'] = "Extended DES Encryption: ";
        $lang_string['MD5'] = "MD5 Encryption: ";
        $lang_string['blowfish'] = "Blowfish Encryption: ";
        $lang_string['enabled'] = "ðàçðåøåíè";
        $lang_string['disabled'] = "çàáðàíåíè";
        $lang_string['using_standard'] = "<b>Using Standard DES Encryption...</b>";
        $lang_string['using_extended'] = "<b>Using Extended DES Encryption...</b>";
        $lang_string['using_MD5'] = "<b style=\"color: green;\">Using MD5 Encryption...</b>";
        $lang_string['using_blowfish'] = "<b style=\"color: green;\">Using Blowfish Encryption...</b>";
        $lang_string['using_unknown'] = "<b>Using Unknown Encryption...</b>";
        $lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
        $lang_string['title'] = "Ñúçäàéòå Ïîòðåáèòåë &amp; Ïàðîëà";
        $lang_string['instructions'] = "Èçïîëçâàéòå ôîðìàòà ïî-äîëó çà Ñúçäàâàíå íà Ïîòðåáèòåë è Ïàðîëà.";
        $lang_string['username'] = "Ïîòðåáèòåë:";
        $lang_string['password'] = "Ïàðîëà:";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàùàíå&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Ïîçäðàâëåíèÿ!</h2>Âèå âëåçíàõòå. Êëèêíåòå ïî-äîëó, çà äà ïîñåòèòå ñòðàíèöàòà çà íàñòðîéêè, êúäåòî ìîæåòå äà äàäåòå èìå íà âàøèÿ áëîã. Ïðèÿòíî íîâèíàðñòâàíå!<p />";
        $lang_string['btn_setup'] = "[ Íàñòðîéêè ]";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Âúçíèêíàë å ïðîáëåì ïðè çàïàçâàíåòî íà âàøèÿ Ïîòðåáèòåë è/èëè Ïàðîëà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['form_error'] = "Ìîëÿ, ïîïúëíåòå ïîëåòàòà Ïîòðåáèòåë è Ïàðîëà.";
        break;

      case 'install04':
        $lang_string['title'] = "Ñúçäàâàíå íà ôàéë Ïàðîëà";
        $lang_string['instructions'] = "Åòî åäèí ëåñåí íà÷èí:<br />
          <ol>
          <li>Îòâîðåòå íÿêîÿ òåêñòîîáðàáîòâàùà ïðîãðàìà. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI è ò.í...)</i></li>
          <li>Ñúçäàéòå New Text Document.</li>
          <li>Êîïèðàéòå è ïîñòàâåòå êîäà îò ïîëåòî ïî-äîëó âúðõó âàøèÿ äîêóìåíò.</li>
          <li>Çàïàçåòå âàøèÿ ôàéë ãî èìåíóâàéòå <b>password.php</b> <i>(Óâåðåòå ñå, ÷å ãî çàïàçâàòå â <b>text</b> èëè <b>plain text</b> ôîðìàò.)</i></li>
          <li>Îòâîðåòå âàøàòà FTP ïðîãðàìà.</li>
          <li>Êà÷åòå âàøèÿ íîâ <b>password.php</b> â <b>config</b> ïàïêàòà íà âàøèÿ óåá ñàéò.</li>
          <li>Èçòðèéòå <b>password.php</b> îò âàøèÿ êîìïþòúð.</li>
          </ol>
        ";
        $lang_string['information'] = "<i>Çàáåëåæêà: Àêî èñêàòå äà ñìåíèòå âàøèòå ïîòðåáèòåë è ïàðîëà (íàïðèìåð, àêî ñòå ãè çàáðàâèëè), èçòðèéòå <b>password.php</b> ôàéëà â <b>config</b> ïàïêàòà íà âàøèÿ óåá ñàéò. Ñëåäâàùèÿ ïúò, êîãàòî ïîñåòèòå ñàéòà ñè, ùå ïðåìèíåòå ïðåç ñúùèÿ èíñòàëàöèîíåí ïðîöåñ îòíîâî...</i>";
        $lang_string['code'] = "Êîä çà <b>password.php</b> ôàéëà:";
        $lang_string['continue'] = "[ Ïðîäúëæåòå ]";
        break;

      case 'install05':
      case 'install06':
        $lang_string['title'] = "Âõîä";
        $lang_string['instructions'] = "Ìîëÿ, âúâåäåòå âàøèòå Ïîòðåáèòåë è Ïàðîëà ïî-äîëó";
        $lang_string['username'] = "Ïîòðåáèòåë:";
        $lang_string['password'] = "Ïàðîëà";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàùàíå&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Ïîçäðàâëåíèÿ!</h2>Âèå âëåçíàõòå.<p />
          Íàòèñíåòå ïî-äîëó, çà äà ïîñåòèòå ñòðàíèöàòà <b>Íàñòðîéêè</b> , êúäåòî ìîæåòå äà ïåðñîíàëèçèðàòå ñâîÿ íîâ áëîã.<p />
      <i>Çàáåëåæêà: Ñëåä êàòî çàâúðøèõòå èíñòàëàöèîííèÿ ïðîöåñ, ïðåïîðú÷èòåëíî å äà èçòðèåòå <b>installXX.php</b> ôàéëîâå îò óåá ñàéòà ñè. (ò.å. install00.php äî install06.php)</i><p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Óïñ!</h2>Âèå íå ñòå âëåçíàëè. Ìîëÿ, ïðîâåðåòå äàëè ñòå íàïèñàëè ïðàâèëíî âàøèòå Ïîòðåáèòåë è Ïàðîëà è îïèòàéòå îòíîâî.<p />";
        $lang_string['form_error'] = "Ìîëÿ, ïîïúëíåòå ïîëåòàòà Ïîòðåáèòåë è Ïàðîëà.";
        // Success
        $lang_string['btn_setup'] = "[ Íàñòðîéêè ]";
        $lang_string['btn_try_again'] = "[ Îïèòàéòå îòíîâî ]";
        break;

      case 'setup':
        $lang_string['title'] = "Íàñòðîéêè";
        $lang_string['instructions'] = "Îòòóê ìîæåòå äà ïðîìåíèòå èìåòî íà ñàéòà è ëè÷íàòà èíôîðìàöèÿ.";
        $lang_string['blog_title'] = "Èìå íà ñàéòà:";
        $lang_string['blog_header'] = "URL íà ãðàôè÷íàòà øàïêà: images/blogheader.jpg (Îñòàâåòå ïðàçíî çà ãðàôèêàòà ïî ïîäðàçáèðàíå).";
        $lang_string['blog_author'] = "Àâòîð:";
        $lang_string['blog_email'] = "Èìåéë: (Îòäåëíèòå èìåéë àäðåñè òðÿáâà äà áúäàò îòäåëåíè ñ a , çàïåòàéêà - ïðàçíîòî ìÿñòî èçêëþ÷âà âúçìîæíîñòòà Çà êîíòàêòè)"; // Updated 0.4.7
        $lang_string['blog_avatar'] = "URL íà Àâàòàð: images/avatar.jpg (Îñòàâåòå ïðàçíî, àêî íå æåëàåòå àâàòàð)."; // <-- New 0.4.7
        $lang_string['blog_footer'] = "Ïîäòåêñò:";
        $lang_string['blog_choose_language'] = "Èçáåðåòå åçèê:";
        $lang_string['blog_enable_comments'] = "Ðàçðåøåòå Êîìåíòàðè";
        $lang_string['blog_comments_popup'] = "Îòâàðÿíå íà Êîìåíòàðè â íîâ ïðîçîðåö";
        $lang_string['blog_search_top'] = "Ïîêàçâàíå íà Òúðñåíå â Íîâèíè (âìåñòî â Ìåíþ)"; // New for 0.5.0
        $lang_string['blog_enable_static_block'] = "Ïîêàçâàíå íà îïðåäåëåí áëîê êàòî ïúðâà íîâèíà â áëîãà: "; // New for 0.5.0
        $lang_string['static_block_border'] = 'Ïîêàçâàíå íà ðàìêà'; // New for 0.5.0
        $lang_string['static_block_noborder'] = 'Áåç ðàìêà'; // New for 0.5.0 
        $lang_string['blog_enable_voting'] = "Ðàçðåøåòå Îöåíêà íà íîâèíè";
        $lang_string['blog_enable_cache'] = "Ðàçðåøåòå Êåø íà íîâèíèòå (ìîæå äà çàáàâè ñêîðîñòòà ïðè íÿêîè ñúðâúðè)"; // New for 0.4.6
        $lang_string['blog_enable_calendar'] = "Ðàçðåøåòå áëîê Êàëåíäàð"; // New for 0.4.6
        $lang_string['blog_enable_archives'] = "Ðàçðåøåòå áëîê Àðõèâ"; // New for 0.4.8
        $lang_string['blog_enable_counter'] = "Ðàçðåøåòå áëîê Ïîñåùåíèÿ"; // New for 0.4.8
        $lang_string['blog_counter_hours'] = "Ñëåä êîëêî ÷àñà áðîÿ÷úò äà îò÷èòà ïîñåùåíèåòî çà íîâî (çà îïðåäåëåí ip àäðåñ):"; // New for 0.4.8
        $lang_string['blog_enable_login'] = "Ðàçðåøåòå ëèíê Âõîä (àêî íå, âõîäúò ñòàâà íåâèäèì çà ïîñåòèòåëè, à âèå ìîæåòå äà âëèçàòå ïðåç http://yoursite.com/login.php...)"; // New for 0.4.8
        $lang_string['blog_enable_title'] = "Ðàçðåøåòå èìåòî íà ñàéòà êàòî òåêñò (Íå ìàðêèðàéòå, àêî èìåòî ñå ñúäúðæà â ãðàôè÷íàòà øàïêà)"; // New for 0.4.6
        $lang_string['blog_enable_permalink'] = "Ðàçðåøåòå Ëèíê íà íîâèíàòà äà ñå âèæäà ïîä íåÿ"; // New for 0.4.6
        $lang_string['blog_enable_capcha'] = "Ðàçðåøåòå Anti-Spam ôèëòúð"; // New for 0.4.8
        $lang_string['blog_footer_counter'] = "Ðàçðåøåòå Ïîñåùåíèÿ (îáùî) â ïîäòåêñòà"; // New for 0.4.8
        $lang_string['blog_enable_capcha_image'] = "Anti-Spam èçîáðàæåíèå (GD library only) / Anti-Spam òåêñò"; // New for 0.4.8
        $lang_string['blog_enable_stats'] = "Ðàçðåøåòå ëèíê Ñòàòèñòèêè"; // New for 0.4.7
        $lang_string['blog_enable_lastcomments'] = "Ðàçðåøåòå áëîê Ïîñëåäíè êîìåíòàðè"; // New for 0.4.7
        $lang_string['blog_enable_lastentries'] = "Ðàçðåøåòå áëîê Ïîñëåäíè íîâèíè"; // New for 0.4.7
        $lang_string['blog_email_notification'] = "Èçïðàùàíå íà èìåéë ïðè ïóáëèêóâàíå íà êîìåíòàð";
        $lang_string['blog_send_pings'] = "Èçïðàùàíå íà Ïèíã &quot;pings&quot;";
        $lang_string['blog_ping_urls'] = "Âúâåäåòå ïúëåí URL (íàïðèìåð http://rpc.weblogs.com/RPC2) íà ïèíãâàùèÿ ñúðâúð &quot;ping&quot;.<br />(Ìîæåòå äà âúâåäåòå è ïîâå÷å àäðåñè, ðàçäåëåíè îò çàïåòàéêè.)";
        $lang_string['blog_trackback_about'] = "Ïðîñëåäÿâàíåòî íà ïðåïðàòêè å íà÷èí çà èçâåñòÿâàíå ìåæäó áëîãîâå. Ïîçâîëÿâà íà äðóãè áëîãîâå
      äà ðàçáåðàò, ÷å â áëîãà âè èìà ëèíê êúì òÿõ, ÷ðåç èçïðàùàíåòî íà ïðîñëåäÿâàù ïèíã. Êàêòî è äà âèäèòå êîé å äàë ëèíê êúì âàøèÿ áëîã 
      ÷ðåç ïîëó÷àâàíåòî íà ïðîñëåäÿâàù ïèíã.<br />
      Ìîæåòå èëè äà âúâåäåòå ðú÷íî ïèíãâàùèÿ URIs èëè äà îñòàâèòå òîâà íà 
      àâòîìàòè÷íî îòêðèâàíå. ";
        $lang_string['blog_trackback_enabled'] = "Ðàçðåøåòå Ïðåïðàòêè";
        $lang_string['blog_trackback_auto_discovery'] = "Ðàçðåøåòå àâòîìàòè÷íî îòêðèâàíå íà âúâåâåíè ñúîáùåíèÿ, ñúäúðæàùè URLs";
        $lang_string['blog_max_entries'] = "Ìàêñèìóì ïîêàçâàíè íîâèíè:";
        $lang_string['blog_comment_tags'] = "Ïîçâîëåíè òàãîâå â êîìåíòàðèòå:";
        $lang_string['blog_gzip_about'] = "
          Îò âåðñèÿ PHP 4.0.4 íàñàì, PHP äàâà âúçìîæíîñò çà ÷åòåíå è ïèñàíå íà gzip (.gz) êîìïðåñèðàíè ôàéëîâå, 
      ñïåñòÿâàéêè ìÿñòî íà äèñêà. Ìîæå ñúùî äà êîìïðåñèðà ñòðàíèöèòå, êîèòî ñå èçïðàùàò êúì áðàóçúðè, 
      ïîääúðæàùè gzip êîìïðàñèÿ, ñïåñòÿâàéêè òðàôèê.<br />
      <br />
      Zlib íå ñå ïîääúðæà îò PHP ïî ïîäðàçáèðàíå. Àêî ëèïñâàò ìåñòàòà çà ìàðêèðàíåòî íà êîìïðåñèÿòà, 
      çíà÷è âàøàòà èíñòàëàöèÿ íà PHP íå ïîääúðæà Zlib ðàçøèðåíèå.";
        $lang_string['blog_enable_gzip_txt'] = "Ðàçðåøåòå GZIP êîìïðåñèÿ çà ôàéëîâåòå íà Áàçàòà äàííè";
        $lang_string['blog_enable_gzip_output'] = "Ðàçðåøåòå GZIP êîìïðåñèÿ çà HTTP èçïðàùàíå";
        $lang_string['submit_btn'] = "&nbsp;Çàïàçâàíå&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå ìîæå äà ñå çàïàçè. Ïðè îïèòà çà çàïàçâàíå å âúçíèêíàëà ãðåøêà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Íàñòðîéêèòå ñà çàïàçåíè!</h2>Èíôîðìàöèÿòà áåøå óñïåøíî çàïàçåíà."; // New for 0.4.8.1
        $lang_string['form_error'] = "Ïîïúëíåòå èìå è àâòîð.";
        $lang_string['label_entry_order'] = "Ðåä íà ïîêàçâàíå íà íîâèíèòå:";
        $lang_string['select_new_to_old'] = "Îò íàé-íîâèòå";
        $lang_string['select_old_to_new'] = "Îò íàé-ñòàðèòå";
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
        $lang_string['blog_comments_moderation'] = "Ðàçðåøåòå êîìåíòàðèòå äà áúäàò îäîáðÿâàíè îò âëåçíàë ïîòðåáèòåë ïðåäè äà áúäàò ïóáëèêóâàíè
          (âèíàãè âèäèìè çà âëåçíàëèÿ ïîòðåáèòåë)"; // New in 0.5.0
        $lang_string['comment_moderation'] = "Ìîäåðàòîðñêè âúçìîæíîñòè"; // New in 0.5.0
        break;
      case 'comment_moderation':
        $lang_string['title'] = "Íåìîäåðèðàíè êîìåíòàðè";
        $lang_string['instructions'] = "Ñïèñúê íà âñè÷êè êîìåíòàðè, êîèòî ñà íåâèäèìè çà âñè÷êè íåâëåçíàëè ïîòðåáèòåëè
          ïîíåæå íå ñà áèëè îäîáðåíè îò àäìèíèñòðàòîð.";
        $lang_string['header'] = "Ñïèñúê çà ìîäåðèðàíå";
        $lang_string['enteredby'] = "Íàïèñàí îò: ";
        $lang_string['entrydate'] = "Äàòà íà íîâèíàòà: ";
        $lang_string['blogentrytitle'] = "Çàãëàâèå íà íîâèíàòà: ";
        $lang_string['enteredcontent'] = "Ñúäúðæàíèå: ";
        $lang_string['totalunmodded'] = " îáùî, ÷àêàù(è) çà ìîäåðèðàíå.";
        $lang_string['mod_approve'] = "[Îäîáðåíèå] ";
        $lang_string['mod_delete'] = "[Èçòðèâàíå]";
        break;
      case 'moderation':
        $lang_string['title'] = "Ìîäåðèðàíå";
        $lang_string['instructions'] = "Ìîæåòå äà ïðîìåíÿòå ñïèñúêà çà àâòîìàòè÷íî ìîäåðèðàíå îòòóê.";
        $lang_string['submit_btn'] = "&nbsp;Çàïàçâàíå íà ìîäåðàòîðñêèòå óñëîâèÿ&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Âúçíèêíàë å ïðîáëåì ïðè çàïàçâàíåòî íà âàøàòà èíôîðìàöèÿ.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Íàñòðîéêèòå ñà çàïàçåíè!</h2>Èíôîðìàöèÿòà áåøå óñïåøíî çàïàçåíà."; // New for 0.4.8.1
        $lang_string['banned_address_list_title'] = "<h2>Áàííàòè IP àäðåñè</h2>";
        $lang_string['banned_address_list'] = "Ïî-äîëó å ñïèñúêúò îò öèôðîâè ip àäðåñè êîèòî ñà áàííàòè îò âúâåæäàíå íà êîìåíòàðè. Âñåêè ip å íà îòäåëåí ðåä è òðÿáâà äà áúäå öèôðîâ (íå DNS èìåíà). Êîãàòî âëèçàò, IP's ïðåäâàðèòåëíî ùå ñà áàííàòè äèðåêòíî îò ïðåãëåä íà êîìåíòàðè.";
        $lang_string['banned_word_list_title'] = "<h2>Áàííàòè äóìè</h2>";
        $lang_string['banned_word_list'] = "Ïî-äîëó å ñïèñúêúò îò äóìè, êîèòî íå ñà ðàçðåøåíè â url èëè òåêñò. Âñÿêà äóìà èëè ãðóïà äóìè å íà îòäåëåí ðåä. Êîìåíòàðèòå ùå ïðîáâàò çà ñúîòâåòñòâèå âñåêè ðåä òî÷íî, êàêòî ñà ïîäðåäåíè, çà äà ãè áàííå.";
        break;
      case 'trackbacks':
        // Trackbacks
        $lang_string['title'] = "Ïðåïðàòêè";
        $lang_string['header'] = "Àäðåñ çà ïðåïðàòêà:";
        $lang_string['delete_btn'] = "èçòðèâàíå";
        // Error Response
        $lang_string['error_add'] = "Ãðåøêà ïðè çàïàçâàíåòî íà äàííèòå çà ïðåïðàòêàòà.";
        $lang_string['error_delete'] = "<h2>Óïñ!</h2>Ïðåïðàòêàòà íå å èçòðèòà. Âúçíèêíàë å ïðîáëåì ïðè èçòðèâàíåòî íà ïðåïðàòêàòà.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success_delete'] = "<h2>Ïðåïðàòêàòà èçòðèòà!</h2>Ïðåïðàùàùèÿò ëèíê áåøå èçòðèò."; // New for 0.4.8.1
        break;

      case 'options':
        $lang_string['title'] = "Äàòà è ×àñ";
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
        $lang_string['show_century'] = "Ïîêàçâàíå íà õèëÿäîëåòèå";
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
        $lang_string['submit_btn'] = "&nbsp;Çàïàçâàíå&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Ïàðàìåòðèòå íå ñà çàïàçåíè. Âúçíèêíàëà ãðåøêà ïðè îïèòà çà çàïàçâàíå.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Ïàðàìåòðèòå ñà çàïàçåíè!</h2>Èíôîðìàöèÿòà áåøå óñïåøíî çàïàçåíà."; // New for 0.4.8.1
        break;

      case 'themes':
        $lang_string['title'] = "Òåìè";
        $lang_string['instructions'] = "Èçïîëçâàéòå ïàäàùîòî ìåíþ, çà äà ñè èçáåðåòå ïðåäïî÷èòàíà òåìà.";
        // Themes
        $lang_string['choose_theme'] = "Òåìè:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Èçïðàùàíå&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Èíôîðìàöèÿòà íå å çàïàçåíà. Âúçíèêíàë å ïðîáëåì ïðè îïèòà çà çàïàçâàíå.<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Òåìàòà å èçáðàíà!</h2>Èíôîðìàöèÿòà áåøå óñïåøíî çàïàçåíà."; // New for 0.4.8.1
        break;

      case 'upload_img':
        $lang_string['title'] = "Êà÷âàíå íà èçîáðàæåíèå";
        $lang_string['instructions'] = "Êëèêíåòå áóòîí 'Ïðåãëåä' çà äà èçáåðåòå èçîáðàæåíèå îò ëîêàëíèÿ äèñê.";
        $lang_string['select_file'] = "Èçáåðåòå ôàéë:";
        $lang_string['upload_btn'] = "Äîáàâåòå";
        // Error Response
        $lang_string['error'] = "<h2>Óïñ!</h2>Ïðè îïèòà çà êà÷âàíå íà èçîáðàæåíèåòî å âúçíèêíàëà ãðåøêà. Ñëóæåáíà èíôîðìàöèÿ:<br /><br />Îòãîâîð íà ñúðâúðà:<br />";
        $lang_string['success'] = "<h2>Èçîáðàæåíèåòî å êà÷åíî!</h2>Èçîáðàæåíèåòî áåøå óñïåøíî çàïàçåíî."; // New for 0.4.8.1
        break;

      case 'search':
        $lang_string['title'] = "Ðåçóëòàòè îò Òúðñåíåòî";
        $lang_string['instructions'] = "Ðåçóëòàòè îò òúðñåíåòî íà <b>%string</b>:";
        $lang_string['not_found'] = "Íÿìà íàìåðåíè ðåçóëòàòè";
        break;

      case 'contact':
        $lang_string['contact_capcha'] = "Âúâåäåòå Anti-Spam êîäà "; // 0.4.2
        $lang_string['title'] = "Çà êîíòàêòè";
        $lang_string['instructions'] = "Ïîïúëíåòå ôîðìàòà:";
        $lang_string['form_error'] = "Ìîëÿ, ïîïúëíåòå âñè÷êè ïîëåòà.";
        $lang_string['name'] = "Èìå (Çàäúëæèòåëíî):";
        $lang_string['email'] = "Èìåéë (Çàäúëæèòåëíî):";
        $lang_string['subject'] = "Çàãëàâèå (Çàäúëæèòåëíî):";
        $lang_string['comment'] = "Òåêñò (Çàäúëæèòåëíî):";
        $lang_string['submit_btn'] = "&nbsp;Èçïðàùàíå&nbsp;";
        $lang_string['success'] = "<h2>Success!</h2>Your message has been sent.<p />";
        $lang_string['failure'] = "<h2>Ãðåøêà!</h2>Ñúîáùåíèåòî íå áåøå èçïðàòåíî. Íàé-âåðîÿòíî êîäúò çà Anti Spam íå å áèë âúâåäåí ïðàâèëíî.<p />";
        $lang_string['contactsent'] = "Êîíòàêòíàòà ôîðìà å èçïðàòåíà îò: ";  // New for 0.4.6
        $lang_string['IPAddress'] = "IP Àäðåñ:";  // New for 0.4.6
        $lang_string['useragent'] = "User Agent:";  // New for 0.4.6
        $lang_string['wrote'] = "<i>Â %s, %s íàïèñà:</i><br />\n<br />\n%s"; // New for 0.4.6.2
        break;

      case 'stats':
        $lang_string["title"] = "Ñòàòèñòèêè";
        $lang_string["general"] = "Îáùî";
        $lang_string["entry_info"] = "<b>%s</b> íîâèíè, èçïîëçâàíè ñà <b>%s</b> äóìè èëè <b>%s</b> áàéòà";
        $lang_string["comment_info"] = "<b>%s</b> êîìåíòàðà, èçïîëçâàíè ñà <b>%s</b> äóìè èëè <b>%s</b> áàéòà";
        $lang_string["trackback_info"] = "<b>%s</b> ïðåïðàòêè èëè <b>%s</b> áàéòà";
        $lang_string["static_info"] = "<b>%s</b> ñòàòè÷íè ñòðàíèöè, èçïîëçâàíè ñà <b>%s</b> äóìè èëè <b>%s</b> áàéòà";
        $lang_string["most_viewed_entries"] = "10-òå íàé-ïðåãëåæäàíè íîâèíè";
        $lang_string["most_commented_entries"] = "10-òå íàé-êîìåíòèðàíè íîâèíè";
        $lang_string["most_trackbacked_entries"] = "10-òå íàé-ïðåïðàùàíè íîâèíè";
        $lang_string['vote_info'] = "<b>%s</b> ãëàñà èëè <b>%s</b> áàéòà"; // 0.4.1
        $lang_string["most_voted_entries"] = "10-òå íàé-÷åñòî îöåíÿâàíè íîâèíè"; // 0.4.1
        $lang_string["most_rated_entries"] = "10-òå íàé-âèñîêî îöåíåíè íîâèíè"; // 0.4.1
        break;

      case 'errorpage-nocookies':  // New for 0.4.6
        $lang_string["title"] = 'HTTP Error 403.8 - Ñòðàíèöàòà / Ôóíêöèÿòà å íåäîñòúïíà';
        $lang_string["errorline1"] = 'Ñòðàíèöàòà èëè ôóíêöèÿòà, êîÿòî èñêàòå äà ïîëçâàòå, ñå íóæäàÿò îò cookies.';
        $lang_string["errorline2"] = 'Ïîïðàâåòå â áðàóçúðà ñè èëè â äðóã àêòèâèðàí çàùèòåí ñîôòóåð íàñòðîéêèòå çà cookies è îïèòàéòå îòíîâî.';
        $lang_string["clientid"] = 'Êëèåíòñêî ID: ';
        break;

      case 'errorpage':  // New for 0.4.6
        $lang_string["403.8"] = 'HTTP Error 403.8 - Ñòðàíèöàòà / Ôóíêöèÿòà å íåäîñòúïíà';
        $lang_string["404"] = 'HTTP Error 404 - Ñòðàíèöàòà / Ôóíêöèÿòà íå ñúùåñòâóâà';
        $lang_string["error_404"] = 'Ñòðàíèöàòà èëè ôóíêöèÿòà, êîÿòî ñå îïèòâàòå äà íàìåðèòå, íå ñúùåñòâóâà.';
        $lang_string["error_javascript"] = 'Ñòðàíèöàòà èëè ôóíêöèÿòà, êîÿòî ñå îïèòâàòå äà íàìåðèòå, èçèñêâà javascript çà äà ðàáîòè.';
        $lang_string["error_emailnotsent"] = 'Íåóñïåøíî èçïðàùàíå íà ñúîáùåíèåòî.';
        $lang_string["error_emailnotsentcapcha"] = 'Íåóñïåøíî èçïðàùàíå íà ñúîáùåíèåòî, ïîðàäè ïðàçíî èëè íåòî÷íî ïîïúëíåíî ïîëå íà Anti Spam êîä.';
        $lang_string["clientid"] = 'Êëèåíòñêî ID: ';
        break;

      case 'emoticons':  // New for 0.4.7
        $lang_string['title'] = "Àäìèí Åìîòèêîíè";
        $lang_string['instructions'] = "
          Ìàðêèðàéòå åìîòèêîíèòå, êîèòî èñêàòå äà èçïîëçâàòå. Ñðåùó òÿõ íàïèøåòå òàãîâåòå, êîèòî èñêàòå 
      äà çàìåñòâàò êàðòèíêèòå. Ìîãàò äà ñå èçïîëçâàò ìíîæåñòâî òàãîâå, íî òðÿáâà äà ñå ðàçäåëÿò ñ
          ïðàçíî ìÿñòî.<br /><br />
    
      Íàïðèìåð:<br />
      :) :-) :SMILE: :HAPPY:<br /><br />
          
      <i>(Çàäúëæèòåëíî èçïîëçâàéòå òàãîâå ñ ïîâå÷å îò 2 çíàêà, 
      èíà÷å ìîæå äà ñå ïîëó÷è íåî÷àêâàíî çàìåñòâàíå.)</i>";
        $lang_string["upload_instructions"] = 'Êà÷åòå íîâè åìîòèêîíè:';
        $lang_string["upload_success"] = 'Óñïåõ! Èçîáðàæåíèÿòà ñà êà÷åíè óñïåøíî!';
        $lang_string["upload_error"] = 'Ãðåøêà! Èçîáðàæåíèÿòà íå ñà êà÷åíè.';
        $lang_string["upload_invalid"] = 'Ãðåøêà! Íåâàëèäåí ôàéë íà èçîáðàæåíèå. Èçîáðàæåíèÿòà òðÿáâà äà ñà ñ ðàçøèðåíèå png, jpg, èëè gif.';
        $lang_string["save_success"] = 'Ïðåäïî÷èòàíèòå åìîòèêîíè ñà óñïåøíî çàïàçåíè!';
        $lang_string["save_error"] = 'Ãðåøêà! Ïðåäïî÷èòàíèòå åìîòèêîíè íå ñà çàïàçåíè.';
        $lang_string["save_button"] = 'Èçïðàùàíå';
        break;

      case 'archives': // New for 0.4.8
        $lang_string['title'] = "Àðõèâ";
        $lang_string['showall'] = "Ïðåãëåä íà âñè÷êè";
        break;

      case 'manage_users':
        $lang_string['title'] = "Ðåäàêòèðàíå íà ïîòðåáèòåëè";
        $lang_string['instructions'] = "Âúâåæäàíå, Ïðîìÿíà èëè Èçòðèâàíå íà ïîòðåáèòåëè, êîèòî íå ñà àäìèíèñòðàòîðè, íî èìàò ïðàâàäà ñúçäàâàò íîâèíè è/èëè äà ìîäåðèðàò êîìåíòàðè.";
        $lang_string['fulladminerror'] = "Íÿìàòå àäìèíèñòðàòîðñêè ïðàâà äà âúðøèòå òîâà!";
        $lang_string['header_user'] = "Ïîòðáèòåë: ";
        $lang_string['header_property'] = "Ñâîéñòâî";
        $lang_string['header_value'] = "Çíà÷åíèå";
        $lang_string['prop_username'] = "Ïîòðåáèòåë:";
        $lang_string['prop_fullname'] = "Âèæäàùî ñå èìå:";
        $lang_string['prop_password'] = "Ïàðîëà:";
        $lang_string['prop_email'] = "Èìåéë:";
        $lang_string['prop_avatar'] = "URL íà àâàòàð:";
        $lang_string['prop_state'] = "Àêòèâèðàíå?";
        $lang_string['prop_sec_Moderate'] = "Ìîäåðèðíå íà êîìåíòàðè?";
        $lang_string['prop_sec_Delete'] = "Èçòðèâàíå íà íîâèíè?";
        $lang_string['prop_sec_Edit'] = "Ðåäàêòèðàíå íà âñÿêàêâè íîâèíè?";
        $lang_string['btn_SaveChanges'] = "Çàïàçâàíå íà ïðîìåíèòå";
        $lang_string['btn_CreateUser'] = "Ñúçäàâàíå íà ïîòðåáèòåë";
        $lang_string['btn_Cancel'] = "Îòìåíÿíå";  
        $lang_string['grid_header'] = "Ñïèñúê íà ïîòðåáèòåëè";
        $lang_string['grid_login'] = 'Âõîä';
        $lang_string['grid_email'] = 'Èìåéë';
        $lang_string['grid_avatar'] = 'Àâàòàð';
        $lang_string['grid_state'] = 'Àêòèâèðàíå?';
        $lang_string['btn_modify'] = 'Ïðîìÿíà';
        $lang_string['btn_delete'] = 'Èçòðèâàíå';  
        break;

      default:
        break;
    }
  }
?>
