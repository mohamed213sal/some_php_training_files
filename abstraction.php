<?php

/*
 * using abstraction concept ua amer
 * -----------------question---------------------------------
 * what is the abstraction ? or what do you mean by abstraction ?
 *   ok=> abstraction is made to make model for some thing that allow other
 *   classes to inherit from . but hint that we cannot take an object from this class
 *   consider it as raw material of a meal -> we may could take this raw materials
 *   and create something great
 *
 * some information about abstract classes
 * -can not be instantiated [cannot create an object from it ]
 * - have properties and methods
 * - can contain abstract methods and methods like normal methods ua amer
 * --------------HINT---------------
 * -------------very important hint abstract functions does not have bodies -------
 * - [we you put abstract method in abstract class you enforce all the child classes
 * to use this function or complete its work[ i mean to write the body of it]  ]
 * */

abstract class Person
{
    //this class have some properties like name ,weight ,
    //hair_length,color and skin,
    var $name;
    var $color;
    var $hair_length;
    var $skin;
    var $weight;

    //creating some methods for this class
    function printing_name($var_name,$var_color,$var_hairLength,$var_skin){
        $this->name =$var_name ;
        $this->color =$var_color ;
        $this->hair_length =$var_hairLength ;
        $this->skin=$var_skin ;
        echo "your name is ". $this->name .", your color is ". $this->color ."
        and your hair is " .$this->hair_length ;
    }

    abstract function sayHello() ;  // it enforces us to use
    // this method (must be declare in the child )

}

//we need to create some other classed to inherit from the abstract class ua amer
class salma extends Person{
    function sayHello()
    {
        echo " /// this is the abstract method came from the parent 
        abstracted class " ;
    }
}


$salmaObject =new salma() ;

$salmaObject->printing_name("mostafa","weight","tall","weight");
$salmaObject->sayHello() ;

/*
 * -------------second video--------------------
 * Rules TO go ON
 * enforce developers To Follow Your Methods and note that the abstract methods
 * do not have bodies but you have to write the complete function inside children
 * of this class ya amer
 *
 * */

abstract class  MohamedClass{
    //some properties of this class ua amer
    public  $name ;
    public  $age ;
    public $length ;

    function Hello_one(){
        echo "Methods inside abstract class do not have functionality ua potter
        but they are made to put some instructions like the lecturer example 
         which Osama elzero explained ua amer " ;
    }

    //note that the abstract methods do not have bodies but they are enforce
    //the children to write the complete function
    abstract function Hello_two($your_name) ;

}


class AmerClass extends MohamedClass {
   public $notebook ;
   public $implementation ;

    public function Hello_two($your_name)
    {
        echo $your_name . "  I will do as the professor tell me . i think i have to 
        bring notebook and write all the notes behind the any lecturer
        then i have to implement every thing on my computer" ;
    }
}



$AmerObject = new AmerClass() ;
echo "<br>" ;
$AmerObject->Hello_two("mohamed alaa amer") ;



/*
 * ================the Conclusion of this video=======
 * is that  [Abstraction is a template to go on and extend from it ]
 *        { Model to follow }
 * */