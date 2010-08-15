<?php

	// Finnish Language File
	// (c) 2006 Niko Jakobsson, psycho <at> mbnet <dot> fi
	//

	// Simple PHP Version: 0.4.7
	// Language Version:   0.4.7.0
	

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;			

		// Language: Finnish
		$lang_string['language'] = 'finnish';
    $lang_string['locale'] = array('fi_FI', 'fi');
		$lang_string['rss_locale'] = 'finnish'; // New 0.4.8		

		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-1';
		$lang_string['php_charset'] = 'ISO-8859-1';		

		setlocale( LC_TIME, $lang_string['locale'] );		

		// Some Global Strings		

		// Menu
		$lang_string['menu_links'] = "Linkit";
		$lang_string['menu_home'] = "Etusivu";
		$lang_string['menu_contact'] = "Ota yhteyttä";
		$lang_string['menu_stats'] = "Tilastot";
		$lang_string['menu_calendar'] = "Calendar"; // New for 0.4.8
		$lang_string[ 'menu_viewarchives' ] = "View Archives"; // New in 0.4.7
		$lang_string['menu_archive'] = "Arkisto";
		$lang_string['menu_menu'] = "Valikko";
		$lang_string['menu_add'] = "Lisää teksti";
		$lang_string['menu_add_static'] = "Lisää sivu";
		$lang_string['menu_upload'] = "Lataa kuva";
		$lang_string['menu_setup'] = "Asetukset";
		$lang_string['menu_categories'] = "Kategoriat";
		$lang_string['menu_info'] = "Hakukoneet";
		$lang_string['menu_options'] = "Päivä &amp; aika";
		$lang_string['menu_themes'] = "Teemat";
		$lang_string['menu_colors'] = "Värit";
		$lang_string['menu_change_login'] = "Vaihda kirjautumisasetuksia";
		$lang_string['menu_logout'] = "Kirjaudu ulos";
		$lang_string['menu_login'] = "Kirjaudu";
		$lang_string['menu_most_recent'] = "Viimeisimmät kommentit";
		$lang_string['menu_most_recent_entries'] = "Viimeisimmät tekstit";
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks";
		$lang_string['menu_add_block'] = "Laatikot";
		$lang_string['menu_emoticons'] = "Hymiöt"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Counter
		$lang_string['counter_today'] = "Today:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Yesterday:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
		$lang_string['counter_title'] = "Counter Totals"; // New for 0.4.8

		// Other
		$lang_string['home'] = 'Palaa etusivulle';
		$lang_string['nav_next'] = 'Seuraava';
		$lang_string['nav_back'] = 'Edellinen';
		$lang_string['search_title'] = 'Etsi:';
		$lang_string['search_go'] = 'Etsi';
		$lang_string['page_generated_in'] = 'Sivu luotu %s sekunnissa';		
		$lang_string['counter_total'] = 'Site Views: '; // New in 0.4.8
		$lang_string['read_more'] = 'Read More...'; // New in 0.4.8

		// SB Functions
		$lang_string['sb_months'] = array( 'Tammikuu', 'Helmikuu', 'Maaliskuu', 'Huhtikuu', 'Toukokuu', 'Kesäkuu', 'Heinäkuu', 'Elokuu', 'Syyskuu', 'Lokakuu', 'Marraskuu', 'Joulukuu' );
		$lang_string['sb_default_title'] = 'Ei otsikkoa';
		$lang_string['sb_default_author'] = 'Ei kirjoittajaa';
		$lang_string['sb_default_footer'] = 'Ei mietelausetta';

		$lang_string['sb_edit'] = 'muokkaa';
		$lang_string['sb_delete'] = 'poista';
		$lang_string['sb_permalink'] = 'permalink';
		$lang_string['sb_trackback'] = 'trackbacks';
		$lang_string['sb_relatedlink'] = 'tekstiin liittyvä linkki'; // <-- New in 0.4.6		

		$lang_string['sb_add_comment_btn'] = 'lisää kommentti';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'kommentti';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'comments';		

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' view';

		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' views';		

		$lang_string['sb_add_link_btn'] = 'lisää linkki';
		$lang_string['sb_rate_entry_btn'] = 'Paina arvostellaksesi tekstin';		

		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
			$lang_string['label_subject'] = "Aihe:";
			$lang_string['label_insert'] = "Korostus:";
			$lang_string['btn_bold'] = " b ";
			$lang_string['btn_italic'] = " i ";
			$lang_string['btn_image'] = "img";
			$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "read more"; // 0.4.8
			$lang_string['view_images'] = "Katsele lähetettyjä kuvia";
			$lang_string['label_entry'] = "Teksti:";
			$lang_string['btn_preview'] = "&nbsp;Esikatselu&nbsp;";
			$lang_string['btn_post'] = "&nbsp;Lähetä&nbsp;";
			$lang_string['file_name'] = "Tiedoston nimi: (ei välilyöntejä eikä tiedostopäätteitä)";

			// Javascript Strings
			$lang_string['insert_styles'] = "Enter the text to be formatted:";
			$lang_string['insert_image'] = "Anna kuvan URL-osoite:";
			$lang_string['insert_url1'] = "Enter the text to be displayed for the link (Optional):";
			$lang_string['insert_url2'] = "Enter the full URL for the link:";
			$lang_string['insert_url3'] = "Open URL in new window (Optional):";
			$lang_string['form_error'] = "Ole hyvä ja täytä aihe- sekä tekstikentät.";	

			// More Javascript Strings
			$lang_string['insert_image_optional'] = 'Optional:';
			$lang_string['insert_image_width'] = 'Width (Optional):';
			$lang_string['insert_image_height'] = 'Height (Optional):';
			$lang_string['insert_image_popup'] = 'View full-size in pop-up when clicked (Optional):';
			$lang_string['insert_image_float'] = 'Float (Optional):';
		
			$lang_string['day'] = 'Päivä';
			$lang_string['month'] = 'Kuukausi';
			$lang_string['year'] = 'Vuosi';
			$lang_string['hour'] = 'Tunti';
			$lang_string['minute'] = 'Minuutti';
			$lang_string['second'] = 'Sekunti';
		}	

		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Lisää teksti";
				$lang_string['instructions'] = "Oletko valmis kirjoittamaan? Täytä alla oleva tekstilaatikko ja paina 'Esikatselu' nähdäksesi, miltä tekstisi näyttää, tai paina 'Lähetä' tallentaaksesi tekstin.";
				$lang_string['title_ad'] = "Confirm Trackback Pings";
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)";
				$lang_string['label_tb_autodiscovery'] = "autodiscovery";
				$lang_string['label_relatedlink'] = "Tekstiin liittyvä linkki";
				$lang_string['label_categories'] = "Category List";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Preview / Edit Entry";
				$lang_string['instructions_preview'] = "Here's how your entry looks. If you're using text styles or including images, remember to 'close' all your 'tags'.";
				$lang_string['title_update'] = "Update Entry";
				$lang_string['instructions_update'] = "You can change your entry using the form below. Click 'Preview' or 'Post' when you're done.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;";

				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Entry not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Lisää sivu";
				$lang_string['instructions'] = "Täytä alla oleva tekstikenttä lisääksesi sivun vasempaan valikkoon. Kuten tavallinen blogiteksti, sivu ilmestyy linkkinä vasempaan valikkoon. Nämä sivut ovat aina näkyvissä, esimerkkejä: Tietoja minusta, Ota yhteyttä, Aikataulu, jne. Paina 'Esikatselu' nähdäksesi, miltä sivu näyttää. Paina 'Lähetä' tallentaaksesi sivun.";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Esikatsele / muokkaa sivua";
				$lang_string['instructions_preview'] = "Here's how your Static Page looks. If you're using text styles or including images, remember to 'close' all your 'tags'.";
				$lang_string['title_update'] = "Update Static Page";
				$lang_string['instructions_update'] = "You can change your entry using the form below. Click 'Preview' or 'Post' when you're done.";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	

				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Entry not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";
				break;
			case 'add_block':

				// Add / Manage Blocks
				$lang_string['title'] = "Lisää / muokkaa laatikoita";
				$lang_string['instructions'] = "Lisää oma laatikko";
				$lang_string['up'] = "ylös";
				$lang_string['down'] = "alas";
				$lang_string['edit'] = "muokkaa";
				$lang_string['delete'] = "poista";
				$lang_string['block_name'] = "Laatikon nimi:";
				$lang_string['block_content'] = "Laatikon sisältö:";
				$lang_string['instructions_edit'] = "Olet muokkaamassa laatikkoa:";
				$lang_string['instructions_modify'] = "Olemassa olevat laatikot:";
				$lang_string['submit_btn_edit'] = "Muokkaa laatikkoa";
				$lang_string['submit_btn_add'] = "Lisää laatikko";
				$lang_string['form_error'] = "Täytä nimikenttä.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Sivut:";

				// Add / Manage Links
				$lang_string['title'] = "Lisää / muokkaa linkkejä";
				$lang_string['instructions'] = "Lisää omia linkkejä toisille www-sivuille. Täytä oheinen lomake ja klikkaa 'Lisää linkki'-painiketta lisätäksesi linkin. Klikkaa alas- tai ylös-painiketta vaihtaaksesi linkkien järjestystä. Paina muokkaa painiketta muokataksesi linkkiä. Paina poista painiketta poistaaksesi linkin.";
				$lang_string['up'] = "ylös";
				$lang_string['down'] = "alas";
				$lang_string['edit'] = "muokkaa";
				$lang_string['delete'] = "poista";
					$lang_string['link_name'] = "Linkin nimi:";
				$lang_string['link_url'] = "URL-osoite: (Optional. Leave empty to create separator.)";
				$lang_string['instructions_edit'] = "Linkit:";
				$lang_string['instructions_modify'] = "Olemassa olevat linkit:";
				$lang_string['submit_btn_edit'] = "Muokkaa linkkiä";
				$lang_string['submit_btn_add'] = "Lisää linkki";
				$lang_string['form_error'] = "Täytä nimikenttä.";
				break;
			case 'categories':

				// Add / Manage Links
				$lang_string['title'] = "Add / Manage Categories";
				$lang_string['instructions'] = "Use the form below to add and edit your categories. Each category item should be in this format 'category name (id number)'. Indent items with spaces to create heirarchies.<br /><br /><b>Example:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technology (2)<br />";
				$lang_string['error'] = "Error";
				$lang_string['current_categories'] = "Current Categories";
				$lang_string['no_categories_found'] = "No Categories Found";
				$lang_string['category_list'] = "Category List:";
				$lang_string['validate'] = "Validate";
				$lang_string['submit_btn'] = "&nbsp;Lähetä&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Change Colors";
				$lang_string['instructions'] = "You can change the text and background colors for your blog. First select the field below, then use the color picker to mix your color. The Value changes automatically.";
				$lang_string['bg_color'] = "BG Page";
				$lang_string['main_bg_color'] = "BG Main Page";
				$lang_string['border_color'] = "Page Border";
				$lang_string['inner_border_color'] = "Inner Border";
				$lang_string['header_bg_color'] = "BG Header";
				$lang_string['header_txt_color'] = "Header Text";
				$lang_string['menu_bg_color'] = "BG Menu";
				$lang_string['footer_bg_color'] = "BG Footer";
				$lang_string['txt_color'] = "Main Text";
				$lang_string['headline_txt_color'] = "Headline Text";
				$lang_string['date_txt_color'] = "Date Text";
				$lang_string['footer_txt_color'] = "Mietelauseen teksti";
				$lang_string['link_reg_color'] = "Link Default";
				$lang_string['link_hi_color'] = "Link Hover";
				$lang_string['link_down_color'] = "Link Active";

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
				$lang_string['color_preset'] = "Color Schemes:";
				$lang_string['scheme_name'] = "Enter a custom color scheme name:";
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)";
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;";
				$lang_string['form_error'] = "Please enter a name for your custom color scheme.";
				$lang_string['submit_btn'] = "&nbsp;Lähetä&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'The currently selected theme does not allow for custom colors.';

				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Name:"; //New in 0.4.6.2
				$lang_string['email'] = "Email:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Homepage:"; //New in 0.4.6.2
				$lang_string['comment'] = "Kommentti:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6.2
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				
				$lang_string['comment_capcha'] = "Anti-Spam: Enter "; // 0.4.2
				$lang_string['title'] = "Kommentit";
				$lang_string['header'] = "Lisää kommentti";
				$lang_string['instructions'] = "Fill out the form below to add your own comments.";
				$lang_string['comment_name'] = "Your Name:";
				$lang_string['comment_email'] = "Email:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['commentposted'] = "New comment posted at: ";  // New for 0.4.6.2
				$lang_string['comment_remember'] = "Remember me:";
				$lang_string['comment_text'] = "Comment:";
				$lang_string['post_btn'] = "&nbsp;Post Comment&nbsp;";
				$lang_string['delete_btn'] = "delete";
				$lang_string['expired_comment1'] = "We are sorry. New comments are not allowed after "; // New for 0.4.8
				$lang_string['expired_comment2'] = " days."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Sorry, your IP address has been banned. Comments not allowed."; // New for 0.4.8

				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Comment not saved. I ran into a problem while saving your comment.<br /><br />Server Reported:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Comment not deleted. I ran into a problem while deleting your comment.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Name, Comment and Anti-Spam fields.";
				break;

			case 'delete':
				$lang_string['title'] = "Poista kirjoitus";
				$lang_string['instructions'] = "Varmista, että tämä on teksti, jonka varmasti haluat poistaa. Jos et ole varma, paina peruuta.";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Peruuta&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Virhe!</h2>Tekstin poistaminen epäonnistui.<br /><br />Server Reported:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Poista sivu";
				$lang_string['instructions'] = "Varmista, että tämä on sivu, jonka haluat poisaa. Jos et ole varma, paina peruuta.";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Peruuta&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Virhe!</h2>Poistaminen epäonnistui.<br /><br />Server Reported:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Image List";
				$lang_string['instructions'] = "Click on the links below to view images.<br /><br />To add an image to your entry:<br />1) Control-click a link and choose 'Copy Link to Clipboard'.<br />2) Return to the Add Entry or Edit Entry page.<br />3) Click the 'img' button and paste the URL into the window.";
				break;
			case 'info':
				$lang_string['title'] = "Meta-Data Information";
				$lang_string['instructions'] = "The information below is used for &quot;meta-data&quot;, which helps search engines correctly find and identify your site. Information may also be used in RSS feeds.";
				$lang_string['info_keywords'] = "Keywords: (List of keywords separated by commas.)";
				$lang_string['info_description'] = "Description: (An abstract or a free-text description of your site.)";
				$lang_string['info_copyright'] = "Rights: (Copyright statement, or link to document containing information.)";
				$lang_string['submit_btn'] = "&nbsp;Lähetä&nbsp;";
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
			case 'rating':
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Upgrade</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n comment files need to be upgraded:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Upgrade Comments"; // New 0.3.8
				$lang_string['title'] = "Kirjaudu sisään";
				$lang_string['instructions'] = "Ole hyvä ja anna käyttäjätunnuksesi sekä salasanasi.";
				$lang_string['username'] = "Käyttäjätunnus:";
				$lang_string['password'] = "Salasana:";
				$lang_string['submit_btn'] = "&nbsp;Lähetä&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Tervetuloa!</h2>Kirjautuminen onnistui.<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Virhe!</h2>Kirjautuminen epäonnistui. Tarkista käyttäjätunnus ja salasana.<p />";
				$lang_string['form_error'] = "Ole hyvä ja täytä käyttäjätunnus- sekä salasanakentät.";
				break;
			case 'logout':
				$lang_string['title'] = "Logout";
				$lang_string['instructions'] = "<h2>Virhe!</h2>Uloskirjautuminen epäonnistui. Evästeiden poistaminen epäonnistui. Tarkista selaimen asetukset.<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Vaihda käyttäjätunnus &amp; salasana:";
				$lang_string['instructions'] = "Käytä kaavakettaa muuttaaksesi käyttäjänimen ja/tai salasanan. Kirjoita käyttäjänimi ja salasana, joita haluat käyttää.";
				$lang_string['username'] = "Käyttäjänimi:";
				$lang_string['password'] = "Password:";
				$lang_string['submit_btn'] = "&nbsp;Lähetä&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Onnistui!</h2>Käyttäjätunnuksesi ja/tai salasanasi on vaihdettu ja käytössä.<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Virhe!</h2>Muutosta ei tallennettu. Ongelma salasanan ja käyttäjätunnuksen tallennuksessa.<br /><br />Palvelinraportti:<br />";
				$lang_string['form_error'] = "Täytä salana- ja käyttäjätunnuskentät.";
				$lang_string['explanation'] = "Salasanatekniikka on muuttunut aikaisemmista versioista. Salasanan ja käyttäjätunnuksen vaihto ei ole enää mahdollista
					blogin kautta. Muuttaaksesi tunnukset, sinun täytyy poistaa /config/password.php ja varmistaa, että install*.php
					on olemassa palvelimella.  Kun muutos on tehty, päivitä sivu (tai kirjaudu ulos).  Tämän jälkeen saat eteesi saman valikon kuin ottaessasi ohjelman käyttöön.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Tervetuloa";
				$lang_string['instructions'] = "Kiitos, että valitsit Simple PHP Blogin!";
				$lang_string['blog_choose_language'] = "Valitse kieli:";
				$lang_string['submit_btn'] = "&nbsp;Lähetä&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Tervetuloa!";
				$lang_string['instructions'] = "
				Kiitos, että valitsit Simple PHP Blogin!<br /><br />Simple PHP Blog on kevyt blog-järjestelmä. Se vaatii toimakseen PHP:n version 4.1 tai uudemman ja kirjoitusoikeudet palvelimelle. Kaikki informaatio tallennetaan tiedostoihin, joten tietokantaa ei tarvita.<br /><br />
				Aloittaaksesi, Simple PHP Blog tarvitsee kolme kansiota (<b>config</b>, <b>content</b> ja <b>images</b>). Näihin kansioihin ohjelma tallentaa kaiken tarvittavan informaation. Kansion luonnin jälkeen siirrytään salasanan luontiin. Salasana-asioiden ollessa kunnossa, voit aloittaa kirjoittamisen!<br /><br />
				<b>Klikkaa linkkiä aloittaaksesi asennuksen:</b>";
				$lang_string['begin'] = "[ Aloita asennus ]";
				break;
			case 'install02':
				$lang_string['title'] = "Asennus";
				$lang_string['instructions'] = "Yritetään luoda <b>config</b>, <b>content</b> ja <b>images</b> -kansiot:";
				$lang_string['folder_exists'] = "OK! Kansio on jo olemassa. Muutoksia ei tehty...";
				$lang_string['folder_failed'] = "Virhe! Kansion luonti epäonnistui...";
				$lang_string['folder_success'] = "Onnistui! Kansio luotiin...";
				// Help
				$lang_string['help'] = "
				<h2>Virhe!</h2>
Kansion/kansioiden luonti epäonnistui!<br /><br />Tämä tapahtui, koska:<br />
				<ol>
				<li><b>Kirjoitusoikeudet puuttuvat</b>, ei ole asetettu <b>Read/Write</b> -oikeuksia (CHMOD).</li>
				<li><b>UID</b>t (käyttäjäoikeudet) kaikkiin kansioihin ja tiedostoihin eivät täsmää.</li>
				</ol>
				Seuraa ongelmanratkaisuja alapuolelta ja klikkaa <b>Yritä uudelleen</b>:<br />
				<ol>
				<li>Luo manuaalisesti seuraavat kansiot palvelimelle: <b>config</b>, <b>content</b> ja <b>images</b>.</li>
				<li>Anna <b>kirjoitusoikeudet</b> seuraaville kansioille: FTP-ohjelmassa Owner, User ja Group/World -ryhmien tulisi saada <b>luku-</b> ja <b>kirjoitus</b>oikeudet (Chmod 666/777). <i>(Voit joutua ottamaan yhteyttä palveluntarjoajaan muuttaaksesi näitä asetuksia)</i></li>
				<li>Varmista, että käyttäjäoikeudet kaikkiin kansioihin ovat samat. <i>(Voit joutua ottamaan yhteyttä palveluntarjoajaan muuttaaksesi näitä asetuksia)</i></li>
				</ol>";
				$lang_string['try_again'] = "[ Yritä uudelleen ]";
				// Success
				$lang_string['success'] = "<h2>Onnistui!</h2>Kansiot luotiin onnistuneesti!<p /><b>Paina seuraavaa linkkiä jatkaaksesi:</b>";
				$lang_string['continue'] = "[ Jatka ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>Palvelimesi tukee seuraavia salaustyyppejä:</b>";
				$lang_string['standard'] = "Standard DES Encryption: ";
				$lang_string['extended'] = "Extended DES Encryption: ";
				$lang_string['MD5'] = "MD5 Encryption: ";
				$lang_string['blowfish'] = "Blowfish Encryption: ";
				$lang_string['enabled'] = "tukee";
				$lang_string['disabled'] = "ei tue";
				$lang_string['using_standard'] = "<b>Käytetään Standard DES Encryption -salausta...</b>";
				$lang_string['using_extended'] = "<b>Käytetään Extended DES Encryption -salausta...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Käytetään MD5 Encryption -salausta...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Käytetään Blowfish Encryption -salausta...</b>";
				$lang_string['using_unknown'] = "<b>Käytetään tuntematonta salausta...</b>";
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
				$lang_string['title'] = "Luo käyttäjätunnus &amp; salasana";
				$lang_string['instructions'] = "Käytä alla olevaa kaavaketta luodaksesi käyttäjätunnuksen ja salasanan.";
				$lang_string['username'] = "Käyttäjätunnus:";
				$lang_string['password'] = "Salasana:";
				$lang_string['submit_btn'] = "&nbsp;Lähetä&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Onnittelut!</h2>Olet kirjautunut sisään. Paina alla olevaa painiketta siirtyäksesi asetuksiin, jossa voit nimetä blogin.<p />";
				$lang_string['btn_setup'] = "[ Asetukset ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Virhe!</h2>Asetuksia ei tallennettu. Onglma tallennettaessa salasanaa ja käyttäjätunnusta.<br /><br />Palvelimen raportti:<br />";
				$lang_string['form_error'] = "Täytä käyttäjätunnus- ja salasanakenttä.";
				break;
			case 'install04':
				$lang_string['title'] = "Luo salasanatiedosto";
				$lang_string['instructions'] = "Tässä ohjeet salasanatiedoston luontiin:<br />
				<ol>
				<li>Avaa tekstieditori. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, jne.)</i></li>
				<li>Luo uusi tekstidokumentti.</li>
				<li>Kopioi ja liitä oheinen koodi dokumenttiin.</li>
				<li>Tallenna tiedosto nimellä <b>password.php</b> <i>(Varmista, että tallennat sen <b>teksti-</b> tai <b>puhdasteksti</b>muotoon.)</i></li>
				<li>Avaa FTP-ohjelma.</li>
				<li>Lähetä <b>password.php</b> <b>config</b> -kansioon www-sivullesi.</li>
				<li>Poista <b>password.php</b> kovalevyltäsi.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Huomautus: Jos haluat muuttaa käyttäjätunnusta ja salasanaa (esimerkiksi unohtaessasi ne), poista <b>password.php</b>-tiedosto <b>config</b>-kansiosta www-palvelimelta. Seuraavan kerran mennessäsi kotisivullesi, joudut käymään tämän asennusprosessin uudelleen...</i>";
				$lang_string['code'] = "Teksti <b>password.php</b>-tiedostoon:";
				$lang_string['continue'] = "[ Jatka ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Kirjaudu sisään";
				$lang_string['instructions'] = "Anna käyttäjätunnuksesi ja salasanasi";
				$lang_string['username'] = "Käyttäjätunnus:";
				$lang_string['password'] = "Salasana";
				$lang_string['submit_btn'] = "&nbsp;Lähetä&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Onnittelut!</h2>Olet kirjautunut sisään.<p />
				Paina seuraavaa linkkiä päästäksesi <b>Asetukset</b>-sivulle, jossa voit muokata blogiasi.<p />
				<i>Huomautus: Kun olet nyt suorittanut asennusprosessin, on suositeltavaa poistaa <b>installXX.php</b>-tiedostot www-palvelimelta (esim. install00.php - install06.php -tiedostot). Tee varmuuskopiot kovalevyllesi.</i><p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Varoitus!</h2>Kirjautuminen epäonnistui. varmista, että kirjoitit käyttäjätunnuksen ja salasanan oikein.<p />";
				$lang_string['form_error'] = "Täytä käyttäjätunnus- ja salasanakentät.";
				// Success
				$lang_string['btn_setup'] = "[ Asetukset ]";
				$lang_string['btn_try_again'] = "[ Yritä uudelleen ]";
				break;
			case 'setup':
				$lang_string['title'] = "Asetukset";
				$lang_string['instructions'] = "Voit muuttaa blogin nimen ja muut henkilökohtaiset asetukset.";
				$lang_string['blog_title'] = "Blogin nimi:";
				$lang_string['blog_author'] = "Omistaja:";
				$lang_string['blog_email'] = "Email: (Separate email address should be separated by a , comma - blank disables Contact Me option)"; // Updated 0.4.7
				$lang_string['blog_avatar'] = "Avatarin URL: (Jätä tyhjäksi, jos ei ole)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Mietelause:";
				$lang_string['blog_choose_language'] = "Valitse kieli:";
				$lang_string['blog_enable_comments'] = "Salli kommentit";
				$lang_string['blog_comments_popup'] = "Avaa kommentit popup-ikkunassa";
				$lang_string['blog_enable_voting'] = "Salli käyttäjien arvostella tekstejä";
				$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Kalenteri/arkisto käytössä"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Enable Archives Block"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Enable Counter in Sidebar"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "Number of hours to delay before hits are counted again (based on specific ip address):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Enable Login Link (Please bookmark \"login.php\" first...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Tekstirivi kuvan alla (Ota ruksi pois, jos haluat, että blogin nimi ei näy yläkuvan alla)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Enable Permalink on Blog Entries"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Enable Anti-Spam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Enable Counter in Footer"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Anti-Spam Images (GD library only) / Anti-Spam Text Field"; // New for 0.4.8
				$lang_string['blog_enable_stats'] = "Näytä tilastot valikossa"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Näytä uusimmat kommentit -lista"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Näytä uusimmat tekstit -lista"; // New for 0.4.7
				$lang_string['blog_email_notification'] = "Lähetä sähköposti-ilmoitus aina uuden kommentin ilmestyessä.";
				$lang_string['blog_send_pings'] = "Send weblog &quot;pings&quot;";
				$lang_string['blog_ping_urls'] = "Enter full URL (i.e. http://rpc.weblogs.com/RPC2) of service to &quot;ping&quot;.<br />(You can enter more than one address separated by commas.)";
				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery.";
				$lang_string['blog_trackback_enabled'] = "Enable trackback in my blog";
				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs";
				$lang_string['blog_max_entries'] = "Maximum Entries to Display:";
				$lang_string['blog_comment_tags'] = "Merkit, jotka ovat sallittuja kommenteissa:";
				$lang_string['blog_gzip_about'] = "
					PHP:n versiosta 4.0.4, PHP ohjelmat ovat voineet tallentaa ja avaata GZIP-muotoon (.gz) pakattuja tiedostoja, jotka säästävät levytilaa. PHP voi myös hetkellisesti pakata sivut, jotka lähetetään selaimelle, mikäli selain tukee gzip-pakkausta verkon yli.<br />
					<br />
					Zlib-tukea ei oteta käyttöön automaattisesti. Jos valintalaatikot ovat harmaana, PHP-versiosi ei tue Zlib-laajennusta.";
				$lang_string['blog_enable_gzip_txt'] = "Käytä GZIP-pakkausta tietokantatiedostoille";
				$lang_string['blog_enable_gzip_output'] = "Käytä GZIP-pakkausta HTTP-tiedostoille (vaatii selaimen tuen)";
				$lang_string['submit_btn'] = "&nbsp;Lähetä&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Virhe!</h2>Muutoksia ei tallennettu. Ongelma tallennuksessa.<br /><br />Palvelinraportti:<br />";
				$lang_string['form_error'] = "Täytä blogin nimi- ja omistajakentät.";
				$lang_string['label_entry_order'] = "Tekstien järjestys:";
				$lang_string['select_new_to_old'] = "Listaa uusin ensin";
				$lang_string['select_old_to_new'] = "Listaa vanhin ensin";
				$lang_string['label_comment_order'] = "Kommenttien järjestys:";
				$lang_string['cal_sunday'] = "Sunnuntai";
				$lang_string['cal_monday'] = "Maanantai";
				$lang_string['label_calendar_start'] = "Kalenteriviikon ensimmäinen päivä";
				$lang_string['title_sidebar'] = "Sivupalkki"; // New in 0.4.7
				$lang_string['title_comments'] = "Kommentit"; // New in 0.4.7
				$lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
				$lang_string['title_compression'] = "Pakkaus"; // New in 0.4.7
				$lang_string['title_entries'] = "Tekstit"; // New in 0.4.7
				$lang_string['title_general'] = "Yleiset"; // New in 0.4.7
				$lang_string['title_language'] = "Kieli"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Comments Allowed For How Many Days? (0 means no expiry)"; // New in 0.4.8
				break;
			case 'trackbacks':
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "Trackback URL for this entry:";
				$lang_string['delete_btn'] = "delete";
				// Error Response
				$lang_string['error_add'] = "Error storing trackback data.";
				break;
			case 'options':
				$lang_string['title'] = "Ajan asetukset";
				$lang_string['instructions'] = "Käytä alla olevaa kaavaketta muuttaaksesi päivämäärämerkintää tekstien ja kommenttien yhteydessä. Voit valita 12- tai 24-tuntisen kellon sekä lyhyen tai pitkän päivämäärämerkinnän. <b>Esikatselu</b>-ikkuna päivittyy automaattisesti näyttäen, millaisessa muodossa aika näkyy jatkossa (päivämäärä voi olla väärä).";
				// Long Date
				$lang_string['ldate_title'] = "Pitkä päivämääräformaatti:";
				$lang_string['weekday'] = "Viikonpäivä";
				$lang_string['month'] = "Kuukausi";
				$lang_string['day'] = "Päivä";
				$lang_string['year'] = "Vuosi";
				$lang_string['none'] = "Ei mitään";
				// Short Date
				$lang_string['sdate_title'] = "Lyhyt päivämääräformaatti:";
				$lang_string['s_month'] = "Kuukausi";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Päivä";
				$lang_string['s_year'] = "Vuosi";
				$lang_string['zero_day'] = "Nollat päivämäärissä";
				$lang_string['show_century'] = "Näytä vuosisata";
				// Time
				$lang_string['time_title'] = "Aikaformaatti:";
				$lang_string['12hour'] = "12-tuntinen kello";
				$lang_string['24hour'] = "24-tuntinen kello";
				$lang_string['before_noon'] = "Ennen puoltapäivää";
				$lang_string['after_noon'] = "Puolen päivän jälkeen";
				// Date
				$lang_string['date_title'] = "Päivämäärän näyttö:";
				$lang_string['long_date'] = "Pitkä päivämerkintä";
				$lang_string['short_date'] = "Lyhyt päivämerkintä";
				$lang_string['time'] = "Aika";
				// Menu
				$lang_string['menu_title'] = "Valikoissa käytettävä päivämääräformaatti:";
				$lang_string['long_date'] = "Pitkä päivämäärä";
				$lang_string['short_date'] = "Lyhyt päivämäärä";
				// Used in multiple places
				$lang_string['zero_day'] = "Nolla päivämäärän edessä";
				$lang_string['zero_month'] = "Nolla kuukauden edessä";
				$lang_string['zero_hour'] = "Nolla tunnin edessä";
				$lang_string['separator'] = "Erottaja:";
				$lang_string['preview'] = "Esikatselu:";
				$lang_string['server_offset'] = "Palvelimen aikaerotus:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Lähetä&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Virhe!</h2>Tietoja ei tallennettu. Ongelma tiedon tallennuksessa.<br /><br />Palvelinraportti:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Teemat";
				$lang_string['instructions'] = "Use the drop-down menu to select a different theme.";
				// Themes
				$lang_string['choose_theme'] = "Themes:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Lisää kuva";
				$lang_string['instructions'] = "Paina oheista painiketta lisääksesi kuvan.";
				$lang_string['select_file'] = "Valitse tiedosto:";
				$lang_string['upload_btn'] = "Lataa";
				// Error Response
				$lang_string['error'] = "<h2>Virhe!</h2>Kuvan lataus epäonnistui. Ohessa virheilmoitus:<br /><br />Palvelinraportti:<br />";
				break;
			case 'search':
				$lang_string['title'] = "Etsinnän tulokset";
				$lang_string['instructions'] = "Etsinnän tulos <b>%string</b>:";
				$lang_string['not_found'] = "Ei löytynyt";
				break;
			case 'contact':
				$lang_string['contact_capcha'] = "Anti-Spam: Kirjoita alla oleva numerosarja tyhjään tekstilaatikkoon "; // 0.4.2
				$lang_string['title'] = "Ota yhteyttä";
				$lang_string['instructions'] = "Täytä seuraava kaavake:";
				$lang_string['form_error'] = "Ole hyvä, täytä aihe- ja kommenttiosiot.";
				$lang_string['name'] = "Nimi:";
				$lang_string['email'] = "Sähköposti:";				
				$lang_string['subject'] = "Aihe:";
				$lang_string['comment'] = "Kommentti:";
				$lang_string['submit_btn'] = "&nbsp;Lähetä&nbsp;";
				$lang_string['success'] = "<h2>Onnistui!</h2>Viestisi on lähetetty.<p />";
				$lang_string['failure'] = "<h2>Virhe!</h2>Viestiäsi ei lähetetty, koska Anti Spam -kohta jäi täyttämättä.<p />";
				$lang_string['contactsent'] = "Contact sent through: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string["title"] = "Tilastot";
				$lang_string["general"] = "Yleisesti";
				$lang_string["entry_info"] = "<b>%s</b> tekstiä, joissa <b>%s</b> sanaa tallennettuna <b>%s</b> tavuun";
				$lang_string["comment_info"] = "<b>%s</b> kommenttia, joissa <b>%s</b> sanaa tallennettuna <b>%s</b> tavuun";
				$lang_string["trackback_info"] = "<b>%s</b> trackbacks stored in <b>%s</b> bytes";
				$lang_string["static_info"] = "<b>%s</b> sivua, joissa <b>%s</b> sanaa tallennettuna <b>%s</b> tavuun";
				$lang_string["most_viewed_entries"] = "10 luetuinta tekstiä";
				$lang_string["most_commented_entries"] = "10 eniten kommentteja kerännyttä tekstiä";
				$lang_string["most_trackbacked_entries"] = "10 Most trackbacked entries";
				$lang_string['vote_info'] = "<b>%s</b> ääntä tallennettuna <b>%s</b> tavuun"; // 0.4.1
				$lang_string["most_voted_entries"] = "10 äänetetyintä tekstiä"; // 0.4.1
				$lang_string["most_rated_entries"] = "10 arvioiduinta tekstiä"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Error 403.8 - Sivun/toiminnon suoritus estetty';
				$lang_string["errorline1"] = 'The page or function you attempted to process requires the use of cookies.';
				$lang_string["errorline2"] = 'Restore cookie functionality within your browser or protection software and attempt your request again.';
				$lang_string["clientid"] = 'Client ID: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Error 403.8 - Sivun/toiminnon lataus estetty';
				$lang_string["404"] = 'HTTP Error 404 - Sivua/toimintoa ei ole';
				$lang_string["error_404"] = 'Sivua tai toimintoa, jota yritit suorittaa, ei ole.';
				$lang_string["error_javascript"] = 'Sivu tai toiminto, jota yritit suorittaa, tarvitsee javascript-komponentin toimiakseen.';
				$lang_string["error_emailnotsent"] = 'Viestin lähetys epäonnistui.';
				$lang_string["error_emailnotsentcapcha"] = 'Viesti, jonka yritit lähettää ei lähtenyt, koska anti-spam-toiminto esti sen. Sinun olisi pitänyt täyttää kaavakkeen anti-spam-kohta.';
				$lang_string["clientid"] = 'Osoitteesi: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Muokkaa hymiöitä";
				$lang_string['instructions'] = "
					Valitse hymiöt, joita haluat käytettävän. Kirjoita laatikkoon merkit, jotka haluat hymiöillä korvattavan. Mikäli haluat lisätä useamman merkkijonon, erottele ne välilyönnellä.<br /><br />
		
					Esimerkiksi:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />
					
					<i>(On suositeltavaa, että luot merkkijonot pidemmiksi kuin kaksi (2) merkkiä, 
					näin vältytään sekaannuksilta.)</i>";
				$lang_string["upload_instructions"] = 'Lisää uusi hymiö:';
				$lang_string["upload_success"] = 'Onnistui! Kuva lisättiin onnistuneesti!';
				$lang_string["upload_error"] = 'Virhe! Kuvaa ei lisätty.';
				$lang_string["upload_invalid"] = 'Virhe! Vääränmuotoinen kuvatiedosto. Kuvan tulee olla png-, jpg- tai gif-muotoinen.';
				$lang_string["save_success"] = 'Hymiöasetukset tallennettu onnistuneesti!';
				$lang_string["save_error"] = 'Virhe! Hymiöasetuksia ei tallennettu.';
				$lang_string["save_button"] = 'Tallenna hymiöt';
				break;
			default:
				break;
		}
	}
?>
