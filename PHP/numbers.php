<?php
//$a = 60 * 60 * 24 * 365;
//echo $a;
//$b = $a % 2;
//echo '<br>>';
//echo $b;

//$c = 1;
//$c .= 2;
//$c .= 3;
//$c .= 4;
//$c .= 5;
//echo $c;
//echo '<br>';
//$e = 2;
//$q = 1 . $e . 3;
//$q .= 4;
//$q .= 5;
//echo $q;

$a = false && true || false && true || !false && true;
var_dump($a); // bool(true)
echo '<br>';
$x = 9 % 2;
var_dump((bool)$x);


