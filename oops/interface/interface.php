<?php

//interface conatin only abstract function
//all function must be public 
//No constructer in interface
//in interface we can not define variables
//interface support multiple inheritance

interface class1{
    public function test1();
}

interface class2{
    public function test2();
}

class class3 implements class1,class2{
    public function test1(){
        return 'test 1 function is here';
    }
    public function test2(){
        return 'test 2 function is here';
    }
}

$obj= new class3;
echo $obj->test1();
echo $obj->test2();
?>