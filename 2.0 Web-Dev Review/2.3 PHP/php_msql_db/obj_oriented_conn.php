<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obj_oriented_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Create DB
/**
$sql = "CREATE DATABASE obj_oriented_db";

if ($conn->query($sql) === TRUE) {
  echo "Database created successfully!...";
}else {
  echo "Error creating Database: " .$conn->error;
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

//Check if tables were created
if ($conn->query($sql) === TRUE) {
  echo "Table myGuest successfully created!...";
}else {
  echo "Error creating table: " .$conn->error;
}

//Close connection
$conn->close();

 ?>
