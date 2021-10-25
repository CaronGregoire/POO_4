<?php

require_once 'Car.php';

$car = new Car('green', 4, 'electric');


try {
    $car->start();
} catch (Exception $e) {
    echo $e->getMessage() . ' => Lache le frein à main. ' . PHP_EOL;;
    $car->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut" . PHP_EOL;
}




?>

