<?php


//copy by value
//deep copy
$person = array(
    'fname'=>'Abdur',
    'lname'=>'Rahim'
);
$newperson = &$person; 
$newperson['lname'] = 'arfat'; 

print_r($person);
print_r($newperson);

//'&'copy by rafarance 
//'&' shallow copy

function printData(&$person){
    $person['fname'].= ' Changed';
    print_r($person);
}
printData($person);
print_r($person);