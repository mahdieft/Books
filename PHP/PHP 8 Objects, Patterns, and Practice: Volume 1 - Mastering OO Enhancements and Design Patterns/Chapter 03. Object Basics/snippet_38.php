<?php

class Storage
{
    public function add(string $key, $value)
    {
        if (!is_bool($value) && !is_string($value)) {
            error_log("value must be string or Boolean - given: " .
                gettype($value));
            return false;
        }
        // do something with $key and $value
    }
}
