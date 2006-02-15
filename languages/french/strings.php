<?php
	// Translation(s)
	// (c) 2004 Thibaud Chon, thibaud <dot> chone <at> insa-lyon <dot> fr (0.3.7)
	// (c) 2005 Bill Bateman (0.4.6)
    // (c) 2006 Alain Gaymard
	
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
		$lang_string['menu_home'] = "Accueil";
		$lang_string['menu_contact'] = "Contactez moi"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Statistiques"; // <-- New 0.3.7r
		$lang_string['menu_archive'] = "Archives"; // <-- New
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Ajout de contenu";
		$lang_string['menu_add_static'] = "Ajout de page";
		$lang_string['menu_upload'] = "Gestion des images";
		$lang_string['menu_setup'] = "Configuration";
		$lang_string['menu_categories'] = "Catégories";
		$lang_string['menu_info'] = "Information"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Options";
		$lang_string['menu_themes'] = "Thèmes";
		$lang_string['menu_colors'] = "Couleurs";
		$lang_string['menu_change_login'] = "Changer d'identifiant";
		$lang_string['menu_logout'] = "Se déloguer";
		$lang_string['menu_login'] = "S'identifier";
		$lang_string['menu_most_recent'] = "Derniers commentaires";
		$lang_string['menu_most_recent_entries'] = "Les entrées les plus récentes";
		$lang_string['menu_most_recent_trackback'] = "Les trackbaks les plus récents"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "Blocs";
		$lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Other
		$lang_string['home'] = "Retour à l'accueil";
		$lang_string['nav_next'] = "Suivant"; // <-- New 0.3.7
		$lang_string['nav_back'] = "Précédant"; // <-- New 0.3.7
		$lang_string['search_title'] = "Recherche:"; // <-- New 0.3.7
		$lang_string['search_go'] = "Allez"; // <-- New 0.3.7
		$lang_string['page_generated_in'] = "Page générée en %s seconde(s)"; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' );
		$lang_string['sb_default_title'] = 'Sans titre';
		$lang_string['sb_default_author'] = 'x';
		$lang_string['sb_default_footer'] = 'x';
		
		$lang_string['sb_edit'] = 'Editer';
		$lang_string['sb_delete'] = 'Supprimer';
		$lang_string['sb_permalink'] = 'lien permanent'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		$lang_string['sb_relatedlink'] = 'lien relatif'; // <-- New in 0.4.6
		
		$lang_string['sb_add_comment_btn'] = 'Ajouter un commentaire';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'commentaire';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'commentaires';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '(consulté ';
		$lang_string['sb_view_counter_post'] = ' fois)';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '(consulté ';
		$lang_string['sb_view_counter_plural_post'] = ' fois)';
		
		$lang_string['sb_add_link_btn'] = '+ lien';
		
		$lang_string['sb_rate_entry_btn'] = "Cliquez pour noter l'article";
		
		// Entry Text Editor
		// DATOH_REPLACE
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
		// DATOH_END
				$lang_string['label_subject'] = "Sujet&nbsp;:";
				$lang_string['label_insert'] = "Insertion spéciale&nbsp;:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
				$lang_string['view_images'] = "Voir les images envoyées";
				$lang_string['label_entry'] = "Contenu&nbsp;:";
				$lang_string['btn_preview'] = "&nbsp;Aperçu&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Poster&nbsp;";
				$lang_string['file_name'] = "Nom de fichier statique: (pas d'espaces dans le nom)"; // <-- New 0.3.8
				// Javascript Strings <-- Need Translation
				$lang_string['insert_styles'] = "Entrez le texte à formater";
				$lang_string['insert_image'] = "Entrez l'URL de l'image";
				$lang_string['insert_url1'] = "Entrez le texte associé au lien (optionnel)";
				$lang_string['insert_url2'] = "Entrez l'URL complète du lien";
				$lang_string['insert_url3'] = "Ouvrir l'URL dans une nouvelle fenêtre (optionnel):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Complétez les champs Sujet et Contenu";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = "Optionnel&nbsp;:";
				$lang_string['insert_image_width'] = "Largeur (optionnel)&nbsp;:";
				$lang_string['insert_image_height'] = "Taille (optionnel)&nbsp;:";
				$lang_string['insert_image_popup'] = "Vue normale dans instantané une fois cliqueté (optionnel)&nbsp;:";
				$lang_string['insert_image_float'] = "Float (optionnel)&nbsp;:";
		
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
				$lang_string['title'] = "Ajout de contenu";
				$lang_string['instructions'] = "Etes vous prêt à bloguer ? Remplissez le formulaire ci-dessous, puis cliquez sur [Aperçu] pour vérifier la mise en page, ou sur [Poster] pour sauvegarder votre post.";
				$lang_string['title_ad'] = "Confirmez Les cinglements de trackback"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "Ce sont l'URIs Automobile-Découvert que vous êtes sur le point pour cingler. Si vous ne voulez pas cingler un certain URI, uncheck il ci-dessous. Appuyez sur alors le bouton 'OK 'pour cingler l'URIs vérifié ou pour serrer l''annulation 'pour ne pas cingler du tout."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (la virgule a séparé)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				$lang_string['label_relatedlink'] = "Related Link"; // New for 0.4.6
				$lang_string['label_categories'] = "Category List";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Aperçu / Edition de contenu";
				$lang_string['instructions_preview'] = "Voici à quoi ressemble votre post. Si vous utilisez différents styles de texte ou si vous incluez des images, veillez à bien fermer toutes vos balises.";
				$lang_string['title_update'] = "Mettre à jour";
				$lang_string['instructions_update'] = "Vous pouvez mettre à jour les informations en utilisant le formulaire ci-dessous. Cliquez sur [Aperçu] ou sur [Poster] lorsque vous avez terminé.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Annuler&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Contenu non sauvegardé. Une erreur est apparue lors de la sauvegarde.<br /><br />Le serveur a rapporté l'erreur suivante'&nbsp;:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Ajouter une entrée statique";
				$lang_string['instructions'] = "Remplissez le formulaire suivant pour créer une page statique. Contrairement à une entrée classique de blog, les pages statiques apparaissent en lien dans le menu de droite. Elles servent pour des pages toujours accessibles comme par exemple un CV, une page de contact, un agenda, etc. Cliquez sur [Aperçu] pour voir à quoi cette page ressemblera, ou sur [Poster] pour la sauvegarder.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Aperçu / Edition de contenu";
				$lang_string['instructions_preview'] = "Voici à quoi ressemble votre post. Si vous utilisez différents styles de texte ou si vous incluez des images, veillez à bien fermer toutes vos balises.";
				$lang_string['title_update'] = "Mettre à jour";
				$lang_string['instructions_update'] = "Vous pouvez mettre à jour les informations en utilisant le formulaire ci-dessous. Cliquez sur [Aperçu] ou sur [Poster] lorque vous avez terminé.";
				$lang_string['form_error'] = "Complétez les champs Sujet et Contenu";	
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Contenu non sauvegardé. Une erreur est apparue lors de la sauvegarde.<br /><br />Le serveur a rapporté l'erreur suivante&nbsp;:<br />";
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
				$lang_string['static_pages'] = "Pages statiques&nbsp;:";
				// Add / Manage Links
				$lang_string['title'] = "Ajouter / Gérer les liens";
				$lang_string['instructions'] = "Ajouter des liens vers d'autres sites. Remplissez le formulaire ci-dessous et cliquez sur 'Ajouter le lien' pour l'ajouter. Utilisez les boutons 'Haut' et 'Bas' pour changer l'ordre des liens. Cliquez sur le bouton [Editer] pour modifier un lien. Cliquez sur le bouton [Effacer] pour enlever un lien.";
				$lang_string['up'] = "Haut";
				$lang_string['down'] = "Bas";
				$lang_string['edit'] = "Editer";
				$lang_string['delete'] = "Effacer";
				$lang_string['link_name'] = "Nom du lien :";
				$lang_string['link_url'] = "Adresse du lien : (optionnel. Laissez vide pour créer une sous categorie.)";
				$lang_string['instructions_edit'] = "Vous éditez actuellement le lien&nbsp;:";
				$lang_string['instructions_modify'] = "Cliquez ci-dessous pour modifier le lien :";
				$lang_string['submit_btn_edit'] = "Editer";
				$lang_string['submit_btn_add'] = "Ajouter";
				$lang_string['form_error'] = "Complétez le champ Nom du lien";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "Ajoutez / Contrôlez les catégories";
				$lang_string['instructions'] = "Employez le formulaire ci-dessous pour ajouter et éditer vos catégories. Chaque article de catégorie devrait être dans ce format 'nom de catégorie (numéro d'identification) '. Identez votre texte avec les espaces pour créer une hiérarchie.<br /><br /><b>Exemple&nbsp;:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technology (2)<br />";
				$lang_string['error'] = "Erreur";
				$lang_string['current_categories'] = "Catégories courantes";
				$lang_string['no_categories_found'] = "Aucune catégories trouvée";
				$lang_string['category_list'] = "liste des catégories&nbsp;:";
				$lang_string['validate'] = "Validez";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Changer les couleurs";
				$lang_string['instructions'] = "Vous pouvez changer les couleurs de texte et de fond de votre blog. Utilisez la palette pour choisir votre couleur, puis recopier la valeur HEX de cette couleur dans les champs correspondants.";
				$lang_string['bg_color'] = "Fond du site";
				$lang_string['main_bg_color'] = "Fond de page";
				$lang_string['border_color'] = "Bordure de page";
				$lang_string['inner_border_color'] = "Bordure interne";
				$lang_string['header_bg_color'] = "Fond de l'en-tête";
				$lang_string['header_txt_color'] = "Texte de l'en-tête";
				$lang_string['menu_bg_color'] = "Fond du menu";
				$lang_string['footer_bg_color'] = "Fond du pied de page";
				$lang_string['txt_color'] = "Texte principal";
				$lang_string['headline_txt_color'] = "Texte du titre";
				$lang_string['date_txt_color'] = "Date";
				$lang_string['footer_txt_color'] = "Texte du pied de page";
				$lang_string['link_reg_color'] = "Lien";
				$lang_string['link_hi_color'] = "Lien choisi";
				$lang_string['link_down_color'] = "Clic sur un lien";
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
				$lang_string['color_preset'] = "Arrangements de couleur&nbsp;:"; // 0.3.7q
				$lang_string['scheme_name'] = "Écrivez un nom fait sur commande d'arrangement de couleur:"; // 0.3.7q
				$lang_string['scheme_file'] = "Écrivez le nom de fichier d'arrangement (sans espaces)&nbsp;:"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Sauver&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Veuillez écrire un nom pour votre arrangement de couleur fait sur commande."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = "Le thème actuellement choisi ne tient pas compte des couleurs faites sur commande.";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Paramètres de configuration non sauvegardés. Problème rencontré durant l'opération de sauvegarde.<br /><br />Le serveur a reporté l'erreur suivante&nbsp;:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Nom&nbsp;:"; //New in 0.4.6.2
				$lang_string['email'] = "Email&nbsp;:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Homepage&nbsp;:"; //New in 0.4.6.2
				$lang_string['comment'] = "Commentaire&nbsp;:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "Adresse IP&nbsp;:";  // New for 0.4.6.2
				$lang_string['useragent'] = "User Agent&nbsp:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>Le %s, %s a écrit&nbsp;:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				$lang_string['commentposted'] = "Nouveau commentaire posté à&nbsp;: ";  // New for 0.4.6.2
				$lang_string['comment_capcha'] = "Anti-spam&nbsp;: valeur à recopier&nbsp;:&nbsp;<b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Commentaires";
				$lang_string['header'] = "Ajouter un commentaire";
				$lang_string['instructions'] = "Remplissez ce formulaire pour ajouter un commentaire.";
				$lang_string['comment_name'] = "Votre nom&nbsp;:";
				$lang_string['comment_email'] = "Votre adresse e-mail (déconseillé à cause du SPAM)&nbsp;:"; // 0.3.8
				$lang_string['comment_url'] = "URL&nbsp;:"; // 0.3.8
				$lang_string['comment_remember'] = "Mémorier mon nom et mon adresse e-mail&nbsp;:"; // 0.3.8
				$lang_string['comment_text'] = "Votre commentaire&nbsp;:";
				$lang_string['post_btn'] = "&nbsp;Poster&nbsp;";
				$lang_string['delete_btn'] = "Effacer";
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Commentaire non sauvegardé. Problème recontré durant l'éxecution du script.<br /><br />Le serveur a reporté l'erreur suivante&nbsp;':<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Commentaire non détruit. Problème rencontré durant l'opération de suppression de votre commentaire.<br /><br />Le serveur a reporté l'erreur suivante&nbsp;:<br />";
				$lang_string['form_error'] = "Veuillez remplir les champs 'Votre nom' et 'Votre commentaire' et 'Valeur à recopier'"; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "Effacer";
				$lang_string['instructions'] = "Voici un aperçu de ce que vous souhaitez effacer. Soyez certain de ce que vous faites, il n'est pas possible de revenir en arrière...";
				$lang_string['ok_btn'] = "&nbsp;Je suis sûr&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;J'annule&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Impossible de Supprimer<br /><br />Le serveur a reporté l'erreur suivante&nbsp;':<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Effacer une page statique";
				$lang_string['instructions'] = "Voici un aperçu de la page que vous souhaitez effacer. Soyez certain de ce que vous faites, il n'est pas possible de revenir en arrière...";
				$lang_string['ok_btn'] = "&nbsp;Je suis sûr&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;J'annule&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Impossible de supprimer la page.<br /><br />Le serveur a reporté l'erreur suivante&nbsp;':<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Liste des images";
				$lang_string['instructions'] = "Cliquez sur ces liens pour voir les images.<br><br>Pour ajouter une image&nbsp;:<br>1) Copier l'URL de votre image.<br>2) Retournez à la page d'ajout ou d'édition.<br>3) Cliquez sur le bouton 'image' et collez l'URL de l'image dans la fenetre.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Information des méta-données";
				$lang_string['instructions'] = "Les informations ci-dessous sont employées pour les méta-données, qui aident les moteurs de recherche correctement trouvent et identifient votre emplacement. L'information peut également être employée en alimentations de RSS.";
				$lang_string['info_keywords'] = "Mots-clés (liste de mots-clés séparés par des virgules)&nbsp;:";
				$lang_string['info_description'] = "Description (un abstrait ou une description de texte libre de votre emplacement)&nbsp;:";
				$lang_string['info_copyright'] = "Droits (rapport de copyright, ou lien au document contenant l'information)&nbsp;:";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informations non sauvées. Un problème est survenu lors de la sauvegarde des données.<br /><br />Le serveur a rapporté l'erreur suivante&nbs;:<br />";
				$lang_string['form_error'] = "Veuillez accomplir le titre et écrivez les champs.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>Whoops!</h2>L'information non sauvée.  J'ai couru dans un problème tout en sauvant votre information.<br /><br />Le Serveur a rapporté l'erreur suivante&nbsp;:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Mise à jour</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n le besoin de dossiers de commentaire d'être amélioré:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Commentaires De Mise à niveau"; // New 0.3.8
				$lang_string['title'] = "Identifiant";
				$lang_string['instructions'] = "Veuillez entrez votre nom d'utilisateur et votre mot de passe ci-dessous.";
				$lang_string['username'] = "Nom d'utilisateur&nbsp;:";
				$lang_string['password'] = "Mot de passe&nbsp;:";
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Ok&nbsp;!</h2>Vous êtes maintenant identifié&nbsp;! Bloggez Bien&nbsp;!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Erreur de Log. Vérifiez que vous avez entré correctement votre nom d'utilsateur et votre mot de passe, et réessayez.<p />";
				$lang_string['form_error'] = "Complétez les champs 'Nom d'utilisateur' et 'Mot de passe'"; // <-- Need Translation
				break;
			case 'logout':
				$lang_string['title'] = "Se déconnecter";
				$lang_string['instructions'] = "<h2>Whoops!</h2>Impossible de se déloguer. Pas Possible de détruire le cookie. Pourquoi etes vous encore loggé ?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Sauvegarde impossible.<br /><br />Le Serveur a reporté l'erreur suivante&nbsp;:<br />";
				break;
			case 'set_login': // <-- New
				$lang_string['title'] = "Changer le nom d'utilisateur et le mot de passe";
				$lang_string['instructions'] = "Use the form below to change your Username and/or Password. Enter the Username and Password that you want to use.";
				$lang_string['username'] = "Identifiant&nbsp;:";
				$lang_string['password'] = "Mot de passe&nbsp;:";
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
				$lang_string['instructions'] = "Merci d'av oir choisi Simple PHP Blog&nbsp;!";
				$lang_string['blog_choose_language'] = "Choisissez votre langue&nbsp;:";
				$lang_string['submit_btn'] = "&nbsp;Valider&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Bienvenue";
				$lang_string['instructions'] = "
				Merci d'avoir choisi simple PHP Blog&nbsp;!<br /><br />Simple PHP Blog est un système de blog léger. Il nécessite PHP 4.1 ou supérieur, et des autorisations d'écriture sur le serveur. Toute l'information est stockée dans des fichiers plats, aucune base de données n'est exigée.<br /><br />
				Afin de commencer, Simple PHP Blog doit créer trois dossiers (<b>config</b>, <b>content</b>, et <b>images</b>) dans lesquel il stockera vos informations. Après cela, vous créerez votre mot de passe et vous pourrez commencer à blogguer.<br /><br />
				<b>Cliquez ci-dessous pour commencer l'installation&nbsp;:</b>";
				$lang_string['begin'] = "[&nbsp;Commencer l'installation&nbsp;]";
				break;
			case 'install02':
				$lang_string['title'] = "Installation";
				$lang_string['instructions'] = "Création des dossier <b>config</b>, <b>content</b>, et <b>images</b>&nbsp;:";
				$lang_string['folder_exists'] = "Le dossier existe déjà. Aucuns changements effectués.";
				$lang_string['folder_failed'] = "Impossible d'accéder au dossier";
				$lang_string['folder_success'] = "Opération réussie. Dossier créé.";
				// Help
				$lang_string['help'] = "
				<h2>Erreur</h2>
				Il n'a pas été possible de créer un ou plusieurs dossiers.<br /><br />Cela arrive lorsque&nbsp;:<br />
				<ol>
				<li>Les droits ne sont pas suffisants pour effectuer des opérations en <b>lecture/écriture</b>.</li>
				<li>L'UID (l'identifiant de l'utilisateur <i>user ID</i>) de tous les dossiers et fichiers n'est pas le bon.</li>
				</ol>
				Suivez les instructions ci-dessous et cliquez sur [Essayer à nouveau]&nbsp;:<br />
				<ol>
				<li>Créez manuellement les dossier suivants: <b>config</b>, <b>content</b>, et <b>images</b>.</li>
				<li>Autorisez l'écriture sur ces dossier. Dans votre programme de ftp, le propriétaire, l'utilisateur, et les autres utilisateurs doivent avoir l'accès en lecture et écriture. <i>(Vous devez peut-être demander à votre fournisseur d'accès d'effectuer ces changements pour vous)</i></li>
				<li>Assurez-vous que l'UID de tous vos dossiers et fichiers est le même. <i>(Vous devez peut-être demander à votre fournisseur d'accès d'effectuer ces changements pour vous)</i></li>
				</ol>";
				$lang_string['try_again'] = "[&nbsp;Essayer à nouveau&nbsp;]";
				// Success
				$lang_string['success'] = "Opération réussie&nbsp;! Les dossiers existent. Cliquez ci-dessous pour continuer&nbsp;:";
				$lang_string['continue'] = "[&nbsp;Continuer&nbsp;]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>Votre serveur web supporte les modèles de cryptage suivants&nbsp;:</b>";
				$lang_string['standard'] = "Cryptage DES standard&nbsp;: ";
				$lang_string['extended'] = "Cryptage DES étendu &nbsp;: ";
				$lang_string['MD5'] = "Cryptage MD5&nbsp;: ";
				$lang_string['blowfish'] = "Cryptage Blowfish&nbsp;: ";
				$lang_string['enabled'] = "activé";
				$lang_string['disabled'] = "désactivé";
				$lang_string['using_standard'] = "<b>Utilisation de l'encryptage DES standard...</b>";
				$lang_string['using_extended'] = "<b>Utilisation du cryptage DES étendu...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Utilisation du cryptage MD5...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Utilisation du cryptage Blowfish...</b>";
				$lang_string['using_unknown'] = "<b>Utilisation d'un cryptage inconnu...</b>";
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
				$lang_string['title'] = "Changez le nom d'utilisateur et le mot de passe";
				$lang_string['instructions'] = "Utilisez ce formulairer pour créer votre identifiant et mot de passe.";
				$lang_string['username'] = "Identifiant&nbsp;:";
				$lang_string['password'] = "Mot de passe&nbsp;:";
				$lang_string['submit_btn'] = "&nbsp;Valider&nbsp;";
				// Success
				$lang_string['success'] = "Félicitations&nbsp;! Vous êtes maintenant identifié. Cliquez ci-dessous pour configurer votre blog et lui donner un nom";
				$lang_string['btn_setup'] = "[&nbsp;Configuration&nbsp;]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>L'information non sauvée.  J'ai couru dans un problème tout en sauvant votre username et/ou mot de passe.<br /><br />Serveur Rapporté:<br />";
				$lang_string['form_error'] = "Veuillez remplir les champs Identifiant et Mot de passe.";
				break;
			case 'install04':
				$lang_string['title'] = "Création du fichier password <i>(mot de passe)</i>";
				$lang_string['instructions'] = "Voici la partie la plus difficile&nbsp;:<br />
				<ol>
				<li>Ouvrez un éditeur de texte. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc.)</i></li>
				<li>Créez un nouveau document de type texte.</li>
				<li>Copiez le code dans le cadre ci-dessous et collez dans votre document.</li>
				<li>Sauvez votre document sous le nom <b>password.php</b> <i>(Assurez-vous de sauver le fichier en format <b>texte</b> ou <b>texte brut</b> </i>plain text<i>)</i></li>
				<li>Ouvrez une application de type ftp.</li>
				<li>Déposez votre fichier <b>password.php</b> dans le dossier <b>config</b>.</li>
				<li>Supprimez <b>password.php</b> de votre disque dur.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Note&nbsp;: si vous voulez remettre à zéro votre identifiant et mot de passe (probablement parce que vous l'avez oublié), supprimez le fichier <b>password.php</b> du dossier <b>config</b>. Au prochain accès vous pourrez recréer un identifiant et mot de passe de la même manière.</i>";
				$lang_string['code'] = "Code à placer dans le fichier <b>password.php</b>&nbsp;:";
				$lang_string['continue'] = "[&nbsp;Continuer&nbsp;]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Connexion";
				$lang_string['instructions'] = "Veuillez entrer votre identifiant et mot de passe ci-dessous";
				$lang_string['username'] = "Identifiant&nbsp;:";
				$lang_string['password'] = "Mot de passe&nbsp;:";
				$lang_string['submit_btn'] = "&nbsp;Valider&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Félicitations&nbsp;!</h2><p/>Cliquez ci-dessous pour configurer votre blog et lui donner un nom.<p/><i>Maintenant que vous avez terminé l'installation, il est recommandé de supprimer les fichiers installXX.php de votre site web (c'est à dire install00.php à install06.php)</i></p>";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Vous n'êtes pas entrés.  Veuillez vérifier que vous avez dactylographié votre username et mot de passe correctement et essai encore.<p />";
				$lang_string['form_error'] = "Veuillez accomplir les champs de username et de mot de passe.";
				// Success
				$lang_string['btn_setup'] = "[&nbsp;Configuration&nbsp;]";
				$lang_string['btn_try_again'] = "[&nbsp;Essayer à nouveau&nbsp;]";
				break;
			case 'setup':
				$lang_string['title'] = "Configuration";
				$lang_string['instructions'] = "Vous pouvez modifier le nom de votre blog ainsi que vos informations personnelles.";
				$lang_string['blog_title'] = "Nom du blog :";
				$lang_string['blog_author'] = "Auteur :";
				$lang_string['blog_email'] = "Email: (Separate email address should be separated by a , comma - blank disables Contact Me option)"; // Updated 0.4.7
				$lang_string['blog_avatar'] = "Avatar URL: (Leave blank for none)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Pied de page :";
				$lang_string['blog_choose_language'] = "Choisissez votre langue :";
				$lang_string['blog_enable_comments'] = "Autoriser les commentaires d'utilisateurs"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Ouvrir les commentaires dans une fenêtre popup"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "Autoriser les lecteurs à noter les articles"; // <-- New 0.3.8
				$lang_string['blog_enable_stats'] = "Enable Stats Option in Menu"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Enable Most Recent Comments Listing"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Enable Most Recent Entries Listing"; // New for 0.4.7
				$lang_string['blog_email_notification'] = "Envoyez l'avis d'email quand des commentaires sont signalés"; // <-- New 0.3.7
				$lang_string['blog_enable_calendar'] = "Permettez Le Bloc De Calendrier/Archives"; // New for 0.4.6
				$lang_string['blog_enable_title'] = "Permettez le bloc plat de titre des textes (checkbox clair si le titre est dans le graphique d'en-tête)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Permettez Permalink sur des entrées de Blog"; // New for 0.4.6
				$lang_string['blog_enable_stats'] = "Enable Stats Option in Menu"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Enable Most Recent Comments Listing"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Enable Most Recent Entries Listing"; // New for 0.4.7
				$lang_string['blog_send_pings'] = "Envoyez weblog &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_enable_cache'] = "Permettez la cachette d'entrée de Blog (peut fournir l'augmentation de vitesse sur quelques serveurs)"; // New for 0.4.6
				$lang_string['blog_ping_urls'] = "Écrivez le plein URL (i.e. http://rpc.weblogs.com/RPC2) du service à &quot;ping&quot;.<br />(Vous pouvez écrire plus d'une adresse séparée par des virgules.)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback fournit une méthode d'avis entre les blogs.  Faites un autre blog savoir que vous liez à eux en leur envoyant un cinglement de trackback.  Voyez qui lie à votre blog en recevant des cinglements de trackback.  Vous pouvez entrer dans l'URIs pour cingler manuellement, ou pour essayer de le faire automatiquement par l'Automobile-Découverte."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Autoriser le trackback dans mon blog"; // <-- New 0.3.8
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
				$lang_string['cal_sunday'] = "Lundi"; // New for 0.4.6
				$lang_string['cal_monday'] = "Monday"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "Jour De Début De Semaine De Calendrier"; // New for 0.4.6
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
				$lang_string['header'] = "URL de Trackback pour cette entrée:";
				$lang_string['delete_btn'] = "Effacement";
				// Error Response
				$lang_string['error_add'] = "Erreur stockant des données de trackback.";
				break;
			case 'options':
				$lang_string['title'] = "Options";
				$lang_string['instructions'] = "Utilisez ce formulaire pour paramétrer les formats de date et de temps utilisés dans votre blog. Vous pouvez choisir une horloge sur 12 ou 24 heures, une date au format long ou court. Les champs d'aperçu se mettent automatiquement  jour et affichent le formatage choisi.";
				// Long Date
				$lang_string['ldate_title'] = "Format de date longue :";
				$lang_string['weekday'] = "Jour de la semaine";
				$lang_string['month'] = "Mois";
				$lang_string['day'] = "Jour";
				$lang_string['year'] = "Année";
				$lang_string['none'] = "Aucun";
				// Short Date
				$lang_string['sdate_title'] = "Format de date courte :";
				$lang_string['s_month'] = "Mois";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Jour";
				$lang_string['s_year'] = "Année";
				$lang_string['zero_day'] = "Laissez les zéros des jours";
				$lang_string['show_century'] = "Montrer le siècle";
				// Time
				$lang_string['time_title'] = "Format de l'heure:";
				$lang_string['12hour'] = "Horloge sur 12 heures";
				$lang_string['24hour'] = "Horloge sur 24 heures";
				$lang_string['before_noon'] = "Matin";
				$lang_string['after_noon'] = "Après-midi";
				// Date
				$lang_string['date_title'] = "Format d'affichage de la date :";
				$lang_string['long_date'] = "Date longue";
				$lang_string['short_date'] = "Date courte";
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
				$lang_string['preview'] = "Aperçu :";
				$lang_string['server_offset'] = "Server Offset:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Sauvegarde des paramtres de configuration impossible. Problme recontré durant l'exécution du script.<br /><br />Le Serveur a reporté l'erreur suivante ' :<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Thmes";
				$lang_string['instructions'] = "Employez le menu drop-down pour choisir un thme différent.";
				// Themes
				$lang_string['choose_theme'] = "Thmes:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>L'information non sauvée.  J'ai couru dans un problme tout en sauvant votre information.<br /><br />Serveur Rapporté:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Envoi d'image";
				$lang_string['instructions'] = "Cliquez sur le bouton ci-dessous pour choisir un fichier  envoyer.";
				$lang_string['select_file'] = "Choisir un fichier";
				$lang_string['upload_btn'] = "Envoyer";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Upload d'image impossible. Voici quelques informations : <br /><br />Le Serveur a reporté :<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "Résultats de la recherche";
				$lang_string['instructions'] = "Résultats de recherche pour <b>%string</b>:";
				$lang_string['not_found'] = "Auncun résultat trouvé";
				break;
			case 'contact': // <-- New 0.3.8
				$lang_string['title'] = "Contactez moi";
				$lang_string['instructions'] = "Remplissez le formulaire&nbsp;:";
				$lang_string['form_error'] = "Veuillez remplir les champs 'Sujet' et 'Commentaire'.";
				$lang_string['name'] = "Nom&nbsp;:";
				$lang_string['email'] = "Email&nbsp;:";
				$lang_string['subject'] = "Sujet&nbsp;:";
				$lang_string['comment'] = "Commentaire&nbsp;:";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				$lang_string['success'] = "<h2>Succès&nbsp;!</h2>Votre message a été envoyé.<p />";
				$lang_string['contact_capcha'] = "Anti-spam&nbsp;: valeur à recopier&nbsp;:&nbsp;"; // 0.4.2
				$lang_string['failure'] = "<h2>Erreur !</h2>Votre message n'a pas été envoyé. Très probablement anti le Spam n'a pas été écrit correctement.<p />";
				$lang_string['contactsent'] = "Message envoyé à travers le blog : ";  // New for 0.4.6
				$lang_string['IPAddress'] = "Adresse IP&nbsp;:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent&nbsp;:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>Le %s, %s a écrit&nbsp;:</i><br />\n<br />\n%s"; // New for 0.4.6.2
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
				$lang_string["title"] = "HTTP Error 403.8 - Accès De Page/Function Nié";
				$lang_string["errorline1"] = "La page ou fonctionnent vous a essayé de traiter exige l'utilisation des biscuits.";
				$lang_string["errorline2"] = "Reconstituez la fonctionnalité de biscuit dans votre logiciel de browser ou de protection et essayez votre demande encore.";
				$lang_string["clientid"] = "Identification De Client: ";
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = "HTTP Error 403.8 - Accès De Page/Function Nié";
				$lang_string["404"] = "HTTP Error 404 - Page/Function N'existe pas";
				$lang_string["error_404"] = "La page ou fonctionnent vous a essayé de traiter n'existe pas.";
				$lang_string["error_javascript"] = "La page ou fonctionnent vous a essayé exige du Javascript afin de fonctionner correctement.";
				$lang_string["error_emailnotsent"] = "Le message que vous avez essayé d'envoyer a échoué.";
				$lang_string["error_emailnotsentcapcha"] = "Le message que vous avez essayé d'envoyer a échoué parce que l'entrée Anti-spam était incorrecte ou des disparus.";
				$lang_string["clientid"] = "Identification De Client: ";
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
