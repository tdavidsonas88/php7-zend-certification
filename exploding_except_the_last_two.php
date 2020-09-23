<?php

$delimiter = ',';
$source = '1, abc, 2, def, 3, ghi';
$limit = -2;
$arr = explode($delimiter, $source, $limit);
print_r($arr);