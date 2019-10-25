<?php


class OffState implements IState
{
    private $context;

    public function __construct($context)
    {
        $this->context = $context;
    }

    public function turnLightOff()
    {
        echo "noda! -> take no action <br/>";
    }

    public function turnLightOn()
    {
        echo "turn light on success! <br/>";
        $this->context->setState($this->context->getOnState());
    }

    public function turnBrighter()
    {
        echo "nada! -> take on action <br>";
    }

    public function turnBrightest()
    {
        echo "nada! -> take no action <br>";
    }
}