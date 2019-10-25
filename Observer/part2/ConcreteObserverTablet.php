<?php


class ConcreteObserverTablet implements Observer
{
    private $currentState;

    public function update(Subject $subject)
    {
        $this->currentState = $subject->getState();
        echo 'in tablet: <br>';
        echo "<img src='tablet/$this->currentState'><br>";
    }
}