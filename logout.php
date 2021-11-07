<?php

    session_start();
    session_destroy();
    //delete cookie
    // this does not work unset($_COOKIE["activities_user"]);
    setcookie("activities_user", $user_name, time() -86400, "/"); 
    header("Location: index.php");// muy importante la L en mayúscula
    exit();
    ?>