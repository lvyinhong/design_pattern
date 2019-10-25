<?php


class Cell4State implements IMatrix
{
    private $context;

    public function __construct($contextNow)
    {
        $this->context = $contextNow;
    }

    public function goUp()
    {
        echo "go 1 <br>";
        $this->context->setState($this->context->getCell1State());
    }

    public function goDown()
    {
        echo "go 7 <br>";
        $this->context->setState($this->context->getCell7State());
    }

    public function goLeft()
    {
        // 不合法的移动
    }

    public function goRight()
    {
        echo "go 5 <br>";
        $this->context->setState($this->context->getCell5State());
    }

}