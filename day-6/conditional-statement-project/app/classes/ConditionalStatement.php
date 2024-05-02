<?php
namespace App\classes;


  class ConditionalStatement{
        public $input_number;
        public $message;

        public $num1;
        public $num2;
        public $num3;
        public $fruits;


    public function __construct(){
    //  $this->input_number = $_POST['input_number'];
      $this->message = "Hello PHP";

      $this->num1 = 30;
      $this->num2 = 50;
      $this->num3 = 90;
      $this->fruits = "coconut";

    }


 public function showOutput() {
    // echo $this->message;

     //--------------If----------------
     if($this->num1 <= $this->num2){
       echo "50 is Big" . "<br/>";

     }

  //-----------------If Else---------------
     if($this->num1 >= $this->num2){
         echo "50 is Big" . "<br/>";

     }else{
         echo "30 is Small" . "<br/>";

     }

  //-------------Elseif--------------------
   if($this->num3 <= "33"){
       echo "You Have Pass " . "<br/>";
   }
   elseif ($this->num3 <= "40"){
       echo "You Have B ";
   }
   elseif ($this->num3 <= "50"){
       echo "You Have B Grade";
   }
   elseif ($this->num3 <= "60"){
       echo "You Have A-";
   }
   elseif ($this->num3 <= "70"){
       echo "You Have A";
   }
   elseif ($this->num3 <= "80"){
       echo "You Have A+";

   }
   elseif ($this->num3 <= "90"){
       echo "You Have Golden A+" . "<br/>";

   }


 //--------------Switch-------------
     switch ($this->fruits){
         case "mango":
             echo "Color is Green";
             break;

         case "banana":
             echo "Color is Yellow";
             break;

         case "coconut":
             echo "Color is White";
             break;

         case "Apple":
             echo "Color is Brown";
             break;

         case "grab":
             echo "Color is darkgreen";
             break;

         default:
             echo "Nothing Else..?";

     }


  }
}


?>



<form method="post">
 <input type="number" name="input_number">

</form>