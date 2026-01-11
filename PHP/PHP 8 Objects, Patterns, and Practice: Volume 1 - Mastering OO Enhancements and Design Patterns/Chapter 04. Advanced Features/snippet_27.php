<?php

public function recordInfo(RecordProduct $prod): int
{
    // we know we can call getPlayLength()
    $length = $prod->getPlayLength();
}
