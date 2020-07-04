<?php
/*
Syntax [1]
foreach($countries as $value ){
	some codes to do ya amer solved potter
}

Syntax[2]
  using Associative array  or Associated array ua amer 




*/
$countries=["Egypt","Saudi Arabia" , "Qatar" , "Bahrain" ," Syria", "Palestine"] ;


foreach ($countries as $mohamed ){
	echo $mohamed . "<br>";
}



//example number two ya amer 
// we are going to use key for the items of our array ua potter 

$countries_one=[
"key_one"   => "Egypt",
"key_two"   => "Saudi Arabia" , 
"key_three" => "Qatar" ,
"key_four"  => "Bahrain" ,
"key_five"  => " Syria", 
"key_six"   => "Palestine"] ;


foreach ($countries_one as $my_key => $my_value) {
	echo $my_key. "<br>";
}



