<?php

if (is_callable([$product, $method])) {
    print $product->$method(); // invoke the method
}
