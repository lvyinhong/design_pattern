<?php


class Management extends IAcmePrototype
{
    const UNIT = 'management';

    private $research = 'research';
    private $plan = 'planing';
    private $operations = 'operations';

    public function setDept($orgCode)
    {
        switch ($orgCode) {
            case 201:
                $this->dept = $this->research;
                break;
            case 202:
                $this->dept = $this->plan;
                break;
            case 203:
                $this->dept = $this->operations;
                break;
            default:
                $this->dept = 'Unrecognized Management';
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