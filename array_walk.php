<?php

$arr = [
    'a' => 'apple',
    'b' => 'banana',
    'c' => 'cherry'
];
/**
 * The array_walk() function applies a user callable to every element in an array. It takes
two parameters—a reference to the array and the callable.
 */
array_walk($arr, function (&$value, $key){
    $value = strtoupper($value);
});
print_r($arr);