<?php

class Mailer
{
    public function doMail(Product $product): void
    {
        print " mailing ({$product->name})\n";
    }
}

$processor = new ProcessSale();
$processor->registerCallback([new Mailer(), "doMail"]);
$processor->sale(new Product("shoes", 6));
print "\n";
$processor->sale(new Product("coffee", 6));
