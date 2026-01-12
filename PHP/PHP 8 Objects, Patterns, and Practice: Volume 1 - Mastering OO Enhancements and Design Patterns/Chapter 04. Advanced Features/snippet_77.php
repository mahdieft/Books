<?php


public function __isset(string $property): bool
{
    $method = "get{$property}";
    return (method_exists($this, $method));
}
