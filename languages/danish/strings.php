<?php

	// Danish Language File

	// (c) 2004 Thomas Petersen, thomasp <at> nsd <dot> dk

	//

	// Simple PHP Version: 0.3.7

	// Language Version:   0.3.7.1

	

	

	function sb_language( $page ) {

		global $language, $html_charset, $php_charset, $lang_string;

			

		// Language: English

		$lang_string['language'] = 'danish';

		

		// ISO Charset: ISO-8859-1 -- http://us4.php.net/manual/en/function.htmlspecialchars.php

		$lang_string['html_charset'] = 'ISO-8859-15';

		$lang_string['php_charset'] = 'ISO-8859-15';

		

		$lang_string['locale'] = 'da_DK'; 

		setlocale(LC_TIME, $lang_string['locale'] );

		

		// Some Global Strings

		

		// Menu

		$lang_string['menu_links'] = "Links";

		$lang_string['menu_home'] = "Hjem";

		$lang_string['menu_contact'] = "Kontakt mig"; 

		$lang_string['menu_stats'] = "Statistik"; // <-- New 0.3.7r

		$lang_string['menu_archive'] = "Arkiv"; 

		$lang_string['menu_menu'] = "Menu";

		$lang_string['menu_add'] = "Opret ny post";

		$lang_string['menu_add_static'] = "Tilføj statisk post";

		$lang_string['menu_upload'] = "Upload billede";

		$lang_string['menu_setup'] = "Opsætning";

		$lang_string['menu_categories'] = "Kategorier"; 

		$lang_string['menu_info'] = "Information"; 

		$lang_string['menu_options'] = "Indstillinger";

		$lang_string['menu_themes'] = "Temaer";

		$lang_string['menu_colors'] = "Farver";

		$lang_string['menu_change_login'] = "Ret Login";

		$lang_string['menu_logout'] = "Logud";

		$lang_string['menu_login'] = "Logind";

		$lang_string['menu_most_recent'] = "Nyeste kommentare";

		$lang_string['menu_most_recent_entries'] = "Nyeste artikeler";

		$lang_string['menu_most_recent_trackback'] = "Nyeste Trackbacks"; 

		$lang_string['menu_add_block'] = "Blocks";

		

		// Other

		$lang_string['home'] = "Retur til startside";

		$lang_string['nav_next'] = 'Frem'; 

		$lang_string['nav_back'] = 'Tilbage'; 

		$lang_string['search_title'] = 'Søgning:';

		$lang_string['search_go'] = 'Søg'; 

		$lang_string['page_generated_in'] = 'Side genereret på %s sekunder'; 

		

		// SB Functions

		$lang_string['sb_months'] = array( 'Januar', 'Februar', 'Marts', 'April', 'Maj', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'December' );

		$lang_string['sb_default_title'] = 'Tom Titel';

		$lang_string['sb_default_author'] = 'Ingen ejer';

		$lang_string['sb_default_footer'] = 'Ingen sidefod';

		

		$lang_string['sb_edit'] = 'ret';

		$lang_string['sb_delete'] = 'slet';

		$lang_string['sb_permalink'] = 'permalink'; 

		$lang_string['sb_trackback'] = 'trackbacks'; 

		

		$lang_string['sb_add_comment_btn'] = 'Tilføj kommentar';

		$lang_string['sb_comment_btn_number_first'] = false;

		$lang_string['sb_comment_btn'] = 'kommentar';

		$lang_string['sb_comments_plural_btn_number_first'] = false;

		$lang_string['sb_comments_plural_btn'] = 'kommentare';

		

		// ( 1 view )

		$lang_string['sb_view_counter_pre'] = '';

		$lang_string['sb_view_counter_post'] = ' visning';

		// ( 2 views )

		$lang_string['sb_view_counter_plural_pre'] = '';

		$lang_string['sb_view_counter_plural_post'] = ' visninger';

		

		$lang_string['sb_add_link_btn'] = '+ link';

		

		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';

		

		// Entry Text Editor

		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {

				$lang_string['label_subject'] = "Emne:";

				$lang_string['label_insert'] = "Indsæt special:";

				$lang_string['btn_bold'] = " b ";

				$lang_string['btn_italic'] = " i ";

				$lang_string['btn_image'] = "img";

				$lang_string['btn_url'] = "url";

				$lang_string['view_images'] = "Vis uploadede billeder";

				$lang_string['label_entry'] = "Tekst:";

				$lang_string['btn_preview'] = "&nbsp;Gennemse&nbsp;";

				$lang_string['btn_post'] = "&nbsp;Gem&nbsp;";

				$lang_string['file_name'] = "Statisk filnavn: (ingen mellemrum eller filextension)";

				// Javascript Strings 

				$lang_string['insert_styles'] = "Indtast tekst der skal formateres";

				$lang_string['insert_image'] = "Indtast URL til billedet";

				$lang_string['insert_url1'] = "Indtast tekst til linket";

				$lang_string['insert_url2'] = "Indtast fuld URL til linket";

				$lang_string['insert_url3'] = "Åben URL i nyt vindue (Valgfrit):"; 

				$lang_string['form_error'] = "Venligst udfyld emne og tekst felter.";

				// More Javascript Strings 

				$lang_string['insert_image_optional'] = 'Valgfrit:';

				$lang_string['insert_image_width'] = 'Bredde (Valgfrit):';

				$lang_string['insert_image_height'] = 'Højde (Valgfrit):';

				$lang_string['insert_image_popup'] = 'Vis full-size i pop-up vindue (Valgfrit):';

				$lang_string['insert_image_float'] = 'Flydende (Valgfrit):';

		}

	

		switch ($page) {

			case 'add':

				// Add Entry

				$lang_string['title'] = "Tilføj post";

				$lang_string['instructions'] = "Er du klar til blog? Udfyld formen herunder og klik 'Gennemse' for at se hvordan din post vil se ud, eller klik 'Gem' for at gemme posten.";

				$lang_string['title_ad'] = "Confirm Trackback Pings"; // <-- New 0.3.8

				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8

				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8

				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8

				// Preview / Edit Entry

				$lang_string['title_preview'] = "Gennemse / Ret post";

				$lang_string['instructions_preview'] = "Sådan ser din post ud. Hvis du bruger text styles eller billeder, husk at 'lukke' alle dine 'tags'.";

				$lang_string['title_update'] = "Opdater post";

				$lang_string['instructions_update'] = "Du kan ændre din post i formen herunder. Klik 'Gennemse' eller 'Gem' når du er færdig.";

				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;"; 

				$lang_string['cancel_btn'] = "&nbsp;Afbryd&nbsp;"; 

				// Error Response

				$lang_string['error'] = "<h2>Ups!</h2>Posten blev ikke gemt. Der opstod  et problem med at gemme.<br /><br />Serveren reporterede:<br />";

				break;

			case 'add_static':

				// Add Entry

				$lang_string['title'] = "Tilføj statisk post";

				$lang_string['instructions'] = "Fill out the form below to create a Static Entry. Unlike a regular Blog Entry, Static Entries appear as a links in the right-hand menu. They are for pages that you always want available such as: About Me, Contact Us, Schedule, etc. Click 'Preview' to see how your entry will look, or click 'Post' to save your entry.";

				// Preview / Edit Entry

				$lang_string['title_preview'] = "Gennemse / Ret statisk post";

				$lang_string['instructions_preview'] = "Here's how your Static Entry looks. If you're using text styles or including images, remember to 'close' all your 'tags'.";

				$lang_string['title_update'] = "Opdater statisk post";

				$lang_string['instructions_update'] = "You can change your entry using the form below. Click 'Preview' or 'Post' when you're done.";

				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	

				// Error Response

				$lang_string['error'] = "<h2>Whoops!</h2>Entry not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";

				break;

			// DATOH_ADD

			case 'add_block':

				// Add / Manage Blocks

				$lang_string['title'] = "Tilføj / Ret Links";

				$lang_string['instructions'] = "Tilføj speciel blok";

				$lang_string['up'] = "op";

				$lang_string['down'] = "ned";

				$lang_string['edit'] = "ret";

				$lang_string['delete'] = "slet";

				$lang_string['block_name'] = "Blok navne:";

				$lang_string['block_content'] = "Blok indhold:";

				$lang_string['instructions_edit'] = "Du retter lige nu blok:";

				$lang_string['instructions_modify'] = "Klik herunder for at rette i en blok:";

				$lang_string['submit_btn_edit'] = "Ret blok";

				$lang_string['submit_btn_add'] = "Tilføj blok";

				$lang_string['form_error'] = "Udfyld venligst navn feltet.";

				break;

			// DATOH_END

			case 'add_link':

				$lang_string['static_pages'] = "Static Pages:";

				// Add / Manage Links

				$lang_string['title'] = "Tilføj / Ret Links";

				$lang_string['instructions'] = "Tilføj links til andre sites. Udfyld formen herunder og klik 'Tilføj link' for at opdatere. Klik op eller ned knap for at ændre rækkefølgen. Klik ret knappen for at rette et link. Klik slet knapppen for at slette et link";

				$lang_string['up'] = "op";

				$lang_string['down'] = "ned";

				$lang_string['edit'] = "ret";

				$lang_string['delete'] = "slet";

				$lang_string['link_name'] = "Link navn:";

				$lang_string['link_url'] = "Link URL:";

				$lang_string['instructions_edit'] = "Du er ved at rette et link:";

				$lang_string['instructions_modify'] = "Klik herunder for at rette et link:";

				$lang_string['submit_btn_edit'] = "Ret link";

				$lang_string['submit_btn_add'] = "Tilføj link";

				$lang_string['form_error'] = "Venligst udfyld navn og URL.";

				break;

			case 'categories':

				// Add / Manage Links

				$lang_string['title'] = "Tilføj / Ret kategorier";

				$lang_string['instructions'] = "Use the form below to add and edit your categories. Each category item should be in this format 'category name (id number)'. Indent items with spaces to create heirarchies.<br /><br /><b>Example:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technology (2)<br />";

				$lang_string['error'] = "Fejl";

				$lang_string['current_categories'] = "Nuværende kategorer";

				$lang_string['no_categories_found'] = "Ingen kategorer fundet";

				$lang_string['category_list'] = "Kategori liste";

				$lang_string['validate'] = "Valider";

				$lang_string['submit_btn'] = "&nbsp;Tilføj&nbsp;";

				break;

			case 'colors':

				// Change Colors

				$lang_string['title'] = "Titel";

				$lang_string['instructions'] = "Du kan ændre farverne på din blog. Brug farvevælgeren, eller skriv HEX værdien i felterne herunder.";

				$lang_string['bg_color'] = "Side BG";

				$lang_string['main_bg_color'] = "Hovedeside BG";

				$lang_string['border_color'] = "Side kant";

				$lang_string['inner_border_color'] = "Indvendig kant";

				$lang_string['header_bg_color'] = "Sidehoved BG";

				$lang_string['header_txt_color'] = "Sidehoved Text";

				$lang_string['menu_bg_color'] = "Menu område BG";

				$lang_string['footer_bg_color'] = "Sidefod BG";

				$lang_string['txt_color'] = "Tekst";

				$lang_string['headline_txt_color'] = "Overskrift Tekst";

				$lang_string['date_txt_color'] = "Dato Tekst";

				$lang_string['footer_txt_color'] = "Sidefod Tekst";

				$lang_string['link_reg_color'] = "Link alm.";

				$lang_string['link_hi_color'] = "Link fremhævet";

				$lang_string['link_down_color'] = "Link besøgt";

				// More Colors

				$lang_string['entry_bg'] = "Tekstfelt BG";

				$lang_string['entry_title_bg'] = "Tekstfelt titel BG";

				$lang_string['entry_border'] = "Tekstfelt kant";

				$lang_string['entry_title_text'] = "Titel tekst";

				$lang_string['entry_text'] = "Tekstfelt";

				$lang_string['menu_bg'] = "Menu BG";

				$lang_string['menu_title_bg'] = "Menu titel BG";

				$lang_string['menu_border'] = "Menu kant";

				$lang_string['menu_title_text'] = "Menu titel Tekst";

				$lang_string['menu_text'] = "Menu Tekst";

				$lang_string['menu_link_reg_color'] = "Menu Link standard";

				$lang_string['menu_link_hi_color'] = "Menu Link hover";

				$lang_string['menu_link_down_color'] = "Menu Link Aktiv";

				// Submit

				$lang_string['color_preset'] = "Farveskema:"; 

				$lang_string['scheme_name'] = "Indtast et speciel farveskema navn:"; 

				$lang_string['scheme_file'] = "Indtast farveskema filnavn: (ingen mellemrum eller filextension)"; 

				$lang_string['save_btn'] = "&nbsp;Gem&nbsp;"; 

				$lang_string['form_error'] = "Indtast venligst et navn for dit farveskema."; 

				$lang_string['submit_btn'] = "&nbsp;Opdater&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Ups!</h2>Informationerne blev ikke gemt. Der opstod et problem med at gemme.<br /><br />Serveren reporterede:<br />";

				break;

			case 'comments':

				// Comments

				$lang_string['comment_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2

				$lang_string['title'] = "Kommentare";

				$lang_string['header'] = "Tilføj kommentar";

				$lang_string['instructions'] = "Udfyld formen herunder for at tilføje din egen kommentar.";

				$lang_string['comment_name'] = "Dit navn:";

				$lang_string['comment_email'] = "Email:"; 

				$lang_string['comment_url'] = "URL:"; 

				$lang_string['comment_remember'] = "Husk mig:"; 

				$lang_string['comment_text'] = "Kommentar:";

				$lang_string['post_btn'] = "&nbsp;Gem kommentar&nbsp;";

				$lang_string['delete_btn'] = "Slet";

				// Error Response

				$lang_string['error_add'] = "<h2>Ups!</h2>Kommentaren blev ikke gemt. Der opstod et problem med at gemme.<br /><br />Serveren reporterede:<br />";

				$lang_string['error_delete'] = "<h2>Ups!</h2>Kommentaren blev ikke slettet. Der opstod et problem med at slette.<br /><br />Serveren reporterede:<br />";

				$lang_string['form_error'] = "Venligst udflyd Navn og kommentar."; 

				break;

			case 'delete':

				$lang_string['title'] = "Slet post";

				$lang_string['instructions'] = "Dette er den post du er ved at slette. Er du sikker på at du vil slette?..";

				$lang_string['ok_btn'] = "&nbsp;Ja&nbsp;";

				$lang_string['cancel_btn'] = "&nbsp;Nej&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Ups!</h2>Posten kunne ikke slettes.<br /><br />Serveren reporterede:<br />";

				break;

			case 'delete_static':

				$lang_string['title'] = "Slet statisk post";

				$lang_string['instructions'] = "This is the static entry you are about to delete. Please make sure you really want to get rid of it, there's no undo...";

				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";

				$lang_string['cancel_btn'] = "&nbsp;Annuler&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Whoops!</h2>Posten kunne ikke slettes.<br /><br />Serveren reporterede:<br />";

				break;

			case 'image_list':

				$lang_string['title'] = "Billede arkiv";

				$lang_string['instructions'] = "Klik på et af linkene herunder for at se billederne.<br /><br />For at tilføje billedet til din post:<br />1) Højreklik et link og vælg 'Kopier'.<br />2) Gå tilbage til din post i editoren.<br />3) Klik 'img' knappen og indsæt URL i vinduet.";

				break;

			case 'info': // New 0.3.7

				$lang_string['title'] = "Meta-Data Information";

				$lang_string['instructions'] = "The information below is used for &quot;meta-data&quot;, which helps search engines correctly find and identify your site. Information may also be used in RSS feeds.";

				$lang_string['info_keywords'] = "Keywords: (List of keywords separated by commas.)";

				$lang_string['info_description'] = "Description: (An abstract or a free-text description of your site.)";

				$lang_string['info_copyright'] = "Rights: (Copyright statement, or link to document containing information.)";

				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";

				$lang_string['form_error'] = "Please complete the Title and Author fields.";

				break;

			case 'index':

				// Index

				break;

			case 'static':

				// Index

				break;

			case 'rating': // New 0.3.8

				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";

				break;

			case 'login':

				$lang_string['upgrade'] = "<h2>Upgrade</h2>"; // New 0.3.8

				$lang_string['upgrade_count'] = "%n comment files need to be upgraded:"; // New 0.3.8

				$lang_string['upgrade_url'] = "Upgrade Comments"; // New 0.3.8

				$lang_string['title'] = "Logind";

				$lang_string['instructions'] = "Indtast brugernavn og kodeord herunder";

				$lang_string['username'] = "Brugernavn:";

				$lang_string['password'] = "Kodeord";

				$lang_string['submit_btn'] = "&nbsp;Gem&nbsp;";

				// Success

				$lang_string['success'] = "<h2>Succes!</h2>Du er nu logget ind. God blogging!<p />";

				// Wrong Password

				$lang_string['wrong_password'] = "<h2>Ups!</h2>Du er ikke logget ind. Brugernavn eller kodeord er ikke korrekt, prøv venligst igen.<p />";

				$lang_string['form_error'] = "Venligst udfyld Brugernavn og kodeord.";

				break;

			case 'logout':

				$lang_string['title'] = "Logaf";

				$lang_string['instructions'] = "<h2>Ups!</h2>Logaf. fejlede. Kunne ikke slette cookie.<p />";

				break;

			case 'forms':

				$lang_string['title'] = "";

				$lang_string['instructions'] = "";

				// Error Response

				$lang_string['error'] = "<h2>Ups!</h2>Informationerne blev ikke gemt. Der opstod et problem med at gemme.<br /><br />Serveren reporterede:<br />";

				break;

			case 'set_login': 

				$lang_string['title'] = "Ændre Brugernavn &amp; Password";

				$lang_string['instructions'] = "Brug formen herunder til at rette brugernavn og password.";

				$lang_string['username'] = "Brugernavn:";

				$lang_string['password'] = "Password:";

				$lang_string['submit_btn'] = "&nbsp;Gem&nbsp;";

				// Success

				$lang_string['success'] = "<h2>Success!</h2>Your Username and/or Password is active. Happy blogging!<p />";

				// Wrong Password

				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />Server Reported:<br />";

				$lang_string['form_error'] = "Please complete the Username and Password fields.";

				break;

			case 'install00': // <-- New

				$lang_string['title'] = "Welcome";

				$lang_string['instructions'] = "

				Thank you for choosing Simple PHP Blog!";

				$lang_string['blog_choose_language'] = "Choose Language:";

				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";

				break;

			case 'install01': // <-- New

				$lang_string['title'] = "Welcome";

				$lang_string['instructions'] = "

				Thank you for choosing Simple PHP Blog!<br /><br />Simple PHP Blog is a light-weight blogging system. It requires PHP 4.1 or greater, and write-permissions on the server. All information is stored in flat-files, so no database is required.<br /><br />

				In order to begin, Simple PHP Blog needs to create three folders ('config', 'content', and 'images') in which to store your information.<br /><br />

				<b>Click below to begin setup:</b>";

				$lang_string['begin'] = "[ Begin Setup ]";

				break;

			case 'install02': // <-- New

				$lang_string['title'] = "Setup";

				$lang_string['instructions'] = "Trying to create 'config', 'content', and 'images' folders:";

				$lang_string['folder_exists'] = "Okay! Folder already exists. No changes made...";

				$lang_string['folder_failed'] = "Whoops! Could not create folder...";

				$lang_string['folder_success'] = "Success! Folder created...";

				// Help

				$lang_string['help'] = "

				<h2>Whoops!</h2>

				Could not create one or more folders! This is most likely due to:<br>

				<i>1) <b>Write Permissions</b> aren't set to allow <b>Read/Write</b> access.</i><br>

				<i>2) The <b>UID</b>'s (user ID's) of all files and folder must match.</i><p />

				

				Follow the trouble-shooting instructions below and please try again:<p />				

				1) Manually create the following folders: <b>config</b>, <b>content</b>, and <b>images</b>.<p />

				2) Enabled <b>Write Permissions</b> on the folders. In your FTP program, Owner, User, and World should have <b>Read</b> and <b>Write</b> access. <i>(You may need to contact your service provider to change these...)</i><p />

				3) Make sure the UID's of all your files and folders are the same. <i>(You may need to contact your service provider to change these...)</i>";

				$lang_string['try_again'] = "[ Try Again ]";

				// Success

				$lang_string['success'] = "<h2>Success!</h2>Folders created successfully!<p /><b>Click below to continue:</b>";

				$lang_string['continue'] = "[ Continue ]";

				break;

			case 'install03': 

				$lang_string['title'] = "Opret brugernavn &amp; Password";

				$lang_string['instructions'] = "Brug formen herunder til at angive brugernavn og password.";

				$lang_string['username'] = "Brugernavn:";

				$lang_string['password'] = "Password:";

				$lang_string['submit_btn'] = "&nbsp;Gem&nbsp;";

				// Success

				$lang_string['success'] = "<h2>Congratulations!</h2>You are now logged in. Click below to visit the Setup page, where you can name your blog. Happy blogging!<p />";

				$lang_string['btn_setup'] = "[ Setup ]";

				// Wrong Password

				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />Server Reported:<br />";

				$lang_string['form_error'] = "Please complete the Username and Password fields.";

				break;

			case 'setup':

				$lang_string['title'] = "Opsætning";

				$lang_string['instructions'] = "Du kan ændre navnet på din blog, og dine personlige informationer herunder.";

				$lang_string['blog_title'] = "Titel:";

				$lang_string['blog_author'] = "Forfatter:";

				$lang_string['blog_email'] = "Email:";

				$lang_string['blog_footer'] = "Sidefod:";

				$lang_string['blog_choose_language'] = "Vælg sprog:";

				$lang_string['blog_enable_comments'] = "Tillad bruger kommentare"; 

				$lang_string['blog_comments_popup'] = "Åben kommentare i Popup vindue"; 

				$lang_string['blog_enable_voting'] = "Tillad brugere at vudere artikler (Stjerner)"; 

				$lang_string['blog_email_notification'] = "Send email når der postes kommentarer";

				$lang_string['blog_send_pings'] = "Send weblog &quot;pings&quot;"; // <-- New 0.3.7

				$lang_string['blog_ping_urls'] = "Enter full URL (i.e. http://rpc.weblogs.com/RPC2) of service to &quot;ping&quot;.<br />(You can enter more than one address separated by commas.)"; // <-- New 0.3.7

				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another

					blog know that you are linking to them by sending them a trackback ping. See who is linking to 

					your blog by receiving trackback pings.<br />

				   You can either enter the URIs to ping manually, or try to do it automatically through 

				   Auto-Discovery."; // <-- New 0.3.8

				$lang_string['blog_trackback_enabled'] = "Enable trackback in my blog"; // <-- New 0.3.8

				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs"; // <-- New 0.?.?

				$lang_string['blog_max_entries'] = "Maximum artikler der skal vises:"; 

				$lang_string['blog_comment_tags'] = "Tags der tillades i kommentare:";

				$lang_string['blog_gzip_about'] = "

					Since PHP 4.0.4, PHP has had the ability to read and write gzip (.gz) compressed files, 

					thus saving disk-space. It can also transparently compress pages that are sent to browsers 

					which support gzip compression, thus saving bandwidth.<br />

					<br />

					Zlib support in PHP is not enabled by default. If the checkboxes are disabled, then your 

					installation of PHP does not support the Zlib extension."; // <-- New 0.3.7

				$lang_string['blog_enable_gzip_txt'] = "Tillad GZIP kompression for database filer"; 

				$lang_string['blog_enable_gzip_output'] = "Tillad GZIP kompression for HTTP Output"; 

				$lang_string['submit_btn'] = "&nbsp;Gem&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Ups!</h2>Informationerne blev ikke gemt. Der opstod et problem med at gemme.<br /><br />Serveren reporterede:<br />";

				$lang_string['form_error'] = "Venligst udfyld Titel og forfatter.";

				$lang_string['label_entry_order'] = "Post rækkefølge:";

				$lang_string['select_new_to_old'] = "Vis nyeste først";

				$lang_string['select_old_to_new'] = "Vis ældste først";

				$lang_string['label_comment_order'] = "Kommentar rækkefølge:";

				break;

			case 'trackbacks': 

				// Trackbacks

				$lang_string['title'] = "Trackbacks";

				$lang_string['header'] = "Trackback URL for denne artikel:";

				$lang_string['delete_btn'] = "slet";

				// Error Response

				$lang_string['error_add'] = "Error storing trackback data.";

				break;

			case 'options':

				$lang_string['title'] = "Indstillinger";

				$lang_string['instructions'] = "Use the form below to customize the date and time display for blog and comment entries. You can select 12 or 24 hour clocks. Short or long date format. And the <b>Preview</b> areas update automatically to show you how you formatting will appear.";

				// Long Date

				$lang_string['ldate_title'] = "Long Date Format:";

				$lang_string['weekday'] = "Weekday";

				$lang_string['month'] = "Month";

				$lang_string['day'] = "Day";

				$lang_string['year'] = "Year";

				$lang_string['none'] = "None";

				// Short Date

				$lang_string['sdate_title'] = "Short Date Format:";

				$lang_string['s_month'] = "Month";

				$lang_string['s_mon'] = "MMM";

				$lang_string['s_day'] = "Day";

				$lang_string['s_year'] = "Year";

				$lang_string['zero_day'] = "Leading zero for day";

				$lang_string['show_century'] = "Show century";

				// Time

				$lang_string['time_title'] = "Time Format:";

				$lang_string['12hour'] = "12-hour clock";

				$lang_string['24hour'] = "24-hour clock";

				$lang_string['before_noon'] = "Before Noon";

				$lang_string['after_noon'] = "After Noon";

				// Date

				$lang_string['date_title'] = "Date Display Format:";

				$lang_string['long_date'] = "Long Date";

				$lang_string['short_date'] = "Short Date";

				$lang_string['time'] = "Time";

				// Menu

				$lang_string['menu_title'] = "Menu Date Display Format:";

				$lang_string['long_date'] = "Long Date";

				$lang_string['short_date'] = "Short Date";

				// Used in multiple places

				$lang_string['zero_day'] = "Leading zero for day";

				$lang_string['zero_month'] = "Leading zero for Month";

				$lang_string['zero_hour'] = "Leading zero for Hour";

				$lang_string['separator'] = "Separator:";

				$lang_string['preview'] = "Preview:";

				$lang_string['server_offset'] = "Server Offset:";

				// Buttons

				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";

				break;

			case 'themes':

				$lang_string['title'] = "Temaer";

				$lang_string['instructions'] = "Brug drop-down menuen til at vælge andet tema.";

				// Themes

				$lang_string['choose_theme'] = "Temaer:";

				// Buttons

				$lang_string['submit_btn'] = "&nbsp;Gem&nbsp;";

				// Error Response

				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";

				break;

			case 'upload_img':

				$lang_string['title'] = "Upload billede";

				$lang_string['instructions'] = "Klik på knappen herunder for at vælge filen der skal uploades.";

				$lang_string['select_file'] = "Vælg fil:";

				$lang_string['upload_btn'] = "Upload";

				// Error Response

				$lang_string['error'] = "<h2>Ups!</h2>Kunne ikke gemme billedet. Her er mere information:<br /><br />Serveren reporterede:<br />";

				break;

			case 'search': 

				$lang_string['title'] = "Resultat af søgning";

				$lang_string['instructions'] = "Resultat af søgning for <b>%string</b>:";

				$lang_string['not_found'] = "Ingen resultat fundet";

				break;

			case 'contact':

				$lang_string['title'] = "Kontakt mig";

				$lang_string['instructions'] = "Udfyld formularen:";

				$lang_string['form_error'] = "Udfyld venligst emne og kommentar felterne.";

				$lang_string['name'] = "Navn:";

				$lang_string['email'] = "Email:";

				$lang_string['subject'] = "Emne:";

				$lang_string['comment'] = "Kommentar:";

				$lang_string['submit_btn'] = "&nbsp;Afsend&nbsp;";

				$lang_string['success'] = "<h2>Success!</h2>Din kommentar er blevet sendt.<p />";

				break;

			case 'stats':

				$lang_string['title'] = "<h2>Statistics</h2>";

				$lang_string['general'] = "<h3>General</h3>";

				$lang_string['entry_info'] = "<b>%s</b> entries using <b>%s</b> words stored in <b>%s</b> bytes";

				$lang_string['comment_info'] = "<b>%s</b> comments using <b>%s</b> words stored in <b>%s</b> bytes";

				$lang_string['trackback_info'] = "<b>%s</b> trackbacks stored in <b>%s</b> bytes";

				$lang_string['static_info'] = "<b>%s</b> static pages using <b>%s</b> words stored in <b>%s</b> bytes";

				$lang_string['most_viewed_entries'] = "<h3>10 Most viewed entries</h3>";

				$lang_string['most_commented_entries'] = "<h3>10 Most commented entries</h3>";

				$lang_string['most_trackbacked_entries'] = "<h3>10 Most trackbacked entries</h3>";

				$lang_string['vote_info'] = "<b>%s</b> votes stored in <b>%s</b> bytes"; // 0.4.1

				$lang_string["most_voted_entries"] = "<h3>10 Most voted entries</h3>"; // 0.4.1

				$lang_string["most_rated_entries"] = "<h3>10 Most rated entries</h3>"; // 0.4.1

				break;

			default:

				break;

		}

	}

		

?>
