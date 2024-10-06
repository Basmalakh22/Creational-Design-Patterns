<?php
    class ToyotaFactory implements VehicleFactory {
        public function createCar(): Car {
            return new ToyotaCar();
        }
    
        public function createTruck(): Truck {
            return new ToyotaTruck();
        }
    }
