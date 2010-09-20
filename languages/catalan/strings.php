<?php
  // Catalan  Language Translation(s)
  // (c) 2006 Laura Primo Monlleo laupri <at> gmail <dot> com  (0.4.8)
  //  Retocat per Montse Treviño mtrevim <at> gmail <dot> com  (0.5.1) [2008]

  // Language Version:   0.5.1

  function sb_language( $page ) {
    global $language, $html_charset, $php_charset, $lang_string;

    // Language: Spanish
    $lang_string['language'] = 'catala';
    $lang_string[ 'locale' ] = array('ca_ES', 'ca', 'catala');
    $lang_string['rss_locale'] = 'ca-ES'; // New 0.4.8

    // ISO Charset: ISO-8859-1
    $lang_string['html_charset'] = 'ISO-8859-1';
    $lang_string['php_charset'] = 'ISO-8859-1';
    setlocale( LC_TIME, $lang_string['locale'] );

    // Some Global Strings

    // Menu
    $lang_string['menu_links'] = "Enlla&ccedil;";
    $lang_string['menu_home'] = "Principal";
    $lang_string['menu_contact'] = "Contacta'ns"; // <-- New 0.3.8
    $lang_string['menu_stats'] = "Estad&iacute;stiques"; // <-- New 0.3.7r
    $lang_string['menu_calendar'] = "Calendari"; // New for 0.4.8
    $lang_string['menu_archive'] = "Arxiu";
    $lang_string['menu_viewarchives'] = "Veure arxius"; // New in 0.4.7
    $lang_string['menu_menu'] = "Men&uacute;";
    $lang_string['menu_add'] = "Afegir Entrada";
    $lang_string['menu_add_static'] = "Afegir P&agrave;gina Est&agrave;tica";
    $lang_string['menu_upload'] = "Pujar Imatge";
    $lang_string['menu_setup'] = "Configuraci&oacute;";
    $lang_string['menu_categories'] = "Categories";
    $lang_string['menu_info'] = "Informaci&oacute;"; // <-- New 0.3.7
	$lang_string['manage_users'] = "Administració d'usuaris";
    $lang_string['manage_php_config'] = "Veure Configuració PHP"; // New in 0.5.0.1
    $lang_string['menu_options'] = "Data i Hora";
    $lang_string['menu_themes'] = "Estils";
    $lang_string['menu_colors'] = "Colors";
    $lang_string['menu_change_login'] = "Canviar usuari/contrasenya";
    $lang_string['menu_logout'] = "Sortir";
    $lang_string['menu_login'] = "Entrar";
    $lang_string['menu_most_recent'] = "Darrers Comentaris";
    $lang_string['menu_most_recent_entries'] = "&Uacute;ltims Articles";
    $lang_string['menu_most_recent_trackback'] = "Darrers Trackbacks"; // <-- New 0.3.8
    $lang_string['menu_add_block'] = "Seccions";
    $lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
    $lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
    $lang_string['menu_moderation'] = "Moderació per IP / paraules"; // New for 0.4.9

    $lang_string['menu_commentmoderation'] = "Comentaris sense moderar";
	$lang_string['menu_random_entry'] = "Entrada aleatoria"; // New for 0.5.2
	$lang_string['menu_plugins'] = "Plugins"; // New for 0.5.2
    $lang_string['notice_moderator1'] = "Tens ";
    $lang_string['notice_moderator2'] = " comentari(s) que requereix(en) la teva aprovació.";
    $lang_string['notice_loggedin'] = "Actualment estás loguejat.";
    $lang_string['sb_postedby'] = 'Publicat per';
    $lang_string['sb_admin'] = 'Administrador';
    $lang_string['sb_read_entry_btn'] = 'Visualitzar entrada'; // 0.5.0
    $lang_string['sb_comment_view'] = 'visualitzar'; // 0.5.0
    $lang_string['sb_comments_plural_view'] = 'views'; // 0.5.0

    // Counter
    $lang_string['counter_today'] = "Avui:"; // New for 0.4.8
    $lang_string['counter_yesterday'] = "Ahir:"; // New for 0.4.8
    $lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
    $lang_string['counter_title'] = "Comptadors Totals"; // New for 0.4.8

    // Other
    $lang_string['home'] = 'P&agrave;gina Principal';
    $lang_string['nav_next'] = 'Seg&uuml;ent'; // <-- New 0.3.7
    $lang_string['nav_back'] = 'Anterior'; // <-- New 0.3.7
	$lang_string['nav_first'] = 'Primer'; // New in 0.5.0.1
    $lang_string['nav_last'] = 'Últim'; // New in 0.5.0.1
	$lang_string['search_title'] = 'Recerca'; // <-- New 0.3.7
    $lang_string['search_go'] = 'Enviar'; // <-- New 0.3.7
    $lang_string['page_generated_in'] = 'P&agrave;gina generada en %s segons'; // <-- New 0.3.7
    $lang_string['counter_total'] = 'Visites a la web: '; // New in 0.4.8
    $lang_string['read_more'] = 'Llegir m&eacute;s...'; // New in 0.4.8
	$lang_String['randomentry'] = 'Entrada aleatoria'; // New in 0.5.0.1
    $lang_string['randomquote'] = 'Quote aleatori'; // New in 0.5.0.1

    // SB Functions
    $lang_string['sb_months'] = array( 'Gener', 'Febrer', 'Mar&ccedil;', 'Abril', 'Maig', 'Juny', 'Juliol', 'Agost', 'Septembre', 'Octubre', 'Novembre', 'Desembre' );
    $lang_string['sb_default_title'] = 'Sense t&iacute;tol';
    $lang_string['sb_default_author'] = 'Sense autor';
    $lang_string['sb_default_footer'] = 'Peu de P&agrave;gina';
    $lang_string['sb_edit'] = 'editar';
    $lang_string['sb_delete'] = 'esborrar';
    $lang_string['sb_permalink'] = 'enlla&ccedil; permanent'; // <-- New 0.3.8
    $lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
	$lang_string['sb_postedby'] = 'Publicat per'; // 0.5.0
    $lang_string['sb_admin'] = 'Administrador'; // 0.5.0
    $lang_string['sb_relatedlink'] = 'enlla&ccedil; relacionat'; // <-- New in 0.4.6
    $lang_string['sb_add_comment_btn'] = 'afegir comentari';
	$lang_string['sb_read_entry_btn'] = 'visualitzar entrada'; // 0.5.0
    $lang_string['sb_comment_btn_number_first'] = true;
    $lang_string['sb_comment_btn'] = 'comentari';
	$lang_string['sb_comment_view'] = 'visualitzar'; // 0.5.0
    $lang_string['sb_comments_plural_btn_number_first'] = true;
    $lang_string['sb_comments_plural_btn'] = 'comentaris';
	$lang_string['sb_comments_plural_view'] = 'visualitzacions'; // 0.5.0
    // ( 1 view )
    $lang_string['sb_view_counter_pre'] = '';
    $lang_string['sb_view_counter_post'] = ' visualitzaci&oacute;';
    // ( 2 views )
    $lang_string['sb_view_counter_plural_pre'] = '';
    $lang_string['sb_view_counter_plural_post'] = ' visualitzacions';
    $lang_string['sb_add_link_btn'] = 'Afegir Enlla&ccedil;';
    $lang_string['sb_rate_entry_btn'] = 'Feu clic per valorar l\'entrada';

    // Entry Text Editor
    if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
      $lang_string['chk_visiblemenu'] = "Visible (Mostrar al menú)"; // 0.5.0
      $lang_string['label_subject'] = "T&iacute;tol:";
        $lang_string['label_insert'] = "Extres (Negreta / Cursiva / URL / Imatge):";
        $lang_string['btn_bold'] = " N ";
        $lang_string['btn_italic'] = " I ";
        $lang_string['btn_image'] = "IMG";
        $lang_string['btn_url'] = "URL";
        $lang_string['btn_readmore'] = "llegir m&eacute;s"; // 0.4.8
        $lang_string['view_images'] = "Vore imatges carregades";
        $lang_string['label_entry'] = "Entrada:";
        $lang_string['btn_preview'] = "&nbsp;Previsualitzar&nbsp;";
        $lang_string['btn_post'] = "&nbsp;Publicar&nbsp;";
        $lang_string['file_name'] = "Nom de fitxer est&agrave;tic: (sense espais ni extensions de fitxer)"; // <-- New 0.3.8

        // Javascript Strings
        $lang_string['insert_styles'] = "Introduir el text";
        $lang_string['insert_image'] = "Introduir la direcci&oacute; URL per a la imatge";
        $lang_string['insert_url1'] = "Introduir el text a ser mostrat amb l'enlla&ccedil; (opcional)";
        $lang_string['insert_url2'] = "Introduir la direcci&oacute; web completa per l\'enlla&ccedil;";
        $lang_string['insert_url3'] = "Obrir URL en una nova finestra (Opcional):"; // <-- New 0.3.6
        $lang_string['form_error'] = "Si us plau ompli els camps T&iacute;tol i Text.";

        // More Javascript Strings <-- New 0.3.6
        $lang_string['insert_image_optional'] = 'Opcional:';
        $lang_string['insert_image_width'] = 'Ample (Opcional):';
        $lang_string['insert_image_height'] = 'Al&ccedil;ada (Opcional):';
        $lang_string['insert_image_popup'] = 'Veure en una finestra emergent al fer clic (Opcional):';
        $lang_string['insert_image_float'] = 'Float (Opcional):';

        $lang_string['day'] = 'Dia';
        $lang_string['month'] = 'Mes';
        $lang_string['year'] = 'Any';
        $lang_string['hour'] = 'Hora';
        $lang_string['minute'] = 'Minut';
        $lang_string['second'] = 'Segon';
    }
    switch ($page) {
      case 'add':
        // Add Entry
        $lang_string['title'] = "Afegir Entrada";
        $lang_string['instructions'] = "Per col&middot;locar una entrada omplir els camps que es troben a continuaci&oacute;, pot previsualitzar l'entrada abans de pupblicar-la fent click a 'Previsualitzar' o publicar-la directament fent click a 'Publicar'.";
        $lang_string['title_ad'] = "Confirmar Pings de Trackback"; // <-- New 0.3.8
        $lang_string['instructions_ad'] = "Aquests s&oacute;n els Auto-Discovered URIs sobre els quals far&agrave; ping. Si no vol fer ping a un cert URI, desmarqui'l. Aleshores premi 'OK' per fer ping sobre els URIs marcats o premi 'Cancel' per no realitzar cap ping."; // <-- New 0.3.8
        $lang_string['label_tb_ping'] = "Trackback ping(s) a enviar (separats per comes)"; // <-- New 0.3.8
        $lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
        $lang_string['label_relatedlink'] = "Enlla&ccedil; Relacionat"; // New for 0.4.6
        $lang_string['label_categories'] = "Llista de categories";
        // Preview / Edit Entry
        $lang_string['title_preview'] = "Previsualitzar / Editar entrada";
        $lang_string['instructions_preview'] = "Aix&iacute; &eacute;s como es veu la seva entrada. Si està utilitzant estils de text o incloent imatges recordi tancar totes les 'etiquetes' (tags)";
        $lang_string['title_update'] = "Actualitzar entrada";
        $lang_string['instructions_update'] = "Pot canviar la seva entrada utilitzant el formulari que es troba a sota. Faci click a 'Previsualitzar' o a 'Publicar' un cop hagi acabat";
        $lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
        $lang_string['cancel_btn'] = "&nbsp;Cancel&middot;lar&nbsp;"; // <-- New 0.3.8
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>L'entrada no ha pogut ser desada. S'ha trobat un problema mentre es guardava.<br /><br />Resposta del servidor:<br />";
        $lang_string['success'] = "<h2>Entrada Guardada!</h2>La seva entrada s'ha desat satisfactòriament."; // 0.4.8.1
        break;
      case 'add_static':
        // Add Entry
        $lang_string['title'] = "Afegir P&agrave;gina Est&agrave;tica";
        $lang_string['instructions'] = "Ompli el formulari que es troba sota per crear una p&agrave;gina est&agrave;tica. A difer&egrave;ncia de les entrades ordinaries a la bit&agrave;cora, les entrades est&agrave;tiques apareixen com a enlla&ccedil;os al men&uacute; de la dreta. Podran emprar-se per p&agrave;gines que es vulgui que estiguin sempre disponibles, com ara: Sobre mi, Contactar, Agenda, etc. Premi 'Previsualitzar' per mirar com quedar&agrave; la p&agrave;gina o premi 'Publicar' per desar-la";
        // Preview / Edit Entry
        $lang_string['title_preview'] = "Previsualitzar / Editar P&agrave;gina Est&agrave;tica";
        $lang_string['instructions_preview'] = "Aix&iacute; &eacute;s com la seva p&agrave;gina est&agrave;tica es mostrar&agrave;. Si est&agrave; usant estils de text o ha inclòs imatges, recordi 'tancar' totes les 'etiquetes'.";
        $lang_string['title_update'] = "Actualitzar P&agrave;gina Est&agrave;tica";
        $lang_string['instructions_update'] = "Pot canviar l'entrada utilitzant el formulari que es troba a sota. Premi 'Previsualitzar' o 'Publicar' quan estigui preparat.";
        $lang_string['form_error'] = "Si us plau ompli els camps T&iacute;tol, Text i Nom.";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>L'entrada no pot ser desada. S'ha trobat un problema mentre es guardava.<br /><br />Resposta del servidor:<br />";
        break;
      case 'add_block':
        // Add / Manage Blocks
        $lang_string['title'] = "Afegir / Organitzar Seccions";
        $lang_string['instructions'] = "Afegir Secci&oacute; Personalitzada per mostrar-la al Men&uacute; Lateral";
        $lang_string['up'] = "Cap a Dalt";
        $lang_string['down'] = "Cap a Baix";
        $lang_string['edit'] = "Editar";
        $lang_string['delete'] = "Esborrar";
        $lang_string['block_name'] = "Nom de la secci&oacute; :";
        $lang_string['block_content'] = "Contingut de la Secci&oacute;:";
        $lang_string['instructions_edit'] = "Est&agrave; editant una Secci&oacute; :";
        $lang_string['instructions_modify'] = "Faci clic en <b>Editar</b> per modificar la secci&oacute;:";
        $lang_string['submit_btn_edit'] = "Editar Secci&oacute;";
        $lang_string['submit_btn_add'] = "Afegir Secci&oacute;";
        $lang_string['form_error'] = "Si us plau ompli el camp Nom.";
        break;
      case 'add_link':
        // Add / Manage Links
        $lang_string['static_pages'] = "P&agrave;gines Est&agrave;tiques:";
        $lang_string['title'] = "Afegir / Organitzar Enlla&ccedil;os";
        $lang_string['instructions'] = "Afegir enlla&ccedil;os a altres webs. Premi els botons Cap a Dalt i Cap a Baix per canviar l'ordre dels enlla&ccedil;os.";
        $lang_string['up'] = "Cap a dalt";
        $lang_string['down'] = "Cap a baix";
        $lang_string['edit'] = "Editar";
        $lang_string['delete'] = "Esborrar";
        $lang_string['link_name'] = "Nom de l'Enlla&ccedil;:";
        $lang_string['link_url'] = "URL [Direcci&oacute; Web] (deixi'l en blanc per crear un separador):";
        $lang_string['instructions_edit'] = "Est&agrave; editant un enlla&ccedil;:";
        $lang_string['instructions_modify'] = "Faci click en <b>Editar</b> per modificar l'enlla&ccedil;:"; // <-- New
        $lang_string['submit_btn_edit'] = "Editar enlla&ccedil;";
        $lang_string['submit_btn_add'] = "Afegir enlla&ccedil;";
        $lang_string['form_error'] = "Si us plau ompli els camps Nom i URL.";
        break;
      case 'categories':
        // Add / Manage Links
        $lang_string['title'] = "Afegir / Organitzar Categories";
        $lang_string['instructions'] = "Ompli el formulari que es troba sota per crear una categoria. Cada nom de categoria podr&agrave; tindre aquest format 'nom categoria (número id)'.
 Per crear jerarquies es crearàn arbres amb espais.<br /><br /><b>Exemple:</b><br />General (1)<br />Noticies (3)<br />&nbsp;&nbsp;Anuncis (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Tecnologia (2)<br />";
        $lang_string['error'] = "Error";
        $lang_string['current_categories'] = "Categories Actuals";
        $lang_string['no_categories_found'] = "No s'han trobat Categories";
        $lang_string['category_list'] = "Llistat de Categories:";
        $lang_string['validate'] = "Validar";
        $lang_string['submit_btn'] = "&nbsp;Acceptar&nbsp;";
        break;
      case 'colors':
        // Change Colors
        $lang_string['title'] = "Canviar colors";
        $lang_string['instructions'] = "Pot canviar els colors del text i del fons de l'entrada. Primer seleccioni el camp a sota llavors utilitzi el sel·leccionador de color per agafar el nou color. El valor canvia automàticament";
        $lang_string['bg_color'] = "Fons de la p&agrave;gina";
        $lang_string['main_bg_color'] = "Fons de la p&agrave;gina principal";
        $lang_string['border_color'] = "Borde de la p&agrave;gina";
        $lang_string['inner_border_color'] = "Borde Interior";
        $lang_string['header_bg_color'] = "Fons de l'encap&ccedil;alament";
        $lang_string['header_txt_color'] = "Text de l'encap&ccedil;alament";
        $lang_string['menu_bg_color'] = "Fons del men&uacute;";
        $lang_string['footer_bg_color'] = "Fons del peu de p&agrave;gina";
        $lang_string['txt_color'] = "Text principal";
        $lang_string['headline_txt_color'] = "Text de l'encap&ccedil;alament";
        $lang_string['date_txt_color'] = "Text de la data";
        $lang_string['footer_txt_color'] = "Text del peu de p&agrave;gina";
        $lang_string['link_reg_color'] = "Enlla&ccedil; normal";
        $lang_string['link_hi_color'] = "Enlla&ccedil; resaltat";
        $lang_string['link_down_color'] = "Enlla&ccedil; visitat";
        // More Colors
        $lang_string['entry_bg'] = "Fons de l'entrada";
        $lang_string['entry_title_bg'] = "Fons del t&iacute;tol de l'entrada";
        $lang_string['entry_border'] = "Borde de l'entrada";
        $lang_string['entry_title_text'] = "Text del t&iacute;tol de l'entrada";
        $lang_string['entry_text'] = "Text de l'entrada";
        $lang_string['menu_bg'] = "Fons del men&uacute;";
        $lang_string['menu_title_bg'] = "Fons del t&iacute;tol del men&uacute;";
        $lang_string['menu_border'] = "Borde del men&uacute;";
        $lang_string['menu_title_text'] = "Text del t&iacute;tol del men&uacute;";
        $lang_string['menu_text'] = "Text del men&uacute;";
        $lang_string['menu_link_reg_color'] = "Enlla&ccedil; normal en el men&uacute;";
        $lang_string['menu_link_hi_color'] = "Enlla&ccedil; resaltat en el men&uacute;";
        $lang_string['menu_link_down_color'] = "Enlla&ccedil; visitat en el men&uacute;";
        $lang_string['static_bg'] = "Fons Pàg. Estàtica"; // 0.5.0
        $lang_string['static_title_bg'] = "Fons Títol Pàg. Estàtica"; // 0.5.0
        $lang_string['static_border'] = "Borde Pàg. Estàtica"; // 0.5.0
        $lang_string['static_title_text'] = "Text títol Pàg. Estàtica"; // 0.5.0
        $lang_string['static_text'] = "Text Pàg. Estàtica"; // 0.5.0

        $lang_string['comment_bg'] = "Fons Comentari"; // 0.5.0
        $lang_string['comment_title_bg'] = "Fons Títol Comentari"; // 0.5.0
        $lang_string['comment_border'] = "Borde Comentari"; // 0.5.0
        $lang_string['comment_title_text'] = "Text Títol Comentari"; // 0.5.0
        $lang_string['comment_text'] = "Text Comentari"; // 0.5.0
        // Submit
        $lang_string['color_preset'] = "Esquemes de Color:";
        $lang_string['scheme_name'] = "Introdueixi un nom per l'Esquema de Color Personalitzat:";
        $lang_string['scheme_file'] = "Introdueixi el nom del fitxer de l'Esquema: (sense espais ni extensions)";
        $lang_string['form_error'] = "Si us plau, introdueixi un nom per al seu Esquema de Color Personalitzat.";
        $lang_string['save_btn'] = "&nbsp;Desar&nbsp;";
        $lang_string['submit_btn'] = "&nbsp;Acceptar&nbsp;";
        $lang_string['theme_doesnt_allow_colors'] = 'El tema actualment sel·leccionat no permet la modificaci&oacute; dels colors.';
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>La informaci&oacute; no ha pogut ser desada. S'ha trobat un problema mentre es guardava.<br /><br />Resposta del servidor:<br />";
        $lang_string['success'] = "<h2>Colors Guardats!</h2>La informació s'ha guardat correctament."; // New for 0.4.8.1
        break;
      case 'comments':
        // Comments
        $lang_string['name'] = "Nom:"; //New in 0.4.6.2
        $lang_string['email'] = "Correu electr&ograve;nic:"; //New in 0.4.6.2
        $lang_string['homepage'] = "P&agrave;gina:"; //New in 0.4.6.2
        $lang_string['comment'] = "Comentari:"; //New in 0.4.6.2
        $lang_string['title'] = "Comentaris";
        $lang_string['header'] = "Afegir comentari";
        $lang_string['instructions'] = "ompli els camps de sota per deixar el seu comentari.";
        $lang_string['comment_name'] = "Nom:";
        $lang_string['comment_email'] = "Correu electr&ograve;nic:"; // 0.3.8
        $lang_string['commentposted'] = "Nou comentari publicat en: ";  // New for 0.4.6.2
        $lang_string['IPAddress'] = "Direcci&oacute; IP:";  // New for 0.4.6.2
        $lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2
        $lang_string['wrote'] = "<i>El %s, %s va escriure:</i><br />\n<br />\n%s"; // New for 0.4.6.2

        $lang_string['comment_url'] = "Web:"; // 0.3.8
        $lang_string['comment_capcha'] = "Anti-Spam: Introdu&iuml;sca "; // 0.4.2
        $lang_string['form_error'] = "Si us plau ompli els camps Nom, Comentari i el camp Anti-Spam."; //0.4.2
        $lang_string['comment_remember'] = "Recordar la meva informaci&oacute; personal:"; // 0.3.8
        $lang_string['comment_text'] = "Comentari:";
        $lang_string['post_btn'] = "&nbsp;Publicar comentari&nbsp;";
        $lang_string['delete_btn'] = "Esborrar";
        $lang_string['ban_btn'] = "ban ip"; // New for 0.4.8
        $lang_string['expired_comment1'] = "Ho lamentem. No s&oacute;n permesos els comentaris després de"; // New for 0.4.8
        $lang_string['expired_comment2'] = " dies."; // New for 0.4.8

        $lang_string['email_moderator'] = "Els comentaris estàn actualment moderats. El seu comentari requereix ser aprovat abans de poder ser vist pel públic."; // New for 0.5.0
        $lang_string['user_notice_mod'] = "La moderació està activada a aquest blog. El seu comentari requereix l'aprovació dels administradors abans de ser visible."; // new for 0.5.0
        $lang_string['return_to_comments'] = 'Tornar als comentaris';

        $lang_string['blacklisted'] = "Perdoni, la seva adre&ccedil;a IP ha estat banejada. Els seus comentaris no seran permessos."; // New for 0.4.8
        $lang_string['bannedword'] = "El seu comentari, url, nom o correu electrònic contenen paraules que han estat prohibides per l'administrador. El seu comentari NO ha estat publicat."; // New for 0.4.8
        $lang_string['nocomments'] = "No estàn disponibles els comentaris per a aquesta entrada."; // New for 0.4.9

        // Error Response
        $lang_string['error_add'] = "<h2>Ups!</h2>Comentari no desat. S'ha produït un problema mentre es desava el seu comentari.<br /><br />Resposta del servidor:<br />";
        $lang_string['error_delete'] = "<h2>Ups!</h2>Comentari no esborrat. S'ha produ&iuml;t un problema mentre s'esborrava el seu comentari.<br /><br />Resposta del servidor:<br />";
        $lang_string['error_ban'] = "<h2>Ups!</h2>La IP no s'ha inclòs a la llista d'ips prohibides.<br /><br />Resposta del Servidor:<br />";
        $lang_string['success_add'] = "<h2>Comentari Afegit!</h2>El seu comentari s'ha desat satisfactòriament."; // New for 0.4.8.1
        $lang_string['success_delete'] = "<h2>Comentari Esborrat!</h2>El comentari ha estat eliminat."; // New for 0.4.8.1
        $lang_string['success_ban1'] = "<h2>IP Prohibida!";
        $lang_string['success_ban2'] = "</h2>Per esborrar aquesta prohibició en el futur, utilitzi la opció 'Moderació' en el menú de configuració."; // New for 0.4.8.1
		$lang_string['form_error'] = "Si us plau, completi els camps de Nom, Comentari i Anti-Spam.";
        $lang_string['error_noip'] = "No s'ha proporcionat cap IP per la sol·licitud de llista negra.";
		        $lang_string[ 'error_comments_disabled' ] = '<h2>Error!</h2>Hey! Els comentaris no estan permessos en aquest blog. Què ets un spambot?'; // New 0.5.0
        $lang_string[ 'error_no_match' ] = '<h2>Error!</h2>La teva IP no concorda amb la IP publicada. Què ets un spambot?'; // New 0.5.0
        $lang_string[ 'error_fields_missing' ] = '<h2>Error!</h2>Falten els següents camps: '; // New 0.5.0
        $lang_string[ 'error_spambot' ] = '<h2>Error!</h2>Falten les dades de l\'antispam. Ets un spambot?'; // New 0.5.0
        $lang_string[ 'error_capcha' ] = '<h2>Error!</h2>L\'antispam que has introduït és incorrecte.'; // New 0.5.0
        $lang_string[ 'error_bad_data' ] = '<h2>Error!</h2>Les dades que has publicat no són vàlides. Ets un hacker?'; // New 0.5.0
        $lang_string[ 'error_entry_missing' ] = '<h2>Error!</h2>Estàs provant de comentar una entrada que no existeix,'; // New 0.5.0
        $lang_string[ 'error_empty_text' ] = '<h2>Error!</h2>No has introduït cap comentari o el teu nom.'; // New 0.5.0

        break;
      case 'delete':
        $lang_string['title'] = "Esborrar entrada";
        $lang_string['instructions'] = "Est&agrave; a punt d'esborrar una entrada, asseguri's de voler esborrar-la realment perqu&egrave; no es pot desfer aquesta acci&oacute;...";
        $lang_string['ok_btn'] = "&nbsp;Esborrar&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Cancel&middot;lar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>No s'ha pogut esborrar l'entrada.<br /><br />Resposta del servidor:<br />";
        $lang_string['success'] = "<h2>Entrada Esborrada!</h2>La entrada ha estat esborrada."; // New for 0.4.8.1
        break;
      case 'delete_static':
        $lang_string['title'] = "Esborrar P&agrave;gina Est&agrave;tica";
        $lang_string['instructions'] = "Est&agrave; a punt d'esborrar una p&agrave;gina est&agrave;tica, asseguri's de voler esborrar-la realment perqu&egrave; no es pot desfer aquesta acci&oacute;...";
        $lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Cancel&middot;lar&nbsp;";
        $lang_string['error'] = "<h2>¡Ups!</h2>No s'ha pogut esborrar l'entrada.<br /><br />Resposta del servidor:<br />";
        $lang_string['success'] = "<h2>Pàgina Estàtica Esborrada!</h2>La pàg. estàtica ha estat eliminada."; // New for 0.4.8.1
        break;
      case 'image_list':
        $lang_string['title'] = "Llistat d'imatges";
        $lang_string['instructions'] = "Faci click en els enlla&ccedil;os que estan sota per vore la imatge.<br><br>Per afegir una imatge a la seva entrada:<br>1) Faci clic dret en un enlla&ccedil; i esculli 'Copiar al portapapers'.<br>2) Torni a la p&agrave;gina d'afegir o editar entrada.<br>3) Faci click al bot&oacute; Imatge i pegui l'enlla&ccedil; a la finestra.";
        break;
      case 'info': // New 0.3.7
        $lang_string['title'] = "Informaci&oacute; de Meta-dades";
        $lang_string['instructions'] = "Aquesta informaci&oacute; s'empra per a les &quot;meta-dades&quot;, que ajuden als cercadors a indexar el seu web. Tamb&eacute; s'utilitza per generar els feeds RSS.";
        $lang_string['info_keywords'] = "Paraules clau: (Llistat de paraules clau separades per comes.)";
        $lang_string['info_description'] = "Descripci&iacute;: (Un resum o text lliure sobre el seu lloc.)";
        $lang_string['info_copyright'] = "Drets: (Informaci&oacute; de copyright o un enlla&ccedil; a la p&agrave;ágina que el cont&eacute;.)";
		$lang_string['tracking_code'] = "Codi Tracking Extern: (codi HTML que necessita ser executat a la pàgina principal (a les etiquetes de la capçalera per seguretat) només per cada usuari que va a la pàgina. Per exemple Google Analytics)";
        $lang_string['submit_btn'] = "&nbsp;Desar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>La informaci&oacute; no ha pogut ser desada. S'ha trobat un problema mentre es guardava la seva informaci&oacute;.<br /><br />Resposta del servidor:<br />";
        $lang_string['success'] = "<h2>Meta-Data Guardada!</h2>La informació s'ha guardat correctament."; // New for 0.4.8.1
        $lang_string['form_error'] = "Si us plau ompli els camps T&iacute;tol i Autor.";
        break;
      case 'index':
        // Index
        break;
      case 'static':
        // Index
        break;
      case 'rating': // New 0.3.8
        $lang_string['error'] = "<h2>¡Ups!</h2>La informaci&oacute; no ha pogut ser desada. S'ha trobat un problema mentre es guardava la seva inforamci&oacute;.<br /><br />Resposta del servidor:<br />";
        $lang_string['success'] = "<h2>Votació Guardada!</h2>La seva puntuació s'ha guardat correctament."; // New for 0.4.8.1
        break;
      case 'login':
        $lang_string['upgrade'] = "<h2>Actualizaci&oacute;</h2>"; // New 0.3.8
        $lang_string['upgrade_count'] = "%n comentaris necessiten ser actualizats:"; // New 0.3.8
        $lang_string['upgrade_url'] = "Actualitzar Comentaris"; // New 0.3.8
        $lang_string['title'] = "Accedir";
        $lang_string['instructions'] = "Introdueixi el seu nom de usuari i contrasenya";
        $lang_string['username'] = "Usuari:";
        $lang_string['password'] = "Contrasenya";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>¡Benvingut!</h2>S'ha connectat. Tingui un bon blogging!<p />";
       

        // Wrong Password
        $lang_string['wrong_password'] = "<h2>¡Ups!</h2>No pot accedir. Verifiqui el seu nom d'usuari i contrasenya i intenti-ho novament.<p />";
		 $lang_string['inactive_account'] = "<h2>Ups!</h2>No ha pogut accedir. El seu compte ha estat deshabilitat per l'administrador per alguna raó.<p />";
        $lang_string['form_error'] = "Si us plau ompli els camps Usuari i contrasenya."; 
        break;
      case 'logout':
        $lang_string['title'] = "Sortir";
        $lang_string['error'] = "<h2>Adéu!</h2>Ha sortit. (tampoc havies entrat...)<p />";
        $lang_string['error_no_cookie'] = "<h2>Adéu!</h2>Ha sortit. (No s'han trobat cookies. No havies entrat tampoc...)<p />"; // New 0.5.0
        $lang_string['success'] = "<h2>Adéu!</h2>Has sortit correctament.<p />";
        break;
      case 'forms':
        $lang_string['title'] = "";
        $lang_string['instructions'] = "";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>La informacii&oacute; no ha pogut ser desada. S'ha trobat un problema mentre es guardava la seva informaci&oacute;.<br /><br />Resposta del servidor:<br />";
        break;
      case 'set_login':
        $lang_string['title'] = "Canviar Usuari i Contrasenya";
        $lang_string['instructions'] = "Empre el formulari inferior per canviar el seu nom d'usuari i contrasenya. Inserta el nom d'usuari i la contrasenya que vulga utilitzar.";
        $lang_string['username'] = "Usuari:";
        $lang_string['password'] = "Contrasenya:";
        $lang_string['submit_btn'] = "&nbsp;Desar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Llest!</h2>El seu nom d'usuari i/o contrasenya est&agrave; actiu des d'ara.<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>¡Ups!</h2>Informaci&oacute; no desada. Hi ha hagut un error mentre es desava el seu nom d'usuari i contrasenya.<br /><br />Resposta del servidor:<br />";
        $lang_string['form_error'] = "Si us plau completi els camps Usuari i contrasenya.";
        $lang_string['explanation'] = "En versions recents, l'estructura de les contrasenyes ha canviat. No hi ha mode per actualitzar les claus de pas
          i/o accessos al codi del blog. Per tal de canviar la clau, cal esborrar el fitxer /config/password.php i assegurar-se de que install*.php
          existeixi al servidor local. Un cop fet aix&ograve;, cal recarregar la p&agrave;gina (o sortir del sistema). Us ser&agrave; presentat amb el mateix script
          per generar la vostra contrasenya del mateix mode que quan vau crear el blog.";  // New for 0.4.6
        break;
      case 'install00':
        $lang_string['title'] = "Benvingut";
        $lang_string['instructions'] = "Gr&agrave;cies per triar Simple PHP Blog!";
        $lang_string['blog_choose_language'] = "Seleccionar Idioma:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        break;
      case 'install01':
        $lang_string['title'] = "Benvingut";
        $lang_string['instructions'] = "Gr&agrave;cies per triar Simple PHP Blog!<br /><br />Simple PHP Blog &eacute;s un sistema de blogging lleuger. Requereix PHP versi&oacute; 4.1 o superior i permissos d'escriptura al servidor. Tota la informaci&oacute; es desada a arxius de text pla per tant no cal cap base de dades per funcionar.<br /><br />
        Per comen&ccedil;ar, Simple PHP Blog necessita crear tres directoris ('config', 'content' i 'images') en els quals desar&agrave; la seva informaci&oacute;.<br /><br />
        <b>Faci click abaix per comen&ccedil;ar la instal&middot;laci&oacute;:</b>";
        $lang_string['begin'] = "[ Comen&ccedil;ar la Instal&middot;laci&oacute; ]";
        break;
      case 'install02':
        $lang_string['title'] = "Instal&middot;laci&oacute;";
        $lang_string['instructions'] = "Intentant crear els directoris 'config', 'content' i 'images':";
        $lang_string['folder_exists'] = "Preparat! Els directoris ja existien. No s'ha fet cap canvi...";
        $lang_string['folder_failed'] = "¡Ups! No s'han pogut crear els directoris...";
        $lang_string['folder_success'] = "¡Llest! Directoris creats...";
        // Help

        $lang_string['help'] = "
        <h2>¡Ups!</h2>No s'ha pogut crear un o m&eacute;s directoris! Això sol deure's a:<br>
        <i>1) <b>Permissos d'escriptura</b> no estan configurats per permetre l'acc&eacute;s d'<b>Escriptura/Lectura</b>.</i><br>
        <i>2) Els <b>UID</b>'s (user ID's) de tots els arxius i directoris han de correspondre.</i><p />
        Segueixi les instruccions seg&uuml;ents per resoldre el problema i despr&eacute;s intenti-ho novament:<p />
        1) Crei manualment els seg&uuml;ents directoris: <b>config</b>, <b>content</b>, i <b>images</b>.<p />
        2) Dongui <b>Permisos d'escriptura</b> als directoris. Al seu client FTP; Owner, User i World han de tenir accès de <b>Read</b> i <b>Write</b>. <i>(És possible que calgui posar-se en contacte amb l'administrador del servidor per canviar aquests permissos...)</i><p />
        3) Asseguri's de que els UID's de tots els seus arxius i directoris s&oacute;n els mateixos. <i>(Es possible que calgui posar-se en contacte amb l'administrador del servidor per canviar aquests permissos...)</i>";
        $lang_string['try_again'] = "[ Reintentar ]";
        // Success
        $lang_string['success'] = "<h2>Llest!</h2>Els Directoris han estat creats amb &eacute;xit!<p /><b>Premi continuar:</b>";
        $lang_string['continue'] = "[ Continuar ]";
        break;
      case 'install03':
        $lang_string['supported'] = "<b>El seu servidor web soporta els seg&uuml;ents esquemes d'encriptaci&oacute;:</b>";
        $lang_string['standard'] = "Encriptaci&oacute; Est&agrave;ndard DES: ";
        $lang_string['extended'] = "Encriptaci&oacute; Extesa DES: ";
        $lang_string['MD5'] = "Encriptaci&oacute; MD5: ";
        $lang_string['blowfish'] = "Encriptaci&oacute; Blowfish: ";
        $lang_string['enabled'] = "Activada";
        $lang_string['disabled'] = "Desactivada";
        $lang_string['using_standard'] = "<b>Emprant la Encriptaci&oacute; Est&agrave;ndard DES...</b>";
        $lang_string['using_extended'] = "<b>Emprant la Encriptaci&oacute; Extesa DES...</b>";
        $lang_string['using_MD5'] = "<b style=\"color: green;\"> Emprant la Encriptaci&oacute; MD5...</b>";
        $lang_string['using_blowfish'] = "<b style=\"color: green;\"> Emprant la Encriptaci&oacute; Blowfish...</b>";
        $lang_string['using_unknown'] = "<b> Emprant la Encriptaci&oacute; Desconeguda...</b>";
        $lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
        $lang_string['title'] = "Crear Usuari i contrasenya";
        $lang_string['instructions'] = "Utilitzi el formulari de sota per crear un Usuari i una contrasenya.";
        $lang_string['username'] = "Usuari:";
        $lang_string['password'] = "Contrasenya";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Enhorabona!</h2>Ara mateix est&agrave; connectat. Premi a sota per visitar la p&agrave;gina de configuraci&oacute; i canviar les opcions de la seua bit&agrave;cora.<p />";
        $lang_string['btn_setup'] = "[ Configuraci&oacute; ]";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>¡Ups!</h2>Informaci&oacute; no desada. Hi ha hagut un error mentre es desava el seu nom d'usuari i contrasenya.<br /><br />Resposta del servidor:<br />";
        $lang_string['form_error'] = "Si us plau, ompli els camps Usuari i Contrasenya.";
        break;
      case 'install04':
        $lang_string['title'] = "Creï l'arxiu per la contrasenya";
        $lang_string['instructions'] = "Aquí comença la part complexa:<br />
        <ol>
        <li>Obri un Editor de Text. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
        <li>Creï un Nou Document de Text.</li>
        <li>Copiï i pegui el codi que apareix en la seg&uuml;ent caixa en el seu document.</li>
        <li>Desi el seu arxiu i anomeni'l <b>password.php</b> <i>(Asseguris que el desa en format de <b>text</b> o <b>text pla</b>.)</i></li>
        <li>Obri un client FTP.</li>
        <li>Enviï el seu <b>password.php</b> al directori <b>config</b> del seu lloc web.</li>
        <li>Esborri l'arxiu <b>password.php</b> del seu disc dur.</li>
        </ol>
        ";
        $lang_string['information'] = "<i>Nota: Si vol recuperar el seu usuari i la seva contrasenya (probablement perqu&egrave; l'ha oblidada), esborri l'arxiu <b>password.php</b> del directori <b>config</b> al seu lloc web. El seg&uuml;ent cop que visiti la seva p&agrave;gina, el procès d'instal&middot;laci&oacute; comen&ccedil;ar&agrave; de nou...</i>";
        $lang_string['code'] = "Codi per l'arxiu <b>password.php</b>:";
        $lang_string['continue'] = "[ Continue ]";
        break;
      case 'install05':
      case 'install06':
        $lang_string['title'] = "Entrar";
        $lang_string['instructions'] = "Si us plau, escrigui a sota el nom d'usuari i la contrasenya";
        $lang_string['username'] = "Usuari:";
        $lang_string['password'] = "Contrasenya";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Felicitats!</h2>Est&aacute; connectat.<p />
        Premi a sota per visitar la p&agrave;gina de <b>Configuraci&oacute;</b>, on pot personalitzar la seva nova bitàcora.<p />
        <i>Nota: Ara que ja ha completat el procès d'instal&middot;laci&oacute;, es recomanable que esborri els arxius <b>installXX.php</b> del seu lloc web. (&eacute;s a dir, des de l'install00.php fins a l'install06.php)</i><p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Ei!</h2>No s'ha connectat. Si us plau revisi que hagi escrit correctament el seu Usuari i Contrasenya i provi-ho de nou.<p />";
        $lang_string['form_error'] = "Completi els camps de l'Usuari i de la Contrasenya.";
        // Success
        $lang_string['btn_setup'] = "[ Configuraci&oacute; ]";
        $lang_string['btn_try_again'] = "[ Provi-ho novament ]";
        break;
      case 'setup':
        $lang_string['title'] = "Configuraci&oacute;";
        $lang_string['instructions'] = "Pot canviar el nom de la seva bit&agrave;cora i la seva informaci&oacute; personal a continuaci&oacute;.";
        $lang_string['blog_title'] = "Nom de la Bit&agrave;cora;";
		$lang_string['blog_header'] = "URL del gràfic de la capçalera: images/blogheader.jpg (Deixar en blanc perquè hi hagi el gràfic predefinit del tema).";
        $lang_string['blog_author'] = "Autor/a:";
        $lang_string['blog_email'] = "Correu Electr&ograve;nic: (deuen estar separats per una , coma - si es deixa en blanc es deshabilita la opció de Contacte"; // <-- New 0.3.7
        $lang_string['blog_avatar'] = "URL de l'avatar: (Deixi-ho en blanc per cap)."; // <-- New 0.4.7
        $lang_string['blog_footer'] = "Peu de p&agrave;gina:";
        $lang_string['blog_choose_language'] = "Triar Llengua:";
        $lang_string['blog_enable_comments'] = "Permetre Comentaris dels Usuaris"; // <-- New 0.3.6
        $lang_string['blog_comments_popup'] = "Obrir comentaris en Finestres Emergents"; // <-- New 0.3.6
        $lang_string['blog_enable_cache'] = "Activar el desament a la Mem&ograve;ria cau de les Entrades (alguns servidors milloren el rendiment aix&iacute;)"; // New for 0.4.6
        $lang_string['blog_enable_calendar'] = "Permetre Calendar"; // New for 0.4.6
        $lang_string['blog_enable_archives'] = "Permetre bloc d'arxiu"; // New for 0.4.8
        $lang_string['blog_enable_counter'] = "Permetre comptador a la barra lateral"; // New for 0.4.8
        $lang_string['blog_counter_hours'] = "Número d'hores que han de passar abans que es torni a comptar una visita d'una mateixa IP:"; // New for 0.4.8
        $lang_string['blog_enable_login'] = "Permetre enllaç d'accès"; // New for 0.4.8
        $lang_string['blog_enable_title'] = "Permetre Text Pla al Títol del bloc (netejar la checkbox si el títol està al gràfic de capçalera)"; // New for 0.4.6
        $lang_string['blog_enable_permalink'] = "Permetre enllaços permanents a les entrades del blog"; // New for 0.4.6
        $lang_string['blog_enable_capcha'] = "Permetre Anti-Spam"; // New for 0.4.8
        $lang_string['blog_footer_counter'] = "Permetre comptador a peu de pàgina"; // New for 0.4.8
        $lang_string['blog_enable_capcha_image'] = "Imatges Anti-Spam Images (només biblioteca GD) / Camp de text Anti-Spam"; // New for 0.4.8
        $lang_string['blog_enable_stats'] = "Permetre opció d'estadístiques al Menú"; // New for 0.4.7
        $lang_string['blog_enable_lastcomments'] = "Permetre la llista de comentaris recents"; // New for 0.4.7
        $lang_string['blog_enable_lastentries'] = "Permetre llista d'entrades més recents"; // New for 0.4.7
	    $lang_string['blog_enable_voting'] = "Permetre als Usuaris Votar Articles"; // <-- New 0.3.8
        $lang_string['blog_email_notification'] = "Enviar e-mail quan es publiqui un comentari"; // <-- New 0.3.7
        $lang_string['blog_send_pings'] = "Enviar &quot;pings&quot;"; // <-- New 0.3.7
        $lang_string['blog_ping_urls'] = "URL completa (exemple: http://rpc.weblogs.com/RPC2) del servei de &quot;ping&quot;.<br />(Pot introdu&iuml;r m&eacute;s d'una separant-les per comes.)"; // <-- New 0.3.7
        $lang_string['blog_trackback_about'] = "Els trackback proporcionen un m&egrave;tode de notificaci&oacute; entre blogs. Permet que els blogs amb els que connecta ho s&agrave;piguen enviant-los una senyal amb el trackback. Del mateix mode pot saber qui enlla&ccedil;a amb el seu blog rebent senyals amb el trackback.<br />
        Pot triar entre accedir al URIs per fer els avisos manualment, o tractar de fer-los autom&agrave;ticament mitjan&ccedil;ant el Auto-Discovery."; // <-- New 0.3.8
        $lang_string['blog_trackback_enabled'] = "Activar els trackback en el meu bloc"; // <-- New 0.3.8
        $lang_string['blog_trackback_auto_discovery'] = "Activar el Auto-Discovery quan es penja un missatge que continga alguna URL"; // <-- New 0.?.?
        $lang_string['blog_max_entries'] = "M&agrave;ximes Entrades a Mostrar:"; // <-- New 0.3.6
        $lang_string['blog_comment_tags'] = "Etiquetes permeses en els Comentaris:"; // <-- New 0.3.6
        $lang_string['blog_gzip_about'] = "
          A partir de la versi&oacute; 4.0.4, PHP pot llegir i escriure arxius comprimits amb gzip (.gz), aix&ograve; estalvia espai en disc. Per un altre costat, &eacute;s possible comprimir les p&agrave;gines que s'envien a un navegador amb suport gzip, estalviant aix&iacute; ample de banda.<br />
          <br />El suport de Zlib no ve activat per defecte en el PHP. Si les caselles de verificaci&oacute; estan desactivades significa que el seu PHP no suporta l'extensi&oacute; Zlib."; // <-- New 0.3.7
        $lang_string['blog_enable_gzip_txt'] = "Activar compressi&oacute; GZIP per a les base de dades."; // <-- New 0.3.7
        $lang_string['blog_enable_gzip_output'] = "Activar compressi&oacute; GZIP per a la sortida HTTP"; // <-- New 0.3.7
        $lang_string['submit_btn'] = "&nbsp;Desar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>La informaci&oacute; no pot ser desada. S'ha trobat un problema mentre s'enmagatzemava la seva informaci&oacute;.<br /><br />Resposta del servidor:<br />";
		 $lang_string['success'] = "<h2>Opcions guardades!</h2>La informació ha estat guardada satisfactòriament."; // New for 0.4.8.1
        $lang_string['form_error'] = "Si us plau, completi els camps T&iacute;tol i Autor.";
        $lang_string['label_entry_order'] = "Ordre dels Articles:";
        $lang_string['select_new_to_old'] = "Primer els Nous";
        $lang_string['select_old_to_new'] = "Primer els Antics";
        $lang_string['label_comment_order'] = "Ordre dels Comentaris:";
        $lang_string['cal_sunday'] = "Diumenge"; // New for 0.4.6
        $lang_string['cal_monday'] = "Dilluns"; // New for 0.4.6
        $lang_string['label_calendar_start'] = "Dia d'inici de la setmana"; // New for 0.4.6
        $lang_string['title_sidebar'] = "Barra lateral"; // New in 0.4.7
        $lang_string['title_comments'] = "Comentaris"; // New in 0.4.7
        $lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
        $lang_string['title_compression'] = "Compressi&oacute;"; // New in 0.4.7
        $lang_string['title_entries'] = "Entrades"; // New in 0.4.7
        $lang_string['title_general'] = "General"; // New in 0.4.7
        $lang_string['title_language'] = "Llengua"; // New in 0.4.7
        $lang_string['blog_comment_days_expiry'] = "Quants dies vol que es guardin els comentaris? (0 significa que no es borren mai)"; // New in 0.4.8
        $lang_string['blog_enable_calendar'] = "Activar calendari"; // New for 0.4.6
        $lang_string['blog_enable_archives'] = "Activar arxius de blog"; // New for 0.4.8
        $lang_string['blog_enable_counter'] = "Activar Comptador en la Barra Lateral"; // New for 0.4.8
        $lang_string['blog_comments_moderation'] = "Requereix que les entrades siguin aprovades per algun usuari loguejat abans de ser mostrades al públic (sempre visible per usuaris loguejats"; // New in 0.5.0
        $lang_string['comment_moderation'] = "Opcions de Moderació"; // New in 0.5.0
        break;
		
		case 'comment_moderation':
        $lang_string['title'] = "Comentaris no moderats";
        $lang_string['instructions'] = "Aquesta és una llista de tots els comentaris que no estàn disponibles als usuaris que no estàn loguejats al blog perquè no han estat aprovats per un moderador.";
        $lang_string['header'] = "Llistat de moderació";
        $lang_string['enteredby'] = "Publicat per: ";
        $lang_string['entrydate'] = "Data de publicació: ";
        $lang_string['blogentrytitle'] = "Títol de l'entrada del blog: ";
        $lang_string['enteredcontent'] = "Contingut: ";
        $lang_string['totalunmodded'] = " entrades totals que esperen per l'actualització del moderador.";
        $lang_string['mod_approve'] = "[Aprovar] ";
        $lang_string['mod_delete'] = "[Esborrar]";
        break;
      case 'moderation':
        $lang_string['title'] = "Opcions de Moderació";
        $lang_string['instructions'] = "Pots modificar les llistes d'automoderació aquí.";
        $lang_string['submit_btn'] = "&nbsp;Guardar Opcions de Moderació&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ups!</h2>La informació no s'ha desat. Hi ha hagut un problema mentre es guardava la informació.<br /><br />La resposta del servidor ha estat:<br />";
        $lang_string['success'] = "<h2>Preferencies Desades!</h2>La informació s'ha guardat correctament."; // New for 0.4.8.1
        $lang_string['banned_address_list_title'] = "<h2>Direccions IP prohibides</h2>";
        $lang_string['banned_address_list'] = "A sota hi ha una llista de ip a les que no se'ls permet publicar comentaris. Cada ip ha d'estar a una línia separada i han de ser números (no noms DNS). Quan s'està loguejat les IP poden prohibirse directament des de la visualització de comentaris.";
        $lang_string['banned_word_list_title'] = "<h2>Paraules Prohibides</h2>";
        $lang_string['banned_word_list'] = "A sota hi ha una llista de paraules que no estan permeses a la URL o al text. Cada paraula o grup de paraules han d'estar a línies separades. Els comentaris es compararan amb cada línia per fer més efectiva la prohibició.";
        break;
		
		
      case 'trackbacks':  // <-- New 0.3.8
        // Trackbacks
        $lang_string['title'] = "Trackbacks";
        $lang_string['header'] = "El Trackback URL per aquesta entrada:";
        $lang_string['delete_btn'] = "Esborrar";
        // Error Response
        $lang_string['error_add'] = "S'ha produit un error desant les dades del trackback.";
		   $lang_string['error_delete'] = "<h2>Ups!</h2>El trackback no s'ha esborrat. Hi ha hagut un problema mentres s'eliminava el trackback.<br /><br />La resposta del servidor es:<br />";
        $lang_string['success_delete'] = "<h2>Trackback Esborrat!</h2>L'enllaç de trackback ha estat esborrat."; // New for 0.4.8.1
        break;
      case 'options':
        $lang_string['title'] = "Opcions";
        $lang_string['instructions'] = "Utilitzi el formulari seg&uuml;ent per personalitzar el format en que es presentar&agrave; la data i l'hora en la bit&agrave;cora i en els comentaris. Pot triar el format de  12 o de 24 hores. Format llarg o curt. <br />Les &agrave;rees de <b>Previsualitzaci&oacute;</b> li mostren autom&agrave;ticament com es veur&agrave; el seu format.";
        // Long Date
        $lang_string['ldate_title'] = "Format de Data Llarga:";
        $lang_string['weekday'] = "Dia de la Setmana";
        $lang_string['month'] = "Mes";
        $lang_string['day'] = "Dia";
        $lang_string['year'] = "Any";
        $lang_string['none'] = "Cap";
        // Short Date
        $lang_string['sdate_title'] = "Format de Data Curta:";
        $lang_string['s_month'] = "Mes";
        $lang_string['s_mon'] = "MMM";
        $lang_string['s_day'] = "Dia";
        $lang_string['s_year'] = "Any";
        $lang_string['zero_day'] = "Zero inicial pel Dia";
        $lang_string['show_century'] = "Mostrar segle";
        // Time
        $lang_string['time_title'] = "Format d'Hora:";
        $lang_string['12hour'] = "Rellotge de 12 hores";
        $lang_string['24hour'] = "Rellotge de 24 hores";
        $lang_string['before_noon'] = "Abans del Migdia";
        $lang_string['after_noon'] = "Despr&eacute;s del Migdia";
        // Date
        $lang_string['date_title'] = "Format de Visualitzaci&oacute; de Data:";
        $lang_string['long_date'] = "Data Llarga";
        $lang_string['short_date'] = "Data Curta";
        $lang_string['time'] = "Hora";
        // Menu
        $lang_string['menu_title'] = "Format de Visualitzaci&oacute; en el Men&uacute; de la Data:";
        $lang_string['long_date'] = "Data Llarga";
        $lang_string['short_date'] = "Data Curta";
        // Used in multiple places
        $lang_string['zero_day'] = "Zero inicial pel Dia";
        $lang_string['zero_month'] = "Zero inicial pel Mes";
        $lang_string['zero_hour'] = "Zero inicial per l'Hora";
        $lang_string['separator'] = "Separador";
        $lang_string['preview'] = "Previsualitzaci&oacute;:";
        $lang_string['server_offset'] = "Difer&egrave;ncia horaria amb el Servidor:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Desar&nbsp;";
        // Error Response
        $lang_string['success'] = "<h2>Opcions Desades!</h2>La informació s'ha guardat satisfactòriament."; // New for 0.4.8.1
        $lang_string['error'] = "<h2>¡Ups!</h2>La informaci&oacute; no ha pogut ser enmagatzemada. S'ha trobat un problema mentre es desava la seva informaci&oacute;.<br /><br />Resposta del servidor:<br />";
        break;
      case 'themes':
        $lang_string['title'] = "Estils";
        $lang_string['instructions'] = "Utilitzi la llista d'opcions per triar un estil diferent.";
        // Themes
        $lang_string['choose_theme'] = "Estils:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Desar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>La informaci&oacute; no ha pogut ser desada. S'ha trobat un problema mentre s'enmagatzemava la seva informaci&oacute;.<br /><br />Resposta del servidor:<br />";
        $lang_string['success'] = "<h2>Estil sel·leccionat</h2>La informació s'ha emmagatzemat satisfactòriament."; // New for 0.4.8.1

        break;
      case 'upload_img':
        $lang_string['title'] = "Pujar imatge";
        $lang_string['instructions'] = "Faci click a sota per pujar una imatge.";
        $lang_string['select_file'] = "Triar arxiu:";
        $lang_string['upload_btn'] = "Pujar";
        // Error Response
        $lang_string['error'] = "<h2>¡Ups!</h2>Ha estat impossible pujar la imatge. Aqu&iacute; hi ha m&eacute;s informaci&oacute;:<br /><br />Resposta del servidor:<br />";
        $lang_string['success'] = "<h2>Imatge Pujada!</h2>La imatge s'ha emmagatzemat satisfactòriament."; // New for 0.4.8.1
        break;
      case 'search':
        $lang_string['title'] = "Resultats de la cerca";
        $lang_string['instructions'] = "Resultats de la cerca per <b>'%string'</b>:";
        $lang_string['not_found'] = "No s'ha trobat cap resultat";
		
      case 'contact': // <-- New 0.3.8
        $lang_string['title'] = "Contacte";
        $lang_string['instructions'] = "ompli el formulari:";
        $lang_string['form_error'] = "ompli els camps Assumpte, Comentari i Anti-Spam.";
        $lang_string['name'] = "Nom:";
        $lang_string['email'] = "Correu Electr&ograve;nic:";
        $lang_string['subject'] = "Assumpte:";
        $lang_string['comment'] = "Comentari:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        $lang_string['success'] = "<h2>Èxit!</h2>El seu missatge ha estat enviat.<p />";
        $lang_string['failure'] = "<h2>¡Ups!</h2>El seu missatge no ha estat enviat. Probablement el camp Anti-Spam no s'ha omplert correctament.<p />";
        $lang_string['contact_capcha'] = "Anti-Spam: Introdueixi "; // 0.4.2
        $lang_string['contactsent'] = "Contacte enviat des de: ";  // New for 0.4.6
        $lang_string['IPAddress'] = "Direcci&oacute; IP:";  // New for 0.4.6
        $lang_string['useragent'] = "Agent Emprat:";  // New for 0.4.6
        $lang_string['wrote'] = "<i>El %s, %s va escriure:</i><br />\n<br />\n%s"; // New for 0.4.6.2
        break;
      case 'stats':
        $lang_string['title'] = "Estad&iacute;stiques";
        $lang_string['general'] = "General";
        $lang_string['entry_info'] = "<b>%s</b> articles emprant <b>%s</b> paraules ocupant <b>%s</b> bytes";
        $lang_string['comment_info'] = "<b>%s</b> comentaris emprant <b>%s</b> paraules ocupant <b>%s</b> bytes";
        $lang_string['trackback_info'] = "<b>%s</b> trackbacks ocupant <b>%s</b> bytes";
        $lang_string['static_info'] = "<b>%s</b> p&agrave;gines est&agrave;tiques emprant <b>%s</b> paraules que ocupen <b>%s</b> bytes";
        $lang_string['most_viewed_entries'] = "10 Articles m&eacute;s visitats";
        $lang_string['most_commented_entries'] = "10 Articles m&eacute;s comentats";
        $lang_string['most_trackbacked_entries'] = "10 Articles amb m&eacute;s trackbacks";
        $lang_string['vote_info'] = "<b>%s</b> vots ocupant <b>%s</b> bytes"; // 0.4.1
        $lang_string['most_voted_entries'] = "10 Articles m&eacute;s votats"; //0.4.1
        $lang_string['most_rated_entries'] = "10 Articles millor valorats"; //0.4.1
        break;
      case 'errorpage-nocookies':  // New for 0.4.6
        $lang_string["title"] = 'Error 403.8 HTTP  - Acc&eacute;s Denegat a la P&agrave;gina/Funci&oacute;';
        $lang_string["errorline1"] = 'La p&agrave;gina o funci&oacute; que intenta necessita l\'&uacute;s de cookies.';
        $lang_string["errorline2"] = 'Activi l\'&uacute;s de les cookies en el seu navegador o permeti que el seu tallafocs les accepti per una petici&oacute; futura.';
        $lang_string["clientid"] = 'ID Client: ';
        break;
      case 'errorpage':  // New for 0.4.6
        $lang_string["403.8"] = 'Error HTTP 403.8 - L\'accès a la p&agrave;gina/Funci&oacute; ha estat denegat';
        $lang_string["404"] = 'Error HTTP 404 - L\'accès a la P&agrave;gina/Funci&oacute; no existeix';
        $lang_string["error_404"] = 'La p&agrave;gina o funci&oacute; a la que intenta accedir no existeix.';
        $lang_string["error_javascript"] = 'La p&agrave;gina o funci&oacute; a la que intenta accedir necessita javascript per funcionar correctament.';
        $lang_string["error_emailnotsent"] = 'El missatge que intentava enviar ha fallat.';
        $lang_string["error_emailnotsentcapcha"] = 'El missatge que tractava d\'enviar ha fallat perqu&egrave; el camp anti-spam s\'ha omplert incorrectament o s\'ha deixat buit.';
        $lang_string["clientid"] = 'ID Client: ';
        break;
      case 'emoticons':  // New for 0.4.7
        $lang_string['title'] = "Administraci&oacute; de les Emoticones";
        $lang_string['instructions'] = "
          Triï les emoticones que vol emprar. Escrigui en la caixa les etiquetes (tags) que vol que siguen remplaçades
          per la imatge. Poden ser emprades varies etiquetes, sols ha de procurar que estiguin separades per espais.<br /><br />
          Per exemple:<br />
          :) :-) :SOMRIURE: :FELICITAT:<br /><br />
          <i>(Es molt recomanable que crei les etiquetes majors de 2 caràcters,
          ja que d'una altra manera, poden succeir substitucions indesitjades.)</i>";
        $lang_string["upload_instructions"] = 'Pujar una Nova Emoticona:';
        $lang_string["upload_success"] = 'Acabat! La imatge ha pujat exitosament!';
        $lang_string["upload_error"] = 'Error! La imatge no ha estat pujada.';
        $lang_string["upload_invalid"] = 'Error! Tipus d\'arxiu d\'imatge inv&agrave;lid. La imatge ha de tindre una extensi&oacute; de png, jpg o gif.';
        $lang_string["save_success"] = 'Les prefer&egrave;ncies de les Emoticoones s\'han desat amb &eacute;xit!';
        $lang_string["save_error"] = 'Error! Les prefer&egrave;ncies de les Emoticones no han estat desades.';
        $lang_string["save_button"] = 'Desa les Emoticones';
        break;

      case 'archives': // New for 0.4.8
        $lang_string['title'] = "Arxius";
        $lang_string['showall'] = "Mostrar tots";
        break;

	  case 'manage_users':
        $lang_string['title'] = "Administrar usuaris existents";
        $lang_string['instructions'] = "Afegir, modificar o esborrar usuaris que no són administradors però que tenen la habilitat de crear entrades del blog i/o moderar els comentaris.";
        $lang_string['fulladminerror'] = "Has de ser administrador complerts per fer això!";
        $lang_string['header_user'] = "Usuari: ";
        $lang_string['header_property'] = "Propietat";
        $lang_string['header_value'] = "Valor";
        $lang_string['prop_username'] = "Nos d'usuari:";
        $lang_string['prop_fullname'] = "Nom a mostrar:";
        $lang_string['prop_password'] = "Contrasenya:";
        $lang_string['prop_email'] = "E-mail:";
        $lang_string['prop_avatar'] = "URL de l'avatar:";
        $lang_string['prop_state'] = "Actiu?";
        $lang_string['prop_sec_Moderate'] = "Moderar Comentaris?";
        $lang_string['prop_sec_Delete'] = "Esborrar entrades del blog?";
        $lang_string['prop_sec_Edit'] = "Editar qualsevol entrada?";
        $lang_string['btn_SaveChanges'] = "Guardar canvis";
        $lang_string['btn_CreateUser'] = "Crear usuari";
        $lang_string['btn_Cancel'] = "Cancelar";  
        $lang_string['grid_header'] = "Llistar usuaris";
        $lang_string['grid_login'] = 'Entrar';
        $lang_string['grid_email'] = 'E-mail';
        $lang_string['grid_avatar'] = 'Avatar';
        $lang_string['grid_state'] = 'Actiu?';
        $lang_string['btn_modify'] = 'Modificar';
        $lang_string['btn_delete'] = 'Esborrar';
        $lang_string['create_user'] = 'Crear nou usuari';
        break;

      default:
        break;
    }
  }
?>
