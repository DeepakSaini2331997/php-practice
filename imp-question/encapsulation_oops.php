<?php 
class testing{
    public $num;
    protected $val;
    private $string;
    function __construct(){
        $this->num = 10;
        $this->val = 20;
    }

    public function test2(){
        echo "public function";
    }

    public function getVal(){
        return $this->val;
    }

    public function getString(){
        return $this->string ='this is private function';
    }
}

class child extends testing{
    public function getChildVal(){
        return $this->val;
    }
}

$obj = new testing();
echo $obj->num;
echo '<br>';
echo $obj->num =14;
echo '<br>';
//echo $obj->val;
echo $obj->getVal();
echo '<br>';
echo $obj->getString();
echo '<br>';
//echo $obj->string='private function not access';
$obj->test2();
echo '<br>';
$obj2 = new child();
echo $obj2->getChildVal();
?>