<?php

//The variables $x and $y are declared with values here. You can change the values to test the conditionals below.
$x = 0;
$y = 1;

//1. The '==' operator is called the comparison operator and compares two values.
if($x == $y) {
    echo "1a. X is equal to Y";
} else {
    echo "1b. X is not equal to Y";
}
echo "\n";
//2. The less than operator tests if the left value is less than the right value.
if($x < $y) {
    echo "2a. X is less than Y";
} else {
    echo "2b. X is greater than Y";
}
echo "\n";
//3. The greater than operator tests if the left value is greater than the right value.
if($x > $y) {
    echo "3a. X is greater than Y";
} else {
    echo "3b. X is less than Y";
}
echo "\n";
//4. The ! is the NOT operator in this case it is used with the equals operator to test if the values do not equal each other.
if($x != $y) {
    echo "4a. X does not equal Y";
} else {
    echo "4b. X equals Y";
}
echo "\n";



