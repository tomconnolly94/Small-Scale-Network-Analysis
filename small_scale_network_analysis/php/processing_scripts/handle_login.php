<?php

if(!isset($_POST["username"]) || !isset($_POST["password"])){
    header("Location: ../display_scripts/login.html");
}
//sanitise and load user data
$username = htmlspecialchars($_POST["username"]);
$hashed_password = md5(htmlspecialchars($_POST["password"]));

//init db connection
include("../fragments/db_connect.php");

//query db to check user details
$results = $db->query("SELECT * FROM user_information WHERE username = '$username';");

$result = $results->fetch_assoc();


if($hashed_password != $result["password"]){
    $_SESSION["logged_in"] = false;
    include("../fragments/check_logged_in.php");
}
else{
    session_start();
    $_SESSION["logged_in"] = true;
    $_SESSION["name"] = $result["name"];
    header("Location: ../display_scripts/home.php");
}

?>