<?php
    /*
    if ( !isset($_SESSION["user_portal"]) ) {
        header("location:login.php");
    } */

    // session variables
    if ( isset($_SESSION["life"]) && isset($_SESSION["mana"]) ) {
        $life = $_SESSION["life"];
        $mana = $_SESSION["mana"];
    } else {
        $life = $initial_life;
        $mana = $initial_mana;
    }
?>