<?php


abstract class IPrototype
{
    public $eyeColor;
    public $wingBeat;
    public $unitEyes;

    abstract public function __clone();
}