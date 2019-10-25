<?php


class Cell9State implements IMatrix
{
    private $context;

    public function __construct($contextNow)
    {
        $this->context = $contextNow;
    }

    public function goUp()
    {
        echo "go 6 <br>";
        $this->context->setState($this->context->getCell6State());
    }

    public function goDown()
    {
        // 不合法的移动
    }

    public function goLeft()
    {
        echo "go 8 <br>";
        $this->context->setState($this->context->getCell8State());
    }

    public function goRight()
    {
        // 不合法的移动
    }

}