<?php
// first Video 
// $students = array ( 
//     'Rahim',
//     'karim',
//     123,
//     'Dhaka'
// );

// $students = [
//     'Rahim',
//     'karim',
//     123,
//     'Dhaka'
// ];
// // echo $students[1];
// $n = count($students);
// for($i=0; $i<$n; $i++){
//     echo $students[$i]."\n";
// }
// echo PHP_EOL;

// $n = count($students);
// for($i=$n-1; $i>0; $i--){
//     echo $students[$i]."\n";
// }


// first Video. array funtion =  array_push(), array_pop(), array_shift(), array_unshift()

//array add


// $foods = [
//     'Vagetables' => 'Potato, Tomato, Sosa, Fulkopi, bada_kopi',
//     'Fruits' => 'Apple, Orange, Banana, Painapel',
//     'Laptop' => 'Dell, Asus, HP, Lenovo',
// ];
//asociative array data add
// $foods ['Laptop'] = $foods ['Laptop'].",Walton";
    // $foods ['Laptop'].=",Walton";

    // echo $foods['Vagetables'];
    //this code doesnot excuite.
    // for($i=0; $i<count($foods); $i++){
    //     echo $foods[$i];
    // }

    // foreach($foods as $keys=>$value){
    //     echo $keys."=".$value."\n";
    // }

// $keys = array_keys($foods);
// print_r($keys);
// $keys = array_values($foods);
// print_r($keys);

    
// $keys = array_keys($foods);
//      for($i=0; $i<count($keys); $i++){
//         $key = $keys[$i];
//         echo $foods[$key];
//         echo PHP_EOL;
//     }


// Multi Dimention array 

// $sample1 = [
//     [1,2,3,4,5,6],
//     [11,22,33,44,55],
//     [111,222,333,444,555,[5,6,7,8]]
// ];
// print_r($sample1);

// echo $sample1[2][5][2];


// array_slice() array function



// $foods = array('Potato', 'Tomato', 'Sosa', 'Fulkopi', 'bada_kopi','Apple', 'Orange', 'Banana', 'Painapel', 'Dell', 'Asus', 'HP', 'Lenovo');


// $someFoods = array_slice($foods,3);
// $someFoods = array_slice($foods,-2,-1);
// $someFoods = array_slice($foods,3,3, true);
// print_r($someFoods);

// $numberData =  array('a'=>12,'b'=>22,'c'=>52,'d'=>17,12=>85,'e'=>15,'f'=>45,);
// // $someData = array_slice($numberData,0);
// $someData = array_slice($numberData,1,-1, true);
// print_r($someData);




// array_splice() array function

// $foods = array('Potato', 'Tomato', 'Sosa', 'Fulkopi', 'bada_kopi','Apple', 'Orange', 'Banana', 'Painapel', 'Dell', 'Asus', 'HP', 'Lenovo');
// $itemsQuantity = count($foods);
// echo   $itemsQuantity;

// $addSomeItems = array('gasor','mola','anarosh');
// $somefoods = array_splice($foods,-13,3,$addSomeItems);
// print_r($somefoods);
// print_r($foods);


//array_marge()

// $numberData =  array('a'=>12,'b'=>22,'c'=>52,'d'=>17,12=>85,'e'=>15,'f'=>45,);
// $r1 = array_slice($numberData,0,2,true);
// $r2 = array_slice($numberData,3,null,true);
// $r3 = array('k'=>100, 'h'=>200);

// // $addNData = array_slice($numberData,2,3,array("k"=>100,"h"=>200));
// $newNdata = $r1+$r3+$r2;
// print_r($numberData);
// print_r($newNdata);
// print_r($r1);
// print_r($r2);
// print_r($r3);


//shorting index in acosiative array  sort(), asort(), arsort()

// //sort
// $foods = array('Potato', 'Tomato', 'Sosa', 'Fulkopi', 'bada_kopi','Apple', 'Orange', 'Banana', 'Painapel', 'Dell', 'Asus', 'HP', 'Lenovo');
// sort($foods);
// print_r($foods);

// sort()  array funtion is case sensetive. we are avoid this Sort_STRING || SORT_FLAG_CASE
// $foods = array('p'=>'Apple','apple','s'=>'Banana','banana');
// sort($foods, SORT_STRING || SORT_FLAG_CASE);
// print_r($foods);

// //asort()
// $foods = array('p'=>'Potato','Tomato','s'=>'Sosa','Fulkopi', 'b'=>'Bada_kopi');
// asort($foods);
// print_r($foods);

//asort()
$numbers = array(100,20,50,75,87,24);
asort($numbers);
print_r($numbers);

// for($i=0; $i<count($numbers); $i++){
//     echo $numbers[$i]."\n";
// }
// echo PHP_EOL;
// echo PHP_EOL;
// foreach($numbers as $number){
//     echo $number."\n";
// }

// arsort()

// $numbers = array(100,20,50,75,87,24);
// asort($numbers);
// print_r($numbers);

// foreach($numbers as $number){
//     echo $number."\n";
// }

// // arsort()
// $numbers = array(100,20,50,75,87,24);
// ksort($numbers);
// print_r($numbers);

// foreach($numbers as $number){
//     echo $number."\n";
// }




// Searching and index asociative array

//lossly type
// $numbers = array(100,20,50,75,87,24);
// if(in_array(400,$numbers)){
//     echo "100 is found";
// } else {
//     echo "100 is not found";
// }

// with datatype
// $numbers = array(100,'20',50,75,87,24);
// if(in_array(50,$numbers, true)){
//     echo "100 is found"."\n";
// } else {
//     echo "100 is not found";
// }

// $offset = array_search(100, $numbers);
// echo $offset;

// $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16);


// function square($n){
//     printf("Square of %d is %d \n",$n,$n*$n);
// }
// function cube($n){
//     printf("Cubeic of %d is %d: \n",$n,$n*$n*$n);
// }
// array_map('cube',$numbers);

// array_walk($numbers, 'square');
// print_r($numbers);

// $studentsName   = array('abdur','rahim','arfat','abdul','karim','azad');

// function filterBya($name){
//     return $name[0]=='a';
// }

// $shortlist = array_filter($studentsName, 'filterBya');
// print_r($shortlist);

//array_reduce 

// $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16);

// function num($oldValue, $newValue){
//     if($newValue%2==0){
//         return  $oldValue + $newValue;
//     }   return $oldValue;
   
// }

// $sumation =  array_reduce($numbers, 'num');
// echo $sumation;


// $numbers = range(20,50);
// $random = mt_rand(0,20);
// echo $numbers[$random]."\n";
// $random = mt_rand(0,20);


// echo $numbers[$random];

//head or tail
// $numbers = range(20,50);
// $random = mt_rand(0,20);
// $random = mt_rand(0,20);

// $luck = $numbers[$random];
// if($luck % 2 == 0){
//     echo "Head";
// } else {
//     echo "Tail";
// }

