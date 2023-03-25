<?php
$file_name = 'ostad.txt';
$file = fopen($file_name, "r+");

if (!file_exists($file_name)) {
    $file = fopen($file_name, 'w');
    fclose($file);
}

$file_contents = fread($file, filesize($file_name));


fseek($file, 0, SEEK_END);


$date = date('Y-m-d H:i:s');
$new_contents = $file_contents . "\n" . $date;


fwrite($file, $new_contents);


fclose($file);
?>
