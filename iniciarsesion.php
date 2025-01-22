<?php
    session_start();

    include 'datos.php';

    $usuario_existe = login($_POST['user'], $_POST['password']);
    if($usuario_existe)
    {
        $_SESSION["user"] = $_POST["user"];
        $proveedor = proveedor($_POST['user']);
        if ($proveedor)
        {
            $_SESSION["proveedor"]=true;
        }
        header("location: inicio.php");
    } else
    {
        header("location: login.html");
    }
?>