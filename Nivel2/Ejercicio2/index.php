<?php
require_once "Car.php";
// Trait created
trait Turbo {

    public function boost() : string{
        return "Turbo Started";
    }
}

$car1 = new Car("Ford", "1234-ABC", "Gasoline", 220);
echo $car1->boost();

?>