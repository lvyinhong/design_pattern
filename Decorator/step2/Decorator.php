<?php


abstract class Decorator extends IComponent
{
    public function setAge($ageNow)
    {

    }

    public function getAge()
    {
        return $this->ageGroup;
    }
}