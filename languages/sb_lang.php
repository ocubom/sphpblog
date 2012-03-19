<?php

function sb_import_lang($name, $page="") {
  include("$name/strings.php");
  // call old init function here
  
  //sb_language( $page );

  global $lang_string;

  $handle = fopen(ROOT_DIR . "/languages/$name/strings.po", "r");
  $lastid = "";
  if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        //echo $buffer;
      if (preg_match("/msgid \"(.*)\"/", $buffer, $matches)) {
        $lastid = $matches[1];
      }
      if (preg_match("/msgstr \"(.*)\"/", $buffer, $matches)) {
        $lang_string[$lastid] = $matches[1];
      }
    }
    fclose($handle);
  }
}

function _sb($text) {
    global $lang, $lang_string;
    if (!array_key_exists($text, $lang_string) OR empty($lang_string[$text])) {
        trigger_error("Missing translation string in $lang '$text'\n");
        return $text;
    }
    return $lang_string[$text];
}

?>
