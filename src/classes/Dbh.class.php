<?php

require '../vendor/autoload.php';

/** 
 * This class represents a database handle
 */
class Dbh {

    private $dbConnection = null;

    public function __construct() {
        \Dotenv\Dotenv::createImmutable(__DIR__ . "/../../")->load();

        $host = getenv('DB_HOST');
        $port = getenv('DB_PORT');
        $db   = getenv('DB_DATABASE');
        $user = getenv('DB_USERNAME');
        $pass = getenv('DB_PASSWORD');

        try {
            $pdo = new \PDO("mysql:host=$host;port=$port;charset=utf8mb4;dbname=$db", $user, $pass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->dbConnection = $pdo;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function getConnection() {
        return $this->dbConnection;
    }

}
?>