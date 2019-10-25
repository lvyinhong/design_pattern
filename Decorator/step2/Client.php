<?php

/**
 * Age Groups:
 *   18-29 Group 1
 *   30-39 Group 2
 *   40-49 Group 3
 *   50+   Group 4
 */
spl_autoload_register('myAutoload');
function myAutoload($className)
{
    include_once($className . ".php");
}

class Client
{
    private $hotDate;

    public function __construct()
    {
        $this->hotDate = new Female();
        $this->hotDate->setAge("Age Group 4");
        echo $this->hotDate->getAge();
        $this->hotDate = $this->wrapComponent($this->hotDate);
        echo $this->hotDate->getFeature();
    }

    private function wrapComponent(IComponent $component) {
        $component = new ProgramLang($component);
        $component->setFeature('php');
        $component = new Hardware($component);
        $component->setFeature('lin');
        $component = new Food($component);
        $component->setFeature('veg');

        return $component;
    }
}

$worker = new Client();