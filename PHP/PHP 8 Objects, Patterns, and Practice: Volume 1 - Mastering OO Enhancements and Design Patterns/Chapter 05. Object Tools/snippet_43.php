<?php

$product = self::getProduct();
if (get_class($product) === 'popp\ch05\batch05\RecordProduct') {
    print "\$product is a RecordProduct object\n";
}
