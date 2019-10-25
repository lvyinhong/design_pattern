<?php

include_once("CloneMe.php");

class Person extends CloneMe
{
    public function __construct()
    {
        $this->picture = 'CloneMe.png';
        $this->name = 'Original';
    }

    public function display()
    {
        echo "<img src='$this->picture' alt='$this->name' />";
        echo "<br/> <p>$this->name </p>";
    }

    public function __clone()
    {
    }
}