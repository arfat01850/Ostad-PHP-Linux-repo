<?php
// $filename = "/home/abdur/Ostad_PHP/PHP-Dev-Practice/Module6Practice/Data/file.txt";

// $fp = fopen($filename, 'r');
// $line = fgets($fp);  //defult length 1024 byte
// echo $line; // this code prints value when new line doesn't findout.

// $line = fgets($fp);
// echo $line;

// $line = fgets($fp);
// echo $line;

// $line = fgets($fp);
// echo $line;


$filename = "/home/abdur/Ostad_PHP/PHP-Dev-Practice/Module6Practice/Data/f1.txt";
if (is_readable($filename)){
$fp = fopen($filename, 'r');
while ($line = fgets($fp)){
    echo $line;
}

// rewind($fp);
fseek($fp,10);
fseek($fp,-1, SEEK_END);
while ($line = fgets($fp)){
    echo $line."_";
}
fclose($fp);


$data =  file($filename);
echo $data[1];
print_r($data);




echo PHP_EOL;
$data = file_get_contents($filename);
echo $data;
}