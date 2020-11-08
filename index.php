<?php

require_once './Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

require_once './Car.php';

try{
    $car = new Car('green', 4, 'electric', true);
    $car->start();
    echo $car->forward();
} catch(Exception $e) {
    $car->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}
var_dump($car);

require_once './Truck.php';
$truck = new Truck('red', 3, 'fuel', 3000);
echo $truck->forward();
var_dump($truck);
echo $truck->brake();
echo $truck->getStockStatus();