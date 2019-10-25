<?php


class Context
{
    private $offState;
    private $onState;
    private $currentState;

    public function __construct()
    {
        $this->offState = new OffState($this);
        $this->onState = new onState($this);
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
}