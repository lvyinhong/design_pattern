<?php


class Cell5State implements IMatrix
{
    private $context;

    public function __construct($contextNow)
    {
        $this->context = $contextNow;
    }

    public function goUp()
    {
        echo "go 2 <br>";
        $this->context->setState($this->context->getCell2State());
    }

    public function goDown()
    {
        echo "go 8 <br>";
        $this->context->setState($this->context->getCell8State());
    }

    public function goLeft()
    {
        echo "go 4 <br>";
        $this->context->setState($this->context->getCell4State());
    }

    public function goRight()
    {
        echo "go 6 <br>";
        $this->context->setState($this->context->getCell6State());
    }

}