<?php 
function findVowels($word){
    $vowels = ['a','e','i','o','u'];
    if(in_array($word,$vowels)){
        echo $word .' vowels' . '<br>';
    }else{
        echo $word .' not vowels'. '<br>';
    }
}

$string = "i am came back home tommorrow.";

for($i=0;$i<=strlen($string);$i++){
    if($string[$i] !=null){
        findVowels(strtolower($string[$i]));
    }
}

?>