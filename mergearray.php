<?php

function MergeArray($arr,$arr2){
    $mergedArray = array_merge($arr, $arr2);
    return $mergedArray;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr2 = [11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
echo "Original Array first: ";
for ($i = 0; $i < 10; $i++) {
    echo $arr[$i] . ", ";
}
echo "<br>";
echo "Original Array second: ";
for ($i = 0; $i < 10; $i++) {
    echo $arr2[$i] . ", ";
}

echo "<br>";
echo "Merged Array: ";
for ($i = 0; $i < 20; $i++) {
    echo MergeArray($arr, $arr2)[$i] . ", ";
}