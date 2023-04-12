<?php

class MassIntentions {

    private $conn;

    function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "mass_intention_system");

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function debug($var = null)
    {
        $output = print_r($var, true);
        echo "<pre>{$output}</pre>";
    }

    function viewMassIntentions() 
    {
        echo 'test';
    }

    function addMassIntention()
    {
        
    }

}


?>