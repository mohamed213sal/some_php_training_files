<?php
/*
 * ----------------------what is the polymorphism-----------------------
 * simple example to understand polymorphism ua amer :
 *   -----IF anybody says cut to these people------
 * -the surgeon
 * -the hairStylist
 * -the actor
 *
 * ------Answer : I think everybody know the answer And this is
 *                the meaning of polymorphism
 * the different functionality of the same thing is the polymorphism
 *
 *
 * -----properties of the polymorphism -------------
 * ---We will take All common things together in an interface (and the interface
 *   will be simple class ua amer ) .
 * ----Instead of using class keyWord we will use interface keyWord .
 * ----------------- [different behavior =Polymorphism ]-------------
 * */


interface Mobile{
    /*hint this interface is used to collect all common Methods
      for the same thing like CUT keyword */
    public function pressHome() ;

}


class Iphone implements Mobile{
    public $name ;

    public function pressHome(){
echo " 
what is hell is coming ua amer this is the Iphone class" ;
    }
}

class Android implements Mobile{
    public  $name    ;
    public function pressHome(){
        echo "----------what is hell is coming ua amer this is the Android class" ;

    }
}

//some objects
$ob_one=new Iphone();
$ob_two=new Android();


//calling some functions
$ob_one->pressHome() ;
$ob_two->pressHome() ;


//===================================================
interface DBConnects{
    public function getUsers() ;
    public function getArticles() ;
    public function showStats() ;
}

class mySql implements DBConnects {
    public function getUsers(){
        echo "this method for getting all Users in the database" ;
    }
    public function getArticles(){
        echo "this method for getting all Articles in the database" ;
    }
    public function showStats(){
        echo "this method for getting all ShowStats in the database" ;
    }
}


class Maria implements DBconnects {
    public function getUsers() {
     echo "those people are Maria Users only  " ;
    }
    public function getArticles(){
        echo "Those Articles for maria only  " ;
    }
    public function showStats() {
        echo " Maria Status is On/Off" ;
    }
}


/*
 * As you created the interface you have to write all Methods in the interface
 * and complete there bodies
 *
 *
 * */


