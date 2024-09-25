<?php 
$num = [3,7,2,5,1,8,4,9,6];
for ($i=0;$i<count($num);$i++){
    for ($j=0;$j<count($num)-1;$j++){  
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