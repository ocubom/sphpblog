<?php
// convert php format to gettext.pot

function convert2pot($filename) {
    print "Reading $filename\n";

    $keys = array();

    $handle = fopen($filename, "r");
    if ($handle) {
        while (($buffer = fgets($handle, 4096)) !== false) {
            //echo $buffer;
            $matches = null;
            if (preg_match("/\['lang_string'\]\[ *'([a-zA-Z0-9_]+)' *\]/", $buffer, $matches)) {
                $keys[] = $matches[1];
            } elseif (preg_match("/lang_string\[ *'([a-zA-Z0-9_]+)' *\]/", $buffer, $matches)) {
                $keys[] = $matches[1];
            } elseif (preg_match("/lang_string/", $buffer)) {
                print "MISS: $buffer\n";
            }
        }
    fclose($handle);
    }
    return $keys;
}

// file keys in php files
$contents = scandir("..");
$allkeys = array();
foreach ($contents as $filename) {
    if (!is_dir($filename)) {
        $keys = convert2pot("../$filename");
        $allkeys = array_merge($allkeys, $keys);
    }
}
$allkeys = array_unique($allkeys);

// write to .pot
$outfile = "strings.pot";
$whandle = fopen($outfile, "w");

foreach ($allkeys as $key) {
    fwrite($whandle, "msgid \"$key\"\nmsgstr \"\"\n\n");
}

fclose($whandle);

?>
