<?php 
$arr = [3, 8, 1, 6, 2, 8, 4, 7];
$maxValue = $arr[0];
$minValue = $arr[0];
for($i=1;$i<count($arr);$i++){
    if($arr[$i]>$maxValue){
        $maxValue = $arr[$i];
    }
    if($arr[$i]<$minValue){
        $minValue = $arr[$i];
    }
}
echo 'Max-:'.$maxValue .' Min-:'.$minValue;
?>