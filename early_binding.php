<?php

$a = "some string";
// early binding (default)
$b = function () use ($a) {
    echo $a;
};
$a = "Hello World";
// some string
$b();
