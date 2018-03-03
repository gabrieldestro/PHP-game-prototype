<?php
    $server = "localhost";
    $user   = "root";
    $pwd    = "";
    $name   = "game";

    // Open connection
    $connect = mysqli_connect($server, $user, $pwd, $name);

    // Test connection
    if (mysqli_connect_errno()) {
        die ("Error establishing connection:" . mysqli_connect_errno());
    }
?>