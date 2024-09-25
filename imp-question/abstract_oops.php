<?php 
//abstract class have atleast one abstract function
//abstract function only define , not be implement
//Abstract class could not create object (so we can not create constructer function in abstract class)
//Abstarct class, child class must contain abstract function with defination(implement)

abstract class demo {
    abstract function test();

    public function testing(){
        echo 'demo testing function';
    }
}

class child extends demo {
    public function test(){
        echo 'child test function in';
    }
}

$obj = new child();
$obj->testing();
$obj->test();
?>