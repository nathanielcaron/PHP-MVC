<?php

require '../vendor/autoload.php';

/** 
 * This class represents a model for users
 */
class User {

    private $dbConnection = null;

    public function findUser($userId) {
        $dbConnection = (new Dbh())->getConnection();
        $sql = "SELECT * FROM users WHERE user_id = ?";

        $stmt = $dbConnection->prepare($sql);
        $stmt->execute([$userId]);

        $results = $stmt->fetchAll();

        if($results) {
            return true;
        }
        else {
            return false;
        }
    }

    protected function getUsers() {
        $dbConnection = (new Dbh())->getConnection();
        $sql = "SELECT * FROM users;";

        $stmt = $dbConnection->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();

        return $results;
    }
    
    protected function getUser($userId) {
        $dbConnection = (new Dbh())->getConnection();
        $sql = "SELECT * FROM users WHERE user_id = ?;";

        $stmt = $dbConnection->prepare($sql);
        $stmt->execute([$userId]);

        $results = $stmt->fetchAll();

        return $results;
    }

    protected function createUser(Array $input) {
        $dbConnection = (new Dbh())->getConnection();
        $sql = "INSERT INTO users(user_first_name, user_last_name, user_dob) VALUES (?, ?, ?);";

        $stmt = $dbConnection->prepare($sql);
        $stmt->execute([$input['firstName'], $input['lastName'], $input['dob']]);
    }
    
    protected function updateUser($userId, Array $input) {
        $dbConnection = (new Dbh())->getConnection();
        $sql = "UPDATE users SET user_first_name = ?, user_last_name = ?, user_dob = ? WHERE user_id = ?;";

        $stmt = $dbConnection->prepare($sql);
        $stmt->execute([$input['firstName'], $input['lastName'], $input['dob'], $userId]);
    }

    protected function deleteUser($userId) {
        $dbConnection = (new Dbh())->getConnection();
        $sql = "DELETE FROM users WHERE user_id = ?;";

        $stmt = $dbConnection->prepare($sql);
        $stmt->execute([$userId]);
    }
}
?>