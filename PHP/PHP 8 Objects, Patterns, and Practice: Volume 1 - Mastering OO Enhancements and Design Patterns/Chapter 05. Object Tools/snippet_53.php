<?php

if (method_exists($product, $method)) {
    print $product->$method(); // invoke the method
}
