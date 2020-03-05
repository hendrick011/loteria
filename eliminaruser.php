<?php

require_once 'conexion.php';

session_start();

$username = $_SESSION['username'];


$registros = mysqli_query($conexion, "DELETE FROM users WHERE username = '$username'") or die("Problemas en el select:".mysqli_error($conexion));
echo '<script>alert("Usuario eliminado")</script> ';
    echo "<script>location.href='index.php'</script>";