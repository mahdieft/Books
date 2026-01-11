<?php

enum Prodcat: int
{
    case household = 1;
    case clothing = 2;
    case reading = 3;
    case audio = 4;
    case grocery = 5;

    public static function getRand(): static
    {
        $num = rand(1, 5);
        return self::from($num);
    }
}
