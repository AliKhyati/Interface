<?php


require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bike.php';


$car = new Car();
var_dump($car->switchOff());

$bike = new Bike();

var_dump($bike->getCurrentSpeed());
var_dump($bike->switchOn());