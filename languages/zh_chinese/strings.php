<?php
	// Traditional Chinese UTF-8 Language File
	// (c) 2004 Markmcm, mcha226 <at> hotmail <dot> com
	// (c) 2004 Judge Hu, judgehou <at> gmail <dot> com
	// Simple PHP Version: 0.3.7
	// Language Version:   0.3.7.1
	
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Traditional Chinese
		$lang_string['locale'] = 'zh_TW'; // UTF-8
		$lang_string['language'] = 'chinese';
		
		// ISO Charset: UTF-8
		$lang_string['html_charset'] = 'UTF-8';
		$lang_string['php_charset'] = 'UTF-8';		

		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "連結";
		$lang_string['menu_home'] = "首頁";
		$lang_string['menu_archive'] = "舊文章";// 要改進翻譯，原 "Archive"
		$lang_string['menu_contact'] = "聯絡網主Contact Me"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Stats";
		$lang_string['menu_menu'] = "選單";
		$lang_string['menu_add'] = "寫新文章";
		$lang_string['menu_add_static'] = "寫靜態文章";// 要改進翻譯，原 "Static Entry"
		$lang_string['menu_upload'] = "上傳圖片";
		$lang_string['menu_setup'] = "設定";
		$lang_string['menu_categories'] = "文章分類";
		$lang_string['menu_info'] = "頁面資訊"; // <-- New 0.3.7
		$lang_string['menu_options'] = "時間選項";
		$lang_string['menu_themes'] = "佈景主題";
		$lang_string['menu_colors'] = "配色";
		$lang_string['menu_change_login'] = "更改帳號";
		$lang_string['menu_logout'] = "登出";
		$lang_string['menu_login'] = "管理登入";
		$lang_string['menu_most_recent'] = "最新的回應";
		$lang_string['menu_most_recent_entries'] = "最新文章";
		$lang_string['menu_most_recent_trackback'] = "最新 Trackbacks"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "自定區塊";
		
		// Other
		$lang_string['home'] = "返回首頁";
		$lang_string['nav_next'] = '下一頁'; // <-- New 0.3.7
		$lang_string['nav_back'] = '前一頁'; // <-- New 0.3.7
		$lang_string['search_title'] = '搜尋：'; // <-- New 0.3.7
		$lang_string['search_go'] = '開始'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = '本頁花費了 %s 秒產生'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月' );
		$lang_string['sb_default_title'] = '沒有標題';
		$lang_string['sb_default_author'] = '沒有作者';
		$lang_string['sb_default_footer'] = '沒有頁尾';
		
		$lang_string['sb_edit'] = '編輯';
		$lang_string['sb_delete'] = '刪除';
		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = '引用'; // <-- New 0.3.8
		
		$lang_string['sb_add_comment_btn'] = '發表回應';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = '回應';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = '回應';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = '預覽';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = '預覽';
		
		$lang_string['sb_add_link_btn'] = '新增/管理連結';
		
		$lang_string['sb_rate_entry_btn'] = '對文章評分';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block') {
				$lang_string['label_subject'] = "標題：";
				$lang_string['label_insert'] = "插入項目："; // 要改進翻譯，原 "Insert Special"
				$lang_string['btn_bold'] = "粗體";
				$lang_string['btn_italic'] = "斜體";
				$lang_string['btn_image'] = "圖片";
				$lang_string['btn_url'] = "網址";
				$lang_string['view_images'] = "遊覽已上傳的圖片";
				$lang_string['label_entry'] = "內容："; // 要改進翻譯，原 "Entry"
				$lang_string['btn_preview'] = "&nbsp;預覽&nbsp;";
				$lang_string['btn_post'] = "&nbsp;發表&nbsp;";
				$lang_string['file_name'] = "建立這篇文章的檔名: (請用英文或數字，不要有空格跟副檔名)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "輸入被格式化的文字："; // 要改進翻譯，原 "Enter the test to be formatted
				$lang_string['insert_image'] = "輸入圖片的網址：";
				$lang_string['insert_url1'] = "輸入連結的相關說明 (非必要)："; // 要改進翻譯，原 "Optional"
				$lang_string['insert_url2'] = "輸入連結的完整網址：";
				$lang_string['insert_url3'] = "用新視窗遊覽連結 (非必要)："; // <-- New 0.3.6 // 要改進翻譯，原 "Optional"
				$lang_string['form_error'] = "標題以及文章內容不能留白"; // 意譯，原 "Please complete the Subject and Entry fields."
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = '選擇性使用：';
				$lang_string['insert_image_width'] = '寬度 (非必要)：';
				$lang_string['insert_image_height'] = '高度 (非必要)：';
				$lang_string['insert_image_popup'] = '點選後開新視窗觀看全圖 (非必要)：';
				$lang_string['insert_image_float'] = '浮動 (非必要)：';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "寫新文章";		
                                $lang_string['instructions'] = "準備好要寫 Blog 了嗎？填寫下面以後可按 \"預覽\" 來預覽文章，或按 \"發表\" 來發表文章。";
								$lang_string['title_ad'] = "發送Trackback引用通告"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "以下是你要自動發送引用通告的網址.如果有網址是你不想通告的,請取消選取. 然後按下'OK' 發送通告, 或者按下'Cancel'取消全部通告."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "填入 TrackBack 引用通告網址 (多個網址請使用逗點隔開)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "自動對文章內提到的網址發送引用通告(或者你可以在這裡手動填寫)"; // <-- New 0.3.8
				// Preview / Edit Entry
				$lang_string['title_preview'] = "預覽/編輯文章";
				$lang_string['instructions_preview'] = "下面就是你文章的預覽，如果你有加入圖片或是使用文字樣式，請確定所有的標籤都有結尾。";
				$lang_string['title_update'] = "更新文章";
				$lang_string['instructions_update'] = "在下面你可以更新你的文章，當完成後請按 \"預覽\" 或是 \"發表\"。";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>喔喔！</h2>因為發生了某些問題，所以不能儲存這篇文章。<br /><br />伺服器報告：<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "寫靜態文章";
				$lang_string['instructions'] = "填寫下面來新增靜態文章。跟平常文章不同的是，靜態文章在頁面右上角有連結。通常都包含一些常用的資訊，像是自我介紹，聯絡方法，日程表之類的網頁。完成後可按 \"預覽\" 來預覽文章，或按 \"發表\" 來發表文章。";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "預覽/編輯靜態文章";
				$lang_string['instructions_preview'] = "下面就是你的靜態文章的預覽，如果你有加入圖片或是使用文字樣式，請確定所有的標籤都有結尾。";
				$lang_string['title_update'] = "更新靜態文章";
				$lang_string['instructions_update'] = "在下面你可以更新你的文章，當完成後請按 \"預覽\" 或是 \"發表\"。";
				$lang_string['form_error'] = "主題、內容、及檔名不可留白";	
				// Error Response
				$lang_string['error'] = "<h2>喔喔！</h2>因為發生了某些問題，所以不能儲存這篇文章。<br /><br />伺服器報告：<br />";
				break;
				case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "新增/管理區塊";
				$lang_string['instructions'] = "新增自定區塊";
				$lang_string['up'] = "向上移位";
				$lang_string['down'] = "向下移位";
				$lang_string['edit'] = "編輯";
				$lang_string['delete'] = "刪除";
				$lang_string['block_name'] = "Block Name:";
				$lang_string['block_content'] = "Block content:";
				$lang_string['instructions_edit'] = "你正在編輯區塊";
				$lang_string['instructions_modify'] = "管理區塊:";
				$lang_string['submit_btn_edit'] = "更改區塊";
				$lang_string['submit_btn_add'] = "新增區塊";
				$lang_string['form_error'] = "區塊名稱請勿空白.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Static Pages:";
				// Add / Manage Links
				$lang_string['title'] = "新增/管理連結";
				$lang_string['instructions'] = "新增自訂的網站連結。填寫下面以後按 \"新增\" 來新增連結。按 \"向上移位\" \"向下移位\" 來改變連結的順序。按 \"編輯\" 來改變連結的資訊。按 \"刪除\" 來刪除連結。";
				$lang_string['up'] = "向上移位";
				$lang_string['down'] = "向下移位";
				$lang_string['edit'] = "編輯";
				$lang_string['delete'] = "刪除";
				$lang_string['link_name'] = "連結名稱：";
				$lang_string['link_url'] = "連結網址： (非必要，可留空來製作空格)";
				$lang_string['instructions_edit'] = "你正在編輯連結：";
				$lang_string['instructions_modify'] = "按下面的按鈕來更改連結：";
				$lang_string['submit_btn_edit'] = "更改連結";
				$lang_string['submit_btn_add'] = "新增連結";
				$lang_string['form_error'] = "連結名稱欄請勿空白。";
				break;
				case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "新增 / 管理 文章類別";
				$lang_string['instructions'] = "在下面的欄位裡新增或修改你的文章類別設定. 文章類別的設定法為：<b>類別名稱 (id 編號)</b>. 在前面加上空格則會成為上一排類別的子類別.<br /><br /><b>範例:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technology (2)<br />";
				$lang_string['error'] = "錯誤！";
				$lang_string['current_categories'] = "現有的類別";
				$lang_string['no_categories_found'] = "沒有建立類別";
				$lang_string['category_list'] = "文章類別列表:";
				$lang_string['validate'] = "儲存";
				$lang_string['submit_btn'] = "&nbsp;確定&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "改變配色";
				$lang_string['instructions'] = "你可以改變你的 Blog 的文字以及背景的顏色。先選擇下列的項目，然後從色盤中選擇想要的顏色。色值會自動改變。";
				$lang_string['bg_color'] = "底層背景";
				$lang_string['main_bg_color'] = "主框背景";
				$lang_string['border_color'] = "邊框";
				$lang_string['inner_border_color'] = "內邊框";
				$lang_string['header_bg_color'] = "頁首背景"; // Header 網站名字那裡
				$lang_string['header_txt_color'] = "頁首文字";
				$lang_string['menu_bg_color'] = "選單背景";
				$lang_string['footer_bg_color'] = "頁尾背景";
				$lang_string['txt_color'] = "主要文字";
				$lang_string['headline_txt_color'] = "標題文字"; // Headline 各文章的標題
				$lang_string['date_txt_color'] = "日期文字";
				$lang_string['footer_txt_color'] = "頁尾文字";
				$lang_string['link_reg_color'] = "連結";
				$lang_string['link_hi_color'] = "游標連結";
				$lang_string['link_down_color'] = "使用中連結";
				// More Colors
				$lang_string['entry_bg'] = "文章背景";
				$lang_string['entry_title_bg'] = "文章標題背景";
				$lang_string['entry_border'] = "文章邊框";
				$lang_string['entry_title_text'] = "文章標題文字";
				$lang_string['entry_text'] = "文章文字";
				$lang_string['menu_bg'] = "選單背景";
				$lang_string['menu_title_bg'] = "選單標題背景";
				$lang_string['menu_border'] = "選單邊框";
				$lang_string['menu_title_text'] = "選單標題文字";
				$lang_string['menu_text'] = "選單文字";
				$lang_string['menu_link_reg_color'] = "選單連結";
				$lang_string['menu_link_hi_color'] = "選單游標連結";
				$lang_string['menu_link_down_color'] = "選單使用中連結";
				// Submit
				$lang_string['color_preset'] = "配色主題:";
				$lang_string['scheme_name'] = "請填入你的配色主題名稱(英文):";
				$lang_string['scheme_file'] = "請填入你的配色主題檔名: (英文,不要有空格或副檔名)";
				$lang_string['form_error'] = "配色名稱或檔名不可以留白.";
				$lang_string['save_btn'] = "&nbsp;儲存配色&nbsp;";
				$lang_string['submit_btn'] = "&nbsp;確定&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>喔喔！</h2>因為發生了某些問題，所以不能儲存剛才的資訊。<br /><br />伺服器報告：<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['comment_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "回應";
				$lang_string['header'] = "發表回應";
				$lang_string['instructions'] = "填寫下面來發表回應。";
				$lang_string['comment_name'] = "你的名字：";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "記住我:"; // 0.3.8
				$lang_string['comment_text'] = "回應：";
				$lang_string['post_btn'] = "&nbsp;發表回應&nbsp;";
				$lang_string['delete_btn'] = "刪除";
				// Error Response
				$lang_string['error_add'] = "<h2>喔喔！</h2>因為發生了某些問題，所以不能儲存這篇回應。<br /><br />伺服器報告：<br />";
				$lang_string['error_delete'] = "<h2>喔喔！</h2>因為發生了某些問題，所以不能刪除這篇回應。<br /><br />伺服器報告：<br />";
				$lang_string['form_error'] = "名字以及回應欄不能留白。"; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "刪除回應";
				$lang_string['instructions'] = "這是你準備刪除的文章，請再次確認，因為刪除後就不能挽回了。";
				$lang_string['ok_btn'] = "&nbsp;確定&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;取消&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>喔喔！</h2>因為發生了某些問題，所以不能刪除這篇文章。<br /><br />伺服器報告：<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "刪除靜態文章";
				$lang_string['instructions'] = "這是你準備刪除的靜態文章，請再次確認，因為刪除後就不能挽回了";
				$lang_string['ok_btn'] = "&nbsp;確定&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;取消&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>喔喔！</h2>無法刪除這篇文章。<br /><br />伺服器報告：<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "圖片列表";
				$lang_string['instructions'] = "觀賞圖片請按下面的連結<br /><br />如果想要放置圖片在文章裡<br />1) 在圖片連結上按右鍵並且選擇 \"複製連結網址\" <br />2) 回到寫新文章或是編輯文章的地方 <br />3) 點選 \"圖片\" 並把網址貼上。";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Meta-Data 資訊";
				$lang_string['instructions'] = "下面的資訊是 &quot;meta-data&quot; ，它能讓搜尋引擎正確的搜尋並確認你的網站。Meta-Data 也能夠被用在 RSS feeds 上";
				$lang_string['info_keywords'] = "關鍵詞： (每個詞請用逗號分開)";
				$lang_string['info_description'] = "描述： (簡單的描述你的網站)";
				$lang_string['info_copyright'] = "著作權： (著作權聲明，或者是到達著作資訊的連結)";
				$lang_string['submit_btn'] = "&nbsp;確定&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>喔喔！</h2>因為發生了某些問題，所以不能儲存剛才的資訊。<br /><br />伺服器報告：<br />";
				$lang_string['form_error'] = "標題以及作者欄不能留白。";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>喔喔! </h2>因為發生了某些問題，所以不能儲存剛才的評分。<br /><br />伺服器報告：<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Upgrade</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n comment files need to be upgraded:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Upgrade Comments"; // New 0.3.8
				$lang_string['title'] = "登入";
				$lang_string['instructions'] = "請在下面輸入你的使用者名稱以及密碼。";
				$lang_string['username'] = "使用者名稱";
				$lang_string['password'] = "密碼";
				$lang_string['submit_btn'] = "&nbsp;確定&nbsp;";
				// Success
				$lang_string['success'] = "<h2>成功！</h2>你已經登入了。祝你 Blogging 快樂！<p />"; // Happy Blogging
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>喔喔！</h2>你不能登入。請確認你有使用正確的使用者名稱以及密碼，並且再試一次。<p />";
				$lang_string['form_error'] = "使用者名稱以及密碼欄不能留白。";
				break;
			case 'logout':
				$lang_string['title'] = "登出";
				$lang_string['instructions'] = "<h2>喔喔！</h2>登出失敗。無法刪除 Cookies，為何你還在登入狀態呢？<p />"; // Why are you still logged in?
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>喔喔！</h2>剛才的資訊沒有儲存。在儲存的時候遇到一些問題。<br /><br />伺服器報告：<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "變更使用者名稱或是密碼";
				$lang_string['instructions'] = "在下面變更使用者名稱或者密碼，請輸入想要的名稱以及密碼。";
				$lang_string['username'] = "使用者名稱：";
				$lang_string['password'] = "密碼：";
				$lang_string['submit_btn'] = "&nbsp;確定&nbsp;";
				// Success
				$lang_string['success'] = "<h2>成功！</h2>你的使用者名稱/密碼已經儲存。祝你 Blogging 快樂！<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>喔喔！</h2>剛才的資訊沒有儲存。在儲存使用者名稱以及密碼的時候遇到一些問題。<br /><br />伺服器報告：<br />";
				$lang_string['form_error'] = "使用者名稱以及密碼欄不能留白。";
				$lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
					and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
					exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
					to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "歡迎光臨";
				$lang_string['instructions'] = "感謝你選擇 Simple PHP Blog"; //難道該想個中文名字嗎?

				$lang_string['blog_choose_language'] = "請選擇語言：";
				$lang_string['submit_btn'] = "&nbsp;確定&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "歡迎光臨";
				$lang_string['instructions'] = "
				感謝你選擇 Simple PHP Blog！<br /><br />Simple PHP Blog　是一個輕巧的 Blog 系統。它需要 PHP 4.1 或更新的系統，還有寫入的許可。所有的資訊都儲存在文字檔內，所以不需要使用資料庫也能執行。<br /><br />
				開始之前，Simple PHP Blog 需要建立三個新的資料夾 ('config', 'content', 以及 'images') 來儲存其他資訊。<br /><br />
				<b>按下面來開始安裝。</b>";
				$lang_string['begin'] = "[ 開始安裝 ]";
				break;
			case 'install02':
				$lang_string['title'] = "安裝";
				$lang_string['instructions'] = "正在建立 'config', 'content', 以及 'images' 這三個資料夾：";
				$lang_string['folder_exists'] = "因為這三個資料夾已經存在，所以不作任何改變。";
				$lang_string['folder_failed'] = "喔喔！不能建立資料夾。";
				$lang_string['folder_success'] = "成功！資料夾已經建立。";
				// Help
				$lang_string['help'] = "
				<h2>喔喔！</h2>
				無法建立資料夾，以下是可能的原因：<br>
				<i>1) <b>寫入許可</b>，沒有許可可以 <b>寫入/讀出</b>。</i><br>
				<i>2) 每個資料夾的 <b>UID</b>(擁有者代號 user ID) 不同。</i><p />
				請嘗試下列的方法，然後再重新安裝一次。<p />
				1) 重新手動建立這些資料夾 <b>config</b>， <b>content</b>，以及 <b>images</b>。<p />
				2) 改變這些資料夾的 <b>寫入許可 (Write Permission)</b>。在你的 FTP 軟體上，讓這三個資料夾的 Owner, User, and World should 都有 <b>Read</b>(讀取) 還有 <b>Write</b>(寫入) 的許可。<i>(你可能需要伺服器服務人員的幫忙。)</i><p />
				3) 確定全部的資料夾都有相同的擁有者代號。<i>(可能伺服器服務人員才能改變這些。)</i>";
				$lang_string['try_again'] = "[ 再試一次 ]";
				// Success
				$lang_string['success'] = "<h2>成功！</h2>資料夾成功的建立了。<p /><b>請按下面繼續：</b>";
				$lang_string['continue'] = "[ 繼續 ]";
				break;
			case 'install03':
				$lang_string['title'] = "建立使用者名稱以及密碼";
				$lang_string['instructions'] = "在下面建立使用者名稱以及密碼。";
				$lang_string['username'] = "使用者名稱：";
				$lang_string['password'] = "密碼：";
				$lang_string['submit_btn'] = "&nbsp;確定&nbsp;";
				// Success
				$lang_string['success'] = "<h2>恭喜！</h2>你現在已經登入了。按下面開始設定你的 Blog 相關資訊。祝你 Blogging 快樂！<p />";
				$lang_string['btn_setup'] = "[ 設定 ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>喔喔！</h2>無法儲存資訊。在儲存你的使用者名稱以及密碼的時候發生了一些問題。<br />
				也許是 UID 的問題，請嘗試下列的方法，然後再重新安裝一次。<p />
				1) 刪除 <b>config</b>， <b>content</b>，以及 <b>images</b>的資料夾<p />
				2) 在你的 FTP 軟體上，更改 Blog 目錄的 Owner, User, and World should 都有 <b>Read</b>(讀取) 還有 <b>Write</b>(寫入) 的許可。(也許你必須把 Simple PHP Blog 移動到一個子資料夾才能更改該資料夾的許可)<p />
				3) 重新再安裝一次。
				<br /><br />伺服器報告：<br />";
				$lang_string['form_error'] = "使用者名稱以及密碼欄不能留白。";
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
				$lang_string['title'] = "設定";
				$lang_string['instructions'] = "在這裡你能改變 Blog 的名稱，以及你自己的資料，";
				$lang_string['blog_title'] = "Blog 站名：";
				$lang_string['blog_author'] = "作者：";
				$lang_string['blog_email'] = "Email："; // <-- New 0.3.7
				$lang_string['blog_footer'] = "頁尾：";
				$lang_string['blog_choose_language'] = "請選擇語言：";
				$lang_string['blog_enable_comments'] = "准許回應"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "在新視窗開啟回應"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "准許觀眾對文章評分"; // <-- New 0.3.8
				$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
				$lang_string['blog_email_notification'] = "有新的回應時用 Email 通知你"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "送出網誌的 &quot;pings&quot;"; // <-- New 0.3.7 //　不知道這是啥 -_-|||
				$lang_string['blog_ping_urls'] = "輸入你的 &quot;ping&quot; 服務的完整網址。(像是 http://rpc.weblogs.com/RPC2)<br />(如果有多個網址，可用逗號分開。)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "<b>引用(Trackback)</b>是一種在各blog之間提供通知方法的功能. 發送Trackback可以讓另一個
					blog知道你在討論他寫的文章. 你也可以經由Trackback訊息 
					知道誰連接到你的blog引用文章.<br />
				   你可以在寫新文章時在 '填入 TrackBack 引用通告網址'的欄位中填入你要引用的網址,或者你可以使用
				   自動對文章內提到的網址發送引用通告功能."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "在我的blog裡使用引用(trackback)功能"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "使用自動對文章內提到的網址發送引用通告的功能"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "最多顯示多少篇文章："; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "回應時能使用的語法標籤"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					PHP 從 4.0.4 開始就可以讀寫 gzip (.gz)的壓縮檔案以便節省網路空間，
					也可以傳回被壓縮的檔案給支援的遊覽器以節省頻寬。<br /><br />
					PHP 並沒有預設使用 Zlib，如果下列的選項無法勾取的話，
					那麼你伺服器的 PHP 還不能支援 Zlib 的功能。"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "准許對資料庫檔案進行 GZIP 壓縮。"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "准許對傳送出的網頁進行 GZIP 壓縮。"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;確定&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>喔喔！</h2>無法儲存剛剛的資訊。當儲存資料的時候遇到了某些問題。<br /><br />伺服器報告：<br />";
				$lang_string['form_error'] = "Blog 站名以及作者欄不能留白。";
				$lang_string['label_entry_order'] = "文章的排列法：";
				$lang_string['select_new_to_old'] = "新的文章在前面";
				$lang_string['select_old_to_new'] = "舊的文章在前面";
				$lang_string['label_comment_order'] = "回應的順序：";
				break;
				case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string['title'] = "引用(Trackbacks)";
				$lang_string['header'] = "本文章的引用網址:";
				$lang_string['delete_btn'] = "刪除";
				// Error Response
				$lang_string['error_add'] = "Trackback資料儲存時發生錯誤";
				break;
			case 'options':
				$lang_string['title'] = "時間選項";
				$lang_string['instructions'] = "這裡能自訂日期以及時間的顯示方法。你能選擇 12/24 時制，日期顯示的長短，以及被自動更新化的地方<b>預覽</b>你的設定。";
				// Long Date
				$lang_string['ldate_title'] = "日期顯示(長)：";
				$lang_string['weekday'] = "星期";
				$lang_string['month'] = "月";
				$lang_string['day'] = "日";
				$lang_string['year'] = "年";
				$lang_string['none'] = "皆無";
				// Short Date
				$lang_string['sdate_title'] = "日期顯示(短)：";
				$lang_string['s_month'] = "月";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "日";
				$lang_string['s_year'] = "年";
				$lang_string['zero_day'] = "添加 0 補齊數位";
				$lang_string['show_century'] = "顯示世紀";
				// Time
				$lang_string['time_title'] = "時間格式：";
				$lang_string['12hour'] = "12-時制";
				$lang_string['24hour'] = "24-時制";
				$lang_string['before_noon'] = "上午";
				$lang_string['after_noon'] = "下午";
				// Date
				$lang_string['date_title'] = "日期顯示格式：";
				$lang_string['long_date'] = "日期顯示(長)";
				$lang_string['short_date'] = "日期顯示(短)";
				$lang_string['time'] = "時間";
				// Menu
				$lang_string['menu_title'] = "選單日期顯示格式";
				$lang_string['long_date'] = "日期顯示(長)";
				$lang_string['short_date'] = "日期顯示(短)";
				// Used in multiple places
				$lang_string['zero_day'] = "添加 0 補齊日的數位";
				$lang_string['zero_month'] = "添加 0 補齊月的數位";
				$lang_string['zero_hour'] = "添加 0 補齊年的數位";
				$lang_string['separator'] = "隔號：";
				$lang_string['preview'] = "預覽：";
				$lang_string['server_offset'] = "伺服器時差：";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;確定&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>喔喔！</h2>無法儲存剛剛的資訊。當儲存資料的時候遇到了某些問題。<br /><br />伺服器報告：<br />";
				break;
			case 'themes':
				$lang_string['title'] = "佈景主題";
				$lang_string['instructions'] = "在下拉式選單中選擇佈景主題。";
				// Themes
				$lang_string['choose_theme'] = "佈景主題：";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;確定&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>喔喔！</h2>無法儲存剛剛的資訊。當儲存資料的時候遇到了某些問題。<br /><br />伺服器報告：<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "上傳圖片：";
				$lang_string['instructions'] = "按下面的按鈕選擇要上傳的檔案。";
				$lang_string['select_file'] = "選擇檔案：";
				$lang_string['upload_btn'] = "上傳";
				// Error Response
				$lang_string['error'] = "<h2>喔喔！</h2>無法上傳圖片。以下是一些資訊：<br /><br />伺服器報告：<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "搜尋結果：";
				$lang_string['instructions'] = "搜尋 <b>%string</b> 的結果：";
				$lang_string['not_found'] = "沒有相關資訊。";
				break;
			case 'contact': // <-- New 0.3.8
				$lang_string['title'] = "聯絡網主 Contact Me";
				$lang_string['instructions'] = "請填入以下資訊,以下訊息將會郵寄給網主:";
				$lang_string['form_error'] = "內容請不要留白.";
				$lang_string['name'] = "名字:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "主題:";
				$lang_string['comment'] = "內容:";
				$lang_string['submit_btn'] = "&nbsp;發送&nbsp;";
				$lang_string['success'] = "<h2>發送成功!</h2>你的訊息已經寄出摟.<p />";
				$lang_string['failure'] = "<h2>Error!</h2>Your message has not been sent. Most likely the Anti Spam was not entered properly.<p />";
				$lang_string['contact_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2	
				$lang_string['contactsent'] = "Contact sent through: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				break;	
			case 'stats':
				$lang_string["title"] = "Statistics";
				$lang_string["general"] = "General";
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
