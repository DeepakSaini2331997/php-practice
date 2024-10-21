<?php 
// find number missing number from this array from 1 to 20
$nums = [1,3,4,6,7,8,9,10,11,13,14,17,18,20];
$missingNumber = [];

for($i=1;$i<=20;$i++){
    $found = false;
    foreach($nums as $val){
        if($val==$i){
            $found = true;
            break;
        }
    }

    if(!$found){
        $missingNumber[] = $i; 
    }
}

echo '<pre>'; print_r($missingNumber);

?>