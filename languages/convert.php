<?php
// convert strings.php format to gettext.po

function convert2po($filename) {
    print "Converting $filename\n";
    global $lang_string;
    $lang_string = array();

    include($filename);

    sb_language('');
    $skip_tags = array_keys($lang_string);

    $sections = array('add','add_static','comments','add_block', 'add_link', 'categories', 'colors', 'delete', 'delete_static', 'image_list', 'info', 'rating', 'login', 'logout', 'forms', 'set_login', 'install00', 'install01','install02','install03','install04','install05','install06', 'setup','comment_moderation', 'moderation', 'options', 'upload_img', 'themes', 'search', 'contact', 'errorpage-nocookies', 'trackbacks', 'stats', 'errorpage', 'emoticons', 'manage_users', 'archives');

    # add the page name to the start to make it unique
    $rename_tags = array('title', 'instructions', 'error', 'success', 'form_error', 'wrong_password', 'header', 'submit_btn_edit', 'submit_btn_add', 'error_add', 'error_delete', 'success_delete', 'instructions_update', 'instructions_edit', 'instructions_modify');
    # just take the first one of these
    $skip_tags = array_merge($skip_tags, array('ok_btn', 'cancel_btn', 'submit_btn', 'delete_btn', 'username', 'password', 'up', 'down', 'edit', 'delete', 'blog_choose_language', 'btn_setup', 'continue', 'useragent', 'IPAddress', 'name', 'email', 'comment_text', 'wrote', 'comment', 'zero_day', 'long_date', 'short_date'));
    $skip_tags = array_merge($skip_tags, array('label_subject', 'label_insert', 'btn_bold', 'btn_italic', 'btn_image', 'btn_url', 'btn_readmore', 'view_images', 'label_entry',
 'btn_preview',
 'btn_post',
 'chk_visiblemenu',
 'file_name',
 'insert_styles',
'insert_image',
'insert_url1',
'insert_url2',
'insert_url3',
 'insert_image_optional',
 'insert_image_width',
 'insert_image_height',
 'insert_image_popup',
'insert_image_float',
 'day',
 'month',
 'year',
 'hour',
 'minute',
 'second',
 'clientid',
 'btn_try_again'

));
    # skip these completely
    $filter_tags = array('title_update', 'title_preview', 'instrutions_update', 'instructions_preview');

    $keyvalues = array();

    $outfile = dirname($filename) . "/strings.po";
    $whandle = fopen($outfile, "w");
        foreach ($sections as $section) {
            $lang_string = array();
            $matches = null;
            sb_language($section);
            //special case
            if ($section == 'search') {
                $section = 'search_result';
            }
            $keys  = array_keys($lang_string);
            foreach ($keys as $key) {
                  $newkey = $key;
                  if (in_array($key, $rename_tags)) {
                    $newkey = $section . "_" . $key;
                  }

                  if (array_key_exists($key, $keyvalues)) {
                    if (!in_array($key, $skip_tags)) {
                      print "WARNING: Duplicate key $section: $key\n";
                    }
                  } elseif (in_array($key, $filter_tags)) {
                  } else {
                    $value = str_replace(array("\n", "\r"), " ", $lang_string[$key]);
                    $value = str_replace(array("\'", "\""), "'", $value);
                    $keyvalues[$newkey] = $value;
                    $text = "msgid \"$newkey\"\nmsgstr \"$value\"\n\n";
                    fwrite($whandle, $text);
                  }
            }
        }
    fclose($whandle);
    system("msgfmt \"$outfile\"");
}

$dir = $argv[1];

convert2po("$dir/strings.php");

?>
