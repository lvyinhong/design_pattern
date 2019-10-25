<?php


abstract class IAcmePrototype
{
    protected $name;
    protected $id;
    protected $employeePic;
    protected $dept;

    //Dept
    abstract function setDept($orgCode);

    abstract function getDept();

    //Name
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    //ID
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    // Employee Picture
    public function setPic($ePic)
    {
        $this->employeePic = $ePic;
    }

    public function getPic()
    {
        return $this->employeePic;
    }

    abstract public function __clone();

}