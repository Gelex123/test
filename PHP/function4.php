<?php
// sum of two values
function sum($x, $y)
{
    $s = $x + $y;
    return $s;
}
// check if  -10 < $x < 10
function intervalOk($x)
{
    $boolResult = ($x <= 10 && x >= -10);
    return $boolResult;
}
$a = 0.4;
$b = 6.4;
if (intervalOk($a) && intervalOk($b)) {
    $res = sum($a, $b);
    echo $res; // 6.8
}
function factorial($n)
{
    if ($n == 1 || $n == 0) {
        return 1;
    }
    return $n * factorial($n-1);
}
echo '<br>';

echo factorial(6);