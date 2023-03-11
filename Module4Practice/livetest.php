<?php

$string = "Hello! this is Abdur rhaim, from chattogram. I am student Ostad PHP Batch-1";
$longestWord = identifyLongestWord($string);
echo $longestWord;


function identifyLongestWord($str) {
    $words = explode(' ', $str);
    $longestWord = '';
    $maxLength = 0;
    foreach ($words as $word) {
      $length = strlen($word);
      if ($length > $maxLength) {
        $longestWord = $word;
        $maxLength = $length;
      }
    }
    
    return $longestWord;
  }


   
