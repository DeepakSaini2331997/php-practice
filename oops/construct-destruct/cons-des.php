<?php 
class class1{
    function __construct(){
        echo 'its a construct function call when object is call'.'<br>';
    }

    function function1(){
        return 'its a first function'.'<br>';
    }

    function __destruct(){
        echo 'its a destruct function call at the end.';
    }
}

$obj = new class1;
echo $obj->function1();

?>