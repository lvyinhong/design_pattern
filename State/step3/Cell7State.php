<?php


class Cell7State implements IMatrix
{
    private $context;

    public function __construct($contextNow)
    {
        $this->context = $contextNow;
    }

    public function goUp()
    {
        echo "go 4 <br>";
        $this->context->setState($this->context->getCell4State());
    }

    public function goDown()
    {
        // 不合法的移动
    }

    public function goLeft()
    {
        // 不合法的移动
    }

    public function goRight()
    {
        echo "go 8 <br>";
        $this->context->setState($this->context->getCell8State());
    }

}