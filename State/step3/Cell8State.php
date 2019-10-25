<?php


class Cell8State implements IMatrix
{
    private $context;

    public function __construct($contextNow)
    {
        $this->context = $contextNow;
    }

    public function goUp()
    {
        echo "go 5 <br>";
        $this->context->setState($this->context->getCell5State());
    }

    public function goDown()
    {
        // 不合法的移动
    }

    public function goLeft()
    {
        echo "go 7 <br>";
        $this->context->setState($this->context->getCell7State());
    }

    public function goRight()
    {
        echo "go 9 <br>";
        $this->context->setState($this->context->getCell9State());
    }

}