<?php

public function __unset(string $property): void
{
    $method = "set{$property}";
    if (method_exists($this, $method)) {
        $this->$method(null);
    }
}
