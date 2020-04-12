<?php
/** 
 * This class represents a view for users
 */
class UserView extends User {

    public function findUserView($userId) {
        $result = $this->findUser($userId);
        return $result;
    }

    public function getUsersView() {
        $results = $this->getUsers();

        if(!empty($results)) {
            header('Content-Type: application/json');
            echo json_encode($results);
        } else {
            $data = ["message"=>"Unable to get users data"];
            header('Content-Type: application/json');
            echo json_encode($data);
        }
    }

    public function getUserView($userId) {
        $results = $this->getUser($userId);

        if(!empty($results)) {
            header('Content-Type: application/json');
            echo json_encode($results);
        } else {
            $data = ["message"=>"Unable to get user data"];
            header('Content-Type: application/json');
            echo json_encode($data);
        }
    }

}
?>