<?php

class UtilityService extends Service
{
    use PriceUtilities;

    public function getTaxRate(): float
    {
        return 20;
    }
}
