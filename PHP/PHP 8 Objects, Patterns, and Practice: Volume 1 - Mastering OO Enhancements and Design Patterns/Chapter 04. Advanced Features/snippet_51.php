<?php

trait PriceUtilities
{
    public function calculateTax(float $price): float
    {
        return (($this->taxrate / 100) * $price);
    }
}
