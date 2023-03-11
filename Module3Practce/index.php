<?php
    // // echo strlen("i love bangladesh Hello world!");
    // // echo ("\n");
    // // echo ("Hello Bangladesh");
    
    // //variable class practice with hasin vhai 
    // define ('PI',3.14159);
    
    
    // // $task = 'Read';
    // // echo $task;
    // // echo "\n";
    // // $task = 'Write';
    // // echo $task;
    // // echo "\n";
    // // echo "Value of PI={PI}";//constant er man curly bracket er bitor show korbe nah 
    // // echo "\n";
    // // echo "Value of PI=".PI; // constant er value eibabe kia jai 
    // // echo "\n";
    // echo constant'PI'; //ei babe o constant er value ber kora jai
    // $constant = "constant";
    // echo "Value of PI= {$constat('PI')}";


    /*
    integer int
    double / float
    boolean 
    null
    array 
    object
    resource 

    */
    // $myName = 'Abdur Rahim';
    // $myAge= 24;
    // var_dump($myName);
    // var_dump($myAge);

    // $myName = 'Abdur Rahim';
    // $myAge= 24;
    // var_dump($myName, $myAge);

    // $result = true;
    // var_dump($result);


    // $name= 'Earth';
    // $uname= strtoupper($name);
    // echo "We live in Our {$uname}\n";
    // printf("we're liveing on %s",$name);
    
    // $fname = "Kairunnes";
    // $lname = "Hema";
    // printf("Her %s name is %s %s",,$fname,$lname);


    // $fname = "Abdur";
    // $lname = "Rahim";
    // echo "His first name is ".$fname." second name is ".$lname.("\n");
    // echo "His first name is {$fname} second name is {$lname}\n";
    // printf("His first name is %s second name is %s",strtoupper($fname),strrev($lname));





    // $name= 'Earth';
    // echo 'We\'re live in Our '.$name;

    // Convertion of Numbering System 
    /*$n = 12;
    $o = 0123;
    $h = 0x1B;
    printf("The number is %d and %d and %d",$n, $o, $h);
    printf("The equvalant number is 12 to binary %b",$n);
    printf("The binary equvalant number  of%d to %b \n",122,122);
    printf("The Hexadecimal equvalant number  of %d to %X \n",122,122);
    */
   
    // variable Sowaping 

   /* $fname = "Abdur ";
    $mname = "Rahim";
    $lname = "Arfat";
    printf('My Name is %3$s %2$s %1$s', $fname, $lname, $mname);
    */
    
    // how to output exect number in point

   /* $n = 45.126;
    printf("%.2f \n",$n);
    $n = 45.1253;
    $m = 2.14523;
    printf("%07.2f \n",$n);
    printf("%07.2f \n",$m);

    */

    // last tricks in printf


   /* $fname = "Abdur";
    $lname = "Rahim";
    $output = sprintf("His name is %s %s",$fname,$lname);
    echo strtoupper($output); */

    //disicion Making (Logic)

    /* 
    $n = 11;
    $m = 12;
    if($n%2 == 0){
        echo "$n is even number";
    }
    else{
        echo "$n in odd number \n";
    }

    if ($n>10){

        echo "$n is Smaller Than 10 \n";
    }
    if ($n==$m){

        echo "$n and $m is Equal \n";
    } 
    else{
        echo "$n and $m is not Equal";
    }
    */
    //Write a program age of teenager. Write a program Usign and
/* 
    $age = 15;
    if($age >=14 && $age<=19){
        echo "He is a teenager.";
    } 
    else{
        echo "He is not a teenager.";
    }
*/

    //Write a program Usign or
/* 
    $food = "Orange";
    if("Apple" == $food || "Salmon" == $food){
        echo " {$food} has vitamins A";
    } 
    elseif("Orange" ==  $food){
        echo "{$food} has vitamins C";
    }
    else{
        echo "We don't Know what is the vetamins do there have {$food}";
    }
*/

    $year=2000;
    if($year%4==0 && $year%100==0 && $year%400==0){
        echo "{$year} is a Leap year";
    }
    else if($year%4==0 && $year%100==0){
        echo "{$year} is not a leap year";
    }
    elseif($year%4==0){
        echo "{$year} is  a leap year";
    }
    else{
        echo "{$year} is not a leap year";
    }

    echo "\n";
    if($year%4==0 && ($year !=0 || $year==0)){
        echo "{$year} is a leap year";
    } else {
        echo "{$year} is not a leap year";
    }


