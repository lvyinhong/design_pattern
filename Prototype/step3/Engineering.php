<?php

include_once("IAcmePrototype.php");

class Engineering extends IAcmePrototype
{
    const UNIT = 'engineering';
    private $development = 'programming';
    private $design = 'digital artwork';
    private $sysAd = 'system Administrator';

    public function setDept($orgCode)
    {
        switch ($orgCode) {
            case 301:
                $this->dept = $this->development;
                break;
            case 302:
                $this->dept = $this->design;
                break;
            case 303:
                $this->dept = $this->sysAd;
                break;
            default:
                $this->dept = 'Unrecognized engineering';
        }
    }

    public function getDept()
    {
        return $this->dept;
    }

    public function __clone()
    {
    }
}