<?php

spl_autoload_register('myAutoload');

function myAutoload($className)
{
    include_once $className . '.php';
}

class Client
{
    public function __construct()
    {
        $sub = new ConcreteSubject();

        $ob1 = new ConcreteObserverPhone();
        $ob2 = new ConcreteObserverTablet();
        $ob3 = new ConcreteObserverDT();

        $sub->attachObser($ob1);
        $sub->attachObser($ob2);
        $sub->attachObser($ob3);

        $sub->setState('timg.jpeg');
    }
}

$worker = new Client();