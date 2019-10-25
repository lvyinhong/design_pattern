<?php


class ConcreteObserverPhone implements Observer
{
    private $currentState = array();
    private $dpHeader;
    private $bodyText;
    private $imageURL;

    public function update(Subject $subject)
    {
        $this->currentState = $subject->getState();
        $this->dpHeader = $this->currentState[0];
        $this->bodyText = $this->currentState[1];
        $this->imageURL = $this->currentState[2];
        $this->doMobile();
    }

    private function doMobile()
    {
        $showPage = <<<MOBILE
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <title>Mobile Page</title>
                    <meta name="viewport" content="device-width, initial-scale=1">
                    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css">
                    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
                    <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>  
                </head>
                <body>
                    <div data-role="page">
                        <div data-role="header">
                            <h1>$this->dpHeader</h1>
                        </div>
                        <div data-role="content">
                            <p>$this->bodyText</p>
                            <img src="mobile/$this->imageURL" alt="image urls" width="100%">
                        </div>
                    </div>
                </body>
            </html>    
MOBILE;
        echo $showPage;

    }
}