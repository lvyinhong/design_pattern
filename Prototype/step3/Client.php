<?php

spl_autoload_register('myAutoload');
function myAutoload($className)
{
    require_once($className . ".php");
}

class Client
{
    private $market;
    private $manage;
    private $engineer;

    public function __construct()
    {
        $this->makeConProto();

        $Tess = clone $this->market;
        $this->setEmployee($Tess, 'Tess Smith', 101, 'ts101-1234', 'tess.png');
        $this->showEmployee($Tess);

        $Jacob = clone $this->market;
        $this->setEmployee($Jacob, 'Jacob Jones', 102, 'jj101-1234', 'jacob.png');
        $this->showEmployee($Jacob);

        $Ricky = clone $this->manage;
        $this->setEmployee($Ricky, 'Ricky Rodriguez', 203, 'rr203-1234', 'ricky.png');
        $this->showEmployee($Ricky);

        $Olivia = clone $this->engineer;
        $this->setEmployee($Olivia, 'Olivia Perez', 302,'op301-1278', 'olivia.png');
        $this->showEmployee($Olivia);
    }

    private function makeConProto()
    {
        $this->market = new Marketing();
        $this->manage = new Management();
        $this->engineer = new Engineering();
    }

    private function showEmployee(IAcmePrototype $emplpyeeNow)
    {
        $px = $emplpyeeNow->getPic();
        echo "<p><img src='$px' width='150' height='150' alt='" . $emplpyeeNow->getName() . "'><br/>";
        echo $emplpyeeNow->getName() . "<br>";
        echo $emplpyeeNow->getDept() . "<br>";
        echo $emplpyeeNow->getId() . "<p/>";
    }

    private function setEmployee(IAcmePrototype $employeeNow, $nm, $dp, $id, $px)
    {
        $employeeNow->setName($nm);
        $employeeNow->setDept($dp);
        $employeeNow->setId($id);
        $employeeNow->setPic("pix/$px");
    }
}

$worker = new Client();