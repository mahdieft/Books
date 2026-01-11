<?php

public function addProduct(ShopProduct $prod)
{
    // even if $prod is a RecordProduct object
    // we don't *know* this -- so we can't
    // presume to use getPlayLength()
    // ...
}
