<?php 
$num = [5,2,7,4,3,8,1,6,9,0];
echo '<pre>';
print_r($num);
for ($i=0;$i<count($num);$i++){
    for($j=0;$j<count($num)-1;$j++){
        if($num[$j]>$num[$j+1]){
            $temp = $num[$j+1];
            $num[$j+1] = $num[$j];
            $num[$j] = $temp;
        }
    }
}
echo '<pre>';
print_r($num);
?>