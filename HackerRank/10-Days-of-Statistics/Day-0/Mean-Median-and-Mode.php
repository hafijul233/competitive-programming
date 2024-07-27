<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$n = intval(trim(fgets(STDIN)));
$numbers = explode(" ", trim(fgets(STDIN)));

$numbers = array_map(function($item) {
    return intval($item);
}, $numbers);

$mean = array_sum($numbers)/$n;

sort($numbers);

if($n%2 == 0) {
    $firstIndex = floor(($n-1)/2);
    $secondIndex = $firstIndex+1;
    
    $median = ($numbers[$firstIndex]+$numbers[$secondIndex])/2;
} else {
    $index = ($n-1)/2;
    $median = $numbers[$index];
}


if(array_unique($numbers) == $numbers) {
    $mode = $numbers[0];
} else {
    $freq = array_count_values($numbers);
    $mode = 0;
    $base = 1;
    foreach($freq as $number => $count) {
        if($base < $count) {
            $base = $count;
            $mode = $number;
        }
    }
}

printf("%0.1f\n%0.1f\n%0.1f", $mean, $median, $mode);
