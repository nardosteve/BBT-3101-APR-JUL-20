<?php

//first line to add
namespace Models;

require_once '../our_autoloader.php';

class Quote{

  private $db;
  public $quid;
  public $quote;
  public $author;
  public $dob;
  public $dod;
  public $category;

  public function __construct(){
    //connect to the db on instantiation
    //autoloading
    $this->db = new \Konekta();

  }

  public function getQuote($id)}{

    $id = $this->db->konn->real escape string($id);
    $sql = "SELECT * FROM quote WHERE qid=$id";
    // echo $sql;
    #run
    $result = $this->db->konn->query($sql);

    var_dump($result->fetch_row());

  }

//static ->
  public static function getCount(){

    $db = (new \Konekta());

    $sql = "SELECT COUNT(*) as count FROM quote";

    $results = $bd->konn->query($sql);

    $row = $results->fetch_row();


  }


}

$firstQuote = new Quote();

//bad_ud var
$bad_id = "12 OR '1 = 1'";
$first_quote->getQuote($bad_id);


 ?>
