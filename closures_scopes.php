<?php

class Animal {
    public function getClosure()
    {
        $boundVariable = 'Animal';
        return function () use ($boundVariable) {
            return $this->nature . ' ' . $boundVariable;
        };
    }
}

class Cat extends Animal {
    protected $nature = 'Awesome';
}

class Dog extends Animal {
    protected $nature = 'Friendly';
}

$cat = new Cat();
$closure = $cat->getClosure();
echo $closure() . "\n"; // Awesome Animal
$closure = $closure->bindTo(new Dog());
echo $closure(); // Friendly Animal
