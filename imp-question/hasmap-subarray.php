<?php 
function subarraySum($nums, $k) {
    $count = 0;  // To store the total number of subarrays whose sum equals k
    $cumulativeSum = 0;  // To keep track of the cumulative sum
    $hashmap = [];  // To store the cumulative sum frequency
    $hashmap[0] = 1;  // Initialize the hashmap with sum 0 occurring once

    // Iterate over the array
    foreach ($nums as $num) {
        // Update the cumulative sum
        $cumulativeSum += $num;
        
        // Check if cumulativeSum - k exists in the hashmap
        if (isset($hashmap[$cumulativeSum - $k])) {
            $count += $hashmap[$cumulativeSum - $k];  // Add the number of times this difference has occurred
        }
        //print_r($hashmap). '<br>';
        // Add/update the cumulative sum in the hashmap
        if (isset($hashmap[$cumulativeSum])) {
            $hashmap[$cumulativeSum]++;
        } else {
            $hashmap[$cumulativeSum] = 1;
        }
    }

    return $count;
    //echo '<pre>';print_r($hashmap);
}
$nums = [1, 1, 1];
$k = 2;
echo subarraySum($nums, $k);  // Output: 2
?>