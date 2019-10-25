<?php


class FemaleProto extends IPrototype
{
    const gender = 'Female';
    public $fecundity;

    public function __clone()
    {
    }

    public function __construct()
    {
        $this->eyeColor = 'red';
        $this->wingBeat = '220';
        $this->unitEyes = '760';
    }
}