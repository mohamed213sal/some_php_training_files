<?php

//write function to print numbers from one to thirty..okey that is easy 

//---------------methods(Functions) section-------------//
function counting(){
$counter=0 ;
for(;;){ //this is very great thing to use for loop in this way ua amer
	if ($counter >30) {
		break ;
	}
	echo $counter . "<br>";
  $counter++ ;
  }


}//the end of the function
function sayHi(){
    return 8 . "can we make multiple variables concatenation" ."<br>";
}
function calculateAge($age){
    return $age*365 ; //hint return must be at the end of the function
    //amer
}
function Recursion($number){
   //this is very simple algorithm ya amer
    $sum=1;
    if($number>1){
        $sum= $number*Recursion($number-1) ;
    }
return $sum ;
}



//=========================recalling section ua amer===========//
        //---------comment section---------------//
/*
 * counting(),
 * sayHello();
 * calculateAge();
 *echo calculateAge(20) ." days" ;
 *$result= Recursion(5);
 * echo $result ;
 *
 *  */




?>