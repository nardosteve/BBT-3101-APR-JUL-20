<?php
#var_dump($_GET); #superglobal(forms) -- update/create
#echo "<br>";
#var_dump($_SESSION);
#die();#stops execution
#stops either
#die();
$all_name = $_GET['full-name'];
$age = $_GET['age'];
$gender = $_GET['gender'];

/*Getting the first name if it exists*/
$space_position = strpos($all_name,' ');

if($space_position == false){
  $first_name =  $all_name;
}else{
  $first_name =  substr($all_name,0,$space_position);
}

#echo $age;
$title = 'Ms';
$greeting = $first_name;
if($age <= 12){
  //redirecting you to another page in PHP
  header("Location:index.php?msg=${title}, ${greeting}&greet=yes");
}else if($age >= 13 and $age <= 19){
  header("Location:index.php?msg=${title}, ${greeting}&greet=yes");
}else if($age >= 20 and $age <= 30){
  header("Location:index.php?msg=${title}, ${greeting}&greet=yes");
}else{
  header("Location:index.php?msg=${title}, ${greeting}&greet=yes");
}
