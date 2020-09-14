<?php

$a = "some string";
// late binding (reference)
$b = function () use (&$a) {
    echo $a;
};
$a = "Hello World";
// Hello World
$b();
