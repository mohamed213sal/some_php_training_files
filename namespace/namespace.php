<?php
/*
 *  ----------------------------simple introduction -------------------
Namespace the main purpose of using nameSpace is not to create
conflict between classes ya amer
for example consider you bring any class to use its functionality
from the internet and you have a class in your code with the same name
this will create a fatal error from the server compiler of parser

=======================NameSpace======================
but after using nameSpace the problem solved as every class lives in its
own world and don't have any problem with naming itself...see the coming
example

*/

/*
 *  ---------------NameSpacing is process of separating all worlds from each others-----
 * 
 * 
 * 
 * 
 * theoretical we understand the meaning of NameSpace concept 
 * consider you are in a hotel and walking in the pathway but this hotel has rooms
 * with the same names but the content or structure of every room is different 
 * from the other one [this is the meaning of nameSpacing ua amer ]
 * ============focus with this example to understand well ============
 * if we have a factory that produces hardware for 
 *    mobiles [Apple,Sony,LG and others ]  
 * this factory must use the concept of NameSpacing as
 * it will create different sections for the same component of the hardware unit 
 * like (kind of Processor chip ) 
 * ===> so we will have different sections for the same unit And each section has
 *      its own properties . 
 * -----------------------see the example to understand the meaning-----------
 *
 * العوالم هي ال NameSpacing بمعني هيكون عندك اكتر من عالم بس بنفس الاسم وكل           
 * عالم تركيبه مختلف عن التاني خالص ف الفكرة هنا عاوزين نفصل العوالم                     
 * عن بعضها علشان لايحدث عندي  خطأ عند ترجمة الكود                                 
 * من الخر يا معلم اعتبر ان ال NameSpacing هي مرحلة فصل العوالم عن بعضها ..... وشكرا    
 *   
 *  */
//--------------------myCode-------------------------------




//------------importing files section of nameSpacing files-------
require 'sony.php';
require 'apple.php';

//=================the global nameSpace section ua amer===========

class Testing {
      public $test ;
}

class Sony{
    function hello(){
        echo "This is the global nameSpace And it has the same 
          name of sony file or class created before" ;
    }
}
/*
$sonyObject=new World_one_sony\Sony() ;
$sonyObject->RamInfo();

echo "<br>" ;

$appleObject=new World_two_apple\Apple() ;
$appleObject->RamInfo();

echo "<br>" ;

$objectGlobal=new Sony() ;
$objectGlobal->hello();
*/

$hardwareObject=new  World_two_apple\Hardware\Amer() ;
$hardwareObject->sayAmer();

$objectTwo=new World_two_apple\Hardware\tablets\Amer();
$objectTwo->sayAmer();
 ?>

















