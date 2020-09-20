<?php

    $servername = "localhost";
    $username = "chrisken";
    // jika belum di set kosongkan saja 
    $password = "keken@ken"; 

    $dbname = "php_basic";

    // create connection
    $conn = new mysqli ($servername, $username, $password, $dbname);

    // check connection
    if ($conn->connect_error) {
        die ("Connection failed: " .$conn->connect_error);
    }
    else {
        // echo "Connected Successfully";
    }

?>