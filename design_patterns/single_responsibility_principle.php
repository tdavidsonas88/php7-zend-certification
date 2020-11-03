<?php

class TellAll
{
    private $userAgent;
    public function __construct()
    {
        $this->userAgent=$_SERVER['HTTP_USER_AGENT'];
        echo $this->userAgent;
    }
}
// Like a good class in OOP, it has a single responsibility—finding information
//about the user agent.
$tellAll=new TellAll();