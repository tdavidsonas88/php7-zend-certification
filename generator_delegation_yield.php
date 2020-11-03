<?php

function generator() {
    $a = [1,2,3];
    yield from $a;
    yield from range(4,6);
    yield from sevenAteNine();
}
function sevenAteNine() {
    for ($i=7; $i<10;$i++) {
        yield $i;
    }
}
$gen = generator();
foreach ($gen as $value) {
    echo $value . PHP_EOL;
}
