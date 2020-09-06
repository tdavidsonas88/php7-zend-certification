<?php

function A () {
    try {
        b();
    } catch (Exception $e) {
        echo "Exception caught in " . __CLASS__;
    }
}

function B() {
    echo 5 / "five";
}

try {
    A();
} catch (Error $e) {
    echo "Error caught in global scope: " . $e->getMessage();
}

/**
 * INFPHP Warning:  A non-numeric value encountered
PHP Warning:  Division by zero

 */
