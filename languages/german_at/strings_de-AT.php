<?php
	// Austrian German Language File
	// (c) 2006 Floria Klien, flowolf <at> klien <dot> cx
	//
	// Simple PHP Version: 0.4.9
	// Language Version:   0.4.9.1

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;			

		// Language: German
		$lang_string['language'] = 'german (AT) - by flowolf';
		$lang_string['locale'] = array('de_AT', 'at');
		$lang_string['rss_locale'] = 'de-AT';

		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-1';
		$lang_string['php_charset'] = 'ISO-8859-1';		
		setlocale( LC_TIME, $lang_string['locale'] );		

		// Some Global Strings		

		// Menu
		$lang_string['menu_links'] = "Links";
		$lang_string['menu_home'] = "Startseite";
		$lang_string['menu_contact'] = "Kontakt";
		$lang_string['menu_stats'] = "Statistik";
		$lang_string['menu_calendar'] = "Kalender";
		$lang_string['menu_archive'] = "Archiv";
		$lang_string['menu_viewarchives'] = "Archiv anschauen";
		$lang_string['menu_menu'] = "Men&uuml;";
		$lang_string['menu_add'] = "Eintrag Hinzuf&uuml;gen";
		$lang_string['menu_add_static'] = "Statische Seite Hinzuf&uuml;gen";
		$lang_string['menu_upload'] = "Bild Upload";
		$lang_string['menu_setup'] = "Einstellungen";
		$lang_string['menu_categories'] = "Kategorien";
		$lang_string['menu_info'] = "Meta Tags";
		$lang_string['menu_options'] = "Datum &amp; Zeit";
		$lang_string['menu_themes'] = "Themes";
		$lang_string['menu_colors'] = "Farben";
		$lang_string['menu_change_login'] = "User &Auml;ndern";
		$lang_string['menu_logout'] = "Ausloggen";
		$lang_string['menu_login'] = "Einloggen";
		$lang_string['menu_most_recent'] = "Neueste Kommentare";
		$lang_string['menu_most_recent_entries'] = "Neueste Eintr&auml;ge";
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks";
		$lang_string['menu_add_block'] = "Bl&ouml;cke";
		$lang_string['menu_emoticons'] = "Emoticons"; 
		$lang_string['menu_avatar'] = "Avatar"; 
		$lang_string['menu_moderation'] = "Moderation";

		// Counter
		$lang_string['counter_today'] = "Heute:"; 
		$lang_string['counter_yesterday'] = "Gestern:"; 
		$lang_string['counter_totalsidebar'] = "Gesamt:"; 
		$lang_string['counter_title'] = "Counter Gesamt"; 

		// Other
		$lang_string['home'] = 'Zur&uuml;ck zur Startseite';
		$lang_string['nav_next'] = 'Weiter';
		$lang_string['nav_back'] = 'Zur&uuml;ck';
		$lang_string['search_title'] = 'Suchen:';
		$lang_string['search_go'] = 'Los';
		$lang_string['page_generated_in'] = 'Seite in %s Sekunden generiert';		
		$lang_string['counter_total'] = 'Site Views: ';
		$lang_string['read_more'] = 'Weiterlesen...';

		// SB Functions
		$lang_string['sb_months'] = array( 'J&auml;nner', 'Feber', 'M&auml;rz', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember' );
		$lang_string['sb_default_title'] = 'Kein Titel';
		$lang_string['sb_default_author'] = 'Kein Autor';
		$lang_string['sb_default_footer'] = 'Keine Fusszeile';

		$lang_string['sb_edit'] = '&auml;ndern';
		$lang_string['sb_delete'] = 'l&ouml;schen';
		$lang_string['sb_permalink'] = 'Permalink';
		$lang_string['sb_trackback'] = 'Trackbacks';
		$lang_string['sb_relatedlink'] = 'Links zum Thema';		

		$lang_string['sb_add_comment_btn'] = 'Kommentar schreiben';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'Kommentar';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'Kommentare';		

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' mal gesehen';

		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' mal gesehen';		

		$lang_string['sb_add_link_btn'] = '+ Link';
		$lang_string['sb_rate_entry_btn'] = 'Anklicken um Artikel zu beurteilen';		

		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
			$lang_string['label_subject'] = "Titel:";
			$lang_string['label_insert'] = "Spezial Inhalt:";
			$lang_string['btn_bold'] = " b ";
			$lang_string['btn_italic'] = " i ";
			$lang_string['btn_image'] = "img";
			$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "Weiterlesen";
			$lang_string['view_images'] = "Upgeloadete Bilder";
			$lang_string['label_entry'] = "Eintrag:";
			$lang_string['btn_preview'] = "&nbsp;Vorschau&nbsp;";
			$lang_string['btn_post'] = "&nbsp;Bloggen&nbsp;";
			$lang_string['file_name'] = "Statischer File Name: (keine Leerzeichen oder Fileextensions)";

			// Javascript Strings
			$lang_string['insert_styles'] = "Gib den Text ein der formatiert werden soll:";
			$lang_string['insert_image'] = "Gib die URL f&uuml; dein Bild ein:"; //fixxxme java
			$lang_string['insert_url1'] = "Gib den Linktext ein (optional):";
			$lang_string['insert_url2'] = "Gib die komplette URL des Links ein:";
			$lang_string['insert_url3'] = "Soll der Link in einem neuen Fenster ge&ouml;ffnet werden? (Optional):";
			$lang_string['form_error'] = "Bitte vervollst&auml;ndige den Title und den Eintrag.";	

			// More Javascript Strings
			$lang_string['insert_image_optional'] = 'optional:';
			$lang_string['insert_image_width'] = 'Breite (optional):';
			$lang_string['insert_image_height'] = 'H&ouml;he (optional):'; //fixxxme java
			$lang_string['insert_image_popup'] = 'Popup beim Anklicken anzeigen? (optional):';
			$lang_string['insert_image_float'] = 'Float (optional):';
		
			$lang_string['day'] = 'Tag';
			$lang_string['month'] = 'Monat';
			$lang_string['year'] = 'Jahr';
			$lang_string['hour'] = 'Stunde';
			$lang_string['minute'] = 'Minute';
			$lang_string['second'] = 'Sekunde';
		}	

		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Eintrag hinzuf&uuml;gen";
				$lang_string['instructions'] = "Fertig zum Bloggen? F&uuml;lle das Formular aus und klicke auf Vorschau um zu sehen wie der Eintrag ausschaut. Klicke auf Bloggen um den Eintrag zu senden.";
				$lang_string['title_ad'] = "Best&auml;tige Trackback Pings";
				$lang_string['instructions_ad'] = "Das sind die automatisch gefundenen URIs die du pingen wirst. Wenn du eine URI nicht pingen willst, dann entferne unten den Haken. Dann klicke auf OK um die angehakten URIs zu pingen oder klicke auf Abbrechen um &uuml;berhaupt nicht zu pingen.";
				$lang_string['label_tb_ping'] = "Trackbackping(s) die gesendet werden (durch Beistriche getrennt)";
				$lang_string['label_tb_autodiscovery'] = "autodiscovery";
				$lang_string['label_relatedlink'] = "Link zum Thema";
				$lang_string['label_categories'] = "Kategorien";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Vorschau / Eintrag bearbeiten";
				$lang_string['instructions_preview'] = "So schaut dein Eintrag aus. Wenn du Textmarker oder Bilder verwendest vergiss nicht alle Tags zu schliessen";
				$lang_string['title_update'] = "Eintrag aktualisieren";
				$lang_string['instructions_update'] = "Du kannst deinen Eintrag in dem unteren Formular &auml;ndern. Klicke auf Vorschau oder Bloggen wenn du fertig bist.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Abbrechen&nbsp;";

				// Error Response
				$lang_string['error'] = "<h2>Hoppala!</h2>Dein Eintrag konnte nicht gespeichert werden. Es gab einen Fehler w&auml;hrend des Speicherns.<br /><br /> Der Server meldet: <br />";
				$lang_string['success'] = "<h2>Juhuuu!</h2>Dein Eintrag wurde erfolgreich gespeichert.";

				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Statische Seite hinzuf&uuml;gen";
				$lang_string['instructions'] = "F&uuml;lle das untere Formular aus um eine statische Seite zu erstellen. Anders als normale Eintr&auml;ge erscheinen statische Seiten, seitlich in der Men&uuml;leiste. Sie dienen als Seiten die st&auml;ndig erreichbar sein sollen, so wie: &Uuml;ber mich, Kontakt Seiten, Impressum, etc. Klicke auf Vorschau um zu sehen wie die statische Seite aussehen wird, oder klicke auf Bloggen um die Seite zu senden und zu speichern.";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Vorschau / Statische Seite bearbeiten";
				$lang_string['instructions_preview'] = "So schaut deine statische Seite aus. Wenn du Textmarker oder Bilder verwendest, vergiss nicht alle Tags zu schliessen.";
				$lang_string['title_update'] = "Statische Seite aktualisieren";
				$lang_string['instructions_update'] = "Du kannst deinen Eintrag bearbeiten, indem du das untere Formular bearbeitest. Klicke auf Vorschau oder Bloggen wenn du fertig bist.";
				$lang_string['form_error'] = "Bitte vervollst&auml;ndige den Title, den Eintrag und den Namen.";

				// Error Response
				$lang_string['error'] = "<h2>Hoppala!</h2>Dein Eintrag konnte nicht gespeichert werden. Es gab einen Fehler w&auml;hrend des Speicherns.<br /><br /> Der Server meldet: <br />";
				break;

			case 'add_block':

				// Add / Manage Blocks
				$lang_string['title'] = "Block hinzuf&uuml;gen / &auml;ndern";
				$lang_string['instructions'] = "Individuellen Block hinzuf&uml;gen";
				$lang_string['up'] = "rauf";
				$lang_string['down'] = "runter";
				$lang_string['edit'] = "&auml;ndern";
				$lang_string['delete'] = "l&ouml;schen";
				$lang_string['block_name'] = "Block Name:";
				$lang_string['block_content'] = "Block Inhalt:";
				$lang_string['instructions_edit'] = "Du &auml;nderst gerade diesen Block:";
				$lang_string['instructions_modify'] = "Unten klicke um den Block anzupassen:";
				$lang_string['submit_btn_edit'] = "Block &Auml;ndern";
				$lang_string['submit_btn_add'] = "Block hinzuf&uuml;gen";
				$lang_string['form_error'] = "Bitte vervollst&auml;ndige den Block Namen.";
				break;

			case 'add_link':
				$lang_string['static_pages'] = "Statische Seiten:";

				// Add / Manage Links
				$lang_string['title'] = "Links hinzuf&uuml;gen / &auml;ndern";
				$lang_string['instructions'] = "F&uuml;ge beliebige Links zu andern Seiten hinzu. F&uuml;lle das untere Formular aus und klicke auf Link hinzuf&uuml;gen um einen Link hinzuzuf&uuml;gen. Klicke rauf oder runter um die Position des Links in der Liste zu ver&auml;ndern. Klicke auf &auml;ndern um den Link anzupassen. Klicke auf l&ouml;schen um den Link zu l&ouml;schen.";
				$lang_string['up'] = "rauf";
				$lang_string['down'] = "runter";
				$lang_string['edit'] = "&auml;ndern";
				$lang_string['delete'] = "l&ouml;schen";
				$lang_string['link_name'] = "Link Name:";
				$lang_string['link_url'] = "Link URL: (optional. Leer lassen um einen Trennerbalken zu erstellen.)";
				$lang_string['instructions_edit'] = "Du &auml;nderst gerade den Link:";
				$lang_string['instructions_modify'] = "Unten klicken um den Link anzupassen:";
				$lang_string['submit_btn_edit'] = "Link &Auml;ndern";
				$lang_string['submit_btn_add'] = "Link hinzuf&uuml;gen";
				$lang_string['form_error'] = "Bitte vervollst&auml;ndige den Namen.";
				break;

			case 'categories':

				// Add / Manage Links
				$lang_string['title'] = "Kategorien hinzuf&uuml;gen / verwalten";
				$lang_string['instructions'] = "Verwende das untere Formular um Kategorien hinzuzuf&uml;gen und zu &auml;ndern. Jede Kategorie sollte im Format 'Kategoriename (eindeutige nummer)' sein. R&uuml;cke Kategorien ein um Hirarchien zu erstellen. Beispiel:</b><br />Allgemein (1)<br />News (3)<br />&nbsp;&nbsp;Ank&uuml;ndigungen (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Verschiedenes (7)<br />Technik (2)<br />";
				$lang_string['error'] = "Fehler";
				$lang_string['current_categories'] = "Aktuelle Kategorien";
				$lang_string['no_categories_found'] = "Keine Kategorien gefunden";
				$lang_string['category_list'] = "Kategorien Liste:";
				$lang_string['validate'] = "Validieren";
				$lang_string['submit_btn'] = "&nbsp;Senden&nbsp;";
				break;

			case 'colors':
				// Change Colors
				$lang_string['title'] = "Farben &auml;ndern";
				$lang_string['instructions'] = "Du kannst die Farben f&uuml;r Farbe und Hintergrund deines Blogs ver&auml;ndern. Zuerst w&auml;hle ein Feld, und verwende dann den Farbmischer um deine Farbe zu w&auml;hlen. Der Wert &auml;ndert sich automatisch.";
				$lang_string['bg_color'] = "Hintergrund Seite";
				$lang_string['main_bg_color'] = "Hintergrund Hauptseite";
				$lang_string['border_color'] = "Seitenkante";
				$lang_string['inner_border_color'] = "Innere Kante";
				$lang_string['header_bg_color'] = "Hinterkrund Kopfzeile";
				$lang_string['header_txt_color'] = "Kopfzeile Text";
				$lang_string['menu_bg_color'] = "Hintergrund Men&uuml;";
				$lang_string['footer_bg_color'] = "Hintergrund Fusszeile";
				$lang_string['txt_color'] = "Haupttext";
				$lang_string['headline_txt_color'] = "Kopfzeilentext";
				$lang_string['date_txt_color'] = "Datumstext";
				$lang_string['footer_txt_color'] = "Fusszeilentext";
				$lang_string['link_reg_color'] = "Link Default";
				$lang_string['link_hi_color'] = "Link Hover";
				$lang_string['link_down_color'] = "Link Aktiv";

				// More Colors
				$lang_string['entry_bg'] = "Eintragshintergrund";
				$lang_string['entry_title_bg'] = "Titelhintergrund";
				$lang_string['entry_border'] = "Eintragskante";
				$lang_string['entry_title_text'] = "Eintragstiteltext";
				$lang_string['entry_text'] = "Eintragstext";
				$lang_string['menu_bg'] = "Men&uuml;hintergrund";
				$lang_string['menu_title_bg'] = "Men&uuml;titelhintergrund";
				$lang_string['menu_border'] = "Men&uuml;kante";
				$lang_string['menu_title_text'] = "Men&uuml;titletext";
				$lang_string['menu_text'] = "Men&uuml;text";
				$lang_string['menu_link_reg_color'] = "Men&uuml;link Default";
				$lang_string['menu_link_hi_color'] = "Men&uuml;link Hover";
				$lang_string['menu_link_down_color'] = "Men&uuml;link Active";

				// Submit
				$lang_string['color_preset'] = "Farbschemen:";
				$lang_string['scheme_name'] = "Gib ein beliebiges Farbschema ein:";
				$lang_string['scheme_file'] = "Gib einen Namen f&uuml;r dein Farbschema ein: (keine Leerzeichen und Fileextensions)";
				$lang_string['save_btn'] = "&nbsp;Speichern&nbsp;";
				$lang_string['form_error'] = "Bitte gib deinem Farbschema einen Namen.";
				$lang_string['submit_btn'] = "&nbsp;Senden&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'Das aktuelle Schema erlaubt keine eigenen Farben.';

				// Error Response
				$lang_string['error'] = "<h2>Hoppala!</h2>Die Informationen wurden nicht gespeichert. Es gab ein Problem beim Speichern deiner &Auml;nderungen.<br /><br />Der Server meldet:<br />";
				$lang_string['success'] = "<h2>FArben gespeichert!</h2>Die Information wurde erfolgreich gespeichert.";
				break;

			case 'comments':
				// Comments
				$lang_string['name'] = "Name:"; 
				$lang_string['email'] = "Email:";
				$lang_string['homepage'] = "Homepage:";
				$lang_string['comment'] = "Kommentar:";
				$lang_string['IPAddress'] = "IP Adresse:";
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2 // to be edited when definition and use is clear.
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2 // to be edited when definition and use is clear.
				
				$lang_string['comment_capcha'] = "Anti-Spam: Gib <b>%s</b> ein"; 
				$lang_string['title'] = "Kommentare";
				$lang_string['header'] = "Kommentar hinzuf&uuml;gen";
				$lang_string['instructions'] = "F&uuml;lle das Formular aus um dein Kommentar hinzuzuf&uuml;gen.";
				$lang_string['comment_name'] = "Dein Name:";
				$lang_string['comment_email'] = "Email:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['commentposted'] = "Neues Kommentar geposted am: "; // to be edited when definition and use is clear.
				$lang_string['comment_remember'] = "Meine Daten merken:";
				$lang_string['comment_text'] = "Kommentar:";
				$lang_string['post_btn'] = "&nbsp;Kommentar abschicken&nbsp;";
				$lang_string['delete_btn'] = "l&ouml;schen";
				$lang_string['ban_btn'] = "ip sperren"; 
				$lang_string['expired_comment1'] = "Es tut uns leid, neue Kommentare sind nach ";
				$lang_string['expired_comment2'] = " Tagen nicht mehr erlaubt.";

				$lang_string['blacklisted'] = "Entschuldigung. Deine IP wurde gesperrt. Kommentare sind nicht erlaubt.";
				$lang_string['bannedword'] = "Dein Kommentar, die URL, dein Name oder deine Emailadresse enth&auml;lt Worte die vom Administrator nicht erlaubt sind. Dein Kommentar wurde NICHT gesendet.";
				$lang_string['nocomments'] = "Kommentare sind f&uuml; diesen Eintrag nicht verf&uuml;gbar.";

				// Error Response
				$lang_string['error_add'] = "<h2>Hoppala!</h2>Dein Kommentar wurde nicht gespeichert. Es gab ein Problem beim Speichern des Kommentars.<br /><br />Der Server meldet:<br />";
				$lang_string['error_delete'] = "<h2>Hoppala!</h2>Das Kommentar wurde nicht gel&ouml;scht. Es gab ein Problem beim L&ouml;schen des Kommentars.<br /><br />Der Server meldet:<br />";
				$lang_string['error_ban'] = "<h2>Hoppala!</h2>Die IP  wurde nicht zu den gesperrrten IPs hinzugef&uuml;gt.<br /><br />Der Server meldet:<br />";
				$lang_string['success_add'] = "<h2>Kommentar hinzugef&uuml;gt!</h2>Dein Kommentar wurde erfolgreich gespeichert.";
				$lang_string['success_delete'] = "<h2>Kommentar gel&ouml;scht!</h2>Der Kommentar wurde gel&ouml;scht."; 
				$lang_string['success_ban1'] = "<h2>IP gesperrt!";
				$lang_string['success_ban2'] = "</h2>Um diese Sperre aufzuheben, benutze die Modertionsoption im Einstellungsmen&uuml;."; 
				$lang_string['error_noip'] = "Es wurde keine IP gefunden, die auf die Blacklist gesetzt werden kann.";
				$lang_string['form_error'] = "Bitte gib in die Felder: Namen, Kommentar und Anti-Spam etwas ein.";
				break;

			case 'delete':
				$lang_string['title'] = "Eintrag l&ouml;schen";
				$lang_string['instructions'] = "Das ist der Einrag den du l&ouml;schen willst. Bitte stelle sicher, dass dies wirklich der Eintrag ist den du l&ouml;schen willst. Es gibt kein Zur&uuml;ck...";
				$lang_string['ok_btn'] = "&nbsp;Ja l&ouml;schen&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Nicht l&ouml;schen&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Hoppala!</h2>Der Eintrag konnte nicht gel&ouml;scht werden.<br /><br />Der Server meldet:<br />";
				$lang_string['success'] = "<h2>Eintrag gel&ouml;scht!</h2>Der Eintrag wurde gel&ouml;scht.";
				break;

			case 'delete_static':
				$lang_string['title'] = "Statische Seite l&ouml;schen";
				$lang_string['instructions'] = "Das ist die Statische Seite, die du l&ouml;schen willst. Bitte stelle sicher, dass dies wirklich die Statische Seite ist, die du l&ouml;schen willst. Es gibt kein Zur&uuml;ck...";
				$lang_string['ok_btn'] = "&nbsp;Ja l&ouml;schen&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Nicht l&ouml;schen&nbsp;";
                                // Error Response
				$lang_string['error'] = "<h2>Hoppala!</h2>Die Statische Seite konnte nicht gel&ouml;scht werden.<br /><br />Der Server meldet:<br />";
				$lang_string['success'] = "<h2>Statische Seite gel&ouml;scht!</h2>Die statische Seite wurde gel&ouml;scht.";
				break;

			case 'image_list':
				$lang_string['title'] = "Bilderliste";
				$lang_string['instructions'] = "Klicke auf die Links um dir die Bilder anzuschauen.<br /><br />Ein Bild in einem Eintrag einf&uuml;gen:<br />1) Strg-Klick auf einen Link. Dann 'Link Kopieren' w&auml;hlen.<br />2) Gehe zur^uuml;ck zur Eintrag hinzuf&uuml;gen oder Eintrag &auml;ndern Seite.<br />3) Klicke auf 'img' und f&uuml;ge den Link ins Fenster ein.";
				break;

			case 'info':
				$lang_string['title'] = "Meta-Daten Informationen";
				$lang_string['instructions'] = "Diese Informationen werden f&uuml;r &quot;Meta-Daten&quot; verwendet. Diese helfen Suchmaschinen deine Seite zu identifizieren, und folglich Anderen &uuml;ber Suchmaschinen deine Seite zu finden. Informationen k&ouml;nnen auch in RSS Feeds verwendet werden.";
				$lang_string['info_keywords'] = "Schl&uuml;sselworte: (Liste von Worten, durch Beistriche getrennt.)";
				$lang_string['info_description'] = "Beschreibung: (Eine Zusammenfassung oder eine freie Textbeschreibung deiner Seite.)";
				$lang_string['info_copyright'] = "Urheberrechte: (Copyright Statement oder Link zu einer Seite die diese Information enth&auml;lt.)";
				$lang_string['submit_btn'] = "&nbsp;Speichern&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Hoppala!</h2>Die Informationen konnten nicht gespeichert werden. Es gab ein Problem beim Speichern.<br /><br />Der Server meldet:<br />";
				$lang_string['success'] = "<h2>Meta-Daten gespeichert!</h2>Die Daten wurden erfolgreich gespeichert."; 
				$lang_string['form_error'] = "Bitte lasse die Felder f&uuml;r Titel und Author nicht leer.";
				break;

			case 'index':
				// Index
				break;

			case 'static':
				// Index
				break;

			case 'rating':
				$lang_string['error'] = "<h2>Hoppala!</h2>Die Information wurde nicht gespeichert. Es gab ein Problem beim Speichern.<br /><br />Der Server meldet:<br />";
				$lang_string['success'] = "<h2>Stimme gespeichert!</h2>Deine Wertung wurde erfolgreich gespeichert.";
				break;

			case 'login':
				$lang_string['upgrade'] = "<h2>Upgrade</h2>";
				$lang_string['upgrade_count'] = "%n Kommentarfiles brauchen ein Upgrade:";
				$lang_string['upgrade_url'] = "Kommentare Upgraden";
				$lang_string['title'] = "Einloggen";
				$lang_string['instructions'] = "Bitte gib deinen Usernamen und dein Passwort ein";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Passwort";
				$lang_string['submit_btn'] = "&nbsp;Senden&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Juhuuuu!</h2>Du bist jetzt eingeloggt. Viel Spass beim Bloggen!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hoppala!</h2>Du bist nicht eingeloggt. Bitte &uuml;berpr&uuml;fe deinen Usernamen und dein Passwort und versuchs noch einmal.<p />";
				$lang_string['form_error'] = "Bitte gib in deinen Usernamen und dein Passwort ein.";
				break;

			case 'logout':
				$lang_string['title'] = "Ausloggen";
				$lang_string['instructions'] = "<h2>Hoppala!</h2>Ausloggen hat nicht geklappt. Coockie konnte nicht gel&ouml;scht werden. Warum bist du immer noch eingeloggt?<p />";
				$lang_string['success'] = "<h2>Baba!</h2>Du bist jetzt ausgeloggt.<p />";
				break;

			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Hoppala!</h2>Die Information wurde nicht gespeichert. Es gab ein Problem beim Speichern.<br /><br />Der Server meldet:<br />";
				break;

			case 'set_login':
				$lang_string['title'] = "Username und Passwort &auml;ndern";
				$lang_string['instructions'] = "Verwende das untere Formular um deinen Usernamen und/oder dein Passwort zu &auml;ndern. Gib den gew&uuml;nschten Usernamen und das gew&uuml;nschte Passwort ein.";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Passwort:";
				$lang_string['submit_btn'] = "&nbsp;Speichern&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Juhuuuu!</h2>Dein Username und dein Passwort ist aktiv. Viel Spass beim Bloggen!<br />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hoppala!</h2>Informationen wurden nicht gespeichert. Es gab ein Problem beim Speichern deines Passworts und/oder deines Usernamens.<br /><br />Der Server meldet:<br />";
				$lang_string['form_error'] = "Bitte gib in die Felder Username und Passwort etwas ein.";
				$lang_string['explanation'] = "In den letzten Versionen hat sich die Passwortstruktur ver&auml;ndert. Es gibt nicht mehr die M&ouml;glichkeit 
das Passwort und/oder den Usernamen innerhalb den Blogcodes zu &auml;ndern. Um Passwort und/oder Username zu &auml;ndern musst du das File '/config/password.php' 
l&ouml;schen. Versichere dich, dass die Files 'install*.php' auf dem Server vorhanden sind. Sobald das getan ist, aktualisiere diese Seite (oder logge dich aus). 
Es wird eine Seite erscheinen, die dir das erstellen deines Usernamen und/oder deines Passworts erm&ouml;glicht, genau so am Anfang, als du diese Seite eingerichtet hast.";
				break;

			case 'install00':
				$lang_string['title'] = "Willkommen";
				$lang_string['instructions'] = "Danke dass du doch f&uuml;r Simple PHP Blog entschieden hast!";
				$lang_string['blog_choose_language'] = "W&auml;hle eine Sprache:";
				$lang_string['submit_btn'] = "&nbsp;Speichern&nbsp;";
				break;

			case 'install01':
				$lang_string['title'] = "Willkommen";
				$lang_string['instructions'] = "
				Danke dass du Simple PHP Blog gew&auml;hlt hast!<br /><br />Simple PHP Blog ist ein einfaches Blogsystem. Es ben&ouml;tigt PHP 4.1 oder h&ouml;her, und Schreibberechtigungen am Server. Alle Informationen werden in normalen Textfiles gespeichert, sodass keine Datenbank ben&ouml;tigt wird.<br /><br />
				Um zu beginnen, ben&ouml;tigt Simple PHP Blog drei Folder (<b>config</b>, <b>content</b>, and <b>images</b>) in denen die Informationen gespeichert werden sollen. Dann erstellst du dein Passwort und kannst beginnen zu bloggen.<br /><br />
				<b>Klicke unten, um das Setup zu beginnen:</b>";
				$lang_string['begin'] = "[ Setup beginnen ]";
				break;

			case 'install02':
				$lang_string['title'] = "Setup";
				$lang_string['instructions'] = "Versuche die Folder <b>config</b>, <b>content</b>, and <b>images</b> zu erstellen:";
				$lang_string['folder_exists'] = "Juhuuuu! Folder existieren schon. Nichts ver&auml;ndert...";
				$lang_string['folder_failed'] = "Hoppala! Konnte die Folder nicht erstellen...";
				$lang_string['folder_success'] = "Juhuuuu! Folder erstellt...";
				// Help
				$lang_string['help'] = "
				<h2>Hoppala!</h2>
				Die Folder konnten nicht erstellt werden!<br /><br />Das kann folgende Ursachen haben:<br />
				<ol>
				<li>Die <b>Schreibrechte</b> sind nicht richtig gesetzt.</li>
				<li>Die <b>UID</b>s (user IDs) f&uuml;r alle Files und Folder m&uuml;ssen &uuml;bereinstimmen.</li>
				</ol>
				Befolge die unteren Anweisungen und Klicke auf <b>Nocheinmal probieren</b>:<br />
				<ol>
				<li>Erstelle die Folder von Hand: <b>config</b>, <b>content</b>, und <b>images</b>.</li>
				<li>Erlaube <b>Schreibrechte</b> bei diesen Foldern: In deinem FTP-Programm m&uuml;ssen Besitzer (Owner), User und Andere (World) Lese- (<b>Read</b>) und Schreibrechte (<b>Write</b>) haben. <i>(Du musst unter Umst&auml;nden deinen Serviceprovider kontaktieren. Diser muss dann diese &Auml;nderungen vornehmen...)</i></li>
				<li>Stelle sicher dass die UIDs von allen Files und Foldern &uuml;bereinstimmen. <i>(Du musst unter Umst&auml;nden deinen Serviceprovider kontaktieren. Diser muss dann diese &Auml;nderungen vornehmen...)</i></li>
				</ol>";
				$lang_string['try_again'] = "[ Nocheinmal probieren ]";
				// Success
				$lang_string['success'] = "<h2>Juhuuuu!</h2>Folder erfolgreiche erstellt!<p /><b>Klicke unten um fortzufahren:</b>";
				$lang_string['continue'] = "[ Weiter ]";
				break;

			case 'install03':
				$lang_string['supported'] = "<b>Dein Webserver unterst&uuml;tzt folgende Verschl&uuml;sselungsarten:</b>";
				$lang_string['standard'] = "Standard DES Verschl&uuml;sselung: ";
				$lang_string['extended'] = "Extended DES Verschl&uuml;sselung: ";
				$lang_string['MD5'] = "MD5 Verschl&uuml;sselung: ";
				$lang_string['blowfish'] = "Blowfish Verschl&uuml;sselung: ";
				$lang_string['enabled'] = "eingeschaltet";
				$lang_string['disabled'] = "ausgeschaltet";
				$lang_string['using_standard'] = "<b>Verwende Standard DES Verschl&uuml;sselung...</b>";
				$lang_string['using_extended'] = "<b>Verwende Extended DES Verschl&uuml;sselung...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Verwende MD5 Verschl&uuml;sselung...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Verwende Blowfish Verschl&uuml;sselung...</b>";
				$lang_string['using_unknown'] = "<b>Verwende unbekannte Verschl&uuml;sselung...</b>";
				$lang_string['salt_length'] = " <i>(Salt L&auml;nge = %string)</i><br />";
				$lang_string['title'] = "Username &amp; Password erstellen";
				$lang_string['instructions'] = "Verwende das untere Formular um deinen Usernamen und dein Passwort zu erstellen.";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Passwort:";
				$lang_string['submit_btn'] = "&nbsp;Speichern&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Gratulation!</h2>Du bist jetzt eingeloggt. Klicke unten um die Setupseite zu besuchen, auf der du deinen Blog benennen kannst. Viel Spass beim Bloggen!<p />";
				$lang_string['btn_setup'] = "[ Setup ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hoppala!</h2>Information wurde nicht gespeichert. Es gab ein Problem beim Speichern deines Usernamen und/oder deines Passworts.<br /><br />Der Server meldet:<br />";
				$lang_string['form_error'] = "Bitte gib in die Felder Username und Passwort etwas ein.";
				break;

			case 'install04':
				$lang_string['title'] = "Erstelle das Passwortfile";
				$lang_string['instructions'] = "Jetzt kommt der schwierige Teil:<br />
				<ol>
				<li>&Ouml;ffne einen Text Editor. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, Nano, Emacs, etc...)</i></li>
				<li>Erstelle ein neues Textdokument.</li>
				<li>Kopiere den unteren Code und f&uuml;ge ihn in das Textdokument ein.</li>
				<li>Speichere das File unter dem Namen <b>password.php</b> <i>(Stelle sicher dass du es im <b>text</b> oder <b>plain text</b> format speicherst.)</i></li>
				<li>&Ouml;ffne eine FTP-Verbindung.</li>
				<li>Lade das neue File <b>password.php</b> in den <b>config</b> Folder auf deiner Seite.</li>
				<li>L&oum;sche <b>password.php</b> von deiner Festplatte.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Achtung: Wenn du dein Passwort und/oder deinen Usernamen zur&uuml;cksetzen willst (weil du ihn zum Beispiel vergessen hast), l&ouml;sche das <b>password.php</b> File im <b>config</b> Folder deiner Webseite. Wenn du die Seite wieder aufrufst, gehst du wieder durch diesen Installationsprozess...</i>";
				$lang_string['code'] = "Code f&uuml;r das <b>password.php</b> File:";
				$lang_string['continue'] = "[ Weiter ]";
				break;

			case 'install05':
			case 'install06':
				$lang_string['title'] = "Einloggen";
				$lang_string['instructions'] = "Bitte gib deinen Usernamen und dein Passwort unten ein";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Passwort";
				$lang_string['submit_btn'] = "&nbsp;Senden&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Gratulation!</h2>Du bist jetzt eingeloggt.<p />
Klicke unten um die Setupseite zu besuchen. Dort kannst du deinen Blog einrichten.<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hoppala!</h2>Du bist nicht eingeloggt. Bitte &uuml;berpr&uuml;fe dein Passwort und deinen Usernamen und versuche es noch einmal.<p />";
				$lang_string['form_error'] = "Bitte gib in die Felder Username und Passwort etwas ein.";
				// Success
				$lang_string['btn_setup'] = "[ Setup ]";
				$lang_string['btn_try_again'] = "[ Nocheinmal versuchen ]";
				break;

			case 'setup':
				$lang_string['title'] = "Setup";
				$lang_string['instructions'] = "Du kannst den Namen deines Blogs und deine pers&ouml;nlichen Informationen unten eingeben.";
				$lang_string['blog_title'] = "Blog Name:";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "Email: (Email adresse sollte durch einen Beistrich getrennt sein - Leer lassen um die Kontakt Option abzuschalten)"; 
				$lang_string['blog_avatar'] = "Avatar URL: (Leer lassen f&uuml;r keines)."; 
				$lang_string['blog_footer'] = "Fusszeile:";
				$lang_string['blog_choose_language'] = "W&auml;hle eine Sprache:";
				$lang_string['blog_enable_comments'] = "Kommentare einschalten";
				$lang_string['blog_comments_popup'] = "Kommentare in einem Popup Fenster &ouml;ffnen";
				$lang_string['blog_enable_voting'] = "Leserbewertung aktivieren";
				$lang_string['blog_enable_cache'] = "Blog-Entry-Cache aktivieren (kann zu Geschwindigkeitsgewinn auf manchen Servern f&uuml;hren)"; 
				$lang_string['blog_enable_calendar'] = "Kalendar Block aktivieren"; 
				$lang_string['blog_enable_archives'] = "Archiv Block aktivieren";
				$lang_string['blog_enable_counter'] = "Z&auml;hler in der Seitenleiste aktivieren";
				$lang_string['blog_counter_hours'] = "Anzahl der Stunden bis Hits wieder gez&auml;ht werden (basiert auf spezifischer IP-Adresse):";
				$lang_string['blog_enable_login'] = "Login Link aktivieren (Bitte speichere \"login.php\" zuerst als Lesezeichen...)"; 
				$lang_string['blog_enable_title'] = "Texttitle einschalten (nicht anhaken wenn die Kopfgrafik den Titel beinhaltet)"; 
				$lang_string['blog_enable_permalink'] = "Permalink bei Eintr&auml;gen einschalten"; 
				$lang_string['blog_enable_capcha'] = "Anti-Spam aktivieren";
				$lang_string['blog_footer_counter'] = "Counter in der Fusszeile aktivieren";
				$lang_string['blog_enable_capcha_image'] = "Anti-Spam Bilder (nur GD library) / Anti-Spam Text Feld";
				$lang_string['blog_enable_stats'] = "Statistikoption im Men&uuml; einschalten"; 
				$lang_string['blog_enable_lastcomments'] = "Liste der neuesten Kommentare einschalten"; 
				$lang_string['blog_enable_lastentries'] = "Liste der neuesten Eintr&auml;ge einschalten"; 
				$lang_string['blog_email_notification'] = "Email senden wenn ein Kommentar geposted wird";
				$lang_string['blog_send_pings'] = "Weblog &quot;pings&quot; senden";
				$lang_string['blog_ping_urls'] = "Gib die volle URL (z.B. http://rpc.weblogs.com/RPC2) des service an um zu &quot;pingen&quot;.<br />(Du kannst mehr als eine Adresse angeben. Trenne sie durch Beistriche.)";
				$lang_string['blog_trackback_about'] = "Trackbacks geben dir die M&ouml;glichkeit zwischen Blogs Nachrichten auszutauschen. 
Lass einen anderen Blog wissen dass du zu einem Thema auf seinem Blog Stellung nimmst, 
und erfahre von anderen dass sie zu Themen auf 
deinem Blog Stellung nehmen.<br />
Du kannst entweder die URIs zum Pingen von Hand eingeben oder du versuchst es automatisch 
durch die Auto-Discovery.";
				$lang_string['blog_trackback_enabled'] = "Trackbacks in meinem Blog aktivieren";
				$lang_string['blog_trackback_auto_discovery'] = "Auto-Discovery aktivieren f&uuml; Eintr&auml;ge die eine URL enthalten";
				$lang_string['blog_max_entries'] = "Maximal Anzahl an Eintr&auml;gen die gezeigt werden soll:";
				$lang_string['blog_comment_tags'] = "Tags die in den Kommentaren erlaubt sind:";
				$lang_string['blog_gzip_about'] = "Seit PHP Version 4.0.4 hat PHP die M&ouml;glichkeit gzip (.gz) komprimierte Dateien 
zu schreiben und zu lesen um dabei Speicherplatz zu sparen.
PHP kann ausserdem Seiten komprimiert verschicken und so Bandbreite 
sparen.<br /><br/>
Zlib Unterst&uuml;tzung in PHP ist standardm&auml;ssig 
nicht aktiviert. Wenn die Kasterln nicht angehakt sind dann wird 
keine Komprimierung verwendet.";
				$lang_string['blog_enable_gzip_txt'] = "GZIP Komprimierung f&uuml;r lokale Daten aktivieren.";
				$lang_string['blog_enable_gzip_output'] = "GZIP Komprimierung f&uuml;r die HTTP &Uuml;bertragung aktivieren.";
				$lang_string['submit_btn'] = "&nbsp;Speichern&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Hoppala!</h2>Information wurde nicht gespeichert. Es gab ein Problem beim Speichern der Daten.<br /><br />Der Server meldet:<br />";
				$lang_string['success'] = "<h2>Einstellungen gespeichert!</h2>Daten wurden erfolgreich gespeichert.";
				$lang_string['form_error'] = "Bitte f&uuml;lle den Titel und den Autor aus.";
				$lang_string['label_entry_order'] = "Eintragssortierung:";
				$lang_string['select_new_to_old'] = "Neueste zuerst";
				$lang_string['select_old_to_new'] = "&Auml;lteste zuerst";
				$lang_string['label_comment_order'] = "Kommentarsortierung:";
				$lang_string['cal_sunday'] = "Sonntag";
				$lang_string['cal_monday'] = "Montag";
				$lang_string['label_calendar_start'] = "Starte Kalender am ";
				$lang_string['title_sidebar'] = "Navigationsleiste"; 
				$lang_string['title_comments'] = "Kommentare"; 
				$lang_string['title_trackback'] = "Trackbacks"; 
				$lang_string['title_compression'] = "Komprimierung"; 
				$lang_string['title_entries'] = "Eintr&auml;ge"; 
				$lang_string['title_general'] = "Allgemein"; 
				$lang_string['title_language'] = "Sprache"; 
				$lang_string['blog_comment_days_expiry'] = "Wie viele Tage darf zu einem Eintrag ein Kommentar verfasst werden? (0 heisst immer)"; 
				break;
			case 'moderation':
				$lang_string['title'] = "Moderationseinstellungen";
				$lang_string['instructions'] = "Du kannst die Automoderationslisten hier einstellen.";
				$lang_string['submit_btn'] = "&nbsp;Moderationseinstellungen speichern&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Hoppala!</h2>Information nicht gespeichert. Es gab ein Problem beim Speichern der Daten.<br /><br />Der Server meldet:<br />";
				$lang_string['success'] = "<h2>Einstellungen gespeichert!</h2>Daten wurden erfolgreich gespeichert.";
				$lang_string['banned_address_list_title'] = "<h2>Gesperrte IP Adressen</h2>";
				$lang_string['banned_address_list'] = "Unten findest du eine Liste mit IP-Adressen die gesperrt wurden und keine Kommentare verfassen d&uuml;rfen. Jede IP muss eine Zeile f&uuml;r sich haben und muss numerisch sein (keine DNS Namen). Wenn du eingeloggt bist kannst du IPs direkt aus der Kommentaransicht sperren.";
				$lang_string['banned_word_list_title'] = "<h2>Gesperrte Worte</h2>";
				$lang_string['banned_word_list'] = "Unten findest du eine Liste mit W&ouml;rtern die in den Kommentaren nicht erlaubt werden. Sowohl nicht im Text als auch in der URL. Jeder Einrag (Wort oder Wortgruppe) hat seine eigene Zeile. Die Kommentare werden Zeile f&uuml;r Zeile gepr&uuml;ft um eine Sperre durchzuf&uuml;hren.";
				break;
			case 'trackbacks':
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "Trackback URL f&uuml;r diesen Eintrag:";
				$lang_string['delete_btn'] = "l&ouml;schen";
				// Error Response
				$lang_string['error_add'] = "Fehler beim Speichern des Trackbacks.";
				$lang_string['error_delete'] = "<h2>Hoppala!</h2>Trackback wurde nicht gel&ouml;scht. Es gab ein Problem beim L&ouml;schen des Trackbacks.<br /><br />Der Server meldet:<br />";
				$lang_string['success_delete'] = "<h2>Trackback gel&ouml;scht!</h2>Der Trackback Link wurde gel&ouml;scht.";
				break;

			case 'options':
				$lang_string['title'] = "Optionen";
				$lang_string['instructions'] = "F&uuml;lle unten die Datumseinstellungen nach deinen W&uuml;nschen aus. Du kannst zwischen 12 und 24 Stundenformat w&auml;hlen und zwischen kurzen und langen Datumsformaten. Die Vorschau gibt dir einen Eindruck wie deine Einstellung ausschaut.";
				// Long Date
				$lang_string['ldate_title'] = "Langes Datums Format:";
				$lang_string['weekday'] = "Wochentag";
				$lang_string['month'] = "Monat";
				$lang_string['day'] = "Tag";
				$lang_string['year'] = "Jahr";
				$lang_string['none'] = "Nix";
				// Short Date
				$lang_string['sdate_title'] = "Kurzes Datums Format:";
				$lang_string['s_month'] = "Monat";
				$lang_string['s_mon'] = "Mon";
				$lang_string['s_day'] = "Tag";
				$lang_string['s_year'] = "Jahr";
				$lang_string['zero_day'] = "F&uuml;hrende Null beim Tag";
				$lang_string['show_century'] = "Jahrhundert anzeigen";
				// Time
				$lang_string['time_title'] = "Zeit Format:";
				$lang_string['12hour'] = "12-Stunden";
				$lang_string['24hour'] = "24-Stunden";
				$lang_string['before_noon'] = "Vormittag";
				$lang_string['after_noon'] = "Nachmittag";
				// Date
				$lang_string['date_title'] = "Datums Anzeige:";
				$lang_string['long_date'] = "Langes Datum";
				$lang_string['short_date'] = "Kurzes Datum";
				$lang_string['time'] = "Zeit";
				// Menu
				$lang_string['menu_title'] = "Datumsformat im Men&uuml;:";
				$lang_string['long_date'] = "Langes Datum";
				$lang_string['short_date'] = "Kurzes Datum";
				// Used in multiple places
				$lang_string['zero_day'] = "F&uuml;hrende Null f&uuml;r Tage";
				$lang_string['zero_month'] = "F&uuml;hrende Null f&uuml;r Monate";
				$lang_string['zero_hour'] = "F&uuml;hrende Null f&uuml;r Stunden";
				$lang_string['separator'] = "Trennzeichen:";
				$lang_string['preview'] = "Vorschau:";
				$lang_string['server_offset'] = "Server Abweichung:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Speichern&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Hoppala!</h2>Information wurde nicht gespeichert. Es gab ein Problem beim Speichern der Daten.<br /><br />Der Server meldet:<br />";
				$lang_string['success'] = "<h2>Optionen gespeichert!</h2>Daten wurden erfolgreich gespeichert.";
				break;

			case 'themes':
				$lang_string['title'] = "Themen";
				$lang_string['instructions'] = "Suche dir aus der Liste das gew&uuml;nschte Thema aus.";
				// Themes
				$lang_string['choose_theme'] = "Themen:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Speichern&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Hoppala!</h2>Information wurde nicht gespeichert. Es gab ein Problem beim Speichern der Daten.<br /><br />Der Server meldet:<br />";
				$lang_string['success'] = "<h2>Thema ausgew&auml;hlt!</h2>Information wurde erfolgreich gespeichert.";
				break;

			case 'upload_img':
				$lang_string['title'] = "Bild Upload";
				$lang_string['instructions'] = "Klicke auf den Knopf unten um ein Bild f&uuml;r den Upload auszuw&auml;hlen.";
				$lang_string['select_file'] = "Datei ausw&auml;hlen:";
				$lang_string['upload_btn'] = "Upload";
				// Error Response
				$lang_string['error'] = "<h2>Hoppala!</h2>Dein Bild wurde nicht gespeichert.<br /><br />Der Server meldet:<br />";
				$lang_string['success'] = "<h2>Bild upgeloadet!</h2>Das Bild wurde erfolgreich gespeichert"; 
				break;

			case 'search':
				$lang_string['title'] = "Suchergebnisse";
				$lang_string['instructions'] = "Suchergebnisse f&uuml;r <b>%string</b>:";
				$lang_string['not_found'] = "Nichts gefunden";
				break;

			case 'contact':
				$lang_string['contact_capcha'] = "Anti-Spam: enter";
				$lang_string['title'] = "Kontakt";
				$lang_string['instructions'] = "F&uuml;lle das Formular aus:";
				$lang_string['form_error'] = "Bitte f&uuml;lle den Betreff und die Nachricht aus.";
				$lang_string['name'] = "Name:";
				$lang_string['email'] = "Email:";				
				$lang_string['subject'] = "Betreff:";
				$lang_string['comment'] = "Nachricht:";
				$lang_string['submit_btn'] = "&nbsp;Abschicken&nbsp;";
				$lang_string['success'] = "<h2>Juhuuuu!</h2>Deine Nachricht wurde abgeschickt.<p />";
				$lang_string['failure'] = "<h2>Hoppala!</h2>Deine Nachricht wurde nicht gesendet. Wahrscheinlich hast du das Anti-Spamfeld nicht eingetragen.<br /><p />";
				$lang_string['contactsent'] = "Kontaktdaten: "; 
				$lang_string['IPAddress'] = "IP Adresse:"; 
				$lang_string['useragent'] = "Browser:"; 
				$lang_string['wrote'] = "<i>Am %s, schrieb %s:</i><br />\n<br />\n%s";
				break;

			case 'stats':
				$lang_string["title"] = "Statistik";
				$lang_string["general"] = "Allgemein";
				$lang_string["entry_info"] = "<b>%s</b> Eintr&auml;ge, die <b>%s</b> W&ouml;rter in <b>%s</b> Bytes speichern";
				$lang_string["comment_info"] = "<b>%s</b> Kommentare, die <b>%s</b> W&ouml;rter in <b>%s</b> Bytes speichern";
				$lang_string["trackback_info"] = "<b>%s</b> Trackbacks, die <b>%s</b> Bytes ben&ouml;tigen";
				$lang_string["static_info"] = "<b>%s</b> statische Seiten, die <b>%s</b> W&ouml;rter in <b>%s</b> Bytes speichern";
				$lang_string["most_viewed_entries"] = "10 meist gesehenen Eintr&auml;ge";
				$lang_string["most_commented_entries"] = "10 meist kommentierten Eintr&auml;ge";
				$lang_string["most_trackbacked_entries"] = "10 meist getrackten Eintr&auml;ge";
				$lang_string['vote_info'] = "<b>%s</b> Stimmen, gespeichert in <b>%s</b> Bytes";
				$lang_string["most_voted_entries"] = "10 Eintr&auml;ge mit den meisten Stimmen";
				$lang_string["most_rated_entries"] = "10 Eintr&auml;ge mit der h&ouml;chsten Wertung";
				break;

			case 'errorpage-nocookies':  
				$lang_string["title"] = 'HTTP Error 403.8 - Page/Function Access Denied';
				$lang_string["errorline1"] = 'Die Seite oder Funktion die du aufrufen wolltest ben&ouml;tigt Cookies.';
				$lang_string["errorline2"] = 'Aktiviere Cookies in deinem Browser oder in deiner Sicherheitssoftwareund probier es nocheinmal.';
				$lang_string["clientid"] = 'Client ID: ';
				break;

			case 'errorpage':  
				$lang_string["403.8"] = 'HTTP Error 403.8 - Page/Function Access Denied';
				$lang_string["404"] = 'HTTP Error 404 - Page/Function Does Not Exist';
				$lang_string["error_404"] = 'Die Seite oder Funktion die du aufrufen wolltest existiert nicht.';
				$lang_string["error_javascript"] = 'Die Seite oder Funktion die du aufrufen wolltest ben&ouml;tigt JavaScript um zu funktionieren.';
				$lang_string["error_emailnotsent"] = 'Das Senden der Nachricht, die du senden abschicken wolltest, ist fehlgeschlagen.';
				$lang_string["error_emailnotsentcapcha"] = 'Das Senden der Nachricht schlug fehl weil der Anti-Spam Eintrag nicht gestimmt hat oder gefehlt hat.';
				$lang_string["clientid"] = 'Client ID: ';
				break;

			case 'emoticons':
				$lang_string['title'] = "Emoticons Einstellungen";
				$lang_string['instructions'] = "Hake die Emoticons an die du verwenden willst. 
Schreibe in die K&auml;stchen die Tags die du durch ein Emoticon 
ersetzt haben willst. Es d&uuml;rfen mehrere Tags verwendet werden,
 trenne sie einfach durch Leerzeichen.<br /><br />

Zum Beispiel:<br />
:) :-) :SMILE: :HAPPY:<br /><br />

<i>(Es wird empfohlen die Tags l&auml;nger als 2 Zeichen zu machen, 
sonst k&ouml;nnen Dinge unerwartet ersetzt werden.)</i>";
				$lang_string["upload_instructions"] = 'Neue Emoticons uploaden:';
				$lang_string["upload_success"] = 'Juhuuuu! Bild wurde erfolgreich upgeloadet';
				$lang_string["upload_error"] = 'Fehler! Bild wurde nicht upgeloadet.';
				$lang_string["upload_invalid"] = 'Fehler! Bilddatei muss vom Typ png, jpg, oder gif sein.';
				$lang_string["save_success"] = 'Emoticoneinstellungen erfolgreich gespeichert!';
				$lang_string["save_error"] = 'Fehler! Emoticoneinstellungen nicht gespeichert.';
				$lang_string["save_button"] = 'Speichere Emoticons';
				break;

			case 'archives': 
				$lang_string['title'] = "Archiv";
				$lang_string['showall'] = "Alles zeigen";
				break;

			default:
				break;
		}
	}
?>
