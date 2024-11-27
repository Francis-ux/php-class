<?php
$output = null;
$string = 'Hello World';

// strlen
$output = strlen($string);

// str_word_count
$output = str_word_count($string);

// strpos
$output = strpos($string, 'World');

// get specific character by index
$output = $string[1];

// substr
$output = substr($string, 0, 5);

// str_replace
$output = str_replace('World', 'Everyone', $string);

// strtolower
$output = strtolower($string);

// strtoupper
$output = strtoupper($string);

// ucwords
$output = ucwords($string);

// trim
$output = trim('     Hello World    ');


echo $output;
