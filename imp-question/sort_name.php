<?php 
$arr = [
    'deepak' => 48,
    'ram'   => 45,
    'sohan' => 50,
    'mohan' => 40
];

function sorting($arr){
    $values = array_values($arr);
    $keys = array_keys($arr);
    $len = count($arr);
    for($i=0;$i<$len;$i++){
        for($j=0;$j<$len-1;$j++){
            if($values[$j]>$values[$j+1]){
                $tempVal = $values[$j];
                $values[$j] = $values[$j+1];
                $values[$j+1] = $tempVal;

                $tempKey = $keys[$j];
                $keys[$j] = $keys[$j+1];
                $keys[$j+1] = $tempKey;
            }
        }
    }

    $arr = array_combine($keys,$values);
    echo '<pre>';
    print_r($arr);

}

echo '<pre>';

print_r($arr);

sorting($arr);

//print_r($arr);

?>