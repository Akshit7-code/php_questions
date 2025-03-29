<?php

function reversearray($arr) {
    $reversed = [];
    $length = count($arr);
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed[] = $arr[$i];
    }
    return $reversed;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "Original Array: ";
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . ", ";
}

echo "<br>Reversed Array: ";
$reversedArray = reversearray($arr);
for ($i = 0; $i < count($reversedArray); $i++) {
    echo $reversedArray[$i] . ", ";
}
