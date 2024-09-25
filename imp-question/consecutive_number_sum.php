<?php 
$arr = [1,2,5,3,4,9,8,7,6] ;
$sum = 8;
function sumoFConsective($arr,$sum){
    for($i=0;$i<count($arr)-2;$i++){
        $currentSum = $arr[$i]+$arr[$i+1]+$arr[$i+2];
        if($currentSum == $sum){
            return [$arr[$i],$arr[$i+1],$arr[$i+2]];
        }
        return null;
    }
}

$result = sumoFConsective($arr,$sum);
if($result !=null){
    echo 'Number is'. implode(',',$result);
}
?>