<?php

class DatabaseConnection {
    // Store the single instance of the class
    private static $instance = null;
    private $connection;
    
    // Private constructor to prevent multiple instances
    private function __construct() {
        $this->connection = new PDO('mysql:host=localhost;dbname=test_db', 'root', 'password');
    }

    // Public static method to get the single instance
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    // Method to get the database connection
    public function getConnection() {
        return $this->connection;
    }
}

// Usage
$db1 = DatabaseConnection::getInstance();
$db2 = DatabaseConnection::getInstance();

if ($db1 === $db2) {
    echo "Both instances are the same.";
} else {
    echo "Instances are different.";
}

