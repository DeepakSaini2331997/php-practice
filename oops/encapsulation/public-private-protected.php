<?php 
/*
public A public property or method can be accessed from anywhere, whether inside or outside of the class.

Private A private property or method can be accessed only within the class where it is declared. It cannot be accessed from outside the class or by any subclasses (child classes).

Protected A protected property or method can be accessed within the class itself and its subclasses (child classes). It cannot be accessed from outside the class.
*/

class class1{
    public $name;
    private $email;
    protected $salary;

    public function __construct(){
        $this->name;
        $this->email;
        $this->salary;
    }

    public function setData($name,$email,$salary){
        $this->name = $name;
        $this->email = $email;
        $this->salary = $salary;
    }

    public function getData(){
        return 'Nmae:'.$this->name.' Email:'.$this->email.' Salary:'.$this->salary;
    }

}

class class2 extends class1{
    // if we remove comment from child class fuction getData than we get a error because email is protected can not we use outside the class
    
    /*
    public function getData(){
        return 'Nmae:'.$this->name.' Email:'.$this->email.' Salary:'.$this->salary;
    }
    */
}

$obj = new class2;
$obj->setData('Deepak','deepak@gmail.com','10000');
echo $obj->getData();

?>