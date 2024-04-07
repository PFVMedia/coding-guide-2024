<?php
function linearSearch($arr, $target) {
 $n = count($arr);
 
 for ($i = 0; $i < $n; $i++) {
 if ($arr[$i] === $target) {
 return $i; // Element found, return its index
 }
 }
 
 return -1; // Element not found in the array
}
 
// Example usage:
$arr = [2, 4, 7, 1, 9, 12, 6, 8];
$target = 9;
 
$index = linearSearch($arr, $target);
 
if ($index !== -1) {
 echo "Element $target found at index $index.";
} else {
 echo "Element $target not found in the array.";
}
?>