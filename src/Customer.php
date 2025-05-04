<?php

namespace Darell\BelajarPhpComposer;

class Customer
{
    public function __construct(private string $name) {}
    public function sayHallo(string $name = 'Guest'): string
    {
        return "Hello $name , nama saya $this->name";
    }
}
