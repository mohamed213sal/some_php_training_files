<?php
//this class is empty until we complete the playlist problem solved
/*
 *we have final keyword and this is available for methods AND properties ya amer
 *so final classes cannot be inherited because they are still under use
 * creating or developing
 *
 */

class Amer
{
    final public function calling()
    {
        echo "the name of our family is amer don't try to replace it";
    }
}

final class Alaa extends Amer
{
    function printMessage()
    {
        echo "don't try to use this class because this is final class you can't
                 inherit it ";
    }
}


$alaaObject = new Alaa();
$alaaObject->calling();













