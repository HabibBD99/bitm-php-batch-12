<?php
namespace App\classes;


class OperatorDemo{

   public $num1 ;
   public $num2 ;
   public $num3 ;
   public $num4 ;

   public $bool;
   public $n = 100;

   public function __construct(){
       $this->num1 = 20;
       $this->num2 = 30;
       $this->num3 = 40;
       $this->num4 = 50;

       $this->bool = false;


   }

   function showOutput(){

   /*-------------------------
       Arithmetic Operator
   ---------------------------*/
       echo $this->num1 + $this->num2; // 50
          echo "<br/>";
       echo $this->num2 - $this->num1; // 20
          echo "<br/>";
       echo $this->num1 * $this->num2; // 600
          echo "<br/>";
       echo $this->num2 / $this->num1; // 1.5
          echo "<br/>";
       echo $this->num2 % $this->num1; // 10
          echo "<br/>";



  //------------Increment & Decrement Operator------------
       echo "Pre & Post Increment Operator" . "<br/>";
       echo ++ $this->num1; // 21
           echo "<br/>";
       echo $this->num1 ++ ; // 21
           echo "<br/>";
       echo ++ $this->num1 ; // 23
           echo "<br/>";
       echo ++ $this->num1 ; // 24
           echo "<br/>";
       echo  $this->num1 +5 ; // 27
           echo "<br/>";
       echo ++ $this->num1 ; // 25
           echo "<br/>";

     // Pre & Post Decrement
       echo "Pre & Post Decrement Operator" . "<br/>";
       echo -- $this->num2; // 29
       echo "<br/>";
       echo $this->num2 -- ; // 29
       echo "<br/>";
       echo -- $this->num2 ; // 27
       echo "<br/>";
       echo -- $this->num2 ; // 26
       echo "<br/>";
       echo  $this->num2 -7 ; // 22
       echo "<br/>";
       echo -- $this->num2 ; // 21
       echo "<br/>";

//--------------Negation Operator-----------------
       echo "Negation Operator" . "<br/>";
          echo - $this->n ; // -40
                 echo "<br/>";
          echo - $this->bool ; // -40
                 echo "<br/>";


/*----------------------------
      Assignment Operator
 ------------------------------*/
        echo "Assignment Operator" . "<br/>";
       echo $this->num3 += $this->num4; // 90
            echo "<br/>";
       echo $this->num3 -= $this->num4; // 40
            echo "<br/>";
       echo $this->num3 *= $this->num4; // 600
            echo "<br/>";
       echo $this->num3 /= $this->num4; // 1.5
            echo "<br/>";
       echo $this->num3 %= $this->num4; // 10
            echo "<br/>";
       echo $this->num3 .= $this->num4; // 10
            echo "<br/>";



   }

}



?>