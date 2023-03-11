<?php


//A class's constructor method that runs automatically when an object is created from the class


class StudentsInformation{
    public $name;
    public $age;
    public function __construct($studentsName, $studentsAge=0){
       
        $this ->name = $studentsName;
        $this ->age  = $studentsAge;
    
    }
    function sayName(){
        if($this->age){
            echo "My Name is {$this->name} and I am {$this ->age} Years old\n";
    }
    else{
        echo "My Name is {$this->name} and I don't know how old is.\n";
    }
    }
        
    } 

    $h1 = new StudentsInformation("Rahim",21);
    $h2 = new StudentsInformation("Karim",25);
    $h3 = new StudentsInformation("Alam");
    $h1 -> sayName();
    $h2 -> sayName();
    $h3 -> sayName();
