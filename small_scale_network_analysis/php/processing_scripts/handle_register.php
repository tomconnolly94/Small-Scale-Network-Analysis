<?php

$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$hashed_password = md5(htmlspecialchars($_POST["password"]));

include("../fragments/db_connect.php");

$results = $db->query("SELECT COUNT(*) FROM user_information;");

$admin = 1;

//if this is not the first user then
if($results->fetch_assoc()["COUNT(*)"] > 0){
    $admin = 0;
}

$db->query("INSERT INTO 
                user_information ('name','username','password','email','admin') 
            VALUES 
                ('$name', '$username', '$hashed_password','$email', '$admin')");

session_start();
$_SESSION["logged_in"] = true;
$_SESSION["name"] = $name;

header("Location: ../display_scripts/home.php");

?>