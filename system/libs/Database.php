<?php

/**
 * @desc Database Class For PDO 
 * @desc Main Database 
 */

class Database extends PDO {

        // Constructor Function Make Connect Database
    function __construct($dsn, $user, $pass) {
        try { 
            // $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
            // set the PDO error mode to exception
            // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
            parent::__construct($dsn, $user, $pass);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function select ($tableName) {
        $sql = "SELECT * FROM ${tableName}";
        $stmt = $this->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(parent::FETCH_ASSOC);
    }
    
}