<?PHP
require('India/laptop.php');
require('Nepal/laptop.php');
require('laptop.php');

// Access using namespace

echo Product\NUM;
Product\showData();
$obj = new Product\class1;
$obj->display();
echo '<br>';


echo Product\India\NUM;
Product\India\showData();
$obj1 = new Product\India\class1;
$obj1->display();
echo '<br>';

echo Product\Nepal\NUM;
Product\Nepal\showData();
$obj2 = new Product\Nepal\class1;
$obj2->display();
echo '<br>';

?>