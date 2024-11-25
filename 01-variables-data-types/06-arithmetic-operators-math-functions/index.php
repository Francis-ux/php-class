<?php
$output = null;

/*
Arithmetic Operators

+ addition
- subtraction
* multiplication
/ division
% modulus

*/

$num1 = 20;
$num2 = 10;

// Basic arithmetic
$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;

// Appending Assignment Operators
$num3 = 10;
$num3 += 20; // $num3 = $num3 + 20
$num3 -= 5;
$num3 *= 2;
$num3 /= 2;

$output = $num3;

// Math Operators
// rand() - Returns a random number
$output = rand();
$output = rand(1, 10);

// round() - Rounds a number to the nearest integer
$output = round(4.5);

// ceil() - Rounds a number up to the nearest integer
$output = ceil(4.3);

// floor() - Rounds a number down to the nearest integer
$output = floor(4.7);

// Assignment
// sqrt();
// pi();
// abs(-4.7);
// sqrt();
// max();
// min();
// number_format();


echo $output;
