<?php
	// Dutch Language File
	// (c) 2004 S. Klippert, klippy@users.sourceforge.net
	//
	// Simple PHP Version: 0.3.7
	// Language Version:   0.3.7.1
	
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: English
		$lang_string[ 'language' ] = 'Nederlands';
		
		// ISO Charset: ISO-8859-1
		$lang_string[ 'html_charset' ] = 'ISO-8859-1';
		$lang_string[ 'php_charset' ] = 'ISO-8859-1';
		
		$lang_string[ 'locale' ] = 'nl_NL'; // <-- New 0.3.7
		setlocale(LC_TIME, $lang_string[ 'locale' ] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string[ 'menu_links' ] = "Links";
		$lang_string[ 'menu_home' ] = "Home";
		$lang_string[ 'menu_contact' ] = "Contact Me"; // <-- New 0.3.8
		$lang_string[ 'menu_stats' ] = "Stats"; // <-- New 0.3.7r
		$lang_string[ 'menu_archive' ] = "Archief";
		$lang_string[ 'menu_menu' ] = "Menu";
		$lang_string[ 'menu_add' ] = "Bericht toevoegen";
		$lang_string[ 'menu_add_static' ] = "Vaste pagina toevoegen";
		$lang_string[ 'menu_upload' ] = "Afbeelding uploaden";
		$lang_string[ 'menu_setup' ] = "Instellingen";
		$lang_string[ 'menu_categories' ] = "Categories"; // 0.3.7q
		$lang_string[ 'menu_info' ] = "Informatie"; // <-- New 0.3.7
		$lang_string[ 'menu_options' ] = "Opties";
		$lang_string[ 'menu_themes' ] = "Stijlen";
		$lang_string[ 'menu_colors' ] = "Kleuren";
		$lang_string[ 'menu_change_login' ] = "Login wijzigen";
		$lang_string[ 'menu_logout' ] = "Uitloggen";
		$lang_string[ 'menu_login' ] = "Inloggen";
		$lang_string[ 'menu_most_recent' ] = "Nieuwste reacties";
		$lang_string[ 'menu_most_recent_entries' ] = "Most Recent Entries";
		$lang_string[ 'menu_most_recent_trackback' ] = "Most Recent Trackbacks"; // <-- New 0.3.8
		// DATOH_ADD
		$lang_string[ 'menu_add_block' ] = "Blocks";
		// DATOH_END
		
		// Other
		$lang_string[ 'home' ] = "Terug naar startpagina";
		$lang_string[ 'nav_next' ] = 'Volgende'; // <-- New 0.3.7
		$lang_string[ 'nav_back' ] = 'Vorige'; // <-- New 0.3.7
		$lang_string[ 'search_title' ] = 'Zoeken:'; // <-- New 0.3.7
		$lang_string[ 'search_go' ] = 'Zoek'; // <-- New 0.3.7
		$lang_string[ 'page_generated_in' ] = 'Pagina gegenereerd in %s seconden'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string[ 'sb_months' ] = array( 'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december' );
		$lang_string[ 'sb_default_title' ] = 'Geen titel';
		$lang_string[ 'sb_default_author' ] = 'Geen auteur';
		$lang_string[ 'sb_default_footer' ] = 'Geen ondertitel';
		
		$lang_string[ 'sb_edit' ] = 'bewerk';
		$lang_string[ 'sb_delete' ] = 'verwijder';
		$lang_string[ 'sb_permalink' ] = 'permalink'; // <-- New 0.3.8
		$lang_string[ 'sb_trackback' ] = 'trackbacks'; // <-- New 0.3.8
		
		$lang_string[ 'sb_add_comment_btn' ] = 'reactie toevoegen';
		$lang_string[ 'sb_comment_btn_number_first' ] = true;
		$lang_string[ 'sb_comment_btn' ] = 'reactie';
		$lang_string[ 'sb_comments_plural_btn_number_first' ] = true;
		$lang_string[ 'sb_comments_plural_btn' ] = 'reacties';
		
		// ( 1 view )
		$lang_string[ 'sb_view_counter_pre' ] = '';
		$lang_string[ 'sb_view_counter_post' ] = ' keer bekeken';
		// ( 2 views )
		$lang_string[ 'sb_view_counter_plural_pre' ] = '';
		$lang_string[ 'sb_view_counter_plural_post' ] = ' keer bekeken';
		
		$lang_string[ 'sb_add_link_btn' ] = '+ link';
		
		$lang_string[ 'sb_rate_entry_btn' ] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string[ 'label_subject' ] = "Onderwerp:";
				$lang_string[ 'label_insert' ] = "Code invoegen:";
				$lang_string[ 'btn_bold' ] = " b ";
				$lang_string[ 'btn_italic' ] = " i ";
				$lang_string[ 'btn_image' ] = "img";
				$lang_string[ 'btn_url' ] = "url";
				$lang_string[ 'view_images' ] = "Bekijk afbeeldingen";
				$lang_string[ 'label_entry' ] = "Bericht:";
				$lang_string[ 'btn_preview' ] = "&nbsp;Bekijk&nbsp;";
				$lang_string[ 'btn_post' ] = "&nbsp;Verstuur&nbsp;";
				$lang_string[ 'file_name' ] = "Static File Name: (no spaces or file extensions)"; // <-- New 0.3.8
				// Javascript Strings <-- Need Translation
				$lang_string[ 'insert_styles' ] = "Vul de tekst in die opgemaakt moet worden";
				$lang_string[ 'insert_image' ] = "Vul de URL van de afbeelding in";
				$lang_string[ 'insert_url1' ] = "Vul de tekst in die bij de link komt te staan (optioneel)";
				$lang_string[ 'insert_url2' ] = "Vul de volledige URL van de lnik in";
				$lang_string[ 'insert_url3' ] = "Open URL in nieuw venster (optioneel):"; // <-- New 0.3.6
				$lang_string[ 'form_error' ] = "Vul onderwerp en bericht in.";		
				// More Javascript Strings <-- New 0.3.6
				$lang_string[ 'insert_image_optional' ] = 'Optioneel:';
				$lang_string[ 'insert_image_width' ] = 'Breedte (Optioneel):';
				$lang_string[ 'insert_image_height' ] = 'Hoogte (Optioneel):';
				$lang_string[ 'insert_image_popup' ] = 'Volledige afbeelding in pop-up venster laten zien (Optioneel):';
				$lang_string[ 'insert_image_float' ] = 'Zwevend (Optioneel):';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string[ 'title' ] = "Voeg bericht toe";
				$lang_string[ 'instructions' ] = "Vul het formulier in klik op 'Bekijk' om te zien hoe het bericht geplaatst zal worden, of klik op 'Verstuur' om het bericht te plaatsen.";
				$lang_string[ 'title_ad' ] = "Confirm Trackback Pings"; // <-- New 0.3.8
				$lang_string[ 'instructions_ad' ] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8
				$lang_string[ 'label_tb_ping' ] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8
				$lang_string[ 'label_tb_autodiscovery' ] = "autodiscovery"; // <-- New 0.3.8
				// Preview / Edit Entry
				$lang_string[ 'title_preview' ] = "Bekijk / Wijzig bericht";
				$lang_string[ 'instructions_preview' ] = "Het bericht zal als volgt uit komen te zien. Als je opmaakcodes of afbeeldingen gebruikt, vergeet dan niet de 'tags' te sluiten.";
				$lang_string[ 'title_update' ] = "Wijzig bericht";
				$lang_string[ 'instructions_update' ] = "Het bericht kan hieronder gewijzigd worden. Klik op 'Bekijk' of 'Verstuur' als het bericht klaar is.";
				$lang_string[ 'ok_btn' ] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string[ 'cancel_btn' ] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string[ 'error' ] = "<h2>Oeps!</h2>Bericht niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string[ 'title' ] = "Voeg vaste pagina toe";
				$lang_string[ 'instructions' ] = "Vul het formulier in om een vaste pagina te maken. Een vaste pagina verschijnt, in tegenstelling tot gewone berichten, als een link in het menu aan de rechterkant. Ze kunnen gebruikt worden voor pagina's die altijd toegankelijk moeten zijn, zoals: Info, Contact, Agenda, etc. Klik op 'Bekijk' om te zien hoe de pagina uit zal zien, of klik op 'Verstuur' om de pagina op te slaan.";
				// Preview / Edit Entry
				$lang_string[ 'title_preview' ] = "Bekijk / Wijzig vaste pagina";
				$lang_string[ 'instructions_preview' ] = "De vaste pagina zal als volgt uit komen te zien. Als je opmaakcodes of afbeeldingen gebruikt, vergeet dan niet de 'tags' te sluiten.";
				$lang_string[ 'title_update' ] = "Wijzig vaste pagina";
				$lang_string[ 'instructions_update' ] = "De vaste pagina kan hieronder gewijzigd worden. Klik op 'Bekijk' of 'Verstuur' als de pagina klaar is.";
				$lang_string[ 'form_error' ] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string[ 'error' ] = "<h2>Oeps!</h2>Pagina niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
				break;
				// DATOH_ADD
			case 'add_block':
				// Add / Manage Blocks
				$lang_string[ 'title' ] = "Add / Manage Links";
				$lang_string[ 'instructions' ] = "Add custom Blocks";
				$lang_string[ 'up' ] = "up";
				$lang_string[ 'down' ] = "down";
				$lang_string[ 'edit' ] = "edit";
				$lang_string[ 'delete' ] = "delete";
				$lang_string[ 'block_name' ] = "Block Name:";
				$lang_string[ 'block_content' ] = "Block content:";
				$lang_string[ 'instructions_edit' ] = "You are currently editing block:";
				$lang_string[ 'instructions_modify' ] = "Click below to modify a block:";
				$lang_string[ 'submit_btn_edit' ] = "Edit Block";
				$lang_string[ 'submit_btn_add' ] = "Add Block";
				$lang_string[ 'form_error' ] = "Please complete the Name field.";
				break;
			case 'add_link':
				$lang_string[ 'static_pages' ] = "Static Pages:";
				// Add / Manage Links
				$lang_string[ 'title' ] = "Links toevoegen / beheren";
				$lang_string[ 'instructions' ] = "Voeg links naar andere websites toe. Vul het formulier in en klik op 'Link toevoegen' om een link toe te voegen. Klik op de omhoog/omlaag knoppen om de volgorde van de links te veranderen. Klik op de wijzigen knop om een link aan te passen. Klik op verwijderen om een link te verwijderen";
				$lang_string[ 'up' ] = "omhoog";
				$lang_string[ 'down' ] = "omlaag";
				$lang_string[ 'edit' ] = "wijzigen";
				$lang_string[ 'delete' ] = "verwijderen";
				$lang_string[ 'link_name' ] = "Link naam:";
				$lang_string[ 'link_url' ] = "Link URL: (Optioneel. Leeglaten om een scheidingsteken te maken.)";
				$lang_string[ 'instructions_edit' ] = "Je bewerkt deze link:";
				$lang_string[ 'instructions_modify' ] = "Klik hieronder om een link te wijzigen:";
				$lang_string[ 'submit_btn_edit' ] = "Wijzig Link";
				$lang_string[ 'submit_btn_add' ] = "Link toevoegen";
				$lang_string[ 'form_error' ] = "Vul een naam in.";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string[ 'title' ] = "Add / Manage Categories";
				$lang_string[ 'instructions' ] = "Use the form below to add and edit your categories. Each category item should be in this format 'category name (id number)'. Indent items with spaces to create heirarchies.<br /><br /><b>Example:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technology (2)<br />";
				$lang_string[ 'error' ] = "Error";
				$lang_string[ 'current_categories' ] = "Current Categories";
				$lang_string[ 'no_categories_found' ] = "No Categories Found";
				$lang_string[ 'category_list' ] = "Category List:";
				$lang_string[ 'validate' ] = "Validate";
				$lang_string[ 'submit_btn' ] = "&nbsp;Submit&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string[ 'title' ] = "Kleuren wijzigen";
				$lang_string[ 'instructions' ] = "Je kan de tekst- en achtergrondkleuren van je blog wijzigen. Gebruik de kleurkiezer om je kleur te wijzigen, of typ de HEX waarde in het veld.";
				$lang_string[ 'bg_color' ] = "Pagina kleur";
				$lang_string[ 'main_bg_color' ] = "Hoofdpagina kleur";
				$lang_string[ 'border_color' ] = "Pagina rand";
				$lang_string[ 'inner_border_color' ] = "Binnenste rand";
				$lang_string[ 'header_bg_color' ] = "Titel achtergrond";
				$lang_string[ 'header_txt_color' ] = "Titel tekst";
				$lang_string[ 'menu_bg_color' ] = "Menu achtergrond";
				$lang_string[ 'footer_bg_color' ] = "Ondertitel kleur";
				$lang_string[ 'txt_color' ] = "Gewone tekst";
				$lang_string[ 'headline_txt_color' ] = "Titel tekst";
				$lang_string[ 'date_txt_color' ] = "Datum tekst";
				$lang_string[ 'footer_txt_color' ] = "Ondertitel tekst";
				$lang_string[ 'link_reg_color' ] = "Gewone link";
				$lang_string[ 'link_hi_color' ] = "Actieve link";
				$lang_string[ 'link_down_color' ] = "Bezochte link";
				// More Colors
				$lang_string[ 'entry_bg' ] = "Bericht achtergrond";
				$lang_string[ 'entry_title_bg' ] = "Bericht titel achtergrond";
				$lang_string[ 'entry_border' ] = "Bericht rand";
				$lang_string[ 'entry_title_text' ] = "Bericht titel tekst";
				$lang_string[ 'entry_text' ] = "Bericht tekst";
				$lang_string[ 'menu_bg' ] = "Menu achtergrond";
				$lang_string[ 'menu_title_bg' ] = "Menu titel achtergrond";
				$lang_string[ 'menu_border' ] = "Menu rand";
				$lang_string[ 'menu_title_text' ] = "Menu titel tekst";
				$lang_string[ 'menu_text' ] = "Menu tekst";
				$lang_string[ 'menu_link_reg_color' ] = "Menu link Normaal";
				$lang_string[ 'menu_link_hi_color' ] = "Menu link Zweven";
				$lang_string[ 'menu_link_down_color' ] = "Menu link Actief";
				// Submit
				$lang_string[ 'color_preset' ] = "Color Schemes:"; // 0.3.7q
				$lang_string[ 'scheme_name' ] = "Enter a custom color scheme name:"; // 0.3.7q
				$lang_string[ 'scheme_file' ] = "Enter scheme file name: (no spaces or file extensions)"; // 0.3.7q
				$lang_string[ 'save_btn' ] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string[ 'form_error' ] = "Please enter a name for your custom color scheme."; // 0.3.7q
				$lang_string[ 'submit_btn' ] = "&nbsp;Verstuur&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>Oeps!</h2>Instellingen niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string[ 'comment_capcha' ] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
				$lang_string[ 'title' ] = "Reacties";
				$lang_string[ 'header' ] = "Plaats reactie";
				$lang_string[ 'instructions' ] = "Vul het formulier in om een reactie te plaatsen.";
				$lang_string[ 'comment_name' ] = "Naam:";
				$lang_string[ 'comment_email' ] = "Email:"; // 0.3.8
				$lang_string[ 'comment_url' ] = "URL:"; // 0.3.8
				$lang_string[ 'comment_remember' ] = "Remember me:"; // 0.3.8
				$lang_string[ 'comment_text' ] = "Bericht:";
				$lang_string[ 'post_btn' ] = "&nbsp;Reactie Versturen&nbsp;";
				$lang_string[ 'delete_btn' ] = "verwijder";
				// Error Response
				$lang_string[ 'error_add' ] = "<h2>Oeps!</h2>Reactie niet geplaatst. De reactie kan helaas niet worden opgeslagen.<br /><br />Melding:<br />";
				$lang_string[ 'error_delete' ] = "<h2>Oeps!</h2>Reactie niet verwijderd. De reactie kan helaas niet worden verwijderd.<br /><br />Melding:<br />";
				$lang_string[ 'form_error' ] = "Vul een Naam en een Bericht in."; // <-- Need Translation
				break;
			case 'delete':
				$lang_string[ 'title' ] = "Verwijder bericht";
				$lang_string[ 'instructions' ] = "Het onderstaande bericht wordt verwijderd. Dit bericht echt verwijderen? Dit kan niet ongedaan worden gemaakt...";
				$lang_string[ 'ok_btn' ] = "&nbsp;Ok&nbsp;";
				$lang_string[ 'cancel_btn' ] = "&nbsp;Annuleren&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>Oeps!</h2>Kan bericht niet verwijderen.<br /><br />Melding:<br />";
				break;
			case 'delete_static':
				$lang_string[ 'title' ] = "Verwijder vaste pagina";
				$lang_string[ 'instructions' ] = "De onderstaande vaste pagina wordt verwijderd. Deze pagina echt verwijderen? Dit kan niet ongedaan worden gemaakt...";
				$lang_string[ 'ok_btn' ] = "&nbsp;Ok&nbsp;";
				$lang_string[ 'cancel_btn' ] = "&nbsp;Annuleren&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>Oeps!</h2>Kan pagina niet verwijderen.<br /><br />Melding:<br />";
				break;
			case 'image_list':
				$lang_string[ 'title' ] = "Afbeeldingen lijst";
				$lang_string[ 'instructions' ] = "Klik op de links hieronder om afbeeldingen te bekijken.<br /><br />Om een afbeelding aan een bericht toe te voegen:<br />1) Control-klik op een link en kies 'Kopieer link naar klembord'.<br />2) Ga terug naar de 'Bericht toevoegen / verwijderen' pagina.<br />3) Klik op de 'img' knop en kopieer de URL in het venster.";
				break;
			case 'info': // New 0.3.7
				$lang_string[ 'title' ] = "Meta-Data Informatie";
				$lang_string[ 'instructions' ] = "Deze informatie wordt gebruikt voor &quot;meta-data&quot;, deze informatie wordt gebruikt om je site te indexeren bij zoekmachines. Het gebruik van RSS is toegestaan.";
				$lang_string[ 'info_keywords' ] = "Steekwoorden: (Lijst van steekwoorden (keywords), komma gescheiden.)";
				$lang_string[ 'info_description' ] = "Omschrijving: (Een korte beschrijving van je site.)";
				$lang_string[ 'info_copyright' ] = "Rechten: (Copyright informatie, of een link naar deze informatie.)";
				$lang_string[ 'submit_btn' ] = "&nbsp;Verstuur&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>Oeps!</h2>Informatie niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
				$lang_string[ 'form_error' ] = "Titel en auteur velden invullen..";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string[ 'error' ] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				break;
			case 'login':
				$lang_string[ 'upgrade' ] = "<h2>Upgrade</h2>"; // New 0.3.8
				$lang_string[ 'upgrade_count' ] = "%n comment files need to be upgraded:"; // New 0.3.8
				$lang_string[ 'upgrade_url' ] = "Upgrade Comments"; // New 0.3.8
				$lang_string[ 'title' ] = "Inloggen";
				$lang_string[ 'instructions' ] = "Vul gebruikersnaam en wachtwoord in:";
				$lang_string[ 'username' ] = "Gebruikersnaam:";
				$lang_string[ 'password' ] = "Wachtwoord";
				$lang_string[ 'submit_btn' ] = "&nbsp;Verstuur&nbsp;";
				// Success
				$lang_string[ 'success' ] = "<h2>Gelukt!</h2>Je bent nu ingelogd<p />";
				// Wrong Password
				$lang_string[ 'wrong_password' ] = "<h2>Oeps!</h2>Inloggen mislukt. Controleer gebruikersnaam en wachtwoord en probeer opnieuw.<p />";
				$lang_string[ 'form_error' ] = "Vul gebruikersnaam en wachtwoord in."; // <-- Need Translation
				break;
			case 'logout':
				$lang_string[ 'title' ] = "Uitloggen";
				$lang_string[ 'instructions' ] = "<h2>Oeps!</h2>Uitloggen mislukt. Kan cookie niet verwijderen.<p />";
				break;
			case 'forms':
				$lang_string[ 'title' ] = "";
				$lang_string[ 'instructions' ] = "";
				// Error Response
				$lang_string[ 'error' ] = "<h2>Oeps!</h2>Instellingen niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
				break;
			case 'set_login': // <-- New
				$lang_string[ 'title' ] = "Verander gebruikersnaam &amp; wachtwoord";
				$lang_string[ 'instructions' ] = "Gebruik dit formulier om je gebruikersnaam en/of wachtwoord te wijzigen. Vul nieuwe gebruikersnaam en wachtwoord in.";
				$lang_string[ 'username' ] = "Gebruikersnaam:";
				$lang_string[ 'password' ] = "Wachtwoord:";
				$lang_string[ 'submit_btn' ] = "&nbsp;Verstuur&nbsp;";
				// Success
				$lang_string[ 'success' ] = "<h2>Gelukt!</h2>Je gebruikersnaam en/of wachtwoord zijn gewijzigd.<p />";
				// Wrong Password
				$lang_string[ 'wrong_password' ] = "<h2>Oeps!</h2>Informatie niet opgeslagen. Er is een probleem opgetreden bij het opslaan van gebruikersnaam en/of wachtwoord.<br /><br />Melding:<br />";
				$lang_string[ 'form_error' ] = "Vul gebruikersnaam en wachtwoord in.";
				break;
			case 'install00': // <-- New
				$lang_string[ 'title' ] = "Welkom";
				$lang_string[ 'instructions' ] = "
				Thank you for choosing Simple PHP Blog!";
				$lang_string[ 'blog_choose_language' ] = "Kies een taal:";
				$lang_string[ 'submit_btn' ] = "&nbsp;Verstuur&nbsp;";
				break;
			case 'install01': // <-- New
				$lang_string[ 'title' ] = "Welkom";
				$lang_string[ 'instructions' ] = "
				Bedankt voor je keuze voor Simple PHP Blog!<br /><br />Simple PHP Blog is een simpele blogging applicatie. Om te beginnen heb je PHP 4.1 of nieuwer nodig en schrijf-rechten op de server. Alle informatie wordt opgeslagen in tekstbestanden, dus er is geen database nodig.<br /><br />
				Simple PHP Blog moet wel de mappen ('config', 'content', en 'images') maken om de informatie in op te slaan.<br /><br />
				<b>Klik hier onder om te beginnen met de installatie:</b>";
				$lang_string[ 'begin' ] = "[ Begin Installatie ]";
				break;
			case 'install02': // <-- New
				$lang_string[ 'title' ] = "Installatie";
				$lang_string[ 'instructions' ] = "Aan het proberen de 'config', 'content', en 'images' mappen te maken:";
				$lang_string[ 'folder_exists' ] = "Mooi! Mappen bestaan al. Geen veranderingen gemaakt...";
				$lang_string[ 'folder_failed' ] = "Oeps! Map kon niet worden aangemaakt...";
				$lang_string[ 'folder_success' ] = "Gelukt! Map aangemaakt...";
				// Help
				$lang_string[ 'help' ] = "
				<h2>Oeps!</h2>
				Kan één of meerdere mappen niet aanmaken! Dit ligt waarschijnlijk aan:<br>
				<i>1) <b>Schrijf rechten</b> staan niet op <b>Lees/Schrijf</b> toegang.</i><br>
				<i>2) De <b>UID</b>'s (User ID's) van mappen en bestanden moeten overeen komen.</i><p />
				
				Volg de onderstaande instructies en probeer opnieuw:<p />				
				1) Maak handmatig de mappen: <b>config</b>, <b>content</b>, en <b>images</b>.<p />
				2) Zet <b>Schrijf rechten (Write Permissions)</b> op de mappen. In je FTP programma moeten Eigenaar (Owner), Gebruiker (User), en Wereld (World)<b>Lees (Read)</b> en <b>Schrijf (Write)</b> rechten hebben. <i>(Misschien moet je contact opnemen met de beheerder van de server om dit te kunnen instellen...)</i><p />
				3) Zorg dat de UID's overeen komen. <i>(Misschien moet je contact opnemen met de beheerder van de server om dit te kunnen instellen...)</i>";
				$lang_string[ 'try_again' ] = "[ Probeer opnieuw ]";
				// Success
				$lang_string[ 'success' ] = "<h2>Gelukt!</h2>Mappen succesvol aangemaakt!<p /><b>Klik hier onder om verder te gaan:</b>";
				$lang_string[ 'continue' ] = "[ Verder ]";
				break;
			case 'install03': // <-- New
				$lang_string[ 'title' ] = "Create Username &amp; Password";
				$lang_string[ 'instructions' ] = "Use the form below to Create a Username and Password.";
				$lang_string[ 'username' ] = "Username:";
				$lang_string[ 'password' ] = "Password:";
				$lang_string[ 'submit_btn' ] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string[ 'success' ] = "<h2>Congratulations!</h2>You are now logged in. Click below to visit the Setup page, where you can name your blog. Happy blogging!<p />";
				$lang_string[ 'btn_setup' ] = "[ Setup ]";
				// Wrong Password
				$lang_string[ 'wrong_password' ] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />Server Reported:<br />";
				$lang_string[ 'form_error' ] = "Please complete the Username and Password fields.";
				break;
			case 'setup':
				$lang_string[ 'title' ] = "Instellingen";
				$lang_string[ 'instructions' ] = "Je kan de naam van je blog en andere informatie hier wijzigen.";
				$lang_string[ 'blog_title' ] = "Blog naam:";
				$lang_string[ 'blog_author' ] = "Auteur:";
				$lang_string[ 'blog_email' ] = "Email:"; // <-- New 0.3.7
				$lang_string[ 'blog_footer' ] = "Ondertitel:";
				$lang_string[ 'blog_choose_language' ] = "Kies taal:";
				$lang_string[ 'blog_enable_comments' ] = "Commentaar van gebruikers toestaan"; // <-- New 0.3.6
				$lang_string[ 'blog_comments_popup' ] = "Commentaar in pop-up venster weergeven"; // <-- New 0.3.6
				$lang_string[ 'blog_enable_voting' ] = "Enable Users to Rate Entries"; // <-- New 0.3.8
				$lang_string[ 'blog_email_notification' ] = "Stuur e-mail notificatie als commentaar toegevoegd is"; // <-- New 0.3.7
				$lang_string[ 'blog_send_pings' ] = "Stuur weblog &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string[ 'blog_ping_urls' ] = "Geef volledige URL op (bijv. http://rpc.weblogs.com/RPC2) van de te &quot;pingen&quot; service.<br />(Je kan meerdere URL's opgeven, gescheiden door komma's.)"; // <-- New 0.3.7
				$lang_string[ 'blog_trackback_about' ] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery."; // <-- New 0.3.8
				$lang_string[ 'blog_trackback_enabled' ] = "Enable trackback in my blog"; // <-- New 0.3.8
				$lang_string[ 'blog_trackback_auto_discovery' ] = "Enable Auto-Discovery when submitting a post containing URLs"; // <-- New 0.?.?
				$lang_string[ 'blog_max_entries' ] = "Maximaal aantaal weer te geven berichten:"; // <-- New 0.3.6
				$lang_string[ 'blog_comment_tags' ] = "Tags toegestaan in berichten:"; // <-- New 0.3.6
				$lang_string[ 'blog_gzip_about' ] = "
					Sinds PHP 4.0.4, heeft PHP  de mogelijkheid om gzip (.gz) compressie bestanden te lezen en bewerken, 
					dit zal schijfruimte besparen. Het kan ook pagina's die naar browsers gestuurd worden comprimeren, als ze dit ondersteunen,
					dit zal bandbreedte besparen.<br />
					<br />
					Zlib ondersteuning wordt in PHP niet standaard ondersteund. Als de keuzevakjes niet aan staan heeft je 
					PHP versie geen ondersteuning voor Zlib extensies.."; // <-- New 0.3.7
				$lang_string[ 'blog_enable_gzip_txt' ] = "Zet GZIP Compressie voor Database bestanden aan"; // <-- New 0.3.7
				$lang_string[ 'blog_enable_gzip_output' ] = "Zet GZIP Compressie voor HTTP Output aan"; // <-- New 0.3.7
				$lang_string[ 'submit_btn' ] = "&nbsp;Verstuur&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>Oeps!</h2>Instellingen niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
				$lang_string[ 'form_error' ] = "Vul titel en auteur in:";
				$lang_string[ 'label_entry_order' ] = "Bericht volgorde:";
				$lang_string[ 'select_new_to_old' ] = "Nieuwste berichten bovenaan";
				$lang_string[ 'select_old_to_new' ] = "Oudste berichten bovenaan";
				$lang_string[ 'label_comment_order' ] = "Reactie volgorde:";
				break;
			case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string[ 'title' ] = "Trackbacks";
				$lang_string[ 'header' ] = "Trackback URL for this entry:";
				$lang_string[ 'delete_btn' ] = "delete";
				// Error Response
				$lang_string[ 'error_add' ] = "Error storing trackback data.";
				break;
			case 'options':
				$lang_string[ 'title' ] = "Opties";
				$lang_string[ 'instructions' ] = "Gebruik dit formulier om datum en tijd instellingen voor berichten te wijzigen. Je kan 12 of 24 urige tijdsaanduidingen gebruiken en kort of lang datum formaat. De <b>Voorbeeld</b> velden worden automatisch gewijzigd om de instellingen te bekijken.";
				// Long Date
				$lang_string[ 'ldate_title' ] = "Lange datum instelling:";
				$lang_string[ 'weekday' ] = "Weekdag";
				$lang_string[ 'month' ] = "Maand";
				$lang_string[ 'day' ] = "Dag";
				$lang_string[ 'year' ] = "Jaar";
				$lang_string[ 'none' ] = "Niks";
				// Short Date
				$lang_string[ 'sdate_title' ] = "Korte Datum instelling:";
				$lang_string[ 's_month' ] = "Maand";
				$lang_string[ 's_mon' ] = "MMM";
				$lang_string[ 's_day' ] = "Dag";
				$lang_string[ 's_year' ] = "Jaar";
				$lang_string[ 'zero_day' ] = "Extra 0 voor de dag";
				$lang_string[ 'show_century' ] = "Show century";
				// Time
				$lang_string[ 'time_title' ] = "Tijd instelling:";
				$lang_string[ '12hour' ] = "12-urige klok";
				$lang_string[ '24hour' ] = "24-urige klok";
				$lang_string[ 'before_noon' ] = "Voor de middag";
				$lang_string[ 'after_noon' ] = "Na de middag";
				// Date
				$lang_string[ 'date_title' ] = "Datum aanduiding:";
				$lang_string[ 'long_date' ] = "Lange datum";
				$lang_string[ 'short_date' ] = "Korte datum";
				$lang_string[ 'time' ] = "Tijd";
				// Menu
				$lang_string[ 'menu_title' ] = "Menu Date Display Format:";
				$lang_string[ 'long_date' ] = "Long Date";
				$lang_string[ 'short_date' ] = "Short Date";
				// Used in multiple places
				$lang_string[ 'zero_day' ] = "Voorloop 0 voor de dag";
				$lang_string[ 'zero_month' ] = "Voorloop 0 voor de maand";
				$lang_string[ 'zero_hour' ] = "Voorloop 0 voor het uur";
				$lang_string[ 'separator' ] = "Scheidingsteken:";
				$lang_string[ 'preview' ] = "Voorbeeld:";
				$lang_string[ 'server_offset' ] = "Tijdsverschil server (in uren):";
				// Buttons
				$lang_string[ 'submit_btn' ] = "&nbsp;Verstuur&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>Oeps!</h2>Instellingen niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
				break;
			case 'themes':
				$lang_string[ 'title' ] = "Stijlen";
				$lang_string[ 'instructions' ] = "Gebruik het keuzemenu om een andere stijl te kiezen.";
				// Themes
				$lang_string[ 'choose_theme' ] = "Stijlen:";
				// Buttons
				$lang_string[ 'submit_btn' ] = "&nbsp;Verstuur&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>Oeps!</h2>Instellingen niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
				break;
			case 'upload_img':
				$lang_string[ 'title' ] = "Afbeelding uploaden";
				$lang_string[ 'instructions' ] = "Klik op de knop de afbeelding te selecteren.";
				$lang_string[ 'select_file' ] = "Selecteer afbeelding:";
				$lang_string[ 'upload_btn' ] = "Uploaden";
				// Error Response
				$lang_string[ 'error' ] = "<h2>Oeps!</h2>Kan afbeelding niet uploaden. Extra informatie:<br /><br />Melding:<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string[ 'title' ] = "Zoek Resultaten";
				$lang_string[ 'instructions' ] = "Zoek resultaten voor <b>%string</b>:";
				$lang_string[ 'not_found' ] = "Geen resulaten gevonden";
				break;
			case 'contact': // <-- New 0.3.8
				$lang_string[ 'title' ] = "Contact Me";
				$lang_string[ 'instructions' ] = "Fill in the form:";
				$lang_string[ 'form_error' ] = "Please complete the Subject and Comment fields.";
				$lang_string[ 'name' ] = "Name:";
				$lang_string[ 'email' ] = "Email:";
				$lang_string[ 'subject' ] = "Subject:";
				$lang_string[ 'comment' ] = "Comment:";
				$lang_string[ 'submit_btn' ] = "&nbsp;Submit&nbsp;";
				$lang_string[ 'success' ] = "<h2>Success!</h2>Your message has been sent.<p />";
				break;
			case 'stats':
				$lang_string[ 'title' ] = "<h2>Statistics</h2>";
				$lang_string[ 'general' ] = "<h3>General</h3>";
				$lang_string[ 'entry_info' ] = "<b>%s</b> entries using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string[ 'comment_info' ] = "<b>%s</b> comments using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string[ 'trackback_info' ] = "<b>%s</b> trackbacks stored in <b>%s</b> bytes";
				$lang_string[ 'static_info' ] = "<b>%s</b> static pages using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string[ 'most_viewed_entries' ] = "<h3>10 Most viewed entries</h3>";
				$lang_string[ 'most_commented_entries' ] = "<h3>10 Most commented entries</h3>";
				$lang_string[ 'most_trackbacked_entries' ] = "<h3>10 Most trackbacked entries</h3>";
				$lang_string[ 'vote_info' ] = "<b>%s</b> votes stored in <b>%s</b> bytes"; // 0.4.1
				$lang_string[ 'most_voted_entries' ] = "<h3>10 Most voted entries</h3>"; // 0.4.1
				$lang_string[ 'most_rated_entries' ] = "<h3>10 Most rated entries</h3>"; // 0.4.1
				break;
			default:
				break;
		}

	}
		
?>
