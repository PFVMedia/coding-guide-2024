<?php

// Imperative approach
function sumOfSquares($numbers) {
    $result = 0;
    foreach ($numbers as $number) {
        $result += $number * $number;
    }
    return $result;
}

// Example usage
$numbers = [1, 2, 3, 4, 5];
$result = sumOfSquares($numbers);
echo "Sum of squares(imperative): $result\n";



// Declarative approach using array_map and array_sum
$numbers = [1, 2, 3, 4, 5];
$result = array_sum(array_map(function ($number) {
    return $number * $number;
}, $numbers));

echo "Sum of squares(declarative): $result\n";
