<?php


abstract class Vehicales{
    
    function start(){
        echo   "Start";
    }
    function stop(){
        echo "Stop";
    }
    abstract function honk();
}

class Car extends Vehicales{
    function move(){
        echo "Moving at 110kmh";
    }
    function start(){
        echo   "Car is Starting";
    }
    function honk(){}
    // function stop(){
    //     echo "Stop";
    // }
}
class cycle extends Vehicales{
    function move(){
        echo "Moving at 10kmh";
    }
    function honk(){}
    // function start(){
    //     echo   "Start";
    // }
    // function stop(){
    //     echo "Stop";
    // }
}
class Truck extends Vehicales{
    function move(){
        echo "Moving at 60kmh";
    }
    function honk(){}
    // function start(){
    //     echo   "Start";
    // }
    // function stop(){
    //     echo "Stop";
    // }
}

$C = new Car();
$C->move();
echo "\n";
$C->start();
echo "\n";
$c = new cycle();
$c->move();
echo "\n";
$c->start();

$t = new truck();
$t->move();
echo "\n";
$t->start();