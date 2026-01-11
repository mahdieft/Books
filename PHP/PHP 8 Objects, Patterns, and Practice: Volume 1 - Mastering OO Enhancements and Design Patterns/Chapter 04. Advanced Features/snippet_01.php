<?php

class StaticExample
{
    public static int $aNum = 0;

    public static function sayHello(): void
    {
        print "hello";
    }
}

print StaticExample::$aNum;
StaticExample::sayHello();
