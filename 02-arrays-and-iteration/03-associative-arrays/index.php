<?php
$output = null;

$user = [
    'name' => 'John Doe',
    'email' => 'tB5oF@example.com',
    'password' => '123456',
    'hobbies' => ['Tennis', 'Video Games']
];

// Accessing elements
$output = $user['name'];
$output = $user['email'];
$output = $user['password'];
$output = $user['hobbies'][1];

echo $output;
