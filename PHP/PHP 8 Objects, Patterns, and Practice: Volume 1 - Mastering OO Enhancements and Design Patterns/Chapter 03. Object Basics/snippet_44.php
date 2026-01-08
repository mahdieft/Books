<?php

public function addObject((Traversable & Stringable)|Loggable|null $addme): void
{
    $this->collection[] = $addme;
}
