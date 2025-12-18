<?php
require_once "Turbo.php";

class Car {
    private string $brand;
    private string $licensePlate;
    private string $fuelType;
    private int $topSpeed;

    use Turbo;

    public function __construct(string $brand, string $licensePlate, string $fuelType, int $topSpeed) {
        $this->brand = $brand;
        $this->licensePlate = $licensePlate;
        $this->fuelType = $fuelType;
        $this->topSpeed = $topSpeed;
    }

 
}


?>