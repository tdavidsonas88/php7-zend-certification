<?php

$a = "apples" <=> "bananas";
echo $a . "\n"; // -1
$b = $a ?? $c ?? 10;
echo $b . "\n"; // -1

if(-1) {
    echo '-1 gives true';
}else {
    echo '-1 gives false';
}