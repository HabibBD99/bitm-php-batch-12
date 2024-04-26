<?php
namespace App\classes;


 class CalculatorDemo{
   private $add;
   private $sub;
   private $mul;
   private $div;
   private $rem;


   private $num1;
   private $num2;

 public function __construct()
 {
     $this->num1 = "<input type='number' name='fNum'>";
     $this->num2 = "<input type='number' name='lNum'>";

     $this->add = num1 + num2;
     $this->sub = num1 - num2;
     $this->mul = num1 * num2;
     $this->div = num1 / num2;
     $this->rem = num1 % num2;

     }

 public function outputDemo(){
      echo $this->num1;

   }

 }
