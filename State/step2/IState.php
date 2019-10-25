<?php

interface IState
{
    public function turnLightOn();

    public function turnBrighter();

    public function turnBrightest();

    public function turnLightOff();

}