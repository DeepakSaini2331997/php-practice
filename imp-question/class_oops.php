<?php 
class classRoom{
    public $name;
    public $className;
    function __construct($name,$className){
        echo 'this is constructor'. '<br>';
        $this->name = $name;
        $this->className = $className;
    }
    function getName(){
       echo  $this->name . '<br>';
       echo $this->className;
    }
}
$obj = new classRoom('Deepak','6th');
$obj->getName();
?>