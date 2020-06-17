<?php
// What are objects ? - Is an instance of a class
// What are classes ? - Blueprint in which individual objects are created

// Example of a Class -> Apple Iphone then the object -> {Iphone 11 Pro, Iphone X etc....} 

// Basic Introduction to classes
class Fruit{
  //Access Modifiers
  public $fruit_name;
  public $fruit_color;

  //Methods/Functions
  function set_name($fruit_name){
    $this->name = $fruit_name;
  }
  function get_name(){
    return $this->name;
  }
  function set_color($fruit_color){
    $this->color = $fruit_color;
  }
  function get_color(){
    return $this->color;
  }

}

//Creating objects from the class
$banana = new Fruit();
$banana->set_name('Banana');
$banana->set_color('Yellow');
$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Off-Red');
//color


//Echo the object data
echo "Name: " . $banana->get_name() ." ,". "Colour: ". $banana->get_color();
echo "<br>";
echo "Name: " . $apple->get_name() ." ," ."Colour: ". $apple->get_color();


 ?>
