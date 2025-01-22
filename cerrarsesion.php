<?php
    session_start();
    unset($_SESSION["user"]);
    unset($_SESSION["proveedor"]);
    header("location: home.php");
?>