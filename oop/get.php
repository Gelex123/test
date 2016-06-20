<?php
class A
{
    private $bar = 1;
    private $nast;
    public function __get($bar)
    {
        echo "You tried to get {$bar}";
    }

    public function __clone()
    {
        echo 'Cloned!';
    }
}

$a = new A;
$b = clone $a;
echo $a->bar; // private - You tried to get bar
echo $a->nast; // private - You tried to get bar
echo $a->foo; // no such property - You tried to get foo