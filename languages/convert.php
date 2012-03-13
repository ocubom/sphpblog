<?php
// convert strings.php format to gettext.po

function convert2po($filename) {
    # add the page name to the start to make it unique
    $rename_tags = array('title', 'instructions', 'error', 'success', 'form_error', 'wrong_password', 'header', 'submit_btn_edit', 'submit_btn_add');
    # just take the first one of these
    $skip_tags = array('ok_btn', 'cancel_btn', 'submit_btn', 'delete_btn', 'username', 'password', 'up', 'down', 'edit', 'delete', 'blog_choose_language', 'btn_setup', 'continue');
    # skip these completely
    $filter_tags = array('title_update', 'title_preview', 'instrutions_update', 'instructions_preview');

    $keyvalues = array();

    $handle = fopen($filename, "r");
    $outfile = dirname($filename) . "/strings.po";
    $whandle = fopen($outfile, "w");
    if ($handle) {
        $section = "";
        while (($buffer = fgets($handle, 4096)) !== false) {
            //echo $buffer;
            $matches = null;
            if (preg_match("/case '([a-zA-Z0-9_]+)'/", $buffer, $matches)) {
                //print "section: " . $matches[1] . "\n";
                $section = $matches[1];
            }
            if (preg_match("/lang_string\['([a-zA-Z0-9_]+)'\] = \"(.*)\"/", $buffer, $matches)) {
                $key = $matches[1];
                  if (in_array($key, $rename_tags)) {
                    $key = $section . "_" . $key;
                  }

                  if (array_key_exists($key, $keyvalues)) {
                    if (!in_array($key, $skip_tags)) {
                      print "Duplicate key $section: $key\n";
                    }
                  } elseif (in_array($key, $filter_tags)) {
                  } else {
                    $keyvalues[$key] = $matches[2];
                    $text = "msgid \"$key\"\nmsgstr \"" . $matches[2] . "\"\n\n";
                    fwrite($whandle, $text);
                  }
            }
        }
    fclose($handle);
    fclose($whandle);
    }
}

convert2po("english/strings.php");

?>
