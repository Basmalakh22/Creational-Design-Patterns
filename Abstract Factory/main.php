<?php
    function renderVehicles(VehicleFactory $factory) {
        $car = $factory->createCar();
        $truck = $factory->createTruck();
    
        echo $car->drive() . "\n";
        echo $truck->haul() . "\n";
    }
    
    // Create Toyota vehicles
    $toyotaFactory = new ToyotaFactory();
    renderVehicles($toyotaFactory);
    
    // Create Ford vehicles
    $fordFactory = new FordFactory();
    renderVehicles($fordFactory);
