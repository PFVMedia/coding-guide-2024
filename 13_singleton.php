<?php

class Singleton {
    private static $instance; // holds the instance of the class

    // private constructor to prevent direct instantiation
    private function __construct() {
        // constructor logic here
    }

    // method to get the singleton instance
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // other methods of the class can go here
}

// Usage
$singletonInstance1 = Singleton::getInstance();
$singletonInstance2 = Singleton::getInstance();

// $singletonInstance1 and $singletonInstance2 are the same instance
var_dump($singletonInstance1 === $singletonInstance2); // Outputs: true
