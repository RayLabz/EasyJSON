<?php

require_once("..\EasyJSON\EasyJSON.php");
require_once("CustomClasses.php");


$carCollection = array();
for ($i = 0; $i < 3; $i++) {
    $engine = new Engine("carEngine" . $i);
    $car = new Car("carModel" . $i, $engine);
    for ($j = 0; $j < 3; $j++) {
        $comp = new Component($j);
        $engine->addComponent($comp);
    }
    $car->setEngine($engine);
    array_push($carCollection, $car);
}

echo $car->toJSON();