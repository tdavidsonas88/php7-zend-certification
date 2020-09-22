<?php

$string = "My name is Tadas, Tadas is my name";

if (preg_match_all("/Tadas/", $string, $array)) {
    print_r($array);
}
