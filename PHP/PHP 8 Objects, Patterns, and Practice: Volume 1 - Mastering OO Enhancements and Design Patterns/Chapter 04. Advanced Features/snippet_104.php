<?php

class Totalizer
{
    public static function warnAmount(): callable
    {
        return function (Product $product) {
            if ($product->price > 5) {
                print " reached high price: {$product->price}\n";
            }
        };
    }
}

$processor = new ProcessSale();
$processor->registerCallback(Totalizer::warnAmount());
$processor->sale(new Product("shoes", 6));
print "\n";
$processor->sale(new Product("coffee", 6));
