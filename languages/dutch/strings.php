<?php
  // Dutch Language File
  // (c) 2004 Alexander Palmo, apalmo <at> bigevilbrain <dot> com
  // Edits: 2007 Bill Bateman, Alexander Palmo, Dankoozy [ dan {apenstaartje} 97k (punt) eu ]

  // Simple PHP Version: 0.5.0
  // Language Version:   0.5.0

  function sb_language( $page ) {
    global $language, $html_charset, $php_charset, $lang_string;

    // Language: Dutch
    $lang_string['language'] = 'nederlands';
    $lang_string['locale'] = array('nl', 'nl');
    $lang_string['rss_locale'] = 'nl'; // New 0.4.8

    // ISO Charset: ISO-8859-1
    $lang_string['html_charset'] = 'ISO-8859-1';
    $lang_string['php_charset'] = 'ISO-8859-1';
    setlocale( LC_TIME, $lang_string['locale'] );

    // Global Strings

    // Menu
    $lang_string['menu_links'] = "Links";
    $lang_string['menu_home'] = "Startpagina";
    $lang_string['menu_contact'] = "Contact Me";
    $lang_string['menu_stats'] = "Statistieken";
    $lang_string['menu_calendar'] = "Kalender"; // New for 0.4.8
    $lang_string['menu_archive'] = "Archief";
    $lang_string['menu_viewarchives'] = "Archief bekijken";
    $lang_string['menu_menu'] = "Menu";
    $lang_string['menu_add'] = "Nieuw bericht";
    $lang_string['menu_add_static'] = "Vaste pagina toevoegen";
    $lang_string['menu_upload'] = "Afbeelding uploaden";
    $lang_string['menu_setup'] = "Instellingen";
    $lang_string['menu_categories'] = "Categorieën";
    $lang_string['menu_info'] = "Meta Tags";
    $lang_string['manage_users'] = "Gebruiker-Manager";
    $lang_string['menu_options'] = "Datum &amp; Tijd";
    $lang_string['menu_themes'] = "Stijlen";
    $lang_string['menu_colors'] = "Kleuren";
    $lang_string['menu_change_login'] = "Loginnaam veranderen";
    $lang_string['menu_logout'] = "Uitloggen";
    $lang_string['menu_login'] = "Inloggen";
    $lang_string['menu_most_recent'] = "Nieuwste reacties";
    $lang_string['menu_most_recent_entries'] = "Nieuwste berichten";
    $lang_string['menu_most_recent_trackback'] = "Recente Track-backs";
    $lang_string['menu_add_block'] = "Blokken";
    $lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
    $lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
    $lang_string['menu_moderation'] = "Woord/IP-adres blokkeerlijsten"; // New for 0.4.9
    $lang_string['menu_commentmoderation'] = "Commentaar nog niet gekeurd"; // New for 0.5.0
    $lang_string['notice_moderator1'] = "U hebt ";
    $lang_string['notice_moderator2'] = " reacties die nog gekeurd moet worden.";
    $lang_string['notice_loggedin'] = "U bent nu ingelogd.";

    // Counter
    $lang_string['counter_today'] = "Vandaag:"; // New for 0.4.8
    $lang_string['counter_yesterday'] = "Gisteren:"; // New for 0.4.8
    $lang_string['counter_totalsidebar'] = "Totaal:"; // New for 0.4.8
    $lang_string['counter_title'] = "Hits teller"; // New for 0.4.8

    // Other
    $lang_string['home'] = 'Terug naar startpagina';
    $lang_string['nav_next'] = 'Volgende';
    $lang_string['nav_back'] = 'Terug';
    $lang_string['search_title'] = 'Zoeken';
    $lang_string['search_go'] = 'Go';
    $lang_string['page_generated_in'] = 'Pagina gegenereerd in %s seconden';
    $lang_string['counter_total'] = 'Totaal hits: '; // New in 0.4.8
    $lang_string['read_more'] = 'Meer lezen...'; // New in 0.4.8

    // SB Functions
    $lang_string['sb_months'] = array( 'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december' );
    $lang_string['sb_default_title'] = 'Geen Titel';
    $lang_string['sb_default_author'] = 'Geen Auteur';
    $lang_string['sb_default_footer'] = 'Geen Ondertitel';

    $lang_string['sb_edit'] = 'bewerken';
    $lang_string['sb_delete'] = 'wissen';
    $lang_string['sb_permalink'] = 'permalink';
    $lang_string['sb_trackback'] = 'track-backs';
    $lang_string['sb_postedby'] = 'door'; // 0.5.0
    $lang_string['sb_admin'] = 'Blog beheerder'; // 0.5.0
    $lang_string['sb_relatedlink'] = 'bijpassende link'; // <-- New in 0.4.6

    $lang_string['sb_add_comment_btn'] = 'reactie toevoegen';
    $lang_string['sb_read_entry_btn'] = 'bericht bekijken'; // 0.5.0
    $lang_string['sb_comment_btn_number_first'] = true;
    $lang_string['sb_comment_btn'] = 'reactie';
    $lang_string['sb_comment_view'] = 'lezen'; // 0.5.0
    $lang_string['sb_comments_plural_btn_number_first'] = true;
    $lang_string['sb_comments_plural_btn'] = 'reacties';
    $lang_string['sb_comments_plural_view'] = 'hits'; // 0.5.0

    // ( 1 view )
    $lang_string['sb_view_counter_pre'] = '';
    $lang_string['sb_view_counter_post'] = ' keer bekeken';

    // ( 2 views )
    $lang_string['sb_view_counter_plural_pre'] = '';
    $lang_string['sb_view_counter_plural_post'] = ' keer bekeken';

    $lang_string['sb_add_link_btn'] = '+ link';
    $lang_string['sb_rate_entry_btn'] = 'Klik om te stemmen';

    // Entry Text Editor
    if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
      $lang_string['label_subject'] = "Onderwerp:";
      $lang_string['label_insert'] = "Speciaal invoegen:";
      $lang_string['btn_bold'] = " b ";
      $lang_string['btn_italic'] = " i ";
      $lang_string['btn_image'] = "img";
      $lang_string['btn_url'] = "url";
      $lang_string['btn_readmore'] = "meer lezen"; // 0.4.8
      $lang_string['view_images'] = "Upgeloaden afbeeldingen bekijken";
      $lang_string['label_entry'] = "Bericht:";
      $lang_string['btn_preview'] = "&nbsp;Bekijken&nbsp;";
      $lang_string['btn_post'] = "&nbsp;Verstuur&nbsp;";
      $lang_string['chk_visiblemenu'] = "Zichtbaar (in menu)";
      $lang_string['file_name'] = "Vaste bestandsnaam: (geen spaties of extensies)";

      // Javascript Strings
      $lang_string['insert_styles'] = "Tekst om te formateren :";
      $lang_string['insert_image'] = "URL van afbeelding invoegen:";
      $lang_string['insert_url1'] = "Display-tekst van URL invoegen (Optioneel):";
      $lang_string['insert_url2'] = "URL van de link invoegen:";
      $lang_string['insert_url3'] = "URL openmaken in nieuw venster (Optioneel):";
      $lang_string['form_error'] = "Vul de onderwerp- en berichtvelden in.";

      // More Javascript Strings
      $lang_string['insert_image_optional'] = 'Optioneel:';
      $lang_string['insert_image_width'] = 'Breedte (Optioneel):';
      $lang_string['insert_image_height'] = 'Hoogte (Optioneel):';
      $lang_string['insert_image_popup'] = 'Volle resolutie afbeelding kan bekeken worden in pop-up venster (Optioneel):';
      $lang_string['insert_image_float'] = 'Drijvend (Optioneel):';

      $lang_string['day'] = 'Dag';
      $lang_string['month'] = 'Maand';
      $lang_string['year'] = 'Jaar';
      $lang_string['hour'] = 'Uur';
      $lang_string['minute'] = 'Minuut';
      $lang_string['second'] = 'Seconden';
    }

    switch ($page) {
      case 'add':
        // Add Entry
        $lang_string['title'] = "Nieuw bericht";
        $lang_string['instructions'] = "Bent u klaar om te gaan bloggen? Vul het formalier in an klik op 'Bekijken' om het bericht te bekijken, of klik op 'Verstuur' om hem op te slaan.";
        $lang_string['title_ad'] = "Confirm Trackback Pings";
        $lang_string['instructions_ad'] = "Deze URIs waren automatisch gevonden om te pingen. Als u een niet wil pingen, ontkruis hem dan. Klik op 'OK' om ze te gaan pingen of op 'Annuleren' om geen een te pingen.";
        $lang_string['label_tb_ping'] = "Trackback ping(en) te verzenden (gescheiden door Komma's)";
        $lang_string['label_tb_autodiscovery'] = "autodiscovery";
        $lang_string['label_relatedlink'] = "Bijpassende Link";
        $lang_string['label_categories'] = "Categorieën Lijst";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Bekijk / bewerk bericht";
        $lang_string['instructions_preview'] = "Zo ziet uw bericht eruit. Als u tekst stijlen of afbeeldingen gebruikt vergeet dan niet uw 'tags' dicht te doen.";
        $lang_string['title_update'] = "Bericht updaten";
        $lang_string['instructions_update'] = "U kan uw bericht hier wijzigen. Klik op 'Bekijken' of 'OK' als u klaar bent.";
        $lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Annuleren &nbsp;";

        // Error Response
        $lang_string['error'] = "<h2>Oeps!</h2>Bericht niet opgeslagen. Er ging iets een beetje mis.<br /><br />Server zegt:<br />";
        $lang_string['success'] = "<h2>Bericht opgeslagen!</h2>"; // 0.4.8.1
        break;

      case 'add_static':
        // Add Entry
        $lang_string['title'] = "Vaste pagina toevoegen";
        $lang_string['instructions'] = "Vul in het formulier hieronder om een vaste pagina te creëren. Deze paginas komen tevoorschijn in het links-menu. Klik op 'Bekijken' om de pagina te bekijken', of klik op 'Verstuur' om hem op te slaan.";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Bekijk / Bewerk vaste pagina";
        $lang_string['instructions_preview'] = "Zo ziet uw vaste pagina eruit. Als u tekst stijlen of afbeeldingen gebruikt vergeet dan niet al uw 'tags' dicht te doen.";
        $lang_string['title_update'] = "Statische pagina updaten";
        $lang_string['instructions_update'] = "U kunt met dit formulier uw bericht bewerken. Klik op 'Preview' of 'Post' als u klaar bent.";
        $lang_string['form_error'] = "Vul eerst de onderwerp-, bericht- en bestandsnaamvelden in.";

        // Error Response
        $lang_string['error'] = "<h2>Oeps!</h2>Bericht niet opgeslagen. Er was een probleempje <br /><br />Server zegt:<br />";
        break;

      case 'add_block':
        // Add / Manage Blocks
        $lang_string['title'] = "Add / Manage Blocks";
        $lang_string['instructions'] = "Use the form below to add custom 'Blocks' which will appear in the sidebar menu.";
        $lang_string['up'] = "omhoog";
        $lang_string['down'] = "omlaag";
        $lang_string['edit'] = "bewerken";
        $lang_string['delete'] = "wissen";
        $lang_string['block_name'] = "Blok Naam:";
        $lang_string['block_content'] = "Blok Inhoud:";
        $lang_string['instructions_edit'] = "U bent een blok aan het bewerken.";
        $lang_string['instructions_modify'] = "Use the form below to add or modify the custom 'Blocks' which appear in the sidebar menu.";
        $lang_string['submit_btn_edit'] = "Blok wijzigen";
        $lang_string['submit_btn_add'] = "Nieuw blok maken";
        $lang_string['form_error'] = "Vul eerst het naamveld in.";
        break;

      case 'add_link':
        $lang_string['static_pages'] = "Statische Pagina's:";

        // Add / Manage Links
        $lang_string['title'] = "Links bewerken";
        $lang_string['instructions'] = "Hier kunt u links naar andere sites invullen. Vul dit formulier in en klik 'Nieuwe link' om een nieuwe te maken. Klik de 'omhoog' en 'omlaag' knoppen om de volgorde te wijzigen. Klik op 'wijzigen' om hem te wijzigen en klik op wissen om hem te verwijderen";
        $lang_string['up'] = "omhoog";
        $lang_string['down'] = "omlaag";
        $lang_string['edit'] = "wijzigen";
        $lang_string['delete'] = "wissen";
        $lang_string['link_name'] = "Link Naam:";
        $lang_string['link_url'] = "Link URL: (Optioneel. Leave empty to create separator.)";
        $lang_string['instructions_edit'] = "U bent een link aan het bewerken:";
        $lang_string['instructions_modify'] = "Klik hieronder om een link te bewerken:";
        $lang_string['submit_btn_edit'] = "Link bewerken";
        $lang_string['submit_btn_add'] = "Nieuwe Link";
        $lang_string['form_error'] = "Vul eerst het naamveld in.";
        break;

      case 'categories':

        // Add / Manage Links
        $lang_string['title'] = "Categorieën bewerken";
        $lang_string['instructions'] = "Use the form below to add and edit your categories. Each category item should be in this format 'category name (id number)'. Indent items with spaces to create heirarchies.<br /><br /><b>Voorbeeld:</b><br />Generaal (1)<br />Nieuws (3)<br />&nbsp;&nbsp;Omroepen (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technologie (2)<br />";
        $lang_string['error'] = "Error";
        $lang_string['current_categories'] = "Current Categories";
        $lang_string['no_categories_found'] = "Geen categorieën gevonden";
        $lang_string['category_list'] = "Categorieën Lijst:";
        $lang_string['validate'] = "Valideren";
        $lang_string['submit_btn'] = "&nbsp;Toevoegen&nbsp;";
        break;

      case 'colors':
        // Change Colors
  $lang_string['title'] = "Kleuren wijzigen";
  $lang_string['instructions'] = "Je kan de tekst- en achtergrondkleuren van je blog wijzigen. Gebruik de kleurkiezer om je kleur te wijzigen, of typ de HEX waarde in het veld.";
  $lang_string['bg_color'] = "Pagina kleur";
  $lang_string['main_bg_color'] = "Hoofdpagina kleur";
  $lang_string['border_color'] = "Pagina rand";
  $lang_string['inner_border_color'] = "Binnenste rand";
  $lang_string['header_bg_color'] = "Titel achtergrond";
  $lang_string['header_txt_color'] = "Titel tekst";
  $lang_string['menu_bg_color'] = "Menu achtergrond";
  $lang_string['footer_bg_color'] = "Ondertitel kleur";
  $lang_string['txt_color'] = "Gewone tekst";
  $lang_string['headline_txt_color'] = "Titel tekst";
  $lang_string['date_txt_color'] = "Datum tekst";
  $lang_string['footer_txt_color'] = "Ondertitel tekst";
  $lang_string['link_reg_color'] = "Gewone link";
  $lang_string['link_hi_color'] = "Actieve link";
  $lang_string['link_down_color'] = "Bezochte link";

        // More Colors
        $lang_string['entry_bg'] = "Bericht AG";
        $lang_string['entry_title_bg'] = "Bericht titel AG";
        $lang_string['entry_border'] = "Bericht rand";
        $lang_string['entry_title_text'] = "Bericht titel tekst";
        $lang_string['entry_text'] = "Bericht tekst";

        $lang_string['static_bg'] = "Vaste AG"; // 0.5.0
        $lang_string['static_title_bg'] = "Vaste titel AG"; // 0.5.0
        $lang_string['static_border'] = "Vaste rand"; // 0.5.0
        $lang_string['static_title_text'] = "Vaste titel tekst"; // 0.5.0
        $lang_string['static_text'] = "Vaste tekst"; // 0.5.0

        $lang_string['comment_bg'] = "Reactie AG"; // 0.5.0
        $lang_string['comment_title_bg'] = "Reactie titel AG"; // 0.5.0
        $lang_string['comment_border'] = "Reactie Border"; // 0.5.0
        $lang_string['comment_title_text'] = "Reactie titel tekst"; // 0.5.0
        $lang_string['comment_text'] = "Reactie tekst"; // 0.5.0

        $lang_string['menu_bg'] = "Menu AG";
        $lang_string['menu_title_bg'] = "Menu title AG";
        $lang_string['menu_border'] = "Menu rand";
        $lang_string['menu_title_text'] = "Menu titel tekst";
        $lang_string['menu_text'] = "Menu tekst";
        $lang_string['menu_link_reg_color'] = "Gewone Menu Link";
        $lang_string['menu_link_hi_color'] = "Menu link Hover";
        $lang_string['menu_link_down_color'] = "Menu link actief";

        // Submit
        $lang_string['color_preset'] = "Kleurschemas:";
        $lang_string['scheme_name'] = "Naam van kleurenschema:";
        $lang_string['scheme_file'] = "Bestandsnaam van schema: (geen spaties of extensies)";
        $lang_string['save_btn'] = "&nbsp;Opslaan&nbsp;";
        $lang_string['form_error'] = "Vul eerst een naam in voor uw kleurenschema.";
        $lang_string['submit_btn'] = "&nbsp;Verstuur&nbsp;";
        $lang_string['theme_doesnt_allow_colors'] = 'Met deze thema kunt u de kleuren niet veranderen.';

        // Error Response
        $lang_string['error'] = "<h2>Oeps!</h2>Informatie is niet opgeslagen. Er ging iets een beetje mis.<br /><br />Server zegt:<br />";
        $lang_string['success'] = "<h2>Kleurschema opgeslagen!</h2>"; // New for 0.4.8.1
        break;

      case 'comments':
        // Comments
        $lang_string['name'] = "Naam:"; //New in 0.4.6.2
        $lang_string['email'] = "E-mail:"; //New in 0.4.6.2
        $lang_string['homepage'] = "Website:"; //New in 0.4.6.2
        $lang_string['comment'] = "Comment:"; //New in 0.4.6.2
        $lang_string['IPAddress'] = "IP-adres:";  // New for 0.4.6.2
        $lang_string['useragent'] = "Useragent:";  // New for 0.4.6.2
        $lang_string['wrote'] = "<i>On %s, %s schreef:</i><br />\n<br />\n%s"; // New for 0.4.6.2

        $lang_string['comment_capcha'] = "Anti-Spam: Invullen <b>%s</b>"; // 0.4.2
        $lang_string['title'] = "Commentaar";
        $lang_string['header'] = "Reactie achterlaten";
        $lang_string['instructions'] = "Vul dit formulier in om uw reactie achter te laten.";
        $lang_string['comment_name'] = "Uw naam:";
        $lang_string['comment_email'] = "E-mail:";
        $lang_string['comment_url'] = "URL:";
        $lang_string['commentposted'] = "Neiuwe reactie achtergelaten om: ";  // New for 0.4.6.2
        $lang_string['comment_remember'] = "Gegevens bewaren:";
        $lang_string['comment_text'] = "Reactie:";
        $lang_string['post_btn'] = "&nbsp;Reactie achterlaten&nbsp;";
        $lang_string['delete_btn'] = "wissen";
        $lang_string['ban_btn'] = "ip blokkeren"; // New for 0.4.8
        $lang_string['expired_comment1'] = "U mag na "; // New for 0.4.8
        $lang_string['expired_comment2'] = " dagen geen reactie meer achterlaten."; // New for 0.4.8

        $lang_string['blacklisted'] = "Sorry uw IP-adres is geblokkeerd. U mag geen reactie achterlaten."; // New for 0.4.8
        $lang_string['bannedword'] = "Uw reactie, url, naam of email adres heeft woord(en) die door de blog beheerder geblokkeerd zijn. Reactie NIET opgeslagen."; // New for 0.4.8
        $lang_string['nocomments'] = "Er is geen commentaar op dit bericht."; // New for 0.4.9
        $lang_string['email_moderator'] = "Reacties moeten eerst goedgekeurd worden voor dat het publiek het mag zien."; // New for 0.5.0
        $lang_string['user_notice_mod'] = "De beheerder van deze blog moet uw reactie eerst goedkeuren voor dat het op de site komt."; // new for 0.5.0

        $lang_string['return_to_comments'] = 'Terug naar reacties';

        // Error Response
        $lang_string['error_add'] = "<h2>Oeps!</h2>Reactie niet opgeslagen. Er was een probleempje<br /><br />Server zegt:<br />";
        $lang_string['error_delete'] = "<h2>Oeps!</h2>Reactie niet uitgewist. Er was een probleempje .<br /><br />Server zegt:<br />";
        $lang_string['error_ban'] = "<h2>Whoops!</h2>IP-adres niet op de zwarte lijst gezet.<br /><br />Server zegt:<br />";
        $lang_string['success_add'] = "<h2>Reactie toegevoegd!</h2>Uw reactie is opgeslagen."; // New for 0.4.8.1
        $lang_string['success_delete'] = "<h2>Reactie uitgewist!</h2>De reactie is uitgewist."; // New for 0.4.8.1
        $lang_string['success_ban1'] = "<h2>IP-adres op de zwarte lijst gezet!";
        $lang_string['success_ban2'] = "</h2>Om deze blokkering te verwijderen, gebruik de commentaar keuring in het menu."; // New for 0.4.8.1
        $lang_string['form_error'] = "Vul de naam, reactie en anti-spam velden eerst in.";
        $lang_string['error_noip'] = "Geen IP-adres om op de zwarte lijst te zetten.";

        $lang_string[ 'error_comments_disabled' ] = '<h2>Mislukt!</h2>Reacties in deze blog zijn niet toegestaan'; // New 0.5.0
        $lang_string[ 'error_no_match' ] = '<h2>Mislukt!</h2>Uw IP-adres klopt niet?'; // New 0.5.0
        $lang_string[ 'error_fields_missing' ] = '<h2>Mislukt!</h2>De volgende velden zijn leeg: '; // New 0.5.0
        $lang_string[ 'error_spambot' ] = '<h2>Mislukt!</h2>Capcha data is leeg. Ben jij soms een spambot?'; // New 0.5.0
        $lang_string[ 'error_capcha' ] = '<h2>Mislukt!</h2>De capcha is fout ingevuld.'; // New 0.5.0
        $lang_string[ 'error_bad_data' ] = '<h2>Mislukt!</h2>Post data is niet goed. Ben jij een hacker?'; // New 0.5.0
        $lang_string[ 'error_entry_missing' ] = '<h2>Mislukt!</h2>U probeert commentaar te leveren op een bericht dat niet bestaat'; // New 0.5.0
        $lang_string[ 'error_empty_text' ] = '<h2>Mislukt!</h2>U heeft geen commentaar of naam ingevuld.'; // New 0.5.0
        break;

      case 'delete':
        $lang_string['title'] = "Bericht wissen";
        $lang_string['instructions'] = "Dit bericht gaat u nu wissen. Dit kan niet worden ontdaan...";
        $lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Annuleren&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Oeps!</h2>De post kon niet gewist worden.<br /><br />Server zegt:<br />";
        $lang_string['success'] = "<h2>Post gewist</h2>De post is nu gewist."; // New for 0.4.8.1
        break;

      case 'delete_static':
        $lang_string['title'] = "Vaste pagina wegwerpen";
        $lang_string['instructions'] = "Dit is een vaste pagina die u gaat wegwerpen. Dit kunt niet worden ontdaan...";
        $lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Annuleren&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Oeps!</h2>Kon de pagina niet wegwerpen.<br /><br />Server zegt:<br />";
        $lang_string['success'] = "<h2>Vaste pagina uitgewist!</h2>De vaste pagina is uitgewist."; // New for 0.4.8.1
        break;

      case 'image_list':
        $lang_string['title'] = "Afbeeldingen Lijst";
        $lang_string['instructions'] = "Klik op de link hieronder om de afbeeldingen te bekijken.<br /><br />Om een afbeelding in uw bericht te zetten:<br />1) Control-klik een link en selecteer 'Copy Link to Clipboard'.<br />2) Ga terug naar de 'nieuw bericht' pagina.<br />3) Klik op de 'img' knop and plak de URL in het pop-up venster.";
        break;

      case 'info':
        $lang_string['title'] = "Meta-Data Informatie";
        $lang_string['instructions'] = "Deze informatie wordt gebruikt voor &quot;meta-data&quot;, deze informatie wordt gebruikt om je site te indexeren bij zoekmachines. Het gebruik van RSS is toegestaan.";
      $lang_string['info_keywords'] = "Steekwoorden: (Lijst van steekwoorden (keywords), komma gescheiden.)";
      $lang_string['info_description'] = "Omschrijving: (Een korte beschrijving van je site.)";
      $lang_string['info_copyright'] = "Rechten: (Copyright informatie, of een link naar deze informatie.)";
      $lang_string['tracking_code'] = "External Tracking Code: (HTML code that needs to be run on the main page (in the header tags for safety) only for every user that comes to the page i.e. Google Analytics)";
      $lang_string['submit_btn'] = "&nbsp;Verstuur&nbsp;";
        $lang_string['submit_btn'] = "&nbsp;Sturen&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Oeps!</h2>Informatie niet opgeslagen. Er was een probleem met het opslaan van uw informatie.<br /><br />Melding:<br />";
        $lang_string['success'] = "<h2>Meta-Data Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
        $lang_string['form_error'] = "Vul eerst de titel- en auteurvelden in.";
        break;

      case 'index':
        // Index
        break;

      case 'static':
        // Index
        break;

      case 'rating':
        $lang_string['error'] = "<h2>Oeps!</h2>Informatie niet opgeslagen. Er was een probleem met het opslaan van uw informatie.<br /><br />Melding:<br />";
        $lang_string['success'] = "<h2>Vote Saved!</h2>Your rating has been successfully saved."; // New for 0.4.8.1
        break;

      case 'login':
        $lang_string['upgrade'] = "<h2>Upgraden</h2>"; // New 0.3.8
        $lang_string['upgrade_count'] = "%n commentaarbestanden moeten upgegrade worden:"; // New 0.3.8
        $lang_string['upgrade_url'] = "Commentaar upgraden"; // New 0.3.8
        $lang_string['title'] = "Inloggen";
        $lang_string['instructions'] = "Vul uw gebruikersnaam en wachtwoord in hieronder";
        $lang_string['username'] = "Gebruikersnaam:";
        $lang_string['password'] = "Wachtwoord";
        $lang_string['submit_btn'] = "&nbsp;Verstuur&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Succes!</h2>U bent nu ingelogd<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Whoops!</h2>You are not logged in. Please verify that you typed your Username and Password correctly and try again.<p />";
        $lang_string['inactive_account'] = "<h2>Whoops!</h2>You are not logged in. Your account has been disabled by the administrator for some reason.<p />";
        $lang_string['form_error'] = "Please complete the Username and Password fields.";
        break;

      case 'logout':
        $lang_string['title'] = "Uitloggen";
        $lang_string['error'] = "<h2>Gedag!</h2>U bent nu uitgelogd. (U was toch niet ingelogd!)<p />";
        $lang_string['error_no_cookie'] = "<h2>Gedag!</h2>U bent nu uitgelogd. (Geen cookie gevonden dus u was toch niet ingelogd!)<p />"; // New 0.5.0
        $lang_string['success'] = "<h2>Gedag!</h2>U bent nu uitgelogd.<p />(Terugsturen naar startpagina in 5 seconden.)<p />";
        break;

      case 'forms':
        $lang_string['title'] = "";
        $lang_string['instructions'] = "";
        // Error Response
        $lang_string['error'] = "<h2>Oeps!</h2>Informatie niet opgeslagen. Er was een probleem met het opslaan van uw informatie.<br /><br />Melding:<br />";
        break;

      case 'set_login':
        $lang_string['title'] = "Gebruikersnaam en &amp; wachtwoord veranderen";
        $lang_string['instructions'] = "Gebruik het formulier hieronder om uw gebrukersnaam of wachtwoord te wijzigen.";
        $lang_string['username'] = "Gebruikersnaam:";
        $lang_string['password'] = "Wachtwoord:";
        $lang_string['submit_btn'] = "&nbsp;Versturen&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Succes!</h2>Uw gebruikersnaam en/of wachtwoord is nu actief.<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />Server Reported:<br />";
        $lang_string['form_error'] = "Please complete the Username and Password fields.";
        $lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
          and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
          exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
          to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
        break;

                          case 'install00': // <-- New
                                $lang_string['title'] = "Welkom";
                                $lang_string['instructions'] = "
                                Bedankt voor je keuze voor Simple PHP Blog!!";
                                $lang_string['blog_choose_language'] = "Kies een taal:";
                                $lang_string['submit_btn'] = "&nbsp;Verstuur&nbsp;";
                            break;
  
        case 'install01': // <-- New
        $lang_string['title'] = "Welkom";
        $lang_string['instructions'] = "
        Bedankt voor je keuze voor Simple PHP Blog!<br /><br />Simple PHP Blog is een simpele blogging applicatie. Om te beginnen heb je PHP 4.1 of nieuwer nodig en schrijf-rechten          op de server. Alle informatie wordt opgeslagen in tekstbestanden, dus er is geen database nodig.<br /><br />
        Simple PHP Blog moet wel de mappen ('config', 'content', en 'images') maken om de informatie in op te slaan.<br /><br />
        <b>Klik hier onder om te beginnen met de installatie:</b>";
        $lang_string['begin'] = "[ Begin Installatie ]";
        break;
        case 'install02': // <-- New
        $lang_string['title'] = "Installatie";
        $lang_string['instructions'] = "Aan het proberen de 'config', 'content', en 'images' mappen te maken:";
        $lang_string['folder_exists'] = "Mooi! Mappen bestaan al. Geen veranderingen gemaakt...";
        $lang_string['folder_failed'] = "Oeps! Map kon niet worden aangemaakt...";
        $lang_string['folder_success'] = "Gelukt! Map aangemaakt...";
        // Help
        $lang_string['help'] = "
        <h2>Oeps!</h2>
        Kan één of meerdere mappen niet aanmaken! Dit ligt waarschijnlijk aan:<br>
        <i>1) <b>Schrijf rechten</b> staan niet op <b>Lees/Schrijf</b> toegang.</i><br>
        <i>2) De <b>UID</b>'s (User ID's) van mappen en bestanden moeten overeen komen.</i><p />
        
        Volg de onderstaande instructies en probeer opnieuw:<p />       
        1) Maak handmatig de mappen: <b>config</b>, <b>content</b>, en <b>images</b>.<p />
        2) Zet <b>Schrijf rechten (Write Permissions)</b> op de mappen. In je FTP programma moeten Eigenaar (Owner), Gebruiker (User), en Wereld (World)<b>Lees (Read)</b> en           <b>Schrijf (Write)</b> rechten hebben. <i>(Misschien moet je contact opnemen met de beheerder van de server om dit te kunnen instellen...)</i><p />
        3) Zorg dat de UID's overeen komen. <i>(Misschien moet je contact opnemen met de beheerder van de server om dit te kunnen instellen...)</i>";
        $lang_string['try_again'] = "[ Probeer opnieuw ]";
        // Success
        $lang_string['success'] = "<h2>Gelukt!</h2>Mappen succesvol aangemaakt!<p /><b>Klik hier onder om verder te gaan:</b>";
        $lang_string['continue'] = "[ Verder ]";
        break;

      case 'install03':
        $lang_string['supported'] = "<b>Uw server ondersteunt deze encryptie schemas:</b>";
        $lang_string['standard'] = "Standard DES Encryption: ";
        $lang_string['extended'] = "Extended DES Encryption: ";
        $lang_string['MD5'] = "MD5 Encryption: ";
        $lang_string['blowfish'] = "Blowfish Encryption: ";
        $lang_string['enabled'] = "aan gezet";
        $lang_string['disabled'] = "uit gezet";
        $lang_string['using_standard'] = "<b>Standard DES Encryption gebruiken...</b>";
        $lang_string['using_extended'] = "<b>Extended DES Encryption gebruiken...</b>";
        $lang_string['using_MD5'] = "<b style=\"color: green;\">MD5 Encryption gebruiken...</b>";
        $lang_string['using_blowfish'] = "<b style=\"color: green;\">Blowfish Encryption gebruiken...</b>";
        $lang_string['using_unknown'] = "<b>Onbekende encryptie gebruiken...</b>";
        $lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
        $lang_string['title'] = "Gebruikersnaam creëren &amp; Wachtwoord";
        $lang_string['instructions'] = "Gebruik het formulier hieronder om een gebruikersnaam en .";
        $lang_string['username'] = "Gebruikersnaam:";
        $lang_string['password'] = "Wachtwoord:";
        $lang_string['submit_btn'] = "&nbsp;Sturen&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Gefeliciteerd!</h2>U bent nu ingelogt klik op de 'Setup' link om uw blog te installeren!<p />";
        $lang_string['btn_setup'] = "[ Setup ]";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Oeps!</h2>Informatie niet opgeslagen. Er was een probleempje<br /><br />Server zegt:<br />";
        $lang_string['form_error'] = "Vul eerst een gebruikersnaam en wachtwoord in.";
        break;

      case 'install04':
        $lang_string['title'] = "Wachtwoord bestand creëren";
        $lang_string['instructions'] = "Dit is het moeilijke:<br />
        <ol>
        <li>Open a teksteditor. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
        <li>Maak een nieuw document.</li>
        <li>Knip en plak de code hieronder er in.</li>
        <li>Sla het document op met de naam <b>password.php</b> <i>(in gewone tekst formaat)</i></li>
        <li>Open een FTP programma.</li>
        <li>Upload de nieuwe <b>password.php</b> naar de <b>config</b> map op uw website.</li>
        <li>Wis de <b>password.php</b> van uw harde schijf.</li>
        </ol>
        ";
        $lang_string['information'] = "<i>Als uw het wachtwoord vergeet of zo iets kunt u de password.php van uw server wissen en op nieuw beginnen met installeren</i>";
        $lang_string['code'] = "Code voor <b>password.php</b> file:";
        $lang_string['continue'] = "[ Doorgaan ]";
        break;

      case 'install05':
      case 'install06':
        $lang_string['title'] = "Inloggen";
        $lang_string['instructions'] = "Voeg uw gebruikersnaam en wachtwoord in hieronder";
        $lang_string['username'] = "Gebruikersnaam:";
        $lang_string['password'] = "Wachtwoord";
        $lang_string['submit_btn'] = "&nbsp;Sturen&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Gefeliciteerd!</h2>U bent nu ingelogt.<p />
        Klik de link hieronder om naar de <b>Setup</b> om de instellingen van uw blog te wijzigen.<p />
        <i>De blog is nu geïnstalleerd het is aangeraden om de <b>installXX.php</b> van uw site te wissen. (i.e. install00.php through install06.php)</i><p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Oeps!</h2>U bent niet ingelogt. Controleer uw gebruikersnaam en wachtwoord en probeer nog een keer.<p />";
        $lang_string['form_error'] = "Vul eerst een gebruikersnaam en wachtwoord in.";
        // Success
        $lang_string['btn_setup'] = "[ Setup ]";
        $lang_string['btn_try_again'] = "[ Op nieuw proberen ]";
        break;

      case 'setup':
        
        $lang_string['title'] = "Instellingen";
        $lang_string['instructions'] = "Je kan de naam van je blog en andere informatie hier wijzigen.";
        $lang_string['blog_title'] = "Blog naam:";
        $lang_string['blog_author'] = "Auteur:";
        $lang_string['blog_header'] = "Header Graphic URL: images/blogheader.jpg (Leave blank for default theme graphic).";
        $lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
        $lang_string['blog_avatar'] = "Avatar URL: (Leave blank for none)."; // <-- New 0.4.7
        $lang_string['blog_footer'] = "Ondertitel:";

 
        $lang_string['blog_choose_language'] = "Taal Kiezen:";
        $lang_string['blog_enable_comments'] = "Commentaar van gebruikers toegestaan";
        $lang_string['blog_comments_popup'] = "Commentaar in nieuw pop-up venster weergeven";
        $lang_string['blog_search_top'] = "Show Search In Entries (instead of in sidebar)"; // New for 0.5.0
        $lang_string['blog_enable_static_block'] = "Show a defined block as the first entry of blog entries: "; // New for 0.5.0
        $lang_string['static_block_border'] = 'Blok rand'; // New for 0.5.0
        $lang_string['static_block_noborder'] = 'Geen rand'; // New for 0.5.0 
        $lang_string['blog_enable_voting'] = "Gebruikers op berichten laten stemmen";
        $lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (gaat misschien sneller op somige servers)"; // New for 0.4.6
        $lang_string['blog_enable_calendar'] = "Kalender aanzetten"; // New for 0.4.6
        $lang_string['blog_enable_archives'] = "Archiefblok aanzetten"; // New for 0.4.8
        $lang_string['blog_enable_counter'] = "Hits-teller in de Sidebar"; // New for 0.4.8
        $lang_string['blog_counter_hours'] = "Aantal uren voor dat het zelfde IP-adres weer geteld word:"; // New for 0.4.8
        $lang_string['blog_enable_login'] = "Login-link aanzetten (Please bookmark \"login.php\" first...)"; // New for 0.4.8
        $lang_string['blog_enable_title'] = "Gewone tekst titel blok (Ontkruisen als de titel in een afbeelding zit)"; // New for 0.4.6
        $lang_string['blog_enable_permalink'] = "Permalinks aanzetten"; // New for 0.4.6
        $lang_string['blog_enable_capcha'] = "Anti-Spam"; // New for 0.4.8
        $lang_string['blog_footer_counter'] = "Hits teller in ondertitel"; // New for 0.4.8
        $lang_string['blog_enable_capcha_image'] = "Anti-Spam afbeelding (GD library only) / Anti-Spam tekst veld"; // New for 0.4.8
        $lang_string['blog_enable_stats'] = "Statistieken link in Menu"; // New for 0.4.7
        $lang_string['blog_enable_lastcomments'] = "Recente reacties lijst"; // New for 0.4.7
        $lang_string['blog_enable_lastentries'] = "Recente berichten lijst"; // New for 0.4.7
        $lang_string['blog_email_notification'] = "Stuur email als nieuw commentaar toegevoegd is";
        $lang_string['blog_send_pings'] = "Stuur weblog &quot;pings&quot;";
        $lang_string['blog_ping_urls'] = "URL van ping-service invoegen (i.e. http://rpc.weblogs.com/RPC2)<br />(U kan meerderen invoegen gescheiden door komma's .)";
        $lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
          blog know that you are linking to them by sending them a trackback ping. See who is linking to
          your blog by receiving trackback pings.<br />
           You can either enter the URIs to ping manually, or try to do it automatically through
           Auto-Discovery.";
       

   $lang_string['blog_trackback_enabled'] = "Trackbacks aanzetten";
        $lang_string['blog_trackback_auto_discovery'] = "Automatisch trackback-URLs ontdekken";
        $lang_string['blog_max_entries'] = "Maximaal aantaal weer te geven berichten:"; // <-- New 0.3.6
        $lang_string['blog_comment_tags'] = "Tags toegestaan in berichten:"; // <-- New 0.3.6
        $lang_string['blog_gzip_about'] = "
          Sinds PHP 4.0.4, heeft PHP  de mogelijkheid om gzip (.gz) compressie bestanden te lezen en bewerken, 
          dit zal schijfruimte besparen. Het kan ook pagina's die naar browsers gestuurd worden comprimeren, als ze dit ondersteunen,
          dit zal bandbreedte besparen.<br />
          <br />
          Zlib ondersteuning wordt in PHP niet standaard ondersteund. Als de keuzevakjes niet aan staan heeft je 
          PHP versie geen ondersteuning voor Zlib extensies.."; // <-- New 0.3.7
        $lang_string['blog_enable_gzip_txt'] = "Zet GZIP Compressie voor Database bestanden aan"; // <-- New 0.3.7
        $lang_string['blog_enable_gzip_output'] = "Zet GZIP Compressie voor HTTP Output aan"; // <-- New 0.3.7
        $lang_string['submit_btn'] = "&nbsp;Verstuur&nbsp;";

        $lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Preferences Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
        $lang_string['form_error'] = "Please complete the Title and Author fields.";
        $lang_string['label_entry_order'] = "Bericht Volgorde:";
        $lang_string['select_new_to_old'] = "Nieuwste bovenaan";
        $lang_string['select_old_to_new'] = "Oudste bovenaan";
        $lang_string['label_comment_order'] = "Kommentaar volgorde:";
        $lang_string['cal_sunday'] = "Zondag";
        $lang_string['cal_monday'] = "Maandag";
        $lang_string['label_calendar_start'] = "Kalender startdag";
        $lang_string['title_sidebar'] = "Sidebar"; // New in 0.4.7
        $lang_string['title_comments'] = "Compressie"; // New in 0.4.7
        $lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
        $lang_string['title_compression'] = "Compressie"; // New in 0.4.7
        $lang_string['title_entries'] = "Berichten"; // New in 0.4.7
        $lang_string['title_general'] = "Generaal"; // New in 0.4.7
        $lang_string['title_language'] = "Taal"; // New in 0.4.7
        $lang_string['blog_comment_days_expiry'] = "Commentaar toegestaan voor hoeveel dagen? (0 betekent geen limiet)"; // New in 0.4.8
        $lang_string['blog_comments_moderation'] = "Commentaar moet eerst goedgekeurd worden door een ingelogde gebruiker
          (altijd zichtbaar voor de gebruiker)"; // New in 0.5.0
        $lang_string['comment_moderation'] = "Commentaar keuring Opties"; // New in 0.5.0
        break;
      case 'comment_moderation':
        $lang_string['title'] = "Ongekeurde  Commenaar";
        $lang_string['instructions'] = "Dit is een lijst van al de kommentaar die nog niet goedgekeurd is.";
        $lang_string['header'] = "Commentaar keuring lijst";
        $lang_string['enteredby'] = "Toegevoegd door: ";
        $lang_string['entrydate'] = "Datum: ";
        $lang_string['blogentrytitle'] = "Bericht Titel: ";
        $lang_string['enteredcontent'] = "Inhoud: ";
        $lang_string['totalunmodded'] = " reacties op goedkeuring te wachten.";
        $lang_string['mod_approve'] = "[Goedkeuren] ";
        $lang_string['mod_delete'] = "[Wissen]";
        break;
      case 'moderation':
        $lang_string['title'] = "Commentaar keuring instellingen";
        $lang_string['instructions'] = "Hier kunt u de automatische commentaar keuring instellingen wijzigen";
        $lang_string['submit_btn'] = "&nbsp;Versturen &nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Oeps!</h2>Informatie niet opgeslagen. Er was een probleem met het opslaan van uw informatie<br /><br />Melding:<br />";
        $lang_string['success'] = "<h2>Preferences Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
        $lang_string['banned_address_list_title'] = "<h2>Geblokeerde IP-adressen</h2>";
        $lang_string['banned_address_list'] = "Hieronder is een lijst van alle blokkeerde IP-adressen. Ieder IP moet op een aparte lijn staan. Alleen maar IP addressen (geen DNS Namen zijn toegestaan).";
        $lang_string['banned_word_list_title'] = "<h2>Geblokkeerde Woorden</h2>";
        $lang_string['banned_word_list'] = "Hieronder is een lijst van geblokkeerde woorden. Iedere woord (of zin) moet op een aparte lijn staan.";
        break;
      case 'trackbacks':
        // Trackbacks
        $lang_string['title'] = "Trackbacks";
        $lang_string['header'] = "Trackback URL voor dit bericht:";
        $lang_string['delete_btn'] = "wissen";
        // Error Response
        $lang_string['error_add'] = "Fout met trackback-informatie op te slaan.";
        $lang_string['error_delete'] = "<h2>Oeps!</h2>Er was een probleem met de trackback te wissen.<br /><br />Melding:<br />";
        $lang_string['success_delete'] = "<h2>Trackback uitgewist!</h2>."; // New for 0.4.8.1
        break;

      case 'options':
        $lang_string['title'] = "Opties";
        $lang_string['instructions'] = "Gebruik dit formulier om datum en tijd instellingen voor berichten te wijzigen. Je kan 12 of 24 urige tijdsaanduidingen gebruiken en kort of          lang datum formaat. De <b>Voorbeeld</b> velden worden automatisch gewijzigd om de instellingen te bekijken.";
        // Long Date
        $lang_string['ldate_title'] = "Lange datum instelling:";
        $lang_string['weekday'] = "Weekdag";
        $lang_string['month'] = "Maand";
        $lang_string['day'] = "Dag";
        $lang_string['year'] = "Jaar";
        $lang_string['none'] = "Niks";
        // Short Date
        $lang_string['sdate_title'] = "Korte Datum instelling:";
        $lang_string['s_month'] = "Maand";
        $lang_string['s_mon'] = "MMM";
        $lang_string['s_day'] = "Dag";
        $lang_string['s_year'] = "Jaar";
        $lang_string['zero_day'] = "Extra 0 voor de dag";
        $lang_string['show_century'] = "Show century";
        // Time
        $lang_string['time_title'] = "Tijd instelling:";
        $lang_string['12hour'] = "12-urige klok";
        $lang_string['24hour'] = "24-urige klok";
        $lang_string['before_noon'] = "Voor de middag";
        $lang_string['after_noon'] = "Na de middag";
        // Date
        $lang_string['date_title'] = "Datum aanduiding:";
        $lang_string['long_date'] = "Lange datum";
        $lang_string['short_date'] = "Korte datum";
        $lang_string['time'] = "Tijd";
        // Menu
        $lang_string['menu_title'] = "Menu Date Display Format:";
        $lang_string['long_date'] = "Long Date";
        $lang_string['short_date'] = "Short Date";
        // Used in multiple places
        $lang_string['zero_day'] = "Voorloop 0 voor de dag";
        $lang_string['zero_month'] = "Voorloop 0 voor de maand";
        $lang_string['zero_hour'] = "Voorloop 0 voor het uur";
        $lang_string['separator'] = "Scheidingsteken:";
        $lang_string['preview'] = "Voorbeeld:";
        $lang_string['server_offset'] = "Tijdsverschil server (in uren):";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Verstuur&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Oeps!</h2>Instellingen niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
        $lang_string['success'] = "<h2>Options Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
      break;
      
      case 'themes':
        $lang_string['title'] = "Stijlen";
        $lang_string['instructions'] = "Gebruik het keuzemenu om een andere stijl te kiezen.";
        // Themes
        $lang_string['choose_theme'] = "Stijlen:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Verstuur&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Oeps!</h2>Instellingen niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
              $lang_string['success'] = "<h2>Geluk!</h2>Instellingen zijn opgeslagen."; // New for 0.4.8.1
              break;

          case 'upload_img':
        $lang_string['title'] = "Afbeelding uploaden";
        $lang_string['instructions'] = "Klik op de knop de afbeelding te selecteren.";
        $lang_string['select_file'] = "Selecteer afbeelding:";
        $lang_string['upload_btn'] = "Uploaden";
        // Error Response
        $lang_string['error'] = "<h2>Oeps!</h2>Kan afbeelding niet uploaden. Extra informatie:<br /><br />Melding:<br />";
                    $lang_string['success'] = "<h2>Afbelding upgeloaden!</h2>T"; // New for 0.4.8.1       
        break;

            case 'search': // <-- New 0.3.7
        $lang_string['title'] = "Zoek Resultaten";
        $lang_string['instructions'] = "Zoek resultaten voor <b>%string</b>:";
        $lang_string['not_found'] = "Geen resulaten gevonden";
        break;

      case 'contact':
        $lang_string['contact_capcha'] = "Anti-Spam: Invoegen - "; // 0.4.2
        $lang_string['title'] = "Contact Me";
        $lang_string['instructions'] = "Vul het formulier in:";
        $lang_string['form_error'] = "Vul de onderwerp- en reactievelden.";
        $lang_string['name'] = "Name:";
        $lang_string['email'] = "Email:";
        $lang_string['subject'] = "Onderwerp:";
        $lang_string['comment'] = "Reactie";
        $lang_string['submit_btn'] = "&nbsp;Versturen&nbsp;";
        $lang_string['success'] = "<h2>Gelukt!</h2>Uw boodschap was verstuurd<p />";
        $lang_string['failure'] = "<h2>Error!</h2>Uw boodschap was niet verzonden. Het anti-spam veld was fout ingevuld<p />";
        $lang_string['contactsent'] = "Kontakt verzonden door: ";  // New for 0.4.6
        $lang_string['IPAddress'] = "IP Adres:";  // New for 0.4.6
        $lang_string['useragent'] = "Useragent:";  // New for 0.4.6
        $lang_string['wrote'] = "<i>On %s, %s schreef:</i><br />\n<br />\n%s"; // New for 0.4.6.2
        break;

      case 'stats':
        $lang_string["title"] = "Statistieken";
        $lang_string["general"] = "Generaal";
        $lang_string["entry_info"] = "<b>%s</b> berichten met <b>%s</b> woorden opgeslagen in <b>%s</b> bytes";
        $lang_string["comment_info"] = "<b>%s</b> reacties met <b>%s</b> woorden opgeslagen in <b>%s</b> bytes";
        $lang_string["trackback_info"] = "<b>%s</b> trackbacks opgeslagen in <b>%s</b> bytes";
        $lang_string["static_info"] = "<b>%s</b> vaste paginas met <b>%s</b> woorden opgeslagen in <b>%s</b> bytes";
        $lang_string["most_viewed_entries"] = "10 meest bekeken berichten";
        $lang_string["most_commented_entries"] = "10 met meeste reacties";
        $lang_string["most_trackbacked_entries"] = "10 met meeste trackbacks";
        $lang_string['vote_info'] = "<b>%s</b> stemmen opgeslagen in <b>%s</b> bytes"; // 0.4.1
        $lang_string["most_voted_entries"] = "10 mest gestemde berichten"; // 0.4.1
        $lang_string["most_rated_entries"] = "10 Meest rated berichten"; // 0.4.1
        break;

      case 'errorpage-nocookies':  // New for 0.4.6
        $lang_string["title"] = 'HTTP Error 403.8 - U hebt niet de toestemming om toegang te krijgen tot de gevraagde URL';
        $lang_string["errorline1"] = 'Deze pagina of functie maakt gebruik van cookies.';
        $lang_string["errorline2"] = 'Schakel de cookie functionaliteit in uw browser aan en probeer nog een keer.';
        $lang_string["clientid"] = 'Client ID: ';
        break;

      case 'errorpage':  // New for 0.4.6
        $lang_string["403.8"] = 'HTTP Error 403.8 - U hebt niet de toestemming om toegang te krijgen tot de gevraagde URL';
        $lang_string["404"] = 'HTTP Error 404 - Pagina of functie bestaat niet';
        $lang_string["error_404"] = 'Pagina of functie bestaat niet.';
        $lang_string["error_javascript"] = 'Deze functie of pagina maakt gebruik van Javascript om te functioneren.';
        $lang_string["error_emailnotsent"] = 'Boodscap versturen is mislukt.';
        $lang_string["error_emailnotsentcapcha"] = 'Versturen van de boodschap is mislukt want het anti-spam veld was niet goed ingevuld.';
        $lang_string["clientid"] = 'Klant ID: ';
        break;

      case 'emoticons':  // New for 0.4.7
        $lang_string['title'] = "Admin Emoticons";
        $lang_string['instructions'] = "
          Kruis de emoticons die u wilt gebruiken. Schrijf in het tekstveld de tags die u
          voor deze emoticon wil gebruiken. Meerdere tags kunnen gebruikt worden, gescheiden door spaties<br /><br />

          Bij voorbeeld:<br />
          :) :-) :SMILE: :HAPPY:<br /><br />

          <i>(Het is aangeraden om tags langer dan twee tekens te gebruiken.)</i>";
        $lang_string["upload_instructions"] = 'Nieuwe emonticon uploaden:';
        $lang_string["upload_success"] = 'Gelukt! Afbeelding upgeloaden!';
        $lang_string["upload_error"] = 'Oeps! Afbeelding was niet upgeloaden.';
        $lang_string["upload_invalid"] = 'Oeps! Invalide bestand. Plaatje moet in png, jpg, of gif formaat zijn.';
        $lang_string["save_success"] = 'Emoticon instelling opgeslagen!';
        $lang_string["save_error"] = 'Oeps! Emoticon instelling niet opgeslagen.';
        $lang_string["save_button"] = 'Emoticons opslaan';
        break;

      case 'archives': // New for 0.4.8
        $lang_string['title'] = "Archief";
        $lang_string['showall'] = "Alles bekijken";
        break;

      case 'manage_users':
        $lang_string['title'] = "Gebruikers bewerken";
        $lang_string['instructions'] = "Gebruikers creëren, wijzigen en wissen die geen beheerders zijn maar wel commentaar kunnen keuren of achterlaten.";
        $lang_string['fulladminerror'] = "U hebt geen toestemming om dit te doen!";
        $lang_string['header_user'] = "Gebruiker: ";
        $lang_string['header_property'] = "Property";
        $lang_string['header_value'] = "Waarde";
        $lang_string['prop_username'] = "Gebruikersnaam:";
        $lang_string['prop_fullname'] = "Display naam:";
        $lang_string['prop_password'] = "Wachtwoord:";
        $lang_string['prop_email'] = "E-mail:";
        $lang_string['prop_avatar'] = "Avatar URL:";
        $lang_string['prop_state'] = "Actief?";
        $lang_string['prop_sec_Moderate'] = "Commentaar keuren?";
        $lang_string['prop_sec_Delete'] = "Berichten wissen?";
        $lang_string['prop_sec_Edit'] = "Berichten bewerken?";
        $lang_string['btn_SaveChanges'] = "Opslaan";
        $lang_string['btn_CreateUser'] = "Nieuwe gebruiker creëren";
        $lang_string['btn_Cancel'] = "Annuleren";  
        $lang_string['grid_header'] = "Gebruikers lijst";
        $lang_string['grid_login'] = 'Inloggen';
        $lang_string['grid_email'] = 'Email';
        $lang_string['grid_avatar'] = 'Avatar';
        $lang_string['grid_state'] = 'Actief?';
        $lang_string['btn_modify'] = 'Veranderen';
        $lang_string['btn_delete'] = 'Wissen';  
        break;

      default:
        break;
    }
  }
?>
