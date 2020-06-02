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

$greeting = $first_name;
// if($age <= 12 and $gender == "Male"){
  //redirecting you to another page in PHP
//   header("Location:index.php?msg=${masc_title}, ${greeting}&greet=Male");
// }else if($age >= 13 and $age <= 19 and $gender == "Male"){
//   header("Location:index.php?msg=${masc_title}, ${greeting}&greet=Male");
// }else if($age >= 20 and $age <= 30 and $gender == "Male"){
//   header("Location:index.php?msg=${masc_title}, ${greeting}&greet=Male");
// }else if($age >= 31 and $gender == "Mayesssle"){
//   header("Location:index.php?msg=${masc_title}, ${greeting}&greet=Male");
// }else if($age <= 12 and $gender == "Female"){
//   header("Location:index.php?msg=${fem_title}, ${greeting}&greet=Female");
// }else if($age >= 13 and $age <= 19 and $gender == "Female"){
//   header("Location:index.php?msg=${fenc_title}, ${greeting}&greet=Female");
// }else if($age >= 20 and $age <= 30 and $gender == "Female"){
//   header("Location:index.php?msg=${fem_title}, ${greeting}&greet=Female");
// }else{
//   header("Location:index.php?msg=${fem_title}, ${greeting}&greet=Female");
// }

if($age <= 12 and $gender == "Female"){
  header("Location:home_index.php?msg=Young-Woman, ${greeting}&greet=yes");
}else if($age <= 12 and $gender == "Male"){
  header("Location:home_index.php?msg=Young-Man, ${greeting}&greet=yes");
}else if($age <= 13 and $age <= 19 and $gender == "Female"){
  header("Location:home_index.php?msg=Teenie, ${greeting}&greet=yes");
}else if($age <= 13 and $age <= 19 and $gender == "Male"){
  header("Location:home_index.php?msg=Teen, ${greeting}&greet=yes");
}else if($age <= 20 and $age <= 30 and $gender == "Female"){
  header("Location:home_index.php?msg=Young-Teenie, ${greeting}&greet=yes");
}else if($age <= 20 and $age <= 30 and $gender == "Male"){
  header("Location:home_index.php?msg=Young-Teen, ${greeting}&greet=yes");
}else if($age > 31 and $gender == "Female"){
  header("Location:home_index.php?msg=Female Adult, ${greeting}&greet=yes");
}else{
  header("Location:home_index.php?msg=Male Adult, ${greeting}&greet=yes");
}
