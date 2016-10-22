<?php

    $server_name = "127.0.0.1";
    $db_user_name = "admin";
    $db_password = "password";
    $db_name = "small_scale_network_analysis";

    // Create connection
    $db = new mysqli($server_name, $db_user_name, $db_password, $db_name);
    
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 

?>