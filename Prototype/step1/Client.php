<?php

include_once("Person.php");

class Client
{
    public function __construct()
    {
        $worker = new Person();
        $worker->display();

        $slacker = clone  $worker;
        $slacker->name = 'cloned';
        $slacker->display();
    }
}

$instance = new Client();