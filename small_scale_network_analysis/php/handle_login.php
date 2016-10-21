<?php

    //sanitise and load user data
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]), PASSWORD_DEFAULT);


?>