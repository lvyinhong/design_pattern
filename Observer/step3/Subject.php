<?php


abstract class Subject
{
    private $observers = array();

    public function attachObser(Observer $obser)
    {
        array_push($this->observers, $obser);
    }

    public function detachObser(Observer $obser)
    {
        $position = 0;
        foreach ($this->observers as $viewer) {
            if ($viewer == $obser) {
                array_splice($this->observers, ($position), 1);
            }
        }
    }

    protected function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}