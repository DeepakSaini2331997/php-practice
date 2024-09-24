<?php 
//in static function we could not create object

class class1{
    static public $x=10;
    public $y=20;
    static public function test(){
        // echo $this->y;   //we can not use normal variable in static function
        return self::$x;    //use self keyword to access static varibles
    }
}

echo class1::$x;      // without object call static function and variables

echo '<br>'.class1::test();

$obj = new class1;
echo '<br>'.$obj->y;

?>