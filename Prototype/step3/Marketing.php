<?php

include_once("IAcmePrototype.php");

class Marketing extends IAcmePrototype
{
    const UNIT = 'marketing';

    protected $sale = 'sale';
    protected $promotion = 'promotion';
    protected $strategic = 'strategic';

    public function setDept($orgCode)
    {
        switch ($orgCode) {
            case 101:
                $this->dept = $this->sale;
                break;
            case 102:
                $this->dept = $this->promotion;
                break;
            case 103:
                $this->dept = $this->strategic;
                break;
            default:
                $this->dept = 'Unrecognized Marketing';
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