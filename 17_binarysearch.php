<?php

function binarySearch($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);

        // Check if target is present at mid
        if ($arr[$mid] == $target) {
            return $mid;
        }

        // If target is greater, ignore the left half
        if ($arr[$mid] < $target) {
            $left = $mid + 1;
        }

        // If target is smaller, ignore the right half
        else {
            $right = $mid - 1;
        }
    }

    // If target is not present in the array
    return -1;
}

// Example usage
$sortedArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$targetValue = 7;

$result = binarySearch($sortedArray, $targetValue);

if ($result != -1) {
    echo "Element found at index " . $result;
} else {
    echo "Element not found in the array";
}