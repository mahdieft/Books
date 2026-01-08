<?php

public function outputAddresses($resolve)
{
    if (is_string($resolve)) {
        $resolve = (preg_match("/^(false|no|off)$/i", $resolve)) ?
            false : true;
    }
}
