 <?php
     /*
      * so what is the meaning of shuffling ua amer
      * to make so thing unorganized ua amer it is used with paper game or poker
      * game
      * one video for one function aha
      * array fill  using array_fill function
      * array sum
      * hint array_rand function returns list of random indexes from
      * given array to the function => so the output will be list of integers
      *
      * */

 $mohamedArray=[
     "1 ",
     "2" ,
     "3" ,
     "4" ,
 ] ;

 //now we need to shuffle this or these items of the array

 shuffle($mohamedArray) ;
 echo "<pre>" ;
 print_r( $mohamedArray) ;
 echo "</pre>" ;

/*
 $newArray=array_fill(4,8,array_fill(-4,5,"the second item of the array")) ;

 echo "<pre>" ;
 print_r( $newArray) ;
 echo "</pre>" ;


 $array=array(35,"mohamed amer",10,20,30,40,20);
echo array_sum($array) ;
*/

/*
$array_one=[35,"great idea,Good talk ",10,20,30,40,20] ;
$list_of_integers=array_rand($array_one,6) ;


echo $array_one[$list_of_integers[2]] ;

echo "<pre>" ;
  print_r($list_of_integers) ;
echo "</pre>" ;

*/



 $array=array(35,"mohamed amer",10,20,10,"solved",20,"mohamed amer");

$array_unique=array_unique($array) ;


echo "<pre>" ;
print_r(array_unique($array)) ;
 echo "</pre>" ;

 echo"that is awesome ua amer problem solved" ;







