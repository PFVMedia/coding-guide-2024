<?php

class Vehicle {
    private $speed = 0;

    public function accelerate($amount) {
        $this->speed += $amount;
        echo "Accelerating. Current speed: {$this->speed} km/h\n";
    }

    public function turnLeft() {
        echo "Turning left.\n";
    }

    public function turnRight() {
        echo "Turning right.\n";
    }

    public function moveForward() {
        echo "Moving forward.\n";
    }

    public function moveBackward() {
        echo "Moving backward.\n";
    }
}

// car inherits from vehicle
class Car extends Vehicle {

}

// Example usage of the Car class
$myCar = new Car();

$myCar->accelerate(30);
$myCar->moveForward();
$myCar->turnLeft();
$myCar->accelerate(20);
$myCar->moveBackward();
$myCar->turnRight();
