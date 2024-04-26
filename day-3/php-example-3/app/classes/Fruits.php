<?php
namespace app\classes;

class Fruits{
    private $name;
    private $color;
    private $test;


 public function __construct() {
    $this->name = "Mango" ."<br/>";
    $this->color = "Green" ."<br/>";
    $this->test = "Sold" ."<br/>";

}

public function Output(){
  $Fruits = "The Fruits Is :"; 

  echo $Fruits . $this->name;
  echo $Fruits . $this->color;
  echo $Fruits . $this->test;

  }


}






?>