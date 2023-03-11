<?php
class Car{
    private $make;
    private $model; 
    private $year;
    function __construct()
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    public function get_make(){
        return $this->make;
        return $this->model;
        return $this->year;
    }
    public function get_model(){
        return $this->make;
        return $this->model;
        return $this->year;
    }
    public function get_year(){
        return $this->make;
        return $this->model;
        return $this->year;
    }


    public function set_make(){}
    public function set_model(){}
    public function set_year(){}


    public function display_info(){

    }
    
}

$obj = new Car();
echo $obj->display_info("rahim"):