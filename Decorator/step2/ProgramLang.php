<?php


class ProgramLang extends Decorator
{
    private $languageNow;

    public function __construct(IComponent $dateNow)
    {
        $this->date = $dateNow;
    }

    private $language = array(
        'php' => 'PHP',
        'cs' => 'C#',
        'js' => 'JavaScript',
        'as3' => 'ActionScript 3.0'
    );

    public function setFeature($lan)
    {
        $this->languageNow = $this->language[$lan];
    }

    public function getFeature()
    {
        $output = $this->date->getFeature();
        $fmat = "<br/> &nbsp;&nbsp;";
        $output .= "$fmat Favorite Food :";
        $output .= $this->languageNow . "<br>";
        return $output;
    }
}