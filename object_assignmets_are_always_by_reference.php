<?php

$a = new stdClass();
$a->property = "Hello World";
// object assignment is by reference
$b = $a;
$b->property = "Assigned by reference";
// $a has also changed because $b is a pointer to $a
var_dump($a);
/*
object(stdClass)#1 (1) {
  ["property"]=>
  string(21) "Assigned by reference"
}
*/
