<?php

$dayOfWeek = date('l');

switch ($dayOfWeek) {
    case 'Monday':
        $message = 'Monday Blues';
        $color = 'blue';
        break;
    case 'Tuesday':
        $message = 'At Least it is Tuesday';
        $color = 'green';
        break;
    case 'Wednesday':
        $message = 'It is Wednesday';
        $color = 'red';
        break;
    case 'Thursday':
        $message = 'It is Thursday';
        $color = 'yellow';
        break;
    case 'Friday':
        $message = 'It is Friday';
        $color = 'blue';
        break;
    case 'Saturday':
        $message = 'It is Saturday';
        $color = 'green';
        break;
    case 'Sunday':
        $message = 'It is Sunday';
        $color = 'red';
        break;
    default:
        $message = 'It is not a day of the week';
        $color = 'black';
        break;
}

echo $message . "\n";
echo $color . "\n";
