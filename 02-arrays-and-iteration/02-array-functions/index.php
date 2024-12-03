<?php
$output = null;

$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

// count
count($ids);

// sort
sort($users);
sort($ids);

// rsort
rsort($users);
rsort($ids);

// array_push
array_push($users, 'user4');

// array_pop - remove the last element
array_pop($users);

// array_shift - remove the first element
array_shift($users);

// array_unshift
array_unshift($users, 'user1');

// array_slice - get a portion of an array
$ids2 = array_slice($ids, 2, 4);

// array_splice - remove a portion of an array
array_splice($ids, 2, 4);

// explode
$tags = 'tech,code,programming';
$tagsArr = explode(',', $tags);

// implode
$output = implode(',', $tagsArr);
print_r($output);
