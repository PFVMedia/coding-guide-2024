<?php

// Function to calculate the factorial of a number
function calculateFactorial($n) {
    $result = 1;

    // Using a loop to multiply numbers from 1 to $n
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }

    return $result;
}

// Example: Calculate factorial of 5
$number = 5;
$factorial = calculateFactorial($number);

echo "Factorial of $number is: $factorial\n";
