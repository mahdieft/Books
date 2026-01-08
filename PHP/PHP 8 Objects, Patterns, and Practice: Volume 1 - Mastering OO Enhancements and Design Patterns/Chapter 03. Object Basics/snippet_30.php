<?php

class ShopProduct
{
    public string $producerFirstName;
    public string $producerMainName;

    public function __construct(
        public string $title,
        public string $firstName,
        public string $mainName,
        public float  $price
    )
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }
}
