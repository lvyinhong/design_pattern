<?php


class BrightestState implements IState
{
    private $context;

    public function __construct($contextNow)
    {
        $this->context = $contextNow;
    }

    public function turnLightOn()
    {
        echo "nada -> take no action <br>";
    }

    public function turnBrighter()
    {
        echo "nada -> take no action <br>";
    }

    public function turnBrightest()
    {
        echo "nada -> take no action <br>";
    }

    public function turnLightOff()
    {
        echo "turn light off success! <br>";
        $this->context->setState($this->context->getOffState());
    }

}