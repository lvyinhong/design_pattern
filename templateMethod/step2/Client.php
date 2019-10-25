<?php
spl_autoload_register('myAutoload');
function myAutoload($className)
{
    include_once($className . '.php');
}

class Client {
    public function __construct()
    {
        $mo = new TmFac();
        $mo->templateMethod();

    }
}
$worker = new Client();