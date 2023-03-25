<?php
// $filename = "/home/abdur/Ostad_PHP/PHP-Dev-Practice/Module6Practice/Data/f2.txt";
// $existingData = file_get_contents($filename);
// $fp = fopen($filename, "w");


// fwrite($fp, $existingData);
// fwrite($fp, "Marcury\n");
// fwrite($fp, "Venus\n");
// fwrite($fp, "Earth\n");
// fclose($fp);


$filename = "/home/abdur/Ostad_PHP/PHP-Dev-Practice/Module6Practice/Data/f2.txt";
if(is_writable($filename)){
$existingData = file_get_contents($filename);
$fp = fopen($filename, "a"); //append mode 


//fwrite($fp, $existingData);
fwrite($fp, "Marcury\n");
fwrite($fp, "Venus\n");
fwrite($fp, "Earth\n");
fclose($fp);
}



