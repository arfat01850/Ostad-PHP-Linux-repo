<?php

class ParentsClass{
    protected $name;
    function __construct($name)
    {
        $this -> name = $name;
        $this -> sayHi();
    }
    function sayHi(){
        
        echo "I am: from {$this -> name}\n";
      
    }
}

class ChildClass extends ParentsClass{
    function sayHi()
    {
        parent::sayHi();
        $this -> name;
        echo "Hello";
    }
}

$ChildClassObj = new ChildClass("Chittagong");