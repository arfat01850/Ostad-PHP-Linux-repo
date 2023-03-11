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
