<?php

$myArray = [1,2,3,4,5,6,7,8,9];
$myAssociativeArray = ["default_color"=>"white","favorite_color"=>"red","first_name"=>"John","last_name"=>"Smith"];

print_r($myArray);
print_r($myAssociativeArray);

print_r("The value where the index is 3: " . $myArray[3]);
print_r("\n");
print_r("The value where the index is 0: " . $myArray[0]);
print_r("\n");
print_r("The value where the index is default_color: " . $myAssociativeArray['default_color']);
print_r("\n");
print_r("The value where the index is first_name: " . $myAssociativeArray['first_name']);