<?php 

//multi-level inheritance
class class1{
    public function fun1(){
        echo "function 1";
    }
}

class class2 extends class1{
    public function fun2(){
        echo "function 2";
    }
}

class class3 extends class2{
    public function fun2(){
        echo "function 2";
    }
}

class class4 extends class3{
    public function fun2(){
        echo "function 2";
    }
}

$obj = new class4();
$obj->fun1();

//if any class have not requirement of any function

trait student{                  // trait keyword
    public function getName(){
        echo 'student name';
    }
}

class rollNumber{
    use student;                // for access use keyword
    public function getrollNumber(){
        echo " student rolll number";
    }
}

$obj1 = new rollNumber();
$obj1->getName();
$obj1->getrollNumber();


?>