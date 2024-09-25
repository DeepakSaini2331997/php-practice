<?php
$num = 12346;
$len = strlen($num);
for($i=0; $i<$len; $i++){
    $rem = $num%10;
    $num = $num/10;
    echo $rem;
}
?>