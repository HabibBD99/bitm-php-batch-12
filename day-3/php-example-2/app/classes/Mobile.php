<?php
namespace App\classes;

class Mobile{

public $name;
public $company;
public $weight;
public $color;
public $rem;

public function __construct(){
 $this->name="<h3>Iphone 5</h3>"."<br/>";
 $this->company="Apple"."<br/>";
 $this->weight="3.65 grm"."<br/>";
 $this->color="Black, Green, Orange"."<br/>";
 $this->rem="8Gb";

  }


 function outputFunc(){
  echo $this->name;
  echo $this->company;
  echo $this->weight;
  echo $this->color;
  echo $this->rem;

  }


}

?>