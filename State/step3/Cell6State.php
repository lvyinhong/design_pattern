<?php


class Cell6State implements IMatrix
{
    private $context;

    public function __construct($contextNow)
    {
        $this->context = $contextNow;
    }

    public function goUp()
    {
        echo "go 3 <br>";
        $this->context->setState($this->context->getCell3State());
    }

    public function goDown()
    {
        echo "go 9 <br>";
        $this->context->setState($this->context->getCell9State());
    }

    public function goLeft()
    {
        echo "go 5 <br>";
        $this->context->setState($this->context->getCell5State());
    }

    public function goRight()
    {
        // 不合法的移动
    }

}