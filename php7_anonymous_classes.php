<?php

$object = new class('argument') {
    public function __construct(string $message) {
        echo $message;
    }
};
