<?php

/*
PHP DATA TYPES

- String
- Integer
- Float
- Boolean
- Array
- Object
- Null
- Resource

*/
// String
$name = 'John Doe';
$name2 = 'Micheal Doe';
var_dump($name); // Will show the value and type
echo gettype($name); // Will show the type
echo "\n"; // New line

// Integer
$age = 35;
var_dump($age);
echo "\n";

// Float
$rating = 4.5;
var_dump($rating);
echo "\n";

// Boolean
$isLoaded = true;
var_dump($isLoaded);
echo "\n";

// Array
$friends = array('John Doe', 'Micheal Doe', 'Jane Doe');
var_dump($friends);
// will show the value and type for all elements
echo gettype($friends);
echo "\n";

// Null
$car = null;
var_dump($car);
echo "\n";

// Resource
$file = fopen('test.txt', 'r');
var_dump($file);
echo gettype($file);
echo "\n";
