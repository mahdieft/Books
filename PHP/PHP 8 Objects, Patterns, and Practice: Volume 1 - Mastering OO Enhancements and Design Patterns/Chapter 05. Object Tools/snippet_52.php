<?php

$method = "getTitle"; // define a method name
if (is_callable([$product, $method], false, $callableName)) {
    print $callableName;
}
