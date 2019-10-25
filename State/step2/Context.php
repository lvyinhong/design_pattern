<?php


class Context
{
    private $offState;
    private $onState;
    private $brighterState;
    private $brightestState;

    private $currentState;


    public function __construct()
    {
        $this->offState = new OffState($this);
        $this->onState = new OnState($this);
        $this->brighterState = new BrighterState($this);
        $this->brightestState = new BrightestState($this);

        // 开始状态为 Off
        $this->currentState = $this->offState;
    }

    // 调用状态方法触发器
    public function turnOnLight()
    {
        $this->currentState->turnLightOn();
    }

    public function turnOffLight()
    {
        $this->currentState->turnLightOff();
    }

    public function turnBrighterLight()
    {
        $this->currentState->turnBrighter();
    }

    public function turnBrightestLight()
    {
        $this->currentState->turnBrightest();
    }

    // 设置当前状态
    public function setState(IState $state)
    {
        $this->currentState = $state;
    }

    // 获得当前状态
    public function getOnState()
    {
        return $this->onState;
    }

    public function getOffState()
    {
        return $this->offState;
    }

    public function getBrighterState()
    {
        return $this->brighterState;
    }

    public function getBrightestState()
    {
        return $this->brightestState;
    }
}