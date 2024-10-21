<?php 
//sum of continous number  O(n^2)
function subarraySum($nums, $k) {
   $count = 0;

   for($i=0;$i<count($nums);$i++){
        $sum = 0;
        for($j=$i;$j<count($nums);$j++){
            $sum = $sum+$nums[$j];
            if($sum==$k){
                $count++;
            }
        }
   }
    return $count;
}
$nums = [1, 2, 3, -3, 6];
$k = 6;
echo subarraySum($nums, $k);  // Output: 3
// [1,2,3]
// [3,-3,6]
// [6]

function subarraySumAnother($nums,$k){
    $count = 0;
    $sum = 0;
    $hasmap[0] = 1; // sum 0 is occure 1 
    foreach($nums as $num){
        $sum += $num;

        if(isset($hasmap[$sum-$k])){
            $count += $hasmap[$sum-$k];
        }

        if(isset($hasmap[$sum])){
            $hasmap[$sum]++;
        }else{
            $hasmap[$sum] = 1;
        }
    } 

    return $count;

}
echo '<br>'.'O(n) '.'<br>'.subarraySumAnother($nums, $k);  // Output: 3

?>