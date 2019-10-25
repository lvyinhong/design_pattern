<?php

include_once('ISubject.php');

class RealSubject implements ISubject
{
    public function request()
    {
        $practice = <<<REQUEST
<!DOCUMENT html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>PHP Tip Sheet .</title>
    <link rel="stylesheet" href="css/proxy.css">   
    </head>
    <body>
        <header>PHP Tip Sheet : <br>        
            <span class="subhead">For OOP Developer </span>
        </header>
        <ol>
            <li>Program to the interface and not the implementation.</li> 
            <li>Encapsulate your objects.</li>
            <li>Favor composition over class inheritance.</li>  
            <li>A class should only have a single responsibility.</li>     
        </ol>    
    </body>
</html>    
REQUEST;
        echo $practice;
    }
}