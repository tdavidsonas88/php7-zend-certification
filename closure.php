<?php

/**
 * A closure in PHP is an anonymous function that encapsulates variables so they can be used once
 * their original references are out of scope
 */
$string = "Hello World";
$closure = function() use ($string) {
    echo $string;
};
$closure();
