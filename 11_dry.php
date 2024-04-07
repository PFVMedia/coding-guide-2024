<?php

// Not DRY - Duplicated code
function calculateAreaOfRectangle($length, $width) {
    return $length * $width;
}

function calculateAreaOfSquare($side) {
    return $side * $side;
}

// DRY - Reusable code
function calculateArea($lengthOrSide1, $widthOrSide2 = null) {
    if ($widthOrSide2 === null) {
        // Calculate area of a square
        return $lengthOrSide1 * $lengthOrSide1;
    } else {
        // Calculate area of a rectangle
        return $lengthOrSide1 * $widthOrSide2;
    }
}
