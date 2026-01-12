<?php

class Totalizer2
{
    public static function warnAmount($amt): callable
    {
        $count = 0;
        return function ($product) use ($amt, &$count) {
            $count += $product->price;
            print " count: $count\n";
            if ($count > $amt) {
                print " high price reached: {$count}\n";
            }
        };
    }
}

$processor = new ProcessSale();
$processor->registerCallback(Totalizer2::warnAmount(8));
$processor->sale(new Product("shoes", 6));
print "\n";
$processor->sale(new Product("coffee", 6));
