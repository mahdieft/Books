<?php

class Totalizer3
{
    private float $count = 0;
    private float $amt = 0;

    public function warnAmount(int $amt): callable
    {
        $this->amt = $amt;
        // from PHP 7.1
        // return \Closure::fromCallable([$this, "processPrice"]);
        // from PHP 8.1
        return $this->processPrice(...);
    }

    private function processPrice(Product $product): void
    {
        $this->count += $product->price;
        print " count: {$this->count}\n";
        if ($this->count > $this->amt) {
            print " high price reached: {$this->count}\n";
        }
    }
}

$totalizer3 = new Totalizer3();
$processor = new ProcessSale();
$processor->registerCallback($totalizer3->warnAmount(8));
$processor->sale(new Product("shoes", 6));
print "\n";
$processor->sale(new Product("coffee", 6));
