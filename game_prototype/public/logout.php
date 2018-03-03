<?php 
    session_start();
    unset($_SESSION["user_portal"]);
    unset($_SESSION["life"]); unset($_SESSION["mana"]);
    unset($_SESSION["exp"]);
    unset($_SESSION["damage"]); unset($_SESSION["armor"]);
    unset($_SESSION["str"]); unset($_SESSION["agi"]); unset($_SESSION["int"]);
    header("location:login.php");
?>