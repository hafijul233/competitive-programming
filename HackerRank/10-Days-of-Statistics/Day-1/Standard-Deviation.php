<?php

/*
 * Complete the 'stdDev' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function stdDev($arr, $length) {
    
    $mean = array_sum($arr)/$length;
    
    $sum = 0;
    
    for($i=0; $i<$length; $i++) {
        $temp = $mean - $arr[$i];
        $sum += ($temp*$temp);
    }
    
    $sd = sqrt(($sum/$length));
    
    printf("%0.1f", $sd);
}

$n = intval(trim(fgets(STDIN)));

$vals_temp = rtrim(fgets(STDIN));

$vals = array_map('intval', preg_split('/ /', $vals_temp, -1, PREG_SPLIT_NO_EMPTY));

stdDev($vals, $n);
