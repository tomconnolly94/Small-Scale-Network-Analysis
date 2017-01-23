<?php

    $server_name = "127.0.0.1";
    $db_user_name = "root";
    $db_password = "thomas";
    $db_name = "small_scale_network_analysis";

    // Create connection
    $db = new mysqli($server_name, $db_user_name, $db_password, $db_name);
    
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } else{
        echo "Successful connection\n";
    }

?>