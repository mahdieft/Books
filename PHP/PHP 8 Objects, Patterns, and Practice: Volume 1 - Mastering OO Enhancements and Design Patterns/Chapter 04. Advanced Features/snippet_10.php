<?php

class ShopProduct
{
    public function __construct(private Prodcat $cat)
    {
    }

    public function getCat(): Prodcat
    {
        return $this->cat;
    }
}
