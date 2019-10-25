<?php

spl_autoload_register('myAutoload');
function myAutoload($className)
{
    include_once($className . '.php');
}

class Client
{
    public function __construct()
    {
        $caption = "Modigliani painted elongated faces .";
        $mo = new ConcreteClass();
        $mo->templateMethod('modig.png', $caption);
    }
}

$worker = new Client();