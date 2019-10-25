<?php

class OnState implements IState
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function turnLightOn()
    {
        echo "nada -> take no action! <br/>";
    }

    public function turnLightOff()
    {
        echo "nada -> take no action! <br/>";
    }

    public function turnBrighter()
    {
        echo "turn brighter success! <br/>";
        $this->context->setState($this->context->getBrighterState());
    }

    public function turnBrightest()
    {
        echo "nada -> take no action! <br/>";
    }
}