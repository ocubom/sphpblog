<?php
  // Hebrew Language File
  // (c) 2007 eliordead <at> hotmail.com

  // Simple PHP Version: 0.5.0
  // Language Version:   0.5.0

  function sb_language( $page ) {
    global $language, $html_charset, $php_charset, $lang_string;

    // Language: Hebrew
    $lang_string['language'] = 'english';
    $lang_string['locale'] = array('en_US', 'us');
    $lang_string['rss_locale'] = 'en-US'; // New 0.4.8

    // ISO Charset: ISO-8859-1
    $lang_string['html_charset'] = 'ISO-8859-1';
    $lang_string['php_charset'] = 'ISO-8859-1';
    setlocale( LC_TIME, $lang_string['locale'] );

    // Global Strings

    // Menu
    $lang_string['menu_links'] = "ìéð÷éí";
    $lang_string['menu_home'] = "òîåã øàùé";
    $lang_string['menu_contact'] = "öåø ÷ùø";
    $lang_string['menu_stats'] = "ñèèéñèé÷ä";
    $lang_string['menu_calendar'] = "ìåç ùðä"; // New for 0.4.8
    $lang_string['menu_archive'] = "àøëéåï";
    $lang_string['menu_viewarchives'] = "äöâ àøëéåï";
    $lang_string['menu_menu'] = "úôøéè";
    $lang_string['menu_add'] = "ùìç ëúáä";
    $lang_string['menu_add_static'] = "ùìç òîåã ñèèé";
    $lang_string['menu_upload'] = "äòìä úîåðä";
    $lang_string['menu_setup'] = "äòãôåú";
    $lang_string['menu_categories'] = "÷èâåøéåú";
    $lang_string['menu_info'] = "úâé îèä";
    $lang_string['manage_users'] = "ðéäåì îùúîù";
    $lang_string['menu_options'] = "úàøéê åùòä";
    $lang_string['menu_themes'] = "òøëåú ðåùà";
    $lang_string['menu_colors'] = "öáòéí";
    $lang_string['menu_change_login'] = "ùðä äúçáøåú";
    $lang_string['menu_logout'] = "äúðú÷";
    $lang_string['menu_login'] = "äúçáø";
    $lang_string['menu_most_recent'] = "úâåáåú àçøåðåú";
    $lang_string['menu_most_recent_entries'] = "ëúáåú àçøåðåú";
    $lang_string['menu_most_recent_trackback'] = "èø÷á÷ñ àçøåðéí";
    $lang_string['menu_add_block'] = "áìå÷éí";
    $lang_string['menu_emoticons'] = "àéé÷åðéí"; // New for 0.4.7
    $lang_string['menu_avatar'] = "úîåðä"; // New for 0.4.7
    $lang_string['menu_moderation'] = "çñéîú îéìéí åàéé ôé"; // New for 0.4.9
    $lang_string['menu_commentmoderation'] = "Unmodded Comments"; // New for 0.5.0
    $lang_string['notice_moderator1'] = "éù ìê ";
    $lang_string['notice_moderator2'] = " úâåáåú ùöøéëåú àéùåø";
    $lang_string['notice_loggedin'] = "àúä ëøâò îçåáø";

    // Counter
    $lang_string['counter_today'] = "äéåí:"; // New for 0.4.8
    $lang_string['counter_yesterday'] = "àúîåì:"; // New for 0.4.8
    $lang_string['counter_totalsidebar'] = "ñê äëì:"; // New for 0.4.8
    $lang_string['counter_title'] = "÷àåðèø"; // New for 0.4.8

    // Other
    $lang_string['home'] = 'çæåø ìòîåã øàùé';
    $lang_string['nav_next'] = 'äáà';
    $lang_string['nav_back'] = 'ä÷åãí';
    $lang_string['search_title'] = 'çéôåù';
    $lang_string['search_go'] = 'ñò';
    $lang_string['page_generated_in'] = 'äòîåã ðåöø á in %s ùðéåú';
    $lang_string['counter_total'] = 'ëðéñåú ìàúø: '; // New in 0.4.8
    $lang_string['read_more'] = '÷øà òåã...'; // New in 0.4.8

    // SB Functions
    $lang_string['sb_months'] = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
    $lang_string['sb_default_title'] = 'àéï ëåúøú';
    $lang_string['sb_default_author'] = 'àéï ëåúá';
    $lang_string['sb_default_footer'] = 'àéï ôåúø';

    $lang_string['sb_edit'] = 'òøéëä';
    $lang_string['sb_delete'] = 'îçé÷ä';
    $lang_string['sb_permalink'] = 'ôøîìéð÷';
    $lang_string['sb_trackback'] = 'èø÷á÷ñ';
    $lang_string['sb_postedby'] = 'ðùìç òì éãé'; // 0.5.0
    $lang_string['sb_admin'] = 'îðäì'; // 0.5.0
    $lang_string['sb_relatedlink'] = '÷éùåø'; // <-- New in 0.4.6

    $lang_string['sb_add_comment_btn'] = 'äåñó úâåáä';
    $lang_string['sb_read_entry_btn'] = 'äöâ ëúáä'; // 0.5.0
    $lang_string['sb_comment_btn_number_first'] = true;
    $lang_string['sb_comment_btn'] = 'úâåáä';
    $lang_string['sb_comment_view'] = 'öåôä'; // 0.5.0
    $lang_string['sb_comments_plural_btn_number_first'] = true;
    $lang_string['sb_comments_plural_btn'] = 'úâåáåú';
    $lang_string['sb_comments_plural_view'] = 'öôéåú'; // 0.5.0

    // ( 1 view )
    $lang_string['sb_view_counter_pre'] = '';
    $lang_string['sb_view_counter_post'] = ' öåôä';

    // ( 2 views )
    $lang_string['sb_view_counter_plural_pre'] = '';
    $lang_string['sb_view_counter_plural_post'] = ' öôéåú';

    $lang_string['sb_add_link_btn'] = 'äåñó ìéð÷';
    $lang_string['sb_rate_entry_btn'] = 'ãøâ àú äëúáä';

    // Entry Text Editor
    if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
      $lang_string['label_subject'] = "ðåùà:";
      $lang_string['label_insert'] = "äëðñ îéåçã:";
      $lang_string['btn_bold'] = " b ";
      $lang_string['btn_italic'] = " i ";
      $lang_string['btn_image'] = "úîåðä";
      $lang_string['btn_url'] = "ëúåáú àéðèøðè";
      $lang_string['btn_readmore'] = "÷øà òåã"; // 0.4.8
      $lang_string['view_images'] = "äöâ úîåðåú";
      $lang_string['label_entry'] = "ëúáä:";
      $lang_string['btn_preview'] = "&nbsp;úöåâä î÷ãéîä&nbsp;";
      $lang_string['btn_post'] = "&nbsp;ùìç&nbsp;";
      $lang_string['chk_visiblemenu'] = "äöâ áúôøéè";
      $lang_string['file_name'] = "ùí òîåã ñèèé (áàðâìéú åáìé øååçéí)";

      // Javascript Strings
      $lang_string['insert_styles'] = "äëðñ è÷ñè:";
      $lang_string['insert_image'] = "äëðñ àú ëúåáú äúîåðä:";
      $lang_string['insert_url1'] = "äëðñ è÷ñè ììéð÷:";
      $lang_string['insert_url2'] = "äëðñ àú äëúåáú äîìàä ùì äìéð÷:";
      $lang_string['insert_url3'] = "ðôúç áçìåï çãù:";
      $lang_string['form_error'] = "ðà îìà àú ëì äùãåú.";

      // More Javascript Strings
      $lang_string['insert_image_optional'] = 'àåôöéåðìé:';
      $lang_string['insert_image_width'] = 'øåçá (àåôöéåðìé):';
      $lang_string['insert_image_height'] = 'àåøê (àåôöéåðìé):';
      $lang_string['insert_image_popup'] = 'äöâ ôåô-àô áâåãì îìà áìçéöä (àåôöéåðìé):';
      $lang_string['insert_image_float'] = 'ëéååï (àåôöéåðìé):';

      $lang_string['day'] = 'éåí';
      $lang_string['month'] = 'çåãù';
      $lang_string['year'] = 'ùðä';
      $lang_string['hour'] = 'ùòä';
      $lang_string['minute'] = 'ã÷ä';
      $lang_string['second'] = 'ùðéä';
    }

    switch ($page) {
      case 'add':
        // Add Entry
        $lang_string['title'] = "ùìéçú äëúáä";
        $lang_string['instructions'] = "äåñôú ëúáä ìàúø";
        $lang_string['title_ad'] = "Confirm Trackback Pings";
        $lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
        $lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)";
        $lang_string['label_tb_autodiscovery'] = "autodiscovery";
        $lang_string['label_relatedlink'] = "Related Link";
        $lang_string['label_categories'] = "øùéîú ÷èâåøéåú";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "úöåâä î÷ãéîä\òøéëä";
        $lang_string['instructions_preview'] = "ëê ðøàéú äëúáä ùìê.";
        $lang_string['title_update'] = "òãëï ëúáä";
        $lang_string['instructions_update'] = "òøåê ëúáä";
        $lang_string['ok_btn'] = "&nbsp;àéùåø&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;áéèåì&nbsp;";

        // Error Response
        $lang_string['error'] = "<h2>àåôñ!</h2>äëúáä ìà ðùìçä!<br /><br />ãåç ùøú:<br />";
        $lang_string['success'] = "<h2>äëúáä ðùìçä</h2>äëúáä ðùîøä áäöìçä."; // 0.4.8.1
        break;

      case 'add_static':
        // Add Entry
        $lang_string['title'] = "äåñôú òîåã ñèèé";
        $lang_string['instructions'] = "äåñó òîåã ñèèé ìàúø";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "úöåâä î÷ãéîä\òøéëä";
        $lang_string['instructions_preview'] = "ëê ðøàä äòîåã äñèèé ùìê";
        $lang_string['title_update'] = "òãëï òîåã ñèèé";
        $lang_string['instructions_update'] = "òøéëú úåëï";
        $lang_string['form_error'] = "ðà îìà àú ëì äùãåú.";

        // Error Response
        $lang_string['error'] = "<h2>àåôñ!</h2>äúåëï ìà ðùìç!<br /><br />ãåç ùøú:<br />";
        break;

      case 'add_block':
        // Add / Manage Blocks
        $lang_string['title'] = "äåñôä\òøéëú áìå÷éí";
        $lang_string['instructions'] = "äùúîù áúéáä äáàä ìäåñôú áìå÷éí ùéåôéòå áúôøéè.";
        $lang_string['up'] = "ìîòìä";
        $lang_string['down'] = "ìîèä";
        $lang_string['edit'] = "òøåê";
        $lang_string['delete'] = "îç÷";
        $lang_string['block_name'] = "ùí äáìå÷:";
        $lang_string['block_content'] = "úåëï äáìå÷:";
        $lang_string['instructions_edit'] = "àúä ëøâò òåøê àú äáìå÷.";
        $lang_string['instructions_modify'] = "äùúîù áúéáä äáàä ìäåñôä\òøéëä ìáìå÷éí";
        $lang_string['submit_btn_edit'] = "òøåê áìå÷";
        $lang_string['submit_btn_add'] = "äåñó áìå÷";
        $lang_string['form_error'] = "ðà îìà àú ùãä äùí.";
        break;

      case 'add_link':
        $lang_string['static_pages'] = "òîåãéí ñèèéí:";

        // Add / Manage Links
        $lang_string['title'] = "äåñôä\òøéëú ìéð÷éí";
        $lang_string['instructions'] = "äåñó ìéð÷ ìúôøéè áàúø.";
        $lang_string['up'] = "ìîòìä";
        $lang_string['down'] = "ìîèä";
        $lang_string['edit'] = "òøéëä";
        $lang_string['delete'] = "îçé÷ä";
        $lang_string['link_name'] = "ùí äìéð÷:";
        $lang_string['link_url'] = "ëúåáú äìéð÷:";
        $lang_string['instructions_edit'] = "àúä ëøâò òåøê ìéð÷:";
        $lang_string['instructions_modify'] = "ìçõ ëàï ìòøéëú ìéð÷:";
        $lang_string['submit_btn_edit'] = "òøéëú ìéð÷";
        $lang_string['submit_btn_add'] = "äåñó ìéð÷";
        $lang_string['form_error'] = "ðà îìà àú ëì äùãåú.";
        break;

      case 'categories':

        // Add / Manage Links
        $lang_string['title'] = "äåñôä\òøéëú ÷èâåøéåú";
        $lang_string['instructions'] = "Use the form below to add and edit your categories. Each category item should be in this format 'category name (id number)'. Indent items with spaces to create heirarchies.<br /><br /><b>Example:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technology (2)<br />";
        $lang_string['error'] = "ùâéàä";
        $lang_string['current_categories'] = "÷èâåøéåú ðåëçéåú";
        $lang_string['no_categories_found'] = "ìà ðîöàå ÷èâåøéåú";
        $lang_string['category_list'] = "øùéîú ÷èâåøéåú:";
        $lang_string['validate'] = "úå÷ó";
        $lang_string['submit_btn'] = "&nbsp;àéùåø&nbsp;";
        break;

      case 'colors':
        // Change Colors
        $lang_string['title'] = "ùéðåé öáòéí";
        $lang_string['instructions'] = "ùðä àú öáòé äàúø.";
        $lang_string['bg_color'] = "ø÷ò ëììé";
        $lang_string['main_bg_color'] = "ø÷ò áòîåã";
        $lang_string['border_color'] = "îñâøú äòîåã";
        $lang_string['inner_border_color'] = "îñâøú ôðéîéú";
        $lang_string['header_bg_color'] = "ø÷ò øàù äòîåã";
        $lang_string['header_txt_color'] = "è÷ñè øàù äòîåã";
        $lang_string['menu_bg_color'] = "ø÷ò úôøéè";
        $lang_string['footer_bg_color'] = "ø÷ò òîåã úçúåï";
        $lang_string['txt_color'] = "è÷ñè ëììé";
        $lang_string['headline_txt_color'] = "è÷ñè ëåúøú";
        $lang_string['date_txt_color'] = "è÷ñè úàøéê";
        $lang_string['footer_txt_color'] = "è÷ñè òîåã úçúåï";
        $lang_string['link_reg_color'] = "ìéð÷";
        $lang_string['link_hi_color'] = "ìéð÷ áîòáø òëáø";
        $lang_string['link_down_color'] = "ìéð÷ ôòéì";

        // More Colors
        $lang_string['entry_bg'] = "ø÷ò ëúáä";
        $lang_string['entry_title_bg'] = "ø÷ò ëåúøú ëúáä";
        $lang_string['entry_border'] = "îñâøú ëúáä";
        $lang_string['entry_title_text'] = "è÷ñè ëåúøú ëúáä";
        $lang_string['entry_text'] = "è÷ñè ëúáä";

        $lang_string['static_bg'] = "ø÷ò òîåã ñèèé"; // 0.5.0
        $lang_string['static_title_bg'] = "ø÷ò ëåúøú òîåã ñèèé"; // 0.5.0
        $lang_string['static_border'] = "îñâøú òîåã ñèèé"; // 0.5.0
        $lang_string['static_title_text'] = "è÷ñè ëåúøú òîåã ñèèé"; // 0.5.0
        $lang_string['static_text'] = "è÷ñè òîåã ñèèé"; // 0.5.0

        $lang_string['comment_bg'] = "ø÷ò úâåáåú"; // 0.5.0
        $lang_string['comment_title_bg'] = "ø÷ò ëåúøú úâåáåú"; // 0.5.0
        $lang_string['comment_border'] = "îñâøú úâåáåú"; // 0.5.0
        $lang_string['comment_title_text'] = "è÷ñè ëåúøú úâåáåú"; // 0.5.0
        $lang_string['comment_text'] = "è÷ñè úâåáåú"; // 0.5.0

        $lang_string['menu_bg'] = "ø÷ò úôøéè";
        $lang_string['menu_title_bg'] = "ø÷ò ëåúøú úôøéè";
        $lang_string['menu_border'] = "îñâøú úôøéè";
        $lang_string['menu_title_text'] = "è÷ñè ëåúøú úôøéè";
        $lang_string['menu_text'] = "è÷ñè úôøéè";
        $lang_string['menu_link_reg_color'] = "ìéð÷ úôøéè";
        $lang_string['menu_link_hi_color'] = "ìéð÷ úôøéè áîòáø òëáø";
        $lang_string['menu_link_down_color'] = "ìéð÷ úôøéè ôòéì";

        // Submit
        $lang_string['color_preset'] = "òøëåú öáò:";
        $lang_string['scheme_name'] = "Enter a custom color scheme name:";
        $lang_string['scheme_file'] = "äëðñ ùí ìòøëú äöáò(áìé øååçéí)";
        $lang_string['save_btn'] = "&nbsp;ùîåø&nbsp;";
        $lang_string['form_error'] = "ìà äëðñú ùí ìòøëú äöáò ùìê.";
        $lang_string['submit_btn'] = "&nbsp;ùìç&nbsp;";
        $lang_string['theme_doesnt_allow_colors'] = 'òøëú äðåùà äðåëçéú ìà úåîëú áòøëåú öáò.';

        // Error Response
        $lang_string['error'] = "<h2>àåôñ!</h2>äîéãò ìà ðéùîø.<br /><br />ãåç ùøú:<br />";
        $lang_string['success'] = "<h2>äöáòéí òåãëðå!</h2>äîéãò ðùîø áäöìçä"; // New for 0.4.8.1
        break;

      case 'comments':
        // Comments
        $lang_string['name'] = "ùí:"; //New in 0.4.6.2
        $lang_string['email'] = "ëúåáú ãåàø àì÷èøåðé:"; //New in 0.4.6.2
        $lang_string['homepage'] = "òîåã äáéú:"; //New in 0.4.6.2
        $lang_string['comment'] = "úâåáä:"; //New in 0.4.6.2
        $lang_string['IPAddress'] = "ëúåáú àéé ôé:";  // New for 0.4.6.2
        $lang_string['useragent'] = "òåæø îùúîù:";  // New for 0.4.6.2
        $lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2

        $lang_string['comment_capcha'] = "àðèé-ñôàí <b>%s</b>"; // 0.4.2
        $lang_string['title'] = "úâåáåú";
        $lang_string['header'] = "äåñó úâåáä";
        $lang_string['instructions'] = "úåëï äúâåáä.";
        $lang_string['comment_name'] = "ùí:";
        $lang_string['comment_email'] = "ëúåáú ãåàø àì÷èøåðé:";
        $lang_string['comment_url'] = "ëúåáú àéðèøðè:";
        $lang_string['commentposted'] = "úâåáä çãùä ðùìçä ä: ";  // New for 0.4.6.2
        $lang_string['comment_remember'] = "æëåø àåúé:";
        $lang_string['comment_text'] = "úâåáä:";
        $lang_string['post_btn'] = "&nbsp;ùìç úâåáä&nbsp;";
        $lang_string['delete_btn'] = "îç÷";
        $lang_string['ban_btn'] = "çñåí àéé ôé"; // New for 0.4.8
        $lang_string['expired_comment1'] = "àðå îöèòøéí. úâåáåú çãùåú ìà îàåùøåú àçøé "; // New for 0.4.8
        $lang_string['expired_comment2'] = " éîéí."; // New for 0.4.8

        $lang_string['blacklisted'] = "äàéé ôé ùìê çñåí."; // New for 0.4.8
        $lang_string['bannedword'] = "àúä çñåí îäîòøëú. äúâåáåú ùìê ìà éùìçå."; // New for 0.4.8
        $lang_string['nocomments'] = "úâåáåú ìà æîéðåú ìëúáä æå"; // New for 0.4.9
        $lang_string['email_moderator'] = "Moderation is turned on for this blog. Your comment will require the administrators approval before it will be visible."; // New for 0.5.0
        $lang_string['user_notice_mod'] = "Moderation is turned on for this blog. Your comment will require the administrators approval before it will be visible."; // new for 0.5.0

        $lang_string['return_to_comments'] = 'çæåø ìúâåáåú';

        // Error Response
        $lang_string['error_add'] = "<h2>àåôñ!</h2>äúâåáä ìà ðùìçä<br /><br />ãåç ùøú:<br />";
        $lang_string['error_delete'] = "<h2>àåôñ!</h2>äúâåáä ìà ðîç÷ä.<br /><br />ãåç ùøú:<br />";
        $lang_string['error_ban'] = "<h2>àåôñ!</h2>ìà äöìçðå ìçñåí àú äàéé ôé<br /><br />ãåç ùøú:<br />";
        $lang_string['success_add'] = "<h2>äúâåáä ðùìçä!</h2>úâåáúê ðùìçä áäöìçä."; // New for 0.4.8.1
        $lang_string['success_delete'] = "<h2>äúâåáä ðîç÷ä!</h2>äúâåáä ðîç÷ä!"; // New for 0.4.8.1
        $lang_string['success_ban1'] = "<h2>àéé ôé ðçñí!";
        $lang_string['success_ban2'] = "</h2>ìäñøú äçñéîä äùúîù áàôùøåéåú."; // New for 0.4.8.1
        $lang_string['form_error'] = "ðà îìà àú ëì äùãåú.";
        $lang_string['error_noip'] = "No IP Provided for Blacklist Request.";

        $lang_string[ 'error_comments_disabled' ] = '<h2>ùâéàä</h2>äìå! úâåáåú çñåîåú ááìåâ äæä! äàí àúä ñôàí-áåè?'; // New 0.5.0
        $lang_string[ 'error_no_match' ] = '<h2>ùâéàä!</h2>äàéé ôé ùìê ìà úåàí àú äàéé ôé ùì äùåìç. äàí àúä ñôàí-áåè?'; // New 0.5.0
        $lang_string[ 'error_fields_missing' ] = '<h2>Error!</h2>Missing the following fields: '; // New 0.5.0
        $lang_string[ 'error_spambot' ] = '<h2>Error!</h2>Capcha data is missing. Are you a spambot?'; // New 0.5.0
        $lang_string[ 'error_capcha' ] = '<h2>Error!</h2>The capcha you entered is incorrect.'; // New 0.5.0
        $lang_string[ 'error_bad_data' ] = '<h2>Error!</h2>Post data is not valid. Are you a hacker?'; // New 0.5.0
        $lang_string[ 'error_entry_missing' ] = '<h2>Error!</h2>You are trying to comment on an entry that doesn\'t exist'; // New 0.5.0
        $lang_string[ 'error_empty_text' ] = '<h2>Error!</h2>You didn\'t enter any comments or your name.'; // New 0.5.0
        break;

      case 'delete':
        $lang_string['title'] = "îçé÷ú úåëï";
        $lang_string['instructions'] = "ðå ååãà ùàúä áàîú øåöä ìîçå÷ àú æä. ìà ðéúï ìùçæø úåëï.";
        $lang_string['ok_btn'] = "&nbsp;àéùåø&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;áéèåì&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>Couldn't delete entry.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>äúåëï ðîç÷!</h2>äúåëï ðîç÷."; // New for 0.4.8.1
        break;

      case 'delete_static':
        $lang_string['title'] = "îçé÷ú òîåã ñèèé";
        $lang_string['instructions'] = "This is the static page you are about to delete. Please make sure you really want to get rid of it, there's no undo...";
        $lang_string['ok_btn'] = "&nbsp;àéùåø&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;áéèåì&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>Couldn't delete entry.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>äòîåã äñèèé ðîç÷</h2>äòîåã äñèèé ðîç÷"; // New for 0.4.8.1
        break;

      case 'image_list':
        $lang_string['title'] = "øùéîú úîåðåú";
        $lang_string['instructions'] = "Click on the links below to view images.<br /><br />To add an image to your entry:<br />1) Control-click a link and choose 'Copy Link to Clipboard'.<br />2) Return to the Add Entry or Edit Entry page.<br />3) Click the 'img' button and paste the URL into the window.";
        break;

      case 'info':
        $lang_string['title'] = "Meta-Data Information";
        $lang_string['instructions'] = "The information below is used for &quot;meta-data&quot;, which helps search engines correctly find and identify your site. Information may also be used in RSS feeds.";
        $lang_string['info_keywords'] = "Keywords: (List of keywords separated by commas.)";
        $lang_string['info_description'] = "Description: (An abstract or a free-text description of your site.)";
        $lang_string['info_copyright'] = "Rights: (Copyright statement, or link to document containing information.)";
        $lang_string['tracking_code'] = "External Tracking Code: (HTML code that needs to be run on the main page (in the header tags for safety) only for every user that comes to the page i.e. Google Analytics)";
        $lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>ääâãøåú ðùîøå!</h2>äîéãò ðùîø!"; // New for 0.4.8.1
        $lang_string['form_error'] = "ðà îìà àú ùãåú äëåúøú åäëåúá.";
        break;

      case 'index':
        // Index
        break;

      case 'static':
        // Index
        break;

      case 'rating':
        $lang_string['error'] = "<h2>àåôñ!</h2>ìà äöìçðå ìùîåø àú äîéãò.<br /><br />ãåç ùøú:<br />";
        $lang_string['success'] = "<h2>äöáòä ðùìçä!</h2>äöáòúê ðùîøä."; // New for 0.4.8.1
        break;

      case 'login':
        $lang_string['upgrade'] = "<h2>ùãøâ</h2>"; // New 0.3.8
        $lang_string['upgrade_count'] = "%n comment files need to be upgraded:"; // New 0.3.8
        $lang_string['upgrade_url'] = "Upgrade Comments"; // New 0.3.8
        $lang_string['title'] = "äúáçøåú";
        $lang_string['instructions'] = "äëðñ ùí îùúîù åñéñîà";
        $lang_string['username'] = "ùí îùúîù:";
        $lang_string['password'] = "ñéñîà";
        $lang_string['submit_btn'] = "&nbsp;àéùåø&nbsp;";
        // Success
        $lang_string['success'] = "<h2>ëì äëáåã!</h2>àúä îçåáø!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>àåôñ!</h2>ðà åãà ùäëðñú àú äôøèéí äðëåðéí<p />";
        $lang_string['inactive_account'] = "<h2>àëìú áåìáåì!</h2>äçùáåï ùìê ðçñí!<p />";
        $lang_string['form_error'] = "ìà îéìéú àú ëì äùãåú...";
        break;

      case 'logout':
        $lang_string['title'] = "äúðú÷";
        $lang_string['error'] = "<h2>áéé!</h2>äúðú÷ú îäîòøëú!<p />";
        $lang_string['error_no_cookie'] = "<h2>áéé!</h2>àúä îðåú÷!<p />"; // New 0.5.0
        $lang_string['success'] = "<h2>áéé áéé!</h2>àúä òëùéå îðåú÷.<p />(îéã úåòáø ìòîåã äøàùé)<p />";
        break;

      case 'forms':
        $lang_string['title'] = "";
        $lang_string['instructions'] = "";
        // Error Response
        $lang_string['error'] = "<h2>àåôñ!</h2>äîéãò ìà ðùîø! ðú÷ìå ááòéä!<br /><br />ãåç ùøú:<br />";
        break;

      case 'set_login':
        $lang_string['title'] = "ùðä ùí îùúîù &amp; ñéñîà";
        $lang_string['instructions'] = "äëðñ àú ùí äîùúîù åäñéñîà áäí àúä øåöä ìäùîù";
        $lang_string['username'] = "ùí îùúîù:";
        $lang_string['password'] = "ñéñîà:";
        $lang_string['submit_btn'] = "&nbsp;àéùåø&nbsp;";
        // Success
        $lang_string['success'] = "<h2>äöìçä âãåìä!</h2>ùí äîùúîù ùìê ôòéì!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>àåôñ!</h2>ðú÷ìðå ááòéä áùîéøú äîéãò òí ùí äîùúîù àå äñéñîà ùìê.<br /><br />ãåç ùøú:<br />";
        $lang_string['form_error'] = "ðà îìà àú ëì äùâåú.";
        $lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
          and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
          exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
          to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
        break;

      case 'install00':
        $lang_string['title'] = "äú÷ðú äîòøëú";
        $lang_string['instructions'] = "ùìá à";
        $lang_string['blog_choose_language'] = "áçø ùôä:";
        $lang_string['submit_btn'] = "&nbsp;àéùåø&nbsp;";
        break;

      case 'install01':
        $lang_string['title'] = "ùìá á";
        $lang_string['instructions'] = "
        Thank you for choosing Simple PHP Blog!<br /><br />Simple PHP Blog is a light-weight blogging system. It requires PHP 4.1 or greater, and write-permissions on the server. All information is stored in flat-files, so no database is required.<br /><br />
        In order to begin, Simple PHP Blog needs to create three folders (<b>config</b>, <b>content</b>, and <b>images</b>) in which to store your information. After that, you will create your password and then you can start blogging.<br /><br />
        <b>ìçõ ëàï ìäúçìú ääú÷ðä:</b>";
        $lang_string['begin'] = "[ äúçì äú÷ðä ]";
        break;

      case 'install02':
        $lang_string['title'] = "äú÷ðä";
        $lang_string['instructions'] = "îðñä ìéöåø <b>îéãò</b>, <b>úåëï</b>, å<b>úîåðåú</b> úé÷éåú:";
        $lang_string['folder_exists'] = "äúé÷éåú ÷ééîåú ëáø!...";
        $lang_string['folder_failed'] = "àåôñ.. ìà äöìçðå ìéöåø úé÷éåú...";
        $lang_string['folder_success'] = "äúé÷éåú ðåöøå áäöìçä...";
        // Help
        $lang_string['help'] = "
        <h2>àåôñ!</h2>
        Could not create one or more folders!<br /><br />This is most likely because:<br />
        <ol>
        <li><b>Write Permissions</b> aren't set to allow <b>Read/Write</b> access.</li>
        <li>The <b>UID</b>'s (user ID's) of all files and folder must match.</li>
        </ol>
        Follow the trouble-shooting instructions below and click <b>Try Again</b>:<br />
        <ol>
        <li>Manually create the following folders: <b>config</b>, <b>content</b>, and <b>images</b>.</li>
        <li>Enabled <b>Write Permissions</b> on the folders: In your FTP program, Owner, User, and World should have <b>Read</b> and <b>Write</b> access. <i>(You may need to contact your service provider to change these...)</i></li>
        <li>Make sure the UID's of all your files and folders are the same. <i>(You may need to contact your service provider to change these...)</i></li>
        </ol>";
        $lang_string['try_again'] = "[ Try Again ]";
        // Success
        $lang_string['success'] = "<h2>Success!</h2>Folders created successfully!<p /><b>Click below to continue:</b>";
        $lang_string['continue'] = "[ Continue ]";
        break;

      case 'install03':
        $lang_string['supported'] = "<b>äùøú ùìê úîåê áúëåðåú äáàåú:</b>";
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
        $lang_string['title'] = "öåø çùáåï";
        $lang_string['instructions'] = "öåø ùí îùúîù åñéñîà.";
        $lang_string['username'] = "ùí îùúîù:";
        $lang_string['password'] = "ñéñîà:";
        $lang_string['submit_btn'] = "&nbsp;àéùåø&nbsp;";
        // Success
        $lang_string['success'] = "<h2>îæì èåá!</h2>ëì äëáåã<p />";
        $lang_string['btn_setup'] = "[ äú÷ðä ]";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />Server Reported:<br />";
        $lang_string['form_error'] = "Please complete the Username and Password fields.";
        break;

      case 'install04':
        $lang_string['title'] = "öåø ÷åáõ ñéñîà";
        $lang_string['instructions'] = "öåø ÷åáõ ñéñîà:<br />
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
        $lang_string['title'] = "äúçáøåú";
        $lang_string['instructions'] = "äëðñ ùí îùúîù åñéñîà";
        $lang_string['username'] = "ùí îùúîù:";
        $lang_string['password'] = "ñéñîà";
        $lang_string['submit_btn'] = "&nbsp;àéùåø&nbsp;";
        // Success
        $lang_string['success'] = "<h2>îæì èåá!</h2>àúä îçåáø.<p />
        ìçõ ëàï ìëðéñä ì<b>òîåã ääâãøåú</b> áå úåëì ìòøåê àú äâãøåú äàúø.<p />
        <i>òëùéå ùääú÷ðä äùåìä îç÷ àú ÷áöé ääú÷ðä <b>installXX.php</b>  îäàúø ùìê. (i.e. install00.php through install06.php)</i><p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>àåôñ!</h2>äôøèéí ùäëðñú ìà ðëåðéí<p />";
        $lang_string['form_error'] = "îìà àú ëì äùãåú.";
        // Success
        $lang_string['btn_setup'] = "[ äú÷ðä ]";
        $lang_string['btn_try_again'] = "[ ðñä ùåá ]";
        break;

      case 'setup':
        $lang_string['title'] = "äâãøåú";
        $lang_string['instructions'] = "äâãøåú äáìåâ.";
        $lang_string['blog_title'] = "ëåúøú äáìåâ:";
        $lang_string['blog_header'] = "ëúåáú äìåâå : images/blogheader.jpg";
        $lang_string['blog_title'] = "ùí äáìåâ:";
        $lang_string['blog_author'] = "ëåúá:";
        $lang_string['blog_email'] = "ëúåáú ãåàø àì÷èøåðé"; // Updated 0.4.7
        $lang_string['blog_avatar'] = "ëúåáú ñéîìåï àéùé: images/avatar.jpg ."; // <-- New 0.4.7
        $lang_string['blog_footer'] = "òîåã úçúåï:";
        $lang_string['blog_choose_language'] = "áçø ùôä:";
        $lang_string['blog_enable_comments'] = "àôùø úâåáåú îùúîùéí";
        $lang_string['blog_comments_popup'] = "úâåáåú ðôúçåú áçìåï çãù";
        $lang_string['blog_search_top'] = "äöâ çéôåù áëúáåú (áî÷åí áúôøéè)"; // New for 0.5.0
        $lang_string['blog_enable_static_block'] = "Show a defined block as the first entry of blog entries: "; // New for 0.5.0
        $lang_string['static_block_border'] = 'äöâ îñâøú'; // New for 0.5.0
        $lang_string['static_block_noborder'] = 'àì úöéâ îñâøú'; // New for 0.5.0 
        $lang_string['blog_enable_voting'] = "äöâ ãéøåâ ëúáåú";
        $lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
        $lang_string['blog_enable_calendar'] = "äöâ ìåç ùðä"; // New for 0.4.6
        $lang_string['blog_enable_archives'] = "äöâ àøëéåï áìå÷éí"; // New for 0.4.8
        $lang_string['blog_enable_counter'] = "äöâ ÷àåðèø áúôøéè"; // New for 0.4.8
        $lang_string['blog_counter_hours'] = "Number of hours to delay before hits are counted again (based on specific ip address):"; // New for 0.4.8
        $lang_string['blog_enable_login'] = "äöâ ìéð÷ äúçáøåú (àðà \"login.php\" ÷åãí...)"; // New for 0.4.8
        $lang_string['blog_enable_title'] = "Enable Plain Text Title Block (Clear checkbox if the title is in the header graphic)"; // New for 0.4.6
        $lang_string['blog_enable_permalink'] = "äöâ ôøîìéð÷ áëúáåú"; // New for 0.4.6
        $lang_string['blog_enable_capcha'] = "äöâ àðèé-ñôàí"; // New for 0.4.8
        $lang_string['blog_footer_counter'] = "äöâ ÷àåðèø áúçúéú äòîåã"; // New for 0.4.8
        $lang_string['blog_enable_capcha_image'] = "úîåðåú àðèé-ñôàí \ è÷ñè àðèé-ñôàí"; // New for 0.4.8
        $lang_string['blog_enable_stats'] = "äöâ ñèèéñèé÷ä áúôøéè"; // New for 0.4.7
        $lang_string['blog_enable_lastcomments'] = "äöâ øùéîú úâåáåú àçøåðåú"; // New for 0.4.7
        $lang_string['blog_enable_lastentries'] = "äöâ øùéîú úâåáåú ðöôåú"; // New for 0.4.7
        $lang_string['blog_email_notification'] = "ùìç àéîééì ìùåìçé úâåáåú";
        $lang_string['blog_send_pings'] = "Send weblog &quot;pings&quot;";
        $lang_string['blog_ping_urls'] = "Enter full URL (i.e. http://rpc.weblogs.com/RPC2) of service to &quot;ping&quot;.<br />(You can enter more than one address separated by commas.)";
        $lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
          blog know that you are linking to them by sending them a trackback ping. See who is linking to
          your blog by receiving trackback pings.<br />
           You can either enter the URIs to ping manually, or try to do it automatically through
           Auto-Discovery.";
        $lang_string['blog_trackback_enabled'] = "Enable trackback in my blog";
        $lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs";
        $lang_string['blog_max_entries'] = "Maximum Entries to Display:";
        $lang_string['blog_comment_tags'] = "Tags to Allow in Comments:";
        $lang_string['blog_gzip_about'] = "
          Since PHP 4.0.4, PHP has had the ability to read and write gzip (.gz) compressed files,
          thus saving disk-space. It can also transparently compress pages that are sent to browsers
          which support gzip compression, thus saving bandwidth.<br />
          <br />
          Zlib support in PHP is not enabled by default. If the checkboxes are disabled, then your
          installation of PHP does not support the Zlib extension.";
        $lang_string['blog_enable_gzip_txt'] = "Enable GZIP Compression for Database Files";
        $lang_string['blog_enable_gzip_output'] = "Enable GZIP Compression for HTTP Output";
        $lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>àåôñ!</h2>äîéãò ìà ðùîø.<br /><br />ãåç ùøú:<br />";
        $lang_string['success'] = "<h2>ääâãøåú ðùîøå!</h2>ääâãøåú ðùîøå áäöìçä."; // New for 0.4.8.1
        $lang_string['form_error'] = "ðà îìà àú ùãåú äëåúøú åäëåúá.";
        $lang_string['label_entry_order'] = "ñãø äëúáåú:";
        $lang_string['select_new_to_old'] = "ëúáåú çãùåú øàùåðåú";
        $lang_string['select_old_to_new'] = "ëúáåú éùðåú øàùåðåú";
        $lang_string['label_comment_order'] = "ñãø äúâåáåú:";
        $lang_string['cal_sunday'] = "Sunday";
        $lang_string['cal_monday'] = "Monday";
        $lang_string['label_calendar_start'] = "Calendar Week Start Day";
        $lang_string['title_sidebar'] = "úôøéè"; // New in 0.4.7
        $lang_string['title_comments'] = "úâåáåú"; // New in 0.4.7
        $lang_string['title_trackback'] = "èø÷á÷ñ"; // New in 0.4.7
        $lang_string['title_compression'] = "Compression"; // New in 0.4.7
        $lang_string['title_entries'] = "ëúáåú"; // New in 0.4.7
        $lang_string['title_general'] = "ëììé"; // New in 0.4.7
        $lang_string['title_language'] = "ùôä"; // New in 0.4.7
        $lang_string['blog_comment_days_expiry'] = "Comments Allowed For How Many Days? (0 means no expiry)"; // New in 0.4.8
        $lang_string['blog_comments_moderation'] = "Require comment entries to be approved by logged in user before public
          (always visible to logged in user)"; // New in 0.5.0
        $lang_string['comment_moderation'] = "àôùøåéåú ðéäåì"; // New in 0.5.0
        break;
      case 'comment_moderation':
        $lang_string['title'] = "Unmodded Comments";
        $lang_string['instructions'] = "This is a list of all comments are not available to users that are not logged into the
          blog because they have not been approved by a moderator.";
        $lang_string['header'] = "Moderation Listing";
        $lang_string['enteredby'] = "ðëúá òì éãé: ";
        $lang_string['entrydate'] = "úàøéê ëúáä: ";
        $lang_string['blogentrytitle'] = "Blog Entry Title: ";
        $lang_string['enteredcontent'] = "úåëï: ";
        $lang_string['totalunmodded'] = " total item(s) waiting for moderator update.";
        $lang_string['mod_approve'] = "[Approve] ";
        $lang_string['mod_delete'] = "[Delete]";
        break;
      case 'moderation':
        $lang_string['title'] = "àôùøåéåú ðéäåì";
        $lang_string['instructions'] = "àúä éëåì ìòøåê àú äâãåú äðéäåì ëàï.";
        $lang_string['submit_btn'] = "&nbsp;ùîåø äâãåú ðéäåì&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>ääâãøåú ðùîøå!</h2>äîéãò äùîø áäöìçä."; // New for 0.4.8.1
        $lang_string['banned_address_list_title'] = "<h2>ëúåáåú àéé ôé çñåîåú</h2>";
        $lang_string['banned_address_list'] = "Below is a list of numerical ip addresses that have been banned from entering comments. Each ip is on a separate line and must be numbers (not DNS names). When logged in, IP's can be banned directly from the comments view.";
        $lang_string['banned_word_list_title'] = "<h2>îéìéí çñåîåú</h2>";
        $lang_string['banned_word_list'] = "Below is a list of words that are not allowed to be in the url or the text. Each word or group of words is on a separate line. The comments will attempt to match each line exactly in order to enact the ban.";
        break;
      case 'trackbacks':
        // Trackbacks
        $lang_string['title'] = "èø÷á÷ñ";
        $lang_string['header'] = "ëúåáú èø÷á÷ñ ìëúáä äæàú:";
        $lang_string['delete_btn'] = "îçé÷ä";
        // Error Response
        $lang_string['error_add'] = "Error storing trackback data.";
        $lang_string['error_delete'] = "<h2>Whoops!</h2>Trackback not deleted. I ran into a problem while deleting the trackback.<br /><br />ãåç ùøú:<br />";
        $lang_string['success_delete'] = "<h2>Trackback Deleted!</h2>The trackback link has been deleted."; // New for 0.4.8.1
        break;

      case 'options':
        $lang_string['title'] = "àôùøåéåú";
        $lang_string['instructions'] = "Use the form below to customize the date and time display for blog and comment entries. You can select 12 or 24 hour clocks. Short or long date format. And the <b>Preview</b> areas update automatically to show you how you formatting will appear.";
        // Long Date
        $lang_string['ldate_title'] = "ôåøîè úàøéê àøåê:";
        $lang_string['weekday'] = "éîé äùáåò";
        $lang_string['month'] = "çåãù";
        $lang_string['day'] = "éåí";
        $lang_string['year'] = "ùðä";
        $lang_string['none'] = "ëìåí";
        // Short Date
        $lang_string['sdate_title'] = "ôåøîè úàøéê ÷öø:";
        $lang_string['s_month'] = "çåãù";
        $lang_string['s_mon'] = "MMM";
        $lang_string['s_day'] = "éåí";
        $lang_string['s_year'] = "ùðä";
        $lang_string['zero_day'] = "Leading zero for day";
        $lang_string['show_century'] = "äöâ òùåø";
        // Time
        $lang_string['time_title'] = "ôåøîè æîï:";
        $lang_string['12hour'] = "ùòåï 12 ùòåú";
        $lang_string['24hour'] = "ùòåï 24 ùòåú";
        $lang_string['before_noon'] = "ìôðé çöåú";
        $lang_string['after_noon'] = "àçøé çöåú";
        // Date
        $lang_string['date_title'] = "ôåøîè äöâú úàøéê:";
        $lang_string['long_date'] = "úàøéê àøåê";
        $lang_string['short_date'] = "úàøéê ÷öø";
        $lang_string['time'] = "æîï";
        // Menu
        $lang_string['menu_title'] = "ôåøîè äöâú úàøéê áúôøéè:";
        $lang_string['long_date'] = "úàøéê àøåê";
        $lang_string['short_date'] = "úàøéê ÷öø";
        // Used in multiple places
        $lang_string['zero_day'] = "Leading zero for day";
        $lang_string['zero_month'] = "Leading zero for Month";
        $lang_string['zero_hour'] = "Leading zero for Hour";
        $lang_string['separator'] = "Separator:";
        $lang_string['preview'] = "úöåâä î÷ãéîä:";
        $lang_string['server_offset'] = "Server Offset:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;ùîåø&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>àåôñ!</h2>äîéãò ìà ðùîø<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>äàôùøåéåú ðùîøå!</h2>îéãò ðùîø áäöìçä."; // New for 0.4.8.1
        break;

      case 'themes':
        $lang_string['title'] = "òøëåú ðåùà";
        $lang_string['instructions'] = "äùúîù áúôøéè äðôúç ìáçéøú òøëú ðåùà.";
        // Themes
        $lang_string['choose_theme'] = "òøëåú ðåùà:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;ùîåø&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>òøëú ðåùà ðáçøä!</h2>äîéãò ðùîø áäöìçä."; // New for 0.4.8.1
        break;

      case 'upload_img':
        $lang_string['title'] = "äòìä úîåðä";
        $lang_string['instructions'] = "ìçõ òì äëôúåø åáçø úîåðä.";
        $lang_string['select_file'] = "áçø ÷åáõ:";
        $lang_string['upload_btn'] = "äòìä";
        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>Couldn't upload image. Here's some more information:<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>äúîåðä äåòìúä!</h2>äîéãò ðùîø."; // New for 0.4.8.1
        break;

      case 'search':
        $lang_string['title'] = "Search Results";
        $lang_string['instructions'] = "Search results for <b>%string</b>:";
        $lang_string['not_found'] = "No results found";
        break;

      case 'contact':
        $lang_string['contact_capcha'] = "Anti-Spam: Enter "; // 0.4.2
        $lang_string['title'] = "öåø ÷ùø";
        $lang_string['instructions'] = "îìà àú äùãåú äáàéí:";
        $lang_string['form_error'] = "Please complete the Subject and Comment fields.";
        $lang_string['name'] = "ùí:";
        $lang_string['email'] = "ãåàø àì÷èøåðé:";
        $lang_string['subject'] = "ðåùà:";
        $lang_string['comment'] = "Comment:";
        $lang_string['submit_btn'] = "&nbsp;ùìç&nbsp;";
        $lang_string['success'] = "<h2>äöìçä!</h2>äåãòúê ðùìçä.<p />";
        $lang_string['failure'] = "<h2>ùâéàä!</h2>äåãòúê ìà ðùìçä. ëøåá ìåãàé ùäàðèé-ñôàí ìà ðëúá ëøàåé.<p />";
        $lang_string['contactsent'] = "ðùìç ãøê: ";  // New for 0.4.6
        $lang_string['IPAddress'] = "ëúåáú àéé ôé:";  // New for 0.4.6
        $lang_string['useragent'] = "îðäì îùúîù:";  // New for 0.4.6
        $lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
        break;

      case 'stats':
        $lang_string["title"] = "ñèèéñèé÷ä";
        $lang_string["general"] = "ëììé";
        $lang_string["entry_info"] = "<b>%s</b> entries using <b>%s</b> words stored in <b>%s</b> bytes";
        $lang_string["comment_info"] = "<b>%s</b> comments using <b>%s</b> words stored in <b>%s</b> bytes";
        $lang_string["trackback_info"] = "<b>%s</b> trackbacks stored in <b>%s</b> bytes";
        $lang_string["static_info"] = "<b>%s</b> static pages using <b>%s</b> words stored in <b>%s</b> bytes";
        $lang_string["most_viewed_entries"] = "10 Most viewed entries";
        $lang_string["most_commented_entries"] = "10 Most commented entries";
        $lang_string["most_trackbacked_entries"] = "10 Most trackbacked entries";
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

      case 'emoticons':  // New for 0.4.7
        $lang_string['title'] = "àéé÷åðéí";
        $lang_string['instructions'] = "
          Check the emoticons you want to use. Write in the box the Tags you want
          to be replaced by the image. Multiple tags may be used, just separated them
          by spaces.<br /><br />

          ìãåâîà:<br />
          :) :-) :SMILE: :HAPPY:<br /><br />

          <i>(It is highly recommended that you make the Tags longer than 2 characters,
          otherwise unexpected substitutions may occur.)</i>";
        $lang_string["upload_instructions"] = 'Upload New Emoticon:';
        $lang_string["upload_success"] = 'Success! Image uploaded successfully!';
        $lang_string["upload_error"] = 'Error! Image was not uploaded.';
        $lang_string["upload_invalid"] = 'Error! Invalid image file. Image must be a png, jpg, or gif.';
        $lang_string["save_success"] = 'Emoticon preferences saved successfully!';
        $lang_string["save_error"] = 'Error! Emoticon preferences not saved.';
        $lang_string["save_button"] = 'ùîåø àéé÷åðéí';
        break;

      case 'archives': // New for 0.4.8
        $lang_string['title'] = "àøëéåðéí";
        $lang_string['showall'] = "äöâ äëì";
        break;

      case 'manage_users':
        $lang_string['title'] = "òøéëú îùúîùéí";
        $lang_string['instructions'] = "òøåê îùúîùéí";
        $lang_string['fulladminerror'] = "àúä çééá ìäéåú îðäì øàùé áùáéì æä!";
        $lang_string['header_user'] = "îùúîù: ";
        $lang_string['header_property'] = "Property";
        $lang_string['header_value'] = "Value";
        $lang_string['prop_username'] = "ùí îùúîù:";
        $lang_string['prop_fullname'] = "äöâ ùí:";
        $lang_string['prop_password'] = "ñéñîà:";
        $lang_string['prop_email'] = "ãåàø àì÷èøåðé:";
        $lang_string['prop_avatar'] = "ëúåáú ñéîìåï:";
        $lang_string['prop_state'] = "ôòéì?";
        $lang_string['prop_sec_Moderate'] = "ðäì úâåáåú?";
        $lang_string['prop_sec_Delete'] = "îç÷ àú ëì äëúáåú?";
        $lang_string['prop_sec_Edit'] = "òøåê àú ëì ëúáåú?";
        $lang_string['btn_SaveChanges'] = "ùîåø ùéðåééí";
        $lang_string['btn_CreateUser'] = "öåø îùúîù";
        $lang_string['btn_Cancel'] = "áéèåì";  
        $lang_string['grid_header'] = "øùéîú îùúîùéí";
        $lang_string['grid_login'] = 'äúçáø';
        $lang_string['grid_email'] = 'ãåàø àì÷èøåðé';
        $lang_string['grid_avatar'] = 'ñéîìåï';
        $lang_string['grid_state'] = 'ôòéì?';
        $lang_string['btn_modify'] = 'ùéðåé';
        $lang_string['btn_delete'] = 'îçé÷ä';  
        break;

      default:
        break;
    }
  }
?>
