<?php
	// Tamil Language File
	// (c) 
	//
	// Simple PHP Version: 0.3.7
	// Language Version:   0.3.7.1
	
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Tamil
		$lang_string[ 'language' ] = 'tamil';
		
		// ISO Charset: UTF-8
		$lang_string[ 'html_charset' ] = 'UTF-8';
		$lang_string[ 'php_charset' ] = 'UTF-8';		

		$lang_string[ 'locale' ] = 'ta_IN'; // <-- New 0.3.7
		setlocale(LC_TIME, $lang_string[ 'locale' ] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string[ 'menu_links' ] = "இணைப்புகள்";
		$lang_string[ 'menu_home' ] = "முகப்பு";
		$lang_string[ 'menu_contact' ] = "Contact Me"; // <-- New 0.3.8
		$lang_string[ 'menu_stats' ] = "Stats"; // <-- New 0.3.7r
		$lang_string[ 'menu_archive' ] = "பழையவை";
		$lang_string[ 'menu_menu' ] = "பட்டி";
		$lang_string[ 'menu_add' ] = "பதிவிடு";
		$lang_string[ 'menu_add_static' ] = "நிலைப்பக்கம் சேர்";
		$lang_string[ 'menu_upload' ] = "உருவம் ஏற்று";
		$lang_string[ 'menu_setup' ] = "அமைப்புகள்";
		$lang_string[ 'menu_categories' ] = "Categories"; // 0.3.7q
		$lang_string[ 'menu_info' ] = "தகவல்"; // <-- New 0.3.7
		$lang_string[ 'menu_options' ] = "விருப்பங்கள்";
		$lang_string[ 'menu_themes' ] = "காட்சிக் கரு";
		$lang_string[ 'menu_colors' ] = "வண்ணங்கள்";
		$lang_string[ 'menu_change_login' ] = "நுழைபெயர் மாற்று";
		$lang_string[ 'menu_logout' ] = "வெளியேறு";
		$lang_string[ 'menu_login' ] = "உள்ளேறு";
		$lang_string[ 'menu_most_recent' ] = "புதிய மறுமொழிகள்";
		$lang_string[ 'menu_most_recent_entries' ] = "Most Recent Entries";
		$lang_string[ 'menu_most_recent_trackback' ] = "Most Recent Trackbacks"; // <-- New 0.3.8
		$lang_string[ 'menu_add_block' ] = "Blocks";
		
		// Other
		$lang_string[ 'home' ] = "முகப்புக்கு செல்";
		$lang_string[ 'nav_next' ] = 'அடுத்து'; // <-- New 0.3.7
		$lang_string[ 'nav_back' ] = 'பின்னே'; // <-- New 0.3.7
		$lang_string[ 'search_title' ] = 'தேடு:'; // <-- New 0.3.7
		$lang_string[ 'search_go' ] = 'செல்'; // <-- New 0.3.7
		$lang_string[ 'page_generated_in' ] = 'பக்கம் %s நொடிகளில் உருவாக்கப்பட்டது'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string[ 'sb_months' ] = array( 'ஜனவரி', 'பிப்ரவரி', 'மார்ச்', 'ஏப்ரல்', 'மே', 'ஜூன்', 'ஜூலை', 'ஆகஸ்டு', 'செப்டம்பர்', 'அக்டோபர்', 'நவம்பர்', 'டிசம்பர்' );
		$lang_string[ 'sb_default_title' ] = 'தலைப்பு இல்லை';
		$lang_string[ 'sb_default_author' ] = 'ஆசிரியர் பெயர் இல்லை';
		$lang_string[ 'sb_default_footer' ] = 'அடிக்குறிப்பு இல்லை';
		
		$lang_string[ 'sb_edit' ] = 'தொகு';
		$lang_string[ 'sb_delete' ] = 'அழி';
		$lang_string[ 'sb_permalink' ] = 'permalink'; // <-- New 0.3.8
		$lang_string[ 'sb_trackback' ] = 'trackbacks'; // <-- New 0.3.8
		
		$lang_string[ 'sb_add_comment_btn' ] = 'மறுமொழியிடு';
		$lang_string[ 'sb_comment_btn_number_first' ] = true;
		$lang_string[ 'sb_comment_btn' ] = 'மறுமொழி';
		$lang_string[ 'sb_comments_plural_btn_number_first' ] = true;
		$lang_string[ 'sb_comments_plural_btn' ] = 'மறுமொழிகள்';
		
		// ( 1 view )
		$lang_string[ 'sb_view_counter_pre' ] = '';
		$lang_string[ 'sb_view_counter_post' ] = ' காட்சி';
		// ( 2 views )
		$lang_string[ 'sb_view_counter_plural_pre' ] = '';
		$lang_string[ 'sb_view_counter_plural_post' ] = ' காட்சிகள்';
		
		$lang_string[ 'sb_add_link_btn' ] = '+ இணைப்பு';
		
		$lang_string[ 'sb_rate_entry_btn' ] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string[ 'label_subject' ] = "பொருள்:";
				$lang_string[ 'label_insert' ] = "சிறப்பு குறிகளை நுழை:";
				$lang_string[ 'btn_bold' ] = " b ";
				$lang_string[ 'btn_italic' ] = " i ";
				$lang_string[ 'btn_image' ] = "img";
				$lang_string[ 'btn_url' ] = "url";
				$lang_string[ 'view_images' ] = "ஏற்றிய உருவம் காட்டு";
				$lang_string[ 'label_entry' ] = "பதிவு:";
				$lang_string[ 'btn_preview' ] = "&nbsp;முன் காட்சி&nbsp;";
				$lang_string[ 'btn_post' ] = "&nbsp;ஏற்று&nbsp;";
				$lang_string[ 'file_name' ] = "Static File Name: (no spaces or file extensions)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string[ 'insert_styles' ] = "உருமாற்ற வேண்டிய உரை:";
				$lang_string[ 'insert_image' ] = "உருவத்தின் URL:";
				$lang_string[ 'insert_url1' ] = "இணைப்புக்கான உரை (விருப்ப):";
				$lang_string[ 'insert_url2' ] = "இணைப்பின் முழு URL:";
				$lang_string[ 'insert_url3' ] = "புதிய சாளரத்தில் URLஐ திற (விருப்ப):"; // <-- New 0.3.6
				$lang_string[ 'form_error' ] = "பொருளையும் பதிவையும் நிரப்புக.";	
				// More Javascript Strings <-- New 0.3.6
				$lang_string[ 'insert_image_optional' ] = 'விருப்பமானவை:';
				$lang_string[ 'insert_image_width' ] = 'அகலம் (விருப்ப):';
				$lang_string[ 'insert_image_height' ] = 'உயரம் (விருப்ப):';
				$lang_string[ 'insert_image_popup' ] = 'முழு உயரத்தில் காட்டு (விருப்ப):';
				$lang_string[ 'insert_image_float' ] = 'மிதப்பு (விருப்ப):';
				$lang_string['insert_image_align'] = 'Horizontal align (Optional):';	//0.4.4
				$lang_string['insert_image_valign'] = 'Vertical align (Optional):';	//0.4.4
				$lang_string['insert_image_alt'] = 'Alternative text (Optional):';	//0.4.4
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string[ 'title' ] = "பதிவை சேர்";			
				$lang_string[ 'instructions' ] = "வலைப்பதிவு செய்ய தயாரா? கீழேயுள்ள படிவத்தை நிரப்புக.  'முன்காட்சி'யை அழுத்தினால் உங்கள் பதிவு எப்படி தோன்றும் என்பதை காணலாம்.  'ஏற்று' உங்கள் பதிவை சேமிக்கும்.";
				$lang_string[ 'title_ad' ] = "Confirm Trackback Pings"; // <-- New 0.3.8
				$lang_string[ 'instructions_ad' ] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8
				$lang_string[ 'label_tb_ping' ] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8
				$lang_string[ 'label_tb_autodiscovery' ] = "autodiscovery"; // <-- New 0.3.8
				// Preview / Edit Entry
				$lang_string[ 'title_preview' ] = "முன்காட்சி / பதிவை மாற்று";
				$lang_string[ 'instructions_preview' ] = "உங்கள் பதிவு இப்படித்தான் காட்சி தரும்.  நீங்கள் உரை தோற்ற மாற்றங்களையோ உருவங்களையோ பயன்படுத்தினால் அவற்றின் அடைகுறிகளை மூட மறக்காதீர்.";
				$lang_string[ 'title_update' ] = "பதிவை புதுப்பி";
				$lang_string[ 'instructions_update' ] = "கீழுள்ள படிவத்தை கொண்டு உங்கள் பதிவை மாற்றலாம்.  முடித்தபின் 'முன்காட்சி' அல்லது 'ஏற்று' அழுத்துக.";
				$lang_string[ 'ok_btn' ] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string[ 'cancel_btn' ] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string[ 'error' ] = "<h2>அடடா!</h2>பதிவு சேமிக்கப்படவில்லை.  உங்கள் பதிவை சேமிக்கும்போது ஒரு சிக்கல் தோன்றியது.<br /><br />சேவையகம் இவ்வாறாக கூறியது:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string[ 'title' ] = "நிலைப்பக்கம் சேர்";
				$lang_string[ 'instructions' ] = "நிலைப்பக்கத்தை சேர்க்க கீழுள்ள படிவத்தை நிரப்பவும்.  வலைப்பதிவுகளை போலில்லாமல், நிலைப்பக்கங்கள் வலது பட்டியில் இணைப்புகளாக தோன்றும்.  'என்னைப் பற்றி', 'தொடர்பு கொள்ள', 'கால அட்டவணை' போன்ற எப்போதும் காட்டப்பட வேண்டிய தகவல் பக்கங்களுக்காகவே இது.  'முன்காட்சி'யை அழுத்தினால் உங்கள் பதிவு எப்படி தோன்றும் என்பதை காணலாம்.  'ஏற்று' உங்கள் பதிவை சேமிக்கும்.";
				// Preview / Edit Entry
				$lang_string[ 'title_preview' ] = "முன்காட்சி / நிலைப்பக்கத்தை மாற்று";
				$lang_string[ 'instructions_preview' ] = "உங்கள் நிலைப்பக்கம் இப்படித்தான் காட்சி தரும்.  நீங்கள் உரை தோற்ற மாற்றங்களையோ உருவங்களையோ பயன்படுத்தினால் அவற்றின் அடைகுறிகளை மூட மறக்காதீர்.";
				$lang_string[ 'title_update' ] = "நிலைப்பக்கத்தை புதுப்பி";
				$lang_string[ 'instructions_update' ] = "கீழுள்ள படிவத்தை கொண்டு உங்கள் நிலைப்பக்கத்தை மாற்றலாம்.  முடித்தபின் 'முன்காட்சி' அல்லது 'ஏற்று' அழுத்துக.";
				$lang_string[ 'form_error' ] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string[ 'error' ] = "<h2>அடடா!</h2>பதிவு சேமிக்கப்படவில்லை.  உங்கள் பதிவை சேமிக்கும்போது ஒரு சிக்கல் தோன்றியது.<br /><br />சேவையகம் இவ்வாறாக கூறியது:<br />";
				break;
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
				
				$lang_string[ 'instructions_edit' ] = "You are currently editing block:";
				$lang_string[ 'instructions_modify' ] = "Click below to modify a block:";
				$lang_string[ 'submit_btn_edit' ] = "Edit Block";
				$lang_string[ 'submit_btn_add' ] = "Add Block";
				$lang_string[ 'form_error' ] = "Please complete the Name field.";
				break;
			case 'add_link':
				$lang_string[ 'static_pages' ] = "Static Pages:";
				// Add / Manage Links
				$lang_string[ 'title' ] = "இணைப்புகள் சேர்ப்பு / மேலாண்மை";
				$lang_string[ 'instructions' ] = "வெளிப் பக்கங்களுக்கான இணைப்புகளை சேர்.  கீழே உள்ள படிவத்தை நிரப்பி 'இணைப்பை சேர்' என்பதனை சொடுக்கவும்.  மேல், கீழ் பொத்தான்களை சொடுக்கினால் இணைப்புகளின் வரிசை மாறும்.  இணைப்பை மாற்ற 'மாற்று' பொத்தானை அழுத்தவும்.  'அழி'யைக் கொண்டு இணைப்பை அழிக்கலாம்.";
				$lang_string[ 'up' ] = "மேல்";
				$lang_string[ 'down' ] = "கீழ்";
				$lang_string[ 'edit' ] = "மாற்று";
				$lang_string[ 'delete' ] = "அழி";
				$lang_string[ 'link_name' ] = "இணைப்பின் பெயர்:";
				$lang_string[ 'link_url' ] = "இணைப்பு URL: (பிரிப்பானை சேர்க்க இதனை நிரப்பாமல் விடவும்.)";
				$lang_string[ 'instructions_edit' ] = "நீங்கள் மாற்றிக் கொண்டிருக்கும் இணைப்பு:";
				$lang_string[ 'instructions_modify' ] = "இணைப்பை மாற்ற கீழே சொடுக்கவும்:";
				$lang_string[ 'submit_btn_edit' ] = "இணைப்பை மாற்று";
				$lang_string[ 'submit_btn_add' ] = "இணைப்பு சேர்";
				$lang_string[ 'form_error' ] = "'பெயர்' புலத்தை நிரப்பு.";
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
				$lang_string[ 'title' ] = "வண்ணங்களை மாற்று";
				$lang_string[ 'instructions' ] = "உங்கள் வலைப்பதிவில் உரை மற்றும் பின்னணி வண்ணங்களை மாற்றலாம்.  முதலில் கீழுள்ள புலத்தை தெரிந்தெடுத்து பின் வண்ணத் தெரிவியில் வண்ணத்தை கலக்கவும்.  மதிப்பு தானாக மாறும்.";
				$lang_string[ 'bg_color' ] = "பக்க பின்னணி";
				$lang_string[ 'main_bg_color' ] = "மூலப் பக்க பின்னணி";
				$lang_string[ 'border_color' ] = "பக்க கரை";
				$lang_string[ 'inner_border_color' ] = "உள் கரை";
				$lang_string[ 'header_bg_color' ] = "தலைப்பு பின்னணி";
				$lang_string[ 'header_txt_color' ] = "தலைப்பு உரை";
				$lang_string[ 'menu_bg_color' ] = "பட்டி பின்னணி";
				$lang_string[ 'footer_bg_color' ] = "அடிக் குறிப்பு பின்னணி";
				$lang_string[ 'txt_color' ] = "மூல உரை";
				$lang_string[ 'headline_txt_color' ] = "தலைப்பு வரி உரை";
				$lang_string[ 'date_txt_color' ] = "தேதி உரை";
				$lang_string[ 'footer_txt_color' ] = "அடிக் குறிப்பு உரை";
				$lang_string[ 'link_reg_color' ] = "இணைப்பு - கொடாநிலை";
				$lang_string[ 'link_hi_color' ] = "இணைப்பு - மேலோட்டம்";
				$lang_string[ 'link_down_color' ] = "இணைப்பு - நடப்பு";
				// More Colors
				$lang_string[ 'entry_bg' ] = "பதிவு பின்னணி";
				$lang_string[ 'entry_title_bg' ] = "பதிவு தலைப்பு பின்னணி";
				$lang_string[ 'entry_border' ] = "பதிவு கரை";
				$lang_string[ 'entry_title_text' ] = "பதிவு தலைப்பு உரை";
				$lang_string[ 'entry_text' ] = "பதிவு உரை";
				$lang_string[ 'menu_bg' ] = "பட்டி பின்னணி";
				$lang_string[ 'menu_title_bg' ] = "பட்டி தலைப்பு பின்னணி";
				$lang_string[ 'menu_border' ] = "பட்டி கரை";
				$lang_string[ 'menu_title_text' ] = "பட்டி தலைப்பு உரை";
				$lang_string[ 'menu_text' ] = "பட்டி உரை";
				$lang_string[ 'menu_link_reg_color' ] = "பட்டி இணைப்பு - கொடாநிலை";
				$lang_string[ 'menu_link_hi_color' ] = "பட்டி இணைப்பு - மேலோட்டம்";
				$lang_string[ 'menu_link_down_color' ] = "பட்டி இணைப்பு - நடப்பு";
				// Submit
				$lang_string[ 'color_preset' ] = "Color Schemes:"; // 0.3.7q
				$lang_string[ 'scheme_name' ] = "Enter a custom color scheme name:"; // 0.3.7q
				$lang_string[ 'scheme_file' ] = "Enter scheme file name: (no spaces or file extensions)"; // 0.3.7q
				$lang_string[ 'save_btn' ] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string[ 'form_error' ] = "Please enter a name for your custom color scheme."; // 0.3.7q
				$lang_string[ 'submit_btn' ] = "&nbsp;ஒப்படை&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>அடடா!</h2>தகவல் சேமிக்கப்படவில்லை.  உங்கள் உள்ளீட்டை சேமிக்கும்போது ஒரு சிக்கல் தோன்றியது.<br /><br />சேவையகம் கூறியதாவது:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string[ 'comment_capcha' ] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
				$lang_string[ 'title' ] = "மறுமொழிகள்";
				$lang_string[ 'header' ] = "மறுமொழி சேர்";
				$lang_string[ 'instructions' ] = "மறுமொழி சேர்க்க கீழுள்ள படிவத்தை நிரப்பவும்.";
				$lang_string[ 'comment_name' ] = "உங்கள் பெயர்:";
				$lang_string[ 'comment_email' ] = "Email:"; // 0.3.8
				$lang_string[ 'comment_url' ] = "URL:"; // 0.3.8
				$lang_string[ 'comment_remember' ] = "Remember me:"; // 0.3.8
				$lang_string[ 'comment_text' ] = "மறுமொழி:";
				$lang_string[ 'post_btn' ] = "&nbsp;மறுமொழி ஏற்று&nbsp;";
				$lang_string[ 'delete_btn' ] = "அழி";
				// Error Response
				$lang_string[ 'error_add' ] = "<h2>அடடா!</h2>மறுமொழி சேமிக்கப்படவில்லை.  உங்கள் உள்ளீட்டை சேமிக்கும்போது ஒரு சிக்கல் தோன்றியது.<br /><br />சேவையகம் கூறியதாவது:<br />";
				$lang_string[ 'error_delete' ] = "<h2>அடடா!</h2>மறுமொழி அழிக்கப்படவில்லை.  உங்கள் உள்ளீட்டை சேமிக்கும்போது ஒரு சிக்கல் தோன்றியது.<br /><br />சேவையகம் கூறியதாவது:<br />";
				$lang_string[ 'form_error' ] = "உங்கள் பெயரையும் மறுமொழியையும் நிரப்பவும்."; // <-- Need Translation
				break;
			case 'delete':
				$lang_string[ 'title' ] = "பதிவை அழி";
				$lang_string[ 'instructions' ] = "இந்த பதிவை அழிக்க உள்ளீர்கள்.  இதைத்தான் அழிக்க விரும்புகிறீர்களா என உறுதி செய்து கொள்ளுங்கள்.  அழித்ததை மீட்க முடியாது.";
				$lang_string[ 'ok_btn' ] = "&nbsp;சரி&nbsp;";
				$lang_string[ 'cancel_btn' ] = "&nbsp;இல்லை&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>அடடா!</h2>பதிவை அழிக்க முடியவில்லை.<br /><br />சேவையகம் கூறியதாவது:<br />";
				break;
			case 'delete_static':
				$lang_string[ 'title' ] = "நிலைப்பக்கத்தை அழி";
				$lang_string[ 'instructions' ] = "இந்த பதிவை அழிக்க உள்ளீர்கள்.  இதைத்தான் அழிக்க விரும்புகிறீர்களா என உறுதி செய்து கொள்ளுங்கள்.  அழித்ததை மீட்க முடியாது.";
				$lang_string[ 'ok_btn' ] = "&nbsp;சரி&nbsp;";
				$lang_string[ 'cancel_btn' ] = "&nbsp;இல்லை&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>அடடா!</h2>நிலைப் பக்கத்தை அழிக்க முடியவில்லை.<br /><br />சேவையகம் கூறியதாவது:<br />";
				break;
			case 'image_list':
				$lang_string[ 'title' ] = "உருவப் பட்டியல்";
				$lang_string[ 'instructions' ] = "உருவத்தை பார்க்க கீழுள்ள இணைப்புகளை சொடுக்கவும்.<br /><br />உருவத்தை உங்கள் பதிவில் சேர்க்க:<br />1) Control விசையை அழுத்திக்கொண்டு இணைப்பின் மேல் சொடுக்கி 'Copy Link to Clipboard'ஐ தேர்ந்தெடுக்கவும்.<br />2) பதிவை சேர்க்கும் அல்லது மாற்றும் பக்கத்திற்கு திரும்பவும்.<br />3) 'img' பொத்தானை அழுத்தி URLஐ சாளரத்தில் ஒட்டவும்.";
				break;
			case 'info': // New 0.3.7
				$lang_string[ 'title' ] = "meta-data தகவல்";
				$lang_string[ 'instructions' ] = "கீழுள்ள தகவல் &quot;meta-data&quot; புலத்தில் பயன்படுத்தப்படும்.  இது தேடல் இயந்திரங்கள் உங்கள் தளத்தை சரியாக கண்டறியவும், RSS ஓடைகளிலும் பயன்படும்.";
				$lang_string[ 'info_keywords' ] = "முக்கிய சொற்கள்: (கமாவால் பிரிக்கப்பட்ட முக்கிய சொற்களின் வரிசை.)";
				$lang_string[ 'info_description' ] = "விளக்கம்: (உங்கள் தளத்தைப் பற்றிய விளக்க உரை.)";
				$lang_string[ 'info_copyright' ] = "உரிமைகள்: (காப்புரிமை அறிவிக்கை, அல்லது அவ்வறிவிக்கை உள்ள ஆவணத்தின் இணைப்பு.)";
				$lang_string[ 'submit_btn' ] = "&nbsp;ஒப்படை&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>அடடா!</h2>தகவலை சேமிக்க முடியவில்லை.<br /><br />சேவையகம் கூறியதாவது:<br />";
				$lang_string[ 'form_error' ] = "தலைப்பு, ஆசிரியர் புலங்களை நிரப்பவும்.";
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
				$lang_string[ 'title' ] = "உள்ளேறு";
				$lang_string[ 'instructions' ] = "உங்கள் பயனர் பெயரையும் கடவுச்சொல்லையும் உள்ளிடவும்.";
				$lang_string[ 'username' ] = "பயனர் பெயர்:";
				$lang_string[ 'password' ] = "கடவுச்சொல்:";
				$lang_string[ 'submit_btn' ] = "&nbsp;ஒப்படை&nbsp;";
				// Success
				$lang_string[ 'success' ] = "<h2>வெற்றி!</h2>நீங்கள் உள்ளேறி விட்டீர்கள்.<p />";
				// Wrong Password
				$lang_string[ 'wrong_password' ] = "<h2>அடடா!</h2>நீங்கள் உள்ளேறவில்லை.  பயனர் பெயரையும் கடவுச்சொல்லையும் சரிபார்த்து மீண்டும் முயற்சிக்கவும்.<p />";
				$lang_string[ 'form_error' ] = "பயனர் பெயரையும் கடவுச்சொல்லையும் நிரப்பவும்.";
				break;
			case 'logout':
				$lang_string[ 'title' ] = "வெளியேறு";
				$lang_string[ 'instructions' ] = "<h2>அடடா!</h2>வெளியேற முடியவில்லை.  குக்கியை அழிக்க முடியவில்லை.  ஏன் இன்னும் உள்ளேறியுள்ளீர்?<p />";
				break;
			case 'forms':
				$lang_string[ 'title' ] = "";
				$lang_string[ 'instructions' ] = "";
				// Error Response
				$lang_string[ 'error' ] = "<h2>அடடா!</h2>தகவலை சேமிக்க முடியவில்லை.  உங்கள் உள்ளீட்டை சேமிக்கும்போது ஒரு சிக்கல் தோன்றியது.<br /><br />சேவையகம் கூறியதாவது:<br />";
				break;
			case 'set_login':
				$lang_string[ 'title' ] = "பயனர் பெயரையும் கடவுச்சொல்லையும் மாற்று";
				$lang_string[ 'instructions' ] = "இந்த படிவத்தைக் கொண்டு பயனர் பெயரையும் கடவுச்சொல்லையும் மாற்றலாம்.  நீங்கள் விரும்பும் பயனர் பெயரையும் கடவுச்சொல்லையும் உள்ளிடவும்.";
				$lang_string[ 'username' ] = "பயனர் பெயர்:";
				$lang_string[ 'password' ] = "கடவுச்சொல்:";
				$lang_string[ 'submit_btn' ] = "&nbsp;ஒப்படை&nbsp;";
				// Success
				$lang_string[ 'success' ] = "<h2>வெற்றி!</h2>உங்கள் பயனர் பெயரும் கடவுச்சொல்லும் நடப்பில் உள்ளது.<p />";
				// Wrong Password
				$lang_string[ 'wrong_password' ] = "<h2>அடடா!</h2>தகவலை சேமிக்க முடியவில்லை.  உங்கள் பயனர் பெயரையும் கடவுச்சொல்லையும் சேமிக்கும்போது ஒரு சிக்கல் தோன்றியது.<br /><br />சேவையகம் கூறியதாவது:<br />";
				$lang_string[ 'form_error' ] = "பயனர் பெயரையும் கடவுச்சொல்லையும் நிரப்பவும்.";
				break;
			case 'install00':
				$lang_string[ 'title' ] = "வணக்கம்.";
				$lang_string[ 'instructions' ] = "Simple PHP Blogஐ தேர்ந்தெடுத்ததற்கு நன்றி!";
				
				$lang_string[ 'blog_choose_language' ] = "மொழி:";
				$lang_string[ 'submit_btn' ] = "&nbsp;ஒப்படை&nbsp;";
				break;
			case 'install01':
				$lang_string[ 'title' ] = "வணக்கம்";
				$lang_string[ 'instructions' ] = "
				Simple PHP Blogஐ தேர்ந்தெடுத்ததற்கு நன்றி!<br /><br />Simple PHP Blog ஒரு எளிய, சிறிய வலைப்பதிவு அமைப்பாகும்.  இதனை இயக்க PHP 4.1 அல்லது அதற்கு பிந்தைய பதிப்பும், சேவையகத்தில் எழுதும் உரிமையும் தேவைப்படும்.  தகவல்கள் அனைத்தும் கிடைக்கோப்புகளாகவே சேமிக்கப்படுகின்றன.  எனவே தகவல்தளங்கள் ஏதும் தேவையில்லை.<br /><br />
				துவங்கும் பொருட்டு தகவல்களை சேமிப்பதற்காக மூன்று அடைவுகளை ('config', 'content', மற்றும் 'images') உருவாக்க வேண்டியுள்ளது.<br /><br />
				<b>துவங்க கீழே சொடுக்கவும்.</b>";
				$lang_string[ 'begin' ] = "[ அமைப்பை துவக்கு ]";
				break;
			case 'install02':
				$lang_string[ 'title' ] = "அமைப்பு";
				$lang_string[ 'instructions' ] = "'config', 'content', மற்றும் 'images' ஆகிய மூன்று அடைவுகளை உருவாக்க முயற்சிக்கிறேன்:";
				$lang_string[ 'folder_exists' ] = "அடைவுகள் ஏற்கனவே உள்ளன.  மாற்றங்கள் ஏதும் செய்யப்பதவில்லை...";
				$lang_string[ 'folder_failed' ] = "அடடா! அடைவை உருவாக்க முடியவில்லை...";
				$lang_string[ 'folder_success' ] = "வெற்றி! அடைவுகள் உருவாக்கப் பட்டன...";
				// Help
				$lang_string[ 'help' ] = "
				<h2>அடடா!</h2>
				அடைவுகள் சிலதை உருவாக்க முடியவில்லை! அநேகமாக:<br>
				<i>1) <b>எழுதும் அனுமதி</b> இல்லை.</i><br>
				<i>2) கோப்புகளிலும் அடைவுகளிலும் <b>UID</b> (பயனர் அடையாள எண்) தவறாக உள்ளது.</i><p />
				
				கீழ்க்கண்ட வழிகளை பின்பற்றிய்பின் மீண்டும் முயற்சிக்கவும்:<p />				
				1) <b>config</b>, <b>content</b>, மற்றும் <b>images</b> ஆகிய அடைவுகளை கையால் உருவாக்கவும்.<p />
				2) எல்லா அடைவுகளிலும் <b>எழுதும் அனுமதி</b> அமைக்கவும்.  உங்கள் FTP நிரலில், உரியர், பயனர், மற்றும் பிறருக்கு  <b>படிக்க</b>வும் <b>எழுத</b>வும் அனுமதி தேவை. <i>(உங்கள் சேவையக காப்பாளரை தொடர்பு கொள்ள வேண்டியிருக்கலாம்)</i><p />
				3) எல்லா கோப்புகளிலும் அடைவுகளிலும் UID ஒன்றாக உள்ளதா என சரி பார்க்கவும். <i>(உங்கள் சேவையக காப்பாளரை தொடர்பு கொள்ள வேண்டியிருக்கலாம்)</i>";
				$lang_string[ 'try_again' ] = "[ மீண்டும் முயற்சிக்க ]";
				// Success
				$lang_string[ 'success' ] = "<h2>வெற்றி!</h2>அடைவுகள் உருவாக்கப்பட்டுவிட்டன!<p /><b>தொடர கீழே சொடுக்கவும்:</b>";
				$lang_string[ 'continue' ] = "[ தொடருக ]";
				break;
			case 'install03':
				$lang_string[ 'title' ] = "பயனர் பெயர், கடவுச்சொல் உருவாக்கம்";
				$lang_string[ 'instructions' ] = "இந்த படிவத்தை கொண்டு பயனர் பெயரும் கடவுச்சொல்லும் உருவாக்கலாம்.";
				$lang_string[ 'username' ] = "பயனர் பெயர்:";
				$lang_string[ 'password' ] = "கடவுச்சொல்:";
				$lang_string[ 'submit_btn' ] = "&nbsp;ஒப்படை&nbsp;";
				// Success
				$lang_string[ 'success' ] = "<h2>வாழ்த்துக்கள்!</h2>நீங்கள் உள்ளேறி விட்டீர்கள்.  அமைப்புகள் பக்கத்தை அடைய கீழே சொடுக்கவும.  அங்கே உங்கள் வலைப்பதிவிற்கு பெயரிடலாம்.<p />";
				$lang_string[ 'btn_setup' ] = "[ அமைப்புகள் ]";
				// Wrong Password
				$lang_string[ 'wrong_password' ] = "<h2>அடடா!</h2>தகவலை சேமிக்க முடியவில்லை.  உங்கள் பயனர் பெயரையும் கடவுச்சொல்லையும் சேமிக்கும்போது ஒரு சிக்கல் தோன்றியது.<br /><br />சேவையகம் கூறியதாவது:<br />";
				$lang_string[ 'form_error' ] = "பயனர் பெயரையும் கடவுச்சொல்லையும் நிரப்பவும்.";
				break;
			case 'setup':
				$lang_string[ 'title' ] = "அமைப்புகள்";
				$lang_string[ 'instructions' ] = "உங்கள் வலைப்பதிவின் பெயரையும் மற்றும் பிற சொந்த தகவல்களையும் இங்கு மாற்றலாம்.";
				$lang_string[ 'blog_title' ] = "வலைப்பதிவின் பெயர்:";
				$lang_string[ 'blog_author' ] = "ஆசிரியர்:";
				$lang_string[ 'blog_email' ] = "மின்னஞ்சல்:"; // <-- New 0.3.7
				$lang_string[ 'blog_footer' ] = "அடிக்குறிப்பு:";
				$lang_string[ 'blog_choose_language' ] = "மொழி:";
				$lang_string[ 'blog_enable_comments' ] = "மறுமொழிகளை செயலாக்கு"; // <-- New 0.3.6
				$lang_string[ 'blog_comments_popup' ] = "மறுமொழிகளை தனி சாளரத்தில் காட்டு"; // <-- New 0.3.6
				$lang_string[ 'blog_enable_voting' ] = "Enable Users to Rate Entries"; // <-- New 0.3.8
				$lang_string[ 'blog_email_notification' ] = "மறுமொழிகள் இடப்படும்போது மின்னஞ்சல் அனுப்பவும்."; // <-- New 0.3.7
				$lang_string[ 'blog_send_pings' ] = "வலைப்பதிவு &quot;ping&quot; அனுப்பவும்"; // <-- New 0.3.7
				$lang_string[ 'blog_ping_urls' ] = "&quot;ping&quot; செய்யப்பட வேண்டிய சேவையின் முழு URLஐ (i.e. http://rpc.weblogs.com/RPC2) நிரப்பவும்.<br />(கமாவால் பிரிக்கப்பட்ட ஒன்றுக்கு மேற்பட்ட முகவரிகளையும் நிரப்பலாம்.)"; // <-- New 0.3.7
				$lang_string[ 'blog_trackback_about' ] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery."; // <-- New 0.3.8
				$lang_string[ 'blog_trackback_enabled' ] = "Enable trackback in my blog"; // <-- New 0.3.8
				$lang_string[ 'blog_trackback_auto_discovery' ] = "Enable Auto-Discovery when submitting a post containing URLs"; // <-- New 0.?.?
				$lang_string[ 'blog_max_entries' ] = "காட்டவேண்டிய அதிகபட்ச அடைவுகள்:"; // <-- New 0.3.6
				$lang_string[ 'blog_comment_tags' ] = "மறுமொழிகளில் அடைகுறிகள்:"; // <-- New 0.3.6
				$lang_string[ 'blog_gzip_about' ] = "PHP 4.0.4 பதிப்பிலிருந்து, PHP நிரலில் gzip (.gz) மூலம் அமுக்கப்பட்ட கோப்புகளை படிக்கவும் எழுதவும், இதனால் பதிவகத்தில் இடத்தேவையை குறைக்கவும் முடியும்.  மேலும், உலவிகளுக்கு அனுப்பும் கோப்புகளையும் தானாகவே அமுக்கி அனுப்பவும் இயலும்.<br /><br />Zlib ஆதரவு PHP இன் கொடாநிலையில் நடப்பில் இருக்காது.  இந்த தெரிசதுரங்கள் செயலிலந்திருந்தால் உங்கள் PHP நிறுவலில் Zlib ஆதரவு இல்லை என்று பொருள்."; // <-- New 0.3.7
				$lang_string[ 'blog_enable_gzip_txt' ] = "தகவல்தள கோப்புகளுக்கு GZIP அமுக்கத்தை செயலாக்கு"; // <-- New 0.3.7
				$lang_string[ 'blog_enable_gzip_output' ] = "HTTP வெளிப்பாட்டிற்கு GZIP அமுக்கத்தை செயலாக்கு"; // <-- New 0.3.7
				$lang_string[ 'submit_btn' ] = "&nbsp;ஒப்படை&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>அடடா!</h2>தகவலை சேமிக்க முடியவில்லை.  உங்கள் உள்ளீட்டை சேமிக்கும்போது ஒரு சிக்கல் தோன்றியது.<br /><br />சேவையகம் கூறியதாவது:<br />";
				$lang_string[ 'form_error' ] = "தலைப்பையும் ஆசிரியர் பெயரையும் நிரப்பவும்.";
				$lang_string[ 'label_entry_order' ] = "பதிவு வரிசை:";
				$lang_string[ 'select_new_to_old' ] = "புதியது முதலில்";
				$lang_string[ 'select_old_to_new' ] = "பழையது முதலில்";
				$lang_string[ 'label_comment_order' ] = "மறுமொழி வரிசை:";
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
				$lang_string[ 'title' ] = "விருப்பங்கள்";
				$lang_string[ 'instructions' ] = "இந்த படிவத்தை கொண்டு உங்கள் பதிவுகளிலும் மறுமொழிகளிலும் தேதி, நேர தோற்றங்களை மாற்றலாம்.  12 அல்லது 24 மணி நேர தோற்றங்களையும், குறுகிய, நீண்ட தேதி அமைப்புகளையும் மாற்றலாம்.  உங்கள் உள்ளீட்டுக்கேற்ப <b>முன்காட்சி</b>கள் தானாகவே மாறும்";
				// Long Date
				$lang_string[ 'ldate_title' ] = "நீண்ட தேதி:";
				$lang_string[ 'weekday' ] = "வாரநாள்";
				$lang_string[ 'month' ] = "மாதம்";
				$lang_string[ 'day' ] = "தேதி";
				$lang_string[ 'year' ] = "வருடம்";
				$lang_string[ 'none' ] = "ஏதுமில்லை";
				// Short Date
				$lang_string[ 'sdate_title' ] = "குறுகிய தேதி:";
				$lang_string[ 's_month' ] = "மாதம்";
				$lang_string[ 's_mon' ] = "MMM";
				$lang_string[ 's_day' ] = "தேதி";
				$lang_string[ 's_year' ] = "வருடம்";
				$lang_string[ 'zero_day' ] = "தேதி முன் சுழி";
				$lang_string[ 'show_century' ] = "நூற்றாண்டை காட்டு";
				// Time
				$lang_string[ 'time_title' ] = "நேர அமைப்பு:";
				$lang_string[ '12hour' ] = "12 மணி முறை";
				$lang_string[ '24hour' ] = "24 மணி முறை";
				$lang_string[ 'before_noon' ] = "முற்பகலுக்கு முன்";
				$lang_string[ 'after_noon' ] = "முற்பகலுக்கு பின்";
				// Date
				$lang_string[ 'date_title' ] = "தேதி தோற்றம்:";
				$lang_string[ 'long_date' ] = "நீண்ட தேதி";
				$lang_string[ 'short_date' ] = "குறுகிய தேதி";
				$lang_string[ 'time' ] = "நேரம்";
				// Menu
				$lang_string[ 'menu_title' ] = "பட்டியில் தேதி அமைப்பு:";
				$lang_string[ 'long_date' ] = "நீண்ட தேதி";
				$lang_string[ 'short_date' ] = "குறுகிய தேதி";
				// Used in multiple places
				$lang_string[ 'zero_day' ] = "தேதி முன் சுழி";
				$lang_string[ 'zero_month' ] = "மாதம் முன் சுழி";
				$lang_string[ 'zero_hour' ] = "மணி முன் சுழி";
				$lang_string[ 'separator' ] = "பிரிப்பான்:";
				$lang_string[ 'preview' ] = "முன்காட்சி:";
				$lang_string[ 'server_offset' ] = "சேவையக தள்ளுமை:";
				// Buttons
				$lang_string[ 'submit_btn' ] = "&nbsp;ஒப்படை&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>அடடா!</h2>தகவலை சேமிக்க முடியவில்லை.  உங்கள் உள்ளீட்டை சேமிக்கும்போது ஒரு சிக்கல் தோன்றியது.<br /><br />சேவையகம் கூறியதாவது:<br />";
				break;
			case 'themes':
				$lang_string[ 'title' ] = "காட்சிக்கரு";
				$lang_string[ 'instructions' ] = "கீழிழு பட்டியைக் கொண்டு வேறு காட்சிக்கருவை தேர்ந்தெடுக்கவும்.";
				// Themes
				$lang_string[ 'choose_theme' ] = "காட்சிக்கரு:";
				// Buttons
				$lang_string[ 'submit_btn' ] = "&nbsp;ஒப்படை&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>அடடா!</h2>தகவலை சேமிக்க முடியவில்லை.  உங்கள் உள்ளீட்டை சேமிக்கும்போது ஒரு சிக்கல் தோன்றியது.<br /><br />சேவையகம் கூறியதாவது:<br />";
				break;
			case 'upload_img':
				$lang_string[ 'title' ] = "உருவத்தை ஏற்று";
				$lang_string[ 'instructions' ] = "கோப்பினை ஏற்ற கீழுள்ள பொத்தானை சொடுக்கவும்.";
				$lang_string[ 'select_file' ] = "கோப்பினை தேர்ந்தெடு:";
				$lang_string[ 'upload_btn' ] = "ஏற்று";
				// Error Response
				$lang_string[ 'error' ] = "<h2>அடடா!</h2>கோப்பை மேலேற்ற முடியவில்லை.<br /><br />சேவையகம் கூறியதாவது:<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string[ 'title' ] = "தேடல் முடிவுகள்";
				$lang_string[ 'instructions' ] = "<b>%string</b> க்கு தேடல் முடிவுகள்:";
				$lang_string[ 'not_found' ] = "தேடலுக்கு முடிவுகள் கிடைக்கவில்லை";
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
				$lang_string[ 'error' ] = "<h2>Whoops!</h2>Mail not sent.<p />"; //0.4.4
				$lang_string[ 'capcha' ] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.4
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
