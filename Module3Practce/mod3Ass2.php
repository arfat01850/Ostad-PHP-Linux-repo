<?php

//Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
function evenOdd ($n){
    if($n%2==0){
        echo "{$n} is Even Number";
        return;
    }else{
        echo "{$n} is Odd Number";
    }
} evenOdd(9);
echo PHP_EOL;
// 1+2+3...…….100  Write a loop to calculate the summation of the series
$start = 1;
$end = 100;

$sum = 0;
for ($i = $start; $i <= $end; $i++) {
    $sum += $i;
}

echo "Sum from " . $start . " to " . $end . " = " . $sum;