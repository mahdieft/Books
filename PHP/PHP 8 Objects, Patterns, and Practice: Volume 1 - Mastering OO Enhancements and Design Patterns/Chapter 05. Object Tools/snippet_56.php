<?php

$product = self::getBookProduct(); // acquire an object
if (is_subclass_of($product, ShopProduct::class)) {
    print "BookProduct is a subclass of ShopProduct\n";
}
