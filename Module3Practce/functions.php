 <?php 
 function isEven($n){
    if($n%2==0){
        return true;
    }
    return false;
 }

 $x = 13;
 if(isEven($x)){
    echo "{$x} is one Even Number";
 }else{
    echo "{$x} is one Odd Number";
 }

 
$foo = function ($x) {
  return $x*2;
};
$bar = function ($x) use ($foo){
  return $foo($x)+1;
};
echo $bar(5);

function s($str){
  if (strlen($str)==0){
    return "";
  }else{
    return s(substr($str,1)).substr($str, 0,1);

  }
}
echo s("hello");
 
$n = array (1,2,3,4,5);
$i = 0;
do{
  echo $n[$i];
  $i++;
}while($i<count($n));

function fun($x, $y){
  $x = 4;
  $y = 3;
  $z = $x+$y / $y+ $x;
  echo "$z";
}
fun(3,4);