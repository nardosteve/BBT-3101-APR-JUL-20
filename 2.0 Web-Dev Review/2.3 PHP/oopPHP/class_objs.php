<?php
// Object Excerise
class Book{
  //Adding class Properties
  public $isbn;
  public $title;
  public $author;
  public $available;
}

class Customer{


}

//Instantiating objects using the "New" Keyword
//Books Details
$book = new Book();

$book->isbn = "102480";
$book->title = "How to pass a Netflix Interview";
$book->author = "By, Stephen Mungai";
$book->available = true;
var_dump($book);
//Books Details

//Customer Details
$customer = new Customer();
//Customer Details


 ?>
