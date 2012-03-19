<?php

$contents = scandir(".");
foreach ($contents as $dir) {
    if (is_dir($dir) AND $dir[0] != ".") {
        system("php convert.php \"$dir\"");
    }
}

?>
