<?php
//let's move to use it ya amer
/*
 * what is the inheritance ? why inheritance ? when to use it ? simple questions need to answers
 *
 *
 * */

class Amer
{
    function AwesomeFunction($variable_one)
    {
        echo $variable_one;
    }
}

class Alaa extends Amer{
    function AwesomeFunction2($variable_one,$variable_two)
    {
        echo $variable_one ."<br>". $variable_two ;
    }
}

class Mohamed extends Alaa{
   function Override_function($var1,$var2){
       $result=$this->AwesomeFunction($var1) ;
       return ;
   }

}













