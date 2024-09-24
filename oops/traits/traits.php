<?php 
// use for trait keyword
trait mytrait{
    public function myfun(){
        return 'my function is here';
    }
}

trait class1{
    public function function1(){
        return 'its a class1 : function1';
    }
}

class class2{
    use class1,mytrait;     // use keyword to use in class2
    public function function2(){
        return 'its a class2 : function2';
    }
}


class class3 extends class2{                          // not class1 in this class3
    public function function3(){
        return 'its a class3 : function3';
    }
}

class class4 extends class3{                         // not class1 in this class4
    public function function4(){
        return 'its a class4 : function4';
    }
}

$obj = new class2;
echo $obj->function1();
echo '<br>'.$obj->myfun();

$obj2 = new class4;
echo '<br>'.$obj2->function1();
echo '<br>'.$obj2->myfun();


?>