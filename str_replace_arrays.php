<?php
//Both the search and replacement parameters can be arrays. This lets you replace
//multiple values in one call
$string = "I like black hot coffee";
$search = ['black', 'coffee'];
$replace = ['green', 'tea'];
echo str_replace($search, $replace, $string);
