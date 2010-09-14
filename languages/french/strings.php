<?php
  // Fichier du Langage Francais
  // (c) 2007 frederic.poyer <at> club-internet <dot> fr

  // Simple PHP Version: 0.5.0.1
  // Language Version:   0.5.0.1

  function sb_language( $page ) {
    global $language, $html_charset, $php_charset, $lang_string;

    // Language: Francais
    $lang_string['language'] = 'francais';
    $lang_string['locale'] = array('en_fr', 'fr');
    $lang_string['rss_locale'] = 'en-fr'; // New 0.4.8

    // ISO Charset: ISO-8859-1
    $lang_string['html_charset'] = 'ISO-8859-1';
    $lang_string['php_charset'] = 'ISO-8859-1';
    setlocale( LC_TIME, $lang_string['locale'] );

    // Global Strings

    // Menu
    $lang_string['menu_links'] = "Liens";
    $lang_string['menu_home'] = "Accueil";
    $lang_string['menu_contact'] = "Contactez l'administrateur";
    $lang_string['menu_stats'] = "Statistiques";
    $lang_string['menu_calendar'] = "Calendrier"; // New for 0.4.8
    $lang_string['menu_archive'] = "Archives";
    $lang_string['menu_viewarchives'] = "Voir les Archives";
    $lang_string['menu_menu'] = "Menu";
    $lang_string['menu_add'] = "Ajouter un Message";
    $lang_string['menu_add_static'] = "Ajouter page Statique";
    $lang_string['menu_upload'] = "Uploader Image";
    $lang_string['menu_setup'] = "Préférences";
    $lang_string['menu_categories'] = "Catégories";
    $lang_string['menu_info'] = "Meta Tags";
    $lang_string['manage_users'] = "Gérer les utilisateurs";
    $lang_string['manage_php_config'] = "Voir la configuration"; // New in 0.5.0.1
    $lang_string['menu_options'] = "Date &amp; Heure";
    $lang_string['menu_themes'] = "Thémes";
    $lang_string['menu_colors'] = "Couleurs";
    $lang_string['menu_change_login'] = "Changer Login";
    $lang_string['menu_logout'] = "Se Déconnecter";
    $lang_string['menu_login'] = "Se Connecter";
    $lang_string['menu_most_recent'] = "Commentaires les plus recents";
    $lang_string['menu_most_recent_entries'] = "Messages les plus recentes";
    $lang_string['menu_most_recent_trackback'] = "Trackbacks les plus récents";
    $lang_string['menu_add_block'] = "Blocks";
    $lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
    $lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
    $lang_string['menu_moderation'] = "Mots/IP Bannis"; // New for 0.4.9
    $lang_string['menu_commentmoderation'] = "Commentaires Unmodded"; // New for 0.5.0
	$lang_string['menu_random_entry'] = "Messages aléatoires"; // New for 0.5.2
	$lang_string['menu_plugins'] = "Plugins"; // New for 0.5.2
    $lang_string['notice_moderator1'] = "Vous avez ";
    $lang_string['notice_moderator2'] = " commentaire qui requière approbation.";
    $lang_string['notice_loggedin'] = "Vous êtes connecté.";
    

    // Counter
    $lang_string['counter_today'] = "Aujourd'hui:"; // New for 0.4.8
    $lang_string['counter_yesterday'] = "Hier:"; // New for 0.4.8
    $lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
    $lang_string['counter_title'] = "Compteur Total"; // New for 0.4.8

    // Other
    $lang_string['home'] = 'Retour accueil';
    $lang_string['nav_next'] = 'prochain';
    $lang_string['nav_back'] = 'retour';
    $lang_string['nav_first'] = 'premier'; // New in 0.5.0.1
    $lang_string['nav_last'] = 'dernier'; // New in 0.5.0.1
    $lang_string['search_title'] = 'rechercher';
    $lang_string['search_go'] = 'Go';
    $lang_string['page_generated_in'] = 'Page Genérée en %s secondes';
    $lang_string['counter_total'] = 'Apercus du Site : '; // New in 0.4.8
    $lang_string['read_more'] = 'Lire Plus...'; // New in 0.4.8
    $lang_String['randomentry'] = 'Message aléatoire'; // New in 0.5.0.1
    $lang_string['randomquote'] = 'Réponse aléatoire'; // New in 0.5.0.1

    // SB Functions
    $lang_string['sb_months'] = array( 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juiller', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre' );
    $lang_string['sb_default_title'] = 'Pas de Titre';
    $lang_string['sb_default_author'] = 'Pas d\'auteur';
    $lang_string['sb_default_footer'] = 'Pas de pied de page';

    $lang_string['sb_edit'] = 'Editer';
    $lang_string['sb_delete'] = 'Supprimer';
    $lang_string['sb_permalink'] = 'permalink';
    $lang_string['sb_trackback'] = 'trackbacks';
    $lang_string['sb_postedby'] = 'Posté par'; // 0.5.0
    $lang_string['sb_admin'] = 'Administrateur'; // 0.5.0
    $lang_string['sb_relatedlink'] = 'lien associé'; // <-- New in 0.4.6

    $lang_string['sb_add_comment_btn'] = 'Ajouter un commentaire';
    $lang_string['sb_read_entry_btn'] = 'Voir message'; // 0.5.0
    $lang_string['sb_comment_btn_number_first'] = true;
    $lang_string['sb_comment_btn'] = 'Commentaire';
    $lang_string['sb_comment_view'] = 'Visualiser'; // 0.5.0
    $lang_string['sb_comments_plural_btn_number_first'] = true;
    $lang_string['sb_comments_plural_btn'] = 'Commentaires';
    $lang_string['sb_comments_plural_view'] = 'Visualiser'; // 0.5.0

    // ( 1 view )
    $lang_string['sb_view_counter_pre'] = '';
    $lang_string['sb_view_counter_post'] = ' visualiser';

    // ( 2 views )
    $lang_string['sb_view_counter_plural_pre'] = '';
    $lang_string['sb_view_counter_plural_post'] = ' visualiser';

    $lang_string['sb_add_link_btn'] = '+ link';
    $lang_string['sb_rate_entry_btn'] = 'Cliquer pour noter le message';

    // Entry Text Editor
    if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
      $lang_string['label_subject'] = "Sujet:";
      $lang_string['label_insert'] = "Insertion Spéciale:";
      $lang_string['btn_bold'] = " Gras ";
      $lang_string['btn_italic'] = " italique ";
      $lang_string['btn_image'] = "image";
      $lang_string['btn_url'] = "url";
      $lang_string['btn_readmore'] = "lire plus"; // 0.4.8
      $lang_string['view_images'] = "Voir Images Uploadées";
      $lang_string['label_entry'] = "Message :";
      $lang_string['btn_preview'] = "&nbsp;Apercu&nbsp;";
      $lang_string['btn_post'] = "&nbsp;Envoi&nbsp;";
      $lang_string['chk_visiblemenu'] = "Visible (afficher dans le menu)";
      $lang_string['file_name'] = "Nom du fichier Static : (pas d'espace ou extensions)";

      // Javascript Strings
      $lang_string['insert_styles'] = "Entrer le texte pour le formatter:";
      $lang_string['insert_image'] = "Entrer l'URL de l'image:";
      $lang_string['insert_url1'] = "Entrer le texte pour l'afficher le lien (Optionel):";
      $lang_string['insert_url2'] = "Entrer l'URL complète pour le lien:";
      $lang_string['insert_url3'] = "Ouvrir l'URL dans une nouvelle fenêtre (Optionel):";
      $lang_string['form_error'] = "complétez le Sujet et Entrez le champs.";

      // More Javascript Strings
      $lang_string['insert_image_optional'] = 'Optionel:';
      $lang_string['insert_image_width'] = 'Largeur (Optionel):';
      $lang_string['insert_image_height'] = 'Hauteur (Optionel):';
      $lang_string['insert_image_popup'] = 'Voir en taille réelle dans un pop-up en cliquant (Optional):';
      $lang_string['insert_image_float'] = 'image Flottante (Optionel):';

      $lang_string['day'] = 'Jour';
      $lang_string['month'] = 'Mois';
      $lang_string['year'] = 'Année';
      $lang_string['hour'] = 'Heure';
      $lang_string['minute'] = 'Minute';
      $lang_string['second'] = 'Seconde';
    }

    switch ($page) {
      case 'add':
        // Add Entry
        $lang_string['title'] = "Ajouter Message";
        $lang_string['instructions'] = "Remplir la fenêtre ci dessous et clickez sur 'apercu' pour voir à quoi ressemble votre saisie, ou cliquez sur 'Envoi' pour sauvegarder votre saisie.";
        $lang_string['title_ad'] = "Confirmer Trackback Pings";
        $lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
        $lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)";
        $lang_string['label_tb_autodiscovery'] = "autodiscovery";
        $lang_string['label_relatedlink'] = "Related Link";
        $lang_string['label_categories'] = "Category List";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Apercu / Editer le Message";
        $lang_string['instructions_preview'] = "Apercu de votre Message. Si vous utilisez un style de texte ou incorporez une image, pensez à 'fermer' tous les 'tags'.";
        $lang_string['title_update'] = "Mettre à jour le Message";
        $lang_string['instructions_update'] = "Vous pouvez changer votre message. Clickez sur 'Apercu' ou 'Envoit' quand ce sera fait.";
        $lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Annuler&nbsp;";

        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>le message n'est pas sauvegardé. Problème lors de la sauvegarde.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Message Sauvegardé!</h2>."; // 0.4.8.1
        break;

      case 'add_static':
        // Add Entry
        $lang_string['title'] = "Ajouter Page Static";
        $lang_string['instructions'] = "Remplissez la fenêtre pour créer une Page statique. Contrairement à un message, les messages staiques apparaissent dans le menus des liens. Ce sont des pages que vous voulez toujours disponibles telles que : About Me, Contact Us, Schedule, etc. Cliquez sur 'Apercu' pour avoir un apercu de votre message, ou cliquez sur 'Envoi' pour sauvegarder le message.";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Apercu / Editer Page Statique";
        $lang_string['instructions_preview'] = "Ici vous avez l'apercu de votre page statique. SI vous utilisez des styles de texte ou incorporez des images, pensez à 'fermer' tous les 'tags'.";
        $lang_string['title_update'] = "Mise à jour de la Page Statique";
        $lang_string['instructions_update'] = "Vous pouvez changer votre message en utilisant la fenêtre ci dessous. Cliquez sur 'Apercu' ou 'Envoi' Quand ce sera fait.";
        $lang_string['form_error'] = "Complétez le sujet, Message, et les champs de nom de fichier.";

        // Error Response
        $lang_string['error'] = "<h2>hoops!</h2>Message non sauvegardé.<br />Server Reported:<br />";
        break;

      case 'add_block':
        // Add / Manage Blocks
        $lang_string['title'] = "Ajouter / Gérer les Blocks";
        $lang_string['instructions'] = "Utilisez la fenêtre ci dessous pour ajouter des 'Blocks' qui apparaitront dans la barre de menu.";
        $lang_string['up'] = "haut";
        $lang_string['down'] = "bas";
        $lang_string['edit'] = "Editer";
        $lang_string['delete'] = "Supprimer";
        $lang_string['block_name'] = "Nom de Block:";
        $lang_string['block_content'] = "Contenu du Block :";
        $lang_string['instructions_edit'] = "Vous éditez un block.";
        $lang_string['instructions_modify'] = "utilisez la fenêtre ci dessous pour ajouter ou modifier un 'Blocks' qui apparait dans la barre de menu.";
        $lang_string['submit_btn_edit'] = "Editer Block";
        $lang_string['submit_btn_add'] = "Ajouter Block";
        $lang_string['form_error'] = "Complétez le Nom du champ.";
        break;

      case 'add_link':
        $lang_string['static_pages'] = "Pages Statiques :";

        // Add / Manage Links
        $lang_string['title'] = "Ajouter / Gérer les Liens";
        $lang_string['instructions'] = "Ajouter un lien vers d'autres sites, remplissez la fenêtre ci dessous et cliquez sur 'Ajouter lien' pour ajouter un lien. Cliquez sur le bouton haut ou bas pour changer l'ordre du lien. Cliquez sur le bouton Editer pour modifier le lien. Cliquez sur le bouton Effacer pour retirer le lien";
        $lang_string['up'] = "haut";
        $lang_string['down'] = "bas";
        $lang_string['edit'] = "Editer";
        $lang_string['delete'] = "Effacer";
        $lang_string['link_name'] = "Nom du Lien:";
        $lang_string['link_url'] = "URL du lien : (Optionel. Laisser vide pour créer un séparateur.)";
        $lang_string['instructions_edit'] = "Vous éditez un lien :";
        $lang_string['instructions_modify'] = "Cliquez pour modifier le lien:";
        $lang_string['submit_btn_edit'] = "Editer Lien";
        $lang_string['submit_btn_add'] = "Ajouter Lien";
        $lang_string['form_error'] = "Complètez le nom du champ.";
        break;

      case 'categories':

        // Add / Manage Links
        $lang_string['title'] = "Ajouter / Gérer les Catégories";
        $lang_string['instructions'] = "Utilisez la fenêtre ci dessous pour ajouter ou éditer vos catégories. Chaque objet de catégorie doit être au format 'nom de catégorie (id number)'. Indentez l'objet avec des espaces pour créer des hiérachies.<br /><br /><b>Exemple:</b><br />Général (1)<br />News (3)<br />&nbsp;&nbsp;Annonces (6)<br />&nbsp;&nbsp;Evénements (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technologie (2)<br />";
        $lang_string['error'] = "Erreur";
        $lang_string['current_categories'] = "Catégories actuelles";
        $lang_string['no_categories_found'] = "Pas de Catégorie trouvée";
        $lang_string['category_list'] = "Liste des Catégories:";
        $lang_string['validate'] = "Valider";
        $lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
        break;

      case 'colors':
        // Change Colors
        $lang_string['title'] = "Changer les Couleurs";
        $lang_string['instructions'] = "Vous pouvez changer la couleur du  texte et du fond pour votre blog. Primèrement sélectionner le champ, ensuite utiliser le sélectionneur de couleur pour mixer votre couleur. La Valeur change automatiquement.";
        $lang_string['bg_color'] = "Fond de page";
        $lang_string['main_bg_color'] = "fond de la page Principale";
        $lang_string['border_color'] = "Bordure de la page";
        $lang_string['inner_border_color'] = "Bordure interne";
        $lang_string['header_bg_color'] = "fond de l'entête";
        $lang_string['header_txt_color'] = "Texte de l'entête";
        $lang_string['menu_bg_color'] = "fond du menu";
        $lang_string['footer_bg_color'] = "fond du pied de page";
        $lang_string['txt_color'] = "Texte principal";
        $lang_string['headline_txt_color'] = "Texte du Gros Titre";
        $lang_string['date_txt_color'] = "Date Texte";
        $lang_string['footer_txt_color'] = "Texte pied de page";
        $lang_string['link_reg_color'] = "Lien par Défaut";
        $lang_string['link_hi_color'] = "Lien survolé";
        $lang_string['link_down_color'] = "Lien Actif";

        // More Colors
        $lang_string['entry_bg'] = "fond du message";
        $lang_string['entry_title_bg'] = "fond du titre du message";
        $lang_string['entry_border'] = "Bordure du message";
        $lang_string['entry_title_text'] = "Titre de message";
        $lang_string['entry_text'] = "Texte de message";

        $lang_string['static_bg'] = "fond page Statique"; // 0.5.0
        $lang_string['static_title_bg'] = "Fond du titre page Statique"; // 0.5.0
        $lang_string['static_border'] = "Bordure page Statique"; // 0.5.0
        $lang_string['static_title_text'] = "Titre page statique"; // 0.5.0
        $lang_string['static_text'] = "Texte page statique"; // 0.5.0

        $lang_string['comment_bg'] = "fond des Commentaires"; // 0.5.0
        $lang_string['comment_title_bg'] = "Fond Titre des commentaires"; // 0.5.0
        $lang_string['comment_border'] = "Bordure des Commentaires"; // 0.5.0
        $lang_string['comment_title_text'] = "Titre des Commentaires"; // 0.5.0
        $lang_string['comment_text'] = "Texte des commentaires"; // 0.5.0

        $lang_string['menu_bg'] = "Fond du Menu";
        $lang_string['menu_title_bg'] = "Fond du titre du Menu";
        $lang_string['menu_border'] = "Bordure du Menu";
        $lang_string['menu_title_text'] = "Titre du Menu";
        $lang_string['menu_text'] = "Texte du Menu";
        $lang_string['menu_link_reg_color'] = "Lien par défaut du Menu";
        $lang_string['menu_link_hi_color'] = "Lien survolé du Menu";
        $lang_string['menu_link_down_color'] = "Lien actif du Menu";

        // Submit
        $lang_string['color_preset'] = "Couleur du plan:";
        $lang_string['scheme_name'] = "Entrer un nom de couleur de plan:";
        $lang_string['scheme_file'] = "Entrer un nom de fichier du plan : (pas d'espace ou de nom d'extension)";
        $lang_string['save_btn'] = "&nbsp;Sauvegarder&nbsp;";
        $lang_string['form_error'] = "Entrez un nom pour votre couleur de plan.";
        $lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
        $lang_string['theme_doesnt_allow_colors'] = 'Le thème actuel ne supporte pas ces couleurs.';

        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>Information non sauvegardée.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Couleurs Sauvegardées !</h2>."; // New for 0.4.8.1
        break;

      case 'comments':
        // Comments
        $lang_string['name'] = "Nom :"; //New in 0.4.6.2
        $lang_string['email'] = "Email :"; //New in 0.4.6.2
        $lang_string['homepage'] = "Accueil:"; //New in 0.4.6.2
        $lang_string['comment'] = "Commentaire :"; //New in 0.4.6.2
        $lang_string['IPAddress'] = "Adresse IP :";  // New for 0.4.6.2
        $lang_string['useragent'] = "Agent :";  // New for 0.4.6.2
        $lang_string['wrote'] = "<i>On %s, %s écrit :</i><br />\n<br />\n%s"; // New for 0.4.6.2

        $lang_string['comment_capcha'] = "Anti-Spam: entrée <b>%s</b>"; // 0.4.2
        $lang_string['title'] = "Commentaires";
        $lang_string['header'] = "Ajouter Commentaire";
        $lang_string['instructions'] = "remplissez la fenêtre pour ajouter vos propres commentaires.";
        $lang_string['comment_name'] = "Votre nom :";
        $lang_string['comment_email'] = "Email :";
        $lang_string['comment_url'] = "URL :";
        $lang_string['commentposted'] = "Nouveau commentaire envoyé à : ";  // New for 0.4.6.2
        $lang_string['comment_remember'] = "Rappelez moi :";
        $lang_string['comment_text'] = "Commentaire :";
        $lang_string['post_btn'] = "&nbsp;Envoi du Commentaire&nbsp;";
        $lang_string['delete_btn'] = "Supprimer";
        $lang_string['ban_btn'] = "bannir ip"; // New for 0.4.8
        $lang_string['expired_comment1'] = "Je suis navré, Les nouveaux commentaires ne sont plus autorisé après "; // New for 0.4.8
        $lang_string['expired_comment2'] = " jours."; // New for 0.4.8

        $lang_string['blacklisted'] = "Désolé, Votre adresse IP a été bannie. Commentaires impossibles."; // New for 0.4.8
        $lang_string['bannedword'] = "Votre commentaire, url, nom ou email contient des mots bannis par l'administrateur. Votre commentaire n'a pas été enregistré."; // New for 0.4.8
        $lang_string['nocomments'] = "Les Commentaires ne sont pas possibles pour ce message."; // New for 0.4.9
        $lang_string['email_moderator'] = "Les Commentaires sont modérés. Ce commentaire necessite d'être approuvé avant d'être vu par le public."; // New for 0.5.0
        $lang_string['user_notice_mod'] = "Les Commentaires sont modérés. Ce commentaire necessite d'être approuvé avant d'être visible."; // new for 0.5.0

        $lang_string['return_to_comments'] = 'Retourner aux commentaires';

        // Error Response
        $lang_string['error_add'] = "<h2>hoops!</h2>Comment not saved. I ran into a problem while saving your comment.<br /><br />Server Reported:<br />";
        $lang_string['error_delete'] = "<h2>hoops!</h2>Commentaire non supprimer.<br /><br />Server Reported:<br />";
        $lang_string['error_ban'] = "<h2>Whoops!</h2>l'IP n'est pas ajoutée à la liste des bannis.<br /><br />Server Reported:<br />";
        $lang_string['success_add'] = "<h2>Commentaire Ajouté !</h2>."; // New for 0.4.8.1
        $lang_string['success_delete'] = "<h2>Commentaire supprimé !</h2>."; // New for 0.4.8.1
        $lang_string['success_ban1'] = "<h2>IP Bannie!";
        $lang_string['success_ban2'] = "</h2>Pour retirer ce bannissement dans le futur, utilisez les options de Modération dans le menu préférences."; // New for 0.4.8.1
        $lang_string['form_error'] = "Complètez le nom, Commentaire et champ de l'and Anti-Spam.";
        $lang_string['error_noip'] = "Pas d'IP pourvu dans la liste noire.";

        $lang_string[ 'error_comments_disabled' ] = '<h2>Erreur!</h2>Hey! les Commentairess sont désactivé sur ce blog. Etes vous un spambot?'; // New 0.5.0
        $lang_string[ 'error_no_match' ] = "<h2>Erreur!</h2>Votre addresse IP ne renvoi pas d'IP. Etes vous un spambot?"; // New 0.5.0
        $lang_string[ 'error_fields_missing' ] = '<h2>Erreur!</h2>Perte des champs suivants : '; // New 0.5.0
        $lang_string[ 'error_spambot' ] = '<h2>Erreur!</h2>Données perdues. Vous êtes un spambot?'; // New 0.5.0
        $lang_string[ 'error_capcha' ] = '<h2>Erreur!</h2>La saisie est incorrecte.'; // New 0.5.0
        $lang_string[ 'error_bad_data' ] = '<h2>Erreur!</h2>Envoi de données invalide. Etes vous un hacker?'; // New 0.5.0
        $lang_string[ 'error_entry_missing' ] = '<h2>Erreur!</h2>Vous tentez de commenter un message inexistant'; // New 0.5.0
        $lang_string[ 'error_empty_text' ] = '<h2>Erreur!</h2>vous n\'avez pas entré de commentaire ou de nom.'; // New 0.5.0
        break;

      case 'delete':
        $lang_string['title'] = "Supprimer un message";
        $lang_string['instructions'] = "Voulez vous vraiement supprimer ce message ? il est impossible de revenir en arrière...";
        $lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Annuler&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>hoops!</h2>Impossible de supprimer ce message.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Message supprimé!</h2>."; // New for 0.4.8.1
        break;

      case 'delete_static':
        $lang_string['title'] = "Supprimer une page Statique";
        $lang_string['instructions'] = "Voulez vous vraiement supprimer cette page statiquee ? il est impossible de revenir en arrière...";
        $lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Annuler&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>hoops!</h2>Impossible de supprimer cette page statique.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Page statique supprimée!</h2>."; // New for 0.4.8.1
        break;

      case 'image_list':
        $lang_string['title'] = "Liste Image";
        $lang_string['instructions'] = "cliquez sur lien lien pour visualiser les images.<br /><br />Pour ajouter une image à votre message :<br />1) Control-click un lien et choisissez 'Copier le lien dans le presse papier'.<br />2) Retourner à la page de l'ajout ou édition de message.<br />3) Cliquez sur le bouton  'image' et coller l'URL dans la fenêtre.";
        break;

      case 'info':
        $lang_string['title'] = "Meta-Données Information";
        $lang_string['instructions'] = "les informations ci dessous sont utilisées pour les &quot;meta-données&quot;, qui aident les moteurs de recherches à trouver ou identifier correctement votre site. Ces Informations peuvent aussi être utilisée pour alimenter les RSS.";
        $lang_string['info_keywords'] = "Mots clés : (Liste des mots clés séparés par des virgules.)";
        $lang_string['info_description'] = "Description : (Un texte libre pour la description de votre site.)";
        $lang_string['info_copyright'] = "Droits : (Copyright , ou lien vers un document qui contient ces informations.)";
        $lang_string['tracking_code'] = "Code de dépistage externe : (Code HTML necessaire au fontionnement de la page principale (dans l'entête pour plus de sécurité) seulement pour les utilisateur qui viennent par les pages i.e. Google Analytics)";
        $lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>hoops!</h2>Information non sauvegardées.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Meta-Données Sauvegardées !</h2>."; // New for 0.4.8.1
        $lang_string['form_error'] = "Complètez le titre et l'auteur.";
        break;

      case 'index':
        // Index
        break;

      case 'static':
        // Index
        break;

      case 'rating':
        $lang_string['error'] = "<h2>hoops!</h2>Information non sauvegardée.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Vote Sauvegardé!</h2>."; // New for 0.4.8.1
        break;

      case 'login':
        $lang_string['upgrade'] = "<h2>Mise à jour</h2>"; // New 0.3.8
        $lang_string['upgrade_count'] = "%n fichier de commentaire doit être mis à jour:"; // New 0.3.8
        $lang_string['upgrade_url'] = "Commentaire mis à jour"; // New 0.3.8
        $lang_string['title'] = "Login";
        $lang_string['instructions'] = "Entrez votre nom et Password";
        $lang_string['username'] = "Nom:";
        $lang_string['password'] = "Password";
        $lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Success!</h2>Vous êtes connecté. bon blog !<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>hoops!</h2>Vous n'êtes pas connecté. Vérifiez que cou avez saisi votre nom et mot de passe correctement et essayez encore.<p />";
        $lang_string['inactive_account'] = "<h2>hoops!</h2>Vous n'êtes pas connecté. Votre compte a été désactivé par l'administrateur pour différentes raisons.<p />";
        $lang_string['form_error'] = "Complètez les champs de nom et Password.";
        break;

      case 'logout':
        $lang_string['title'] = "Déconnexion";
        $lang_string['error'] = "<h2>Au revoir !</h2>Vous n'êtes plus connecté.<p />";
        $lang_string['error_no_cookie'] = "<h2>Au revoir !</h2>Vous n'êtes plus connecté. (Aucun cookie trouvé.)<p />"; // New 0.5.0
        $lang_string['success'] = "<h2>Au revoir !</h2>Vous n'êtes plus connecté.<p />(Redirigé sur la page d'accueil dans 5 secondes.)<p />";
        break;

      case 'forms':
        $lang_string['title'] = "";
        $lang_string['instructions'] = "";
        // Error Response
        $lang_string['error'] = "<h2>hoops!</h2>Information non sauvegardée. .<br /><br />Server Reported:<br />";
        break;

      case 'set_login':
        $lang_string['title'] = "Changer Nom &amp; Password";
        $lang_string['instructions'] = "Utilisez la fenêtre ci dessous pour changer votre nom et/ou Password. .";
        $lang_string['username'] = "Nom:";
        $lang_string['password'] = "Password:";
        $lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Success!</h2>Votre nom et/ou Password est activé !<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>hoops!</h2>Information non sauvegardée. .<br /><br />Server Reported:<br />";
        $lang_string['form_error'] = "Complètez le champ de nom et Password.";
        $lang_string['explanation'] = "Dans les versions récentes, la structure de votre password a changé. There is no longer a way to update passwords and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
        break;

      case 'install00':
        $lang_string['title'] = "Bienvenue";
        $lang_string['instructions'] = "Merci d'avoir choisi  Simple PHP Blog!";
        $lang_string['blog_choose_language'] = "Choisissez votre Langage:";
        $lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
        break;

      case 'install01':
        $lang_string['title'] = "Bienvenue";
        $lang_string['instructions'] = "
        MErci d'avoir choisi Simple PHP Blog!<br /><br />Simple PHP Blog est un blog léger. il requière PHP 4.1 ou supérieur, avec des droits sur le serveur. Toutes les informations sont stockées dans des fichiers txt, aucune base de données requise.<br /><br />
        Pour débuter, Simple PHP Blog a besoin de créer 3 dossiers (<b>config</b>, <b>content</b>, et <b>images</b>) pour sauvegarder vos informations. Aprés quoi vous créerez votre password et vous pourrez utiliser le blog.<br /><br />
        <b>Cliquez ci dessous pour débuter la configuration :</b>";
        $lang_string['begin'] = "[ Début configuration ]";
        break;

      case 'install02':
        $lang_string['title'] = "Configuration";
        $lang_string['instructions'] = "Création de <b>config</b>, <b>content</b>, and <b>images</b> folders:";
        $lang_string['folder_exists'] = "Ok! Les fichiers existent déjà. Pas de changement effectué...";
        $lang_string['folder_failed'] = "hoops! impossible de créer les fichiers...";
        $lang_string['folder_success'] = "Fichiers créés...";
        // Help
        $lang_string['help'] = "
        <h2>hoops!</h2>
        Impossible de créer un ou plusieurs fichiers !<br /><br />Cela peut être du à :<br />
        <ol>
        <li><b>Permission d'écriture</b> paramétrez pour accepter la lecture et l'écriture <b>Read/Write</b>.</li>
        <li>les <b>UID</b>'s (user ID's) of all files and folder must match.</li>
        </ol>
        Suivez les instructions de trouble-shooting ci dessous et cliquez sur <b>Essayer encore</b>:<br />
        <ol>
        <li>Créez manuellement les fichiers : <b>config</b>, <b>content</b>, et <b>images</b>.</li>
        <li>Permettre l'écriture sur les fichiers dans votre programme FTP, Propriétaire, Utilisateur, et World doivent avoir <b>Lecture</b> et <b>Ecriture</b>.</li>
        <li>Make sure the UID's of all your files and folders are the same. <i>(You may need to contact your service provider to change these...)</i></li>
        </ol>";
        $lang_string['try_again'] = "[ Try Again ]";
        // Success
        $lang_string['success'] = "Fichiers crées!<p /><b>Cliquez ci dessous pour continuer :</b>";
        $lang_string['continue'] = "[ Continue ]";
        break;

      case 'install03':
        $lang_string['supported'] = "<b>Votre serveur web supporte les encryption suivantes:</b>";
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
        $lang_string['title'] = "Créer Nom &amp; Password";
        $lang_string['instructions'] = "Utilisez la fenêtre ci dessous pour créer un nom et Password.";
        $lang_string['username'] = "Nom:";
        $lang_string['password'] = "Password:";
        $lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Congratulations!</h2>Vous êtes connecté. Cliquez ci dessous pour visiter la page de configuration où vous pouvez nommer votre blog<p />";
        $lang_string['btn_setup'] = "[ Setup ]";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>hoops!</h2>Information non sauvegardé. .<br /><br />Server Reported:<br />";
        $lang_string['form_error'] = "Complètez le champ du nom et du Password .";
        break;

      case 'install04':
        $lang_string['title'] = "Création d'un fichier de Password";
        $lang_string['instructions'] = "Attention, partie délicate :<br />
        <ol>
        <li>Ouvrez un éditeur de texte. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
        <li>Créer un nouveau document.</li>
        <li>Copier et coller le code de la fenêtre ci dessous dans votre nouveau document.</li>
        <li>Sauvegardez votre fichier et nommé le <b>password.php</b> <i>(attention à le sauvegarder avec l'extention .php.)</i></li>
        <li>Ouvrez votre application FTP.</li>
        <li>Uploadez votre nouveau doccument <b>password.php</b> dans le répertoire <b>config</b> de votre site.</li>
        <li>Supprimez le fichier <b>password.php</b> de votre disque dur.</li>
        </ol>
        ";
        $lang_string['information'] = "<i>Note : Si vous voulez réinitialiser votre nom et password(probablement parce que vous l'avez oublié), supprimer le fichier <b>password.php</b> dans le répertoire <b>config</b> de votre site web. La prochaine fois que vous visiterez votre site, il vous redemandera de créer un nouveau nom et password</i>";
        $lang_string['code'] = "Code pour <b>password.php</b> file:";
        $lang_string['continue'] = "[ Continue ]";
        break;

      case 'install05':
      case 'install06':
        $lang_string['title'] = "Login";
        $lang_string['instructions'] = "Entrez votre nom et Password";
        $lang_string['username'] = "Nom:";
        $lang_string['password'] = "Password";
        $lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Congratulations!</h2>Vous êtes connecté.<p />
        Cliquez ci dessous pour visiter la page de configuration, où vous pouvez personnaliser le blog.<p />
        <i>Note: Maintenant que vous avez terminé l'installation, il est recommandé de supprimer le fichier <b>installXX.php</b> de votre site web. (i.e. install00.php jusqu'à install06.php)</i><p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>hoops!</h2>Vous n'êtes pas connecté. Vérifiez que vous avez saisi correctement votre nom et Password, essayez encore.<p />";
        $lang_string['form_error'] = "Complètez le champ du nom et du Password.";
        // Success
        $lang_string['btn_setup'] = "[ Setup ]";
        $lang_string['btn_try_again'] = "[ Try Again ]";
        break;

      case 'setup':
        $lang_string['title'] = "Préférences";
        $lang_string['instructions'] = "Vous pouvez changer le nom du blog, ainsi que vos informations personnelles.";
        $lang_string['blog_title'] = "Nom du Blog:";
        $lang_string['blog_header'] = "URL de la bannière (image): images/blogheader.jpg (laissez blanc pour le thème par défaut).";
        $lang_string['blog_author'] = "Auteur :";
        $lang_string['blog_email'] = "Email : (Séparez email address  par une virgule - vide désactive l'option Contactez Moi)"; // Updated 0.4.7
        $lang_string['blog_avatar'] = "Avatar URL: images/avatar.jpg (laissez blanc pour aucun)."; // <-- New 0.4.7
        $lang_string['blog_footer'] = "pied de page:";
        $lang_string['blog_choose_language'] = "Choisissez le Langage:";
        $lang_string['blog_enable_comments'] = "Autoriser les commentaires des utilisateurs";
        $lang_string['blog_comments_popup'] = "Ouvrir les Commentaire dans un Popup";
				$lang_string['blog_enable_start_category'] = "Utiliser une catégorie spécifique pour la première pas des messages : "; // Now for 0.5.1
        $lang_string['blog_search_top'] = "Afficher Recherche dans les message (à la place de la sidebar)"; // New for 0.5.0
        $lang_string['blog_enable_static_block'] = "Afficher un block défini à la première entrée de message: "; // New for 0.5.0
        $lang_string['static_block_border'] = 'Afficher bordure'; // New for 0.5.0
        $lang_string['static_block_noborder'] = 'Pas de bordure '; // New for 0.5.0
        $lang_string['blog_enable_voting'] = "Autoriser l'utilisateur à noter un message";
        $lang_string['blog_enable_cache'] = "Autoriser mise en cache des message Blog (peut accroitre la vitesse sur certains serveurs)"; // New for 0.4.6
        $lang_string['blog_enable_calendar'] = "Autoriser le Calendrier"; // New for 0.4.6
        $lang_string['blog_enable_archives'] = "Autoriser Archives Block"; // New for 0.4.8
        $lang_string['blog_enable_counter'] = "Autoriser le compteur dans la Sidebar"; // New for 0.4.8
        $lang_string['blog_counter_hours'] = "Nombre d'heures avant que le compteur puisse être incrémenté une nouvelle fois(basé sur l'adresse IP):"; // New for 0.4.8
        $lang_string['blog_enable_login'] = "Autoriser les liens pour Login (ajouter signet \"login.php\" en premier...)"; // New for 0.4.8
        $lang_string['blog_enable_title'] = "Enable Plain Text Title Block (Clear checkbox if the title is in the header graphic)"; // New for 0.4.6
        $lang_string['blog_enable_permalink'] = "Enable Permalink on Blog Entries"; // New for 0.4.6
        $lang_string['blog_enable_capcha'] = "Autoriser l'Anti-Spam"; // New for 0.4.8
        $lang_string['blog_footer_counter'] = "Autoriser compteur en pied de page"; // New for 0.4.8
        $lang_string['blog_enable_capcha_image'] = "Anti-Spam Images (GD library only) / Anti-Spam Text Field"; // New for 0.4.8
        $lang_string['blog_enable_stats'] = "Autoriser les options de stats dans le menu"; // New for 0.4.7
        $lang_string['blog_enable_lastcomments'] = "Autoriser liste des commentaires les plus récents"; // New for 0.4.7
        $lang_string['blog_enable_lastentries'] = "Autoriser liste des message les plus récents"; // New for 0.4.7
        $lang_string['blog_email_notification'] = "Envoyer notification d'email quand un commentaire est envoyé";
        $lang_string['blog_send_pings'] = "Envoyer weblog &quot;pings&quot;";
        $lang_string['blog_ping_urls'] = "Enter URL compète(i.e. http://rpc.weblogs.com/RPC2) du service à &quot;pinguer&quot;.<br />(vous pouvez entrer plusieurs adresses séparées par une virgule.)";
        $lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
          blog know that you are linking to them by sending them a trackback ping. See who is linking to
          your blog by receiving trackback pings.<br />
           You can either enter the URIs to ping manually, or try to do it automatically through
           Auto-Discovery.";
        $lang_string['blog_trackback_enabled'] = "Autoriser trackback dans mon blog (pour permettre à des sites Web ou des blogs de communiquer entre eux de façon automatique, en salertant mutuellement )";
        $lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs";
        $lang_string['blog_max_entries'] = "Maximum de message à afficher :";
        $lang_string['blog_comment_tags'] = "Tags to Allow in Comments:";
        $lang_string['blog_gzip_about'] = "
          Since PHP 4.0.4, PHP has had the ability to read and write gzip (.gz) compressed files,
          thus saving disk-space. It can also transparently compress pages that are sent to browsers
          which support gzip compression, thus saving bandwidth.<br />
          <br />
          Zlib support in PHP is not enabled by default. If the checkboxes are disabled, then your
          installation of PHP does not support the Zlib extension.";
        $lang_string['blog_enable_gzip_txt'] = "Autoriser la compression de fichiers GZIP pour les bases de données";
        $lang_string['blog_enable_gzip_output'] = "Autoriser la compression  GZIP pour les sorties HTTP";
        $lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>hoops!</h2>Information non sauvegardée. .<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Préférences Sauvegardée!</h2>."; // New for 0.4.8.1
        $lang_string['form_error'] = "Complètez le champ du titre et de l'auteur.";
        $lang_string['label_entry_order'] = "Ordre de message: ";
        $lang_string['select_new_to_old'] = "Liste des nouveaux en premier";
        $lang_string['select_old_to_new'] = "Liste des plus vieux en premier";
        $lang_string['label_comment_order'] = "Ordre des commentaires:";
        $lang_string['cal_sunday'] = "Dimanche";
        $lang_string['cal_monday'] = "Lundi";
        $lang_string['label_calendar_start'] = "Jour de début de semaine du Calendrier";
        $lang_string['title_sidebar'] = "Sidebar"; // New in 0.4.7
        $lang_string['title_comments'] = "Commentaires"; // New in 0.4.7
        $lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
        $lang_string['title_compression'] = "Compression"; // New in 0.4.7
        $lang_string['title_entries'] = "Messages"; // New in 0.4.7
        $lang_string['title_general'] = "General"; // New in 0.4.7
        $lang_string['title_language'] = "Langage"; // New in 0.4.7
        $lang_string['blog_comment_days_expiry'] = "Commentaires Autorisés pour combien de jours? (0 signifie pas d'expiration)"; // New in 0.4.8
        $lang_string['blog_comments_moderation'] = "Require comment entries to be approved by logged in user before public
          (always visible to logged in user)"; // New in 0.5.0
        $lang_string['comment_moderation'] = "Modération Options"; // New in 0.5.0
        break;
      case 'comment_moderation':
        $lang_string['title'] = "Unmodded Comments";
        $lang_string['instructions'] = "Ceci est la liste de tous les commentaires non disponibles pour les utilisateurs non connectés au blog car non approuvé par le modérateur.";
        $lang_string['header'] = "Liste de  Modération";
        $lang_string['enteredby'] = "Message par : ";
        $lang_string['entrydate'] = "Date du message: ";
        $lang_string['blogentrytitle'] = "Titre de message dans le Blog : ";
        $lang_string['enteredcontent'] = "Contentaire : ";
        $lang_string['totalunmodded'] = " total (s) en attente d'acceptation par le modérateur.";
        $lang_string['mod_approve'] = "[Approve] ";
        $lang_string['mod_delete'] = "[Delete]";
        break;
      case 'moderation':
        $lang_string['title'] = "Moderation Preferences";
        $lang_string['instructions'] = "You can modify the auto moderation lists here.";
        $lang_string['submit_btn'] = "&nbsp;Save Moderation Settings&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Preferences Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
        $lang_string['banned_address_list_title'] = "<h2>Banned IP Addresses</h2>";
        $lang_string['banned_address_list'] = "Below is a list of numerical ip addresses that have been banned from entering comments. Each ip is on a separate line and must be numbers (not DNS names). When logged in, IP's can be banned directly from the comments view.";
        $lang_string['banned_word_list_title'] = "<h2>Banned Words</h2>";
        $lang_string['banned_word_list'] = "Below is a list of words that are not allowed to be in the url or the text. Each word or group of words is on a separate line. The comments will attempt to match each line exactly in order to enact the ban.";
        break;
      case 'trackbacks':
        // Trackbacks
        $lang_string['title'] = "Trackbacks";
        $lang_string['header'] = "Trackback URL for this entry:";
        $lang_string['delete_btn'] = "Supprimer";
        // Error Response
        $lang_string['error_add'] = "Error storing trackback data.";
        $lang_string['error_delete'] = "<h2>Whoops!</h2>Trackback not deleted. I ran into a problem while deleting the trackback.<br /><br />Server Reported:<br />";
        $lang_string['success_delete'] = "<h2>Trackback Deleted!</h2>The trackback link has been deleted."; // New for 0.4.8.1
        break;

      case 'options':
        $lang_string['title'] = "Options";
        $lang_string['instructions'] = "Utilisez la fenêtre ci dessous pour modifier l'affichage de la date, l'heure du blog et les commentaires entrés. Vous pouvez selectionner l'horloge sur 12 ou 24 heures . Forlat de date court ou long, et la mise à jour automatique de l'<b>Apercu</b> pour voir l'apparence de votre message.";
        // Long Date
        $lang_string['ldate_title'] = "Format de date long:";
        $lang_string['weekday'] = "Jour de la semaine";
        $lang_string['month'] = "Mois";
        $lang_string['day'] = "jour";
        $lang_string['year'] = "Année";
        $lang_string['none'] = "rien";
        // Short Date
        $lang_string['sdate_title'] = "Format de date court:";
        $lang_string['s_month'] = "Mois";
        $lang_string['s_mon'] = "MMM";
        $lang_string['s_day'] = "Jour";
        $lang_string['s_year'] = "Année";
        $lang_string['zero_day'] = "Zéro en tête pour Jour";
        $lang_string['show_century'] = "affiche le siècle";
        // Time
        $lang_string['time_title'] = "Format de l'heure:";
        $lang_string['12hour'] = "Horloge 12-heure";
        $lang_string['24hour'] = "Horloge 24-heures";
        $lang_string['before_noon'] = "avant midi";
        $lang_string['after_noon'] = "Aprés midi";
        // Date
        $lang_string['date_title'] = "Affichage du format de la Date:";
        $lang_string['long_date'] = "Date courte";
        $lang_string['short_date'] = "Date longue";
        $lang_string['time'] = "Heure";
        // Menu
        $lang_string['menu_title'] = "Affichage du Menu de format de Date:";
        $lang_string['long_date'] = "Date longue";
        $lang_string['short_date'] = "Date courte";
        // Used in multiple places
        $lang_string['zero_day'] = "Leading zero for day";
        $lang_string['zero_month'] = "Leading zero for Month";
        $lang_string['zero_hour'] = "Leading zero for Hour";
        $lang_string['separator'] = "Separateur:";
        $lang_string['preview'] = "Apercu :";
        $lang_string['server_offset'] = "Server Offset:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>hoops!</h2>Information non saugardée. .<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Options Sauvegardées!</h2>."; // New for 0.4.8.1
        break;

      case 'themes':
        $lang_string['title'] = "Thémes";
        $lang_string['instructions'] = "utilisez le menu déroulant pour sélectionner un théme différent.";
        // Themes
        $lang_string['choose_theme'] = "Thémes:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>hoops!</h2>Information non sauvegardée.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Théme Selectionné!</h2>."; // New for 0.4.8.1
        break;

      case 'upload_img':
        $lang_string['title'] = "Upload Image";
        $lang_string['instructions'] = "Cliquez sur le bouton ci dessous pour selectionner un fichier à uploader.";
        $lang_string['select_file'] = "Sélectionner le fichier:";
        $lang_string['upload_btn'] = "Upload";
        // Error Response
        $lang_string['error'] = "<h2>hoops!</h2>impossible d'uploader l'image.<br /><br />Server Reported:<br />";
        $lang_string['success'] = "<h2>Image Uploadée!</h2>."; // New for 0.4.8.1
        break;

      case 'search':
        $lang_string['title'] = "Résultat de la recherche";
        $lang_string['instructions'] = "Résultat de la recherche pour <b>%string</b>:";
        $lang_string['not_found'] = "Recherche infructueuse";
        break;

      case 'contact':
        $lang_string['contact_capcha'] = "Anti-Spam: Entrer "; // 0.4.2
        $lang_string['title'] = "Contactez Moi";
        $lang_string['instructions'] = "Remplissez le formulaire :";
        $lang_string['form_error'] = "Complètez le champ du sujet et du commentaire.";
        $lang_string['name'] = "Nom:";
        $lang_string['email'] = "Email :";
        $lang_string['subject'] = "Sujet :";
        $lang_string['comment'] = "Commentaire :";
        $lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
        $lang_string['success'] = "<h2>Success!</h2>Votre message a été envoyé.<p />";
        $lang_string['failure'] = "<h2>Erreur!</h2>Votre message n'a pas été envoyé. L'Anti Spam n'a pas été saisi correctement.<p />";
        $lang_string['contactsent'] = "Contact envoyé par : ";  // New for 0.4.6
        $lang_string['IPAddress'] = "Addresse IP:";  // New for 0.4.6
        $lang_string['useragent'] = "Utilisateur:";  // New for 0.4.6
        $lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
        break;

      case 'stats':
        $lang_string["title"] = "Statistiquess";
        $lang_string["general"] = "Général";
        $lang_string["entry_info"] = "<b>%s</b> messages <b>%s</b> mots stockés dans <b>%s</b> bytes";
        $lang_string["comment_info"] = "<b>%s</b> commentaires <b>%s</b> mots stockés dans <b>%s</b> bytes";
        $lang_string["trackback_info"] = "<b>%s</b> trackbacks stockés <b>%s</b> bytes";
        $lang_string["static_info"] = "<b>%s</b> pages statiques <b>%s</b> mots stockés dans <b>%s</b> bytes";
        $lang_string["most_viewed_entries"] = "10 messages les plus visionnés";
        $lang_string["most_commented_entries"] = "10 messages les plus commentés";
        $lang_string["most_trackbacked_entries"] = "10 premiers messages trackbacked";
        $lang_string['vote_info'] = "<b>%s</b> votes Stockés dans <b>%s</b> bytes"; // 0.4.1
        $lang_string["most_voted_entries"] = "10 message les plus votés"; // 0.4.1
        $lang_string["most_rated_entries"] = "10 messages les mieux notés"; // 0.4.1
        break;

      case 'errorpage-nocookies':  // New for 0.4.6
        $lang_string["title"] = 'HTTP Error 403.8 - Page/Function Access Denied';
        $lang_string["errorline1"] = 'The page or function you attempted to process requires the use of cookies.';
        $lang_string["errorline2"] = 'Restore cookie functionality within your browser or protection software and attempt your request again.';
        $lang_string["clientid"] = 'Client ID: ';
        break;

      case 'errorpage':  // New for 0.4.6
        $lang_string["403.8"] = 'HTTP Error 403.8 - Page/Function Access Denied';
        $lang_string["404"] = 'HTTP Error 404 - Page/Function n\'existe pas';
        $lang_string["error_404"] = 'La page ou la fonction utilisée n\'existe pas.';
        $lang_string["error_javascript"] = 'La page ou la fontion requière un javascript pour fonctionner correctement.';
        $lang_string["error_emailnotsent"] = 'L\'envoi du message à échoué.';
        $lang_string["error_emailnotsentcapcha"] = 'L\'envoi du message à échoué, l\'entrée de l\'anti-spam et incorrecte ou oubliée.';
        $lang_string["clientid"] = 'Client ID: ';
        break;

      case 'emoticons':  // New for 0.4.7
        $lang_string['title'] = "Administrer les  Emoticons";
        $lang_string['instructions'] = "
          Check the emoticons you want to use. Write in the box the Tags you want
          to be replaced by the image. Multiple tags may be used, just separated them
          by spaces.<br /><br />

          For instance:<br />
          :) :-) :SMILE: :HAPPY:<br /><br />

          <i>(il est fortement recommandé de créer des Tags longs au minimum de 2 caractères.)</i>";
        $lang_string["upload_instructions"] = 'Upload Nouvel Emoticon:';
        $lang_string["upload_success"] = 'Image uploadée !';
        $lang_string["upload_error"] = 'Errur! Image non uploadée.';
        $lang_string["upload_invalid"] = 'Erreur! Fichier image invalide. l\'image doit être un png, jpg, ou gif.';
        $lang_string["save_success"] = 'Emoticon préférences savegardées !';
        $lang_string["save_error"] = 'Erreur! Emoticon préférences non sauvegardée.';
        $lang_string["save_button"] = 'Sauvegarder Emoticons';
        break;

      case 'archives': // New for 0.4.8
        $lang_string['title'] = "Archives";
        $lang_string['showall'] = "Afficher tout";
        break;

      case 'manage_users':
        $lang_string['title'] = "Manager Editer Utilisateurs";
        $lang_string['instructions'] = "Ajouter, Modifer, ou Effacer des utilisateurs qui ne sont pas administrateurs mais ont la possibilité de créer des messages.";
        $lang_string['fulladminerror'] = "Vous devez être administrateur pour modifier ces paramétres !";
        $lang_string['header_user'] = "User: ";
        $lang_string['header_property'] = "Propriété";
        $lang_string['header_value'] = "Value";
        $lang_string['prop_username'] = "Username:";
        $lang_string['prop_fullname'] = "Display Name:";
        $lang_string['prop_password'] = "Password:";
        $lang_string['prop_email'] = "Email:";
        $lang_string['prop_avatar'] = "Avatar URL:";
        $lang_string['prop_state'] = "Active?";
        $lang_string['prop_sec_Moderate'] = "Moderate Comments?";
        $lang_string['prop_sec_Delete'] = "effacer les messages du Blog?";
        $lang_string['prop_sec_Edit'] = "Editer toutes les messages?";
        $lang_string['btn_SaveChanges'] = "Sauvegarder les Changements";
        $lang_string['btn_CreateUser'] = "Créer Utilisateur";
        $lang_string['btn_Cancel'] = "Annuler";  
        $lang_string['grid_header'] = "User Listing";
        $lang_string['grid_login'] = 'Login';
        $lang_string['grid_email'] = 'Email';
        $lang_string['grid_avatar'] = 'Avatar';
        $lang_string['grid_state'] = 'Activer?';
        $lang_string['btn_modify'] = 'Modifier';
        $lang_string['btn_delete'] = 'Supprimer';
        $lang_string['create_user'] = 'Créer un nouvel utilisateur';
        break;

      default:
        break;
    }
  }
?>

 	  	 
