<?php
/*
 * we learnt how to use function inside another function how to deal with
 * return types of this functions ua amer
 * [::] = Scope resolution operator
 *using constant key word to inside and outside class ua amer
 *the question is how to call the constant variable outside the its class ua amer
 *
 * how to call the the constant variable
 * -----(we have to similar ways first by using className::ConstantName )
 * -----------( second using the objectOfTheClass::ConstantName )
 * its very good idea to learn
 * */


//using some constant variables
const owner_name = 'A9 A9 A9 A9 A9 ';
const const_color = "red";

class AppleDevice
{
    const mohamed_constant_variable="this is the constant variable ya salma" ;
    public $ram = "2GB";
    public $inch;
    public $space;
    public $color;
    public $name;
    const  class_owner_name = "what is the coming variables " ;

    public function getSpecification()
    {
        echo "this device is made in china " . $this->ram;
    }

    public function setOwnerName()
    {
        return $this->name = "abo_amer";
    }

    public function checkOwnerName()
    {

        if (strlen($this->setOwnerName()) < 4) {
            echo "this name is unavailable you have to re-enter complete name ";
        } else {
            echo "you entered correct name";
        }
    }

    public function checkConstantName()
    {
        if (strlen(self::class_owner_name) < 5) {
            echo "inValide";
        } else {
            echo "Valide";
        }
    }


}


echo AppleDevice::mohamed_constant_variable ;
$AppleDeviceObject = new AppleDevice();
echo $AppleDeviceObject::mohamed_constant_variable ;



/*
$AppleDeviceObject = new AppleDevice();

//$AppleDeviceObject->getSpecification();

$AppleDeviceObject->checkOwnerName();
echo "<br>" ;
$AppleDeviceObject->checkConstantName();

*/