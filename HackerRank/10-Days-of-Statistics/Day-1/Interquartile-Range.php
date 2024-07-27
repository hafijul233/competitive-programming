<?php

/*
 * Complete the 'interQuartile' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY values
 *  2. INTEGER_ARRAY freqs
 */

function interQuartile($values, $freqs) {
    $arr = [];
    $length = 0;
     
    foreach($values as $index => $value) {
        for($i=1; $i <= $freqs[$index]; $i++) {
            $arr[]=$value;
            $length++;
        }
    }
    
    unset($values, $freqs);
    
    sort($arr);
    
    $middle = floor($length/2);

    $isEven = $length%2 == 0;

    $q1 = array_slice($arr, 0, $middle);
    
    $q3 = $isEven 
    ? array_slice($arr, $middle, $length)
    : array_slice($arr, $middle+1, $length);
    
    unset($arr);
    
    $gap =  median($q3)- median($q1);
    
    printf("%0.1f", $gap);
}

function median(array $numbers = []) {
        
    $n = count($numbers);
      
    if($n%2 == 0) {
        $firstIndex = floor(($n-1)/2);
        $secondIndex = $firstIndex+1;
        
        $median = ($numbers[$firstIndex]+$numbers[$secondIndex])/2;
    } else {
        $index = ($n-1)/2;
        $median = $numbers[$index];
    }
    
    return $median;
}

$n = intval(trim(fgets(STDIN)));

$val_temp = rtrim(fgets(STDIN));

$val = array_map('intval', preg_split('/ /', $val_temp, -1, PREG_SPLIT_NO_EMPTY));

$freq_temp = rtrim(fgets(STDIN));

$freq = array_map('intval', preg_split('/ /', $freq_temp, -1, PREG_SPLIT_NO_EMPTY));

interQuartile($val, $freq);