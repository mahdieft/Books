<?php

try {
    $conf = new Conf("nonexistent/not_there.xml");
} catch (\Exception $e) {
    // handle error...
    // or rethrow
    throw $e;
}
