<?php

class Person
{
    private ?string $myname;
    private ?int $myage;

    public function __set(string $property, mixed $value): void
    {
        $method = "set{$property}";
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
    }

    public function setName(?string $name): void
    {
        $this->myname = $name;
        if (!is_null($name)) {
            $this->myname = strtoupper($this->myname);
        }
    }

    public function setAge(?int $age): void
    {
        $this->myage = $age;
    }
}
