<?php

/**
* @param
*
*/
function NameAgeReturner($name,$age,$greetMe=false){

  /*if($greetMe){
    return 'Hi '. $name.' '.$age;
  }else{
    return $name.' '.$age;
  }*/

  //shorthand if

  return ($greetMe) ? 'Hi '. $name.' '.$age : $name.' '.$age;

}

//execution of functions - called!
//By Name

$Nage = NameAgeReturner("Stephen Mungai", 20, true);
echo "<br/>";
var_dump($Nage);
