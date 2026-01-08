<?php

class ConfReader
{
    public function getValues(array $default = [])
    {
        $values = [];
        // do something to get values
        // merge the provided defaults (it will always be an array)
        $values = array_merge($default, $values);
        return $values;
    }
}
