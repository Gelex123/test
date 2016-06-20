<?php

class A
{
    private function test($a, $b)
    {
        echo $a . $b;
    }

    public function __call($name, $args)
    {
        echo "You tried to call {$name} with {$args}:";
    }
}

$a = new A;
$a->test('Hello', 123);
// You tried to call test with args:Array ( [0] => Hello [1] => 123 )