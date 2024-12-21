<?php
// Ternary operator
$color = isset($favoriteColor) ? $favoriteColor : 'blue';

// Null coalescing operator
$color = $favoriteColor ?? 'blue';

echo $color;
