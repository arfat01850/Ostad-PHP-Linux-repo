<?php


class Circle{
    const PI = 3.1417;
         function __construct(public $radius)
    {
        
    }
    function getArea(){
        return self::PI*$this->radius*$this->radius; //self:: here double cloune is static operation
    }
}

$c = new Circle(4);

$area = $c->getArea();
echo $area;