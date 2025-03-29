<?php
function countOccurrences($array) {
    $occurrences = [];

    foreach ($array as $value) {
        if (isset($occurrences[$value])) {
            $occurrences[$value]++;
        } else {
            $occurrences[$value] = 1;
        }
    }
    return $occurrences;
}

$arr = [1, 6, 6, 3, 1, 8, 8, 8];
echo "Original Array: ";
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . ", ";
}

echo "<br>";

$result = countOccurrences($arr);
print_r($result); 
?>