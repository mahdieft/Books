<?php

public function getPrice(): int|float
{
    return ($this->price - $this->discount);
}
