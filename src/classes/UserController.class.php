<?php
/** 
 * This class represents a controller for users
 */
class UserController extends User {
    public function createUser($firstName, $lastName, $dob) {
        $this->setUser($firstName, $lastName, $dob);
    }
}
?>