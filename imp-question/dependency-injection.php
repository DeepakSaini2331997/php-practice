<?php 
//

class main{
    public function getData(){
        return 'its a get data method in main class';
    }
}

class customer {
    public $main;
    public function __construct($main){
        // $main = new main();  // this is depended
        echo $main->getData();
    }
}
$main = new main;
$obj = new customer($main);
?>