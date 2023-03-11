<?php
$n = 10;
if($n==12){
    echo "Tweleve";
}elseif(10==$n){
    echo "Ten";
}else{
    echo "A Number";
}

echo "\n";
$numberInWorl = (12==$n) ?  "Tweleve" : ((10==$n)? "Ten":"A Number");
echo $numberInWorl;
echo "\n";

if($n%2==0){
    echo "Even Number";
}else{
    echo "Odd Number";
}

echo "\n";
$result = ($n%2 ==0)? "Even Number": "Odd Number";
echo $result;
