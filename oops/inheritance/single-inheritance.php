<?php 
class class1{
    private $name;
    public function __construct($name){
        echo 'its a parent construct function';
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }
}

class class2 extends class1{
    private $email;
    // public function __construct($email){
    //     echo 'its a child construct function';
    //     $this->email = $email;
    // }

    // if we call the constructor in child class than parnet class constructor not call, default call child constructor
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}

$obj = new class2('Deepak');
echo '<br>'.$obj->getName();
$obj->setName('Ram');
echo '<br>'.$obj->getName();

$obj->setEmail('deepak@gmail.com');
echo '<br>'.$obj->getEmail();

?>