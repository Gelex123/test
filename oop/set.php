<?php

class A
{
    private $bar = 1;

    public function __get($name)
    {
        echo "You tried to get {$name}";
    }

    public function __set($name, $val)
    {
        echo "You tried to set {$name} to {$val}";
    }

    public function __clone()
    {
        echo 'Cloned!';
    }
}

$a = new A;
$a->bar = 2; // You tried to set bar to 2
$a->foo = 3; // You tried to set foo to 3