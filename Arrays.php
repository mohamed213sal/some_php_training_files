<?php
/*
 * =========Arrays==========
 *    we have three types of the array
 * 1- Associative array
 * 2- indexed array
 * 3- multidimensional array
 *
 *
 * ================Arrays methods ua alaa ====================
 *
 *
 *
 * */


$mohamedArray = array(12.00,"mohamed", "salma", "mostafa", "adel", "amer");//this ordinary array (indexed array)

$mostafaArray = ["mohamed", "salma", "mostafa", "adel", "amer"];//using normal way (indexed array)

$salmaArray = [
    "key1" => "mohamed",
    "key2" => "salma",
    "key3" => "mostafa",
    "key4" => "adel",
    "key5" => "amer"];   //Associative array


if(in_array(12,$mohamedArray,false )){
    echo "Yes" ;
}else{
    echo "No" ;
}

$index= array_search("salma",$mohamedArray,false) ;

echo "  ".$mohamedArray[$index] ;

$bool_variable=array_key_exists("key4",$salmaArray) ;
echo $bool_variable ;

$bool_variable=array_key_exists(0,$mohamedArray) ;
echo $bool_variable ;



