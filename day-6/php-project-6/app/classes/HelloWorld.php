<?php
namespace App\classes;


class HelloWorld{
    public $message;
    public $p;
    public $x;
    public $y;
    public $z;

    public function __construct(){
        $this->message = "Hello BITM";
        $this->p = -30;

        $this->x = 40;
        $this->y = 50;

        $this->z = false;

    }


    public function index(){
        //$this->x = 500;
       // $this->y = 200;
       // $this->z =  $this->x + $this->y;


   echo "<h2> Do While Loop</h2>";

      $this->x = 15;
      do{
          echo $this->message . "<br/>";
           $this->x++;

      } while($this->x >= 20);





/*
    echo "<h2>While Loop</h2>";

      $this->x = 15;
      while($this->x <= 20){
           echo $this->message . "<br/>";
            $this->x++;
      }

*/





/*
         echo "<h2>For Loop</h2>";
     for($this->x = 20; $this->x <= 30; $this->x++){
        // echo $this->message ."<br>";
         echo $this->x ."<br>";
     }

 */




/*

    echo "<h2>Elseif Statement </h2>";
       switch ($this->x) {
           case 100 :
               echo "Hello World";
               break;

           case 200 :
               echo "Hello Bangladesh";
               break;

           case 300 :
               echo "Hello BITM";
               break;

           default:
               echo "Hello PHP";

        }

 */




 /*
        echo "<h2>Elseif Statement </h2>";
        if($this->x > $this->y){
            echo $this->z;
        }
        elseif($this->x > $this->y) {
            echo "Hello PHP";

        }
        elseif($this->x > $this->y) {
            echo "Hello BITM";

        }else{
            echo  'Hello Laravel';

        }
*/


 /*
        echo "<h2>If Else Statement </h2>";
        if($this->x < $this->y){
            echo $this->z;
        }else{
            echo "Hello PHP";

        }

  */


/*
        echo "<h2>If Statement </h2>";
        if($this->x < $this->y){
            echo $this->z;

        }
 */


/*
         echo "<h2>Logical ! (Not) Operator </h2>";
               echo "<br> ===============<br>";
         echo !$this->z;
*/


/*
        echo "<h2>Logical || (Or) Operator </h2>";
        echo "<br/> ===============<br/>";
        echo ($this->x  <  $this->y) || ($this->x < $this->z);
        echo "<br> ===============<br>";
        echo ($this->x  >  $this->y) || ($this->x > $this->z);
        echo "<br> ===============<br>";
        echo ($this->x  <  $this->y) || ($this->x > $this->z);
        echo "<br> ===============<br>";
        echo ($this->x  >  $this->y) || ($this->x < $this->z);
*/




        /*
                echo "<h2>Logical && (And) Operator </h2>";
                  echo "<br/> ===============<br/>";
                echo ($this->x  <  $this->y) && ($this->x < $this->z);
                  echo "<br> ===============<br>";
                echo ($this->x  >  $this->y) && ($this->x > $this->z);
                  echo "<br> ===============<br>";
                echo ($this->x  <  $this->y) && ($this->x > $this->z);
                  echo "<br> ===============<br>";
                echo ($this->x  >  $this->y) && ($this->x < $this->z);
        */



        /*
                echo "<h2>Conditional Operator</h2>";
                    echo "<br/> -------------";
                echo $this->x > $this->y;  // 1
                    echo "<br/>----------------";
                echo $this->x < $this->y;  // null
                    echo "<br/> -----------------";
                echo $this->x >= $this->y;  // 1
                    echo "<br/> -------------";
                echo $this->x <= $this->y;  // null
                    echo "<br/> -------------";
                echo $this->x <= $this->y;  // null
                    echo "<br/> -------------";
                echo $this->x == $this->y;  // null
                    echo "<br/> -------------";
                echo $this->x != $this->y;  // null
                    echo "<br/> -------------";
                echo $this->x === $this->y;  // null
                     echo "<br/> -------------";
                echo $this->x !== $this->y;  // null
        */


/*
        echo "<h2>Assignment Operator</h2>";
              echo "<br/>";
        echo $this->x += $this->y;  // 60
              echo "<br/>";
        echo $this->x -= $this->y; // 40
              echo "<br/>";
        echo $this->x *= $this->y;  // 800
               echo "<br/>";
        echo $this->x /= $this->y;  // 40
              echo "<br/>";
        echo $this->x %= $this->y;  // 0
              echo "<br/>";
        echo $this->x .= $this->y;  // 020
*/



/*
          echo "<h2>Pre & Post Increment</h2>";
               echo "<br/>";
          echo ++$this->x ; // 41
                echo "<br/>";
          echo  $this->x ++; // 41
                echo "<br/>";
          echo ++ $this->x ; // 43
                echo "<br/>";
          echo  $this->x ++; // 43
                echo "<br/>";
          echo ++ $this->x ; // 46


        echo "<h2>Pre & Post Decrement</h2>";
        echo "<br/>";
        echo -- $this->y ; // 19
        echo "<br/>";
        echo  $this->y --; // 19
        echo "<br/>";
        echo -- $this->y ; // 17
        echo "<br/>";
        echo  $this->y --; // 17
        echo "<br/>";
        echo -- $this->y ; // 15

        echo "<h2> Negation</h2>";
        echo "<br/>";
        echo  -$this->p ; // true k false // false k true

*/


    }

}




?>