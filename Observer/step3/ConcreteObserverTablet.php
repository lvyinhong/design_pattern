<?php


class ConcreteObserverTablet implements Observer
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
        $this->doTablet();
    }

    private function doTablet()
    {
        $showPage = <<<TABLET
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <title>Tablet Page</title>
                    <meta name="viewport" content="device-width, initial-scale=1">
                    <link rel="stylesheet" href="tablet.css">
                </head>
                <body>
                    <article>
                        <header>
                            <h1>$this->dpHeader</h1>
                        </header>
                        <section>
                            <img src="tablet/$this->imageURL" alt="image urls">
                            <p>$this->bodyText</p>
                        </section>
                    </article>
                </body>
            </html>    
TABLET;
        echo $showPage;

    }
}