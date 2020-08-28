<?php

echo "2 binaray number is: " . decbin(2) . "\n"; // 10
echo "-2 binary number is " . decbin(-2) . "\n"; // 1111111111111111111111111111111111111111111111111111111111111110
echo PHP_INT_MAX . "\n"; // 9223372036854775807
// if you want to use something bigger than PHP_INT_MAX, you have to use strings
// (or some library like bcmath) to come around this.

/**
 * As of PHP 7.4.0, integer literals may contain underscores (_) between digits, for better readability of literals.
 * These underscores are removed by PHP's scanner.
 */
$a = 1_234_567; // decimal number (as of PHP 7.4.0)

echo $a;