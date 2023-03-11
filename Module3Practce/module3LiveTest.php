<?php

// function  allitems(array = (1,2,4,5,8,7)){

// }

function hasPairWithSum( $numbers, $targetSum)
{
$differences = [];
foreach ($numbers as $number) {
if (in_array($targetSum - $number, $differences)) {
return true;
}
$differences[] = $number;
}
return false;
}