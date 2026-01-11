<?php

$product = new ShopProduct(Prodcat::audio);
if ($product->getCat() === Prodcat::audio) {
    print "it is audio\n";
}
if ($product->getCat()->name == "audio") {
    print "it is audio\n";
}
