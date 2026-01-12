<?php

public function __clone(): void
{
    $this->id = 0;
    $this->account = clone $this->account;
}
