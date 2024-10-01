<?php
/*
Let's create an example where we use a factory pattern to generate different types of products (like Car, Bike, or Truck), but the client does not know which type of product it will receive.
*/

//encapsulate the object creation process. Instead of creating objects directly

interface vehicle{
    public function drive();
}

class bike implements vehicle{
    public function drive(){
        echo "Riding a Bike!";
    }
}

class car implements vehicle{
    public function drive(){
        echo "Drive a Car!";
    }
}

class truck implements vehicle{
    public function drive(){
        echo "Drive a Truck!";
    }
}

//create factory class

class vehicleFactory{
    public static function createVehicle($type){
        switch($type){
            case 'bike':
                return new bike();
            case 'car':
                return new car();
            case 'truck':
                return new truck();        
            default:
                throw new Exception('Vechicle type not recognized!');    
        }
    }
}

$vechicle = vehicleFactory::createVehicle('bike');
$vechicle->drive();
?>