<?php

$reflectionObject = new ReflectionClass('Exception');
print_r($reflectionObject->getMethods());
