<?php
$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

// implicit conversion
$result = $number1 + $number2;
$result = $number1 + $number3;
$result = $number1 . $number2;
$result = $number1 + $bool1;
$result = $number1 + $null;

// explicit conversion
$result = (string)$number1;
$result = (int)$number2;
$result = (int)$number3;
$result = (float)$number1;
$result = (float)$number2;
$result = (float)$number3;
$result = (string)$number1;
$result = (string)$number2;
$result = (string)$number3;
$result = (string)$bool1;

var_dump($result);
