# 🚀 PHP Array Functions

This repository contains a collection of useful PHP functions for manipulating arrays efficiently.

---

## 📌 Functions & Usage

### 🔢 `countOccurrences($array)`
Counts the occurrences of each value in an array and returns an associative array with values and their counts.

```php
function countOccurrences($array) {
    $occurrences = [];
    foreach ($array as $value) {
        $occurrences[$value] = ($occurrences[$value] ?? 0) + 1;
    }
    return $occurrences;
}
```

---

### 🔄 `reversearray($arr)`
Reverses the order of elements in an array and returns the reversed array.

```php
function reversearray($arr) {
    $reversed = [];
    $length = count($arr);
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed[] = $arr[$i];
    }
    return $reversed;
}

```

---

### 🚫 `duplicateremove($arr)`
Removes duplicate values from an array and returns a new array with unique elements.

```php
function duplicateremove($arr) {
    $uniqueArray = array_values(array_unique($arr)); // Remove duplicates and reindex
    return $uniqueArray;
}
```

---

### 🔗 `MergeArray($arr, $arr2)`
Merges two arrays into a single array and returns the merged result.

```php
function MergeArray($arr,$arr2){
    $mergedArray = array_merge($arr, $arr2);
    return $mergedArray;
}
```

---

### 📈 `Maxvalue($arr)`
Finds the maximum value in an array and returns the highest number.

```php
function Maxvalue($arr){
    $max = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}
```

---

### ➕ `sum($arr)`
Calculates the sum of all elements in an array and returns the total.

```php
function sum($arr){
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    return $sum;
}
```
