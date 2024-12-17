<?php
$age = 10;

// If Statement
// if ($age >= 21) {
//     echo "You are old enough to drink in the US";
// }

// If-Else Statement
// if ($age >= 21) {
//     echo "You are old enough to drink in the US";
// } else {
//     echo "You are not old enough to drink in the US";
// }

// If-Else-If Statement
// if ($age >= 21) {
//     echo "You are old enough to drink in the US";
// } elseif ($age >= 18) {
//     echo "You are old enough to vote";
// } else {
//     echo "You are not old enough to do anything";
// }


// Nested If Statement
if ($age >= 21) {
    echo "You are old enough to drink in the US";
} else {
    if ($age >= 18) {
        echo "You are old enough to vote";
    } else {
        echo "You are not old enough to do anything";
    }
}
