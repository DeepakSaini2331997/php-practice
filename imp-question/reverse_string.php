<?php 
$string = "hello";
$str = '';
$len = strlen($string);
for($i=$len-1;$i>=0;$i--){
    $str.=$string[$i];
}
if($str==$string){
    echo 'Palindrom';
}else{
    echo 'Not Palindrom';
}
?>