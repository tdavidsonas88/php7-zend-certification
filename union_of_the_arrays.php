<?php

$a = ['a' => 'hello', 'b' => 'world'];
$b = ['a' => 'goodbye', 'c' => 'cruel'];
echo implode(' ', $a + $b);  // hello world cruel
