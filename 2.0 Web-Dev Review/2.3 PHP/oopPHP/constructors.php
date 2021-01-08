<?php

require_once 'Book.php';
require_once 'Customer.php';

//Creaing Book object -> instance of the Book class
$book = new Book(195019662000, "The Tales of Fresabel", "Stephen Mungai", 12);
$book_2 = new Book(195119662000, "Coding in PHP", "mmuts");
// $books->$available =2;
#$string = (string) $book;

//Creaing CUstomer object -> instance of the Customer class
$customer1 = new Customer(1, 'John', 'Doe', 'johndoe@gmail.com');
$customer2 = new Customer(2, 'Mary', 'Poppins', 'mp@mail.com');


//Print out data
echo $book->isbn."<br>".$book->title."<br>".$book->author."<br>".$book->available."<br>";
echo "<br>";
echo $book_2->isbn."<br>".$book_2->title."<br>".$book_2->author."<br>".$book_2->available."<br>";

 ?>
