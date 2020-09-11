<?php

function parameterTypeExample($required, $optional = null, ...$variadicParams)
{
    printf(
        'Required: %d; Optional: %d; number of variadic parameters: %d' . "\n",
        $required, $optional, count($variadicParams)
    );
}

parameterTypeExample(1);
parameterTypeExample(1, 2);
parameterTypeExample(1, 2, 3);
parameterTypeExample(1, 2, 3, 4);
