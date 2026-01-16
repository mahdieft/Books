<?php

$product = self::getProduct();

if ($product instanceof \popp\ch05\batch05\RecordProduct) {
    print "\$product is an instance of RecordProduct\n";
}
