<?php

$fruits = ['lemons' => 1, 'oranges' => 4, 'bananas' => 5, 'apples' => 10];

$fruitsArrayObject = new ArrayObject($fruits);
$fruitsArrayObject->setFlags(ArrayObject::ARRAY_AS_PROPS);
var_dump($fruitsArrayObject->lemons);
