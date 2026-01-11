<?php

$test1 = Prodcat::audio->isLeisure(); // true
$product = new ShopProduct(Prodcat::clothing);
$test2 = $product->getCat()->isLeisure(); // false
