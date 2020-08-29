<?php

namespace Foo;
const AVOCADO = 6.02214086;
// using define() will generate warning
// PHP Warning:  Use of undefined constant MOLE - assumed 'MOLE' (this will throw an Error in a future version of PHP)
define("MOLE", 'hill');

namespace Bar;
echo \Foo\AVOCADO;
// PHP Fatal error:  Uncaught Error: Undefined constant 'Foo\MOLE'
echo \Foo\MOLE;
