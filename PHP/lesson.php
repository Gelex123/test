<?php
$country = array('Germany', 'Ukraine','Italy', 'Poland', 'China');
echo '<pre>';
print_r($country);
echo '</pre>';

$country2 = array('Germany' => 'Berlin','Ukraine'=>'Kyiv', 'Italy'=>'Rome', 'Poland'=>'Warsaw', 'China'=>'Beijing');
echo '<pre>';
print_r($country2);
echo '</pre>';

$pehov = array('author'=>'Alexey Pehov','genre'=>'fantasy','name'=>'mockingbird', 'price'=>'150grn');
$zykov = array('author'=>'Vitali Zykov','genre'=>'fantasy','name'=>'nameless slave', 'price'=>'120grn');
$akunin = array('author'=>'Boris Akunin','genre'=>'detective','name'=>'Turkish gambit', 'price'=>'90grn');

$books = array($pehov, $zykov, $akunin);
echo '<pre>';
print_r($books);
echo '</pre>';