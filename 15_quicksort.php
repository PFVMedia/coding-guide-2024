<?php
 function quickSort($arr) {
 $length = count($arr);
 if ($length <= 1) {
 return $arr;
 } else {
 $pivot = $arr[0];
 $left = $right = array();
 for ($i = 1; $i < $length; $i++) {
 if ($arr[$i] < $pivot) {
 $left[] = $arr[$i];
 } else {
 $right[] = $arr[$i];
 }
 }
 return array_merge(quickSort($left), array($pivot), quickSort($right));
 }
 }
 
 $arr = [64, 34, 25, 12, 22, 11, 90];
 $sortedArray = quickSort($arr);
 print_r($sortedArray);
 ?>