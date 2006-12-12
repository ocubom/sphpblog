<?php

	// French Language File

	// (c) 2004 Thibaud Chon, thibaud <dot> chone <at> insa-lyon <dot> fr (0.3.7)

	// (c) 2005 Bill Bateman (0.4.6)

	// (c) 2006 Christian Clavet

	// (c) 2006 Clement Moulin (0.4.9)

	function sb_language( $page ) {

		global $language, $html_charset, $php_charset, $lang_string;

		// Language: Francais

		$lang_string['language'] = 'français';

		$lang_string['locale'] = array('fr_FR','fra','french');

		$lang_string['rss_locale'] = 'fr-FR'; // New 0.4.8

		// ISO Charset: ISO-8859-1

		$lang_string['html_charset'] = 'ISO-8859-1';

		$lang_string['php_charset'] = 'ISO-8859-1';

		setlocale( LC_TIME, $lang_string['locale'] );

		// Some Global Strings

		// Menu

		$lang_string['menu_links'] = "Liens";

		$lang_string['menu_home'] = "Accueil";

		$lang_string['menu_contact'] = "Contactez-moi";

		$lang_string['menu_stats'] = "Statistiques";

		$lang_string['menu_calendar'] = "Calendrier"; // New for 0.4.8

		$lang_string['menu_archive'] = "Archives";

		$lang_string['menu_viewarchives'] = "Voir toutes les archives";

		$lang_string['menu_menu'] = "Menu";

		$lang_string['menu_add'] = "Ajouter entrée";

		$lang_string['menu_add_static'] = "Ajouter page statique";

		$lang_string['menu_upload'] = "Image de téléchargement";

		$lang_string['menu_setup'] = "Configuration";

		$lang_string['menu_categories'] = "Catégories";

		$lang_string['menu_info'] = "Meta Tags";

		$lang_string['menu_options'] = "Date &amp; Heure";

		$lang_string['menu_themes'] = "Thèmes";

		$lang_string['menu_colors'] = "Couleurs";

		$lang_string['menu_change_login'] = "Changer le login";

		$lang_string['menu_logout'] = "Déconnexion";

		$lang_string['menu_login'] = "Connexion";

		$lang_string['menu_most_recent'] = "Derniers commentaires";

		$lang_string['menu_most_recent_entries'] = "Dernières entrées";

		$lang_string['menu_most_recent_trackback'] = "Derniers trackbacks";

		$lang_string['menu_add_block'] = "Blocs";

		$lang_string['menu_emoticons'] = "Emoticônes"; // New for 0.4.7

		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7

		$lang_string['menu_moderation'] = "Modération"; // New for 0.4.9

		// Counter

		$lang_string['counter_today'] = "Aujourd'hui:"; // New for 0.4.8

		$lang_string['counter_yesterday'] = "Hier:"; // New for 0.4.8

		$lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8

		$lang_string['counter_title'] = "Total compteurs"; // New for 0.4.8

		// Other

		$lang_string['home'] = "Retour accueil";

		$lang_string['nav_next'] = 'Suivant';

		$lang_string['nav_back'] = 'Précédent';

		$lang_string['search_title'] = 'Rechercher';

		$lang_string['search_go'] = 'OK';

		$lang_string['page_generated_in'] = 'Page générée en %s secondes';

		$lang_string['counter_total'] = 'Visites site: '; // New in 0.4.8

		$lang_string['read_more'] = 'En savoir plus...'; // New in 0.4.8

		// SB Functions

		$lang_string['sb_months'] = array( 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' );

		$lang_string['sb_default_title'] = 'Sans Titre';

		$lang_string['sb_default_author'] = 'Sans Auteur';

		$lang_string['sb_default_footer'] = 'Sans bas de page';

		$lang_string['sb_edit'] = 'Editer';

		$lang_string['sb_delete'] = 'Supprimer';

		$lang_string['sb_permalink'] = 'permalien';

		$lang_string['sb_trackback'] = 'trackbacks';

		$lang_string['sb_relatedlink'] = 'à propos'; // <-- New in 0.4.6

		$lang_string['sb_add_comment_btn'] = 'Ajouter un commentaire';

		$lang_string['sb_comment_btn_number_first'] = true;

		$lang_string['sb_comment_btn'] = 'commentaire';

		$lang_string['sb_comments_plural_btn_number_first'] = true;

		$lang_string['sb_comments_plural_btn'] = 'commentaires';

		// ( 1 view )

		$lang_string['sb_view_counter_pre'] = '';

		$lang_string['sb_view_counter_post'] = ' lecture';

		// ( 2 views )

		$lang_string['sb_view_counter_plural_pre'] = '';

		$lang_string['sb_view_counter_plural_post'] = ' lectures';

		$lang_string['sb_add_link_btn'] = 'Gérer les liens';

		$lang_string['sb_rate_entry_btn'] = "Cliquez pour évaluer l'entrée";

		// Entry Text Editor

		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {

			$lang_string['label_subject'] = "Sujet:";

			$lang_string['label_insert'] = "Insertion spéciale:";

			$lang_string['btn_bold'] = " b ";

			$lang_string['btn_italic'] = " i ";

			$lang_string['btn_image'] = "img";

			$lang_string['btn_url'] = "url";

			$lang_string['btn_readmore'] = "en savoir plus"; // 0.4.8

			$lang_string['view_images'] = "Voir les images téléchargées";

			$lang_string['label_entry'] = "Entrée:";

			$lang_string['btn_preview'] = "&nbsp;Aperçu&nbsp;";

			$lang_string['btn_post'] = "&nbsp;Envoyer&nbsp;";

			$lang_string['file_name'] = "Nom de fichier statique: (sans espaces ni extension de fichiers)";

			// Javascript Strings

			$lang_string['insert_styles'] = "Entrez le texte à formater:";

			$lang_string['insert_image'] = "Entrez l\\'URL de l\\'image:";

			$lang_string['insert_url1'] = "Entrez le texte à afficher pour le lien (optionnel):";

			$lang_string['insert_url2'] = "Entrez l\\'URL complète du lien:";

			$lang_string['insert_url3'] = "Ouvrir l\\'URL dans une nouvelle fenêtre (optionnel):";

			$lang_string['form_error'] = "Veuillez compléter les champs Sujet et Entrée.";

			// More Javascript Strings

			$lang_string['insert_image_optional'] = 'Optionnel:';

			$lang_string['insert_image_width'] = 'Largeur (optionnel):';

			$lang_string['insert_image_height'] = 'Taille (optionnel):';

			$lang_string['insert_image_popup'] = 'Ouvrir en taille réelle dans un popup lorsque cliquée (optionnel):';

			$lang_string['insert_image_float'] = 'Flottante (optionnel):';

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

				$lang_string['title'] = "Ajouter une entrée";

				$lang_string['instructions'] = "Êtes vous prêt à bloguer? Remplissez le formulaire ci dessous, puis cliquez sur 'Aperçu' pour voir à quoi va ressembler votre entrée, ou sur 'Poster' pour sauvegarder votre entrée.";

				$lang_string['title_ad'] = "Confirmez les pings de Trackback";

				$lang_string['instructions_ad'] = "Ce sont les URIs auto-découvertes que vous êtes sur le point de pinguer. Si vous ne voulez pas pinguer une certaine URI, déselectionnez-là ci-dessous. Puis cliquez sur le bouton 'OK' pour pinguer les URIs vérifiées ou sur 'Annuler' pour ne rien pinguer du tout.";

				$lang_string['label_tb_ping'] = "Pings de Trackback à envoyer (séparés par des virgules)";

				$lang_string['label_tb_autodiscovery'] = "auto-découverte";

				$lang_string['label_relatedlink'] = "A propos";

				$lang_string['label_categories'] = "Liste des catégories";

				// Preview / Edit Entry

				$lang_string['title_preview'] = "Aperçu / Edition d'entrée";

				$lang_string['instructions_preview'] = "Voici à quoi votre entrée va ressembler. Si vous utilisez différents styles de texte ou si vous incluez des images, veillez à bien 'fermer' toutes vos 'balises'.";

				$lang_string['title_update'] = "Modifier une entrée";

				$lang_string['instructions_update'] = "Vous pouvez modifier votre entrée en utilisant le formulaire ci-dessous. Cliquez sur 'Aperçu' ou sur 'Envoyer' lorque vous avez fini.";

				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";

				$lang_string['cancel_btn'] = "&nbsp;Annuler&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Oooups!</h2>Entrée non sauvegardée. Une erreur est survenue lors de la sauvegarde de votre entrée.<br /><br />Le serveur a retourné:<br />";

				$lang_string['success'] = "<h2>Entrée sauvegardée!</h2>Votre entrée a été sauvegardée avec succès."; // 0.4.8.1

				break;

			case 'add_static':

				// Add Entry

				$lang_string['title'] = "Ajouter une page statique";

				$lang_string['instructions'] = "Remplissez le formulaire suivant pour créer une page statique. Contrairement à une entrée classique, les pages statiques apparaissent en lien dans le menu de droite. Ce sont des pages que vous souhaitées toujours accessibles comme par exemple: à propos de moi, me contacter, mon agenda, etc. Cliquez sur 'Apercu' pour voir à quoi cette page ressemblera, ou sur 'Envoyer' pour la sauvegarder.";

				// Preview / Edit Entry

				$lang_string['title_preview'] = "Aperçu / Edition de page statique";

				$lang_string['instructions_preview'] = "Voici à quoi ressemblera votre page statique. Si vous utilisez différents styles de texte ou si vous incluez des images, veillez a bien 'fermer' toutes vos 'balises'.";

				$lang_string['title_update'] = "Modifier page statique";

				$lang_string['instructions_update'] = "Vous pouvez modifier votre entrée à l'aide du formulaire ci-dessous. Cliquez sur 'Apercu' ou sur 'Envoyer' lorque vous avez terminé.";

				$lang_string['form_error'] = "Veuillez compléter les champs Sujet, Entrée et Nom de fichier.";

				// Error Response

				$lang_string['error'] = "<h2>Oouups!</h2>Entrée non sauvegardée. Une erreur est survenue lors de la sauvegarde.<br /><br />Le serveur a retourné:<br />";

				break;

			case 'add_block':

				// Add / Manage Blocks

				$lang_string['title'] = "Ajouter / Gérer les blocs";

				$lang_string['instructions'] = "Ajouter un bloc personnalisé";

				$lang_string['up'] = "haut";

				$lang_string['down'] = "bas";

				$lang_string['edit'] = "editer";

				$lang_string['delete'] = "effacer";

				$lang_string['block_name'] = "Nom du bloc:";

				$lang_string['block_content'] = "Contenu du bloc:";

				$lang_string['instructions_edit'] = "Vous êtes en train d'éditer le bloc:";

				$lang_string['instructions_modify'] = "Cliquez ci-dessous pour modifier un bloc:";

				$lang_string['submit_btn_edit'] = "Editer le bloc";

				$lang_string['submit_btn_add'] = "Ajouter un bloc";

				$lang_string['form_error'] = "Veuillez renseigner le champ Nom.";

				break;

			case 'add_link':

				$lang_string['static_pages'] = "Pages statiques:";

				// Add / Manage Links

				$lang_string['title'] = "Ajouter / Gérer les liens";

				$lang_string['instructions'] = "Ajouter des liens personnalisés vers d'autres sites. Remplissez le formulaire ci-dessous et cliquez sur 'Ajouter le lien'. Utilisez les boutons 'Haut' et 'Bas' pour changer l'ordre des liens. Cliquez sur le bouton 'Editer' pour modifier un lien. Cliquez sur le bouton 'Effacer' pour supprimer un lien.";

				$lang_string['up'] = "haut";

				$lang_string['down'] = "bas";

				$lang_string['edit'] = "editer";

				$lang_string['delete'] = "effacer";

				$lang_string['link_name'] = "Nom du lien:";

				$lang_string['link_url'] = "URL du lien : (Optionnel. Laissez vide pour créer un séparateur.)";

				$lang_string['instructions_edit'] = "Vous éditez actuellement le lien:";

				$lang_string['instructions_modify'] = "Cliquez ci-dessous pour modifier un lien:";

				$lang_string['submit_btn_edit'] = "Editer le lien";

				$lang_string['submit_btn_add'] = "Ajouter un lien";

				$lang_string['form_error'] = "Veuillez renseigner le champ Nom.";

				break;

			case 'categories':

				// Add / Manage Links

				$lang_string['title'] = "Ajouter / Gérer les catégories";

				$lang_string['instructions'] = "Utilisez le formulaire ci-dessous pour ajouter et éditer vos catégories. Chaque catégorie doit respecter le format suivant: 'nom de catégorie (numéro identifiant)'.  Ajouter un espace devant une catégories pour en faire une sous-catégorie.<br /><br /><b>Exemple:</b><br />Général (1)<br />Nouvelles (3)<br />&nbsp;&nbsp;Annonces (6)";

				$lang_string['error'] = "Erreur";

				$lang_string['current_categories'] = "Catégories actuelles";

				$lang_string['no_categories_found'] = "Aucunes catégories trouvées";

				$lang_string['category_list'] = "Liste des catégories:";

				$lang_string['validate'] = "Vérifier";

				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";

				break;

			case 'colors':

				// Change Colors

				$lang_string['title'] = "Changer les couleurs";

				$lang_string['instructions'] = "Vous pouvez changer les couleurs du texte et du fond de votre blog. Sélectionnez d'abord le champs ci-dessous, puis utilisez la palette pour composer votre couleur. Les valeurs changent automatiquement.";

				$lang_string['bg_color'] = "Fond de page";

				$lang_string['main_bg_color'] = "Fond de la page principale";

				$lang_string['border_color'] = "Bordure de page";

				$lang_string['inner_border_color'] = "Bordure interne";

				$lang_string['header_bg_color'] = "Entête: fond";

				$lang_string['header_txt_color'] = "Entête: texte";

				$lang_string['menu_bg_color'] = "Menu: fond";

				$lang_string['footer_bg_color'] = "Pied de page: fond";

				$lang_string['txt_color'] = "Texte principal";

				$lang_string['headline_txt_color'] = "Titres";

				$lang_string['date_txt_color'] = "Dates";

				$lang_string['footer_txt_color'] = "Pied de page: texte";

				$lang_string['link_reg_color'] = "Lien";

				$lang_string['link_hi_color'] = "Lien survolé";

				$lang_string['link_down_color'] = "Lien activé";

				// More Colors

				$lang_string['entry_bg'] = "Entrée: fond";

				$lang_string['entry_title_bg'] = "Entrée: fond titre";

				$lang_string['entry_border'] = "Entrée: bordure";

				$lang_string['entry_title_text'] = "Entrée: texte titre";

				$lang_string['entry_text'] = "Entrée: texte";

				$lang_string['menu_bg'] = "Menu: fond";

				$lang_string['menu_title_bg'] = "Menu: fond titre";

				$lang_string['menu_border'] = "Menu: bordure";

				$lang_string['menu_title_text'] = "Menu: texte titre";

				$lang_string['menu_text'] = "Menu: texte";

				$lang_string['menu_link_reg_color'] = "Menu: lien";

				$lang_string['menu_link_hi_color'] = "Menu: lien survolé";

				$lang_string['menu_link_down_color'] = "Menu: lien activé";

				// Submit

				$lang_string['color_preset'] = "Profils de couleur:";

				$lang_string['scheme_name'] = "Entrez le nom de votre profil de couleur personnalisé:";

				$lang_string['scheme_file'] = "Entrez le nom du fichier de votre profil de couleur: (sans espaces ni extension de fichiers)";

				$lang_string['save_btn'] = "&nbsp;Enregistrer&nbsp;";

				$lang_string['form_error'] = "Veuillez entrer un nom pour votre profil de couleur personnalisé.";

				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";

				$lang_string['theme_doesnt_allow_colors'] = 'Le thème actuellement sélectionné n\'autorise pas les couleurs personnalisées.';

				// Error Response

				$lang_string['error'] = "<h2>Oouups!</h2>Paramètres non sauvegardés. Une erreur est survenue durant l'enregistrement.<br /><br />Le serveur a retourné:<br />";

				$lang_string['success'] = "<h2>Couleurs sauvées!</h2>Les paramètres ont été sauvegardés avec succès."; // New for 0.4.8.1

				break;

			case 'comments':

				// Comments

				$lang_string['name'] = "Nom:"; //New in 0.4.6.2

				$lang_string['email'] = "Email:"; //New in 0.4.6.2

				$lang_string['homepage'] = "Site Internet:"; //New in 0.4.6.2

				$lang_string['comment'] = "Commentaire:"; //New in 0.4.6.2

				$lang_string['IPAddress'] = "Adresse IP:";  // New for 0.4.6.2

				$lang_string['useragent'] = "Navigateur:";  // New for 0.4.6.2

				$lang_string['wrote'] = "<i>Le %s, %s a écrit:</i><br />\n<br />\n%s"; // New for 0.4.6.2

				$lang_string['comment_capcha'] = "Anti-Spam: Entrez <b>%s</b>"; // 0.4.2

				$lang_string['title'] = "Commentaires";

				$lang_string['header'] = "Ajouter un commentaire";

				$lang_string['instructions'] = "Remplissez ce formulaire pour ajouter votre propre commentaire.";

				$lang_string['comment_name'] = "Votre nom:";

				$lang_string['comment_email'] = "Email:";

				$lang_string['comment_url'] = "URL:";

				$lang_string['commentposted'] = "Nouveau commentaire posté sur: ";  // New for 0.4.6.2

				$lang_string['comment_remember'] = "Se souvenir de moi:";

				$lang_string['comment_text'] = "Votre commentaire:";

				$lang_string['post_btn'] = "&nbsp;Poster un commentaire&nbsp;";

				$lang_string['delete_btn'] = "effacer";

				$lang_string['ban_btn'] = "interdire IP"; // New for 0.4.8

				$lang_string['expired_comment1'] = "Désolé, les nouveaux commentaires ne sont pas autorisés après "; // New for 0.4.8

				$lang_string['expired_comment2'] = " jours."; // New for 0.4.8

				$lang_string['blacklisted'] = "Désolé, votre adresse IP a été interdite. Commentaires non autorisés."; // New for 0.4.8

				$lang_string['bannedword'] = "Votre commentaire, URL, nom ou email contiennent un ou plusieurs mot(s) qui ont été interdits par l'administrateur. Votre commentaire N'A PAS été enregistré."; // New for 0.4.8

				$lang_string['nocomments'] = "Les commentaires ne sont pas disponibles pour cette entrée."; // New for 0.4.9

				// Error Response

				$lang_string['error_add'] = "<h2>Oouups!</h2>Commentaire non sauvegardé. Une erreur est survenue lors de l'enregistrement de votre commentaire.<br /><br />Le serveur a retourné:<br />";

				$lang_string['error_delete'] = "<h2>Oouups!</h2>Commentaire non supprimé. Une erreur est survenue lors de la suppression du commentaire.<br /><br />Le serveur a retourné:<br />";

				$lang_string['error_ban'] = "<h2>Oouups!</h2>L'IP n'a pas été ajoutée à la liste des IP interdites.<br /><br />Le serveur a retourné:<br />";

				$lang_string['success_add'] = "<h2>Commentaire ajouté!</h2>Votre commentaire a été sauvegardé avec succès."; // New for 0.4.8.1

				$lang_string['success_delete'] = "<h2>Commentaire supprimé!</h2>Le commentaire a été supprimé."; // New for 0.4.8.1

				$lang_string['success_ban1'] = "<h2>IP interdite!";

				$lang_string['success_ban2'] = "</h2>Pour retirer cette interdiction ultérieurement, utilisez l'option Modération du menu Préférences."; // New for 0.4.8.1

				$lang_string['form_error'] = "Veuillez renseigner les champs Nom, Commentaire et Anti-Spam.";

				$lang_string['error_noip'] = "Aucune IP n'a été fournie pour l'interdiction.";

				break;

			case 'delete':

				$lang_string['title'] = "Supprimer une entrée";

				$lang_string['instructions'] = "Ceci est l'entrée que vous vous appretez à effacer. Assurez-vous que vous êtes certain de vouloir la supprimer car l'opération est irréversible...";

				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";

				$lang_string['cancel_btn'] = "&nbsp;Annuler&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Oouups!</h2>Impossible de supprimer l'entrée.<br /><br />Le serveur a retourné:<br />";

				$lang_string['success'] = "<h2>Entrée supprimée!</h2>L'entrée a été supprimée."; // New for 0.4.8.1

				break;

			case 'delete_static':

				$lang_string['title'] = "Effacer une page statique";

				$lang_string['instructions'] = "Ceci est la page statique que vous vous appretez à effacer. Assurez-vous que vous êtes certain de vouloir la supprimer car l'opération est irréversible...";

				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";

				$lang_string['cancel_btn'] = "&nbsp;Annuler&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Oouups!</h2>Impossible de supprimer la page.<br /><br />Le serveur a retourné:<br />";

				$lang_string['success'] = "<h2>Page statique supprimée!</h2>La page statique a été supprimée."; // New for 0.4.8.1

				break;

			case 'image_list':

				$lang_string['title'] = "Liste des images";

				$lang_string['instructions'] = "Cliquez sur les liens ci-dessous pour voir les images.<br><br>Pour ajouter une image à votre entrée:<br>1) Cliquez tout en appuyant sur CONTROL et sélectionnez 'Copier le raccourci'.<br>2) Retournez sur la page d'ajout ou d'édition d'entrée.<br>3) Cliquez sur le bouton 'img' et collez l'URL dans la fenêtre.";

				break;

			case 'info':

				$lang_string['title'] = "Meta-Données";

				$lang_string['instructions'] = "Les informations ci-dessous sont utilisées comme &quot;meta-données&quot;, qui aident les moteurs de recherche à correctement trouver et identifier votre site. Ces informations peuvent également être utilisées dans les flux RSS.";

				$lang_string['info_keywords'] = "Mots clefs: (Liste de mots clefs séparés par des virgules.)";

				$lang_string['info_description'] = "Description: (Un résumé ou une description libre de votre site.)";

				$lang_string['info_copyright'] = "Droits: (Informations sur la license du contenu, ou lien vers un document contenant ces informations.)";

				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Oouups!</h2>Informations non sauvegardées. Une erreur est survenue durant la sauvegarde de vos informations.<br /><br />Le serveur a retourné:<br />";

				$lang_string['success'] = "<h2>Meta-Données sauvegardées!</h2>Les informations ont été sauvegardées avec succès."; // New for 0.4.8.1

				$lang_string['form_error'] = "Veuillez renseigner les champs Titre et Auteur.";

				break;

			case 'index':

				// Index

				break;

			case 'static':

				// Index

				break;

			case 'rating':

				$lang_string['error'] = "<h2>Oouups!</h2>Information non sauvegardée. Une erreur est survenue lors de la sauvegarde.<br /><br />Le serveur a retourné:<br />";

				$lang_string['success'] = "<h2>Vote enregisté!</h2>Votre évaluation a été enregistrée avec succès."; // New for 0.4.8.1

				break;

			case 'login':

				$lang_string['upgrade'] = "<h2>Mettre à jour</h2>"; // New 0.3.8

				$lang_string['upgrade_count'] = "%n fichiers de commentaires ont besoins d'être mis à jour:"; // New 0.3.8

				$lang_string['upgrade_url'] = "Mise à jour des commentaires"; // New 0.3.8

				$lang_string['title'] = "Connexion";

				$lang_string['instructions'] = "Veuillez entrez votre nom d'utilisateur et votre mot de passe ci-dessous.";

				$lang_string['username'] = "Nom d'utilisateur:";

				$lang_string['password'] = "Mot de passe:";

				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";

				// Success

				$lang_string['success'] = "<h2>Succès!</h2>Vous êtes maintenant connecté. Joyeux blogging!<p />";

				// Wrong Password

				$lang_string['wrong_password'] = "<h2>Oooups!</h2>Vous n'êtes pas connecté. Veuillez vérifier que vous avez correctement saisi votre nom d'utilsateur et votre mot de passe et essayez à nouveau.<p />";

				$lang_string['form_error'] = "Veuillez renseigner les champs Nom et Mot de passe";

				break;

			case 'logout':

				$lang_string['title'] = "Déconnexion";

				$lang_string['error'] = "<h2>Au revoir!</h2>Vous êtes maintenant déconnecté. (Vous n'étiez pas connecté de toutes manières!)<p />";

				$lang_string['success'] = "<h2>Au revoir!</h2>Vous êtes maintenant déconnecté.<p />";

				break;

			case 'forms':

				$lang_string['title'] = "";

				$lang_string['instructions'] = "";

				// Error Response

				$lang_string['error'] = "<h2>Oouups!</h2>Information non sauvegardée. Une erreur est survenue lors de la sauvegarde de votre entrée.<br /><br />Le serveur a retourné:<br />";

				break;

			case 'set_login':

				$lang_string['title'] = "Changer le nom d'utilisateur et le mot de passe";

				$lang_string['instructions'] = "Utiliser le formulaire ci-dessous pour changer votre nom d'utilisateur et/ou votre mot de passe. Entrez le nom d'utilisateur et le mot de passe que vous voulez utiliser.";

				$lang_string['username'] = "Nom d'utilisateur:";

				$lang_string['password'] = "Mot de passe:";

				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";

				// Success

				$lang_string['success'] = "<h2>Succès!</h2>Votre nom d'utilisateur et/ou votre mot de passe sont activés. Joyeux blogging!<p />";

				// Wrong Password

				$lang_string['wrong_password'] = "<h2>Oouups!</h2>Information non sauvegardée. Une erreur est survenue lors de la sauvegarde de votre nom d'utilisateur et/ou de votre mot de passe.<br /><br />Le serveur a retourné:<br />";

				$lang_string['form_error'] = "Veuillez renseigner les champs nom d'utilisateur et mot de passe.";

				$lang_string['explanation'] = "Dans les versions récentes, la structure de mot de passe a changé. Il n'y a plus de moyen de mettre à jour le mot de passe

					et/ou le nom d'utilisateur depuis le code du blog. Afin de changer votre mot de passe, effacez le fichier /config/password.php and assurez vous que install*.php

					existent sur le serveur local.  Une fois que cela est fait, actualisez cette page (ou déconnectez-vous).  Vous verrez alors le même script

					pour générer votre mot de passe que celui que vous avez eu lors de la création originale de votre blog.";  // New for 0.4.6

				break;

			case 'install00':

				$lang_string['title'] = "Bienvenue";

				$lang_string['instructions'] = "Merci d'avoir choisi Simple PHP Blog!";

				$lang_string['blog_choose_language'] = "Choisissez votre langue:";

				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";

				break;

			case 'install01':

				$lang_string['title'] = "Bienvenue";

				$lang_string['instructions'] = "

				Merci d'avoir choisi Simple PHP Blog!<br /><br />Simple PHP Blog est un système de blog léger. Elle nécéssite au minimum PHP 4.1, ainsi que les droits d'écriture sur le serveur. Toutes les informations sont stockées dans des fichiers texte, aucune base de donnée n'est nécessaire.<br /><br />

				Afin de commencer, Simple PHP Blog doit créer trois dossiers (<b>config</b>, <b>content</b>, et <b>images</b>) afin de stocker vos informations. Après cela, vous créerez votre mot de passe pour pouvoir commencer à blogguer.<br /><br />

				<b>Cliquez ci-dessous pour commencer la configuration:</b>";

				$lang_string['begin'] = "[ Commencer la configuration ]";

				break;

			case 'install02':

				$lang_string['title'] = "Configuration";

				$lang_string['instructions'] = "Tentative de création des dossiers <b>config</b>, <b>content</b>, et <b>images</b>:";

				$lang_string['folder_exists'] = "Le dossier existe déj&agrave;. Aucun changement effectué...";

				$lang_string['folder_failed'] = "Oouups! Impossible de créer le dossier...";

				$lang_string['folder_success'] = "Succès! Le dossier a été créé...";

				// Help

				$lang_string['help'] = "

				<h2>Oouups!</h2>

				Impossible de créer un ou plusieurs dossiers!<br /><br />Les raisons les plus probables sont:<br />

				<ol>

				<li>Les <b>droits d'écriture</b> ne sont pas configuré pour autorisé les accès en <b>Lecture/Ecriture</b>.</li>

				<li>Les <b>UID</b>'s (ID utilisateurs) de tous les fichiers et dossiers doivent correspondrent.</li>

				</ol>

				Suivez les instructions de dépannage ci-dessous et cliquez sur <b>Réessayer</b>:<br />

				<ol>

				<li>Créez manuellement les dossiers suivants: <b>config</b>, <b>content</b>, et <b>images</b>.</li>

				<li>Activez les <b>droits d'écriture</b> sur les dossiers: à l'aide de votre logiciel FTP, le propriétaire, l'utilisateur et tout le monde doivent avoir les accès <b>Lecture</b> et <b>Ecriture</b>. <i>(Vous pouvez avoir besoin de contacter votre hébergeur pour changer cela...)</i></li>

				<li>Assurez-vous que les UID de tous vos fichiers et dossiers soient identiques. <i>(Vous pouvez avoir besoin de contacter votre hébergeur pour changer cela...)</i></li>

				</ol>";

				$lang_string['try_again'] = "[ Réessayer ]";

				// Success

				$lang_string['success'] = "<h2>Succès!</h2>Les dossiers ont été créés avec succès!<p /><b>Cliquez ci-dessous pour continuer:</b>";

				$lang_string['continue'] = "[ Continuer ]";

				break;

			case 'install03':

				$lang_string['supported'] = "<b>Votre serveur web supporte les méthodes de cryptage suivantes:</b>";

				$lang_string['standard'] = "Cryptage DES standard: ";

				$lang_string['extended'] = "Cryptage DES étendu: ";

				$lang_string['MD5'] = "Cryptage MD5: ";

				$lang_string['blowfish'] = "Cryptage Blowfish: ";

				$lang_string['enabled'] = "Activé";

				$lang_string['disabled'] = "Désactivé";

				$lang_string['using_standard'] = "<b>Utilisation du cryptage DES standard...</b>";

				$lang_string['using_extended'] = "<b>Utilisation du cryptage DES étendu...</b>";

				$lang_string['using_MD5'] = "<b style=\"color: green;\">Utilisation du cryptage MD5...</b>";

				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Utilisation du cryptage Blowfish...</b>";

				$lang_string['using_unknown'] = "<b>Utilisation d'un cryptage inconnu...</b>";

				$lang_string['salt_length'] = " <i>(Longueur secret = %string)</i><br />";

				$lang_string['title'] = "Création du nom d'utilisateur et du mot de passe";

				$lang_string['instructions'] = "Utilisez le formulaire ci-dessous pour créer votre nom d'utilisateur et votre mot de passe.";

				$lang_string['username'] = "Nom d'utilisateur:";

				$lang_string['password'] = "Mot de passe:";

				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";

				// Success

				$lang_string['success'] = "<h2>Félicitations!</h2>Vous êtes maintenant connecté. Cliquez ci-dessous pour vous rendre sur la page de configuration où vous pourrez nommer votre blog. Joyeux blogging!<p />";

				$lang_string['btn_setup'] = "[ Configuration ]";

				// Wrong Password

				$lang_string['wrong_password'] = "<h2>Oouups!</h2> Informations non sauvegardées. Une erreur est survenue durant la sauvegarde de votre nom d'utilisateur et/ou de votre mot de passe.<br /><br />Le serveur a retourné:<br />";

				$lang_string['form_error'] = "Veuillez renseigner les champs nom d'utilisateur et mot de passe.";

				break;

			case 'install04':

				$lang_string['title'] = "Création du fichier mot de passe";

				$lang_string['instructions'] = "Voici la partie astucieuse:<br />

				<ol>

				<li>Ouvrez un éditeur de texte. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>

				<li>Créez un nouveau document texte.</li>

				<li>Copiez et collez le code contenu dans le champs texte ci-dessous dans votre document.</li>

				<li>Sauvegardez votre fichier et appelez-le <b>password.php</b> <i>(Assurez vous de le sauvegarder au format <b>Texte</b>.)</i></li>

				<li>Lancez un logiciel FTP.</li>

				<li>Transférez votre nouveau <b>password.php</b> dans le dossier <b>config</b> sur votre site web.</li>

				<li>Supprimez <b>password.php</b> de votre disque dur.</li>

				</ol>

				";

				$lang_string['information'] = "<i>Note: Si vous voulez réinitialiser votre nom d'utilisateur et votre mot de passe (en cas d'oubli par exemple), supprimez <b>password.php</b> dans <b>config</b> sur le serveur web. A votre prochaine visite, le processus d'installation vous demandera de définir un nouveau mot de passe.</i>";

				$lang_string['code'] = "Code du fichier <b>password.php</b>:";

				$lang_string['continue'] = "[ Continuer ]";

				break;

			case 'install05':

			case 'install06':

				$lang_string['title'] = "Connexion";

				$lang_string['instructions'] = "Veuillez entrer votre nom d'utilisateur et votre mot de passe ci-dessous";

				$lang_string['username'] = "Nom d'utilisateur:";

				$lang_string['password'] = "Mot de passe:";

				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";

				// Success

				$lang_string['success'] = "<h2>Félicitations!</h2>Vous êtes maintenant connecté.<p />

				Cliquez ci-dessous pour vous rendre sur la <b>page de configuration</b>, où vous pourrez personnaliser votre nouveau blog.<p />

				<i>PS: maintenant que vous avez complété le processu d'installation, il est recommandé que vous supprimiez les fichiers <b>installXX.php</b> de votre site web (càd. install00.php jusqu'à install06.php)</i><p />";

				// Wrong Password

				$lang_string['wrong_password'] = "<h2>Oouups!</h2>Vous n'êtes pas connecté. Veuillez vérifier que vous avez correctement saisi votre nom d'utilisateur et votre mot de passe et essayez de nouveau.<p />";

				$lang_string['form_error'] = "Veuillez renseigner les champs Nom d'utilisateur et Mot de passe.";

				// Success

				$lang_string['btn_setup'] = "[ Configuration ]";

				$lang_string['btn_try_again'] = "[ Réessayer ]";

				break;

			case 'setup':

				$lang_string['title'] = "Préférences";

				$lang_string['instructions'] = "Vous pouvez modifier le nom de votre blog ainsi que vos informations personnelles ci-dessous.";

				$lang_string['blog_title'] = "Nom du blog:";

				$lang_string['blog_author'] = "Auteur:";

				$lang_string['blog_email'] = "Email: (des adresses séparées doivent être séparées par des virgules - vide désactive l'option Me contacter)"; // Updated 0.4.7

				$lang_string['blog_avatar'] = "Avatar URL: (Laissez vide pour aucun)."; // <-- New 0.4.7

				$lang_string['blog_footer'] = "Pied de Page:";

				$lang_string['blog_choose_language'] = "Choisissez votre langue:";

				$lang_string['blog_enable_comments'] = "Activer les commentaires";

				$lang_string['blog_comments_popup'] = "Ouvrir les commentaires dans des popups";

				$lang_string['blog_enable_voting'] = "Activer les votes utilisateurs";

				$lang_string['blog_enable_cache'] = "Activer le cache des entrées (peut améliorer la vitesse sur certains serveurs)"; // New for 0.4.6

				$lang_string['blog_enable_calendar'] = "Activer Calendrier"; // New for 0.4.6

				$lang_string['blog_enable_archives'] = "Activer le bloc Archives"; // New for 0.4.8

				$lang_string['blog_enable_counter'] = "Activer le compteur dans la barre"; // New for 0.4.8

				$lang_string['blog_counter_hours'] = "Nombre d'heures à attendre avant que les hits soient à nouveau comptés (basé sur chaque adresse IP):"; // New for 0.4.8

				$lang_string['blog_enable_login'] = "Activer le lien Connexion (Veillez à mettre \"login.php\" en favori avant...)"; // New for 0.4.8

				$lang_string['blog_enable_title'] = "Activer le titre du blog texte (Décocher si le titre est dans l'entête graphique)"; // New for 0.4.6

				$lang_string['blog_enable_permalink'] = "Activer les Permaliens sur les entrées du blog"; // New for 0.4.6

				$lang_string['blog_enable_capcha'] = "Activer Anti-Spam"; // New for 0.4.8

				$lang_string['blog_footer_counter'] = "Activer le compteur dans le pied de page"; // New for 0.4.8

				$lang_string['blog_enable_capcha_image'] = "Images Anti-Spam (nécessite la librairie GD) / Champs texte Anti-Spam"; // New for 0.4.8

				$lang_string['blog_enable_stats'] = "Activer l'option Statistiques dans le menu"; // New for 0.4.7

				$lang_string['blog_enable_lastcomments'] = "Activer la liste des derniers commentaires"; // New for 0.4.7

				$lang_string['blog_enable_lastentries'] = "Activer la liste des denières entrées"; // New for 0.4.7

				$lang_string['blog_email_notification'] = "Envoyez une notification par email lorsque de nouveaux commentaires sont postés";

				$lang_string['blog_send_pings'] = "Activer l'envoi de &quot;pings&quot;";

				$lang_string['blog_ping_urls'] = "Entrez l'URL complète (ex. http://rpc.weblogs.com/RPC2) du service à &quot;pinguer&quot;.<br />(Vous pouvez entrer plus d'une adresse, séparés par des virgules.)";

				$lang_string['blog_trackback_about'] = "Les trackbacks sont une méthode de notification entre blogs. Laissez un

					autre blog savoir que vous avec un lien vers lui en lui envoyant un ping trackback. Découvrez qui s'est lié à

					votre blog en recevant des pings trackback.<br />

				   Vous pouvez soit entrer les URIs à pinguer manuellement, ou essayer de le faire automatiquement avec

				   l'auto-découverte.";

				$lang_string['blog_trackback_enabled'] = "Activer les trackbacks dans mon blog";

				$lang_string['blog_trackback_auto_discovery'] = "Activer l'auto-découverte de trackbacks lorsque qu'une soumission contient des URLs";

				$lang_string['blog_max_entries'] = "Nombre d'entrées maximum à afficher:";

				$lang_string['blog_comment_tags'] = "Balises autorisées dans les commentaires:";

				$lang_string['blog_gzip_about'] = "

					Depuis PHP 4.0.4, il est possible de lire et écrire des fichiers compressés gzip (.gz), 

					permettant d'économiser de l'espace disque. Il peut également, de manière transparente, compressée les pages qui sont envoyées aux navigateurs

					supporte la compression gzip, permettant ainsi une économie de bande passante.<br />

					<br />

					Le support de Zlib dans PHP n'est pas activé par défaut. Si les cases à cochées sont désactivées, c'est que votre

					installation de PHP n'inclus pas l'extension Zlib.";

				$lang_string['blog_enable_gzip_txt'] = "Activer la compression GZIP pour les fichiers de base de données";

				$lang_string['blog_enable_gzip_output'] = "Actvier la compression GZIP pour la sortie HTTP";

				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Oouups!</h2>Paramètres non sauvegardés. Une erreur est survenue lors de la sauvegarde.<br /><br />Le serveur a retourné:<br />";

				$lang_string['success'] = "<h2>Preferences sauvegardées!</h2>Les information ont été sauvegardées avec succès."; // New for 0.4.8.1

				$lang_string['form_error'] = "Veuillez renseigner les champs Titre et Auteur.";

				$lang_string['label_entry_order'] = "Ordre des entrées:";

				$lang_string['select_new_to_old'] = "Lister les plus récentes en premier";

				$lang_string['select_old_to_new'] = "Lister les plus anciennes en premier";

				$lang_string['label_comment_order'] = "Ordre des commentaires:";

				$lang_string['cal_sunday'] = "Lundi";

				$lang_string['cal_monday'] = "Monday";

				$lang_string['label_calendar_start'] = "Premier jour de la semaine du calendrier";

				$lang_string['title_sidebar'] = "Barre latérale"; // New in 0.4.7

				$lang_string['title_comments'] = "Commentaires"; // New in 0.4.7

				$lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7

				$lang_string['title_compression'] = "Compression"; // New in 0.4.7

				$lang_string['title_entries'] = "Entrées"; // New in 0.4.7

				$lang_string['title_general'] = "Général"; // New in 0.4.7

				$lang_string['title_language'] = "Langue"; // New in 0.4.7

				$lang_string['blog_comment_days_expiry'] = "Les commentaires sont permis pendant combien de jours? (0 = infini)"; // New in 0.4.8

				break;

			case 'moderation':

				$lang_string['title'] = "Préférences de modération";

				$lang_string['instructions'] = "Vous pouvez modifier les listes d'auto-modération ici.";

				$lang_string['submit_btn'] = "&nbsp;Enregistrer les paramètres de modération&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Oouups!</h2>Informations non sauvegardées. Une erreur est survenue lors de la sauvegarde.<br /><br />Le serveur a retourné:<br />";

				$lang_string['success'] = "<h2>Preferences sauvegardées!</h2>Les informations ont été sauvegardées avec succès."; // New for 0.4.8.1

				$lang_string['banned_address_list_title'] = "<h2>Adresses IP interdites</h2>";

				$lang_string['banned_address_list'] = "Ci-dessous, la liste des adresses IP qui ont été interdites pour l'ajout de commentaires. Chaque IP est une sur une ligne séparée et doit être au format numérique (pas de nom DNS). Lorsque vous êtes connecté, les IPs peuvent être interdites directement depuis la vue commentaires.";

				$lang_string['banned_word_list_title'] = "<h2>Mots interdits</h2>";

				$lang_string['banned_word_list'] = "Ci-dessous, la liste des mots qui ne sont pas autorisés dans les URLs ou le texte. Chaque mot ou groupe de mot sont sur une ligne séparée. Les commentaires seront testés pour chacune des lignes afin de vérifier s'ils sont interdits.";

				break;

			case 'trackbacks':

				// Trackbacks

				$lang_string['title'] = "Trackbacks";

				$lang_string['header'] = "URL de trackback pour cette entrée:";

				$lang_string['delete_btn'] = "effacer";

				// Error Response

				$lang_string['error_add'] = "Erreur lors de la sauvegarde du trackback";

				$lang_string['error_delete'] = "<h2>Oouups!</h2>Trackback non supprimé. Une erreur est survenue lors de la suppression.<br /><br />Le serveur a retourné:<br />";

				$lang_string['success_delete'] = "<h2>Trackback supprimé!</h2>Le lien trackback a été supprimé."; // New for 0.4.8.1

				break;

			case 'options':

				$lang_string['title'] = "Options";

				$lang_string['instructions'] = "Utilisez ce formulaire pour personnaliser les formats de date et d'heure utilisés sur votre blog. Vous pouvez choisir une horloge à 12 ou 24 heures. Un format de date long ou court. Et les champs d'<b>aperçu</b> se mettent automatiquement à jour afin de vous montrer comment votre format apparaitra.";

				// Long Date

				$lang_string['ldate_title'] = "Format date longue:";

				$lang_string['weekday'] = "Jour de la semaine";

				$lang_string['month'] = "Mois";

				$lang_string['day'] = "Jour";

				$lang_string['year'] = "Année";

				$lang_string['none'] = "Aucun";

				// Short Date

				$lang_string['sdate_title'] = "Format date courte:";

				$lang_string['s_month'] = "Mois";

				$lang_string['s_mon'] = "MMM";

				$lang_string['s_day'] = "Jour";

				$lang_string['s_year'] = "Année";

				$lang_string['zero_day'] = "Zéros devant les jours";

				$lang_string['show_century'] = "Afficher les siècles";

				// Time

				$lang_string['time_title'] = "Format de l'heure:";

				$lang_string['12hour'] = "Horloge à 12 heures";

				$lang_string['24hour'] = "Horloge à 24 heures";

				$lang_string['before_noon'] = "Avant Midi";

				$lang_string['after_noon'] = "Après Midi";

				// Date

				$lang_string['date_title'] = "Format d'affichage de la date:";

				$lang_string['long_date'] = "Date longue";

				$lang_string['short_date'] = "Date courte";

				$lang_string['time'] = "Heure";

				// Menu

				$lang_string['menu_title'] = "Format d'affichage de la date dans menu:";

				$lang_string['long_date'] = "Date longue";

				$lang_string['short_date'] = "Date courte";

				// Used in multiple places

				$lang_string['zero_day'] = "Zéros devant les jours";

				$lang_string['zero_month'] = "Zéros devant les mois";

				$lang_string['zero_hour'] = "Zéros devant les heures";

				$lang_string['separator'] = "Séparateur:";

				$lang_string['preview'] = "Aperçu:";

				$lang_string['server_offset'] = "Décalage serveur:";

				// Buttons

				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Oouups!</h2>Paramètres non sauvegardés. Une erreur est survenue lors de la sauvegarde.<br /><br />Le serveur a retourné:<br />";

				$lang_string['success'] = "<h2>Options sauvegardées!</h2>Les informations ont été sauvegardées avec succès."; // New for 0.4.8.1

				break;

			case 'themes':

				$lang_string['title'] = "Thèmes";

				$lang_string['instructions'] = "Utilisant le menu déroulant pour choisir un thème différent.";

				// Themes

				$lang_string['choose_theme'] = "Thèmes:";

				// Buttons

				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Oouups!</h2>Paramètres non sauvegardés. Une erreur est survenue lors de la sauvegarde.<br /><br />Le serveur a retourné:<br />";

				$lang_string['success'] = "<h2>Thème sélectionné!</h2>Les informations ont été sauvegardées avec succès."; // New for 0.4.8.1

				break;

			case 'upload_img':

				$lang_string['title'] = "Envoi d'image";

				$lang_string['instructions'] = "Cliquez sur le bouton ci-dessous pour sélectionner un fichier à envoyer.";

				$lang_string['select_file'] = "Sélectionner un fichier:";

				$lang_string['upload_btn'] = "Envoyer";

				// Error Response

				$lang_string['error'] = "<h2>Oouups!</h2>Impossible d'envoyer une image.<br /><br />Le serveur a retourné:<br />";

				$lang_string['success'] = "<h2>Image transférée!</h2>L'image a été sauvegardée avec succès."; // New for 0.4.8.1

				break;

			case 'search':

				$lang_string['title'] = "Résultats de la recherche";

				$lang_string['instructions'] = "Résultats de la recherche pour <b>%string</b>:";

				$lang_string['not_found'] = "Aucun résultat";

				break;

			case 'contact':

				$lang_string['contact_capcha'] = "Anti-Spam: Entrez "; // 0.4.2

				$lang_string['title'] = "Me contacter";

				$lang_string['instructions'] = "Remplissez le formulaire:";

				$lang_string['form_error'] = "Veuillez renseigner les champs Sujet et Commentaire.";

				$lang_string['name'] = "Nom:";

				$lang_string['email'] = "Email:";

				$lang_string['subject'] = "Sujet:";

				$lang_string['comment'] = "Commentaire:";

				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";

				$lang_string['success'] = "<h2>Succès!</h2>Votre message a été envoyé.<p />";

				$lang_string['failure'] = "<h2>Erreur!</h2> Votre message n'a pas été envoyé. Très probablement car vous n'avez pas saisi correctement le code anti-spam<p />";

				$lang_string['contactsent'] = "Contact envoyé depuis: ";  // New for 0.4.6

				$lang_string['IPAddress'] = "Adresse IP:";  // New for 0.4.6

				$lang_string['useragent'] = "Navigateur:";  // New for 0.4.6

				$lang_string['wrote'] = "<i>Le %s, %s a écrit:</i><br />\n<br />\n%s"; // New for 0.4.6.2

				break;

			case 'stats':

				$lang_string['title'] = "Statistiques";

				$lang_string['general'] = "Général";

				$lang_string['entry_info'] = "<b>%s</b> entrées totalisant <b>%s</b> mots utilisant <b>%s</b> octets";

				$lang_string['comment_info'] = "<b>%s</b> commentaires totalisant <b>%s</b> mots utilisant <b>%s</b> octets";

				$lang_string['trackback_info'] = "<b>%s</b> trackbacks utilisant <b>%s</b> octets";

				$lang_string['static_info'] = "<b>%s</b> pages statiques totalisant <b>%s</b> mots utilisant <b>%s</b> octets";

				$lang_string['most_viewed_entries'] = "Les 10 entrées les plus vues";

				$lang_string['most_commented_entries'] = "Les 10 entrées les plus commentées";

				$lang_string['most_trackbacked_entries'] = "Les 10 entrées les plus trackbackées";

				$lang_string['vote_info'] = "<b>%s</b> votes utilisant <b>%s</b> octets"; // 0.4.1

				$lang_string["most_voted_entries"] = "Les 10 entrées les plus votées"; // 0.4.1

				$lang_string["most_rated_entries"] = "Les 10 entrées les plus évaluées"; // 0.4.1

				break;

			case 'errorpage-nocookies':  // New for 0.4.6

				$lang_string["title"] = 'Erreur 403.8 - Accès à la page/fonction interdit';

				$lang_string["errorline1"] = "La page à laquelle vous essayer d'accéder nécessite l'utilisation de cookies.";

				$lang_string["errorline2"] = "Veuillez réactiver le support des cookies dans votre navigateur ou votre logiciel de protection et tentez votre requête à nouveau.";

				$lang_string["clientid"] = 'ID client: ';

				break;

			case 'errorpage':  // New for 0.4.6

				$lang_string["403.8"] = 'Erreur HTTP 403.8 - Accès à la page/fonction interdit';

				$lang_string["404"] = "Erreur HTTP 404 - La page/fonction n'existe pas";

				$lang_string["error_404"] = "La page ou la fonction demandée n'existe pas.";

				$lang_string["error_javascript"] = "La page ou la fonction que vous avez demandé nécessite Javascript pour fonctionner correctement.";

				$lang_string["error_emailnotsent"] = "Le message que vous avez essayer d'envoyer a échoué.";

				$lang_string["error_emailnotsentcapcha"] = "Le message n'a pas été envoyé car le code anti-spam était incorrect.";

				$lang_string["clientid"] = 'Id client: ';

				break;

			case 'emoticons':  // New for 0.4.7

				$lang_string['title'] = "Administration des émoticônes";

				$lang_string['instructions'] = "

					Cochez les émoticones que vous souhaitez utiliser. Ecrivez dans les champs les Balises que vous voulez

					remplacez par l'image. Plusieurs balises peuvent être utilisées, séparez-les simplement

					par des espaces.<br /><br />

					Par exemple:<br />

					:) :-) :SMILE: :HAPPY:<br /><br />

					<i>(Il est recommandé de choisir des balises de plus de 2 caratères,

					afin d'éviter les remplacements non souhaités.)</i>";

				$lang_string["upload_instructions"] = 'Envoi de nouvelles émoticônes:';

				$lang_string["upload_success"] = 'Image envoyée avec succès!';

				$lang_string["upload_error"] = 'Erreur! L\'image n\'a pas été transférée.';

				$lang_string["upload_invalid"] = "Erreur! Fichier image invalide. L'image doit être au format png, jpg, ou gif.";

				$lang_string["save_success"] = 'Paramètres d\'émoticones sauvegardés avec succès!';

				$lang_string["save_error"] = 'Erreur! Les paramètres d\'émoticones non pas été sauvegardés.';

				$lang_string["save_button"] = 'Sauvegarder les émoticônes';

				break;

			case 'archives': // New for 0.4.8

				$lang_string['title'] = "Archives";

				$lang_string['showall'] = "Voir toutes";

				break;

			default:

				break;

		}

	}

?>
