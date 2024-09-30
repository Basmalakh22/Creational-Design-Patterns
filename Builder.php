<?php

// Product class
class Computer {
    public $processor;
    public $ram;
    public $storage;

    public function __construct() {
        // Optional: Initialize with default values if needed
    }

    public function displaySpecs() {
        echo "Processor: {$this->processor}\n";
        echo "RAM: {$this->ram}\n";
        echo "Storage: {$this->storage}\n";
    }
}

// Builder interface
interface ComputerBuilder {
    public function setProcessor($processor);
    public function setRAM($ram);
    public function setStorage($storage);
    public function getComputer();
}

// Concrete Builder class
class CustomComputerBuilder implements ComputerBuilder {
    private $computer;

    public function __construct() {
        $this->computer = new Computer();
    }

    public function setProcessor($processor) {
        $this->computer->processor = $processor;
        return $this;
    }

    public function setRAM($ram) {
        $this->computer->ram = $ram;
        return $this;
    }

    public function setStorage($storage) {
        $this->computer->storage = $storage;
        return $this;
    }

    public function getComputer() {
        return $this->computer;
    }
}

// Director class
class ComputerDirector {
    private $builder;

    public function __construct(ComputerBuilder $builder) {
        $this->builder = $builder;
    }

    public function buildBasicComputer() {
        $this->builder->setProcessor('Intel i3')
                      ->setRAM('8GB')
                      ->setStorage('256GB SSD');
        return $this->builder->getComputer();
    }

    public function buildHighEndComputer() {
        $this->builder->setProcessor('Intel i9')
                      ->setRAM('32GB')
                      ->setStorage('1TB SSD');
        return $this->builder->getComputer();
    }
}

// Usage

$builder = new CustomComputerBuilder();
$director = new ComputerDirector($builder);

// Build a basic computer
$basicComputer = $director->buildBasicComputer();
echo "Basic Computer Specs:\n";
$basicComputer->displaySpecs();

echo "\n";

// Build a high-end computer
$highEndComputer = $director->buildHighEndComputer();
echo "High-End Computer Specs:\n";
$highEndComputer->displaySpecs();

