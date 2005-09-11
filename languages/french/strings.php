<?php
	// Translation(s)
	// (c) 2004 Thibaud Chon, thibaud <dot> chone <at> insa-lyon <dot> fr (0.3.7)
	// (c) 2005 Bill Bateman (0.4.6)
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Francais
		$lang_string['locale'] = 'fr_FR'; // <-- New 0.3.7
		$lang_string['language'] = 'french';
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO8859-1';
		$lang_string['php_charset'] = 'ISO8859-1';
		
		setlocale( LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Liens";
		$lang_string['menu_home'] = "À la maison";
		$lang_string['menu_contact'] = "Contactez-Moi"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Statistiques"; // <-- New 0.3.7r
		$lang_string['menu_archive'] = "Archives"; // <-- New
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Ajout Contenu";
		$lang_string['menu_add_static'] = "Ajout Page";
		$lang_string['menu_upload'] = "Image De Téléchargement";
		$lang_string['menu_setup'] = "Setup";
		$lang_string['menu_categories'] = "Categories";
		$lang_string['menu_info'] = "Information"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Options";
		$lang_string['menu_themes'] = "Thèmes";
		$lang_string['menu_colors'] = "Couleurs";
		$lang_string['menu_change_login'] = "Changer de Login";
		$lang_string['menu_logout'] = "Se Déloguer";
		$lang_string['menu_login'] = "Ouverture";
		$lang_string['menu_most_recent'] = "Derniers Commentaires";
		$lang_string['menu_most_recent_entries'] = "La plupart des Entrées Récentes";
		$lang_string['menu_most_recent_trackback'] = "La plupart De Trackbacks Récent"; // <-- New 0.3.8
		// DATOH_ADD
		$lang_string['menu_add_block'] = "Blocs";
		// DATOH_END
		
		// Other
		$lang_string['home'] = "Retour Accueil";
		$lang_string['nav_next'] = 'Après'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Dos'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Recherche:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Allez'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Page produite dedans %s secondes'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' );
		$lang_string['sb_default_title'] = 'Sans Titre';
		$lang_string['sb_default_author'] = 'x';
		$lang_string['sb_default_footer'] = 'x';
		
		$lang_string['sb_edit'] = 'Editer';
		$lang_string['sb_delete'] = 'Supprimer';
		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		
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
		
		$lang_string['sb_rate_entry_btn'] = "Déclic pour évaluer l'entrée";
		
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
				$lang_string['file_name'] = "Nom de fichier Statique: (les aucuns espaces ou prolongements de dossier)"; // <-- New 0.3.8
				// Javascript Strings <-- Need Translation
				$lang_string['insert_styles'] = "Entrez le texte a formater";
				$lang_string['insert_image'] = "Entrez l\'URL de l\'image";
				$lang_string['insert_url1'] = "Entrez le texte associé au lien (optionnel)";
				$lang_string['insert_url2'] = "Entrez l URL complète du lien";
				$lang_string['insert_url3'] = "Open URL in new window (optionnel):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Complétez les champs Sujet et Contenu";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'optionnel:';
				$lang_string['insert_image_width'] = 'Largeur (optionnel):';
				$lang_string['insert_image_height'] = 'taille (optionnel):';
				$lang_string['insert_image_popup'] = 'Vue normale dans instantané une fois cliqueté (optionnel):';
				$lang_string['insert_image_float'] = 'Flotteur (optionnel):';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Ajout de Contenu";
				$lang_string['instructions'] = "Etes vous prêt a bloguer ? Remplissez le formulaire ci dessous, puis cliquez sur 'Apercu'pour vérifier la mise en page, ou sur 'Poster' pour sauvegarder votre post.";
				$lang_string['title_ad'] = "Confirmez Les Cinglements De Trackback"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "Ce sont l'URIs Automobile-Découvert que vous êtes sur le point pour cingler. Si vous ne voulez pas cingler un certain URI, uncheck il ci-dessous. Appuyez sur alors le bouton 'OK 'pour cingler l'URIs vérifié ou pour serrer l''annulation 'pour ne pas cingler du tout."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (la virgule a séparé)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Apercu / Edition de contenu";
				$lang_string['instructions_preview'] = "Voici à quoi ressemble votre post. Si vous utilisez différents styles de texte ou si vous incluez des images, veillez à bien fermer toutes vos balises.";
				$lang_string['title_update'] = "Mettre à jour";
				$lang_string['instructions_update'] = "Vous pouvez mettre à jour les informations en utilisant le formulaire ci dessous. Cliquez sur 'Apercu' ou sur 'Poster' lorque vous avez fini.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
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
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Contenu non sauvegardé. Une erreur est apparue lors de la sauvegarde.<br /><br />le serveur a rapporté :<br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Add / Manage Links";
				$lang_string['instructions'] = "Add custom Blocks";
				$lang_string['up'] = "up";
				$lang_string['down'] = "down";
				$lang_string['edit'] = "edit";
				$lang_string['delete'] = "delete";
				$lang_string['block_name'] = "Block Name:";
				$lang_string['block_content'] = "Block content:";
				$lang_string['instructions_edit'] = "You are currently editing block:";
				$lang_string['instructions_modify'] = "Click below to modify a block:";
				$lang_string['submit_btn_edit'] = "Edit Block";
				$lang_string['submit_btn_add'] = "Add Block";
				$lang_string['form_error'] = "Please complete the Name field.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Static Pages:";
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
				$lang_string['title'] = "Ajoutez/Contrôlez Les Catégories";
				$lang_string['instructions'] = "Employez la forme ci-dessous pour ajouter et éditer vos catégories.  Chaque article de catégorie devrait être dans ce format 'nom de catégorie (numéro d'identification) '.  Articles de creux avec les espaces pour créer des heirarchies.<br /><br /><b>Exemple:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technology (2)<br />";
				$lang_string['error'] = "Erreur";
				$lang_string['current_categories'] = "Catégories Courantes";
				$lang_string['no_categories_found'] = "Aucunes Catégories Trouvées";
				$lang_string['category_list'] = "Liste De Catégorie:";
				$lang_string['validate'] = "Validez";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
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
				$lang_string['scheme_name'] = "Écrivez un nom fait sur commande d'arrangement de couleur:"; // 0.3.7q
				$lang_string['scheme_file'] = "Écrivez le nom de fichier d'arrangement:  (les aucuns espaces ou prolongements de dossier)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Veuillez écrire un nom pour votre arrangement de couleur fait sur commande."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Paramètres de configuration non sauvegardés. Problème rencontré durant l opération de sauvegarde.<br /><br />le Serveur a reporté :<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['comment_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Commentaires";
				$lang_string['header'] = "Ajouter Commentaire";
				$lang_string['instructions'] = "Remplissez ce formulaire pour ajouter un commentaire.";
				$lang_string['comment_name'] = "Votre Nom :";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Rappelez-vous moi:"; // 0.3.8
				$lang_string['comment_text'] = "Votre Commentaire :";
				$lang_string['post_btn'] = "&nbsp;Poster&nbsp;";
				$lang_string['delete_btn'] = "Effacer";
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Commentaire non sauvegardé. Problème recontré durant l'éxecution du script.<br /><br />Le Serveur a reporté :<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Commentaire non détruit. Problème rencontré durant l'opération de suppression de votre commentaire.<br /><br />le Serveur a reporté :<br />";
				$lang_string['form_error'] = "Veuillez remplir les champs NOM et COMMENTAIRE"; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "Effacer";
				$lang_string['instructions'] = "Voici un apercu de ce que vous souhaitez effacer. Soyez certain de ce que vous faites, il n'y a pas de marche arrière possible...";
				$lang_string['ok_btn'] = "&nbsp;Je suis sur&nbsp;";
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
			case 'info': // New 0.3.7
				$lang_string['title'] = "L'Information De Méta-données";
				$lang_string['instructions'] = "L'information ci-dessous est employée pour le meta-data, quelles aides les moteurs de recherche correctement trouvent et identifient votre emplacement.  L'information peut également être employée en alimentations de RSS.";
				$lang_string['info_keywords'] = "Mots-clés:  (liste de mots-clés séparés par des virgules.)";
				$lang_string['info_description'] = "Description:  (un abstrait ou une description de texte libre de votre emplacement.)";
				$lang_string['info_copyright'] = "Droites:  (rapport de copyright, ou lien au document contenant l'information.)";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>L'information non sauvée.  J'ai couru dans un problème tout en sauvant votre information.<br /><br />Le Serveur A rapporté:<br />";
				$lang_string['form_error'] = "Veuillez accomplir le titre et écrivez les champs.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>Whoops!</h2>L'information non sauvée.  J'ai couru dans un problème tout en sauvant votre information.<br /><br />Le Serveur A rapporté:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Mise à niveau</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n le besoin de dossiers de commentaire d'être amélioré:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Commentaires De Mise à niveau"; // New 0.3.8
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
			case 'set_login': // <-- New
				$lang_string['title'] = "Changez Le Username &amp; Mot de passe";
				$lang_string['instructions'] = "Use the form below to change your Username and/or Password. Enter the Username and Password that you want to use.";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Mot de passe:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Succès!</h2>Votre username et/ou mot de passe est en activité.  Blogging heureux!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>L'information non sauvée.  J'ai couru dans un problème tout en sauvant votre username et/ou mot de passe.<br /><br />Serveur Rapporté:<br />";
				$lang_string['form_error'] = "Veuillez accomplir les champs de username et de mot de passe.";
				$lang_string['explanation'] = "Dans des versions récentes, notre structure de mot de passe a changé.  Il n'y a plus une 
				manière de mettre à jour des mots de passe et/ou des ouvertures de l'intérieur du code de blog.  Afin de changer 
				votre mot de passe, suppriment/config/password.php et veillent qu'install*.php existe sur le serveur local.  Une 
				fois que cela est fait, régénérez cette page (ou sortie du système).  Vous serez présentés avec le même manuscrit 
				pour produire de votre mot de passe que vous  en créant à l'origine l'emplacement de blog.";  // New for 0.4.6
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
				Merci du choix  Simple PHP Blog!<br /><br />Simple PHP Blog est un système blogging léger. Il exige PHP 4,1 ou plus grand, et écrire-permissions sur le serveur.  Toute l'information est stockée dans les plat-dossiers, ainsi aucune base de données n'est exigée.<br /><br />
				Afin de commencer, Simple PHP Blog doit créer trois chemises (<b>config</b>, <b>content</b>, and <b>images</b>) dans quel pour stocker votre information.  Après celui, vous créerez votre mot de passe et alors vous pouvez commencer à blogging.<br /><br />
				<b>Déclic ci-dessous pour commencer l'installation:</b>";
				$lang_string['begin'] = "[ Commencez L'Installation ]";
				break;
			case 'install02':
				$lang_string['title'] = "L'Installation";
				$lang_string['instructions'] = "Essai de créer <b>config</b>, <b>content</b>, and <b>images</b> folders:";
				$lang_string['folder_exists'] = "Ok!  La chemise existe déjà.  Aucuns changements faits...";
				$lang_string['folder_failed'] = "Huées!  N'a pas pu créer la chemise...";
				$lang_string['folder_success'] = "Succès!  Chemise créée...";
				// Help
				$lang_string['help'] = "
				<h2>Whoops!</h2>
				N'a pas pu créer une ou plusieurs chemises!<br /><br />C'est le plus susceptible parce que:<br />
				<ol>
				<li>Écrivez les permissions ne sont pas placés pour permettre l'accès lecture/écriture.</li>
				<li>L'UID (identifications d'utilisateur) de tous les dossiers et chemise doit s'assortir.</li>
				</ol>
				Suivez les instructions de dépannage ci-dessous et cliquetez l'essai encore:<br />
				<ol>
				<li>Créez manuellement les chemises suivantes: <b>config</b>, <b>content</b>, and <b>images</b>.</li>
				<li>Permis écrivez les permissions sur les chemises:  Dans votre programme de ftp, le propriétaire, l'utilisateur, et le monde devraient avoir lu et écrits l'accès.  (vous pouvez devoir entrer en contact avec votre fournisseur de service pour changer ces derniers...)</li>
				<li>MAssurez-vous que l'UID de tous vos dossiers et de chemises sont identique.  (vous pouvez devoir entrer en contact avec votre fournisseur de service pour changer ces derniers...)</li>
				</ol>";
				$lang_string['try_again'] = "[ Essai Encore ]";
				// Success
				$lang_string['success'] = "Succès!  Chemises créées avec succès!  Déclic ci-dessous à continuer:";
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
				$lang_string['success'] = "Félicitations!  Vous êtes maintenant entrés.  Cliquetez ci-dessous pour visiter la page d'installation, où vous pouvez appeler votre blog.  Blogging heureux!";
				$lang_string['btn_setup'] = "[ Installation ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>L'information non sauvée.  J'ai couru dans un problème tout en sauvant votre username et/ou mot de passe.<br /><br />Serveur Rapporté:<br />";
				$lang_string['form_error'] = "Veuillez accomplir les champs de username et de mot de passe.";
				break;
			case 'install04':
				$lang_string['title'] = "Créez Le Dossier De Mot de passe";
				$lang_string['instructions'] = "Voici la partie rusée:<br />
				<ol>
				<li>Ouvrez une application d'éditeur de texte. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
				<li>Créez un nouveau document des textes.</li>
				<li>La copie et collent le code dans la boîte ci-dessous dans votre document.</li>
				<li>Économiser votre dossier et appelez-le <b>password.php</b> <i>(Soyez sûr de le sauver dedans <b>text</b> ou <b>plain text</b> format.)</i></li>
				<li>Ouvrez une application de ftp.</li>
				<li>Téléchargez votre nouveau <b>password.php</b> dans <b>config</b> chemise sur votre site Web.</li>
				<li>Supprimez <b>password.php</b> de votre commande dure locale.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Note:  Si vous voulez remettre à zéro votre username et mot de passe (probablement parce que vous l'avez oublié), supprimez <b>password.php</b> dossier dans <b>config</b> chemise sur votre site Web.  La prochaine fois que vous visitez votre emplacement, il marchera vous par ce procédé d'installation encore...</i>";
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
				$lang_string['success'] = "Congratulations!You sont maintenant entrés.  Cliquetez ci-dessous pour visiter la page d'installation, où vous pouvez personnaliser votre nouveau blog.  Note:  Maintenant que vous avez complété le procédé d'installation, on lui recommande que vous supprimiez les dossiers installXX.php de votre emplacement d'enchaînement (c.-à-d. install00.php par install06.php)<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Vous n'êtes pas entrés.  Veuillez vérifier que vous avez dactylographié votre username et mot de passe correctement et essai encore.<p />";
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
				$lang_string['blog_footer'] = "Pied de Page :";
				$lang_string['blog_choose_language'] = "Choisissez votre Langue :";
				$lang_string['blog_enable_comments'] = "Permettez Les Commentaires D'Utilisateur"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Ouvrez les commentaires dans la fenêtre de Popup"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "Permettez aux utilisateurs d'évaluer des entrées"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Envoyez l'avis d'email quand des commentaires sont signalés"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Envoyez weblog &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_enable_cache'] = "Permettez la cachette d'entrée de Blog (peut fournir l'augmentation de vitesse sur quelques serveurs)"; // New for 0.4.6
				$lang_string['blog_ping_urls'] = "Écrivez le plein URL (i.e. http://rpc.weblogs.com/RPC2) du service à &quot;ping&quot;.<br />(Vous pouvez écrire plus d'une adresse séparée par des virgules.)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback fournit une méthode d'avis entre les blogs.  Faites un autre blog savoir que vous liez à eux en leur envoyant un cinglement de trackback.  Voyez qui lie à votre blog en recevant des cinglements de trackback.  Vous pouvez entrer dans l'URIs pour cingler manuellement, ou pour essayer de le faire automatiquement par l'Automobile-Découverte."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Permettez le trackback dans mon blog"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Permettez l'Automobile-Découverte en soumettant un poteau contenant URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "Entrées maximum à montrer:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Étiquettes à permettre dans les commentaires:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					Depuis PHP 4.0.4, PHP a eu la capacité de lire et écrire les dossiers de gzip (gz), 
					ainsi l'disque-espace comprimés d'économie. Il peut également d'une manière transparente 
					comprimer les pages qui sont envoyées aux navigateurs qui soutiennent la compression de 
					gzip, ainsi largeur de bande d'économie.<br />
					<br />
					L'appui de Zlib dans PHP n'est pas permis par défaut. Si les checkboxes sont handicapés, 
					alors votre installation de PHP ne soutient pas la prolongation de Zlib."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Permettez la compression de GZIP pour des dossiers de base de données"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Permettez la compression de GZIP pour le rendement de HTTP"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Sauvegarde des paramètres de configuration impossibles. Problème recontré durant l'éxecution du script.<br /><br />Le Serveur a reporté :<br />";
				$lang_string['form_error'] = "Veuillez compléter les champs AUTEUR et TITRE";
				$lang_string['label_entry_order'] = "Ordre d'apparition :";
				$lang_string['select_new_to_old'] = "Plus recents en premier";
				$lang_string['select_old_to_new'] = "Plus anciens en premier";
				$lang_string['label_comment_order'] = "Ordre des Commentaires:";
				break;
			case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "URL de Trackback pour cette entrée:";
				$lang_string['delete_btn'] = "Effacement";
				// Error Response
				$lang_string['error_add'] = "Erreur stockant des données de trackback.";
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
				$lang_string['show_century'] = "Show century";
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
				$lang_string['menu_title'] = "Menu Date Display Format:";
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
				$lang_string['error'] = "<h2>Whoops!</h2>Sauvegarde des paramètres de configuration impossibles. Problème recontré durant l'éxecution du script.<br /><br />Le Serveur a reporté :<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Thèmes";
				$lang_string['instructions'] = "Employez le menu drop-down pour choisir un thème différent.";
				// Themes
				$lang_string['choose_theme'] = "Thèmes:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>L'information non sauvée.  J'ai couru dans un problème tout en sauvant votre information.<br /><br />Serveur Rapporté:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Upload d'image";
				$lang_string['instructions'] = "Cliquez sur le bouton ci dessous pour choisir un fichier à uploader.";
				$lang_string['select_file'] = "Choisir un fichier";
				$lang_string['upload_btn'] = "Upload";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Upload d'image impossible. Voici quelques informations : <br /><br />Le Serveur a reporté :<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "Résultats De Recherche";
				$lang_string['instructions'] = "Résultats de recherche pour <b>%string</b>:";
				$lang_string['not_found'] = "Résultat n'a pas trouvé";
				break;
			case 'contact': // <-- New 0.3.8
				$lang_string['title'] = "Contactez-Moi";
				$lang_string['instructions'] = "Complétez la forme :";
				$lang_string['form_error'] = "Veuillez accomplir les champs de sujet et de commentaire.";
				$lang_string['name'] = "Nom:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Sujet:";
				$lang_string['comment'] = "Commentaire:";
				$lang_string['submit_btn'] = "&nbsp;Soumettez&nbsp;";
				$lang_string['success'] = "<h2>Succès !</h2>Votre message a été envoyé.<p />";
				$lang_string['contact_capcha'] = "Anti-Spam: Entrez <b>%s</b>"; // 0.4.2
				$lang_string['failure'] = "<h2>Erreur !</h2>Votre message n'a pas été envoyé. Très probablement anti le Spam n'a pas été écrit correctement.<p />";
				$lang_string['contactsent'] = "Contact envoyé à travers: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				break;
			case 'stats':
				$lang_string['title'] = "Statistiques";
				$lang_string['general'] = "Généralités";
				$lang_string['entry_info'] = "<b>%s</b> employer d'entrées <b>%s</b> mots stockés dedans <b>%s</b> bytes";
				$lang_string['comment_info'] = "<b>%s</b> employer de commentaires <b>%s</b> mots stockés dedans <b>%s</b> bytes";
				$lang_string['trackback_info'] = "<b>%s</b> trackbacks stockés dedans <b>%s</b> bytes";
				$lang_string['static_info'] = "<b>%s</b> employer statique de pages <b>%s</b> mots stockés dedans <b>%s</b> bytes";
				$lang_string['most_viewed_entries'] = "10 entrées les plus vues";
				$lang_string['most_commented_entries'] = "10 entrées les plus commentées";
				$lang_string['most_trackbacked_entries'] = "10 trackbacked plus des entrées";
				$lang_string['vote_info'] = "<b>%s</b> voix stockées dedans <b>%s</b> bytes"; // 0.4.1
				$lang_string["most_voted_entries"] = "10 entrées les plus votées"; // 0.4.1
				$lang_string["most_rated_entries"] = "La plupart des entrées évaluées"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Error 403.8 - Accès De Page/Function Nié';
				$lang_string["errorline1"] = "La page ou fonctionnent vous a essayé de traiter exige l'utilisation des biscuits.";
				$lang_string["errorline2"] = 'Reconstituez la fonctionnalité de biscuit dans votre logiciel de browser ou de protection et essayez votre demande encore.';
				$lang_string["clientid"] = 'Identification De Client: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Error 403.8 - Accès De Page/Function Nié';
				$lang_string["404"] = "HTTP Error 404 - Page/Function N'existe pas";
				$lang_string["error_404"] = "La page ou fonctionnent vous a essayé de traiter n'existe pas.";
				$lang_string["error_javascript"] = 'La page ou fonctionnent vous a essayé exige du Javascript afin de fonctionner correctement.';
				$lang_string["error_emailnotsent"] = "Le message que vous avez essayé d'envoyer a échoué.";
				$lang_string["error_emailnotsentcapcha"] = "Le message que vous avez essayé d'envoyer a échoué parce que l'entrée anti-Spam était incorrecte ou des disparus.";
				$lang_string["clientid"] = 'Identification De Client: ';
				break;
			default:
				break;
		}

	}
		
?>
