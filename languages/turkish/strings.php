<?php
// Turkish Language Translation(s)
  // (c) 2004 Alexander Palmo, apalmo <at> bigevilbrain <dot> com
  // (c)  Edits: 2007 Ferdi KIZIL, rhythm80 <at> hotmail <dot> com

  // Simple PHP Version: 0.5.0.1
  // Language Version:   0.5.0.1

  function sb_language( $page ) {
    global $language, $html_charset, $php_charset, $lang_string;

    // Language: Turkce
    $lang_string['language'] = 'Turkce';
    $lang_string['locale'] = array('tr_TR', 'tr');
    $lang_string['rss_locale'] = 'tr_TR'; // New 0.4.8

     // ISO Charset: ISO-8859-1
     $lang_string['html_charset'] = 'ISO-8859-0';
     $lang_string['php_charset'] = 'ISO-8859-9';
     setlocale(LC_TIME, $lang_string['locale'] ); 
		
    // Global Strings

    // Menu
    $lang_string['menu_links'] = "MENU";
    $lang_string['menu_home'] = "ANA SAYFA";
    $lang_string['menu_contact'] = "ILETISIM";
    $lang_string['menu_stats'] = "ISTATISTIK";
    $lang_string['menu_calendar'] = "TAKVIM"; // New for 0.4.8
    $lang_string['menu_archive'] = "ARSIV";
    $lang_string['menu_viewarchives'] = "ARSIVI GOSTER";
    $lang_string['menu_menu'] = "YAZAR MENU";
    $lang_string['menu_add'] = "YAZI EKLE";
    $lang_string['menu_add_static'] = "SABIT SAYFA EKLE";
    $lang_string['menu_upload'] = "RESIM YUKLE";
    $lang_string['menu_setup'] = "GENEL AYARLAR";
    $lang_string['menu_categories'] = "KATEGORILER";
    $lang_string['menu_info'] = "META ETIKETI";
    $lang_string['manage_users'] = "UYE YONETIM";
    $lang_string['manage_php_config'] = "PHP OZELLIKLERI"; // New in 0.5.0.1
    $lang_string['menu_options'] = "TARIH & SAAT";
    $lang_string['menu_themes'] = "GORUNUMLER";
    $lang_string['menu_colors'] = "RENKLER";
    $lang_string['menu_change_login'] = "Giris Degistir";
    $lang_string['menu_logout'] = "CIKIS";
    $lang_string['menu_login'] = "GIRIS";
    $lang_string['menu_most_recent'] = "YENI YORUMLAR";
    $lang_string['menu_most_recent_entries'] = "YENI YAZILAR";
    $lang_string['menu_most_recent_trackback'] = "YENI TRACKBACKS";
    $lang_string['menu_add_block'] = "BLOKLAR";
    $lang_string['menu_emoticons'] = "ÝFADELER"; // New for 0.4.7
    $lang_string['menu_avatar'] = "AVATAR"; // New for 0.4.7
    $lang_string['menu_moderation'] = "KELIME/IP YASAKLA"; // New for 0.4.9
    $lang_string['menu_commentmoderation'] = "ONAY BEKLEYEN YORUMLAR"; // New for 0.5.0
    $lang_string['menu_random_entry'] = "RASTGELE"; // New for 0.5.2
    $lang_string['menu_plugins'] = "PLUGINS"; // New for 0.5.2
    $lang_string['notice_moderator1'] = "Yeni ";
    $lang_string['notice_moderator2'] = " Yorum Onay Bekliyor.";
    $lang_string['notice_loggedin'] = "Hosgeldin";
    

    // Counter
    $lang_string['counter_today'] = "Bugün:"; // New for 0.4.8
    $lang_string['counter_yesterday'] = "Dün:"; // New for 0.4.8
    $lang_string['counter_totalsidebar'] = "Toplam:"; // New for 0.4.8
    $lang_string['counter_title'] = "KONTUR"; // New for 0.4.8

    // Other
    $lang_string['home'] = 'Ana Sayfaya Dön';
    $lang_string['nav_next'] = 'Sonraki';
    $lang_string['nav_back'] = 'Önceki';
    $lang_string['nav_first'] = 'Ýlk Baþ'; // New in 0.5.0.1
    $lang_string['nav_last'] = 'En Son'; // New in 0.5.0.1
    $lang_string['search_title'] = 'ARA: ';
    $lang_string['search_go'] = 'Ara';
    $lang_string['page_generated_in'] = 'Sayfa %s Saniyede oluþturuldu';
    $lang_string['counter_total'] = 'Site Görüntülenme: '; // New in 0.4.8
    $lang_string['read_more'] = 'Devamý...'; // New in 0.4.8
    $lang_String['randomentry'] = 'Rastgele Yazý'; // New in 0.5.0.1
    $lang_string['randomquote'] = 'Rastgele Alýntý'; // New in 0.5.0.1

    // SB Functions
    $lang_string['sb_months'] = array( 'Ocak', 'Subat', 'Mart', 'Nisan', 'Mayýs', 'Haziran', 'Temmuz', 'Agustos', 'Eylul', 'Ekim', 'Kasým', 'Aralýk' );
    $lang_string['sb_default_title'] = 'Baþlýk Yok';
    $lang_string['sb_default_author'] = 'Sahibi Yok';
    $lang_string['sb_default_footer'] = 'Son Ek Yok';

    $lang_string['sb_edit'] = 'Düzenle';
    $lang_string['sb_delete'] = 'Sil';
    $lang_string['sb_permalink'] = 'permalink';
    $lang_string['sb_trackback'] = 'trackbacks';
    $lang_string['sb_postedby'] = 'Gönderen:'; // 0.5.0
    $lang_string['sb_admin'] = 'Yönetici.'; // 0.5.0
    $lang_string['sb_relatedlink'] = 'ilgili link'; // <-- New in 0.4.6

    $lang_string['sb_add_comment_btn'] = 'Yorum Ekle';
    $lang_string['sb_read_entry_btn'] = 'Yazýyý Oku'; // 0.5.0
    $lang_string['sb_comment_btn_number_first'] = true;
    $lang_string['sb_comment_btn'] = 'Yorum';
    $lang_string['sb_comment_view'] = 'Gösterim'; // 0.5.0
    $lang_string['sb_comments_plural_btn_number_first'] = true;
    $lang_string['sb_comments_plural_btn'] = 'Yorum';
    $lang_string['sb_comments_plural_view'] = 'Gösterim'; // 0.5.0

    // ( 1 view )
    $lang_string['sb_view_counter_pre'] = '';
    $lang_string['sb_view_counter_post'] = ' Gösterim';

    // ( 2 views )
    $lang_string['sb_view_counter_plural_pre'] = '';
    $lang_string['sb_view_counter_plural_post'] = ' Gösterim';

    $lang_string['sb_add_link_btn'] = '+ LINK EKLE';
    $lang_string['sb_rate_entry_btn'] = 'Yazýya Oy Vermek Için Týklayýn';

    // Entry Text Editor
    if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
      $lang_string['label_subject'] = "Konu";
      $lang_string['label_insert'] = "Özel Kod Ekle:";
      $lang_string['btn_bold'] = " b ";
      $lang_string['btn_italic'] = " i ";
      $lang_string['btn_image'] = "img";
      $lang_string['btn_url'] = "url";
      $lang_string['btn_readmore'] = "Devamý..."; // 0.4.8
      $lang_string['view_images'] = "Yüklenmiþ Resimleri Göster";
      $lang_string['label_entry'] = "Yazý:";
      $lang_string['btn_preview'] = "&nbsp;Önizleme&nbsp;";
      $lang_string['btn_post'] = "&nbsp;Onayla&nbsp;";
      $lang_string['chk_visiblemenu'] = "Menü'de Görünsün";
      $lang_string['file_name'] = "Sabit Sayfa Ýsmi: (Dosya'ya Ýsim Verirken Boþluk Verme)";

      // Javascript Strings
      $lang_string['insert_styles'] = "Bu Format Ýçin Yazý Girin:";
      $lang_string['insert_image'] = "Resim için Tam URL girin:";
      $lang_string['insert_url1'] = "Linkte Gözüntülenmesini istediðiniz Yazý (isteðe baðlý):";
      $lang_string['insert_url2'] = "Baðlantý için Tam URL girin:";
      $lang_string['insert_url3'] = "URL Yeni Sayfada Açýlsýn (isteðe baðlý):";
      $lang_string['form_error'] = "Lütfen Konu Yada Yazýyý Tamamlayýn.";

      // More Javascript Strings
      $lang_string['insert_image_optional'] = 'Optional:';
      $lang_string['insert_image_width'] = 'Geniþlik (isteðe baðlý):';
      $lang_string['insert_image_height'] = 'Yükseklik (isteðe baðlý):';
      $lang_string['insert_image_popup'] = 'Tam Boyut Yeni Pencerede Açýlsýn (isteðe baðlý):';
      $lang_string['insert_image_float'] = 'Float (isteðe baðlý):';

      $lang_string['day'] = 'Gün';
      $lang_string['month'] = 'Ay';
      $lang_string['year'] = 'Yýl';
      $lang_string['hour'] = 'Saat';
      $lang_string['minute'] = 'Dakika';
      $lang_string['second'] = 'Saniye';
    }

    switch ($page) {
      case 'add':
        // Add Entry
        $lang_string['title'] = "Yazý Ekle";
        $lang_string['instructions'] = "Blog'a hazýr mýsýnýz? Yazýnýzýn nasýl görüneceðini görmek için Önizleme'ye, kaydetmek için de Onayla butonunu kullanabilirsiniz.";
        $lang_string['title_ad'] = "Confirm Trackback Pings";
        $lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
        $lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)";
        $lang_string['label_tb_autodiscovery'] = "autodiscovery";
        $lang_string['label_relatedlink'] = "Ýlgili Link";
        $lang_string['label_categories'] = "Kategori Listesi";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Yazý Önizleme / Düzenle";
        $lang_string['instructions_preview'] = "Ýþte girdinizin görünüþü. Eðer metin düzenleyici 'tag'lar kullanýyorsanýz, onlarý kapatmayý unutmayýn.";
        $lang_string['title_update'] = "Yazýyý Güncelle";
$lang_string['instructions_update'] = "Girdinizi aþaðýdaki form yardýmýyla güncelleyebilirsiniz. Ýþiniz bittiðinde 'Önizleme' ya da 'Onayla' butonunu kullanabilirsiniz.";
        $lang_string['ok_btn'] = "&nbsp;Tamam&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Ýptal&nbsp;";

        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Yazýnýz kaydedilemedi. Girdinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Yazý Kaydedildi!</h2>Yazýnýn Kaydedilmesi baþarýlý."; // 0.4.8.1
        break;

      case 'add_static':
        // Add Entry
        $lang_string['title'] = "Sabit Sayfa Ekle";
        $lang_string['instructions'] = "Sabit bir sayfa oluþturmak için aþaðýdaki formu doldurun. Normal girdilerden farklý olarak sabit sayfalar linkler gibi sað tarafta sürekli görünürler. Bunlar her zaman görünmesini isteyebileceðiniz 'Benimle ilgili', 'Benimle baðlantýya geçin', 'Proje bilgisi' benzeri sayfalar olabilirler. 'Önizleme'ye týklayarak girdinizin nasýl göründüðünü kontrol edebilir, 'Onaylar' butonu ile kaydedebilirsiniz.";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Sabit Sayfa Önizleme / Düzenle";
        $lang_string['instructions_preview'] = "Ýþte sabit sayfanýzýn nasýl görüneceði. Eðer metin formatlamak için kullandýðýnýz 'tag'lar varsa onlarý kapamayý ihmal etmeyin.";
        $lang_string['title_update'] = "Update Static Page";
        $lang_string['instructions_update'] = "Girdinizi deðiþtirmek için aþaðýdaki formu kullanabilirsiniz. Ýþiniz bittiðinde 'Önizleme' ya da 'Gönder' butonunu kullanabilirsiniz.";
        $lang_string['form_error'] = "Lütfen Konu, Yazý ve Dosya Adý bölümlerini doldurun.";

        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Girdiniz kaydedilemedi. Girdinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server Raporu:<br />";
        break;

      case 'add_block':
        // Add / Manage Blocks
        $lang_string['title'] = "Blok Ekle / Yönet";
        $lang_string['instructions'] = "Use the form below to add custom 'Blocks' which will appear in the sidebar menu.";
        $lang_string['up'] = "Yukarý";
        $lang_string['down'] = "Aþaðý";
        $lang_string['edit'] = "Düzenle";
        $lang_string['delete'] = "Sil";
        $lang_string['block_name'] = "Blok Ýsmi:";
        $lang_string['block_content'] = "Blok Ýçeriði:";
        $lang_string['instructions_edit'] = "You are currently editing a Block.";
        $lang_string['instructions_modify'] = "Buradan Blok yaratabilir yada yönetebilirsiniz. Yukarý, Aþaðý linkleri ile yan menudeki pozisyonlarýný düzenleyebilir, dilerseniz silebilirsiniz. ";
        $lang_string['submit_btn_edit'] = "Blok Düzenle";
        $lang_string['submit_btn_add'] = "Blok Ekle";
        $lang_string['form_error'] = "Lütfen Ýlgili Bölümleri Tamamlayýn.";
        break;

      case 'add_link':
        $lang_string['static_pages'] = "Sabit Sayfalar:";

        // Add / Manage Links
        $lang_string['title'] = "Link Ekle / Yönet";
        $lang_string['instructions'] = "Diðer sitelere linkler ekleyin. formu doldurduktan sonra 'Link Ekle' butonuna týklayarak linkinizi kaydedebilirsiniz. Linkliern sýrasýný deðiþtirmek için yukarý / aþaðý butonlarýný kullanabilirsiniz. Bir linki deðiþtirmek için 'Deðiþtir' butonunu kullanabilirsiniz. Bir linki silmek için ise 'Sil' butonunu kullanabilirsiniz";
        $lang_string['up'] = "Yukarý";
        $lang_string['down'] = "Aþaðý";
        $lang_string['edit'] = "Düzenle";
        $lang_string['delete'] = "Sil";
        $lang_string['link_name'] = "Link Ýsmi:";
        $lang_string['link_url'] = "Link URL: (Optional. Ayraç oluþturmak için boþ býrakabilirsiniz.)";
        $lang_string['instructions_edit'] = "Þu anda bu linki deðiþtiriyorsunuz:";
        $lang_string['instructions_modify'] = "Bir linki Düzenlemek için þuraya týklayýn:";
        $lang_string['submit_btn_edit'] = "Link Düzenle";
        $lang_string['submit_btn_add'] = "Link Ekle";
        $lang_string['form_error'] = "Lütfen Ýlgili Bölümleri Tamamlayýn.";
        break;

      case 'categories':

        // Add / Manage Links
        $lang_string['title'] = "Kategori Ekle / Yönet";
        $lang_string['instructions'] = " Buradan Blog'daki Kategorileri düzenleyebilirsiniz. Örnekte gözüktüðü gibi yapmanýz gereken 'Kategori Adý (Sýra Numara)' þeklinde düzenlemek. Dilerseniz boþluk vererebilirsiniz.<br /><br /><b>Örnek:</b><br />Genel (1)<br />Haberler (3)<br />&nbsp;&nbsp;Ýlanlar (6)<br />&nbsp;&nbsp;Diðer (5)<br />&nbsp;&nbsp;&nbsp;Spor (7)<br />Teknoloji (2)<br />";
        $lang_string['error'] = "HATA";
        $lang_string['current_categories'] = "Mevcut Kategoriler";
        $lang_string['no_categories_found'] = "Kategori Bulunamadý";
        $lang_string['category_list'] = "Kategori Listesi:";
        $lang_string['validate'] = "Onayla";
        $lang_string['submit_btn'] = "&nbsp;Gönder&nbsp;";
        break;

      case 'colors':
        // Change Colors
        $lang_string['title'] = "Renkleri Deðiþtir";
        $lang_string['instructions'] = "Blog'daki yazý ve Arkaplanlarý (BG) buradan deðiþrirebilirsiniz. Bunu yapmak için önce ilgili bölümü seçtikten sonra Color Mixer yardýmýyla kolaylýkla deðiþik yapabilirsiniz. Göndere basarak deðiþikliði onaylayabilir ,Renk Düzeni dosya adý yazdýktan sonra farklý bir isimle kaydedebilir dilerseniz hazýr Renk Düzenlerinide kullanabilirsiniz";
        $lang_string['bg_color'] = "BG Sayfa";
        $lang_string['main_bg_color'] = "BG Ana Sayfa";
        $lang_string['border_color'] = "Sayfa Kenarlýk";
        $lang_string['inner_border_color'] = "Ýç Ayýrýcý Kenarlýk";
        $lang_string['header_bg_color'] = "BG Baþlýk";
        $lang_string['header_txt_color'] = "Baþlýk Text";
        $lang_string['menu_bg_color'] = "BG Menu";
        $lang_string['footer_bg_color'] = "BG Alt Bölüm";
        $lang_string['txt_color'] = "Ana Yazý";
        $lang_string['headline_txt_color'] = "Headline Text";
        $lang_string['date_txt_color'] = "Tarih Yazý";
        $lang_string['footer_txt_color'] = "Footer Text";
        $lang_string['link_reg_color'] = "Link Normal";
        $lang_string['link_hi_color'] = "Link Üstunde";
        $lang_string['link_down_color'] = "Link Týklayýnca";

        // More Colors
        $lang_string['entry_bg'] = "Yazý BG";
        $lang_string['entry_title_bg'] = "Yazý Baþlýk BG";
        $lang_string['entry_border'] = "Yazý Kenarlýk";
        $lang_string['entry_title_text'] = "Yazý Baþlýk Yazý";
        $lang_string['entry_text'] = "Yazý Yazý";

        $lang_string['static_bg'] = "Sabit Sayfa BG"; // 0.5.0
        $lang_string['static_title_bg'] = "Sabit Sayfa Baþlýðý BG"; // 0.5.0
        $lang_string['static_border'] = "Sabit Sayfa Kenarlýk"; // 0.5.0
        $lang_string['static_title_text'] = "Sabit Sayfa Baþlýk Yazý"; // 0.5.0
        $lang_string['static_text'] = "Sabit Sayfa Yazý"; // 0.5.0

        $lang_string['comment_bg'] = "Yorum BG"; // 0.5.0
        $lang_string['comment_title_bg'] = "Yorum Baþlýk BG"; // 0.5.0
        $lang_string['comment_border'] = "Yorum Kenarlýk"; // 0.5.0
        $lang_string['comment_title_text'] = "Yorum Baþlýk Yazý"; // 0.5.0
        $lang_string['comment_text'] = "Yorum Yazý"; // 0.5.0

        $lang_string['menu_bg'] = "Menu BG";
        $lang_string['menu_title_bg'] = "Menu Baþlýk BG";
        $lang_string['menu_border'] = "Menu Kenarlýk";
        $lang_string['menu_title_text'] = "Menu Baþlýk Yazý";
        $lang_string['menu_text'] = "Menu Yazý";
        $lang_string['menu_link_reg_color'] = "Menu Link Normal";
        $lang_string['menu_link_hi_color'] = "Menu Link Üstünde";
        $lang_string['menu_link_down_color'] = "Menu Link Týklayýnca";

        // Submit
        $lang_string['color_preset'] = "Renk Düzenleri:";
        $lang_string['scheme_name'] = "Renk Düzeni ismi Yazýn:";
        $lang_string['scheme_file'] = "Renk Düzeni dosya adý: (no spaces or file extensions)";
        $lang_string['save_btn'] = "&nbsp;Kaydet&nbsp;";
        $lang_string['form_error'] = "Please enter a name for your custom color scheme.";
        $lang_string['submit_btn'] = "&nbsp;Gönder&nbsp;";
        $lang_string['theme_doesnt_allow_colors'] = 'The currently selected theme does not allow for custom colors.';

        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Colors Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
        break;

      case 'comments':
        // Comments
        $lang_string['name'] = "Ýsim:"; //New in 0.4.6.2
        $lang_string['email'] = "E-mail:"; //New in 0.4.6.2
        $lang_string['homepage'] = "Web:"; //New in 0.4.6.2
        $lang_string['comment'] = "Yorum:"; //New in 0.4.6.2
        $lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6.2
        $lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2
        $lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2

        $lang_string['comment_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
        $lang_string['title'] = "Yorumlar";
        $lang_string['header'] = "Yorum Ekle";
        $lang_string['instructions'] = "Yorum eklemek için formu doldurmanýz gerekli.  <b style=\"color: red;\">(LÜTFEN BAYRAKLARI VE RESÝMLERÝ KULLANMAYIN)</b> ";
        $lang_string['comment_name'] = "Ýsim:";
        $lang_string['comment_email'] = "Email:";
        $lang_string['comment_url'] = "URL:";
        $lang_string['commentposted'] = "New comment posted at: ";  // New for 0.4.6.2
        $lang_string['comment_remember'] = "Beni Hatýrla:";
        $lang_string['comment_text'] = "Yorum:";
        $lang_string['post_btn'] = "&nbsp;Yorumu Gönder&nbsp;";
        $lang_string['delete_btn'] = "Sil";
        $lang_string['ban_btn'] = "IP YASAKLA"; // New for 0.4.8
        $lang_string['expired_comment1'] = "Üzgünüm. Yeni Yorum Gönderemezsin. Günlük Yorum Limiti "; // New for 0.4.8
        $lang_string['expired_comment2'] = " tanedir."; // New for 0.4.8

        $lang_string['blacklisted'] = "ÜZGÜNÜM, IP Numarasý Banlý. Yorum gönderemezsin."; // New for 0.4.8
        $lang_string['bannedword'] = " <h2>ÜZGÜNÜM!</h2>Ýsim,Email,Url yada Yorumunuzda yönetici tarafýnda yasaklanmýþ kelime bulunduðu için <b>Yorumunuz Gönderilmedi.</b>"; // New for 0.4.8
        $lang_string['nocomments'] = "Comments are not available for this entry."; // New for 0.4.9
        $lang_string['email_moderator'] = "Comments are currently moderated. This comment needs approval before it will be seen by the public."; // New for 0.5.0
        $lang_string['user_notice_mod'] = "Yorumunuz Onaylanýncaya kadar görünmeyecektir."; // new for 0.5.0

        $lang_string['return_to_comments'] = 'Yorumlara Geri Dön';

        // Error Response
        $lang_string['error_add'] = "<h2>Hoyt...!</h2>Yorumunuz kaydedilemedi. Yorumunuzu kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server Raporu:<br />";
        $lang_string['error_delete'] = "<h2>Hoyt...!</h2>Yorumunuz silinemedi. Yorumunuzu simeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server Raporu:<br />";
        $lang_string['error_ban'] = "<h2>Hoyt...!</h2>IP not added to banned ip listing.<br /><br />Server Raporu:<br />";
        $lang_string['success_add'] = "<h2>Yorum Eklendi</h2>Yorumunuz Baþarýyla Kaydedildi."; // New for 0.4.8.1
        $lang_string['success_delete'] = "<h2>Comment Deleted!</h2>The comment has been deleted."; // New for 0.4.8.1
        $lang_string['success_ban1'] = "<h2>IP YASAKLANDI ! ";
        $lang_string['success_ban2'] = "</h2>Bu IP Numarasýný listeden çýkarmak için Kelime/IP Yasakla bölümünü açabilirsiniz."; // New for 0.4.8.1
        $lang_string['form_error'] = "Ýsim,Yorum ve Anti-Spam bölümlerini doldurun.";
        $lang_string['error_noip'] = "No IP Provided for Blacklist Request.";

        $lang_string[ 'error_comments_disabled' ] = '<h2>Error!</h2>Hey! Comments are disabled on this blog. Are you a spambot?'; // New 0.5.0
        $lang_string[ 'error_no_match' ] = "<h2>Error!</h2>Your IP address doesn\'t match posted IP address. Are you a spambot?"; // New 0.5.0
        $lang_string[ 'error_fields_missing' ] = '<h2>Error!</h2>Missing the following fields: '; // New 0.5.0
        $lang_string[ 'error_spambot' ] = '<h2>Error!</h2>Capcha data is missing. Are you a spambot?'; // New 0.5.0
        $lang_string[ 'error_capcha' ] = '<h2>Error!</h2>The capcha you entered is incorrect.'; // New 0.5.0
        $lang_string[ 'error_bad_data' ] = '<h2>Error!</h2>Post data is not valid. Are you a hacker?'; // New 0.5.0
        $lang_string[ 'error_entry_missing' ] = '<h2>Error!</h2>You are trying to comment on an entry that doesn\'t exist'; // New 0.5.0
        $lang_string[ 'error_empty_text' ] = '<h2>Error!</h2>You didn\'t enter any comments or your name.'; // New 0.5.0
        break;

      case 'delete':
        $lang_string['title'] = "Yazý Sil";
        $lang_string['instructions'] = "Aþaðýda Görünen Yazý Silinsin mi?. Silmek için Evet Ýptal etmek için Hayýr ý týklayýn";
        $lang_string['ok_btn'] = "&nbsp;Evet&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Hayýr&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Yazý silinemedi.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Yazý Silindi!</h2>Yazý Baþarý Ýle Silindi."; // New for 0.4.8.1
        break;

      case 'delete_static':
        $lang_string['title'] = "Sabit Sayfa Silme";
        $lang_string['instructions'] = "Aþaðýda Görünen Sabit Sayfa Silinsin mi?. Silmek için Evet Ýptal etmek için Hayýr ý týklayýn.";
        $lang_string['ok_btn'] = "&nbsp;Evet&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Hayýr&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Sabit Sayfa silinemedi.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Sabit Sayfa Silindi!</h2>Sabit Sayfa Baþarý Ýle Silindi."; // New for 0.4.8.1
        break;

      case 'image_list':
        $lang_string['title'] = "Resim Listesi";
	$lang_string['instructions'] = "Resimleri görüntülemek için linklere týklayýn.<br /><br />Girdinize bir resim eklemek için:<br />1) Linke Control ile birlikte týklayýn ve 'Copy Link to Clipboard'ý seçin.<br />2) Girdi ekleme sayfasýna geri dönün.<br />3) 'img' butonuna týklayýn ve kopyaladýðýnýz adresi buraya yapýþtýrýn.";
 break;

      case 'info':
        $lang_string['title'] = "Meta-Data Bilgisi";
        $lang_string['instructions'] = "Aþaðýdaki bilgi arama motorlarýnýn sayfalarýnýza daha kolay ulaþabilmesi için &quot;meta-data&quot; olarak kullanýlacak. Ayrýca ayný bilgi RSS beslemelerinde de kullanýlabilir.";
        $lang_string['info_keywords'] = "Anahtar Kelimeler: (Anahtar kelimeleri birbirinden virgül ile ayýrabilirsiniz.)";
        $lang_string['info_description'] = "Açýklama: (Siteniz ile ilgili öze bir açýklama giriniz.)";
        $lang_string['info_copyright'] = "Haklar: (Kopyalama haklarý ile ilgili bilgileri giriniz, boþ býrakabilirsiniz.)";
        $lang_string['tracking_code'] = "External Tracking Code: (HTML code that needs to be run on the main page (in the header tags for safety) only for every user that comes to the page i.e. Google Analytics)";
        $lang_string['submit_btn'] = "&nbsp;Gönder&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Meta-Data Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
        $lang_string['form_error'] = "Please complete the Title and Author fields.";
        break;

      case 'index':
        // Index
        break;

      case 'static':
        // Index
        break;

      case 'rating':
        $lang_string['error'] = "<h2>Hoyt...!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Vote Saved!</h2>Your rating has been successfully saved."; // New for 0.4.8.1
        break;

      case 'login':
        $lang_string['upgrade'] = "<h2>Upgrade</h2>"; // New 0.3.8
        $lang_string['upgrade_count'] = "%n comment files need to be upgraded:"; // New 0.3.8
        $lang_string['upgrade_url'] = "Upgrade Comments"; // New 0.3.8
        $lang_string['title'] = "GIRIS";
        $lang_string['instructions'] = "Kullanýcý Adý ve Þifrenizi Girip Giriþ Butonuna Basýn";
        $lang_string['username'] = "Kullanýcý Adý:";
        $lang_string['password'] = "Þifre";
        $lang_string['submit_btn'] = "&nbsp;Giriþ&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Baþarýlý!</h2>Giriþ Yaptýn. Mutlu Bloglar!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Hoyt...!</h2>Giris Yapýlmadý. Lütfen Kullanýcý Adý ve Þifreniz Girerek Tekrar Deneyin.<p />";
        $lang_string['inactive_account'] = "<h2>Hoyt...!</h2>Giris Yapýlmadý. Üyeliðin Aktif Deðil Yönetici ile irtibata geçin.<p />";
        $lang_string['form_error'] = "Lütfen Kullanýcý Adý Ve Þifre Bölümlerini Doldurduðunuzdan Emin olun.";
        break;

      case 'logout':
        $lang_string['title'] = "CIKIS";
        $lang_string['error'] = "<h2>Hoþçakal!</h2>You are now logged out. (You weren't logged in anyway!)<p />";
        $lang_string['error_no_cookie'] = "<h2>Hoþçakal!</h2>You are now logged out. (No cookie was found. You weren't logged in anyway!)<p />"; // New 0.5.0
        $lang_string['success'] = "<h2>Hoþçakal!</h2>Cýkýþ Tamamlandý.<p />(5 Saniye Ýçinde Ana Sayfaya Yönlendileceksin.)<p />";
        break;

      case 'forms':
        $lang_string['title'] = "";
        $lang_string['instructions'] = "";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server Raporu:<br />";
        break;

      case 'set_login':
        $lang_string['title'] = "Change Username &amp; Password";
        $lang_string['instructions'] = "Aþaðýdaki forma kullanmak istediðiniz kullanýcý adý ve parolasýný girin.";
        $lang_string['username'] = "Kullanýcý Adý:";
        $lang_string['password'] = "Þifre:";
        $lang_string['submit_btn'] = "&nbsp;Gönder&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Baþarýlý!</h2>YYeni kullanýcý adýnýz ve parolanýz kaydedildi. Mutlu bloglar!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Hoyt...!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server Raporu:<br />";
        $lang_string['form_error'] = "Lütfen kullanýcý adý ve parola alanlarýný doldurun.";
        $lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
          and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
          exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
          to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
        break;

      case 'install00':
        $lang_string['title'] = "Hoþgeldiniz";
        $lang_string['instructions'] = "Simple PHP Blog'u seçtiðiniz için telekkürler!";
        $lang_string['blog_choose_language'] = "Disan Secin";
        $lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
        break;

      case 'install01':
        $lang_string['title'] = "Hoþgeldiniz";
        $lang_string['instructions'] = "
        Simple PHP Blog'u seçtiðiniz için teþekkürler!<br /><br />Simple PHP Blog, hafif bir blog sistemidir. PHP 4.1 ya da üstü, ve sunucunun blog'a ait bölümüne yazma hakký çalýþmasý için yeterlidir. Tüm bilgi düz metin dosyalarýnda saklanýr, dolayýsýyla veritabaný gerektirmez.<br /><br />
        Baþlamak içib simple PHP Blog bilgilerinizin saklanmasý için kullanýlacak ('config', 'content', ve 'images') dizinlerini yaratmak zorunda.<br /><br />
        <b>Kuruluma baþlamak için aþaðýdaki linke týklayýnýz:</b>";
        $lang_string['begin'] = "[ Kuruluma Baþla ]";
        break;

      case 'install02':
      $lang_string['title'] = "Ayarlar";
      $lang_string['instructions'] = "'config', 'content', ve 'images' dizinleri yaratýlýyor:";
      $lang_string['folder_exists'] = "TAMAM! Zaten dizinler mevcut. Herhangi bir deðiþiklik yapýlmadý...";
      $lang_string['folder_failed'] = "Hoyt! Dizin yaratýlamadý";
      $lang_string['folder_success'] = "Tamamdýr! Dizin yaratýldý...";
// Help
$lang_string['help'] = "
<h2>Hoyt!</h2>
Dizin ya da dizinler yaratýlamýyor! Sebepler þunlar olabilir:<br>
<i>1) <b>Ýzinler</b>, <b>Okuma / Yazma</b>ya izin vermiyor.</i><br>
<i>2) Tüm dosya ve dizinlerin kullanýcý ID'leri uygun olmalý.</i><p />

Aþaðýdaki adýmlarý uygulayarak yeniden deneyin:<p />
1) Dizinleri elle yaratýn: <b>config</b>, <b>content</b>, ve <b>images</b>.<p />
2) Dizinlere <b>Yazma Hakký</b> verin. Eðer FTP istemcisi ile baðlý iseniz, Owner, User, ve World'ün dizinler üzerinde <b>okuma</b> ve <b>yazma</b> haklarý olmalýdýr. <i>(Bunlarý deðþtirmke için sistem yöneticisi ile baðlantýya geçmeniz de gerekebilir...)</i><p />
3) Tüm dosya ve dizinlerin kullanýcýsýnýn ayný olduðuna emin olun. <i>(bunun için de sistem yöneticisi ile temasa geçmeniz gerekebilir...)</i>";
$lang_string['try_again'] = "[ Yeniden Dene ]";
// Success
$lang_string['success'] = "<h2>Harika!</h2>Dizinler baþarýyla yaratýldý :)<p /><b>Devam etmek için týklayýn:</b>";
$lang_string['continue'] = "[ Devam Et ]";
break;

case 'install03':
$lang_string['supported'] = "<b>Your web server supports the following encryption schemes:</b>";
$lang_string['standard'] = "Standard DES Encryption: ";
$lang_string['extended'] = "Extended DES Encryption: ";
$lang_string['MD5'] = "MD5 Encryption: ";
$lang_string['blowfish'] = "Blowfish Encryption: ";
$lang_string['enabled'] = "enabled";
$lang_string['disabled'] = "disabled";
$lang_string['using_standard'] = "<b>Using Standard DES Encryption...</b>";
$lang_string['using_extended'] = "<b>Using Extended DES Encryption...</b>";
$lang_string['using_MD5'] = "<b style=\"color: green;\">Using MD5 Encryption...</b>";
$lang_string['using_blowfish'] = "<b style=\"color: green;\">Using Blowfish Encryption...</b>";
$lang_string['using_unknown'] = "<b>Using Unknown Encryption...</b>";
$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
$lang_string['title'] = "Kullanýcý adý &amp; Parola";
$lang_string['instructions'] = "Bir kullanýcý adý ve parolasý yaratmak için aþaðýdaki formu kullanýn.";
$lang_string['username'] = "Kullanýcý adý:";
$lang_string['password'] = "Parola:";
$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
// Success
$lang_string['success'] = "<h2>Tebrikler!</h2>Log-in oldunuz. Ayarlar sayfasýna girmek ve blog'unuz ile ilgili ilk ayarlamalarý yapmak için aþaðýdaki linke týklayýn!<p />";
$lang_string['btn_setup'] = "[ Ayarlar ]";
       
// Wrong Password
$lang_string['wrong_password'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server þöyle demiþ:<br />";
$lang_string['form_error'] = "Lütfen kullanýcý adý ve parola alanlarýný doldurun.";
break;

      case 'install04':
        $lang_string['title'] = "Password dosyasý Oluþturma";
        $lang_string['instructions'] = "Þimdi Küçük Bir 3 Kaðýt Yapacaðýz:<br />
        <ol>
        <li>Herhangi bit Text Editor açýn. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
        <li>Yeni bir belge oluþturun.</li>
        <li>Aþaðýdaki Kodu kopyalayýp açtýðýnýz belgeye yapýþtýrýn. </li>
        <li>belgeyi <b>password.php</b> olarak kaydedin <i>(Be sure to save it in <b>text</b> or <b>plain text</b> format.)</i></li>
        <li>Kullandýðýnýz FTP programýnýzý açýn.</li>
        <li>Yeni oluþturduðunuz <b>password.php</b> dosyasýný <b>config</b> Klasörünün içine yükleyin.</li>
        <li>Harddisk'inizde <b>password.php</b> dosyasýný silin</li>
        </ol>
        ";
        $lang_string['information'] = "<i>Note: If you want to reset your username and password (probably because you forgot it), delete the <b>password.php</b> file in the <b>config</b> folder on your web site. The next time you visit your site, it will walk you through this installation process again...</i>";
        $lang_string['code'] = "<b>password.php</b> de kullanacaðýnýz Kod:";
        $lang_string['continue'] = "[ Devam ]";
        break;

      case 'install05':
      case 'install06':
        $lang_string['title'] = "GIRIS";
        $lang_string['instructions'] = "Kullanýcý Adý ve Þifrenizi Girip Giriþ Butonuna Basýn";
        $lang_string['username'] = "Kullanýcý Adý:";
        $lang_string['password'] = "Þifre";
        $lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Tebrikler!</h2>Þu anda Giriþ Yaptýn.<p />
        Click below to visit the <b>Ayarlar</b> linkini týklayarak yeni Blog Sayfanýzý Kiþiselleþtirebilirsiniz.<p />
        <i>Note: Now that you've completed the installation process, it is recommended that you delete the <b>installXX.php</b> files from your web site. (i.e. install00.php through install06.php)</i><p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Hoyt...!</h2>Giriþ Yapýlmadý. Lütfen Kullanýcý Adý Ve Þifrenizin doðru olduðundan emin olun ve tekrar deneyin.<p />";
        $lang_string['form_error'] = "Please complete the Username and Password fields.";
        // Success
        $lang_string['btn_setup'] = "[ Ayarlar ]";
        $lang_string['btn_try_again'] = "[ Tekrar Dene ]";
        break;

      case 'setup':
        $lang_string['title'] = "Ayarlar";
        $lang_string['instructions'] = "Aþaðýdaki form sayesinde blog'unuzun adýný ve kiþisel bilgilerinizi deðiþtirebilirsiniz:";
        $lang_string['blog_title'] = "Blog Adý:";
        $lang_string['blog_header'] = "Baþlýk Graphic URL: images/blogheader.jpg (Boþ býrakýrsanýz geçerli tema grafiði kullanýlýr).";
        $lang_string['blog_author'] = "Sahibi:";
        $lang_string['blog_email'] = "Email: (Ýrtibat bölümünün düzgün çalýþmasý için gecerli bir e-mail adresi girin)"; // Updated 0.4.7
        $lang_string['blog_avatar'] = "Avatar URL: images/avatar.jpg (Boþ Býrakabilirsiniz)."; // <-- New 0.4.7
        $lang_string['blog_footer'] = "Son ek:";
        $lang_string['blog_choose_language'] = "Lisan Secin:";
        $lang_string['blog_enable_comments'] = "Kullanýcýlar Yorum Girebilir"; // <-- New 0.3.6
        $lang_string['blog_comments_popup'] = "Yorumlarý Pop-up pencerede aç"; // <-- New 0.3.6
        $lang_string['blog_enable_start_category'] = "Hangi Kategorideki Yazýlarýn Açýlýþ Sayfada görüntülenmesini istiyorsunuz: "; // Now for 0.5.1
        $lang_string['blog_search_top'] = "Aramayý Yazýlarýn Üstünde Göster "; // New for 0.5.0
        $lang_string['blog_enable_static_block'] = "Yazýlarýn Üst Kýsmýsmýnda Blok Kullan: "; // New for 0.5.0
        $lang_string['static_block_border'] = 'Kenarlýk Kullan'; // New for 0.5.0
        $lang_string['static_block_noborder'] = 'Kenarlýk Kullanma'; // New for 0.5.0
        $lang_string['blog_enable_voting'] = "Yazýlarda Oylama Yapýlsýn";
        $lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
        $lang_string['blog_enable_calendar'] = "Takvimi Göster"; // New for 0.4.6
        $lang_string['blog_enable_archives'] = "Arþiv Blok'unu Göster"; // New for 0.4.8
        $lang_string['blog_enable_counter'] = "Site Kontür'ü Yan Menude Göster"; // New for 0.4.8
        $lang_string['blog_counter_hours'] = "Number of hours to delay before hits are counted again (based on specific ip address):"; // New for 0.4.8
        $lang_string['blog_enable_login'] = "Giriþ Baðlantýsý Görünsün (Lütfen Önce  \"login.php\" Sýk Kullanýlanlara Ekleyin...)"; // New for 0.4.8
        $lang_string['blog_enable_title'] = "Enable Plain Text Title Block (Clear checkbox if the title is in the header graphic)"; // New for 0.4.6
        $lang_string['blog_enable_permalink'] = "Blog Yazýlarýnda Permalink Kullanýlsýn"; // New for 0.4.6
        $lang_string['blog_enable_capcha'] = "Anti-Spam Kullanýlsýn"; // New for 0.4.8
        $lang_string['blog_footer_counter'] = "Site Kontür'ü Alt Bölümde Göster"; // New for 0.4.8
        $lang_string['blog_enable_capcha_image'] = "Anti-Spam Resmi (Resim ve Yazý yada Sadece Anti-Spam Yazýsý)"; // New for 0.4.8
        $lang_string['blog_enable_stats'] = "Ýstatistik Sayfasý Görünsün "; // New for 0.4.7
        $lang_string['blog_enable_lastcomments'] = " En Yeni Yorumlar Listelensin"; // New for 0.4.7
        $lang_string['blog_enable_lastentries'] = "En Yeni Yazýlar Listelensin"; // New for 0.4.7
        $lang_string['blog_email_notification'] = "Yeni yorum girildiðinde e-posta gönder"; // <-- New 0.3.7
        $lang_string['blog_send_pings'] = "Weblog &quot;pings&quot; gönder"; // <-- New 0.3.7
        $lang_string['blog_ping_urls'] = "Pinglenecek servisin tam URL'ini girin (örneðin http://rpc.weblogs.com/RPC2 gibi).<br />Virgüller ile ayýrarak birden fazla servis girebilirsiniz."; // <-- New 0.3.7
        $lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
        blog know that you are linking to them by sending them a trackback ping. See who is linking to
        your blog by receiving trackback pings.<br />
        You can either enter the URIs to ping manually, or try to do it automatically through
        Auto-Discovery.";
        $lang_string['blog_trackback_enabled'] = "Blog'da Trackback Kullan";
        $lang_string['blog_trackback_auto_discovery'] = "Auto-Discovery Kullan (when submitting a post containing URLs)";
        $lang_string['blog_max_entries'] = "Gösterilecek En Fazla Yazý sayýsý:"; // <-- New 0.3.6
        $lang_string['blog_comment_tags'] = "Yorumlarda 'tag' kullanýmý mümkün:"; // <-- New 0.3.6
        $lang_string['blog_gzip_about'] = "
         PHP 4.0.4'ten beri, PHP disk alanýndan kazanmak için (.gz) sýkýþtýrýlmýþ dosyalarý okuyup yazabiliyor.
         Ayrýca tarayýcýya gönderilen dosyalarý bant geniþliðini iyi kullanmak için transparan olarak sýkýþtýrabiliyor. 
          <br />
Öntanýmlý olarak Zlib desteði PHP içinde etkin olmuyor. Eðer kutucuklar seçilmemiþ ise
PHP kurulumunuz Zlib desteklemiyor demektir."; // <-- New 0.3.7
$lang_string['blog_enable_gzip_txt'] = "Veri dosyalarý için GZIP sýkýþtýrmasýný etkin kýl"; // <-- New 0.3.7
$lang_string['blog_enable_gzip_output'] = "HTTP çýktýsý için GZIP sýkýþtýrmasýný etkin kýl"; // <-- New 0.3.7
$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
        
// Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Preferences Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
$lang_string['form_error'] = "Lütfen Sahibi ve Blog adý alanlarýný doldurun.";
$lang_string['label_entry_order'] = "Yazý Gösterimi:";
$lang_string['select_new_to_old'] = "En yeni en önce";
$lang_string['select_old_to_new'] = "En eski en önce";
$lang_string['label_comment_order'] = "Yorum Gösterimi:";
$lang_string['cal_sunday'] = "Pazar"; // New for 0.4.6
$lang_string['cal_monday'] = "Pazartesi"; // New for 0.4.6
        $lang_string['label_calendar_start'] = "Takvimde Haftanýn Baþlangýç Günü:";
        $lang_string['title_sidebar'] = "Yan Menu"; // New in 0.4.7
        $lang_string['title_comments'] = "Yorumlar"; // New in 0.4.7
        $lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
        $lang_string['title_compression'] = "Sýkýþtýrma"; // New in 0.4.7
        $lang_string['title_entries'] = "Yazýlar"; // New in 0.4.7
        $lang_string['title_general'] = "Genel"; // New in 0.4.7
        $lang_string['title_language'] = "Lisan"; // New in 0.4.7
        $lang_string['blog_comment_days_expiry'] = "Comments Allowed For How Many Days? (0 means no expiry)"; // New in 0.4.8
        $lang_string['blog_comments_moderation'] = "Require comment entries to be approved by logged in user before public
          (always visible to logged in user)"; // New in 0.5.0
        $lang_string['comment_moderation'] = "Moderation Options"; // New in 0.5.0
        break;
      case 'comment_moderation':
        $lang_string['title'] = "Onay Bekleyen Yorumlar";
        $lang_string['instructions'] = "Buradan Kullanýcýlarýn girdiði yorumlarý yönetebilirsiniz. Bloðunuzda yayýnlanmasýný istediðiniz yorumu Onaylayabilirsiniz. yapýlan yorumun uygunsuz olduðunu düþünürseniz yorumu silebilirsiniz.";
        $lang_string['header'] = "Moderation Listing";
        $lang_string['enteredby'] = "Yazan: ";
        $lang_string['entrydate'] = "Yazý Tarihi: ";
        $lang_string['blogentrytitle'] = "Blog Yazý Baþlýðý: ";
        $lang_string['enteredcontent'] = "Yorum: ";
        $lang_string['totalunmodded'] = " bir tane yorum onay bekliyor.";
        $lang_string['mod_approve'] = "[Onayla] ";
        $lang_string['mod_delete'] = "[Sil]";
        break;
      case 'moderation':
        $lang_string['title'] = "Yasaklama Ayarlarý";
        $lang_string['instructions'] = "Yasaklama ayarlarýný aþaðýdan düzenleyebilirsiniz.";
        $lang_string['submit_btn'] = "&nbsp;Ayarlarý Kaydet&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Preferences Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
        $lang_string['banned_address_list_title'] = "<h2>Yasaklý IP Numaralarý</h2>";
        $lang_string['banned_address_list'] = "Aþaðýdaki listeye yasaklamak istediðiniz IP numarasýný girebirsiniz. dilerseniz daha önce yasakladýðýnýz IP numarasýný silebilirsiniz.";
        $lang_string['banned_word_list_title'] = "<h2>Yasaklý Kelimeler</h2>";
        $lang_string['banned_word_list'] = "Buradan yorumlarda kullanýlmasýný istemediðiniz kelimeleri düzenleyebilirsiniz (!'^+%&/())=)";
        break;
      case 'trackbacks':
        // Trackbacks
        $lang_string['title'] = "Trackback";
        $lang_string['header'] = "Bu Yazý Ýçin Trackback URL'si:";
        $lang_string['delete_btn'] = "Sil";
        // Error Response
        $lang_string['error_add'] = "Error storing trackback data.";
        $lang_string['error_delete'] = "<h2>Hoyt...!</h2>Trackback not deleted. I ran into a problem while deleting the trackback.<br /><br />Server Raporu:<br />";
        $lang_string['success_delete'] = "<h2>Trackback Deleted!</h2>The trackback link has been deleted."; // New for 0.4.8.1
        break;

      case 'options':
        $lang_string['title'] = "Tarih & Saat Ayarlarý";
        $lang_string['instructions'] = "Aþaðýdaki formu kullanarak blog girdilerinizdeki tarih ve saat bilgilerinin gösterim formatýný deðiþtirebilirsiniz. 12 ya da 24 saat görünümlerinden birisini seçebilirsiniz. <b>Önizleme</b> ile ayarlarýnýzýn nasýl göründüðünü görme þansýnýz da var.";
        // Long Date
        $lang_string['ldate_title'] = "Uzun Tarih Formatý:";
        $lang_string['weekday'] = "Günü Ýsmi";
        $lang_string['month'] = "Ay";
        $lang_string['day'] = "Gün";
        $lang_string['year'] = "Yýl";
        $lang_string['none'] = "Hiçbiri";
        // Short Date
        $lang_string['sdate_title'] = "Kýsa Tarih Formatý:";
        $lang_string['s_month'] = "Ay";
        $lang_string['s_mon'] = "Gün Adý";
        $lang_string['s_day'] = "Gün";
        $lang_string['s_year'] = "Yýl";
        $lang_string['zero_day'] = "Gün önünde 0 eki";
        $lang_string['show_century'] = "YüzYýlý Göster";
        // Time
        $lang_string['time_title'] = "Saat Formatý:";
        $lang_string['12hour'] = "12-Saat Sistemi";
        $lang_string['24hour'] = "24-Saat Sistemi";
        $lang_string['before_noon'] = "Öðleden Önce";
        $lang_string['after_noon'] = "Öðleden Sonra";
        // Date
        $lang_string['date_title'] = "Tarih Gösterme Formatý:";
        $lang_string['long_date'] = "Uzun Tarih";
        $lang_string['short_date'] = "Kýsa Tarih";
        $lang_string['time'] = "Saat";
        // Menu
        $lang_string['menu_title'] = "Menü Tarihi Gösterim Formatý:";
        $lang_string['long_date'] = "Uzun Tarih";
        $lang_string['short_date'] = "Kýsa Tarih";
        // Used in multiple places
        $lang_string['zero_day'] = "Gün önünde 0 eki";
        $lang_string['zero_month'] = "Ay önünde 0 eki";
        $lang_string['zero_hour'] = "Saat önünde 0 eki";
        $lang_string['separator'] = "Ayýrýcý:";
        $lang_string['preview'] = "Önizleme:";
        $lang_string['server_offset'] = "Sunucu Offset:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Options Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
        break;

      case 'themes':
        $lang_string['title'] = "Görünümler";
        $lang_string['instructions'] = "Aþaðýdan Dilediðiniz görünümü seçebilirisiniz.";
        // Themes
        $lang_string['choose_theme'] = "Görünümler:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Görünüm Seçildi!</h2>Bilgileriniz baþarý ile kaydedildi."; // New for 0.4.8.1
        break;

      case 'upload_img':
        $lang_string['title'] = "Resim Yükleme";
        $lang_string['instructions'] = "Yüklemek istediðiniz dosyalarý seçtikten sonra yükle butonuna basýn .";
        $lang_string['select_file'] = "Resim Seçin:";
        $lang_string['upload_btn'] = "Yükle";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Resim yüklenemedi!<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Resmim Yüklendi!</h2>Resmim baþarý ile Yüklendi."; // New for 0.4.8.1
        break;

      case 'search':
        $lang_string['title'] = "Arama Sonuçlarý";
        $lang_string['instructions'] = " <b>%string</b> için Arama Sonuçlarý:";
        $lang_string['not_found'] = "Sonuç Bulunamadý";
        break;

      case 'contact':
        $lang_string['contact_capcha'] = "Anti-Spam: Enter "; // 0.4.2
        $lang_string['title'] = "Ýletisim Formu";
        $lang_string['instructions'] = "Formu doldurun:";
        $lang_string['form_error'] = "Lütfen ilgili bölümleri doldurunuz.";
        $lang_string['name'] = "Isim:";
        $lang_string['email'] = "Email:";
        $lang_string['subject'] = "Konu:";
        $lang_string['comment'] = "Yorum & Mesaj:";
        $lang_string['submit_btn'] = "&nbsp;Gönder&nbsp;";
        $lang_string['success'] = "<h2>Baþarýlý!</h2>Mesajýnýz Baþarý ile gönderildi.<p />";
        $lang_string['failure'] = "<h2>Error!</h2>Your message has not been sent. Most likely the Anti Spam was not entered properly.<p />";
        $lang_string['contactsent'] = "Contact sent through: ";  // New for 0.4.6
        $lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6
        $lang_string['useragent'] = "User Agent:";  // New for 0.4.6
        $lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
        break;

      case 'stats':
        $lang_string["title"] = "Ýstatistik";
        $lang_string["general"] = "Genel";
        $lang_string["entry_info"] = "<b>%s</b> yazý yazýldý <b>%s</b> karakter kaydedildi. - Boyut: <b>%s</b> Byte";
        $lang_string["comment_info"] = "<b>%s</b> yorum yapýldý <b>%s</b> karakter kaydedildi - Boyut: <b>%s</b> Byte";
        $lang_string["trackback_info"] = "<b>%s</b> Trackback Kullanýldý. - Boyut: <b>%s</b> Byte ";
        $lang_string["static_info"] = "<b>%s</b> Sabit Sayfa yazýldý <b>%s</b> karakter kaydedildi. - Boyut: <b>%s</b> Byte";
        $lang_string["most_viewed_entries"] = "En Çok Okunan 10 Yazý";
        $lang_string["most_commented_entries"] = "En Çok Yorumlanan 10 Yazý";
        $lang_string["most_trackbacked_entries"] = "En Çok Trackback 10 Yazý ";
        $lang_string['vote_info'] = "<b>%s</b> Oy Kullanýldý. - Boyut: <b>%s</b> Byte"; // 0.4.1
        $lang_string["most_voted_entries"] = "En Çok Oylanan 10 Yazý"; // 0.4.1
        $lang_string["most_rated_entries"] = "En Çok Oy Alan 10 Yazý"; // 0.4.1
        break;

      case 'errorpage-nocookies':  // New for 0.4.6
        $lang_string["title"] = 'HTTP HATA 403.8 - Sayfa/Görev Yetki Hatasý';
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

      case 'emoticons':  // New for 0.4.7
        $lang_string['title'] = "Yönetici Ýfadeleri";
        $lang_string['instructions'] = "
          Check the emoticons you want to use. Write in the box the Tags you want
          to be replaced by the image. Multiple tags may be used, just separated them
          by spaces.<br /><br />

          For instance:<br />
          :) :-) :SMILE: :HAPPY:<br /><br />

          <i>(It is highly recommended that you make the Tags longer than 2 characters,
          otherwise unexpected substitutions may occur.)</i>";
        $lang_string["upload_instructions"] = 'Yeni Ýfade Yükle:';
        $lang_string["upload_success"] = 'Baþarýlý! Resim Yükleme Baþarýlý!';
        $lang_string["upload_error"] = 'Hata! Resim Yükleme Baþarýsýz.';
        $lang_string["upload_invalid"] = 'Error! Geçersiz Dosya. Resim png, jpg, yada gif olmalý.';
        $lang_string["save_success"] = 'Ýfade Ayarlarý baþarý ile kaydedildi!';
        $lang_string["save_error"] = 'Hata! Emoticon Ayarlarý kaydedilmedi.';
        $lang_string["save_button"] = 'Ýfade Kaydet';
        break;

      case 'archives': // New for 0.4.8
        $lang_string['title'] = "Arþiv";
        $lang_string['showall'] = "Tümünü Göster";
        break;

      case 'manage_users':
        $lang_string['title'] = "Üyeleri Yönet / Düzenle";
        $lang_string['instructions'] = "Bu bölüm yeni üye ekleyebilir ve silebilirsiniz. Düzenle linkini týklayýp düzenleyebilir,ilgili bölümleri iþaretleyip/kaldýrýp yetkileri ayarlayabilirsiniz.";
        $lang_string['fulladminerror'] = "You must be a full administrator to do this!";
        $lang_string['header_user'] = "Üye: ";
        $lang_string['header_property'] = "Özellik";
        $lang_string['header_value'] = "Karþýlýk";
        $lang_string['prop_username'] = "Üye Adý:";
        $lang_string['prop_fullname'] = "Görünen Ýsim:";
        $lang_string['prop_password'] = "Þifre:";
        $lang_string['prop_email'] = "Email:";
        $lang_string['prop_avatar'] = "Avatar URL:";
        $lang_string['prop_state'] = "Aktif?";
        $lang_string['prop_sec_Moderate'] = "Yorumlarý Yönetebilir ";
        $lang_string['prop_sec_Delete'] = "Herhangi bir Yazý Silebilir";
        $lang_string['prop_sec_Edit'] = "Yazýlarý Düzenleyebilir";
        $lang_string['btn_SaveChanges'] = "Deðiþikleri Kaydet";
        $lang_string['btn_CreateUser'] = "Üye Yarat";
        $lang_string['btn_Cancel'] = "Ýptal";  
        $lang_string['grid_header'] = "Üye Listesi";
        $lang_string['grid_login'] = 'Giriþ';
        $lang_string['grid_email'] = 'Email';
        $lang_string['grid_avatar'] = 'Avatar';
        $lang_string['grid_state'] = 'Aktif?';
        $lang_string['btn_modify'] = 'Düzenle';
        $lang_string['btn_delete'] = 'Sil';
        $lang_string['create_user'] = 'Yeni Üye Yarat';
        break;

      default:
        break;
    }
  }
?>
