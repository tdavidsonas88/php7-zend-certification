<?php

function myFunc()
{
    foreach (func_get_args() as $arg => $value) {
        echo "$arg is $value" . PHP_EOL;
    }
}

myFunc('variable', 3, 'parameters');
