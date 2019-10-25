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
        $this->context->setState($this->context->getCell2State());
    }

    public function goLeft()
    {
        // 不合法的移动
    }

    public function goRight()
    {
        // 不合法的移动
    }

}