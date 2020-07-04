 <?php
//lets go to use comparsion operators ua amer

/*
[==] equals
[===] identical of type and data 
[!=] not equal
[!==] not identical of data and type
*/


$var_one=100; //this is integer value 
$var_two=50 ; //this is an integer value  or String values ua amer

echo gettype($var_one) . "<br>" ; 
echo gettype($var_two) . "<br>";

if ($var_one === $var_two) {
	echo "A is equal B";
}else{
	echo "A is not equal B";
}

 ?>