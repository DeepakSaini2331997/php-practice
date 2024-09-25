<?php 
// final method cannot be override in child class.
// final class can not be inheritance
class father{
    function display(){
        echo 'i am over ride because iam not finat method';
    }
    final function show(){                  // this function cannot be override
        echo 'this function cannot be over ride in child class';
    }
}

class son extends father{
    function display(){
        echo 'function overrided';
    }
}

$obj = new son();
$obj->display();

final class mother{                   // this class can not be inherit
    function display(){
        echo 'final class with display function';
    }
}

$obj1 = new mother();
$obj1->display();
?>