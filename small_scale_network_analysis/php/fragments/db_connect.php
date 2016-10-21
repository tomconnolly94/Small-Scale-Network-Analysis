<?php

$server_name = "127.0.0.1";
$username = "admin";
$password = "jFnAYeDjwMQUMvaP";

try {
    $conn = new PDO("mysql:host=$server_name;dbname=small_scale_network_analysis", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

?>