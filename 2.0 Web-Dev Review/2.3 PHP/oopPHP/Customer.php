<?php

class Customer{
  //Basic proprties about the user
  private $id;
  private $firstname;
  private $surname;
  private $email;

  //Has paramteres
  public function __construct(int $id, string $firstname, string $surname, string $email)
    {
      $this->id = $id;
      $this->firstname = $firstname;
      $this->surname = $surname;
      $this->email = $email;
    }
}

 ?>
