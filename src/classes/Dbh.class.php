<?php

require_once 'vendor/autoload.php';

/** 
 * This class represents a database handle
 */
class Dbh {

    private $host = "localhost";
    private $port = "3306";
    private $db   = "php-mvc";
    private $user = "root";
    private $pass = "";

    protected function connect() {
        \Dotenv\Dotenv::create(__DIR__)->load();
        
        $dsn = 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->db;
        $pdo = new PDO($dsn, $this->user, $this->pass);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }
}
?>