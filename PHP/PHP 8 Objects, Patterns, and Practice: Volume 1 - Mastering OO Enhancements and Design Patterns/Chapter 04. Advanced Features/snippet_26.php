<?php

class ShopProduct implements Chargeable
{
    protected float $price;

    public function getPrice(): float
    {
        return $this->price;
    }
}
