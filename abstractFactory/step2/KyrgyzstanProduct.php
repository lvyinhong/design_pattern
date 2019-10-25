<?php
include_once('FormatHelper.php');
include_once('Product.php');

class KyrgyzstanProduct implements Product
{
    private $mfgProduct;
    private $formatHelper;

    public function getProperties()
    {
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct.= <<<KYRGYZSTAN
    
KYRGYZSTAN;
        $this->mfgProduct.=$this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
}