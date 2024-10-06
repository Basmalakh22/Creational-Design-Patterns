<?php
    interface VehicleFactory {
        public function createCar(): Car;
        public function createTruck(): Truck;
    }
