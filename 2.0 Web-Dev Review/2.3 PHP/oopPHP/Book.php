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
    public function __toString() {
        $result = '<i>' . $this->title . '</i> - ' . $this->author;
      if (!$this->available) {
        $result .= ' <b>Not available</b>';
        }
        return $result;
    }
}


 ?>
