<?php 
// 1+0=1
// 1+1=2
// 2+1=3
// 3+2=5
// 5+3=8
// 8+5=13
// 13+8=21
$num1 = 1;
$num2 = 0;
for ($i=0;$i<10;$i++){
    $sum = $num1+$num2;
    echo "$num1+$num2"."=",$sum.'<BR>';
    $num2 = $num1;
    $num1 = $sum;
}

?>