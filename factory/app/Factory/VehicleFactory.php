<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\Vehicle;

class VehicleFactory {
    public static function getVehicle(string $type): Vehicle {
        switch ($type) {
            case 'Bicycle':
                return new Bicycle(0.1, 'None');
            case 'Car':
                return new Car(0.5, 'Petrol');
            case 'Truck':
                return new Truck(1.0, 'Diesel');
            default:
                throw new \Exception("Invalid vehicle type");
        }
    }

    public static function getVehicleByDistanceAndWeight(int $distance, int $weight): Vehicle {
        if ($distance < 20 && $weight <= 20) {
            return new Bicycle(0.1, 'None');
        } elseif ($weight > 200) {
            return new Truck(1.0, 'Diesel');
        } else {
            return new Car(0.5, 'Petrol');
        }
    }
}