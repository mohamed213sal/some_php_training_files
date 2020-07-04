<?php
/*
 * Q1- in a simple word define  encapsulation ua amer ?
 * -----------------------Answer--------------------------------------------
 * Encapsulation is a mechanism to protect the data from any coming changes
 * from unauthorized users or illegal attack
 * this can be done by using the setter and getter methods ya amer
 * we can call them they are normal functions not more don't worry
 *--------------------------------------------------------------------------
 * */

class trying
{
    public $varOne = "mohamed amer";
    public $varTwo = "using private variable";
    public $varThree = "go to hell";
    private $password;
  //public $password ;
    function changePassword($password_variable)
    {
        if (strlen($password_variable) >= 4) {
            $this->password = $password_variable;
            echo "congratulation your password changed " ;
            echo sha1($this->password);
        } else {
            echo "your password is not correct ";
        }
    }
}

$ob=new trying() ;
$ob->changePassword("888");//so by using this method we protected
//the password variable from attacks that is awesome ua amer






