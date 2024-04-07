<?php

// Define a class
class Car {
    // Properties (attributes)
    public $brand;
    public $model;

    // Constructor
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    // Method
    public function startEngine() {
        echo "Starting the engine of a {$this->brand} {$this->model}.\n";
    }
}

// Create an object (instance of the class)
$myCar = new Car("Toyota", "Camry");

// Access properties and call methods
echo "My car is a {$myCar->brand} {$myCar->model}.\n";
$myCar->startEngine();
