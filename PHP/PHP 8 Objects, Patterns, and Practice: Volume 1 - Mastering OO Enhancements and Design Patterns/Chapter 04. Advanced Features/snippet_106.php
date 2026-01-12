<?php

$markup = 3;
$counter = fn(Product $product) => print "($product->name) marked up price: " . ($product->price + $markup) . "\n";
$processor = new ProcessSale();
$processor->registerCallback($counter);
$processor->sale(new Product("shoes", 6));
print "\n";
$processor->sale(new Product("coffee", 6));
