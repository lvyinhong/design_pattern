<?php

spl_autoload_register('myAutoload');
function myAutoload($className)
{
    require_once($className . ".php");
}

class ClientH
{
    private $hotDate;
    private $progLang;
    private $hardware;
    private $food;

    public function __construct()
    {
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $this->progLang = $_POST['proglang'];
        $this->hardware = $_POST['hardware'];
        $this->food = $_POST['food'];

        $this->hotDate = new $gender;
        $this->hotDate->setAge($age);
        echo $this->hotDate->getAge();
        $this->hotDate = $this->wrapComponent($this->hotDate);
        echo $this->hotDate->getFeature();
    }

    public function wrapComponent(IComponent $component)
    {
        $component = new ProgramLang($component);
        $component->setFeature($this->progLang);
        $component = new Hardware($component);
        $component->setFeature($this->hardware);
        $component = new Food($component);
        $component->setFeature($this->food);
        return $component;
    }
}

$worker = new ClientH();