<?php

/*
 * Complete the 'quartiles' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function quartiles($arr, $length) {
    
    sort($arr);

    $middle = floor($length/2);

    $isEven = $length%2 == 0;

    $q1 = array_slice($arr, 0, $middle);
    
    $q2 = $arr;
    
    $q3 = $isEven 
    ? array_slice($arr, $middle, $length)
    : array_slice($arr, $middle+1, $length);
    
    return [avg($q1), avg($q2), avg($q3)];
}

function avg(array $numbers = []) {
        
    $n = count($numbers);
      
    if($n%2 == 0) {
        $firstIndex = floor($n/2)-1;
        $secondIndex = $firstIndex+1;
        
        $median = ($numbers[$firstIndex]+$numbers[$secondIndex])/2;
    } else {
        $index = floor(($n-1)/2);
        $median = $numbers[$index];
    }
    
    return $median;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$data_temp = rtrim(fgets(STDIN));

$data = array_map('intval', preg_split('/ /', $data_temp, -1, PREG_SPLIT_NO_EMPTY));

$res = quartiles($data, $n);

fwrite($fptr, implode("\n", $res) . "\n");

fclose($fptr);
