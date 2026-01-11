<?php

try {
    // ...
} catch (\Exception $e) {
    // handle error in some way
    // or
    throw new \Exception("Conf error: " . $e->getMessage());
}
