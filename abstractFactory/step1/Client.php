<?php

include_once('TextFactory.php');
include_once('GraphicFactory.php');

class Client
{
    private $someTextObject;
    private $someGraphicObject;

    public function __construct()
    {
        $this->someTextObject = new TextFactory();
        echo $this->someTextObject->startFactory() . '<br>';

        $this->someGraphicObject = new GraphicFactory();
        echo $this->someGraphicObject->startFactory() . '<br>';
    }
}

$worker = new Client();