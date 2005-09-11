<?php
	// Greek Translations
	// (c) 2004 Alexander Palmo, apalmo <at> bigevilbrain <dot> com (0.4.1)
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Greek
		$lang_string['locale'] = 'el'; // <-- New 0.3.7
		$lang_string['language'] = 'greek';
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-7';
		$lang_string['php_charset'] = 'ISO-8859-7';
		
		setlocale( LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Óýíäåóìïé";
		$lang_string['menu_home'] = "Áñ÷éêÞ Óåëßäá";
		$lang_string['menu_contact'] = "Contact Me";
		$lang_string['menu_stats'] = "Stats";
		$lang_string['menu_archive'] = "Áñ÷åßï";
		$lang_string['menu_menu'] = "Ìåíïý";
		$lang_string['menu_add'] = "ÅéóáãùãÞ ÅããñáöÞò";
		$lang_string['menu_add_static'] = "ÅéóáãùãÞ ÓôáôéêÞò Óåëßäáò";
		$lang_string['menu_upload'] = "ÁðïóôïëÞ Åéêüíáò";
		$lang_string['menu_setup'] = "ÅãêáôÜóôáóç";
		$lang_string['menu_categories'] = "Categories";
		$lang_string['menu_info'] = "Ðëçñïöïñßåò"; // <-- New 0.3.7
		$lang_string['menu_options'] = "ÅðéëïãÝò";
		$lang_string['menu_themes'] = "ÈÝìáôá";
		$lang_string['menu_colors'] = "×ñþìáôá";
		$lang_string['menu_change_login'] = "ÁëëáãÞ Login";
		$lang_string['menu_logout'] = "¸îïäïò";
		$lang_string['menu_login'] = "Login";
		$lang_string['menu_most_recent'] = "Ðéï Ðñüóöáôá Ó÷üëéá";
		$lang_string['menu_most_recent_entries'] = "Most Recent Entries";
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks";
		$lang_string['menu_add_block'] = "Blocks";
		
		// Other
		$lang_string['home'] = 'ÅðéóôñïöÞ óôçí Áñ÷éêÞ Óåëßäá';
		$lang_string['nav_next'] = 'Åðüìåíï'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Ðßóù'; // <-- New 0.3.7
		$lang_string['search_title'] = 'ÁíáæÞôçóç:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'ÐÜìå'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Ç óåëßäá åêôåëÝóôçêå óå ÷ñüíï %s äåõôåñïëÝðôùí'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( 'ÉáíïõÜñéïò', 'ÖåâñïõÜñéïò', 'ÌÜñôéïò', 'Áðñßëéïò', 'ÌÜúïò', 'Éïýíéïò', 'Éïýëéïò', 'Áýãïõóôïò', 'ÓåðôÝìâñéïò', 'Ïêôþâñéïò', 'ÍïÝìâñéïò', 'ÄåêÝìâñéïò' );
		$lang_string['sb_default_title'] = 'Äß÷ùò Ôßôëï';
		$lang_string['sb_default_author'] = 'Äß÷ùò ÓõããñáöÝá';
		$lang_string['sb_default_footer'] = 'Äß÷ùò Õðüóôõëï';
		
		$lang_string['sb_edit'] = 'åðåîåñãáóßá';
		$lang_string['sb_delete'] = 'äéáãñáöÞ';
		$lang_string['sb_permalink'] = 'permalink';
		$lang_string['sb_trackback'] = 'trackbacks';
		
		$lang_string['sb_add_comment_btn'] = 'åéóáãùãÞ ó÷ïëßïõ';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'ó÷üëéï';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'ó÷üëéá';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' åðéóêüðéóç';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' åðéóêïðßóåéò';
		
		$lang_string['sb_add_link_btn'] = '+ óýíäåóìï';
		
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "ÈÝìá:";
				$lang_string['label_insert'] = "ÅéóáãùãÞ Åéäéêïý:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
				$lang_string['view_images'] = "Åðéóêüðéóç ÁðåóôáëìÝíùí Åéêüíùí";
				$lang_string['label_entry'] = "ÅããñáöÞ:";
				$lang_string['btn_preview'] = "&nbsp;Ðñüåðéóêüðéóç&nbsp;";
				$lang_string['btn_post'] = "&nbsp;ÁðïóôïëÞ&nbsp;";
				$lang_string['file_name'] = "Static File Name: (no spaces or file extensions)";
				// Javascript Strings
				$lang_string['insert_styles'] = "ÅéóÜãåôå ôï êåßìåíï ðñïò åðåîåñãáóßá:";
				$lang_string['insert_image'] = "ÅéóÜãåôå ôï URL ãéá ôçí åéêüíá:";
				$lang_string['insert_url1'] = "ÅéóÜãåôå ôï êåßìåíï ãéá ôï óýíäåóìï (Ðñïáéñåôéêü):";
				$lang_string['insert_url2'] = "ÅéóÜãåôå ôï ðëÞñåò URL ãéá ôï óýíäåóìï:";
				$lang_string['insert_url3'] = "Öüñôùóç URL óå íÝï ðáñÜèõñï (Ðñïáéñåôéêü):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Ðáñáêáëþ óõìðëçñþóôå ôá ðåäßá Åðéêåöáëßäá êáé ÅããñáöÞ.";	
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Ðñïáéñåôéêü:';
				$lang_string['insert_image_width'] = 'ÌÞêïò (Ðñïáéñåôéêü):';
				$lang_string['insert_image_height'] = '¾øïò (Ðñïáéñåôéêü):';
				$lang_string['insert_image_popup'] = 'Åðéóêüðéóç óå ðëÞñåò ìÝãåèïò pop-up (Ðñïáéñåôéêü):';
				$lang_string['insert_image_float'] = 'Ìç óôáèåñü (Ðñïáéñåôéêü):';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "ÅéóáãùãÞ ÅããñáöÞò";
				$lang_string['instructions'] = "¸ôïéìïò ãéá bloging? ÓõìðëÞñùóå ôçí ðÜñáêÜôù öüñìá êáé êÜíå êëéê óôçí 'Ðñüåðéóêüðéóç' ãéá íá äåéò ðùò öáßíåôáé, Þ êÜíå êëéê óôçí 'ÁðïóôïëÞ' ãéá íá óþóåéò ôçí ÅããñáöÞ óïõ.";
				$lang_string['title_ad'] = "Confirm Trackback Pings";
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)";
				$lang_string['label_tb_autodiscovery'] = "autodiscovery";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Ðñïåðéóêüðéóç / Åðåîåñãáóßá ÅããñáöÞò";
				$lang_string['instructions_preview'] = "Ç åããñáöÞ óïõ öáßíåôáé êÜðùò Ýôóé. Áí ÷ñçóéìïðïéÞò text styles Þ óõìðåñéëáìâÜíåéò åéêüíåò, ìçí îå÷Üóåéò íá 'êëåßóåéò' üëá ôá 'tags'.";
				$lang_string['title_update'] = "ÅíçìÝñùóç ÅããñáöÞò";
				$lang_string['instructions_update'] = "Ìðïñåßò íá áëëÜîåéò ôçí åããñáöÞ óïõ ÷ñçóéìïðïéþíôáò ôçí ðáñáêÜôù öüñìá. ÊÜíå êëéê óôçí 'Ðñïåðéóêüðéóç' Þ óôçí 'ÁðïóôïëÞ' üôáí Ý÷åéò ôåëåéþóåé.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ïýðò!</h2>Ç ÅããñáöÞ äåí êáôá÷ùñÞèçêå. ÕðÞñîå Ýíá ðñüâëçìá êáôÜ ôçí êáôá÷þñçóç .<br /><br />Ï Server ëÝåé:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "ÅéóáãùãÞ ÓôáôéêÞò Óåëßäáò";
				$lang_string['instructions'] = "Fill out the form below to create a Static Page. Unlike a regular Blog Entry, Static Entries appear as a links in the right-hand menu. They are for pages that you always want available such as: About Me, Contact Us, Schedule, etc. Click 'Preview' to see how your entry will look, or click 'Post' to save your entry.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Ðñïåðéóêüðéóç / Åðåîåñãáóßá ÓôáôéêÞò Óåëßäáò";
				$lang_string['instructions_preview'] = "¸ôóé öáßíåôáé ç ÓôáôéêÞ Óåëßäá. Áí ÷ñçóéìïðïéåßò text styles Þ Ý÷åéò åðéóõíÜøåé åéêüíåò, èõìßóïõ íá êëÞóåéò üëá ôá 'tags'.";
				$lang_string['title_update'] = "ÁíáíÝùóç ÓôáôéêÞò Óåëßäáò";
				$lang_string['instructions_update'] = "Ìðïñåßò íá áëëÜîåéò ôçí åéóáãùãÞ ÷ñçóéìïðïéþíôáò ôçí ðáñáêÜôù öüñìá. ÊÜíå êëéê óôï 'Ðñïåðéóêüðéóç' Þ óôï 'ÁðïóôïëÞ' üôáí Ý÷åéò ôåëåéþóåé.";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>Ïõðò!</h2>Ç åéóáãùãÞ äåí áðïèçêåýèçêå. Åìöáíßóôçêå ôï åîÞò ðñüâëçìá êáôÜ ôçí áðïèÞêåõóç:<br /><br />ÌÞíõìá ëÜèïõò ôïõ Server:<br />";
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
				$lang_string['title'] = "ÐñïóèÞêç / Äéá÷åßñéóç ÓõíäÝäìùí";
				$lang_string['instructions'] = "ÐñïóèÞêç ðñïóáñìïóìÝíùí óõíäÝóìùí óå Üëëá sites. ÓõìðëÞñùóå ôçí ðáñáêÜôù öüñìá êáé êÜíå êëéê óôï 'ÐñïóèÞêç ÓõíäÝóìïõ' ãéá íá ðñïóèÝóåéò Ýíá óýíäåóìï. ÊÜíùíôò êëéê óôï ðÜíù Þ êÜôù âåëÜêé  ìðïñåßò íá áëëÜîåéò ôçí óåéñÜ ôùí óõíäÝóìùí. Ãéá ôçí åðåîåñãáóßá åíüò óõíäÝóìïõ, êëéê óôï áíôßóôïé÷ï ðëÞêôñï. Ãéá ôçí äéáãñáöÞ åíüò óõíäÝóìïõ, êëéê óôï áíôßóôïé÷ï ðëÞêôñï.";
				$lang_string['up'] = "ðÜíù";
				$lang_string['down'] = "êÜôù";
				$lang_string['edit'] = "åðåîåñãáóßá";
				$lang_string['delete'] = "äéáãñáöÞ";
				$lang_string['link_name'] = "¼íïìá ÓõíäÝóìïõ:";
				$lang_string['link_url'] = "Óýíäåóìïò URL: (Ðñïáéñåôéêü. ¢öçóôå ôï êåíü ãéá ôçí åéóáãùãÞ äéá÷ùñéóôéêïý.)";
				$lang_string['instructions_edit'] = "ÅðåîåñãÜæåóôå ôï óýíäåóìï:";
				$lang_string['instructions_modify'] = "Ãéá ôçí áëëáãÞ óõíäÝóìïõ êÜíå êëéê:";
				$lang_string['submit_btn_edit'] = "Åðåîåñãáóßá ÓõíäÝóìïõ";
				$lang_string['submit_btn_add'] = "ÐñïóèÞêç ÓõíäÝóìïõ";
				$lang_string['form_error'] = "Ðáñáêáëþ óõìðëçñþóôå ôï ðåäßï ¼íïìá.";
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
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "ÁëëáãÞ ÷ñùìÜôùí";
				$lang_string['instructions'] = "Ìðïñåßôå íá áëëÜîåôå ôá ÷ñþìáôá ôïõ êåéìÝíïõ êáé ôïõ öüíôïõ ùôïõ blog. Ðñþôá åðéëÝîôå ôï åðüìåíï ðåäßï, Ýðåéôá ÷ñçóéìïðïéÞóôå ôï åðåîåñãáóôÞ ÷ñùìÜôùí ãéá ôçí ìßîç ÷ñþìáôïò. Ç ÔéìÞ áëëÜæåé áõôïìÜôùò.";
				$lang_string['bg_color'] = "BG óåëßäá";
				$lang_string['main_bg_color'] = "BG Áñ÷éêÞ Óåëßäá";
				$lang_string['border_color'] = "Ðåñéèþñéï Óåëßäáò";
				$lang_string['inner_border_color'] = "Åóùôåñéêü Ðåñéèþñéï";
				$lang_string['header_bg_color'] = "BG Åðéêåöáëßäá";
				$lang_string['header_txt_color'] = "Êåßìåíï Åðéêåöáëßäáò";
				$lang_string['menu_bg_color'] = "BG Ìåíïý";
				$lang_string['footer_bg_color'] = "BG Õðïêåöáëßäá";
				$lang_string['txt_color'] = "Êõñßùò Êåßìåíï";
				$lang_string['headline_txt_color'] = "Êåßìåíï Åðéêåöáëßäáò";
				$lang_string['date_txt_color'] = "Êåßìåíï Çìåñïìçíßáò";
				$lang_string['footer_txt_color'] = "Êåßìåíï Õðïêåöáëßäá";
				$lang_string['link_reg_color'] = "Default Óýíäåóìïò";
				$lang_string['link_hi_color'] = "Hover Óýíäåóìüò";
				$lang_string['link_down_color'] = "Active Óýíäåóìüò";
				// More Colors
				$lang_string['entry_bg'] = "Áñ÷éêü BG";
				$lang_string['entry_title_bg'] = "Áñ÷éêüò Ôßôëïò BG";
				$lang_string['entry_border'] = "Áñ÷éêü Ðåñéèþñéï";
				$lang_string['entry_title_text'] = "Áñ÷éêü Êåßìåíï Ôßôëïõ";
				$lang_string['entry_text'] = "Áñ÷éêü Êåßìåíï";
				$lang_string['menu_bg'] = "Ìåíïý BG";
				$lang_string['menu_title_bg'] = "Ôßôëïò Ìåíïý BG";
				$lang_string['menu_border'] = "Ðåñéèþñéï Ìåíïý";
				$lang_string['menu_title_text'] = "Êåßìåíï Ôßôëïõ Ìåíïý";
				$lang_string['menu_text'] = "Êåßìåíï Ìåíïý";
				$lang_string['menu_link_reg_color'] = "ÐñïåðéëåãìÝíïò Óýíäåóìïò Ìåíïý";
				$lang_string['menu_link_hi_color'] = "Óýíäåóìïò Ìåíïý Hover";
				$lang_string['menu_link_down_color'] = "Óýíäåóìïò Ìåíïý Active";
				// Submit
				$lang_string['color_preset'] = "Color Schemes:";
				$lang_string['scheme_name'] = "Enter a custom color scheme name:";
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)";
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;";
				$lang_string['form_error'] = "Please enter a name for your custom color scheme.";
				$lang_string['submit_btn'] = "&nbsp;Êáôá÷þñçóç&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ïõðò!</h2>Ç ðëçñïöïñßá äåí êáôá÷ùñÞèçêå. Åìöáíßóôçêå ôï åîÞò ðñüâëçìá:<br /><br />ÌÞíõìá Server:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['comment_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Ó÷üëéá";
				$lang_string['header'] = "ÐñïóèÞêç Ó÷üëéïõ";
				$lang_string['instructions'] = "Óõìð[ëçñþóôå ôçí åðüìåíç öüñìá ãéá ôçí ðñïóèÞêç ôùí äéêþí óáò ó÷ïëßùí.";
				$lang_string['comment_name'] = "Ôï üíïìÜ óáò:";
				$lang_string['comment_email'] = "Email:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['comment_remember'] = "Remember me:";
				$lang_string['comment_text'] = "Ó÷üëéï:";
				$lang_string['post_btn'] = "&nbsp;ÁðïóôïëÞ Óüëéïõ&nbsp;";
				$lang_string['delete_btn'] = "äéáãñáöÞ";
				// Error Response
				$lang_string['error_add'] = "<h2>Ïõðò!</h2>Ôï Ó÷üëéï äåí áðïèçêåýèçêå. Åìöáíßóôçêå ôï åîÞò ðñüâëçìá:<br /><br />ÌÞíõìá Server:<br />";
				$lang_string['error_delete'] = "<h2>Ïõðò!</h2>Ôï Ó÷üëéï äåí äéáãñÜöçêå. Åìöáíßóôçêå ôï åîÞò ðñüâëçìá:<br /><br />ÌÞíõìá Server:<br />";
				$lang_string['form_error'] = "Ðáñáêáëþ óõìðëçñþóôå ôá ðåäßá ¼íïìá êáé Ó÷üëéï."; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "ÄéáãáöÞ ÅéóáãùãÞò";
				$lang_string['instructions'] = "ÁõôÞ åßíáé ç ÅããñáöÞ ôçí ïðïßá ðñüêåéôáé íá äéáãñÜøåôå. Âåâáéùèåßôå ðùò èÝëåôå íá ôçí äéáãñÜøåôå äéüôé äåí åßíáé äõíáôÞ ç åðáíüñèùóç áõôÞò ôçò ðñÜîçò...";
				$lang_string['ok_btn'] = "&nbsp;ÅíôÜîåé&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Áêýñùóç&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ïõðò!</h2>Ç ÅããñáöÞ äåí äéáãñÜöçêå.<br /><br />ÌÞíõìá Server:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "ÄéáãñáöÞ ÓôáôéêÞò Óåëßäáò";
				$lang_string['instructions'] = "ÁõôÞ åßíáé ç ÓôáôéêÞ Óåëßäá ðïõ ðñüêåéôáé íá äéáãñÜøåôå. Âåâáéùèåßôå ðùò èÝëåôå íá ôçí äéáãñÜøåôå äéüôé äåí åßíáé äõíáôÞ ç åðáíüñèùóç áõôÞò ôçò ðñÜîçò...";
				$lang_string['ok_btn'] = "&nbsp;ÅíôÜîåé&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Áêýñùóç&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ïõðò!</h2>ÅããñáöÞ äåí äéáãñÜöçêå.<br /><br />ÌÞíõìá Server:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Ëßóôá Åéêüíùí";
				$lang_string['instructions'] = "ÊÜíåôå êëéê óôïõò åðüìåíïõò ÓõíäÝóìïõò ãéá íá äåßôå ôéò åéêüíåò.<br /><br />Ãéá ôçí åéóáãùãÞ ìéáò åéêüíáò óôçí ÅããñáöÞ:<br />1) Control-click Ýíá óýíäåóìï êáé åðéëÝîôå 'ÁíôéãñáöÞ ÓõíäÝóìïõ óôï Clipboard'.<br />2) ÅðéóôñÝùôå óôçí óåëßäá ÅéóáãùãÞ ÅããñáöÞò Þ óôçí Åðåîåñãáóßá ÅããñáöÞò.<br />3) ÊÜíôå êëéê óôï ðëÞêôñï 'img' êáé åðéêïëëÞóôå ôï URL óôï ðáñÜèõñï.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "ÌÝôá-ðëçñïöïñßá";
				$lang_string['instructions'] = "Ç åðüìåíç ðëçñïöïôßá ÷ñçóéìïðïéåßôáé ãéá &quot;meta-data&quot;, ôï ïðïßï âïçèÜ ìç÷áíÝò áíáæÞôçóçò ãéá íá áíáæçôÞóïõí êáé íá êáôá÷ùñÞóïõí ôï site óáò. ÁõôÞ ç ðëçñïöïñßá ìðïñåß åðßóçò íá ÷ñçóéìïðïéçèåß áðü RSS feeds.";
				$lang_string['info_keywords'] = "ËÝîåéò ÊëåéäéÜ: (Ëßóôá áðü ëÝîåéò-êëåéäéÜ äéá÷ùñéóìÝíá áðü êüììáôá.)";
				$lang_string['info_description'] = "ÐåñéãñáöÞ: (Áðüóðáóìá Þ ìéá åëåýèåñç ðåñéãñáöÞ ôïõ site óáò.)";
				$lang_string['info_copyright'] = "Äéêáéþìáôá: (ÄÞëùóç äéêáéùìÜôùí (copyright), Þ óýíäåóìïò óôï êåßìåíï ðïõ ðåñéÝ÷åé ðëçñïöüñßåò.)";
				$lang_string['submit_btn'] = "&nbsp;Êáôá÷þñçóç&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ïýðò!</h2>Ôá äåäïìÝíá äåí êáôá÷ùñÞèçêáí.<br /><br />ÌÞíõìá Server:<br />";
				$lang_string['form_error'] = "Ðáñáêáëþ óõìðëçñþóôå ôá ðåäßá Ôßôëïò êáé ÓõããñáöÝáò.";
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
				$lang_string['title'] = "Login";
				$lang_string['instructions'] = "Ðáñáêáëþ åéóÜãåôå ôï ¼íïìá ×ñÞóôç êáé ôïí Êùäéêü óáò";
				$lang_string['username'] = "¼íïìá ×ñÞóôç:";
				$lang_string['password'] = "Êùäéêüò";
				$lang_string['submit_btn'] = "&nbsp;Êáôá÷þñçóç&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Åðéôõ÷Ýò!</h2>Åßóôå logged in. Happy blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ïýðò!</h2>Login áíåðéôõ÷Ýò. Ðáñáêáëþ åðéâåâáéþóôå üôé Ý÷åôå ðëçêôñïëïãÞóåé óùóôÜ ôï ¼íïìá ×ñÞóôç êáé ôïí Êùäéêü óáò êáé îáíá-ðñïóðáèÞóôå.<p />";
				$lang_string['form_error'] = "Ðáñáêáëþ óõìðëçñþóôå ôï ¼íïìá ×ñÞóôç êáé ôïí Êùäéêü óáò.";
				break;
			case 'logout':
				$lang_string['title'] = "Logout";
				$lang_string['instructions'] = "<h2>Ïýðò!</h2>Logout áíåðéôõ÷Ýò. Áäõíáìßá äéáãñáöÞò cookie. Åßóáé áêüìç logged in?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Ïýðò!</h2>Ôá äåäïìÝíá äåí áðïèçêåýôçêáí.<br /><br />ÌÞíõìá Server:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "ÁëëáãÞ Ïíüìáôïò ×ñÞóôç &amp; Êùäéêïý";
				$lang_string['instructions'] = "×ñçóéìïðïéÞóôå ôçí åðüìåíç öüñìá ãéá íá áëëÜîôå ôï ¼íïìá ×ñÞóôç Þ/êáé ôïí Êùäéêü óáò. ÅéóÜãåôå ôï ¼íïìá ×ñÞóôç êáé Êùäéêü ôá ïðïßá èÝëåôå íá ÷ñçóéìïðïßçóôå.";
				$lang_string['username'] = "¼íïìá ×ñÞóôç:";
				$lang_string['password'] = "Êùäéêüò:";
				$lang_string['submit_btn'] = "&nbsp;Êáôá÷þñçóç&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Åðéôõ÷Ýò!</h2>Ôï ¼íïìá ×ñÞóôå Þ/êáé Êùäéêüò óáò Ý÷ïõí áðïèçêåõôåß. Happy blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ïýðò!</h2>Ôá äåäïìÝíá äåí áðïèçêåýôçêáí. ÕðÞñîå Ýíá ðñüâëçìá êáôÜ ôçí áðïèÞêåõóç ôïõ Ïíüìáôïò ×ñÞóôç Þ/êáé ôïõ Êùäéêïý.<br /><br />ÌÞíõìá Server:<br />";
				$lang_string['form_error'] = "Ðáñáêáëþ óõìðëçñþóôå ôá ðåäßá ¼íïìá ×ñÞóôç êáé Êùäéêü.";
				$lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
					and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
					exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
					to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Êáëþò ¹ëèáôå";
				$lang_string['instructions'] = "Óáò åõ÷áñéóôïýìå ðïõ åðéëÝîáôå ôï Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "ÅðéëïãÞ Ãëþóóáò:";
				$lang_string['submit_btn'] = "&nbsp;Êáôá÷þñçóç&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Welcome";
				$lang_string['instructions'] = "
				Óáò åõ÷áñéóôïýìå ðïõ åðéëÝîáôå ôï Simple PHP Blog!<br /><br />Ôï Simple PHP Blog åßíáé Ýíá áðëü blogging óýóôçìá. Áðáéôåß PHP 4.1 Þ íåþôåñï, êáé write-permissions óôïí server. ¼ëá ôá äåäïìÝíá áðïèçêåýïíôáé óå áðëÜ áñ÷åßá, Þôïé äåí áðáéôåß âÜóç äåäïìÝíùí.<br /><br />
				Ãéá íá îåêéíÞóåôå, ôï Simple PHP Blog ÷ñåéÜæåôáé íá äçìéïõñãÞóåôå ôñåéò öáêÝëïõò ('config', 'content', êáé 'images') óôïõò ïðïßïõò áðïèçêåýïíôáé ôá äåäïìÝíá óáò.<br /><br />
				<b>ÊÜíôå êëßê ðáñáêÜôù ãéá íá îåêéíÞóåôå ôçí åãêáôÜóôáóç:</b>";
				$lang_string['begin'] = "[ Åêêßíçóç ÅãêáôÜóôáóçò ]";
				break;
			case 'install02':
				$lang_string['title'] = "ÅãêáôÜóôáóç";
				$lang_string['instructions'] = "Äçìéïõñãßá 'config', 'content', êáé 'images' öáêÝëùí:";
				$lang_string['folder_exists'] = "Ok! Ï öÜêåëïò Þäç õðÜñ÷åé. Êáìßá áëëáãÞ äåí ðñáãìáôïðïéÞèçêå...";
				$lang_string['folder_failed'] = "Ïýðò! Áäõíáìßá äçìéïõñãßáò öáêÝëïõ...";
				$lang_string['folder_success'] = "Åðéôõ÷Ýò! Ï öÜêåëïò äçìéïéõñãÞèçêå...";
				// Help
				$lang_string['help'] = "
				<h2>Ïýðò!</h2>
				Áäõíáìßá äçìéïõñãßáò åíüò Þ ðåñéóóïôÝñùí öáêÝëùí! Ðéèáíüí åðåéäÞ:<br>
				<i>1) <b>Write Permissions</b> äåí Ý÷ïõí ôåèåß óå <b>Read/Write</b>.</i><br>
				<i>2) Ôï <b>UID</b> (user ID's) óå üëá ôá áñ÷åßá êáé öáêÝëïõò ðñÝðåé íá ôáéñéÜæåé.</i><p />
				
				ÁêïëïõèÞóôå ôéò åðüìåíåò ïäçãßåò êáé îáíáäïêéìÜóôå:<p />
				1) ÄçìéïõñãÞóôå ôïõò ðáñáêÜôù öáêÝëïõò: <b>config</b>, <b>content</b>, êáé <b>images</b>.<p />
				2) ÈÝóáôå <b>Write Permissions</b> óôïõò öáêÝëïõò. Óôï FTP ðñüãñáììÜ óáò, Owner, User, êáé World ðñÝðåé íá Ý÷ïõí <b>Read</b> êáé <b>Write</b> access. <i>(Ðéèáíüí íá ÷ñåéÜæåôáé íá åðéêïéíùíÞóôå ìå ôïí service provider óáò ãéá íá ôá áëëÜîåôå...)</i><p />
				3) Âåâáéùèåßôå üôé ôá UID's áðü üëá ôá áñ÷åßá êáé ôïõò öáêÝëïõò óáò åßíáé ôá ßäéá. <i>(Ðéèáíüí íá ÷ñåéÜæåôáé íá åðéêïéíùíÞóôå ìå ôïí service provider óáò ãéá íá ôá áëëÜîåôå...)</i>";
				$lang_string['try_again'] = "[ ÎáíáðñïóðáèÞóôå ]";
				// Success
				$lang_string['success'] = "<h2>Åðéôõ÷Ýò!</h2>Ïé öÜêåëïé äçìéïõñãÞèçêáí åðéôõ÷þò!<p /><b>ÊÜíôå êëéê ðáñáêÜôù ãéá íá óõíå÷ßóåôå:</b>";
				$lang_string['continue'] = "[ ÓõíÝ÷åéá ]";
				break;
			case 'install03':
				$lang_string['title'] = "ÄçìéïõñãÞóôå ¼íïìá ×ñÞóôç &amp; Êùäéêü";
				$lang_string['instructions'] = "×ñçóéìïðïéÞóôå ôçí åðüìåíç öüñìá ãéá íá äçìéïõñãÞóôå Ýíá ¼íïìá ×ñÞóôç êáé Êùäéêü.";
				$lang_string['username'] = "¼íïìá ×ñÞóôç:";
				$lang_string['password'] = "Êùäéêüò:";
				$lang_string['submit_btn'] = "&nbsp;Êáôá÷þñçóç&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Óõã÷áñçôÞñéá!</h2>Åßóôå logged in. ÊÜíôå êëéê ðáñáêÜôù ãéá íá åðéóêåöôåßôå ôçí Áñ÷éêÞ óåëßäá, üðïõ êáé ìðïñåßôáé íá ïíïìÜóåôå ôï blog óáò. Happy blogging!<p />";
				$lang_string['btn_setup'] = "[ ÅãêáôÜóôáóç ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ïýðò!</h2>Ôá äåäïìÝíá äåí áðïèçêåýôçêáí. ÕðïÞñîå Ýíá ðñüâëçìá êáôÜ ôçí áðïèÞêåõóç ôïõ Ïíüìáôïò ×ñÞóôç Þ/êáé Êùäéêïý.<br /><br />ÌÞíõìá Server:<br />";
				$lang_string['form_error'] = "Ðáñáêáëþ óõìðëçñþóôå ôá ðåäßá ¼íïìá ×ñÞóôç êáé Êùñéêü.";
				break;
			case 'install04':
				$lang_string['title'] = "Create Password File";
				$lang_string['instructions'] = "Here's the tricky part:<br />
				<ol>
				<li>Open a Text Editor application. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
				<li>Create a New Text Document.</li>
				<li>Copy and paste the code in the box below into your document.</li>
				<li>Save your file and name it <b>password.php</b> <i>(Be sure to save it in <b>text</b> or <b>plain text</b> format.)</i></li>
				<li>Open a FTP application.</li>
				<li>Upload your new <b>password.php</b> into the <b>config</b> folder on your web site.</li>
				<li>Delete the <b>password.php</b> from your hard drive.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Note: If you want to reset your username and password (probably because you forgot it), delete the <b>password.php</b> file in the <b>config</b> folder on your web site. The next time you visit your site, it will walk you through this installation process again...</i>";
				$lang_string['code'] = "Code for <b>password.php</b> file:";
				$lang_string['continue'] = "[ Continue ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Login";
				$lang_string['instructions'] = "Please enter your Username and Password below";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Congratulations!</h2>You are now logged in.<p />
				Click below to visit the <b>Setup</b> page, where you can personalize your new blog.<p />
				<i>Note: Now that you've completed the installation process, it is recommended that you delete the <b>installXX.php</b> files from your web site. (i.e. install00.php through install06.php)</i><p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>You are not logged in. Please verify that you typed your Username and Password correctly and try again.<p />";
				$lang_string['form_error'] = "Please complete the Username and Password fields.";
				// Success
				$lang_string['btn_setup'] = "[ Setup ]";
				$lang_string['btn_try_again'] = "[ Try Again ]";
				break;
			case 'setup':
				$lang_string['title'] = "ÅãêôÜóôáóç";
				$lang_string['instructions'] = "Ìðïñåßôå íá áëëÜîåôå ôï üíïìá ôïõ blog óáò, êáèþò êáé ôá ðñïóùðéêÜ óáò äåäïìÝíá ðáñáêÜôù.";
				$lang_string['blog_title'] = "¼íïìá Blog:";
				$lang_string['blog_author'] = "ÓõããñáöÝáò:";
				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
				$lang_string['blog_footer'] = "Õðïêåöáëßäá:";
				$lang_string['blog_choose_language'] = "ÅðéëïãÞ ãëþóóáò:";
				$lang_string['blog_enable_comments'] = "Åíåñãïðïßçóç Åíôïëþí ×ñÞóôç"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "¢íïéãìá ó÷ïëßùí óå êáéíïýñãéï ðáñÜèõñï"; // <-- New 0.3.6
				$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
				$lang_string['blog_enable_voting'] = "Enable Users to Rate Entries";
				$lang_string['blog_email_notification'] = "ÅíçìÝñùóç ìå email üôáí ó÷üëéá áðïóôÝëïíôáé"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "ÁðïóôïëÞ weblog &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery.";
				$lang_string['blog_trackback_enabled'] = "Enable trackback in my blog";
				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs";
				$lang_string['blog_ping_urls'] = "ÅéóÜãåôå ðëÞñåò URL (ð.÷.. http://rpc.weblogs.com/RPC2) Þ õðçñåóßá ãéá &quot;ping&quot;.<br />(Ìðïñåßôå íá åéóÜãåôå ðåñéóóüôåñåò áðü ìßá äéåõèýíóåéò äéá÷ùñéæüìåíåò ìå êüììáôá.)"; // <-- New 0.3.7
				$lang_string['blog_max_entries'] = "ÌÝãéóôïò áñéèìüò ðñïâïëÞò Åããñáöþí:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Tags ôá ïðïßá åðéôñÝðïíôáé óå Ó÷üëéá:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					Áðü ôçí PHP 4.0.4, ç PHP Ý÷åé ôçí äõíáôüôçôá íá äéáâÜæåé êáé íá ãñÜöåé óå gzip (.gz) áñ÷åßá óõìðßåóçò, 
					êáé Ýôóé íá åîïéêïíïìåß ÷þñï óôïí äßóêï. Ìðïñåß åðßóçò íá óõìðéÝæåé óôï ðáñáóêÞíéï óåëßäåò ïé ïðïßåò äéáâÜæïíôáé áðü browsers 
					ïé ïðïßïé õðïóôçñßæïõí gzip óõìðßåóç, êáé Ýôóé åîïéêïíïìïýí bandwidth.<br />
					<br />
					Zlib õðóôÞñéîç óôçí PHP äåí åßíáé is not enabled by default. If the checkboxes are disabled, then your 
					installation of PHP does not support the Zlib extension."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Enable GZIP Compression for Database Files"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Enable GZIP Compression for HTTP Output"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ïõðò!</h2>Ôá äåäïìÝíá äåí áðïèçêåýôçêáí.<br /><br />ÌÞíõìá Server:<br />";
				$lang_string['form_error'] = "Please complete the Title and Author fields.";
				$lang_string['label_entry_order'] = "ÄéÜôáîç ÅããñáöþíEntry Order:";
				$lang_string['select_new_to_old'] = "ÄéÜôáîç êáôÜ ôçí íåüôåñç";
				$lang_string['select_old_to_new'] = "ÄéÜôáîç êáôÜ ôçí ðáëáéüôåñç";
				$lang_string['label_comment_order'] = "ÄéÜôáîç ó÷ïëßùí:";
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
				$lang_string['title'] = "ÅðéëïãÝò";
				$lang_string['instructions'] = "×ñçóéìïðïéÞóôå ôçí åðüìåíç öüñìá ãéá ôçí ðñïóáñìïãÞ ôçò ðáñïõóßáóçò ôçò çìåñïìçíßáò êáé ôçò þñáò ãéá ôéò ååãñáöÝò ôïõ blog êáé ôùí ó÷ïëßùí. Ìðïñåßôå íá åðéëÝîåôå 12-ùñü Þ 24-ùñü ñïëüú. Âñá÷ý Þ ìáêñïóêåëÞ ðáñïõóßáóç ôçò çìåñïìçíßáò. Êáé ç ðåñéï÷Þ <b>Ðñïåðéóêüðéóçò</b> áíáíåþíïíôáé áõôüìáôá ãéá íá óáò ðáñïõóéÜóïõí ôï ðùò èá öáßíåôáé óôçí ðñáãìáôéêüôçôá ïé åðéëïãÝò óáò.";
				// Long Date
				$lang_string['ldate_title'] = "ÌáêñïóêåëÞ ðáñïõóßáóç ôçò çìåñïìçíßáò:";
				$lang_string['weekday'] = "ÊáèçìåñéíÞ";
				$lang_string['month'] = "ÌÞíáò";
				$lang_string['day'] = "ÇìÝñá";
				$lang_string['year'] = "¸ôïò";
				$lang_string['none'] = "None";
				// Short Date
				$lang_string['sdate_title'] = "Âñá÷ý ðáñïõóßáóç ôçò çìåñïìçíßáò:";
				$lang_string['s_month'] = "ÌÞíáò";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "ÇìÝñá";
				$lang_string['s_year'] = "¸ôïò";
				$lang_string['zero_day'] = "Áñ÷éêü ìçäÝí ãéá çìÝñá";
				$lang_string['show_century'] = "Ðáñïõóßáóç áéþíá";
				// Time
				$lang_string['time_title'] = "Ðáñïõóßáóç ¿ñáò:";
				$lang_string['12hour'] = "12-ùñü ñïëüú";
				$lang_string['24hour'] = "24-ùñü ñïëüú";
				$lang_string['before_noon'] = "Ðñü-ìåóçìâñßá";
				$lang_string['after_noon'] = "ÌÝôá-ìåóçìâñßá";
				// Date
				$lang_string['date_title'] = "Ðáñïõóßáóç Çìåñïìçíßáò:";
				$lang_string['long_date'] = "ÌáêñïóêåëÞò çìåñïìçíßá";
				$lang_string['short_date'] = "Âñá÷ýò çìåñïìçíßá";
				$lang_string['time'] = "¿ñá";
				// Menu
				$lang_string['menu_title'] = "Ðáñïõóßáóç Çìåñïìçíßá Ìåíïý:";
				$lang_string['long_date'] = "ÌáêñïóêåëÞò çìåñïìçíßá";
				$lang_string['short_date'] = "Âñá÷ýò çìåñïìçíßá";
				// Used in multiple places
				$lang_string['zero_day'] = "Áñ÷éêü ìçäÝí ãéá çìÝñá";
				$lang_string['zero_month'] = "Áñ÷éêü ìçäÝí ãéá ìÞíá";
				$lang_string['zero_hour'] = "Áñ÷éêü ìçäÝí ãéá þñá";
				$lang_string['separator'] = "Äéá÷ùñéóôÞò:";
				$lang_string['preview'] = "Ðñïåðéóêüðéóç:";
				$lang_string['server_offset'] = "Server Offset:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Êáôá÷þñçóç&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ïõðò!</h2>Ôá äåäïìÝíá äåí áðïèçêåýôçêáí.<br /><br />ÌÞíõìá Server:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Óôõë";
				$lang_string['instructions'] = "×ñçóéìïðïéÞóôå ôï drop-down ìåíïý ãéá íá åðéëÝîåôå äéáöïñåôéêü óôõë.";
				// Themes
				$lang_string['choose_theme'] = "Óôõë:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Êáôá÷þñçóç&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ïõðò!</h2>Ôá äåäïìÝíá äåí áðïèçêåýôçêáí.<br /><br />ÌÞíõìá Server:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "ÁðïèÞêåõóç Åéêüíáò";
				$lang_string['instructions'] = "ÊÜíôå êëéê ðáñáêÜôù ãéá íá åðéëÝîåôå áñ÷åßï.";
				$lang_string['select_file'] = "ÅðéëïãÞ áñ÷åßïõ:";
				$lang_string['upload_btn'] = "ÁðïèÞêåõóç";
				// Error Response
				$lang_string['error'] = "<h2>Ïõðò!</h2>Áäõíáìßá áðïèýêåõóçò åéêüíáò.<br /><br />ÌÞíõìá Server:<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "ÁðïôåëÝóìáôá ÁíáæÞôçóçò";
				$lang_string['instructions'] = "ÁðïôåëÝóìáôá áíáæÞôçóçò ãéá <b>%string</b>:";
				$lang_string['not_found'] = "Äåí âñÝèçêáí áðïôåëÝóìáôá";
				break;
			case 'contact':
				$lang_string['title'] = "Contact Me";
				$lang_string['instructions'] = "Fill in the form:";
				$lang_string['form_error'] = "Please complete the Subject and Comment fields.";
				$lang_string['name'] = "Name:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Subject:";
				$lang_string['comment'] = "Comment:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				$lang_string['success'] = "<h2>Success!</h2>Your message has been sent.<p />";
				$lang_string['contact_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
				$lang_string['failure'] = "<h2>Error!</h2>Your message has not been sent. Most likely the Anti Spam was not entered properly.<p />";
				$lang_string['contactsent'] = "Contact sent through: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				break;
			case 'stats':
				$lang_string["title"] = "Statistics";
				$lang_string["general"] = "General</h3>";
				$lang_string["entry_info"] = "<b>%s</b> entries using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string["comment_info"] = "<b>%s</b> comments using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string["trackback_info"] = "<b>%s</b> trackbacks stored in <b>%s</b> bytes";
				$lang_string["static_info"] = "<b>%s</b> static pages using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string["most_viewed_entries"] = "10 Most viewed entries";
				$lang_string["most_commented_entries"] = "10 Most commented entries";
				$lang_string["most_trackbacked_entries"] = "10 Most trackbacked entries";
				$lang_string['vote_info'] = "<b>%s</b> votes stored in <b>%s</b> bytes"; // 0.4.1
				$lang_string["most_voted_entries"] = "10 Most voted entries"; // 0.4.1
				$lang_string["most_rated_entries"] = "10 Most rated entries"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Error 403.8 - Page/Function Access Denied';
				$lang_string["errorline1"] = 'The page or function you attempted to process requires the use of cookies.';
				$lang_string["errorline2"] = 'Restore cookie functionality within your browser or protection software and attempt your request again.';
				$lang_string["clientid"] = 'Client ID: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Error 403.8 - Page/Function Access Denied';
				$lang_string["404"] = 'HTTP Error 404 - Page/Function Does Not Exist';
				$lang_string["error_404"] = 'The page or function you attempted to process does not exist.';
				$lang_string["error_javascript"] = 'The page or function you attempted requires javascript in order to properly function.';
				$lang_string["error_emailnotsent"] = 'The message you attempted to send has failed.';
				$lang_string["error_emailnotsentcapcha"] = 'The message you attempted to send has failed because the anti-spam entry was incorrect or missing.';
				$lang_string["clientid"] = 'Client ID: ';
				break;
			default:
				break;
		}

	}
		
?>
