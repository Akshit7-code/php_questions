<?php

function sum($arr){
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    return $sum;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "Original Array: ";
for ($i = 0; $i < 10; $i++) {
    echo $arr[$i] . ", ";
}
echo "<br>";
echo "Sum of Array Values: " . sum($arr) . "\n";