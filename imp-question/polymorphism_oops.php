<?php 
// In PolyMorphism, same operation may be differently in different class
// its create in interface and abstract class

abstract class class1{                      //same work with interface
    abstract public function fun1();
}

class class2 extends class1{               // implement
    public function fun1(){
        echo 'this is only use for class 2 only';
    }
}

class class3 extends class1{
    public function fun1(){
        echo 'this is only use for class 3 only';
    }
}

$obj = new class2();
$obj->fun1();

$obj1 = new class3();
$obj1->fun1()
?>