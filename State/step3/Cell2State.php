<?php


class Cell2State implements IMatrix
{
    private $context;

    public function __construct($contextNow)
    {
        $this->context = $contextNow;
    }

    public function goUp()
    {
        // 不合法的移动
    }

    public function goDown()
    {
        echo "go 5 <br>";
        $this->context->setState($this->context->getCell5State());
    }

    public function goLeft()
    {
        echo "go 1 <br>";
        $this->context->setState($this->context->getCell1State());
    }

    public function goRight()
    {
        echo "go 3 <br>";
        $this->context->setState($this->context->getCell3State());
    }

}