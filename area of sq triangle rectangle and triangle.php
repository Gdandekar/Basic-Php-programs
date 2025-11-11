<?php
// Function to calculate area of a square
function areaOfSquare($side) {
    return $side * $side;
}

// Function to calculate area of a rectangle
function areaOfRectangle($length, $width) {
    return $length * $width;
}

// Function to calculate area of a triangle
function areaOfTriangle($base, $height) {
    return 0.5 * $base * $height;
}

// Function to calculate area of a circle
function areaOfCircle($radius) {
    return pi() * $radius * $radius;
}

// Example values
$side = 5;
$length = 10;
$width = 6;
$base = 8;
$height = 4;
$radius = 7;

// Display results
echo "Area of Square (side = $side): " . areaOfSquare($side) . "<br>";
echo "Area of Rectangle (length = $length, width = $width): " . areaOfRectangle($length, $width) . "<br>";
echo "Area of Triangle (base = $base, height = $height): " . areaOfTriangle($base, $height) . "<br>";
echo "Area of Circle (radius = $radius): " . areaOfCircle($radius) . "<br>";
?>
