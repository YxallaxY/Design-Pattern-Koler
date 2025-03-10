<?php
require('../vendor/autoload.php');

use App\Factory\VehicleFactory;

try {
    // Get a vehicle by type
    $bicycle = VehicleFactory::getVehicle('Bicycle');
    echo "Vehicle Type: " . $bicycle->getType() . "\n";
    echo "Cost per Km: " . $bicycle->getCostPerKm() . "\n";
    echo "Fuel Type: " . $bicycle->getFuelType() . "\n\n";

    // Get a vehicle by distance and weight
    $vehicle = VehicleFactory::getVehicleByDistanceAndWeight(25, 15);
    echo "Vehicle Type: " . $vehicle->getType() . "\n";
    echo "Cost per Km: " . $vehicle->getCostPerKm() . "\n";
    echo "Fuel Type: " . $vehicle->getFuelType() . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}