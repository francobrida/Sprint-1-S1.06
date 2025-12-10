<?php
require_once __DIR__ . '/vendor/autoload.php'; 
require_once "Client.php"; // From what I read, this wouldn't be necessary once we have Composer's autoload.
// However I had to add it anyway, otherwise it gave me an error when running it in the browser.

use Faker\Factory;

$faker = Factory::create();

$newClient = new Client($faker->name(), $faker->email(), $faker->phoneNumber(), $faker->iban(), $faker->word());

echo $newClient->__toString();

?>