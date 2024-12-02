<?php
$output = null;

// Get year
$output = date('Y');

// use a different date with a timestamp
$output = date('Y', 1036345500);

// Year for a different date
$output = date('Y', strtotime('2023-01-01'));

// Get month
$output = date('F m');

// Get day
$output = date('d');

// Get day of the week
$output = date('D');

// Get hour
$output = date('H');

// Get minute
$output = date('i');

// Get second
$output = date('s');

// Get Am or Pm
$output = date('a');

// Get full date and time
$output = date('Y-m-d H:i:s a');


echo $output;
