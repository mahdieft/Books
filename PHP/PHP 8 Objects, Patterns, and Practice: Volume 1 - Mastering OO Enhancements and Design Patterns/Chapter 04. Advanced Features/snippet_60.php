<?php

abstract class DomainObject
{
    public static function create(): DomainObject
    {
        return new static();
    }
}

class User extends DomainObject
{
}

class Document extends DomainObject
{
}
