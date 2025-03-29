<?php

function duplicateremove($arr) {
    $uniqueArray = array_values(array_unique($arr)); // Remove duplicates and reindex
    return $uniqueArray;
}

$arr = [1, 2, 2, 4, 5, 5, 7, 2, 9, 10];
echo "Original Array: ";
for ($i = 0; $i < 10; $i++) {
    echo $arr[$i] . ", ";
}

echo "<br>Array after removing duplicates: ";
$newArray = duplicateremove($arr);
for ($i = 0; $i < count($newArray); $i++) {
    echo $newArray[$i] . ", ";
}
