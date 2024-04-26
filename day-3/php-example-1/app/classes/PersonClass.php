<?php

namespace App\classes;

 class PersonClass{

  public $name;
  public $age;
  public $height;
  public $play;
  public $food;


  public function __construct(){
        $this->name="Habib"."<br/>";
        $this->age=25 ."<br/>";
        $this->height=5.4 ."<br/>";
        $this->play="cricket"."<br/>";
        $this->food="banana"."<br/>";

    }

    public function person(){
        echo $this->name;
        echo $this->age;
        echo $this->height;
        echo $this->play;
        echo $this->food;
    }


}