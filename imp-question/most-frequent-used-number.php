<?php
function mostFrequent($arr, $n, $k)
{
    // Frequency map to store counts of each element
    $frequency_map = [];

    // Populate the frequency map
    for ($i = 0; $i < $n; $i++) {
        if (!isset($frequency_map[$arr[$i]])) {
            $frequency_map[$arr[$i]] = 1;
        } else {
            $frequency_map[$arr[$i]]++;
        }
    }

    //print_r($frequency_map); die;

    // Sort the frequency map by value (frequency) in descending order
    arsort($frequency_map);

    // Retrieve the top 'k' most frequent elements
    $frequent_elements = array_slice(array_keys($frequency_map), 0, $k);

    return $frequent_elements;
}

// Driver Code

    $arr = array(40, 50, 30, 40, 50, 30, 30);
    $n = count($arr);
    $result = mostFrequent($arr, $n,2);
    echo '<pre>'; print_r($result);
 

?>