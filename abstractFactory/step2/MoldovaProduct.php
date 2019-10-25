<?php

require_once('FormatHelper.php');
require_once('Product.php');

class MoldovaProduct implements Product
{
    private $mfgProduct;
    private $countryNew;
    private $formatHelper;

    public function getProperties()
    {
        $this->countryNew = file_get_contents('CountriesWriteUp/Moldova.txt');
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct .= '<img src="Countries/Moldova.png" class="pixLeft" width="208" height="450"/>';
        $this->mfgProduct .= '<header>Moldova</header>';
        $this->mfgProduct .= '<p>'.$this->countryNew.'</p>';
        $this->mfgProduct .= $this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
}