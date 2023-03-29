<?php
class Ractangle{
    // public $height;
    // public $width;
     function __construct(public $height=10, public $width=4)
    {
        // $this->height = $height;
        // $this->width = $width;
    }
    public function getArea(){
        return $this->height * $this->width;
    }
}
$r =  new Ractangle(10,4);
// $r->height = 20;
// $r->width = 20;
$area = $r->getArea();
echo $area;
