<?php

class Car {
    public $color;

    public function __construct($color) {
        $this->color = $color;
    }
}

$myCar = new Car("red");

echo "The color of my car is: " . $myCar->color;
