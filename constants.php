<?php

// Constants can be defined using define function or const keyword

define('PI', 3.142);
echo 'PI values is: '. PI . "\n";

const UNITS = [
    'MILES_CONVERSION' => 1.6,
    'INCHES_CONVERSION' => '2.54'
];

echo "5km in miles is " . 5 * UNITS['MILES_CONVERSION'];



