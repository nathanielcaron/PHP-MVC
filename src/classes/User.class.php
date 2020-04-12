<?php

require 'vendor/autoload.php';

/** 
 * This class represents a model for users
 */
class User {

    private $dbConnection = null;
    
    protected function getUser($firstName, $lastName) {
        $dbConnection = (new Dbh())->getConnection();
        $sql = "SELECT * FROM users WHERE user_first_name = ? AND user_last_name = ?";

        $stmt = $dbConnection->prepare($sql);
        $stmt->execute([$firstName, $lastName]);

        $results = $stmt->fetchAll();

        return $results;
    }

    protected function setUser($firstName, $lastName, $dob) {
        $dbConnection = (new Dbh())->getConnection();
        $sql = "INSERT INTO users(user_first_name, user_last_name, user_dob) VALUES (?, ?, ?);";

        $stmt = $dbConnection->prepare($sql);
        $stmt->execute([$firstName, $lastName, $dob]);
    }
    
}
?>