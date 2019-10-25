<?php


class Food extends Decorator
{
    private $chowNow;

    public function __construct(IComponent $dateNow)
    {
        $this->date = $dateNow;
    }

    private $snacks = array(
        'piz' => 'Pizza',
        'burg' => 'Burgers',
        'nach' => 'Nachos',
        'veg' => 'veggies'
    );

    public function setFeature($yum)
    {
        $this->chowNow = $this->snacks[$yum];
    }

    public function getFeature()
    {
        $output = $this->date->getFeature();
        $fmat = "<br/> &nbsp;&nbsp;";
        $output .= "$fmat Favorite Food :";
        $output .= $this->chowNow . "<br>";
        return $output;
    }
}