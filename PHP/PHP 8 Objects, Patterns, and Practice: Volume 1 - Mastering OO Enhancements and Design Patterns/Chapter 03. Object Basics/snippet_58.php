<?php

// ShopProduct
public function getSummaryLine(): string
{
    $base = "{$this->title} ( {$this->producerMainName}, ";
    $base .= "{$this->producerFirstName} )";
    return $base;
}

// BookProduct
public function getSummaryLine(): string
{
    $base = parent::getSummaryLine();
    $base .= ": page count - $this->numPages";
    return $base;
}
