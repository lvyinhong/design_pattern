<?php


abstract class AbstractClass
{
    protected $pix;
    protected $cap;

    public function templateMethod($pixNow, $capNow)
    {
        $this->pix = $pixNow;
        $this->cap = $capNow;

        $this->addPix($pixNow);
        $this->addCap($capNow);
    }

    abstract public function addPix($pix);

    abstract public function addCap($cap);
}