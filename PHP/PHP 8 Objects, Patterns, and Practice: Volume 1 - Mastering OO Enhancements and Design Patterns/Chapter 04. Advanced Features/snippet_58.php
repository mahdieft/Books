<?php

abstract class DomainObject
{
    abstract public static function create(): DomainObject;
}

class User extends DomainObject
{
    public static function create(): User
    {
        return new User();
    }
}

class Document extends DomainObject
{
    public static function create(): Document
    {
        return new Document();
    }
}
