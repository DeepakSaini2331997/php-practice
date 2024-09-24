<?php 
interface class1{
    public function tst();
}

interface class2{
    public function tst2();
}

// same tst() and tst2() function work as different ways in class3 and class4

class class3 implements class1,class2{
    public function tst(){
        return 'Return Data According to class3:tst';
    }
    
    public function tst2(){
        return 'Return Data According to class3:tst2';
    }
}

class class4 implements class1,class2{
    public function tst(){
        return 'Return Data According to class4:tst';
    }
    
    public function tst2(){
        return 'Return Data According to class4:tst2';

    }
}

$obj = new class3;
echo $obj->tst();
echo '<br>'.$obj->tst2();

$obj2 = new class4;
echo $obj2->tst();
echo '<br>'.$obj2->tst2();
?>