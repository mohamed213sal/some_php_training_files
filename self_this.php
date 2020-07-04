<?php

/*
 * ----------------using self and this keywords---------------------
 *  THIS refers to the current class (or the current widget not only the class)
 *  SELF refers ( to anything owned by this class only ua amer--Hint we can call
 * the special items that are referred by self as they are the basic items of the class )
 *
 * ------dealing with static and non-static members------
 * HINT (we don't use the $ with SELF(keyword) variables because they are the basic items
 * or the class construction ua amer )
 *
 * ---so SELF deals with CONSTANTS ONLY THIS IS AWESOME UA AMER
 *   ( من الاخر اي حاجة بتتغير بداخل الكلاس هنتستخدم معاها this واي حاجة ثابتة بداخل الكلاس هنستخدم معاها self)
 *
 *
 * */


class MohamedClass
{
    const hair = "BROWN";
    public $color = "grey";
    public $skin = "rought";
//write simple function to set variables or reassign the variables of
//the class ua amer


//using constructor
    function MohamedClass($constructorColor,$constructorSkin)
    {
        $this->color = $constructorColor;
        $this->skin = $constructorSkin;

    }
//reacts like constructor
    public function setVariables($variable_one, $variable_two)
    {
        $this->color = $variable_one;
        $this->skin = $variable_two;
        echo $this->skin . $this->color;
        /*hint this function like constructor in its use ya amer but not typical ua amer*/
    }


}

echo MohamedClass::hair;

$object_one = new MohamedClass("yellow","white");
echo $object_one->color ;
//$object_one->setVariables("red", "blond");
