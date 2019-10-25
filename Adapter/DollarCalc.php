<?php

class DollarCalc
{
    protected $dollar;
    protected $product;
    protected $service;
    protected $rate = 1;

    public function requestCalc($productNow, $serviceNow)
    {
        $this->product = $productNow;
        $this->service = $serviceNow;

        $this->dollar = $this->service + $this->product;

        return $this->requestTotal();
    }

    public function requestTotal()
    {
        $this->dollar *= $this->rate;
        return $this->dollar;
    }
}