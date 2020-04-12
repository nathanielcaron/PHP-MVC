<?php
/** 
 * This class represents a controller for users
 */
class UserController extends User {

    public function createUserController(Array $input) {
        $this->createUser($input);
    }

    public function updateUserController($userId, Array $input) {
        $this->updateUser($userId, $input);
    }

    public function deleteUserController($userId) {
        $this->deleteUser($userId);
    }
    
}
?>