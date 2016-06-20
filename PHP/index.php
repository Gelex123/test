<?php
$a = fopen('nastya.txt', 'w');
fwrite($a, '1' . PHP_EOL);
fclose($a);

$a = fopen('nastya.txt', 'a');
fwrite($a, '22'. PHP_EOL);
fclose($a);
PHP_EOL;
$a = fopen('nastya.txt', 'a');
fwrite($a, '333'. PHP_EOL);
fclose($a);
PHP_EOL;
$a = fopen('nastya.txt', 'a');
fwrite($a, '4444'. PHP_EOL);
fclose($a);
PHP_EOL;
$a = fopen('nastya.txt', 'a');
fwrite($a, '55555'. PHP_EOL);
fclose($a);
PHP_EOL;
$a = fopen('nastya.txt', 'a');
fwrite($a, '666666'. PHP_EOL);
fclose($a);
PHP_EOL;
$a = fopen('nastya.txt', 'a');
fwrite($a, '7777777'. PHP_EOL);
fclose($a);
PHP_EOL;
$a = fopen('nastya.txt', 'a');
fwrite($a, '88888888'. PHP_EOL);
fclose($a);
PHP_EOL;
$a = fopen('nastya.txt', 'a');
fwrite($a, '999999999'. PHP_EOL);
fclose($a);
PHP_EOL;
$a = fopen('nastya.txt', 'a');
fwrite($a, '10101010101010101010'. PHP_EOL);
fclose($a);


//$f = fopen('test.txt', 'w');
//fwrite($f, 'Hello worrld' . PHP_EOL . 'This is new string');
//fclose($f);
//
//$f = fopen('test.txt', 'a');
//fwrite($f, 'String added' . PHP_EOL . 'And another one');
//fclose($f);