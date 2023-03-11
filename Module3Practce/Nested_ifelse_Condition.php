<?php
$condition1 = true;
$condition2 = true;
$condition3 = true;

if($condition1){
    if($condition2){
        if($condition3){
            echo "Hellow world";
        }else{
            echo "No 1";
        }
        }else{
            echo "No 2"; 
    }
    
}else{
    echo "No 2"; 
}



echo "\n";

//Smart and readable 


if($condition1 && $condition2 && $condition3){
    echo "Hellow World";
}elseif($condition1 && $condition2){
    echo "No 1";
}elseif($condition1){
    echo "NO 2";
}else{
    echo "No 3";
}