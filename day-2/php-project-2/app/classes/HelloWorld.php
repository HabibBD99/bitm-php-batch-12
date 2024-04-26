<?php


namespace App\classes;


class HelloWorld{
 public $message;
 public $name;
 public $location;
 public $mobile = "01715265595";


    public function __construct(){
        $this->message="Hello PHP" . "<br>";
        $this->name="BITM" . "<br>";
        $this->location="Dhaka" . "<br>";
    }

    public function index(){
        echo $this->message;
        echo $this->name;
        echo $this->location;
        echo $this->mobile;

    }

}