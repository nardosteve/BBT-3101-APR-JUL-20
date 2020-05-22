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
$masc_title = 'Mr';
$fem_title = 'Ms';
$greeting = $first_name;
if($age <= 12 and $gender == "Male"){
  //redirecting you to another page in PHP
  header("Location:index.php?msg=${masc_title}, ${greeting}&greet=Male");
}else if($age >= 13 and $age <= 19 and $gender == "Male"){
  header("Location:index.php?msg=${masc_title}, ${greeting}&greet=Male");
}else if($age >= 20 and $age <= 30 and $gender == "Male"){
  header("Location:index.php?msg=${masc_title}, ${greeting}&greet=Male");
}else if($age >= 31 and $gender == "Mayesssle"){
  header("Location:index.php?msg=${masc_title}, ${greeting}&greet=Male");
}else if($age <= 12 and $gender == "Female"){
  header("Location:index.php?msg=${fem_title}, ${greeting}&greet=Female");
}else if($age >= 13 and $age <= 19 and $gender == "Female"){
  header("Location:index.php?msg=${fenc_title}, ${greeting}&greet=Female");
}else if($age >= 20 and $age <= 30 and $gender == "Female"){
  header("Location:index.php?msg=${fem_title}, ${greeting}&greet=Female");
}else{
  header("Location:index.php?msg=${fem_title}, ${greeting}&greet=Female");
}
