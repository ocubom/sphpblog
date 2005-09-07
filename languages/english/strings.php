<?php
	// English Language File
	// (c) 2004 Alexander Palmo, apalmo <at> bigevilbrain <dot> com
	//
	// Simple PHP Version: 0.4.1
	// Language Version:   0.4.1.0
	
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: English
		$lang_string['locale'] = 'en_US';
		$lang_string['language'] = 'english';
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-1';
		$lang_string['php_charset'] = 'ISO-8859-1';
		
		setlocale( LC_TIME, $lang_string['locale'] );
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Links";
		$lang_string['menu_home'] = "Home";
		$lang_string['menu_contact'] = "Contact Me";
		$lang_string['menu_stats'] = "Stats";
		$lang_string['menu_archive'] = "Archives";
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Add Entry";
		$lang_string['menu_add_static'] = "Add Static Page";
		$lang_string['menu_upload'] = "Upload Image";
		$lang_string['menu_setup'] = "Preferences";
		$lang_string['menu_categories'] = "Categories";
		$lang_string['menu_info'] = "Meta Tags";
		$lang_string['menu_options'] = "Date &amp; Time";
		$lang_string['menu_themes'] = "Themes";
		$lang_string['menu_colors'] = "Colors";
		$lang_string['menu_change_login'] = "Change Login";
		$lang_string['menu_logout'] = "Logout";
		$lang_string['menu_login'] = "Login";
		$lang_string['menu_most_recent'] = "Most Recent Comments";
		$lang_string['menu_most_recent_entries'] = "Most Recent Entries";
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks";
		$lang_string['menu_add_block'] = "Blocks";
		
		// Other
		$lang_string['home'] = 'Return to Home';
		$lang_string['nav_next'] = 'Next';
		$lang_string['nav_back'] = 'Back';
		$lang_string['search_title'] = 'Search:';
		$lang_string['search_go'] = 'Go';
		$lang_string['page_generated_in'] = 'Page Generated in %s seconds';
		
		// SB Functions
		$lang_string['sb_months'] = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
		$lang_string['sb_default_title'] = 'No Title';
		$lang_string['sb_default_author'] = 'No Author';
		$lang_string['sb_default_footer'] = 'No Footer';
		
		$lang_string['sb_edit'] = 'edit';
		$lang_string['sb_delete'] = 'delete';
		$lang_string['sb_permalink'] = 'permalink';
		$lang_string['sb_trackback'] = 'trackbacks';
		
		$lang_string['sb_add_comment_btn'] = 'add comment';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'comment';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'comments';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' view';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' views';
		
		$lang_string['sb_add_link_btn'] = '+ link';
		
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Subject:";
				$lang_string['label_insert'] = "Insert Special:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
				$lang_string['view_images'] = "View Uploaded Images";
				$lang_string['label_entry'] = "Entry:";
				$lang_string['btn_preview'] = "&nbsp;Preview&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Post&nbsp;";
				$lang_string['file_name'] = "Static File Name: (no spaces or file extensions)";
				// Javascript Strings
				$lang_string['insert_styles'] = "Enter the text to be formatted:";
				$lang_string['insert_image'] = "Enter the URL for the image:";
				$lang_string['insert_url1'] = "Enter the text to be displayed for the link (Optional):";
				$lang_string['insert_url2'] = "Enter the full URL for the link:";
				$lang_string['insert_url3'] = "Open URL in new window (Optional):";
				$lang_string['form_error'] = "Please complete the Subject and Entry fields.";	
				// More Javascript Strings
				$lang_string['insert_image_optional'] = 'Optional:';
				$lang_string['insert_image_width'] = 'Width (Optional):';
				$lang_string['insert_image_height'] = 'Height (Optional):';
				$lang_string['insert_image_popup'] = 'View full-size in pop-up when clicked (Optional):';
				$lang_string['insert_image_float'] = 'Float (Optional):';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Add Entry";
				$lang_string['instructions'] = "Are you ready to blog? Fill out the form below and click 'Preview' to see how your entry will look, or click 'Post' to save your entry.";
				$lang_string['title_ad'] = "Confirm Trackback Pings";
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)";
				$lang_string['label_tb_autodiscovery'] = "autodiscovery";
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
				$lang_string['title'] = "Add Static Page";
				$lang_string['instructions'] = "Fill out the form below to create a Static Page. Unlike a regular Blog Entry, Static Entries appear as a links in the right-hand menu. They are for pages that you always want available such as: About Me, Contact Us, Schedule, etc. Click 'Preview' to see how your entry will look, or click 'Post' to save your entry.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Preview / Edit Static Page";
				$lang_string['instructions_preview'] = "Here's how your Static Page looks. If you're using text styles or including images, remember to 'close' all your 'tags'.";
				$lang_string['title_update'] = "Update Static Page";
				$lang_string['instructions_update'] = "You can change your entry using the form below. Click 'Preview' or 'Post' when you're done.";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Entry not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";
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
				$lang_string['title'] = "Add / Manage Links";
				$lang_string['instructions'] = "Add custom links to other sites. Fill out the form below and click 'Add Link' to add a link. Click the up or down buttons to change the order of the links. Click the edit button to modify a link. Click the delete button to remove a link";
				$lang_string['up'] = "up";
				$lang_string['down'] = "down";
				$lang_string['edit'] = "edit";
				$lang_string['delete'] = "delete";
				$lang_string['link_name'] = "Link Name:";
				$lang_string['link_url'] = "Link URL: (Optional. Leave empty to create separator.)";
				$lang_string['instructions_edit'] = "You are currently editing link:";
				$lang_string['instructions_modify'] = "Click below to modify a link:";
				$lang_string['submit_btn_edit'] = "Edit Link";
				$lang_string['submit_btn_add'] = "Add Link";
				$lang_string['form_error'] = "Please complete the Name field.";
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
				$lang_string['footer_txt_color'] = "Footer Text";
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
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['comment_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Comments";
				$lang_string['header'] = "Add Comment";
				$lang_string['instructions'] = "Fill out the form below to add your own comments.";
				$lang_string['comment_name'] = "Your Name:";
				$lang_string['comment_email'] = "Email:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['comment_remember'] = "Remember me:";
				$lang_string['comment_text'] = "Comment:";
				$lang_string['post_btn'] = "&nbsp;Post Comment&nbsp;";
				$lang_string['delete_btn'] = "delete";
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Comment not saved. I ran into a problem while saving your comment.<br /><br />Server Reported:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Comment not deleted. I ran into a problem while deleting your comment.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Name, Comment and Anti-Spam fields.";
				break;
			case 'delete':
				$lang_string['title'] = "Delete Entry";
				$lang_string['instructions'] = "This is the entry you are about to delete. Please make sure you really want to get rid of it, there's no undo...";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Couldn't delete entry.<br /><br />Server Reported:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Delete Static Page";
				$lang_string['instructions'] = "This is the static page you are about to delete. Please make sure you really want to get rid of it, there's no undo...";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Couldn't delete entry.<br /><br />Server Reported:<br />";
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
			case 'rating':
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Upgrade</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n comment files need to be upgraded:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Upgrade Comments"; // New 0.3.8
				$lang_string['title'] = "Login";
				$lang_string['instructions'] = "Please enter your Username and Password below";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Success!</h2>You are now logged in. Happy blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>You are not logged in. Please verify that you typed your Username and Password correctly and try again.<p />";
				$lang_string['form_error'] = "Please complete the Username and Password fields.";
				break;
			case 'logout':
				$lang_string['title'] = "Logout";
				$lang_string['instructions'] = "<h2>Whoops!</h2>Logout failed. Could not delete cookie. Why are you still logged in?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Change Username &amp; Password";
				$lang_string['instructions'] = "Use the form below to change your Username and/or Password. Enter the Username and Password that you want to use.";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Success!</h2>Your Username and/or Password is active. Happy blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Username and Password fields.";
				break;
			case 'install00':
				$lang_string['title'] = "Welcome";
				$lang_string['instructions'] = "Thank you for choosing Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Choose Language:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Welcome";
				$lang_string['instructions'] = "
				Thank you for choosing Simple PHP Blog!<br /><br />Simple PHP Blog is a light-weight blogging system. It requires PHP 4.1 or greater, and write-permissions on the server. All information is stored in flat-files, so no database is required.<br /><br />
				In order to begin, Simple PHP Blog needs to create three folders ('config', 'content', and 'images') in which to store your information.<br /><br />
				<b>Click below to begin setup:</b>";
				$lang_string['begin'] = "[ Begin Setup ]";
				break;
			case 'install02':
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
				$lang_string['title'] = "Create Username &amp; Password";
				$lang_string['instructions'] = "Use the form below to Create a Username and Password.";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Congratulations!</h2>You are now logged in. Click below to visit the Setup page, where you can name your blog. Happy blogging!<p />";
				$lang_string['btn_setup'] = "[ Setup ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Username and Password fields.";
				break;
			case 'setup':
				$lang_string['title'] = "Setup";
				$lang_string['instructions'] = "You can change the name of your blog, and your personal information below.";
				$lang_string['blog_title'] = "Blog Name:";
				$lang_string['blog_author'] = "Author:";
				$lang_string['blog_email'] = "Email:";
				$lang_string['blog_footer'] = "Footer:";
				$lang_string['blog_choose_language'] = "Choose Language:";
				$lang_string['blog_enable_comments'] = "Enable User Comments";
				$lang_string['blog_comments_popup'] = "Open Comments in Popup Window";
				$lang_string['blog_enable_voting'] = "Enable Users to Rate Entries";
				$lang_string['blog_email_notification'] = "Send email notification when comments are posted";
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
				$lang_string['blog_comment_tags'] = "Tags to Allow in Comments:";
				$lang_string['blog_gzip_about'] = "
					Since PHP 4.0.4, PHP has had the ability to read and write gzip (.gz) compressed files, 
					thus saving disk-space. It can also transparently compress pages that are sent to browsers 
					which support gzip compression, thus saving bandwidth.<br />
					<br />
					Zlib support in PHP is not enabled by default. If the checkboxes are disabled, then your 
					installation of PHP does not support the Zlib extension.";
				$lang_string['blog_enable_gzip_txt'] = "Enable GZIP Compression for Database Files";
				$lang_string['blog_enable_gzip_output'] = "Enable GZIP Compression for HTTP Output";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Title and Author fields.";
				$lang_string['label_entry_order'] = "Entry Order:";
				$lang_string['select_new_to_old'] = "List Newest First";
				$lang_string['select_old_to_new'] = "List Oldest First";
				$lang_string['label_comment_order'] = "Comment Order:";
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
				$lang_string['title'] = "Options";
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
				$lang_string['title'] = "Themes";
				$lang_string['instructions'] = "Use the drop-down menu to select a different theme.";
				// Themes
				$lang_string['choose_theme'] = "Themes:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Upload Image";
				$lang_string['instructions'] = "Click on the button below to select a file to upload.";
				$lang_string['select_file'] = "Select file:";
				$lang_string['upload_btn'] = "Upload";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Couldn't upload image. Here's some more information:<br /><br />Server Reported:<br />";
				break;
			case 'search':
				$lang_string['title'] = "Search Results";
				$lang_string['instructions'] = "Search results for <b>%string</b>:";
				$lang_string['not_found'] = "No results found";
				break;
			case 'contact':
				$lang_string['contact_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Contact Me";
				$lang_string['instructions'] = "Fill in the form:";
				$lang_string['form_error'] = "Please complete the Subject and Comment fields.";
				$lang_string['name'] = "Name:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Subject:";
				$lang_string['comment'] = "Comment:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				$lang_string['success'] = "<h2>Success!</h2>Your message has been sent.<p />";
				$lang_string['failure'] = "<h2>Error!</h2>Your message has not been sent. Most likely the Anti Spam was not entered properly.<p />";
				break;
			case 'stats':
				$lang_string["title"] = "<h2>Statistics</h2>";
				$lang_string["general"] = "<h3>General</h3>";
				$lang_string["entry_info"] = "<b>%s</b> entries using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string["comment_info"] = "<b>%s</b> comments using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string["trackback_info"] = "<b>%s</b> trackbacks stored in <b>%s</b> bytes";
				$lang_string["static_info"] = "<b>%s</b> static pages using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string["most_viewed_entries"] = "<h3>10 Most viewed entries</h3>";
				$lang_string["most_commented_entries"] = "<h3>10 Most commented entries</h3>";
				$lang_string["most_trackbacked_entries"] = "<h3>10 Most trackbacked entries</h3>";
				$lang_string['vote_info'] = "<b>%s</b> votes stored in <b>%s</b> bytes"; // 0.4.1
				$lang_string["most_voted_entries"] = "<h3>10 Most voted entries</h3>"; // 0.4.1
				$lang_string["most_rated_entries"] = "<h3>10 Most rated entries</h3>"; // 0.4.1
				break;
			default:
				break;
		}

	}
		
?>
