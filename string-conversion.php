<?php

$examples = [
    "12 o clock",
    "Half past 12",
    "12.30",
    "7.2e2 minutes after midnight"
];

foreach ($examples as $example) {
    $result = 0 + $example;
    var_dump($result);
}

/*
This outputs:
 int(12)
 int(0)
 double(12.3)
 double(720)
*/
