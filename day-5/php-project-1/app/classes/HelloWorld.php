<?php


namespace App\classes;


class HelloWorld{
  private $message;


  public function __construct(){
     $this->message = "Hello BITM";

  }

  public function index(){
      echo  $this->message;


  }

}