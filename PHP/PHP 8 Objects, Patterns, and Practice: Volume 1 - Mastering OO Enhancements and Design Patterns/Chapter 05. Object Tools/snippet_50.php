<?php

if (in_array($method, get_class_methods($product))) {
    print $product->$method(); // invoke the method
}
