<?php

$processor = new ProcessSale();
$processor->registerCallback(function ($product) {
    print "logging ({$product->name})\n";
});

$processor->sale(new Product("shoes", 6));
print "\n";
$processor->sale(new Product("coffee", 6));
