<?php

$fruits = [
    ['Apple', 'Banana', 'Orange'],
    ['Mango', 'Strawberry', 'Pineapple'],
    ['Pear', 'Apricot', 'Plum']
];

foreach ($fruits as $fruit) {
    foreach ($fruit as $f) {
        echo $f . "\n";
    }
}
