<?php

try {
    $conf = new Conf("nonexistent/not_there.xml");
} catch (\Exception) {
    // handle error without using the Exception object
}
