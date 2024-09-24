<?php 
class class1{
    public function function1(){
        return 'its a class1 : function1';
    }
}

class class2 extends class1{
    public function function2(){
        return 'its a class2 : function2';
    }
}


class class3 extends class2{
    public function function3(){
        return 'its a class3 : function3';
    }
}

class class4 extends class3{
    public function function4(){
        return 'its a class4 : function4';
    }
}

$obj = new class4;
echo $obj->function1();
echo '<br>'.$obj->function2();
echo '<br>'.$obj->function3();
echo '<br>'.$obj->function4();

//cos if we need inheritance only class3 than by default we inheritance class2,class1 than complexity is code.Resolve this we use traits
//multiple inheritance not possible in php inheritance so that we use interface
?>