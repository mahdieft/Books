<?php

class ShopProductWriter
{
    public function write(RecordProduct|BookProduct $shopProduct): void
    {
        $str = "{$shopProduct->title}: "
            . $shopProduct->getProducer()
            . " ({$shopProduct->price})\n";
        print $str;
    }
}
