<?php

session_start();

if(!$_SESSION["logged_in"]){
    header("Location: /small_scale_network_analysis/small_scale_network_analysis/php/display_scripts/login.php");
}
?>