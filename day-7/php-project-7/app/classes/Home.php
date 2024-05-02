<?php
namespace App\classes;


class Home{

    //public $message;
   public $student=[];
   public $students=[], $key, $value;
   public $students2=[], $v, $index ;



 public function __construct(){
    //$this->message = "Ok";


//------------Single Array--------------
/*
     $this->student=[
         5=>0,
         1=>1,
         2=>2,
         3=>3,
         4=>4
      ];
 */

//------------Numeric Array--------------
 //$this->student = [1,2,3,4,5];
 $this->student = ["a","b","c","d","e","f","g"];



  /*------------------------
      Associatve Array
   ------------------------*/
  $this->student = [
     'a' => 'a',
     'b' => 'b',
     'c' => 'c',
     'd' => 'd',
     'e' => 'e',
     'f' => 'f',
     'g' => 'g'

 ];

  /*----------------------
       Hybrid Array
  ------------------------*/
     $this->student = [
         0 => 'a',
         2 => 'b',
         'c' => 'c',
         'd' => 'd',
         'e' => 'e',
         'f' => 'f',
         'g' => 'g'

     ];

 /*-------------------------------
     2D  Dimensional Array
 ---------------------------------*/
     $this->students = [
      0 => [
          "name" => "Rafi",
          "phone" => "02454545234",
          "email" => "rafi454@gmil.com",
          "address" => "Dhaka"

      ],

      1 => [
          "name" => "Kafi",
          "phone" => "02454545234",
          "email" => "kafi344@gmil.com",
          "address" => "Dhaka"
          ],

      2 => [
          "name" => "Safi",
          "phone" => "024452545234",
          "email" => "Safi454@gmil.com",
          "address" => "Dhaka"

      ]


     ];


  /*-------------------------------
         3D  Dimensional Array
  ---------------------------------*/
     $this->students2 = [
         0 => [
             "name" => "Rahim",
             "phone" => [
                      'number-1' => '01928464647',
                      'number-2' => '01724456732'
             ],
             "email" => "rafi454@gmil.com",
             "address" => "Dhaka"

         ],

         1 => [
             "name" => "Karim",
             "phone" => [
                      'number-1' => '01928464344',
                      'number-2' => '01724456887'
                  ],
             "email" => "kafi344@gmil.com",
             "address" => "Dhaka"
         ],

         2 => [
             "name" => "Mahim",
             "phone" => [
                 'number-1' => '01928464855',
                 'number-2' => '01728856732'
             ],
             "email" => "Safi454@gmil.com",
             "address" => "Dhaka"

         ]


     ];


  }


 function showOutput(){
     //echo $this->message;

 /*
     print_r($this->student);
       echo "<br/>";

       echo "<br/>";
     var_dump($this->student);
       echo "<br/>";

       echo "<br/>" . "<pre>";
     var_dump($this->students);
       echo "</pre>";
*/


/*
     foreach ($this->students as $item) {
        foreach ($item as $value) {

            echo $value . "<br/>";

             }
        }
 */


//-------------2D Array Show----------------
       echo "<h2>2D Array Show</h2>";
    foreach ($this->students as $item) {

        foreach ($item as $this->key =>  $this->value) {
               echo $this->key . '=' . $this->value . "<br/>";

             }
               echo "<br/>";
        }



//-------------3D Array Show----------------
        echo "<h2>3D Array Show</h2>";
     foreach ($this->students2 as $item) {
         foreach ($item as $this->key =>  $this->value) {

             if(is_array($this->value)){
                 foreach ($this->value as $this->index => $this->v){
                     echo $this->index . '=' . $this->v;
                     echo "<br/>";
                    }
             }
             else{
                 echo $this->key . '=' . $this->value . "<br/>";
             }


         }
         echo "<br/>";
     }

    }

}

