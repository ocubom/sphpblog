<?php

	// Slovak Language File
	// (c) 2009 palinux, admin <at> obchodp <dot> sk
	//

	// Simple PHP Version: 0.4.8
	// Slovak Language Version:   0.4.8.2	

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;			

		// Language: Slovak
		$lang_string['language'] = 'slovak';	
		
		$lang_string['locale'] = array('sk_SK', 'sk','slovak');
		$lang_string['rss_locale'] = 'sk-SK'; // New 0.4.8

		// Windows Charset: CP1250
		$lang_string['html_charset'] = 'CP1250';
		$lang_string['php_charset'] = 'CP1250';	

		setlocale( LC_TIME, $lang_string['locale'] );		

		// Some Global Strings		

		// Menu
		$lang_string['menu_links'] = "Odkazy";
		$lang_string['menu_home'] = "Hlavná stránka";
		$lang_string['menu_contact'] = "Kontaktujte ma";
		$lang_string['menu_stats'] = "tatistiky";
		$lang_string['menu_calendar'] = "Kalendár"; // New for 0.4.8
		$lang_string['menu_archive'] = "Archívy";
		$lang_string['menu_viewarchives'] = "Ukáza archívy";
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Prida záznam";
		$lang_string['menu_add_static'] = "Prida stránku";
		$lang_string['menu_upload'] = "Nahra obrázok";
		$lang_string['menu_setup'] = "Nastavenie";
		$lang_string['menu_categories'] = "Kategória";
		$lang_string['menu_info'] = "Meta dáta";
		$lang_string['menu_options'] = "Dátum a cas";
		$lang_string['menu_themes'] = "Vzh¾ady";
		$lang_string['menu_colors'] = "Farby";
		$lang_string['menu_change_login'] = "Zmeni prihlásenie";
		$lang_string['menu_logout'] = "Odhlásenie";
		$lang_string['menu_login'] = "Prihlásenie";
		$lang_string['menu_most_recent'] = "Najnoví komentár";
		$lang_string['menu_most_recent_entries'] = "Najnovie záznamy";
		$lang_string['menu_most_recent_trackback'] = "Najnovie ohlasy";
		$lang_string['menu_add_block'] = "Bloky";
		$lang_string['menu_emoticons'] = "Smajlíky"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Counter
		$lang_string['counter_today'] = "Dnes:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Vèera:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Celkom:"; // New for 0.4.8
		$lang_string['counter_title'] = "Návtevy"; // New for 0.4.8

		// Other
		$lang_string['home'] = 'Zpä na hlavnú stránku';
		$lang_string['nav_next'] = 'Dalí';
		$lang_string['nav_back'] = 'Zpä';
		$lang_string['search_title'] = 'H¾adanie';
		$lang_string['search_go'] = 'H¾adaj';
		$lang_string['page_generated_in'] = 'Stránka generovaná %s sekúnd';
		$lang_string['counter_total'] = 'Zobrazenie webu: '; // New in 0.4.8
		$lang_string['read_more'] = 'Èíta ïalej...'; // New in 0.4.8

		// SB Functions
		$lang_string['sb_months'] = array( 'januára', 'februára', 'marca', 'apríla', 'mája', 'júna', 'júla', 'augusta', 'septembra', 'októbra', 'novembra', 'decembra' );
		$lang_string['sb_default_title'] = 'Bez názvu';
		$lang_string['sb_default_author'] = 'Neznámy autor';
		$lang_string['sb_default_footer'] = '';

		$lang_string['sb_edit'] = 'editova';
		$lang_string['sb_delete'] = 'vymaza';
		$lang_string['sb_permalink'] = 'trvalý odkaz';
		$lang_string['sb_trackback'] = 'zpätné sledovanie';
		$lang_string['sb_relatedlink'] = 'súvisiaci odkaz'; // <-- New in 0.4.6		

		$lang_string['sb_add_comment_btn'] = 'prida komentár';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = ' komentár';
		$lang_string['sb_comments_plural_btn_number_first'] = false;
		$lang_string['sb_comments_plural_btn'] = 'komentáre:';		

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' zobrazenie';

		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' zobrazenie';		

		$lang_string['sb_add_link_btn'] = 'prida odkaz';
		$lang_string['sb_rate_entry_btn'] = 'Kliknite a ohodnoïte záznam';		

		// Záznam Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
			$lang_string['label_subject'] = "Názov:";
			$lang_string['label_insert'] = "Vloi:";
			$lang_string['btn_bold'] = " b ";
			$lang_string['btn_italic'] = " i ";
			$lang_string['btn_image'] = "img";
			$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "Dalej..."; // 0.4.8
			$lang_string['view_images'] = "Ukázat obrázky";
			$lang_string['label_entry'] = "Záznam:";
			$lang_string['btn_preview'] = "&nbsp;Ukáza&nbsp;";
			$lang_string['btn_post'] = "&nbsp;Odosla;";
			$lang_string['file_name'] = "Názov súboru (bez medzier a prípony):";

			// Javascript Strings
			$lang_string['insert_styles'] = "Vlote text, ktorý bude formátovaný:";
			$lang_string['insert_image'] = "Vlote URL obrázku:";
			$lang_string['insert_url1'] = "Vlote text, zobrazovaný pod odkazom (      volite¾ný):";
			$lang_string['insert_url2'] = "Vlote úplný URL odkaz:";
			$lang_string['insert_url3'] = "Otvori odkaz v novom okne (volitelný):";
			$lang_string['form_error'] = "Vyplòte pole s názvom a záznamom.";	

			// More Javascript Strings
			$lang_string['insert_image_optional'] = 'Vo¾by:';
			$lang_string['insert_image_width'] = 'írka (volite¾ný):';
			$lang_string['insert_image_height'] = 'Výka (volite¾ný):';
			$lang_string['insert_image_popup'] = 'Po kliknutí zobrazi celý obrázok v novom okne (volite¾ný):';
			$lang_string['insert_image_float'] = 'Umiestnenie (volite¾ný):';
		
			$lang_string['day'] = 'Deò';
			$lang_string['month'] = 'Mes.';
			$lang_string['year'] = 'Rok';
			$lang_string['hour'] = 'Hod.';
			$lang_string['minute'] = 'Min.';
			$lang_string['second'] = 'Sek.';
		}	

		switch ($page) {
			case 'add':
				// Add Záznam
				$lang_string['title'] = "Prida záznam";
				$lang_string['instructions'] = "Chcete prida záznam do stránok? Vyplòte formulár niie a kliknite na 'Ukáza' pre náh¾ad alebo na 'Odosla' pre uloenie záznamu.";
				$lang_string['title_ad'] = "Potvrdenie pingu o odozvách";
				$lang_string['instructions_ad'] = "Toto sú automaticky rozpoznané URI, kam môu by odoslané pingy. Ak na urèitú URI ping posla nechcete, odznaète ju. Kliknite na 'OK' pre odoslanie pingu na oznaèené URI, alebo kliknite na 'Zrui' a pingy nebudú odoslané.";
				$lang_string['label_tb_ping'] = "Pingy o odozvách odosiela na (oddeli èiarkami):";
				$lang_string['label_tb_autodiscovery'] = "Autorozpoznávanie";
				$lang_string['label_relatedlink'] = "Súvisiaci odkaz";
				$lang_string['label_categories'] = "Zoznam kategórií";

				// Preview / Edit Záznam
				$lang_string['title_preview'] = "Ukáza/editova záznam";
				$lang_string['instructions_preview'] = "Takto vyzerá vá záznam. Pokia¾ pouíváte týlovanie textu alebo vkladáte obrázky, nezabudnite 'uzavrie' vetky 'tagy'.";
				$lang_string['title_update'] = "Úpravy záznamu";
				$lang_string['instructions_update'] = "Vá záznam môete upravi vo formulári niie. Po dokonèení kliknite na 'Ukáza' alebo 'Odosla'.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Zrui&nbsp;";

				// Error Response
				$lang_string['error'] = "<h2>Úha!</h2>Záznam nebol uloený. Poèas ukladania sa objavil problém.<br /><br />Server ohlásil:<br />";
				break;
			case 'add_static':
				// Add Záznam
				$lang_string['title'] = "Prida stránku";
				$lang_string['instructions'] = "Vyplòte formulár niie a pridajte novú statickú stránku. Na rozdiel od záznamov sa statické stránky objavia ako poloky v menu. To je vhodné pre stránky, ktoré chcete ma stále k dispozícii, ako napr. Informácie, Kontakty, Plány a pod. Kliknite na 'Ukázat' pre náhlad alebo na 'Odosla' pre uloenie stránky.";

				// Preview / Edit Záznam
				$lang_string['title_preview'] = "Ukáza/editova stránku";
				$lang_string['instructions_preview'] = "Takto vyzerá vaa stránka. Pokia¾ pouíváte týlovanie textu alebo vkládáte obrázky, nezabudnite 'uzavrie' vetky 'tagy'.";
				$lang_string['title_update'] = "Úpravy stránky";
				$lang_string['instructions_update'] = "Vau stránku môete upravi vo formulári nie. Po dokonèení kliknite na 'Ukáza' alebo 'Odosla'.";
				$lang_string['form_error'] = "Vyplnte  pole s názvom, textom a názvom súboru.";	

				// Error Response
				$lang_string['error'] = "<h2>Úha!</h2>Záznam nebol uloený. Poèas ukladania sa objavil problém.<br /><br />Server ohlásil:<br />";
				break;
			case 'add_block':

				// Add / Manage Blocks
				$lang_string['title'] = "prida/upravi bloky";
				$lang_string['instructions'] = "Pridánie vlastných blokov. Vyplòte formulár nie a kliknite na 'Prida blok'. Kliknutím na tlaèítko vy a ni upravíte umiestenie bloku v postrannom ståpci. Kliknutím na tlaèítko editova blok upravíte. Kliknutím na tlaèítko vymaza blok zruíte";
				$lang_string['up'] = "vy";
				$lang_string['down'] = "ni";
				$lang_string['edit'] = "editova";
				$lang_string['delete'] = "vymaza";
				$lang_string['block_name'] = "Názov bloku:";
				$lang_string['block_content'] = "Obsah bloku:";
				$lang_string['instructions_edit'] = "Práve editujete blok:";
				$lang_string['instructions_modify'] = "Kliknite niie a editujte blok:";
				$lang_string['submit_btn_edit'] = "Editova blok";
				$lang_string['submit_btn_add'] = "Pridat blok";
				$lang_string['form_error'] = "Vyplòte pole s názvom bloku.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Statické stránky:";

				// Add / Manage Links
				$lang_string['title'] = "prida/upravi odkazy";
				$lang_string['instructions'] = "Pridávanie vlastných odkazov na iné weby. Vyplòte formulár niie a kliknite na 'Prida odkaz'. Kliknutím na tlaèítka vy a ni upravíte umiestenie odkazu v menu. Kliknutím na tlaèítko editova odkaz upravíte. Kliknutím na tlaèítko vymaza odkaz zruíte";
				$lang_string['up'] = "vy";
				$lang_string['down'] = "ni";
				$lang_string['edit'] = "editova";
				$lang_string['delete'] = "vymaza";
				$lang_string['link_name'] = "Názov odkazu:";
				$lang_string['link_url'] = "URL odkazu (volite¾ný. Nevyplnením vytvoríte oddelovaè):";
				$lang_string['instructions_edit'] = "Práve editujete odkaz:";
				$lang_string['instructions_modify'] = "Kliknite niie a upravte odkaz:";
				$lang_string['submit_btn_edit'] = "Editova odkaz";
				$lang_string['submit_btn_add'] = "Prida odkaz";
				$lang_string['form_error'] = "Vyplòte pole s názvom odkazu.";
				break;
			case 'categories':

				// Add / Manage Links
				$lang_string['title'] = "prida/upravi kategórie";
				$lang_string['instructions'] = "Pouite formulár niie pre vytvorenie kategorií. Kadú kategóriu zadajte vo formáte 'Názov kategórie (id èíslo)'. Hierarchiu vytvoríte odsadením poloiek medzerami.<br /><br /><b>Príklad:</b><br />Hlavné (1)<br />Novinky (3)<br />&nbsp;&nbsp;Ponuky (6)<br />&nbsp;&nbsp;Udalosti (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Rôzne (7)<br />Technológie (2)<br />";
				$lang_string['error'] = "Chyba";
				$lang_string['current_categories'] = "Vytvorené kategórie";
				$lang_string['no_categories_found'] = "Nie su iadné kategórie";
				$lang_string['category_list'] = "Zoznam kategórií:";
				$lang_string['validate'] = "Overenie";
				$lang_string['submit_btn'] = "&nbsp;Odosla&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Zmena farieb";
				$lang_string['instructions'] = "Tu môete zmeni farby textov a pozadia stránok. Najprv vyberte pole niie a potom pouite ponuku farieb. Prísluné hodnoty sa zmenia automaticky.";
				$lang_string['bg_color'] = "Pozadie stránky";
				$lang_string['main_bg_color'] = "Pozadie hlavnej stránky";
				$lang_string['border_color'] = "Okraj stránky";
				$lang_string['inner_border_color'] = "Vnútorný okraj";
				$lang_string['header_bg_color'] = "Pozadie záhlavia";
				$lang_string['header_txt_color'] = "Text záhlavia";
				$lang_string['menu_bg_color'] = "Pozadie menu";
				$lang_string['footer_bg_color'] = "Pozadie zápätia";
				$lang_string['txt_color'] = "Hlavný text";
				$lang_string['headline_txt_color'] = "Text nadpisu";
				$lang_string['date_txt_color'] = "Text data";
				$lang_string['footer_txt_color'] = "Text zápätia";
				$lang_string['link_reg_color'] = "K¾udový odkaz";
				$lang_string['link_hi_color'] = "Zvolený odkaz";
				$lang_string['link_down_color'] = "Aktivný odkaz";

				// More Colors
				$lang_string['entry_bg'] = "Pozadie záznamu";
				$lang_string['entry_title_bg'] = "Pozadie názvu záznamu";
				$lang_string['entry_border'] = "Okraj záznamu";
				$lang_string['entry_title_text'] = "Text názvu záznamu";
				$lang_string['entry_text'] = "Text záznamu";
				$lang_string['menu_bg'] = "Pozadie menu";
				$lang_string['menu_title_bg'] = "Pozadie názvu menu";
				$lang_string['menu_border'] = "Okraj menu";
				$lang_string['menu_title_text'] = "Text názvu menu";
				$lang_string['menu_text'] = "Text menu";
				$lang_string['menu_link_reg_color'] = "K¾udový odkaz menu";
				$lang_string['menu_link_hi_color'] = "Zvolený odkaz menu";
				$lang_string['menu_link_down_color'] = "Aktivný odkaz menu";

				// Submit
				$lang_string['color_preset'] = "Farebná schéma:";
				$lang_string['scheme_name'] = "Vlote názov vlastnej farebnej schémy:";
				$lang_string['scheme_file'] = "Vlote název súboru (bez medzier a prípony):";
				$lang_string['save_btn'] = "&nbsp;Uloi&nbsp;";
				$lang_string['form_error'] = "Vlote názov váej farebnej schémy.";
				$lang_string['submit_btn'] = "&nbsp;Odosla&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'Vybraný vzh¾ad neumoòuje vo¾bu vlastnej farebnej schémy.';

				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Informácie neboli uloené. Poèas ukladania sa objavil problém.<br /><br />Server ohlásil:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Meno:"; //New in 0.4.6.2
				$lang_string['email'] = "E-mail:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Stránky:"; //New in 0.4.6.2
				$lang_string['komentár'] = "Komentár:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "IP adresa:";  // New for 0.4.6.2
				$lang_string['useragent'] = "Pouíváte:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>Na %s, %s napísal:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				
				$lang_string['comment_capcha'] = "Antispam: Vlote reazec "; // 0.4.2
				$lang_string['title'] = "Komentáre";
				$lang_string['header'] = "Vloi komentár";
				$lang_string['instructions'] = "Vyplòte formulár niie a pridajte vá vlastný komentár.";
				$lang_string['comment_name'] = "Vae Meno:";
				$lang_string['comment_email'] = "E-mail:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['commentposted'] = "Nový komentár odeslaný: ";  // New for 0.4.6.2
				$lang_string['comment_remember'] = "Zapamätova:";
				$lang_string['comment_text'] = "Text komentára:";
				$lang_string['post_btn'] = "&nbsp;Odosla komentár&nbsp;";
				$lang_string['delete_btn'] = "vymaza";
				$lang_string['expired_comment1'] = "¼utujeme. Komentáre boli umonené po dobu "; // New for 0.4.8
				$lang_string['expired_comment2'] = " dní."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Prepáète, vaa IP adresa bola zablokovaná. Nemôete vkláda iadne komentáre."; // New for 0.4.8
        
				// Error Response
				$lang_string['error_add'] = "<h2>Fúha!</h2>Komentár nebol uloený. Poèas ukladánia sa objavil problém.<br /><br />Server ohlásil:<br />";
				$lang_string['error_delete'] = "<h2>Fúha!</h2>Komentár nebol vymazaný. Poèas mazania sa objavil problém.<br /><br />Server ohlásil:<br />";
				$lang_string['form_error'] = "Vyplòte pole s menom, textom komentára a Antispamom.";
				break;

			case 'delete':
				$lang_string['title'] = "vymaza záznam";
				$lang_string['instructions'] = "Chcete vymaza tento záznam? Uistite sa, e to naozaj chcete, akcia sa nedá vráti...";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Zrui&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Fúha!</h2>Nedá sa vymaza záznam.<br /><br />Server ohlásil:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "vymaza stránku";
				$lang_string['instructions'] = "Chcete vymaza túto stránku? Uistite sa, e to naozaj chcete, akcia sa nedá vráti...";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Zrui&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Fúha!</h2>Nedá sa vymaza stránka.<br /><br />Server ohlásil:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Zoznam obrázkov";
				$lang_string['instructions'] = "Kliknutím na odkazy niie zobrazíte obrázky.<br /><br />Pridánie obrázku do záznamu:<br />1) Ctrl (alebo pravý) klik na odkaz, vyberte 'Kopírova odkaz do schránky'.<br />2) Vrate sa na pridánie alebo editáciu záznamu.<br />3) Kliknite na tlaèítko 'img' a vlote adresu obrázku do formulára.";
				break;
			case 'info':
				$lang_string['title'] = "Meta data";
				$lang_string['instructions'] = "Informácie niie sú pouité ako &quot;meta data&quot;, které pomáhajú vyh¾adávaèom nájs správne informácie o vaich stránkách. Informácie môu by vyuívané tie v RSS kanáloch.";
				$lang_string['info_keywords'] = "K¾úèové slová (zoznam k¾úèových slov, oddelených èiarkami):";
				$lang_string['info_description'] = "Popis (obsah alebo vo¾ný textový popis vaich stránok):";
				$lang_string['info_copyright'] = "Práva (copyright alebo odkaz na prísluný dokument):";
				$lang_string['submit_btn'] = "&nbsp;Odosla&nbsp;";				// Error Response
				$lang_string['error'] = "<h2>Fúha!</h2>Informace neboli uloené. Poèas ukladania informacií sa objavil problém.<br /><br />Server ohlásil:<br />";
				$lang_string['form_error'] = "Vyplòte pole s názvom a menom autora.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating':
				$lang_string['error'] = "<h2>Fúha!</h2>Informácie neboli uloené. Poèas ukladania sa objavil problém.<br /><br />Server ohlásil:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Obnovenie</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n komentárových súborov vyaduje obnovenie:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Obnovi komentáre"; // New 0.3.8
				$lang_string['title'] = "Prihlásenie";
				$lang_string['instructions'] = "Vlote prihlasovacie meno a heslo";
				$lang_string['username'] = "Prihlasovacie meno:";
				$lang_string['password'] = "Heslo";
				$lang_string['submit_btn'] = "&nbsp;Odosla&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Úspech!</h2>Ste prihlásený. Príjemnú prácu so stránkami!<p />";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>Fúha!</h2>Nie ste prihlásený. Zadajte svoje prihlasovacie meno a heslo správne a skúste to znova.<p />";
				$lang_string['form_error'] = "Vyplòte pole s menom a heslom.";
				break;
			case 'logout':
				$lang_string['title'] = "Odhlásenie";
				$lang_string['instructions'] = "<h2>Fúha!</h2>Odhlásenie neprebehlo korektne. Nedá sa vymaza cookie.Alebo ste stále prihlásený?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Fúha!</h2>Informácie neboli uloené. Poèas ukladania sa objavil problém.<br /><br />Server ohlásil:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Zmena prihlasovacieho mena a hesla";
				$lang_string['instructions'] = "Pouite formulár niie a zmeòte vae prihlasovacie meno a/alebo heslo. Vlote nové prihlasovacie meno a heslo, ktoré chcete pouíva.";
				$lang_string['username'] = "Prihlasovacie meno:";
				$lang_string['password'] = "Heslo:";
				$lang_string['submit_btn'] = "&nbsp;Odosla&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Úspech!</h2>Vae prihlasovacie meno a/alebo heslo je aktívne. Príjemnú prácu so stránkami!<p />";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>Fúha!</h2>Informácie neboli uloené. Pri uloení váho mena a/alebo hesla sa objavil problém.<br /><br />Server ohlásil:<br />";
				$lang_string['form_error'] = "Vyplòte pole s menom a heslom.";
				$lang_string['explanation'] = "V aktuálnej verzii programu bola zmenená truktúra prihlasovania.  Naïalej nie je môné zmeni heslo a/alebo prihlásenie priamo na stránkach. Pokia¾ chcete zmeni heslo, vymate súbor /config/password.php a uistete sa, e súbory install*.php sú uloené na serveri. Potom obnovte túto stránku alebo sa odhláste. Skript, pouitý pri vytváraní stránok, sa spustí opä.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Vitajte!";
				$lang_string['instructions'] = "Ïakujeme, e ste si vybrali Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Vo¾ba jazyka:";
				$lang_string['submit_btn'] = "&nbsp;Odosla&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Vitajte!";
				$lang_string['instructions'] = "
				Ïakujeme, e ste si vybrali Simple PHP Blog!<br /><br />Simple PHP Blog je jednoduchý blogovací systém. Vyaduje PHP 4.1 alebo vyiu a nastavenie práv zápisu na serveri. Vetky informácie sú uloené v textových súboroch, take nie je vyadovaná databáza.<br /><br />
				Najskôr je potrebné vytvori tri adresáre (<b>config</b>, <b>content</b> a <b>images</b>) pre ukladanie vaich informácií. Potom zadáte heslo a môete zaèa pracova.<br /><br />
				<b>Kliknite niie a zahájte nastavenie:</b>";
				$lang_string['begin'] = "[ Zaháji nastavenie ]";
				break;
			case 'install02':
				$lang_string['title'] = "Nastavenie";
				$lang_string['instructions'] = "Vytvorenie adresárov <b>config</b>, <b>content</b> a <b>images</b>:";
				$lang_string['folder_exists'] = "OK! Adresáre existují. Nie su potrebné iadne úpravy...";
				$lang_string['folder_failed'] = "Fúha! Nedá sa vytvori adresár...";
				$lang_string['folder_success'] = "Úspech! Adresár je vytvorený...";
				// Help
				$lang_string['help'] = "
				<h2>Ouha!</h2>
				Nedá sa vytvori jeden alebo viac adresárov!<br /><br />To môe by zpôsobené:<br />
				<ol>
				<li><b>Práva zápisu</b> nie je správne nastavený prístup <b>Read/Write</b>.</li>
				<li><b>UID</b> (identifikácia uívate¾a) vetkých súborov a adresárov musia by zhodné.</li>
				</ol>
				Zkúste previes opravu popísanú niie a potom kliknite na <b>Skúsi znova</b>:<br />
				<ol>
				<li>Manuálne vytvorte následujúce adresáre: <b>config</b>, <b>content</b> a <b>images</b>.</li>
				<li>Zaistite <b>práva zápisu</b> pre tieto adresáre: Pouite vá FTP program: vlastník (Owner), uivate¾ (User) a svet (World) by mali ma prístup <b>Read</b> a <b>Write</b>. <i>(Prípadne môete kontaktova váho poskytovate¾a hostingu a poiada o zmenu...)</i></li>
				<li>Uistite se, e UID vetkých vaich súborov a adresárov sú rovnaké. <i>(Prípadne môete kontaktova váho poskytovate¾a hostingu a poiada o zmenu...)</i></li>
				</ol>";
				$lang_string['try_again'] = "[ Zkúsi znova ]";
				// Success
				$lang_string['success'] = "<h2>Úspech!</h2>Adresáre boli úspene vytvorené!<p /><b>Kliknite niie pre pokraèovanie:</b>";
				$lang_string['continue'] = "[ Pokraèova ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>Vá webový server podporuje následujúce kryptokódovanie:</b>";
				$lang_string['standard'] = "tandardné DES: ";
				$lang_string['extended'] = "Rozírené DES: ";
				$lang_string['MD5'] = "MD5: ";
				$lang_string['blowfish'] = "Blowfish: ";
				$lang_string['enabled'] = "zapnuté";
				$lang_string['disabled'] = "vypnuté";
				$lang_string['using_standard'] = "<b>Pouité tandardné DES...</b>";
				$lang_string['using_extended'] = "<b>Pouité rozírené DES...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Pouité MD5...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Pouité Blowfish...</b>";
				$lang_string['using_unknown'] = "<b>Pouité neznáme kódovanie...</b>";
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
				$lang_string['title'] = "Zada prihlasovacie meno a heslo";
				$lang_string['instructions'] = "Pouite formulár niie a zadajte prihlasovacie meno a heslo.";
				$lang_string['username'] = "Prihlasovacie meno:";
				$lang_string['password'] = "Heslo:";
				$lang_string['submit_btn'] = "&nbsp;Odosla&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Gratulujeme!</h2>Ste prihlásený. Kliknite niie a prejdite na nastavenie, kde môete zada názov vaich stránok. Príjemnú prácu so stránkami!<p />";
				$lang_string['btn_setup'] = "[ Nastavenie ]";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>Fúha!</h2>Informácie neboli uloené. Pri ukladaní váho prihlasovacieho mena a/alebo hesla sa objavil problém.<br /><br />Server ohlásil:<br />";
				$lang_string['form_error'] = "Vyplòte pole s menom a heslom.";
				break;
			case 'install04':
				$lang_string['title'] = "Vytvorenie súboru s heslom";
				$lang_string['instructions'] = "Toto je dôleitá èas:<br />
				<ol>
				<li>Spustite niektorý textový editor <i>(Notepad, WordPad, Word, BBEdit, Pico, VI atï...).</i></li>
				<li>Vytvorte nový textový súbor.</li>
				<li>Zkopírujte a vlote do súboru kód z okna niie.</li>
				<li>Súbor ulote a pomenujte <b>password.php</b> <i>(súbor ulote ako <b>text</b> alebo <b>èistý (plain) text</b>).</i></li>
				<li>Spustite FTP program.</li>
				<li>Nahrajte súbor <b>password.php</b> do adresára <b>config</b> na vaom serveri.</li>
				<li>Vymate <b>password.php</b> z váho disku.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Poznámka: Pokia¾ chcete zmeni vae prihlasovacie meno a heslo (asi zabudnuté), vymate súbor <b>password.php</b> v adresári <b>config</b>. Pri budúcej návteve stránok si celý postup zopakujete...</i>";
				$lang_string['code'] = "Kód pro súbor <b>password.php</b>:";
				$lang_string['continue'] = "[ Pokraèova ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Prihlásenie";
				$lang_string['instructions'] = "Vlote prihlasovacie meno a heslo";
				$lang_string['username'] = "Prihlasovacie meno:";
				$lang_string['password'] = "Heslo";
				$lang_string['submit_btn'] = "&nbsp;Odosla&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Gratulujeme!</h2>Ste prihlásený.<p />
				Kliknite niie a prejdite na stránku <b>Nastavenie</b>, kde môete upresni ostatné vlastnosti stránok.<p />
				<i>Poznámka: Teraz je proces nastavenia dokonèený. Doporuèujeme vymaza súbory <b>installXX.php</b> z váho webu (èie install00.php a install06.php).</i><p />";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>Fúha!</h2>Nie ste prihlásený. Preverte, èi je zadané prihlasovacie meno a heslo správne a skuste to znova.<p />";
				$lang_string['form_error'] = "Vyplòte pole s menom a heslom.";
				// Success
				$lang_string['btn_setup'] = "[ Nastavenie ]";
				$lang_string['btn_try_again'] = "[ Skúsi znova ]";
				break;
			case 'setup':
				$lang_string['title'] = "Nastavenie";
				$lang_string['instructions'] = "Niie môete meni názov vaich stránok a osobné informácie.";
				$lang_string['blog_title'] = "Názov stránky:";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "E-mail (viac e-mailových adries by malo by oddelené èiarkami, nevyplnením vypnete stránku Kontaktujte ma)"; // Updated 0.4.7
				$lang_string['blog_avatar'] = "URL avataru (ponechajte nevyplnené pre iadny):"; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Zápätie:";
				$lang_string['blog_choose_language'] = "Vo¾ba jazyka:";
				$lang_string['blog_enable_comments'] = "Povoli komentáre";
				$lang_string['blog_comments_popup'] = "Komentáre otvára vo vyskakovacom okne";
				$lang_string['blog_enable_voting'] = "Povoli èitate¾om hodnotenie záznamov";
				$lang_string['blog_enable_cache'] = "Povoli keovánie záznamov (môe zrýchli naèítanie u niektorých serverov)"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Zobrazi kalendár"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Zobrazi archívy"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Zobrazi poèítadlo prístupov v postrannom ståpci"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "Poèet hodín do vynulovania prístupu (pre pecificku IP adresu):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Zobrazi prihlásenie (inak si najskôr vytvorte záloku \"login.php\"...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Povoli textový názov blokov (odznaète, pokia¾ chcete pouíva grafiku)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Povoli pevné odkazy na záznamy"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Povoli antispam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Zobrazi poèítadlo prístupov v zápäti"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Graficky (musí by intalovaná GD knihovna) / textový antispam"; // New for 0.4.8
				$lang_string['blog_enable_stats'] = "Zobrazi tatistiku v menu"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Zobrazi zoznam najnovích komentárov"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Zobrazi zoznam najnovích záznamov"; // New for 0.4.7
				$lang_string['blog_email_notification'] = "Posiela e-mailovú notifikáciu komentárov";
				$lang_string['blog_send_pings'] = "Posiela &quot;pingy&quot;";
				$lang_string['blog_ping_urls'] = "Vlote kompletnú URL (napr. http://www.obchodpc.sk) sluby posielanie &quot;pingu&quot;.<br />(Môete vloit viac adries, oddelených èiarkami)";
				$lang_string['blog_trackback_about'] = "Zpätné sledovanie (trackbacks) zaiuje notifikáciu medzi webmi. Web dostane informáciu o tom, e je naò odkázané, pomocou odoslaných pingov. Tak ide zisti, kdo je pripojený na vae stránky.<br />
				   URI pingov môete vloi manuálne, alebo skúsi automatické rozpoznávanie.";
				$lang_string['blog_trackback_enabled'] = "Povoli zpätné sledovanie odkazov a záznamov";
				$lang_string['blog_trackback_auto_discovery'] = "Povoli automatické rozpoznávanie v záznamoch, obsahujúcích URL adresy";
				$lang_string['blog_max_entries'] = "Najvyí poèet zobrazených záznamov:";
				$lang_string['blog_comment_tags'] = "Tagy, povolené v komentároch:";
				$lang_string['blog_gzip_about'] = "
					Poèínajúc PHP 4.0.4 ide èíta a zapisova súbory, komprimované metódou GZIP (.gz),	a uetri tak diskový priestor. Tie ide komprimova stránky odoslané prehliadaèmi, podporujúcim túto kompresiu, a tým uetri objem prenosu dát.<br />
					<br />
					Podpora kninice Zlib v PHP nie je predom zapnutá. Pokia¾ sú Vo¾by neaktívne, vaa intalácia PHP neumoòuje GZIP kompresiu.";
				$lang_string['blog_enable_gzip_txt'] = "Povoli kompresiu GZIP pre databázové súbory";
				$lang_string['blog_enable_gzip_output'] = "Povoli kompresiu GZIP pre HTTP výstup";
				$lang_string['submit_btn'] = "&nbsp;Odosla&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Fúha!</h2>Informácie neboli uloené. Poèas ukladania sa objavil problém.<br /><br />Server ohlásil:<br />";
				$lang_string['form_error'] = "Vyplòte pole s názvom a menom autora.";
				$lang_string['label_entry_order'] = "Poradie záznamov:";
				$lang_string['select_new_to_old'] = "Od najnovieho";
				$lang_string['select_old_to_new'] = "Od najstarieho";
				$lang_string['label_comment_order'] = "Poradie komentárov:";
				$lang_string['cal_sunday'] = "Nede¾a";
				$lang_string['cal_monday'] = "Pondelok";
				$lang_string['label_calendar_start'] = "Prvý deò v týdni";
				$lang_string['title_sidebar'] = "Postranný ståpec"; // New in 0.4.7
				$lang_string['title_comments'] = "Komentár"; // New in 0.4.7
				$lang_string['title_trackback'] = "Zpetné sledovanie"; // New in 0.4.7
				$lang_string['title_compression'] = "Kompresia"; // New in 0.4.7
				$lang_string['title_entries'] = "Záznamy"; // New in 0.4.7
				$lang_string['title_general'] = "Veobecne"; // New in 0.4.7
				$lang_string['title_language'] = "Jazyk"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Ko¾ko dní budú umonené komentáre? (0 znamená neomedzene)"; // New in 0.4.8
				break;
			case 'trackbacks':
				// Trackbacks
				$lang_string['title'] = "Zpetné sledovanie (trackbacks)";
				$lang_string['header'] = "URL tohoto záznamu pre zpetné sledovanie:";
				$lang_string['delete_btn'] = "vymaza";
				// Error Response
				$lang_string['error_add'] = "Chyba pri ukladaní sledovania.";
				break;
			case 'options':
				$lang_string['title'] = "Vo¾by";
				$lang_string['instructions'] = "Pouite formulár niie pre nastavenie formátu dát a èasu vaich záznamov. Môete zvolit 12 alebo 24 hodinový formát èasu a krátky alebo dlhý formát pre dátum. <b>Náh¾ad</b> bude upravený automaticky po kadej zmene.";
				// Long Date
				$lang_string['ldate_title'] = "Dlhý formát dát:";
				$lang_string['weekday'] = "Deò v týdni";
				$lang_string['month'] = "Mesiac";
				$lang_string['day'] = "Deò";
				$lang_string['year'] = "Rok";
				$lang_string['none'] = "iadny";
				// Short Date
				$lang_string['sdate_title'] = "Krátky formát dát:";
				$lang_string['s_month'] = "Mesiac";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Deò";
				$lang_string['s_year'] = "Rok";
				$lang_string['zero_day'] = "Úvodná nula pre deò";
				$lang_string['show_century'] = "Ukáza storoèie";
				// Time
				$lang_string['time_title'] = "Formát èasu:";
				$lang_string['12hour'] = "12 hodinový";
				$lang_string['24hour'] = "24 hodinový";
				$lang_string['before_noon'] = "Dopoludnia";
				$lang_string['after_noon'] = "Poobede";
				// Date
				$lang_string['date_title'] = "Zobrazenie dát:";
				$lang_string['long_date'] = "Dlhé";
				$lang_string['short_date'] = "Krátke";
				$lang_string['time'] = "Èas";
				// Menu
				$lang_string['menu_title'] = "Zobrazenie dát v menu:";
				$lang_string['long_date'] = "Dlhé";
				$lang_string['short_date'] = "Krátke";
				// Used in multiple places
				$lang_string['zero_day'] = "Úvodná nula pre deò";
				$lang_string['zero_month'] = "Úvodná nula pre mesiac";
				$lang_string['zero_hour'] = "Úvodná nula pre hodinu";
				$lang_string['separator'] = "Oddelovaè:";
				$lang_string['preview'] = "Náh¾ad:";
				$lang_string['server_offset'] = "Posun èasu na serveri:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Odosla&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Fúha!</h2>Informácie neboli uloené. Poèas ukladania sa objavil problém.<br /><br />Server ohlásil:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Vzh¾ady";
				$lang_string['instructions'] = "Pouite rozbalovacie menu a vyberte vzh¾ad.";
				// Themes
				$lang_string['choose_theme'] = "Vzh¾ady:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Odesla&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Informácie neboli uloené. Poèas ukladania sa objavil problém.<br /><br />Server ohlásil:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Nahra obrázok";
				$lang_string['instructions'] = "Kliknite na tlaèítko niie a vyberte súbor k nahraniu.";
				$lang_string['select_file'] = "Vybra súbor:";
				$lang_string['upload_btn'] = "Nahra";
				// Error Response
				$lang_string['error'] = "<h2>Fúha!</h2>Nedá sa nahra obrázok. Tu sú podrobnejie informácie:<br /><br />Server ohlásil:<br />";
				break;
			case 'search':
				$lang_string['title'] = "Výsledky h¾adania";
				$lang_string['instructions'] = "Výsledky h¾addnia pre <b>%string</b>:";
				$lang_string['not_found'] = "Niè nebolo nájdené";
				break;
			case 'contact':
				$lang_string['contact_capcha'] = "Antispam: Vlote "; // 0.4.2
				$lang_string['title'] = "Kontaktujte ma";
				$lang_string['instructions'] = "Vyplòte formulár:";
				$lang_string['form_error'] = "Vyplòte pole Vec a Text správy.";
				$lang_string['name'] = "Meno:";
				$lang_string['email'] = "E-mail:";				
				$lang_string['subject'] = "Vec:";
				$lang_string['comment'] = "Text správy:";
				$lang_string['submit_btn'] = "&nbsp;Odosla&nbsp;";
				$lang_string['success'] = "<h2>Úspìch!</h2>Vaa správa bola odoslaná.<p />";
				$lang_string['failure'] = "<h2>Chyba!</h2>Vaa zpráva nebola odoslaná. Najèastejí dôvod je patne zadaný antispamový reazec.<p />";
				$lang_string['contactsent'] = "Kontakt odoslaný zo stránok: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP adresa:";  // New for 0.4.6
				$lang_string['useragent'] = "Pouívate:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>%s %s napísal:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string["title"] = "tatistiky";
				$lang_string["general"] = "Veobecne";
				$lang_string["entry_info"] = "<b>%s</b> záznamov obsahuje <b>%s</b> slov, uloených v <b>%s</b> bajtoch";
				$lang_string["comment_info"] = "<b>%s</b> komentárov obsahuje <b>%s</b> slov uloených v <b>%s</b> bajtoch";
				$lang_string["trackback_info"] = "<b>%s</b> zpetných sledovaní uloených v <b>%s</b> bajtoch";
				$lang_string["static_info"] = "<b>%s</b> tatických stránok obsahuje <b>%s</b> slov uloených v <b>%s</b> bajtoch";
				$lang_string["most_viewed_entries"] = "10 najèastejie zobrazených záznamov";
				$lang_string["most_commented_entries"] = "10 najèastejie komentovaných záznamov";
				$lang_string["most_trackbacked_entries"] = "10 najviac zpetne sledovaných záznamov";
				$lang_string['vote_info'] = "<b>%s</b> hodnotení uloených v <b>%s</b> bajtoch"; // 0.4.1
				$lang_string["most_voted_entries"] = "10 najviac hodnotených záznamov"; // 0.4.1
				$lang_string["most_rated_entries"] = "10 najlepie hodnotených záznamov"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP chyba 403.8 - Prístup na stránku/funkcia zakázaný';
				$lang_string["errorline1"] = 'Stránka alebo funkcia, ktorú ste se pokúsili vyvola vyaduje pouitie cookies.';
				$lang_string["errorline2"] = 'Obnovte funkènost cookie vo vaom prehliadaèi alebo ochrannom software a skúste vá poiadavok znovu.';
				$lang_string["clientid"] = 'ID klienta: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Chyba 403.8 - Prístup na stránku/funkcia zakázaný';
				$lang_string["404"] = 'HTTP Chyba 404 - Stránka/funkcia neexistuje';
				$lang_string["error_404"] = 'Stránka alebo funkcia, ktorú ste sa pokúsili vyvola neexistuje.';
				$lang_string["error_javascript"] = 'Stránka alebo funkcia, ktorú ste sa pokúsili vyvola vyaduje javascript.';
				$lang_string["error_emailnotsent"] = 'Zpráva, ktorú ste sa pokúsili odosla je chybná.';
				$lang_string["error_emailnotsentcapcha"] = 'Správa, ktorú ste se pokúsili odosla, je chybná, pretoe antispamový retazec bol vloený nesprávne alebo vôbec.';
				$lang_string["clientid"] = 'ID klienta: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Administrácia smajlikov";
				$lang_string['instructions'] = "
					Vyberte smajlíky, ktoré chcete pouíva. Do políèok formulára zapíte retazce, ktoré budú nahradzované smajlíkmi. Môete pouí nieko¾ko rôzných retazcov, oddelených èiarkami.<br /><br />
		
					Napríklad:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />
					
					<i>(Doporuèujeme pouíva dlhie ako dvouznakový reazec, 
					aby nedochádzalo k nepredpokladaným náhradám v benom texte)</i>";
				$lang_string["upload_instructions"] = 'Nahra nový smajlík:';
				$lang_string["upload_success"] = 'Úspech! obrázok bol úspene nahraný!';
				$lang_string["upload_error"] = 'Chyba! obrázok nebol nahraný.';
				$lang_string["upload_invalid"] = 'Chyba! Nesprávny súbor s obrázkom. Obrázok musí by png, jpg alebo gif.';
				$lang_string["save_success"] = 'Nastavenie smajlíkov bolo úspene uloené!';
				$lang_string["save_error"] = 'Chyba! Nastavenie smajlíkov nebolo uloené.';
				$lang_string["save_button"] = 'Uloi smajlíky';
				break;
			default:
				break;
		}
	}
?>
