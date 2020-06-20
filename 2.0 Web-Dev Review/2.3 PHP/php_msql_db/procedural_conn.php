<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learningDB";

//Connect to db
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check conn
if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}

//Creating DB
/**
$sql = "CREATE DATABASE learningDB";

if (mysqli_query($conn, $sql)) {
  echo "Database successfully created!...";
}else {
  echo "Error creating Database: " .mysqli_error($conn);
}
**/

//Creating Tables
$sql = "CREATE TABLE myGuest(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table myGuest successfully created!...";
}else {
  echo "Error creating table: ";
}

//Close conn -> pass parameter = $conn
mysqli_close($conn);


 ?>
