<?php

// A lambda in PHP is an anonymous function that can be stored as a variable
$lambda = function ($a, $b) {
    echo $a + $b;
};
echo gettype($lambda); // object
echo (int)is_callable($lambda); // 1
echo get_class($lambda); // Closure class - class to represent anonymous functions.

