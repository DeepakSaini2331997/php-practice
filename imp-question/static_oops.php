<?php 
//not required to create object while Static function, Static variable in class
class student{
    static $rollNo;
    static function setRollNo(){
        self::$rollNo = 20;
    }
    static function getRollNo(){
        return self::$rollNo;
    }
} 

student::setRollNo();
echo student::getRollNo();
?>