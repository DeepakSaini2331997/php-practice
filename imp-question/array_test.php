<?php
$arr = [10,5,10,15];
function solution($R, $V) {
    // Implement your solution here
    $count = count($V);
    $aAccountBal = $V[0];
    $bAccountBal = $V[1];
    for($i=0;$i<=$count;$i++){
      if($aAccountBal>0){
        $aAccountBal = $aAccountBal-$V[$i];
        $bAccountBal = $bAccountBal+$V[$i];
        echo $aAccountBal . '----' .$bAccountBal . '<br>';

      }else{

        $aAccountBal = $aAccountBal+$V[$i];
        $bAccountBal = $bAccountBal-$V[$i];
        echo $aAccountBal . '--tt--' .$bAccountBal . '<br>';

      }
    }
    return [$aAccountBal,$bAccountBal];
    
}

$result = solution('ABAB',$arr);
print_r($result);