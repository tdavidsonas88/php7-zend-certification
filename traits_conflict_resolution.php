<?php

trait Dog {
    public function makeNoise() {
        echo "Woof";
    }
    public function wantWalkies() {
        echo "Yes please!";
    }
}
trait Cat {
    public function makeNoise() {
        echo "Purr";
    }
    public function wantWalkies() {
        echo "No thanks!";
    }
}
class DomesticPet
{
    use Dog, Cat {
        Cat::makeNoise insteadof Dog;
        Cat::wantWalkies as kittyWalk;
        Dog::wantWalkies insteadof Cat;
    }
}
$obj = new DomesticPet();
$obj->makeNoise();
// Purr
$obj->wantWalkies(); // Yes please!
$obj->kittyWalk();
// No thanks!