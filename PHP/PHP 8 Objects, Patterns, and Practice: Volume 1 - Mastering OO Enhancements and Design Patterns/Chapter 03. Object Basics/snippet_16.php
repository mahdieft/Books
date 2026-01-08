<?php

class ShopProduct
{
    public function __construct(public $title, public $producerFirstName, public $producerMainName, public $price)
    {
    }

    public function getProducer()
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }
}
