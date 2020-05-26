<?php
/**
*
*@param
*
*/
function NameAgeReturner($name, $age, $greetMe = false){
    // echo $name.' '. $age;
    //Long Method
/*
    if($greetMe){
      return 'Hi'. $name.' '. $age;
    }else{
      $name.' '. $age;
    }
    */
    //short hand if statement
    return($greetMe) ? 'Hi'. $name.' '. $age : $name .' '. $age  ;
  }
//Calling a function
#NameAgeReturner("Stephen Mungai", 20);
//Assign function a Variable
$Nage = NameAgeReturner("Stephen Mungai", 20);
echo "<br>";
var_dump($Nage);

 ?>
