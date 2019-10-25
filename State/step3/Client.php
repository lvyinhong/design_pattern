<?php

spl_autoload_register('myAutoload');
function myAutoload($className)
{
    require_once($className . '.php');
}

class Client
{
    private $context;

    public function __construct()
    {
        $this->context = new Context();
        $this->context->doUp();
        $this->context->doRight();
        $this->context->doDown();
        $this->context->doDown();
        $this->context->doLeft();
        $this->context->doUp();
    }
}

$worker = new Client();