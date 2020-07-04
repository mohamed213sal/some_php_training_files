<?php
/*
 * ----------The question here how we will calling all the classes needed in one
 * step---------------------
 * ----Answer---
 *    using the require keyword will be so bad here ua amer
 *  so we will use spl [standard php library ] then autoload then
 *  register
 *   -------see the example ua amer
 *
 * */


spl_autoload_register(function ($class){
    require "course_php/autoload_classes/" .$class . '.php' ;
}) ;


$var1=new Testing1() ;