<?php

spl_autoload_register('autoLoader');

function autoLoader ($className) {

    if (strpos($className, 'Dotenv') == false) {
        
        $path = 'src/classes/';

        $extension = '.class.php';
        $fileName = $path . $className . $extension;

        if (!file_exists($fileName)) {
            header('HTTP/1.1 404 Not Found');
        }

        include_once $fileName;
    }
    
}