<?php
$studets =array(
    'fname' =>'Abdur',
    'lname' =>'Rhaim',
    'age' =>25,
    'Degree' =>'B.Sc',
);
print_r($studets);
echo $studets['fname']." ".$studets['lname'];
echo PHP_EOL;
printf("%s %s",$studets['fname'], $studets['lname']);

echo PHP_EOL;


$serialize = serialize($studets);
echo $serialize;

$unserialize = unserialize($serialize);
print_r($unserialize);

//jeson
$jesondata = json_encode($studets);
echo $jesondata;

$newjesondata = json_decode($jesondata,true);
print_r($newjesondata);