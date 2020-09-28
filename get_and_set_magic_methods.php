<?php

class BankBalance {
    private $balance;
    public function __get($propertyName) {
        // echo "No property " . $propertyName;
        return "No value";
    }
    public function __set($propertyName, $value) {
        echo "Cannot set $propertyName to $value";
    }
}
$myAccount = new BankBalance();
// Cannot set balance to 100No value
$myAccount->balance = 100;
echo $myAccount->nonExistingProperty;