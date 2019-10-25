<?php

spl_autoload_register('myAutoload');

function myAutoload($className)
{
    include_once($className . '.php');
}


class Client
{
    private $context;

    public function __construct()
    {
        $this->context = new Context();
        $this->context->turnOnLight();
        $this->context->turnBrighterLight();
        $this->context->turnBrightestLight();
        $this->context->turnOnLight();
        $this->context->turnOffLight();
        $this->context->turnOffLight();
    }
}

$worker = new Client();