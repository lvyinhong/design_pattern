<?php


class DataBase extends Decorator
{
    public function __construct(IComponent $siteNow)
    {
        $this->site = $siteNow;
    }

    public function getSite()
    {
        $fmat = "<br/>&nbsp;&nbsp; Decorator";
        return $this->site->getSite() . $fmat;
    }

    public function getPrice()
    {
        return 800 + $this->site->getPrice();
    }
}