<?php

class ShopProduct
{
    private int|float $discount = 0;
    public readonly string $producer;

    public function __construct(
        public readonly string $title,
        public readonly string $producerFirstName,
        public readonly string $producerMainName,
        protected int|float    $price
    )
    {
        $this->producer = $this->producerFirstName . " " . $this->producerMainName;
    }

    public function setDiscount(int|float $num): void
    {
        $this->discount = $num;
    }

    public function getDiscount(): float|int
    {
        return $this->discount;
    }

    public function getPrice(): int|float
    {
        return ($this->price - $this->discount);
    }

    public function getSummaryLine(): string
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }
}
