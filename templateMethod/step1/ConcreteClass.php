<?php


class ConcreteClass extends AbstractClass
{
    public function addPix($pix)
    {
        $this->pix = $pix;
        $this->pix = 'pix/' . $this->pix;
        $formatter = "<img src='$this->pix' width='350' height='150'><br />";
        echo $formatter;
    }

    public function addCap($cap)
    {
        $this->cap = $cap;
        echo '<em>Caption: </em>' . $this->cap . '<br/>';
    }
}