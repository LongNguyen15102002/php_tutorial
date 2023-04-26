<?php
    // PDO - PHP Data Object
    define('DATABAS_SERVER', 'localhost');
    define('DATABASE_USER', 'root');
    define('DATABASE_PASSWORD', '');
    define('DATABASE_NAME', 'phpapp');
    
    try {
        $connection = new PDO("mysql: host=".DATABAS_SERVER."; dbname=".DATABASE_NAME,
        DATABASE_USER, DATABASE_PASSWORD);   
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
    } catch (PDOException $e) {
        echo "Connection failed: ". $e->getMessage();
        $connection = null;
    }