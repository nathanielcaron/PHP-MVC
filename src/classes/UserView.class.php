<?php
/** 
 * This class represents a view for users
 */
class UserView extends User {

    public function showUser($firstName, $lastName) {
        $results = $this->getUser($firstName, $lastName);

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