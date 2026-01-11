<?php

enum Prodcat
{
    case household;
    case clothing;
    case reading;
    case audio;
    case grocery;
}

$prodtype = Prodcat::reading;
print_r($prodtype);
