<?php

function myFirstFunction($a, Array $c, $b)
{
    echo $a . $c . $b;
}
$a = '<pre>';
$b = '</pre>';
myFirstFunction($a , $c = array (123,235,134), $b);

