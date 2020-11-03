<?php

trait Singleton
{
    private static $instance;
    public static function getInstance() {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}
class UsingTraitExample
{
    use Singleton;
}

$ojbect = UsingTraitExample::getInstance();
var_dump($ojbect instanceof UsingTraitExample);