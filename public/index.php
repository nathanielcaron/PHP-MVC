<?php
    require '../src/includes/class-autoload.inc.php';

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = explode( '/', $uri );

    if ($uri[1] !== 'user') {
         echo "not found";
    }

    if (isset($uri[2])) {
        $userId = (int) $uri[2];
    }
    
    $requestMethod = $_SERVER["REQUEST_METHOD"];

    $router = new Router($requestMethod, $userId);
    $router->processRequest();
    
?>
