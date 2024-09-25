<?php 
// using of recursive function we print count 1 to 100
function countNumber($num){
    echo $num . '<br>';
    $num++;
    if($num<=100){
        countNumber($num);
    }
}
countNumber(1);
?>