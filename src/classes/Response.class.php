<?php

class Response {

    private $status;
    private $message;

    public function __construct($status, $message) {
        $this->status = $status;
        $this->message = $message;
    }
}

?>