<?php

$my_student = ["Stephen Muroki", 102480, "Nardosteve"];
print_r($my_student);
// Array Function
$my_students = array(111111, "Unkwown Human");
echo "<br>";
var_dump($my_students);

#Associative array
echo "<br>";
$student_list = [

  120120 => "Gitty",
  140140 => "hubby",
  #102480 => "Stevie"
];

#print student list
print_r($student_list);

#accessing elements using indexes
echo "<br>";
#echo $student_list[102480];
echo "<br>";
echo $my_student[1];
$my_students[1] = "Unkwown Human from Space";
echo "<br>";
echo $my_students[1];

#indexes (Remove elements)
unset($my_student[2]);
echo "<br>";
var_dump($my_student);

#Array (empty)
$srray1 = [];
$array2 = ['one'];
$array3 = ['Hello World'];
echo "<br>";
var_dump(empty($array1));
echo "<br>";
var_dump(empty($array2));
echo "<br>";
#Array (isset)
var_dump(isset($array1));
echo "<br>";
var_dump(isset($array3));

#Multi-dimensional Array (1D, n-d)
$student_list_gcse = [
  [1,'index-1', 'Stephen Mungai'],
  [2,'index-2', 'Mark Kimani'],
  [3,'index-3', 'Nardo-Steve']
];
#3D Array
$d_3d = [
  ["Stephen", [1,4]],
  ["Fredrick", [1,5]],
];

echo "<br>";
echo $student_list_gcse[2][2];
echo "<br>";
echo $student_list_gcse[1][2];

#accesing 3D values
echo $d_3d[0][0][0];
echo "<br>";
echo $d_3d[0][1][0];


#Copyright Stephen Mungai Muroki 2020




















 ?>
