<?php

class Poller
{
    public function poll(): never
    {
        while ($this->doImportantThing()) {
            sleep(1);
        }
        exit;
    }

    public function doImportantThing(): bool

    {

        return true;
    }
}
