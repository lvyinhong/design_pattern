<?php


class Hardware extends Decorator
{
    private $hardwareNow;

    public function __construct(IComponent $dateNow)
    {
        $this->date = $dateNow;
    }

    private $box = array(
        'mac' => 'Macintosh',
        'dell' => 'Dell',
        'hp' => 'Hewlett-Packard',
        'lin' => 'Linux'
    );

    public function setFeature($lan)
    {
        $this->hardwareNow = $this->box[$lan];
    }

    public function getFeature()
    {
        $output = $this->date->getFeature();
        $fmat = "<br/> &nbsp;&nbsp;";
        $output .= "$fmat Favorite Food :";
        $output .= $this->hardwareNow . "<br>";
        return $output;
    }
}