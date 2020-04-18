<?php

require_once 'Car.php';


$car = new Car();

$car->setHasParkBrake(true);

try {
    $car->start();
} catch (Exception $e) {
    $car->setHasParkBrake(false);
}finally{
    echo "Ma voiture roule comme un donut";
}
