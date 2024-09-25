<?php 
class employ{
    public function setEmpName($name){
        $this->name = $name;
    }

    public function getEmpName(){
        return $this->name;
    }
}

class salary{
    public function setEmpSalary($salary){
        $this->salary = $salary;
    }

    public function getEmpSalary(){
        return $this->salary;
    }
}

$emp = new employ();
$emp->setEmpName('Deepak');
echo $emp->getEmpName();

$salary = new salary();
$salary->setEmpSalary('5000');
echo $salary->getEmpSalary();
?>