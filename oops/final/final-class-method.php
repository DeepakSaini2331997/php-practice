<?php 
//A final class cannot be extended by any other class.
//A final method cannot be overridden in a subclass, but the class containing the final method can still be extended.

final class MyClass {
    public function myMethod() {
        echo "This is a method inside a final class.";
    }
}

// This will cause an error because a final class cannot be extended.
/*
class ChildClass extends MyClass {  
    // Error: Cannot inherit from final class MyClass
}
*/

$fobj = new MyClass;
echo $fobj->myMethod();

class simple{
    static public function myFun(){
        return 'my function in simple class call';
    }

    public function normal(){
        return 'normal function in simple class call';
    }
}

class child extends simple{
    // override normal function
    public function normal(){
        return 'normal function in child class call';
    }

    // show error while override because myFun is statis
    /*
    public function myFun(){
        return 'my function in child class call';
    }
    */   
}

$obj = new child;
echo $obj->myFun();
echo "<br>".$obj->normal();


?>