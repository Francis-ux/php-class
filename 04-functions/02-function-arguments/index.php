<?php
// Function with arguments

function add($a, $b)
{
    return $a + $b;
}

// Default Name Arguments

function sayHello($name = 'World')
{
    echo "Hello $name";
}

sayHello('John Doe');
