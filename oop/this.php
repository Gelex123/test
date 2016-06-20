<?php
class Human
{
    public $age;
    public $hairColor = 'black';
    public $name;

    public function getName()
    {
        echo $this->name;
        $this->test();
    }

    public function test()
    {
        echo ' test <br>';
    }

}

$mike = new Human;
$mike->name = 'Mike';
$mike->getName();

$jeff = new Human;
$jeff->name = 'Jeff';
$jeff->getName();