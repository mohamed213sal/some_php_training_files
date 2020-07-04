	<?php 
	//variables ua amer used in php or most of our languages 
    //these are some variables used in this page 
	/*hint using variables are essential in our code */
	
	$lesson_name="concatenation using it with php ";
	$home_page="PHP- ".$lesson_name ;
	$heading ="welcome to Concatenation";
	$brief="This Lesson talk About".$lesson_name."and how to use it";
  //so let's create simple list using concatenation ua amer 
	$mohamed = "<ul>" ;
	$mohamed .="<li> mohamed alaa amer</li>";
	$mohamed .="<li> mariam el sayed</li>";
	$mohamed .="<li> sahar rabie el gendy</li>";
	$mohamed .="<li> el ostora mohamed amer </li>";
	$mohamed .="</ul>" ;
   $advise ="try to write simple code ua amer";


 ?>
<!DOCTYPE html>
	<html>
    	<head>
	    	<title>
	    	 <?php echo $variable_one ?>
		   </title>
	   </head>
	        <body>
	        	<h1><?php echo $lesson_name ?></h1>
	       <?php echo $mohamed ?>
	       <?php echo $advise ?>
		    </body>
		
</html>