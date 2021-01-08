<?php

#namespace Models;

class Konekta{

  //Properties
  public $konn;
  private $config;

  //Functions & constructs
  function __construct(){
    //get configuration
    $this->getConfig();
    // echo $this->config;
    $this->config->host;

    // OOP Approach
    $this->konn = new mysqli($settings->config->host, $this->config->username, $this->config->password, $this->config->db);

    //DB Error
    if ($this->$konn->connect_errno) {
      echo "Failed to connect to MySQL: " . $this->$konn->connect_error;
      exit();
    }
    echo "Connection Successful!....";

  }

  function getConfig(){

    //absolute file path -> C:/
    $configAbsolutePath = __DIR__."/config.json";

    //Gets data from the file as a string
    $config_string = file_get_contents('config.json');
    //COnverts json string into an array
    $config_object = json_decode($config_string);

    #var_dump($config_string);
    #var_dump($config_object);

    //set property to config
    $this->config = $config_object;
  }

}

//Object of the class -> instance of a class
#$konnection = new Konekta();
#$konnection->getConfig();
#var_dump($konnection);

 ?>
