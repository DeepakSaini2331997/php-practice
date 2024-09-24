<?php 
class class1{
    public $x = 10;
    function __construct(){
        echo 'constructs function';
    }
    function getData(){
        return ++$this->x;
        //this keyword is refere current reference
    }
}

$obj = new class1;
echo '<br>'.$obj->x;
echo '<br>'.$obj->getData();

$obj2 = new class1;
echo '<br>'.$obj2->getData();
echo '<br>'.$obj2->x;

?>