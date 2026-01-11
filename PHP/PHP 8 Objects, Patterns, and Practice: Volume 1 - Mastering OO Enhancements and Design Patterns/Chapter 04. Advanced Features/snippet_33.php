<?php

trait PriceUtilities
{
    private int $taxrate = 20;

    public function calculateTax(float $price): float
    {
        return (($this->taxrate / 100) * $price);
    }
    // other utilities
}
