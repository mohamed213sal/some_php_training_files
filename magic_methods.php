<?php
/*
 * --------------Magic methods ---------------
 * - Method with special Name Start with double underScores (__)
 * - All magic methods are implements when object is created
 * - they can  be inherited [تورث عادي يا معلم ]
 * - Using destruct :
 *    ---Called when object finishes his work it is used to destroy the object
 *       from the ram to release the space ua amer
 * */

class Mobile{
    public $name ;

    function __construct($country,$var_one){
        $this->name=$var_one ;
        echo "Object is created ua amer " . ",your name is  " . $this->name;
    echo "<br>" . "and your country is " .$country . "
    <br>" ."this is a great work you have to understand and type all info with your hands ";
    }



}


class Android extends Mobile{
    public $lastName;
   public  $age ;

   /*function Android($var_one,$var_two){
  $this->name=$var_one;
  $this->age=$var_two ;
   }
*/
   function Getting_info(){
       //echo $this->name ." " .$this->lastName ;
   }
}


$object_one=new Android("Egypt","amer") ;
$object_one->Getting_info() ;

