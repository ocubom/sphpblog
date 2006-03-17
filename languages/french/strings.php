<?php
	// Translation(s)
	// (c) 2004 Thibaud Chon, thibaud <dot> chone <at> insa-lyon <dot> fr (0.3.7)
	// (c) 2005 Bill Bateman (0.4.6)
	// (c) 2006 Christian Clavet
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Francais
		$lang_string['language'] = 'french';
		$lang_string[ 'locale' ] = array('fr_FR','fra','french');
		$lang_string['rss_locale'] = 'fr-FR'; // New 0.4.8
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'iso-8859-1';
		$lang_string['php_charset'] = 'iso-8859-1';
		setlocale( LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Liens";
		$lang_string['menu_home'] = "&Agrave; la maison";
		$lang_string['menu_contact'] = "Contactez-Moi"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Statistiques"; // <-- New 0.3.7r
		$lang_string['menu_archive'] = "Archives"; // <-- New
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Ajout Contenu";
		$lang_string['menu_add_static'] = "Ajout Page";
		$lang_string['menu_upload'] = "Image De T&eacute;l&eacute;chargement";
		$lang_string['menu_setup'] = "Configuration";
		$lang_string['menu_categories'] = "Cat&eacute;gories";
		$lang_string['menu_info'] = "Information"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Options";
		$lang_string['menu_themes'] = "Th&egrave;mes";
		$lang_string['menu_colors'] = "Couleurs";
		$lang_string['menu_change_login'] = "Changer de Login";
		$lang_string['menu_logout'] = "Se D&eacute;loguer";
		$lang_string['menu_login'] = "Ouverture";
		$lang_string['menu_most_recent'] = "Derniers Commentaires";
		$lang_string['menu_most_recent_entries'] = "La plupart des Entr&eacute;es R&eacute;centes";
		$lang_string['menu_most_recent_trackback'] = "La plupart De Trackbacks R&eacute;cent"; // <-- New 0.3.8
		// DATOH_ADD
		$lang_string['menu_add_block'] = "Blocs";
		// DATOH_END
		$lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Other
		$lang_string['home'] = "Retour Accueil";
		$lang_string['nav_next'] = 'Apr&egrave;s'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Avant'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Recherche:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Allez'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Page produite dans %s secondes'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre' );
		$lang_string['sb_default_title'] = 'Sans Titre';
		$lang_string['sb_default_author'] = 'x';
		$lang_string['sb_default_footer'] = 'x';
		
		$lang_string['sb_edit'] = '&Eacute;diter';
		$lang_string['sb_delete'] = 'Supprimer';
		$lang_string['sb_permalink'] = 'Lien permanent'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		$lang_string['sb_relatedlink'] = 'lien relatif'; // <-- New in 0.4.6
		
		$lang_string['sb_add_comment_btn'] = 'ajout commentaire';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'commentaire';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'commentaires';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '( ';
		$lang_string['sb_view_counter_post'] = ' vue )';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '( ';
		$lang_string['sb_view_counter_plural_post'] = ' vues )';
		
		$lang_string['sb_add_link_btn'] = '+ lien';
		
		$lang_string['sb_rate_entry_btn'] = "D&eacute;clic pour &eacute;valuer l'entr&eacute;e";
		
		// Entry Text Editor
		// DATOH_REPLACE
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
		// DATOH_END
				$lang_string['label_subject'] = "Sujet :";
				$lang_string['label_insert'] = "Insertion Sp&eacute;ciale :";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
				$lang_string['view_images'] = "Voir les images t&eacute;l&eacute;charg&eacute;es";
				$lang_string['label_entry'] = "Contenu :";
				$lang_string['btn_preview'] = "&nbsp;Aper&ccedil;u&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Envoyer&nbsp;";
				$lang_string['file_name'] = "Nom de fichier statique: (les aucuns espaces ou prolongements de dossier)"; // <-- New 0.3.8
				// Javascript Strings <-- Need Translation
				$lang_string['insert_styles'] = "Entrez le texte &agrave; formater";
				$lang_string['insert_image'] = "Entrez l\'URL de l\'image";
				$lang_string['insert_url1'] = "Entrez le texte associ&eacute; au lien (optionnel)";
				$lang_string['insert_url2'] = "Entrez l&Acirc;URL compl&egrave;te du lien";
				$lang_string['insert_url3'] = "Ouvrir l&acute;URL dans une nouvelle fen&ecirc;tre (optionnel):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Compl&eacute;tez les champs Sujet et Contenu";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'optionnel:';
				$lang_string['insert_image_width'] = 'Largeur (optionnel):';
				$lang_string['insert_image_height'] = 'taille (optionnel):';
				$lang_string['insert_image_popup'] = 'Vue normale dans instantan&eacute; une fois cliquet&eacute; (optionnel):';
				$lang_string['insert_image_float'] = 'Flotteur (optionnel):';
				$lang_string['day'] = 'Day';
				$lang_string['month'] = 'Month';
				$lang_string['year'] = 'Year';
				$lang_string['hour'] = 'Hour';
				$lang_string['minute'] = 'Minute';
				$lang_string['second'] = 'Second';	
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Ajout de Contenu";
				$lang_string['instructions'] = "&Ecirc;tes vous pr&ecirc;t &agrave; bloguer? Remplissez le formulaire ci dessous, puis cliquez sur 'Aper&ccedil;u' pour v&eacute;rifier la mise en page, ou sur 'Poster' pour sauvegarder votre envois.";
				$lang_string['title_ad'] = "Confirmez les cinglements de Trackback"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "Ce sont l'URIs Automobile-D&eacute;couvert que vous etes sur le point pour cingler. Si vous ne voulez pas cingler un certain URI, uncheck il ci-dessous. Appuyez sur alors le bouton 'OK 'pour cingler l'URIs v&eacute;rifi&eacute; ou pour serrer l''annulation 'pour ne pas cingler du tout."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (la virgule a s&eacute;par&eacute;)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				$lang_string['label_relatedlink'] = "Related Link"; // New for 0.4.6
				$lang_string['label_categories'] = "Category List";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Aper&ccedil;u / &Eacute;dition de contenu";
				$lang_string['instructions_preview'] = "Voici &agrave; quoi ressemble votre post. Si vous utilisez diff&eacute;rents styles de texte ou si vous incluez des images, veillez &agrave; bien fermer toutes vos balises.";
				$lang_string['title_update'] = "Mettre &agrave; jour";
				$lang_string['instructions_update'] = "Vous pouvez mettre &agrave; jour les informations en utilisant le formulaire ci-dessous. Cliquez sur 'Aper&ccedil;u' ou sur 'Envois' lorque vous avez fini.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Canceller&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Contenu non sauvegard&eacute;. Une erreur est apparue lors de la sauvegarde.<br /><br />le serveur a rapport&eacute; :<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Ajouter une entr&eacute;e statique";
				$lang_string['instructions'] = "Remplissez le formulaire suivant pour cr&eacute;er une page statique. Contrairement a une entr&eacute;e classique de blog, les pages statiques apparaissent en lien dans le menu de droite. Elles servent pour des pages toujours accessibles comme par exemple un CV, une page de contact, un agenda, etc. Cliquez sur 'Apercu' pour voir a quoi cette page ressemblera, ou sur 'Poster' pour la sauvegarder.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Aper&ccedil;u / &Eacute;dition de contenu";
				$lang_string['instructions_preview'] = "Voici &agrave; quoi ressemble votre post. Si vous utilisez diff&eacute;rents styles de texte ou si vous incluez des images, veillez a bien fermer toutes vos balises.";
				$lang_string['title_update'] = "Mettre à jour";
				$lang_string['instructions_update'] = "Vous pouvez mettre a jour les informations en utilisant le formulaire ci dessous. Cliquez sur 'Apercu' ou sur 'Poster' lorque vous avez fini.";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Contenu non sauvegard&eacute;. Une erreur est apparue lors de la sauvegarde.<br /><br />le serveur a rapport&eacute; :<br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Ajout / Gestion des liens";
				$lang_string['instructions'] = "Ajouts de blocs personalis&eacute;s";
				$lang_string['up'] = "haut";
				$lang_string['down'] = "bas";
				$lang_string['edit'] = "&eacute;diter";
				$lang_string['delete'] = "effacer";
				$lang_string['block_name'] = "Nom du bloc:";
				$lang_string['block_content'] = "Contenu du bloc:";
				$lang_string['instructions_edit'] = "Vous &ecirc;tes en train d&acute;&eacute;diter le bloc:";
				$lang_string['instructions_modify'] = "Cliquez ci-dessus pour modifier le bloc:";
				$lang_string['submit_btn_edit'] = "Edite le bloc";
				$lang_string['submit_btn_add'] = "Ajoute le block";
				$lang_string['form_error'] = "Please complete the Name field.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Static Pages:";
				// Add / Manage Links
				$lang_string['title'] = "Ajouter / G&eacute;rer Les Liens";
				$lang_string['instructions'] = "Ajouter des Liens vers d'autres sites. Remplissez le formulaire ci dessous and cliquez sur 'Ajouter le Lien' pour l'ajouter. Utilisez les boutons 'haut' et 'bas' pour changer l'ordre des liens. Cliquez sur le bouton 'Editer' pour modifier un lien. Cliquez sur le bouton 'Effacer' pour enlever un lien.";
				$lang_string['up'] = "haut";
				$lang_string['down'] = "bas";
				$lang_string['edit'] = "&eacute;diter";
				$lang_string['delete'] = "effacer";
				$lang_string['link_name'] = "Nom du Lien :";
				$lang_string['link_url'] = "Adresse du Lien : (Optionnel. Laissez vide pour cr&eacute;er une sous cat&eacute;gorie.)";
				$lang_string['instructions_edit'] = "Vous &eacute;ditez actuellement le lien :";
				$lang_string['instructions_modify'] = "Cliquez ci-dessous pour modifier le lien :";
				$lang_string['submit_btn_edit'] = "&Eacute;diter";
				$lang_string['submit_btn_add'] = "Ajouter";
				$lang_string['form_error'] = "Compl&egrave;tez le champ du nom";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "Ajoutez/Contr&ocirc;lez les cat&eacute;gories";
				$lang_string['instructions'] = "Employez la forme ci-dessous pour ajouter et &eacute;diter vos cat&eacute;gories.  Chaque article de cat&eacute;gorie devrait &ecirc;tre dans ce format 'nom de cat&eacute;gorie (num&eacute;ro d'identification) '.  Articles de creux avec les espaces pour cr&eacute;er des heirarchies.<br /><br /><b>Exemple:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technology (2)<br />";
				$lang_string['error'] = "Erreur";
				$lang_string['current_categories'] = "Cat&eacute;gories Courantes";
				$lang_string['no_categories_found'] = "Aucunes Cat&eacute;gories Trouv&eacute;es";
				$lang_string['category_list'] = "Liste De Cat&eacute;gorie:";
				$lang_string['validate'] = "Validez";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Changer les Couleurs";
				$lang_string['instructions'] = "Vous pouvez changer les couleurs de texte et de fond de votre blog. Utilisez la palette pour choisir votre couleur, puis recopiez la valeur HEX de cette couleur dans les champs correspondants.";
				$lang_string['bg_color'] = "Fond du Site";
				$lang_string['main_bg_color'] = "Fond de Page";
				$lang_string['border_color'] = "Bordure de Page";
				$lang_string['inner_border_color'] = "Bordure interne";
				$lang_string['header_bg_color'] = "Fond de l'ent&ecirc;te";
				$lang_string['header_txt_color'] = "Texte de l ent&ecirc;te";
				$lang_string['menu_bg_color'] = "Fond du menu";
				$lang_string['footer_bg_color'] = "Fond du pied de page";
				$lang_string['txt_color'] = "Texte principal";
				$lang_string['headline_txt_color'] = "Texte Titre";
				$lang_string['date_txt_color'] = "Date";
				$lang_string['footer_txt_color'] = "Texte Pied de Page";
				$lang_string['link_reg_color'] = "Lien";
				$lang_string['link_hi_color'] = "Lien Choisi";
				$lang_string['link_down_color'] = "Clic sur Lien";
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
				$lang_string['color_preset'] = "Arrangements De Couleur:"; // 0.3.7q
				$lang_string['scheme_name'] = "&Eacute;crivez un nom fait sur commande d'arrangement de couleur:"; // 0.3.7q
				$lang_string['scheme_file'] = "&Eacute;crivez le nom de fichier d'arrangement:  (les aucuns espaces ou prolongements de dossier)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Veuillez &eacute;crire un nom pour votre arrangement de couleur fait sur commande."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'Le th&egrave;me actuellement choisi ne tient pas compte des couleurs faites sur commande.';
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Param&egrave;tres de configuration non sauvegard&eacute;s. Probleme rencontr&eacute; durant l op&eacute;ration de sauvegarde.<br /><br />le serveur &agrave; report&eacute; :<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Nom:"; //New in 0.4.6.2
				$lang_string['email'] = "Courriel:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Page web:"; //New in 0.4.6.2
				$lang_string['comment'] = "Commentaire:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "Adresse IP:";  // New for 0.4.6.2
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				$lang_string['commentposted'] = "Nouveau commentaire &agrave;: ";  // New for 0.4.6.2
				$lang_string['comment_capcha'] = "Anti-Pourriel: Enter <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Commentaires";
				$lang_string['header'] = "Ajouter Commentaire";
				$lang_string['instructions'] = "Remplissez ce formulaire pour ajouter un commentaire.";
				$lang_string['comment_name'] = "Votre Nom :";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Rappelez-vous de moi:"; // 0.3.8
				$lang_string['comment_text'] = "Votre commentaire :";
				$lang_string['post_btn'] = "&nbsp;Poster&nbsp;";
				$lang_string['delete_btn'] = "Effacer";
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Commentaire non sauvegard&eacute;. Probl&egrave;me rencontr&eacute; durant l'&eacute;xecution du script.<br /><br />Le Serveur &agrave; report&eacute; :<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Commentaire non d&eacute;truit. Probl&egrave;me rencontr&eacute; durant l'op&eacute;ration de suppression de votre commentaire.<br /><br />le serveur &agrave; report&eacute; :<br />";
				$lang_string['form_error'] = "Veuillez remplir les champs NOM et COMMENTAIRE"; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "Titre";
				$lang_string['instructions'] = "Voici un aper&ccedil;u de ce que vous souhaitez effacer. Soyez certain de ce que vous faites, il n'y a pas de marche arri&egrave;re possible...";
				$lang_string['ok_btn'] = "&nbsp;Je suis s&ucirc;r&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;J'annule&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Impossible de supprimer<br /><br />Le serveur &agrave; report&eacute; :<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Effacer une page statique";
				$lang_string['instructions'] = "Voici un aper&ccedil;u de la page que vous souhaitez effacer. Soyez certain de ce que vous faites, il n'a pas de marche arri&egrave;re possible...";
				$lang_string['ok_btn'] = "&nbsp;Je suis s&ucirc;r&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;J'annule&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Impossible de supprimer la page.<br /><br />Le Serveur &agrave; report&eacute; :<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Liste des Images";
				$lang_string['instructions'] = "Cliquez sur ces liens pour voir les images.<br><br>Pour ajouter une image :<br>1) Copier l URL de votre image.<br>2) Retournez &agrave; la page d'ajout ou d'&eacute;dition.<br>3) Cliquez sur le bouton 'img' et collez l'URL de l'image dans la fenetre.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "L'Information De M&eacute;ta-donn&eacute;es";
				$lang_string['instructions'] = "L'information ci-dessous est employ&eacute;e pour le meta-data, quelles aides les moteurs de recherche correctement trouvent et identifient votre emplacement.  L'information peut &eacute;galement &ecirc;tre employ&eacute;e en alimentations de RSS.";
				$lang_string['info_keywords'] = "Mots-cl&eacute;s:  (liste de mots-cl&eacute;s s&eacute;par&eacute;s par des virgules.)";
				$lang_string['info_description'] = "Description:  (un abstrait ou une description de texte libre de votre emplacement.)";
				$lang_string['info_copyright'] = "Droites:  (rapport de copyright, ou lien au document contenant l'information.)";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>L'information non sauv&eacute;e.  J'ai couru dans un probl&egrave;me tout en sauvant votre information.<br /><br />Le Serveur &agrave; rapport&eacute;:<br />";
				$lang_string['form_error'] = "Veuillez accomplir le titre et &eacute;crivez les champs.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>Whoops!</h2>L'information non sauv&eacute;e.  J'ai couru dans un probl&egrave;me tout en sauvant votre information.<br /><br />Le Serveur A rapport&eacute;:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Mise à niveau</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n le besoin de dossiers de commentaire d'&ecirc;tre am&eacute;lior&eacute;:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Commentaires de mise a niveau"; // New 0.3.8
				$lang_string['title'] = "Login";
				$lang_string['instructions'] = "Veuillez entrez votre nom d'utilisateur et votre mot de passe ci- dessous.";
				$lang_string['username'] = "Nom d'utilisateur :";
				$lang_string['password'] = "Mot de passe :";
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Ok !</h2>Vous etes maintenant logu&eacute; ! Bloggez Bien !<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Erreur de Log. V&eacute;rifiez que vous avez entr&eacute; correctement votre nom d'utilsateur et votre mot de passe, et r&eacute;essayez.<p />";
				$lang_string['form_error'] = "Compl&eacute;tez les champs NOM et MOT DE PASSE"; // <-- Need Translation
				break;
			case 'logout':
				$lang_string['title'] = "Se d&eacute;loguer";
				$lang_string['instructions'] = "<h2>Whoops!</h2>Impossible de se d&eacute;loguer. Pas Possible de d&eacute;truire le cookie. Pourquoi &ecirc;tes vous encore logg&eacute; ?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Sauvegarde impossible.<br /><br />Le Serveur a report&eacute; :<br />";
				break;
			case 'set_login': // <-- New
				$lang_string['title'] = "Changez Le nom d&acute;usager &amp; Mot de passe";
				$lang_string['instructions'] = "Use the form below to change your Username and/or Password. Enter the Username and Password that you want to use.";
				$lang_string['username'] = "Nom d&acute;uager:";
				$lang_string['password'] = "Mot de passe:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Succ&egrave;s!</h2>Votre nom d&acute;usager et/ou mot de passe est en activit&eacute;.  Heureux Blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>L'information non sauv&eacute;e.  J'ai couru dans un probleme tout en sauvant votre username et/ou mot de passe.<br /><br />Serveur Rapport&eacute;:<br />";
				$lang_string['form_error'] = "Veuillez accomplir les champs de username et de mot de passe.";
				$lang_string['explanation'] = "Dans des versions recentes, notre structure de mot de passe a chang&eacute;.  Il n'y a plus une 
				maniere de mettre à jour des mots de passe et/ou des ouvertures de l'interieur du code de blog.  Afin de changer 
				votre mot de passe, suppriment/config/password.php et veillent qu'install*.php existe sur le serveur local.  Une 
				fois que cela est fait, r&eacute;g&eacute;n&eacute;rez cette page (ou sortie du syst&egrave;me).  Vous serez pr&eacute;sent&eacute;s avec le meme manuscrit 
				pour produire de votre mot de passe que vous  en cr&eacute;ant a l'origine l'emplacement de blog.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Bienvenue";
				$lang_string['instructions'] = "Merci du choix Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Choisissez La Langue:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Bienvenue";
				$lang_string['instructions'] = "
				Merci du choix  Simple PHP Blog!<br /><br />Simple PHP Blog est un syst&egrave;me blogging l&eacute;ger. Il exige PHP 4,1 ou plus grand, et &eacute;crire-permissions sur le serveur.  Toute l'information est stock&eacute;e dans les plat-dossiers, ainsi aucune base de donn&eacute;es n'est exig&eacute;e.<br /><br />
				Afin de commencer, Simple PHP Blog doit cr&eacute;er trois chemises (<b>config</b>, <b>content</b>, and <b>images</b>) dans quel pour stocker votre information.  Apr&egrave;s celui, vous cr&eacute;erez votre mot de passe et alors vous pouvez commencer à blogging.<br /><br />
				<b>D&eacute;clic ci-dessous pour commencer l'installation:</b>";
				$lang_string['begin'] = "[ Commencez L'Installation ]";
				break;
			case 'install02':
				$lang_string['title'] = "L'Installation";
				$lang_string['instructions'] = "Essai de cr&eacute;er <b>config</b>, <b>content</b>, and <b>images</b> folders:";
				$lang_string['folder_exists'] = "Ok!  La chemise existe d&eacute;j&agrave;.  Aucuns changements faits...";
				$lang_string['folder_failed'] = "Hu&eacute;es!  N'a pas pu cr&eacute;er la chemise...";
				$lang_string['folder_success'] = "Succ&egrave;s!  Chemise cr&eacute;&eacute;e...";
				// Help
				$lang_string['help'] = "
				<h2>Whoops!</h2>
				N'a pas pu cr&eacute;er une ou plusieurs chemises!<br /><br />C'est le plus susceptible parce que:<br />
				<ol>
				<li>Écrivez les permissions ne sont pas plac&eacute;s pour permettre l'acc&egrave;s lecture/&eacute;criture.</li>
				<li>L'UID (identifications d'utilisateur) de tous les dossiers et chemise doit s'assortir.</li>
				</ol>
				Suivez les instructions de d&eacute;pannage ci-dessous et cliquetez l'essai encore:<br />
				<ol>
				<li>Cr&eacute;ez manuellement les chemises suivantes: <b>config</b>, <b>content</b>, and <b>images</b>.</li>
				<li>Permis &eacute;crivez les permissions sur les chemises:  Dans votre programme de ftp, le propri&eacute;taire, l'utilisateur, et le monde devraient avoir lu et &eacute;crits l'acc&egrave;s.  (vous pouvez devoir entrer en contact avec votre fournisseur de service pour changer ces derniers...)</li>
				<li>MAssurez-vous que l'UID de tous vos dossiers et de chemises sont identique.  (vous pouvez devoir entrer en contact avec votre fournisseur de service pour changer ces derniers...)</li>
				</ol>";
				$lang_string['try_again'] = "[ Essai Encore ]";
				// Success
				$lang_string['success'] = "Succ&egrave;s!  Chemises cr&eacute;&eacute;es avec succ&egrave;s!  D&eacute;clic ci-dessous à continuer:";
				$lang_string['continue'] = "[ Continuez ]";
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
				$lang_string['title'] = "Changez Le Username &amp; Mot de passe";
				$lang_string['instructions'] = "Employez la forme ci-dessous pour changer votre username et/ou mot de passe.  Entrez le username et le mot de passe que vous voulez employer.";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Mot de passe:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string['success'] = "F&eacute;licitations!  Vous &ecirc;tes maintenant entr&eacute;s.  Cliquetez ci-dessous pour visiter la page d'installation, où vous pouvez appeler votre blog.  Blogging heureux!";
				$lang_string['btn_setup'] = "[ Installation ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>L'information non sauv&eacute;e.  J'ai couru dans un probl&egrave;me tout en sauvant votre username et/ou mot de passe.<br /><br />Serveur Rapport&eacute;:<br />";
				$lang_string['form_error'] = "Veuillez accomplir les champs de username et de mot de passe.";
				break;
			case 'install04':
				$lang_string['title'] = "Cr&eacute;ez Le Dossier De Mot de passe";
				$lang_string['instructions'] = "Voici la partie rus&eacute;e:<br />
				<ol>
				<li>Ouvrez une application d'&eacute;diteur de texte. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
				<li>Cr&eacute;ez un nouveau document des textes.</li>
				<li>La copie et collent le code dans la boîte ci-dessous dans votre document.</li>
				<li>Économiser votre dossier et appelez-le <b>password.php</b> <i>(Soyez sûr de le sauver dedans <b>text</b> ou <b>plain text</b> format.)</i></li>
				<li>Ouvrez une application de ftp.</li>
				<li>T&eacute;l&eacute;chargez votre nouveau <b>password.php</b> dans <b>config</b> chemise sur votre site Web.</li>
				<li>Supprimez <b>password.php</b> de votre commande dure locale.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Note:  Si vous voulez remettre à z&eacute;ro votre username et mot de passe (probablement parce que vous l'avez oubli&eacute;), supprimez <b>password.php</b> dossier dans <b>config</b> chemise sur votre site Web.  La prochaine fois que vous visitez votre emplacement, il marchera vous par ce proc&eacute;d&eacute; d'installation encore...</i>";
				$lang_string['code'] = "Code pour <b>password.php</b> dossier:";
				$lang_string['continue'] = "[ Continuez ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Login";
				$lang_string['instructions'] = "Veuillez entrer votre username et mot de passe ci-dessous";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Mot de passe:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string['success'] = "Congratulations!You sont maintenant entr&eacute;s.  Cliquetez ci-dessous pour visiter la page d'installation, où vous pouvez personnaliser votre nouveau blog.  Note:  Maintenant que vous avez compl&eacute;t&eacute; le proc&eacute;d&eacute; d'installation, on lui recommande que vous supprimiez les dossiers installXX.php de votre emplacement d'enchaînement (c.-à-d. install00.php par install06.php)<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Vous n'&ecirc;tes pas entr&eacute;s.  Veuillez v&eacute;rifier que vous avez dactylographi&eacute; votre username et mot de passe correctement et essai encore.<p />";
				$lang_string['form_error'] = "Veuillez accomplir les champs de username et de mot de passe.";
				// Success
				$lang_string['btn_setup'] = "[ Installation ]";
				$lang_string['btn_try_again'] = "[ Essai Encore ]";
				break;
			case 'setup':
				$lang_string['title'] = "Installation";
				$lang_string['instructions'] = "Vous pouvez modifier le nom de votre blog ainsi que vos informations personnelles.";
				$lang_string['blog_title'] = "Nom du Blog :";
				$lang_string['blog_author'] = "Auteur :";
				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
				$lang_string['blog_avatar'] = "Avatar URL: (Leave blank for none)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Pied de Page :";
				$lang_string['blog_choose_language'] = "Choisissez votre Langue :";
				$lang_string['blog_enable_comments'] = "Permettez Les Commentaires D'Utilisateur"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Ouvrez les commentaires dans la fenetre de Popup"; // <-- New 0.3.6
				$lang_string['blog_enable_lastcomments'] = "Enable Most Recent Comments Listing"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Enable Most Recent Entries Listing"; // New for 0.4.7
				$lang_string['blog_enable_voting'] = "Permettez aux utilisateurs d'&eacute;valuer des entr&eacute;es"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Envoyez l'avis d'email quand des commentaires sont signal&eacute;s"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Envoyez weblog &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_enable_stats'] = "Enable Stats Option in Menu"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Enable Most Recent Comments Listing"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Enable Most Recent Entries Listing"; // New for 0.4.7
        $lang_string['blog_enable_cache'] = "Permettez la cachette d'entr&eacute;e de Blog (peut fournir l'augmentation de vitesse sur quelques serveurs)"; // New for 0.4.6
				$lang_string['blog_ping_urls'] = "&Eacute;crivez le plein URL (i.e. http://rpc.weblogs.com/RPC2) du service à &quot;ping&quot;.<br />(Vous pouvez &eacute;crire plus d'une adresse s&eacute;par&eacute;e par des virgules.)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback fournit une m&eacute;thode d'avis entre les blogs.  Faites un autre blog savoir que vous liez &agrave; eux en leur envoyant un cinglement de trackback.  Voyez qui lie &agrave; votre blog en recevant des cinglements de trackback.  Vous pouvez entrer dans l'URIs pour cingler manuellement, ou pour essayer de le faire automatiquement par l'Automobile-D&eacute;couverte."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Permettez le trackback dans mon blog"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Permettez l'Automobile-D&eacute;couverte en soumettant un poteau contenant URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "Entr&eacute;es maximum &agrave; montrer:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "&Eacute;tiquettes à permettre dans les commentaires:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					Depuis PHP 4.0.4, PHP a eu la capacit&eacute; de lire et &eacute;crire les dossiers de gzip (gz), 
					ainsi l'disque-espace comprim&eacute;s d'&eacute;conomie. Il peut &eacute;galement d'une mani&egrave;re transparente 
					comprimer les pages qui sont envoy&eacute;es aux navigateurs qui soutiennent la compression de 
					gzip, ainsi largeur de bande d'&eacute;conomie.<br />
					<br />
					L'appui de Zlib dans PHP n'est pas permis par d&eacute;faut. Si les checkboxes sont handicap&eacute;s, 
					alors votre installation de PHP ne soutient pas la prolongation de Zlib."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Permettez la compression de GZIP pour des dossiers de base de donn&eacute;es"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Permettez la compression de GZIP pour le rendement de HTTP"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Sauvegarde des param&egrave;tres de configuration impossibles. Probl&egrave;me recontr&eacute; durant l'&eacute;xecution du script.<br /><br />Le Serveur a report&eacute; :<br />";
				$lang_string['form_error'] = "Veuillez compl&eacute;ter les champs AUTEUR et TITRE";
				$lang_string['label_entry_order'] = "Ordre d'apparition :";
				$lang_string['select_new_to_old'] = "Plus recents en premier";
				$lang_string['select_old_to_new'] = "Plus anciens en premier";
				$lang_string['label_comment_order'] = "Ordre des Commentaires:";
				$lang_string['cal_sunday'] = "Lundi"; // New for 0.4.6
				$lang_string['cal_monday'] = "Monday"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "Jour De D&eacute;but De Semaine De Calendrier"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Permettez Le Bloc De Calendrier/Archives"; // New for 0.4.6
				$lang_string['blog_enable_title'] = "Permettez le bloc plat de titre des textes (checkbox clair si le titre est dans le graphique d'en-t&ecirc;te)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Permettez Permalink sur des entr&eacute;es de Blog"; // New for 0.4.6
				$lang_string['title_sidebar'] = "Sidebar"; // New in 0.4.7
				$lang_string['title_comments'] = "Comments"; // New in 0.4.7
				$lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
				$lang_string['title_compression'] = "Compression"; // New in 0.4.7
				$lang_string['title_entries'] = "Entries"; // New in 0.4.7
				$lang_string['title_general'] = "General"; // New in 0.4.7
				$lang_string['title_language'] = "Language"; // New in 0.4.7
        break;
			case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "URL de Trackback pour cette entr&eacute;e:";
				$lang_string['delete_btn'] = "Effacement";
				// Error Response
				$lang_string['error_add'] = "Erreur stockant des donn&eacute;es de trackback.";
				break;
			case 'options':
				$lang_string['title'] = "Options";
				$lang_string['instructions'] = "Utilisez ce formulaire pour param&aacute;trer les formats de date et de temps utilis&eacute;s dans votre blog. Vous pouvez choisir une horloge a 12 ou a 24 heures, une date à format long ou court. Les champs d'aper&ccedil;u se mettent automatiquement a jour et affichent le formatage choisi.";
				// Long Date
				$lang_string['ldate_title'] = "Format d&acute;une date longue :";
				$lang_string['weekday'] = "Jour de la Semaine";
				$lang_string['month'] = "Mois";
				$lang_string['day'] = "Jour";
				$lang_string['year'] = "Ann&eacute;e";
				$lang_string['none'] = "Aucun";
				// Short Date
				$lang_string['sdate_title'] = "Format d&acute;une date courte :";
				$lang_string['s_month'] = "Mois";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Jour";
				$lang_string['s_year'] = "Ann&eacute;e";
				$lang_string['zero_day'] = "Laissez les z&eacute;ros des jours";
				$lang_string['show_century'] = "Voir les si&egrave;cles";
				// Time
				$lang_string['time_title'] = "Format de l'heure:";
				$lang_string['12hour'] = "Horloge &agrave; 12 heures";
				$lang_string['24hour'] = "Horloge &agrave; 24 heures";
				$lang_string['before_noon'] = "Matin";
				$lang_string['after_noon'] = "Apr&egrave;s Midi";
				// Date
				$lang_string['date_title'] = "Format d'affichage de la date :";
				$lang_string['long_date'] = "Date Longue";
				$lang_string['short_date'] = "Date Courte";
				$lang_string['time'] = "Horloge";
				// Menu
				$lang_string['menu_title'] = "Menu Date Display Format:";
				$lang_string['long_date'] = "Long Date";
				$lang_string['short_date'] = "Short Date";
				// Used in multiple places
				$lang_string['zero_day'] = "Laisser le z&eacute;ro des jours";
				$lang_string['zero_month'] = "Laisser le z&eacute;ro des mois";
				$lang_string['zero_hour'] = "Laisser le z&eacute;ro des heures";
				$lang_string['separator'] = "S&eacute;parateur :";
				$lang_string['preview'] = "Aper&ccedil;u :";
				$lang_string['server_offset'] = "Server Offset:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Sauvegarde des param&egrave;tres de configuration impossibles. Probl&egrave;me recontr&eacute; durant l'&eacute;xecution du script.<br /><br />Le Serveur a report&eacute; :<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Th&egrave;mes";
				$lang_string['instructions'] = "Employez le menu drop-down pour choisir un th&egrave;me diff&eacute;rent.";
				// Themes
				$lang_string['choose_theme'] = "Th&egrave;mes:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>L'information non sauv&eacute;e.  J'ai couru dans un probl&egrave;me tout en sauvant votre information.<br /><br />Serveur Rapport&eacute;:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Upload d'image";
				$lang_string['instructions'] = "Cliquez sur le bouton ci dessous pour choisir un fichier &agrave; uploader.";
				$lang_string['select_file'] = "Choisir un fichier";
				$lang_string['upload_btn'] = "Upload";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Upload d'image impossible. Voici quelques informations : <br /><br />Le Serveur a report&eacute; :<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "R&eacute;sultats De Recherche";
				$lang_string['instructions'] = "R&eacute;sultats de recherche pour <b>%string</b>:";
				$lang_string['not_found'] = "R&eacute;sultat n'a pas trouv&eacute;";
				break;
			case 'contact': // <-- New 0.3.8
				$lang_string['title'] = "Contactez-Moi";
				$lang_string['instructions'] = "Compl&eacute;tez la forme :";
				$lang_string['form_error'] = "Veuillez accomplir les champs de sujet et de commentaire.";
				$lang_string['name'] = "Nom:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Sujet:";
				$lang_string['comment'] = "Commentaire:";
				$lang_string['submit_btn'] = "&nbsp;Soumettez&nbsp;";
				$lang_string['success'] = "<h2>Succ&egrave;s !</h2>Votre message a &eacute;t&eacute; envoy&eacute;.<p />";
				$lang_string['contact_capcha'] = "Anti-Spam: Entrez <b>%s</b>"; // 0.4.2
				$lang_string['failure'] = "<h2>Erreur !</h2>Votre message n'a pas &eacute;t&eacute; envoy&eacute;. Tr&egrave;s probablement anti le Spam n'a pas &eacute;t&eacute; &eacute;crit correctement.<p />";
				$lang_string['contactsent'] = "Contact envoy&eacute; &agrave; travers: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string['title'] = "Statistiques";
				$lang_string['general'] = "G&eacute;n&eacute;ralit&eacute;s";
				$lang_string['entry_info'] = "<b>%s</b> employer d'entr&eacute;es <b>%s</b> mots stock&eacute;s dedans <b>%s</b> bytes";
				$lang_string['comment_info'] = "<b>%s</b> employer de commentaires <b>%s</b> mots stock&eacute;s dedans <b>%s</b> bytes";
				$lang_string['trackback_info'] = "<b>%s</b> trackbacks stock&eacute;s dedans <b>%s</b> bytes";
				$lang_string['static_info'] = "<b>%s</b> employer statique de pages <b>%s</b> mots stock&eacute;s dedans <b>%s</b> bytes";
				$lang_string['most_viewed_entries'] = "10 entr&eacute;es les plus vues";
				$lang_string['most_commented_entries'] = "10 entr&eacute;es les plus comment&eacute;es";
				$lang_string['most_trackbacked_entries'] = "10 trackbacked plus des entr&eacute;es";
				$lang_string['vote_info'] = "<b>%s</b> voix stock&eacute;es dedans <b>%s</b> bytes"; // 0.4.1
				$lang_string["most_voted_entries"] = "10 entr&eacute;es les plus vot&eacute;es"; // 0.4.1
				$lang_string["most_rated_entries"] = "La plupart des entr&eacute;es &eacute;valu&eacute;es"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Error 403.8 - Acc&egrave;s De Page/Function Ni&eacute;';
				$lang_string["errorline1"] = "La page ou fonctionnent vous a essay&eacute; de traiter exige l'utilisation des biscuits.";
				$lang_string["errorline2"] = 'Reconstituez la fonctionnalit&eacute; de biscuit dans votre logiciel de browser ou de protection et essayez votre demande encore.';
				$lang_string["clientid"] = 'Identification De Client: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Error 403.8 - Acc&egrave;s De Page/Function Ni&eacute;';
				$lang_string["404"] = "HTTP Error 404 - Page/Function N'existe pas";
				$lang_string["error_404"] = "La page ou fonctionnent vous a essay&eacute; de traiter n'existe pas.";
				$lang_string["error_javascript"] = 'La page ou fonctionnent vous a essay&eacute; exige du Javascript afin de fonctionner correctement.';
				$lang_string["error_emailnotsent"] = "Le message que vous avez essay&eacute; d'envoyer a &eacute;chou&eacute;.";
				$lang_string["error_emailnotsentcapcha"] = "Le message que vous avez essay&eacute; d'envoyer a &eacute;chou&eacute; parce que l'entr&eacute;e anti-Spam &eacute;tait incorrecte ou des disparus.";
				$lang_string["clientid"] = 'Identification De Client: ';
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
