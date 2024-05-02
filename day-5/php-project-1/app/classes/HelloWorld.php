<?php


namespace App\classes;


class HelloWorld{
   public $message;
   public $x;
   public $y;


  public function __construct(){
     $this->message = "Hello BITM";
     $this->x = 20;
     $this->y = 30;


  }

  public function index(){

      echo $this->x + $this->y; // 50
           echo "<br/>";
      echo $this->x - $this->y; // -10
           echo "<br/>";
      echo $this->x * $this->y; // 600
           echo "<br/>";
      echo $this->x / $this->y; // 0.6
           echo "<br/>";
      echo $this->x % $this->y; // 20

  }



}