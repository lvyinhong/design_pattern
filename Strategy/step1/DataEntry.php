<?php


class DataEntry implements IStrategy
{
    public function algorithm()
    {
        $hookup = UniversalConnect::doConnect();
        $test = $hookup->real_escape_string($_POST['data']);
        echo 'This data has been entered: ' . $test . '<br>';
    }
}