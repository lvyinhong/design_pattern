<?php


class ConcreteObserverPhone implements Observer
{
    private $currentState;

    public function update(Subject $subject)
    {
        $this->currentState = $subject->getState();
        echo 'in phone: <br>';
        echo "<img src='phone/$this->currentState'><br>";
    }
}