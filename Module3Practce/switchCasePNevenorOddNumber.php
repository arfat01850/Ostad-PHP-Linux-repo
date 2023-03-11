<?php

// $n = 12;
// $r = ($n%2==0);

// switch($r){
//     case 0 : 
//         switch($r){
//             case $n>0:
//                 echo "{$n} is an Positive even number";
//                 break; 
//             case $n<0:
//                 echo "{$n} is an Nagative even number";
//         }
//         break;
//     default:
//     switch($r){
//         case $n>0:
//             echo "{$n} is an Positive odd number";
//             break; 
//         case $n<0:
//             echo "{$n} is an Nagative odd number";
//     }

// }

// echo "\n";
// //Readable Code

// switch(true){
//     case (0 == $r && $n>0):
//         echo "{$n} is an Positive even number";
//         break;
//     case (1 == $r && $n>0):
//         echo "{$n} is an Positive odd number"; 
//         break;  
//     case (0 == $r && $n<0):
//         echo "{$n} is an Positive even number";
//         break;
//     case (-1 == $r && $n<0):
//         echo "{$n} is an Positive odd number";
//         break;
// }

echo "\n";
//intersting issue with switch case
// $string = "8Balls";
// switch($string){
//     case (string)"9balls":
//         echo "Nine Balls";
//     break;
//     case (string) 8:
//         echo "8";
//     break;
//     case (string) "8balls":
//         echo "Eight Balls";
//     break;
// }

$AllCity = array('dhaka','dinajpur','ctg');
foreach ($AllCity as $OneByOneCitry){
echo $OneByOneCitry.", ";
}