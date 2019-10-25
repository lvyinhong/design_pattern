<?php
spl_autoload_register('myAutoload');

function myAutoload($className)
{
    include $className . '.php';
}

$trigger = new Client();
$trigger->changeData();