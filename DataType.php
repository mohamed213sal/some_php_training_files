<?php 
//Data type [1] String Section ua amer 
$var_one="I Love PHP ";

$var_two=100 ;

$var_three=true ;

$var_fourth=false ;  //this is the boolean datatype

$floating_point_numbers=10.5 ; //double numbers in php not AKA also known as 


$var_five=array(
"A" => "The first item of the array ya amer" ,
"B" => "The Second item of the array  ",
"B" => "The Third item of the array  ",
);  //the end of this array

$var_six="Hello World ya amer " ;

$var_six=NULL ;

$var_seventh=new Boo() ;


$var_eighth=fopen('mohamed.txt, text)', 'r') ;






echo gettype($var_one) ;
echo gettype($var_two);

echo var_dump($var_one);

if ($var_two>10){
	print("good... ");
print	gettype($var_two);
print("  ") ;
print gettype($floating_point_numbers);
print("       ");


}else{
  print "bad" ;	
}

echo " $var_six" . "<br/>";
echo var_dump($var_six) . "<br/>" ;  
echo var_dump($var_seventh) . "<br/>" ;
echo var_dump($var_eighth) . "<br/>" ;
echo gettype($var_eighth);





// this is the classes section ua amer ...Good
class Boo{
function Boo(){
	$this->genre ="Adventures";
}
}




/*

the end of this lesson is 

we have to about 8 datatypes ua amer 

[1] interger
[2] double
[3] String
[4] boolean
[5] resource
[6] reference= object
[7] null
[7] array

//this is what we took today in this lesson 

*/