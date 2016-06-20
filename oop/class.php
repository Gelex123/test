<?php
class Human {

}
class Animal {

}
$mike = new Human;
$john = new Human;

$cat = new Animal;
$dog = new Animal;

instanceof ($dog){
    Animal::class;
}
var_dump($mike);
var_dump($cat);
var_dump(new Animal);