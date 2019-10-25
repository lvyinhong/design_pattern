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
        echo "Light is already off -> take on action <br/>";
    }

    public function turnLightOn()
    {
        echo "Lights on! Now I can see!<br/>";
        $this->context->setState($this->context->getOnState());
    }
}