<?php
// find repeat number and count from this array
$nums = [1,3,3,4,6,7,8,3,5,4,1,8,10,9,10,11,13,18,14,17,18,20];
$repeatNumber = [];
for($i=0;$i<count($nums);$i++){
    $found = false;
    for($j=0;$j<count($repeatNumber);$j++){
        if($repeatNumber[$j]['val']== $nums[$i]){
            $repeatNumber[$j]['val'] =$nums[$i];
            $repeatNumber[$j]['count']++;
            $found = true;
            break;
        }
    }

    if(!$found){
        $repeatNumber[$j]['val'] =$nums[$i];
        $repeatNumber[$j]['count']=1;
    }
}

echo '<pre>';print_r($repeatNumber);

