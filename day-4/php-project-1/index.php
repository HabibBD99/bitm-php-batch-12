<?php
require_once "vendor/autoload.php";
use App\classes\HelloWorld;


/*
function helloWorld(){
    echo "Hello World";


}

helloWorld();
*/

/*
class  HelloWorld{
    public $message;


    public function index(){
        $this->message="Hellow World";
        echo $this->message;

    }
}
*/

$helloWorld = new HelloWorld();
$helloWorld->index();