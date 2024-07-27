<?php

/*
 * Complete the 'weightedMean' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY X
 *  2. INTEGER_ARRAY W
 */

function weightedMean($X, $W) {
    $totalWeight = 0;
    $totalAvg = 0;
    
    array_walk($W, function($value, $key) use(&$totalWeight, &$totalAvg, $X){
       $totalWeight += $value;
       $totalAvg += ($value*$X[$key]);
    });

    $avg = $totalAvg/$totalWeight;
    
    printf("%0.1f", $avg);

}

$n = intval(trim(fgets(STDIN)));

$vals_temp = rtrim(fgets(STDIN));

$vals = array_map('intval', preg_split('/ /', $vals_temp, -1, PREG_SPLIT_NO_EMPTY));

$weights_temp = rtrim(fgets(STDIN));

$weights = array_map('intval', preg_split('/ /', $weights_temp, -1, PREG_SPLIT_NO_EMPTY));

weightedMean($vals, $weights);
