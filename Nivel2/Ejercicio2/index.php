<?php
require_once "Car.php";

$car1 = new Car("Ford", "1234-ABC", "Gasoline", 220);
echo $car1->boost();

?>