<?php


namespace App\classes;


class VariableAndDataType{
  public $message;
  public $x;
  public $y;
  public $z;

/*

    public $firstnumber = 1234; // Unreadable Variable
    public $secondNumber = 5678; // Readable Variable

    public $first_name = "Rahim"; // zend Variable
    public $lastName = "Khan"; // camelcase Variable

*/

    public $first_name = "Rahim"; // zend Variable
    public $lastName = "Khan"; // camelcase Variable

  public function __construct(){
      $this->message = "Hello PHP";
      $this->x = 100;
      $this->y = 50.28;
      $this->z = true;


  }

  public function showOutput(){
      echo  $this->message;
            echo "<br/>";
      echo  gettype($this->message);
             echo "<br/>";
      echo  gettype($this->x);
            echo "<br/>";
      echo  gettype($this->y);
            echo "<br/>";
      echo  gettype($this->z);
            echo "<br/>";

      echo  $this->message;
      echo "<br/>";

      echo $this->first_name ." ". 'Khan';

  }

}
