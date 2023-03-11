<?php

class Shape{
    protected $name;
    protected $area;
    function __construct($name)
    {
        $this ->name =$name;
        $this -> calculateArea();
    }
    public function getArea(){
        echo "This {$this->name} Area is: {$this->area}\n";
    }
    public function calculateArea(){}
}

class Traingle extends Shape{
    private $a, $b, $c;
    public function __construct($a, $b, $c)
    {
        $this ->a = $a;
        $this ->b = $b;
        $this ->c = $c;
        parent::__construct("Traingle");
    }
    function calculateArea()
    {
        $parementer = ($this->a + $this->b + $this->c)/2;
        $this->area = sqrt($parementer*($parementer-$this->a)*($parementer-$this->b)*($parementer-$this->c));
    }
}

class Ractangle extends Shape{
    public function __construct($a, $b)
    {
        $this ->a = $a;
        $this ->b = $b;
        parent::__construct("Ractangle");
    }
    function calculateArea()
    {
        $this-> area = $this->a * $this->b;
    }
}
$t = new Traingle(10,12,8);
$t->getArea();
$r = new Ractangle(4,5);
$r->getArea();

$r1 = new Ractangle(10,5);
$r1->getArea();