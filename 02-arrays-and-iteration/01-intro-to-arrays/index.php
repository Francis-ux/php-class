<?php
$names = array('John', 'Jack', 'jill', 'jane');
$numbers = ['a' => 1, 2, 3, 4, 5];

// Add element to array
$numbers[] = 100;

// Remove element from array
unset($names[1]);

// Get array values
$numbers = array_values($numbers);

print_r($names);
print_r($numbers);
