<?php


class BrighterState implements IState
{
    private $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function turnLightOn()
    {
        echo "nada -> take no action!";
    }

    public function turnLightOff()
    {
        echo "nada -> take no action!";
    }

    public function turnBrighter()
    {
        echo "nada -> take no action!";
    }

    public function turnBrightest()
    {
        echo "turn brightest success! <br>";
        $this->context->setState($this->context->getBrightestState());
    }
}