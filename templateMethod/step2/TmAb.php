<?php


abstract class TmAb
{
    protected $pix;
    protected $cap;

    public function templateMethod() {
        $this->addPix();
        $this->addCaption();
    }

    abstract protected function addPix();
    abstract protected function addCaption();
}