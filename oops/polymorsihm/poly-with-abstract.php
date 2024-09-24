<?php
// same function work differently in polymorphishm
abstract class class1{
    protected $name;
    public function __construct(){
        $this->name;
    }
    abstract function getData();
    function setData($name){
        $this->name = $name;
    }
}

class class2 extends class1{
    public function getData(){                               // getData return dynamic name
        return $this->name;
    }
}

class class3 extends class1{
    public function getData(){                               // getData return static data
        return ' its return only static data';
    }
}

$obj = new class2;
$obj->setData('ram');
echo $obj->getData();

$obj2 = new class3;
echo $obj2->getData();

?>