<?php

class A {

    private $text;

    public function getText()
    {
        return $this->text;
    }

}

$objectOriginal = new A;
$string = serialize($objectOriginal);
file_put_contents('serialize.txt', $string);
// in another PHP file
$string = file_get_contents('serialize.txt');
$objectCopy = unserialize($string);
