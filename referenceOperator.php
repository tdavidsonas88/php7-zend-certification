<?php

$a = 1;
$b = &$a;
$b += 5;
echo $a .PHP_EOL;
$a *= 2;
echo $b;
