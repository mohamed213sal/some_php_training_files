<?php
/*
*the syntax used in using constants key world 
*define(Name,Value,Case-insensitivity)
using define function to create the fucken constant variables
constant is the best variable to set your website configurations for the specific and important things in the website ua amer
------------------------------------
note that we have two ways to define const variables
first = CONST VARIABLE_NAME = VALUE ;
second =
using define method ua amer
DEFINE("VARIABLE_NAME",VALUE ,BOOLEAN) ;
*/



const site_status=FALSE ;

if(site_status == true){
    define("fname","mohamed",false);
    echo "<br>" ;
    echo fname ;


   define("mohamed_variable","the content of mohamed variable");
   echo "<br>";
   echo mohamed_variable;
}else{
    print(" our website is closed for maintainance ");
  }


/*
WHAT WE took in this lesson is that 
we learnt how to use the define function ua amer

the basic syntax :
    define("NAME", VALUE , TRUE-FALSE FOR INsensitivity)


important hint the name must be between double quotes ua amer


example:

*/

//example
define("family_name","amer",false) ;
echo family_name ;


