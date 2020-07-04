<?php
/*consider it the main file that we need to use
to apply the concept of nameSpacing ua amer
now we need to use the namespaces that we created ua amer
this is easy for us as i remember
-------------------hint we can use spl[--Standard php library--]
*/

require "tablet.class.php";
require "pc.class.php";
require "mostafa.class.php";


/*
spl_autoload_register(function ($class){
    require "$class".'.class.php' ;
});
*/


$ob=new theFirstWorld\Mohamed() ;

$ob->MohamedMessage();

