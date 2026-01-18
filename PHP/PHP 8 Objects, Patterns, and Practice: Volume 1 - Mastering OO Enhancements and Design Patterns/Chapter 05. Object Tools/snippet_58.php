<?php

$product = self::getProduct();
$method = "getTitle"; // define a method name
print $product->$method(); // invoke the method
