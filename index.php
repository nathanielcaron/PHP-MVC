<?php
    require 'src/includes/class-autoload.inc.php';

    $userView = new UserView();
    $userView->showUser("John", "Doe");

    // $userController = new UserController();
    // $userController->createUser("Mike", "Stevens", "1992-02-02");
?>
