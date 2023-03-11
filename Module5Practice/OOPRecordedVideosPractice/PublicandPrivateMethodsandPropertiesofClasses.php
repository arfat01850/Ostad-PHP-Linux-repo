<?php

class Fund{
    Public  $fund;
    // private $fund;
    function __construct($initialValue=0)
    {
        $this->fund = $initialValue;
    }
    function fundAdd($money){
        $this->fund += $money;
    }
    function funDeduc($money){
        $this->fund -= $money;
    }
    function getTotal(){
        echo "Total Fund is: {$this->fund}\n";
    }
}

$ourFund = new Fund(100);
// $ourFund -> fund = 75; // private method
$ourFund -> getTotal();
$ourFund -> fundAdd(5);
$ourFund -> getTotal();