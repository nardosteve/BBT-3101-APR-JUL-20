<?php
//Creating constructors to save time
//Pass some Parameters in the
//constructors do not retuen an values
class Book{

    public function __construct(int $isbn, string $title, string $author, int $available = 0){
      //This Operator is used to access properties from a define_syslog_variables
      $this->isbn = $isbn;
      $this->title = $title;
      $this->author = $author;
      $this->available = $available;
    }
}
//Creaint object
$book = new Book(195019662000, "The Tales of Fresabel", "Stephen Mungai", 12);
$book_2 = new Book(195119662000, "Coding in PHP", "mmuts");

echo $book->isbn."<br>".$book->title."<br>".$book->author."<br>".$book->available."<br>";
echo "<br>";
echo $book_2->isbn."<br>".$book_2->title."<br>".$book_2->author."<br>".$book_2->available."<br>";

 ?>
