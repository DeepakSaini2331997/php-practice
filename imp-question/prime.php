<?php 
    function checkPrimeOrNot ($number){
        if($number == 1){
            return 0;
        }
        for ($i=2; $i<= $number/2 ; $i++){
            if($number % $i == 0){
                return 0;
            }
        }
        return 1;
    }
   
    for($number=50;$number<=100;$number++){
        $flag = checkPrimeOrNot($number);
        if($flag==1){
            echo $number.' prime ' .'<br>';
        }else{
            echo $number.' not prime' . '<br>';
        }
    }
   
?>