<?php

spl_autoload_register('myAutoload');
function myAutoload($className)
{
    include_once($className . '.php');
}

class Client
{
    private $buyTotal;
    private $gpsNow;
    private $mapNow;
    private $boatNow;
    private $special;
    private $zamCalc;

    public function __construct()
    {
        $this->setHTML();
        $this->setCost();
        $this->zamCalc = new ZambeziCalc();
        $this->zamCalc->templateMethod($this->buyTotal, $this->special);
    }

    public function setHTML()
    {
        $this->gpsNow = $_POST['gps'];
        $this->mapNow = $_POST['map'];
        $this->boatNow = $_POST['boat'];
    }

    private function setCost()
    {
        $this->buyTotal = $this->gpsNow;
        foreach ($this->mapNow as $value) {
            $this->buyTotal += $value;
        }
        // Boolean
        $this->special = ($this->buyTotal >= 200);
        $this->buyTotal += $this->boatNow;
    }
}

$worker = new Client();