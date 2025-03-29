<?php

function Maxvalue($arr){
    $max = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "Original Array: ";
for ($i = 0; $i < 10; $i++) {
    echo $arr[$i] . ", ";
}
echo "<br>";
echo "Max Value of Array: " . Maxvalue($arr) . "\n";
?>