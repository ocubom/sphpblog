<?php
	// Translation File
	// (c) 2004 Thibaud Chon, thibaud <dot> chone <at> insa-lyon <dot> fr
	// (c) 2005 Yann Loosli
	// Simple PHP Version: 0.4.0
	// Language Version:   0.4.0
	
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Francais
		$lang_string['locale'] = 'fr_FR'; 
		$lang_string['language'] = 'french';
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO8859-1';
		$lang_string['php_charset'] = 'ISO8859-1';
		
		setlocale( LC_TIME, $lang_string['locale'] );
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Liens";
		$lang_string['menu_home'] = "Accueil";
		$lang_string['menu_contact'] = "Me Contacter"; 
		$lang_string['menu_stats'] = "Statistiques"; 
		$lang_string['menu_archive'] = "Archives"; 
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Ajout Contenu";
		$lang_string['menu_add_static'] = "Ajout Page";
		$lang_string['menu_upload'] = "Upload Image";
		$lang_string['menu_setup'] = "Setup";
		$lang_string['menu_categories'] = "Categories";
		$lang_string['menu_info'] = "Information"; 
		$lang_string['menu_options'] = "Options";
		$lang_string['menu_themes'] = "Themes";
		$lang_string['menu_colors'] = "Couleurs";
		$lang_string['menu_change_login'] = "Changer de Login";
		$lang_string['menu_logout'] = "Logout";
		$lang_string['menu_login'] = "Login";
		$lang_string['menu_most_recent'] = "Derniers Commentaires";
		$lang_string['menu_most_recent_entries'] = "Sujets les plus récents";
		$lang_string['menu_most_recent_trackback'] = "Trackbacks les + récents";
		// DATOH_ADD
		$lang_string['menu_add_block'] = "Blocs";
		// DATOH_END
		
		// Other
		$lang_string['home'] = "Retour Accueil";
		$lang_string['nav_next'] = 'Suivant'; 
		$lang_string['nav_back'] = 'Précédent'; 
		$lang_string['search_title'] = 'Rechercher :'; 
		$lang_string['search_go'] = 'Chercher'; 
		$lang_string['page_generated_in'] = 'Page générée en %s secondes'; 
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' );
		$lang_string['sb_default_title'] = 'Sans Titre';
		$lang_string['sb_default_author'] = 'x';
		$lang_string['sb_default_footer'] = 'x';
		
		$lang_string['sb_edit'] = 'Editer';
		$lang_string['sb_delete'] = 'Supprimer';
		$lang_string['sb_permalink'] = 'Lien permanent';
		$lang_string['sb_trackback'] = 'Trackbacks'; 
		
		$lang_string['sb_add_comment_btn'] = 'Ajouter un commentaire';
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
		
		$lang_string['sb_rate_entry_btn'] = 'Cliquer pour noter le sujet';
		
		// Entry Text Editor
		// DATOH_REPLACE
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
		// DATOH_END
				$lang_string['label_subject'] = "Sujet :";
				$lang_string['label_insert'] = "Insertion Spéciale :";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
				$lang_string['view_images'] = "Voir les Images Uploadées";
				$lang_string['label_entry'] = "Contenu :";
				$lang_string['btn_preview'] = "&nbsp;Apercu&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Poster&nbsp;";
				$lang_string['file_name'] = "Static File Name: (Pas d'espaces ou d'extensions de fichier)"; 
				// Javascript Strings
				$lang_string['insert_styles'] = "Entrez le texte a formater";
				$lang_string['insert_image'] = "Entrez l\'URL de l\'image";
				$lang_string['insert_url1'] = "Entrez le texte associé au lien (optionnel)";
				$lang_string['insert_url2'] = "Entrez l URL complète du lien";
				$lang_string['insert_url3'] = "Ouvrir le lien dans une nouvelle fenêtre (Optionnel):"; 
				$lang_string['form_error'] = "Complétez les champs Sujet et Contenu";
				// More Javascript Strings 
				$lang_string['insert_image_optional'] = 'Optionnel:';
				$lang_string['insert_image_width'] = 'Largeur (Optionnel):';
				$lang_string['insert_image_height'] = 'Hauteur (Optionnel):';
				$lang_string['insert_image_popup'] = 'Voir en taille réel dans un pop-up en cliquant (Optionnel):';
				$lang_string['insert_image_float'] = 'Flotter (Optionnel):';
				$lang_string['insert_image_align'] = 'Horizontal align (Optional):';	//0.4.4
				$lang_string['insert_image_valign'] = 'Vertical align (Optional):';	//0.4.4
				$lang_string['insert_image_alt'] = 'Alternative text (Optional):';	//0.4.4
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Ajout de Contenu";
				$lang_string['instructions'] = "Etes vous prêt a bloguer ? Remplissez le formulaire ci dessous, puis cliquez sur 'Apercu'pour vérifier la mise en page, ou sur 'Poster' pour sauvegarder votre post.";
				$lang_string['title_ad'] = "Confirmer les pings de Trackback";
				$lang_string['instructions_ad'] = "Voici les liens découverts automatiquement que vous êtes sur le point de 'pinguer'. Si vous ne souhaitez pas 'pinguer' certains liens, décocher les ci-dessous. Ensuite, cliquer sur Ok pour 'pinguer' les liens sélectionnés ou appuyer sur annuler pour ne pas 'pinguer' du tout."; 
				$lang_string['label_tb_ping'] = "Pings de Trackback à envoyer (virgule séparée)"; 
				$lang_string['label_tb_autodiscovery'] = "Découverte automatique";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Apercu / Edition de contenu";
				$lang_string['instructions_preview'] = "Voici à quoi ressemble votre post. Si vous utilisez différents styles de texte ou si vous incluez des images, veillez à bien fermer toutes vos balises.";
				$lang_string['title_update'] = "Mettre à jour";
				$lang_string['instructions_update'] = "Vous pouvez mettre à jour les informations en utilisant le formulaire ci dessous. Cliquez sur 'Apercu' ou sur 'Poster' lorque vous avez fini.";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;"; 
				$lang_string['cancel_btn'] = "&nbsp;Annuler&nbsp;"; 
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Contenu non sauvegardé. Une erreur est apparue lors de la sauvegarde.<br /><br />le serveur a rapporté :<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Ajouter une entrée statique";
				$lang_string['instructions'] = "Remplissez le formulaire suivant pour créer une page statique. Contrairement à une entrée classique de blog, les pages statiques apparaissent en lien dans le menu de droite. Elles servent pour des pages toujours accessibles comme par exemple un CV, une page de contact, un agenda, etc. Cliquez sur 'Apercu' pour voir à quoi cette page ressemblera, ou sur 'Poster' pour la sauvegarder.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Apercu / Edition de contenu";
				$lang_string['instructions_preview'] = "Voici a quoi ressemble votre post. Si vous utilisez différents styles de texte ou si vous incluez des images, veillez à bien fermer toutes vos balises.";
				$lang_string['title_update'] = "Mettre à jour";
				$lang_string['instructions_update'] = "Vous pouvez mettre a jour les informations en utilisant le formulaire ci dessous. Cliquez sur 'Apercu' ou sur 'Poster' lorque vous avez fini.";
				$lang_string['form_error'] = "Compléter les champs 'sujet','contenu' et 'Nom du fichier' SVP.";	
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Contenu non sauvegardé. Une erreur est apparue lors de la sauvegarde.<br /><br />le serveur a rapporté :<br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Ajouter / Gérer les liens";
				$lang_string['instructions'] = "Ajouter des blocs personnalisés";
				$lang_string['up'] = "haut";
				$lang_string['down'] = "bas";
				$lang_string['edit'] = "éditer";
				$lang_string['delete'] = "supprimer";
				$lang_string['block_name'] = "Nom du bloc :";
				$lang_string['block_content'] = "Contenu du bloc :";
				
				$lang_string[ 'enable' ] = "enable";   // <-- New 0.4.4
				$lang_string[ 'disable' ] = "disable"; // <-- New 0.4.4
				
				$lang_string[ 'block_scope_pri' ] = "Private"; // <-- New 0.4.4
				$lang_string[ 'block_scope_pub' ] = "Public";  // <-- New 0.4.4	
				
				$lang_string[ 'block_status_ena' ] = "Enabled";	 // <-- New 0.4.4
				$lang_string[ 'block_status_dis' ] = "Disabled"; // <-- New 0.4.4	 
				
				$lang_string[ 'block_position' ] = "Position ";	     // <-- New 0.4.4
				$lang_string[ 'block_position_top' ] = "Top";	    // <-- New 0.4.4
				$lang_string[ 'block_position_left' ] = "Left";	    // <-- New 0.4.4
				$lang_string[ 'block_position_center' ] = "Center"; // <-- New 0.4.4
				$lang_string[ 'block_position_right' ] = "Right";   // <-- New 0.4.4
				$lang_string[ 'block_position_botton' ] = "Botton"; // <-- New 0.4.4				
				
				$lang_string['instructions_edit'] = "Vous êtes en train d'éditer le bloc :";
				$lang_string['instructions_modify'] = "Cliquer ci-dessous pour modifier le bloc :";
				$lang_string['submit_btn_edit'] = "Editer le bloc";
				$lang_string['submit_btn_add'] = "Ajouter un bloc";
				$lang_string['form_error'] = "Compléter le champ 'nom' SVP.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Pages statiques :";
				// Add / Manage Links
				$lang_string['title'] = "Ajouter / Gérer Les Liens";
				$lang_string['instructions'] = "Ajouter des Liens vers d'autres sites. Remplissez le formulaire ci dessous and cliquez sur 'Ajouter le Lien' pour l'ajouter. Utilisez les boutons 'haut' et 'bas' pour changer l'ordre des liens. Cliquez sur le bouton 'Editer' pour modifier un lien. Cliquez sur le bouton 'Effacer' pour enlever un lien.";
				$lang_string['up'] = "haut";
				$lang_string['down'] = "bas";
				$lang_string['edit'] = "éditer";
				$lang_string['delete'] = "effacer";
				$lang_string['link_name'] = "Nom du Lien :";
				$lang_string['link_url'] = "Adresse du Lien : (Optionnel. Laissez vide pour créer une sous categorie.)";
				$lang_string['instructions_edit'] = "Vous éditez actuellement le lien :";
				$lang_string['instructions_modify'] = "Cliquez ci dessous pour modifier le lien :";
				$lang_string['submit_btn_edit'] = "Editer";
				$lang_string['submit_btn_add'] = "Ajouter";
				$lang_string['form_error'] = "Complètez le champ Nom";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "Ajouter / Gérer les catégories";
				$lang_string['instructions'] = "Utiliser le formulaire ci-dessous pour ajouter et éditer les catégories. Chaque catégorie doit être formatée ainsi 'Nom de la catégorie (Nombre Id)'. Hiérarchiser les catégories avec des espaces.<br /><br /><b>Exemple:</b><br />Général (1)<br />News (3)<br />&nbsp;&nbsp;Annonces (6)<br />&nbsp;&nbsp;Evénements (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Divers (7)<br />Technologie (2)<br />";
				$lang_string['error'] = "Erreur";
				$lang_string['current_categories'] = "Categories actuelles";
				$lang_string['no_categories_found'] = "Aucune categorie trouvée";
				$lang_string['category_list'] = "Liste des catégories :";
				$lang_string['validate'] = "Valider";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Changer les Couleurs";
				$lang_string['instructions'] = "Vous pouvez changer les couleurs de texte et de fond de votre blog. Utilisez la palette pour choisir votre couleur, puis recopier la valeur HEX de cette couleur dans les champs correspondants.";
				$lang_string['bg_color'] = "Fond du Site";
				$lang_string['main_bg_color'] = "Fond de Page";
				$lang_string['border_color'] = "Bordure de Page";
				$lang_string['inner_border_color'] = "Inner Bordure";
				$lang_string['header_bg_color'] = "Fond de l'entête";
				$lang_string['header_txt_color'] = "Texte de l entête";
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
				$lang_string['entry_bg'] = "Fond des messages";
				$lang_string['entry_title_bg'] = "Fond des titres des messages";
				$lang_string['entry_border'] = "Bordures des messages";
				$lang_string['entry_title_text'] = "Police de titre des messages";
				$lang_string['entry_text'] = "Police des messages";
				$lang_string['menu_bg'] = "Fond du menu";
				$lang_string['menu_title_bg'] = "Fond des titres du menu";
				$lang_string['menu_border'] = "Bordures du menu";
				$lang_string['menu_title_text'] = "Police du titre du menu";
				$lang_string['menu_text'] = "police du menu";
				$lang_string['menu_link_reg_color'] = "Lien du menu par défaut";
				$lang_string['menu_link_hi_color'] = "Lien du menu survolé";
				$lang_string['menu_link_down_color'] = "Lien du menu activé";
				// Submit
				$lang_string['color_preset'] = "Modèle de couleur :"; 
				$lang_string['scheme_name'] = "Entrer un nom de modèle personnalisé :"; 
				$lang_string['scheme_file'] = "Entrer le nom de fichier du modèle : (Pas d'espaces ou d'extension de fichier)"; 
				$lang_string['save_btn'] = "&nbsp;Sauver&nbsp;"; 
				$lang_string['form_error'] = "Entrer un nom de modèle personnalisé SVP."; 
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Paramètres de configuration non sauvegardés. Problème rencontré durant l opération de sauvegarde.<br /><br />le Serveur a reporté :<br />";
				break;
			case 'comments':
				// Comments
				$lang_string[ 'comment_capcha' ] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Commentaires";
				$lang_string['header'] = "Ajouter Commentaire";
				$lang_string['instructions'] = "Remplissez ce formulaire pour ajouter un commentaire.";
				$lang_string['comment_name'] = "Votre Nom :";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Remember me:"; // 0.3.8
				$lang_string['comment_text'] = "Votre Commentaire :";
				$lang_string['post_btn'] = "&nbsp;Poster&nbsp;";
				$lang_string['delete_btn'] = "Effacer";
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Commentaire non sauvegardé. Problème recontré durant l'éxecution du script.<br /><br />Le Serveur a reporté :<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Commentaire non détruit. Problème rencontré durant l'opération de suppression de votre commentaire.<br /><br />le Serveur a rapporté :<br />";
				$lang_string['form_error'] = "Veuillez remplir les champs NOM et COMMENTAIRE"; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "Effacer";
				$lang_string['instructions'] = "Voici un apercu de ce que vous souhaitez effacer. Soyez certain de ce que vous faites, il n'y a pas de marche arrière possible...";
				$lang_string['ok_btn'] = "&nbsp;Je suis sûr&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;J'annule&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Impossible de Supprimer<br /><br />Le Serveur a reporté :<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Effacer une page statique";
				$lang_string['instructions'] = "Voici un apercu de la page que vous souhaitez effacer. Soyez certain de ce que vous faites, il n'a pas de marche arrière possible...";
				$lang_string['ok_btn'] = "&nbsp;Je suis sur&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;J'annule&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Impossible de supprimer la page.<br /><br />Le Serveur a reporté :<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Liste des Images";
				$lang_string['instructions'] = "Cliquez sur ces liens pour voir les images.<br><br>Pour ajouter une image :<br>1) Copier l URL de votre image.<br>2) Retournez à la page d'ajout ou d'édition.<br>3) Cliquez sur le bouton 'img' et collez l'URL de l'image dans la fenetre.";
				break;
			case 'info': 
				$lang_string['title'] = "Information pour les métadonnées";
				$lang_string['instructions'] = "Les informations ci-dessous sont utilisés en tant que &quot;metadonnées&quot;, qui aident les moteurs de recherche à trouver et identifier correctement le site. Ces informations peuvent aussi être utilisées dans les 'RSS feeds'.";
				$lang_string['info_keywords'] = "Mot-clés : (Liste des mot-clés séparé par des virgules.)";
				$lang_string['info_description'] = "Description : (Un extrait ou une courte description libre du site.)";
				$lang_string['info_copyright'] = "Mentions légales : (Déclaration de copyright , ou lien vers le document contenant l'information.)";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informations non sauvegardées. L'application a rencontré un problème durant la sauvegarde de l'information.<br /><br />Le serveur a rapporté :<br />";
				$lang_string['form_error'] = "Compléter les champs  'titre' et 'auteur'.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': 
				$lang_string['error'] = "<h2>Whoops!</h2>Informations non sauvegardées. L'application a rencontré un problème durant la sauvegarde de l'information.<br /><br />Le serveur a rapporté :<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Actualiser</h2>"; 
				$lang_string['upgrade_count'] = "%n fichiers commentaires doivent être actualisés :"; 
				$lang_string['upgrade_url'] = "Actualiser les commentaires"; 
				$lang_string['title'] = "Login";
				$lang_string['instructions'] = "Veuillez entrez votre nom d'utilisateur et votre mot de passe ci dessous.";
				$lang_string['username'] = "Nom d'utilisateur :";
				$lang_string['password'] = "Mot de passe :";
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Ok !</h2>Vous etes maintenant logué ! Bloggez Bien !<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Erreur de Log. Vérifiez que vous avez entré correctement votre nom d'utilsateur et votre mot de passe, et réessayez.<p />";
				$lang_string['form_error'] = "Complétez les champs NOM et MOT DE PASSE"; // <-- Need Translation
				break;
			case 'logout':
				$lang_string['title'] = "Se Déloguer";
				$lang_string['instructions'] = "<h2>Whoops!</h2>Impossible de se déloguer. Pas Possible de détruire le cookie. Pourquoi etes vous encore loggé ?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Sauvegarde impossible.<br /><br />Le Serveur a reporté :<br />";
				break;
			case 'set_login': // 
				$lang_string['title'] = "Changer de nom d'utilisateur&amp; de mot de passe";
				$lang_string['instructions'] = "Utiliser le formulaire ci-dessous pour changer votre nom d'utilisateur et/ou votre mot de passe. Entrer le nom d'utilisateur et le mot de passe que vous souhaitez utiliser.";
				$lang_string['username'] = "Nom d'utilisateur :";
				$lang_string['password'] = "Mot de passe :";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Succès!</h2>Votre nom d'utilisateur et/ou mot de passe sont activés. Joyeux blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Informations non sauvegardées. L'application a rencontré un problème durant la sauvegarde de l'information.<br /><br />Le serveur a rapporté :<br />";
				$lang_string['form_error'] = "Compléter les champs 'nom d'utilisateur' et 'mot de passe'.";
				break;
			case 'install00': 
				$lang_string['title'] = "Bienvenue";
				$lang_string['instructions'] = "
				Merci d'avoir choisi Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Sélectionner votre langage :";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				break;
			case 'install01': 
				$lang_string['title'] = "Bienvenue";
				$lang_string['instructions'] = "
				Thank you for choosing Simple PHP Blog!<br /><br />Simple PHP Blog est un système de blog léger. il nécessite PHP 4.1 ou mieux, et les permissions en écriture sur le serveur. Toutes les informations sont stockés dans des fichiers, donc, il n'y a pas besoin de base de données.<br /><br />
				Pour pouvoir commencer, Simple PHP Blog a besoin de créer trois répertoires ('config', 'content', and 'images') dans lesquels il stockera l'information.<br /><br />
				<b>Cliquer ci-dessous pour commencer l'installation :</b>";
				$lang_string['begin'] = "[ Début de l'installation ]";
				break;
			case 'install02':  
				$lang_string['title'] = "Installation";
				$lang_string['instructions'] = "Tentative de création des répertoires 'config', 'content', et 'images' :";
				$lang_string['folder_exists'] = "Ok ! Les répertoires existes déjà. Pas de changements...";
				$lang_string['folder_failed'] = "Whoops! Ne peut pas créer les répertoires...";
				$lang_string['folder_success'] = "Succès! Répertoires créés...";
				// Help
				$lang_string['help'] = "
				<h2>Whoops!</h2>
				Ne peut pas créer un ou plusieurs répertoires! Cela est certainement due à  :<br>
				<i>1) <b>Les permissions en écriture</b> ne sont pas définies pour autoriser l'accès en <b>écriture/Write</b>.</i><br>
				<i>2) L'<b>UID</b>'s (Id de l'Utilisateur) de l'ensemble des fichiers et répertoires doivent être les mêmes.</i><p />
				
				Suivre les instructions suivantes en cas de problème et réessayer SVP :<p />				
				1) Créer manuellement les répertoires suivants : <b>config</b>, <b>content</b>, et <b>images</b>.<p />
				2) Activer <b>les premissions en écriture</b> sur les répertoires. Dans votre logiciel FTP, Owner, User, et World devrait avoir les droit en <b>lecture</b> et en  <b>écriture</b>. <i>(Vous devrez peut-être contacter votre hébergeur pour faire ces modifications...)</i><p />
				3) S'assurer que les UID de tous les fichiers et tous les répertoires soient les mêmes. <i>(Vous devrez peut-être contacter votre hébergeur pour faire ces modifications...)</i>";
				$lang_string['try_again'] = "[ Réessayer ]";
				// Success
				$lang_string['success'] = "<h2>Succès!</h2>Répertoires créés avec succès !<p /><b>Cliquer ci-dessous pour continuer :</b>";
				$lang_string['continue'] = "[ Continuer ]";
				break;
			case 'install03': // 
				$lang_string['title'] = "Créer le Nom d'utilisateur &amp; Mot de passe";
				$lang_string['instructions'] = "Utiliser le formulaire ci-dessous pour créer votre nom d'utilisateur et votre mot de passe.";
				$lang_string['username'] = "Nom d'utilisateur :";
				$lang_string['password'] = "Mot de passe:";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Félicitation !</h2>Vous êtes maintenant identifiés. Cliquer ci-dessous pour visiter la page de comfiguration, où vous pourrez nommer votre blog. Joyeux blogging !<p />";
				$lang_string['btn_setup'] = "[ Configuration ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Sauvegarde du nom d'utilisateur et/ou mot de passe impossible. Problème recontré durant l'éxecution du script.<br /><br />Le Serveur a reporté :<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Compléter les champs 'nom d'utilisateur' et 'mot de passe' SVP.";
				break;
			case 'setup':
				$lang_string['title'] = "Installation";
				$lang_string['instructions'] = "Vous pouvez modifier le nom de votre blog ainsi que vos informations personnelles.";
				$lang_string['blog_title'] = "Nom du Blog :";
				$lang_string['blog_author'] = "Auteur :";
				$lang_string['blog_email'] = "Email :"; 
				$lang_string['blog_footer'] = "Pied de Page :";
				$lang_string['blog_choose_language'] = "Choisissez votre Langue :";
				$lang_string['blog_enable_comments'] = "Activer les commentaires utilisateur"; 
				$lang_string['blog_comments_popup'] = "Ouvrir les commentaires dans une fenêtre Pop-up";
				$lang_string['blog_enable_voting'] = "Activer la notation des sujets par les utilisateurs"; 
				$lang_string['blog_email_notification'] = "Envoyer un email de notification quand des commentaires sont postés";
				$lang_string['blog_send_pings'] = "Envoyer un &quot;ping&quot; weblog"; 
				$lang_string['blog_ping_urls'] = "Entrer le lien complet (i.e. http://rpc.weblogs.com/RPC2) du service à &quot;'pinguer'&quot;.<br />(Vous pouvez entre plusieurs adresses à la fois en les séparant par des virgules.)";
				$lang_string['blog_trackback_about'] = "Trackback fournit une méthode de notification entre les blogs. Faites savoir
					à d'autre blogs que vous faîtes un lien vers eux en leur envoyant un trackback ping. Voyez qui a fait des liens 
					vers votre blog en recevant des trackback pings.<br />
				   Vous pouvez aussi entrer les liens  'pinguer' manuellement, ou bien essayer de le faire automatiquement via
				   la découverte automatique.";
				$lang_string['blog_trackback_enabled'] = "Activer le trackback dans mon blog"; 
				$lang_string['blog_trackback_auto_discovery'] = "Activer la découverte automatique quand un message contenant un lien est posté.";
				$lang_string['blog_max_entries'] = "Nombre maximum de sujet à afficher :";
				$lang_string['blog_comment_tags'] = "Tags à autoriser dans les commentaires :"; 
				$lang_string['blog_gzip_about'] = "
					Depuis PHP 4.0.4, PHP a la capacité de lire et d'écrire en fichiers compressé gzip (.gz), 
					pour économiser de l'espace-disque. Cela peut également compresser les pages envoyées au navigateur 
					qui supporte la compression gzip de façon transparente.<br />
					<br />
					Le support de la bibliothèque Zlib dans PHP n'est pas activé par défaut. Si les cases de sélection ne sont pas activées, alors votre 
					installation de PHP ne supporte pas l'extension Zlib.";
				$lang_string['blog_enable_gzip_txt'] = "Activer la compression GZIP pour les fichiers de la base de données";
				$lang_string['blog_enable_gzip_output'] = "Activer la compression GZIP pour l'affichage HTTP"; 
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Sauvegarde des paramètres de configuration impossible. Problème recontré durant l'éxecution du script.<br /><br />Le Serveur a reporté :<br />";
				$lang_string['form_error'] = "Veuillez compléter les champs AUTEUR et TITRE";
				$lang_string['label_entry_order'] = "Ordre d'apparition :";
				$lang_string['select_new_to_old'] = "Plus recents en premier";
				$lang_string['select_old_to_new'] = "Plus anciens en premier";
				$lang_string['label_comment_order'] = "Ordre des Commentaires:";
				break;
			case 'trackbacks':  
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "Lien de Trackback pour ce message :";
				$lang_string['delete_btn'] = "supprimer";
				// Error Response
				$lang_string['error_add'] = "Erreur durant l'enregistrement des données de trackback.";
				break;
			case 'options':
				$lang_string['title'] = "Options";
				$lang_string['instructions'] = "Utilisez ce formulaire pour paramétrer les formats de date et de temps utilisés dans votre blog. Vous pouvez choisir une horloge a 12 ou a 24 heures, une date à format long ou court. Les champs d'apercu se mettent automatiquement a jour et affichent le formatage choisi.";
				// Long Date
				$lang_string['ldate_title'] = "Format d une date longue :";
				$lang_string['weekday'] = "Jour de la Semaine";
				$lang_string['month'] = "Mois";
				$lang_string['day'] = "Jour";
				$lang_string['year'] = "Année";
				$lang_string['none'] = "Aucun";
				// Short Date
				$lang_string['sdate_title'] = "Format d une date courte :";
				$lang_string['s_month'] = "Mois";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Jour";
				$lang_string['s_year'] = "Année";
				$lang_string['zero_day'] = "Laissez les zéros des jours";
				$lang_string['show_century'] = "Montrer le siècle";
				// Time
				$lang_string['time_title'] = "Format de l'heure:";
				$lang_string['12hour'] = "Horloge à 12 heures";
				$lang_string['24hour'] = "Horloge à 24 heures";
				$lang_string['before_noon'] = "Matin";
				$lang_string['after_noon'] = "Après Midi";
				// Date
				$lang_string['date_title'] = "Format d'affichage de la date :";
				$lang_string['long_date'] = "Date Longue";
				$lang_string['short_date'] = "Date Courte";
				$lang_string['time'] = "Horloge";
				// Menu
				$lang_string['menu_title'] = "Format d'affichage de la date:";
				$lang_string['long_date'] = "Long Date";
				$lang_string['short_date'] = "Short Date";
				// Used in multiple places
				$lang_string['zero_day'] = "Laisser le zéro des jours";
				$lang_string['zero_month'] = "Laisser le zéro des mois";
				$lang_string['zero_hour'] = "Laisser le zéro des heures";
				$lang_string['separator'] = "Séparateur :";
				$lang_string['preview'] = "Apercu :";
				$lang_string['server_offset'] = "Server Offset:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Sauvegarde des paramètres de configuration impossible. Problème recontré durant l'éxecution du script.<br /><br />Le Serveur a reporté :<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Themes";
				$lang_string['instructions'] = "Utiliser le menu déroulant pour sélectionner le thème.";
				// Themes
				$lang_string['choose_theme'] = "Thèmes:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information non sauvegardée. L'application a rencontré un problème durant la sauvegarde de votre information.<br /><br />Server Reported:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Upload d'image";
				$lang_string['instructions'] = "Cliquez sur le bouton ci dessous pour choisir un fichier à uploader.";
				$lang_string['select_file'] = "Choisir un fichier";
				$lang_string['upload_btn'] = "Upload";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Upload d'image impossible. Voici quelques informations : <br /><br />Le Serveur a reporté :<br />";
				break;
			case 'search': 
				$lang_string['title'] = "Résultat de la recherche";
				$lang_string['instructions'] = "Résultat de la recherche pour <b>%string</b>:";
				$lang_string['not_found'] = "Pas de résultat";
				break;
			case 'contact':  
				$lang_string['title'] = "Me Contacter";
				$lang_string['instructions'] = "Renseigner le formulaire :";
				$lang_string['form_error'] = "Compléter les champs 'sujet' et commentaire' SVP.";
				$lang_string['name'] = "Nom :";
				$lang_string['email'] = "Email :";
				$lang_string['subject'] = "Sujet :";
				$lang_string['comment'] = "Commentaire :";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				$lang_string['success'] = "<h2>Merci de votre contribution !</h2>Votre message a bien été envoyé.<p />";
				$lang_string[ 'error' ] = "<h2>Whoops!</h2>Mail not sent.<p />"; //0.4.4
				$lang_string[ 'capcha' ] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.4
				break;
			case 'stats':
				$lang_string['title'] = "<h2>Statistiques</h2>";
				$lang_string['general'] = "<h3>Général</h3>";
				$lang_string['entry_info'] = "<b>%s</b> Il y a un total de <b>%s</b> mots dans les sujets,  stockés dans <b>%s</b> octets";
				$lang_string['comment_info'] = "<b>%s</b> Il y a un total de <b>%s</b> mots dans les commentaires, stockés dans <b>%s</b> octets";
				$lang_string['trackback_info'] = "<b>%s</b> trackbacks stockés dans <b>%s</b> octets";
				$lang_string['static_info'] = "<b>%s</b> Il y a un total de <b>%s</b> mots dans les pages statiques, stockés dans <b>%s</b> octets";
				$lang_string['most_viewed_entries'] = "<h3>Les 10 sujets les plus vus</h3>";
				$lang_string['most_commented_entries'] = "<h3>Les 10 sujets les plus commentés</h3>";
				$lang_string['most_trackbacked_entries'] = "<h3>Les 10 sujet les plus 'trackbackés'</h3>";
				$lang_string[ 'vote_info' ] = "<b>%s</b> votes stored in <b>%s</b> bytes"; // 0.4.1
				$lang_string[ 'most_voted_entries' ] = "<h3>10 Most voted entries</h3>"; // 0.4.1
				$lang_string[ 'most_rated_entries' ] = "<h3>10 Most rated entries</h3>"; // 0.4.1
				break;
			default:
				break;
		}

	}
		
?>
