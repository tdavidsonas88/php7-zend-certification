<?php
// greedy search
$subject = "Some <strong>html</strong> text";
$pattern = "/<.*>/";
$matches = [];
preg_match($pattern, $subject, $matches);
var_dump($matches);  // string(21) "<strong>html</strong>"
echo "\n";
// lazy search - returns the shortest possible mat
$pattern = "/<.*?>/";  // note the pattern has changed
$matches = [];
preg_match($pattern, $subject, $matches);
var_dump($matches);