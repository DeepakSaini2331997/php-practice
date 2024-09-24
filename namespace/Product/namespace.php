<?php 
namespace Product1;
const NUM = 40;

function showData(){
    echo 'this product1 namespace.';
}

class class1{
    public function display(){
        echo 'this is class function from product1';
    }
}

namespace Product2;
const NUM = 20;

function showData(){
    echo 'this product2 namespace';
}

class class1{
    public function display(){
        echo 'this is class function from product2';
    }
}

// call first namespace

echo \Product1\NUM;
\Product1\showData();
$obj = new \Product1\class1;
$obj->display();
echo '<br>';

// call second namespace

echo \Product2\NUM;
\Product2\showData();
$obj = new \Product2\class1;
$obj->display();
echo '<br>';


?>