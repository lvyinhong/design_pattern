<?php

class ConcreteObserverDT implements Observer
{
    private $currentState;

    public function update(Subject $subject)
    {
        $this->currentState = $subject->getState();
        echo 'in desktop: <br>';
        echo "<img src='desktop/$this->currentState'><br>";
    }
}