<?php

class Checkout
{
    final public function totalize(): void
    {
        // calculate bill
    }
}

class IllegalCheckout extends Checkout
{
    final public function totalize(): void
    {
        // change bill calculation
    }
}
