<?php

    session_start();
    session_destroy();
    header("Location: index.php");// muy importante la L en mayúscula
    exit();
    //delete cookie
    unset($_COOKIE["activities_user"]);
    ?>