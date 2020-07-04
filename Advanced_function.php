<?php
/*=========================this is not advanced very much ua amer ==========
 * writing some advanced functions ya amer */
/*
 * using required parameters and default parameters ua amer default parameters are
 * very useful for not creating an error during calling the function ua amer
 *
 * */
//-----------------------function section----------------
function sayHello($age,$name,$gender="Unknow"){
    echo "Hell ua ". " $name" .",you are "."$age". " and i think you are " . "$gender" ;
}
function getRandTicket(){
    return rand(1,50)  ;
}
function checkAge(){
    $randomAge=getRandTicket() ;
    if ($randomAge >= 18){
        echo"you are accepted and here is your ticket ua man " . $randomAge;
    } else{
        echo"your age is under line " .$randomAge;
    }
}


//-----------calling functions------------------

/*
 * checkAge();
 *
 * */





