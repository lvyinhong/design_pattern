<?php


class Cell1State implements IMatrix
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
        echo "go 4 <br/>";
        $this->context->setState($this->context->getCell4State());
    }

    public function goLeft()
    {
        // 不合法的移动
    }

    public function goRight()
    {
        echo "go 2 <br/>";
        $this->context->setState($this->context->getCell2State());
    }

}