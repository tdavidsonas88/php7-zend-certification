<?php

$subject = "I can haz Cheeseburgers";
$pattern = "/I can haz (Cheeseburger)?/";
$matches = [];
preg_match($pattern, $subject, $matches);
var_dump($matches);
echo "\n";
$subject = "I can haz";
preg_match($pattern, $subject, $matches);
var_dump($matches);
