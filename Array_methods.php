<?php
/*
 * ==============dealing with some array's function ua amer problem solved==========
 * functions [add => (push), (add at the beginning => (unshift) ),
 * pop(delete the last item), ),
 *shift(delete the first item of the array
 * unshift(put some values at the start of the array
 *sort( for sorting all the elements of the array ua amer
 * shuffle (used to ....)
 * asort(for sorting the associative array )
 *arsort(for reverse the sorted array ua amer)
 *
 * */

/*
$matrix = [
    "mohamed",
    "salma",
    "mostafa",
    "adel", "amer",
    "potter",     ];//using normal way (indexed array)

echo "<pre>" ;
print_r( $matrix ) ; //the main array ua amer
echo "</pre>" ;
array_push($matrix,"what","where",22,15,"Again") ;

echo "<pre>" ;
print_r( $matrix ) ; //the second array ua amer
echo "</pre>" ;


array_unshift($matrix,"salma","Again");
echo "<pre>" ;
print_r( $matrix ) ; //the second array ua amer
echo "</pre>" ;



//using pop function


$persons=[
    "first_man",
    "second_man",
    "third_man" ,
    "fourth_man"] ;

function GettingLast(array $variable){
  array_pop($variable) ;
  array_shift($variable);
  return $variable ;
}

$modifiedArray=GettingLast($persons) ;


echo"<pre>" ;
print_r($persons) ;
echo"the modified array is " ."<br>" ;
print_r($modifiedArray);
echo"</pre>";

//what is this bad thing ua amer this is not good for our health or for the attacks



$langs=["arabic","english","turkish","france","almond","gafaar","query","x-man"] ;

$MIX=[20,50,40,"HTML"] ;

sort($MIX,SORT_STRING);

echo "<pre>";
print_r($MIX) ;
echo "</pre>";

rsort($MIX,SORT_STRING);

echo "<pre>";
print_r($MIX) ;
echo "</pre>";



$usingFill = array_fill(4, 5, "mohamed_amer");

echo "<pre>";
print_r($usingFill);
echo "</pre>";

*/
$mohamedAssocative = [
    "1" => "Css",
    "2" => "Java",
    "3" => "Html",
    "4" => "C++",
    "5" => "Python"];

//ksort($mohamedAssocative) ;
krsort($mohamedAssocative,SORT_STRING);
echo "<pre>";
print_r($mohamedAssocative);
echo "</pre>";















