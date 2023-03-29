<?php

class MathHelper {
    public static function square($n){
        return $n*$n;
    }
    public static function cube($n){
        return $n*$n*$n;
    }
}

$squareRoot =  MathHelper::square(4);
$cubeRoot =  MathHelper::cube(4);
echo $squareRoot;
echo "\n";
echo $cubeRoot;

// $mh = new MathHelper();
// $SquareRootof4 = $mh->square(4);
// $cubeRootof4 = $mh->cube(4);
// echo $SquareRootof4;
// echo "\n";
// echo $cubeRootof4;
