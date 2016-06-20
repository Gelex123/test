<?php
class User {
    public $login;
    public $password;
    public $email;
    public $rating = '0';
    public $isLogged;

    public function login(){
        echo 'login <br>';
        $this->isLogged = true;
    }
    public function logout(){
        echo 'logout <br>';
        $this->isLogged = false;
    }

}
$user1 = new User;
$user1->login();
$user1->logout();

$rich = new User;
$rome = new User;
$andy = new User;

$rich->login = 'Rich';
$rome->login = 'Rome';
$andy->login = 'Andy';


class Car {
    public $brand;
    public $model;
    public $year;
    public $driver;
    private $price;
    public function setPrice ($price)
    {
        $this->price = round($price, 2);
    }

    public function getPrice()
    {
        number_format($this->price, 2, '.', '');
        return $this->price;
    }

    public function showBrand()
    {
        echo $this->brand;
    }

    public function showModel()
    {
       echo  $this->model;
    }
}
$toyota = new Car;
$mazda = new Car;
$ford = new Car;

$toyota->brand = 'Toyota';
$toyota->model = 'Corolla';
$toyota->year = '2000';
$toyota->driver = $rich->login;


$mazda->brand = 'Mazda';
$mazda->model = '6';
$mazda->year = '2015';
$mazda->driver = $rome->login;

$ford->brand = 'Ford';
$ford->model = 'Taurus';
$ford->year = '1995';
$ford->driver = $andy->login;



//class Human
//{
//    public $age;
//    public $hairColor = 'black';
//    public $name;
//
//    public function getName()
//    {
//        echo $this->name;
//        $this->test();
//    }
//
//    public function test()
//    {
//        echo ' test <br>';
//    }
//
//}
//
//$mike = new Human;
//$mike->name = 'Mike';
//$mike->getName();
//
//$jeff = new Human;
//$jeff->name = 'Jeff';
//$jeff->getName();

