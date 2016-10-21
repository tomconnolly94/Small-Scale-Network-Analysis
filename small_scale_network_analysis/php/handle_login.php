<?php

    //sanitise and load user data
    $username = htmlspecialchars($_POST["username"]);
    $hashed_password = password_hash(htmlspecialchars($_POST["password"]), PASSWORD_DEFAULT);

echo $hashed_password;

?>