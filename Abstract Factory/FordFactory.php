<?php
    class FordFactory implements VehicleFactory {
        public function createCar(): Car {
            return new FordCar();
        }
    
        public function createTruck(): Truck {
            return new FordTruck();
        }
    }
