<?php
    
    require_once 'Animal.php';
    require_once 'Dog.php';
    require_once 'Cat.php';
    require_once 'AnimalFactory.php';
    
    try {
        // Create a Dog
        $dog = AnimalFactory::createAnimal('dog');
        echo "Dog sound: " . $dog->makeSound() . "\n"; // Output: Dog sound: Woof!
        
        // Create a Cat
        $cat = AnimalFactory::createAnimal('cat');
        echo "Cat sound: " . $cat->makeSound() . "\n"; // Output: Cat sound: Meow!
        
        // Attempting to create an unknown animal
        $unknownAnimal = AnimalFactory::createAnimal('rabbit'); // This will throw an exception
    } catch (Exception $e) {
        echo $e->getMessage(); // Output: Animal type not recognized.
    }
    