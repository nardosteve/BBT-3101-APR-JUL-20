<?php
// Object Excerise
class Book{
  //Adding class Properties
  public $isbn;
  public $title;
  public $author;
  public $available;

  //Adding a method
  //Class Methods -> Functions -> Parameters & Arguments
  // this -> helps us to access a certain property
  public function getPrintableTitle(): string {
        $result = '<i>' . $this->title
        . '</i> - ' . $this->author;
        if (!$this->available) {
        $result .= ' <b>Not available</b>';
        }
        return $result;
  }

    public function getCopy(): bool {
        if ($this->available < 1) {
        return false;
        } else {
        $this->available--;
        return true;
        }
    }
    //Adding a method
  }
class Customer{
  public $id;
  public $name;
  public $item;
  public $checkoutPrice;
}

//Instantiating objects using the "New" Keyword
//Books Details
$book = new Book();
$book->isbn = "195019662000";
$book->title = "How to pass a Netflix Interview";
$book->author = "By, Stephen Mungai";
$book->available = 0;
#var_dump($book);
//Books Details
echo "<br>";
//Customer Details
$customer = new Customer();
$customer->id = "001";
$customer->name = "Stephen Mungai Muroki";
$customer->item = "Apple";
$customer->checkoutPrice = "$1.99";
#var_dump($customer);
//Customer Details

  if ($book->getCopy()) {
    echo 'Heres, your copy.';
    } else {
    echo 'I am afraid that book is not available.';
  }

 ?>
