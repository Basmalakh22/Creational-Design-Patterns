<?php
    
    class AnimalFactory {
        public static function createAnimal($type) {
            switch ($type) {
                case 'dog':
                    return new Dog();
                case 'cat':
                    return new Cat();
                default:
                    throw new Exception("Animal type not recognized.");
            }
        }
    }