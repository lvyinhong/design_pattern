<?php

class GraphicProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = "<img src='pix/modig.png' width='250' height='150'>";
        return $this->mfgProduct;
    }
}