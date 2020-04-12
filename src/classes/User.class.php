<?php
/** 
 * This class represents a model for users
 */
class User extends Dbh {
    
    protected function getUser($firstName, $lastName) {
        $sql = "SELECT * FROM users WHERE user_first_name = ? AND user_last_name = ?";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName]);

        $results = $stmt->fetchAll();

        return $results;
    }

    protected function setUser($firstName, $lastName, $dob) {
        $sql = "INSERT INTO users(user_first_name, user_last_name, user_dob) VALUES (?, ?, ?);";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $dob]);
    }
    
}
?>