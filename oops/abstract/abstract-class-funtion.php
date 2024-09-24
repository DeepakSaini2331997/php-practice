<?php 
//Abstract class contain atleast 1 abstract function
//Abstract function:must decalre but not implement
//Abstract class could not create object   (why use:when we not create object of class than we use abstract class)
//Abstract class, child class must contain abstract function

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
    public function getData(){
        return $this->name;
    }
}

$obj = new class2;
$obj->setData('deepak');
echo $obj->getData();
?>