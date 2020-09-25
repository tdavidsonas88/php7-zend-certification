<?php

class User
{
    private $firstName = 'Example';
    private $lastName = 'User';
    function __toString() {
        return $this->lastName;
    }
}
$user = new User;
// 'echo' expects a string type so PHP will implicitly cast the object to string
echo $user; // Example
