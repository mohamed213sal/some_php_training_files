<?php

/*
 * class and objects how to create class and objects of this class ua amer
 *
 * Apple
 * -Classes => blueprint Design
 * -Objects => iPhones or iPads that China made
 *
 * =================lesson outlines =============
 * how to create some properties and methods
 * how to use objects properties and methods   -> hint we can add new properties to objects
 * how to make inheritance
 * how to use polymorphism in your code
 * how to ..... left for future use
 *
 * */

class CarBluePrint
{
    //creating some variables or properties of this class
    //hint we just initialized the variables not assigning it
    public $color = "red";   //hint var = public keyword here ua amer
    var $length = 20;
    var $weight = 100;
    var $speed = 450;

    function Mohamed()
    {
        echo "what is the Next ";
    }

}

echo "<pre>";
$object_one = new CarBluePrint();


//using the object variables

$object_one->color = "weight  ";
$object_one->length = 200;
$object_one->weight = 300;
$object_one->speed = 220;
$object_one->wheels = 4;
$object_one->colours = "Next ua potter";


//var_dump($object_one);


//============using inheritance ua amer ====================
class mohamedInheritance extends CarBluePrint
{
    var $hair;
    var $skin;
    var $fingers;
    var $eyes;
}

$person_object = new mohamedInheritance();


echo "</pre>";