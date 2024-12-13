<?php
$names = ['John', 'Jack', 'jill', 'jane'];

$users = [
    ['id' => 1, 'name' => 'John'],
    ['id' => 2, 'name' => 'Jack'],
    ['id' => 3, 'name' => 'jill'],
    ['id' => 4, 'name' => 'jane'],
];

foreach ($users as $user) {
    echo $user['name'] . '<br>';
}

foreach ($names as $name) {
    echo $name . '<br>';
}
