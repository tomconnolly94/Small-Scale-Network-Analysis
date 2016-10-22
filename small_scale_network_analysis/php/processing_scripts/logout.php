<?php

session_start();
$_SESSION["logged_in"] = false;
header("Location: /small_scale_network_analysis/small_scale_network_analysis/php/display_scripts/login.php")

?>