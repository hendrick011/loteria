<!DOCTYPE html>
<html>
<head>
	<title></title>
	
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>



</head>
<body>

<?php

require_once 'conexion.php';
session_start();
// ------------------------------------------------------------------

$nombre = $_REQUEST['nombre'];
$password = $_REQUEST['password'];
$celular = $_REQUEST['celular'];
$nivel = $_REQUEST['nivel'];
$username = $_REQUEST['username'];

mysqli_query($conexion, "INSERT INTO users (nombre, password, celular, nivel, username) VALUES ('$nombre', '$password', '$celular', $nivel, '$username')") or die( "<script> alertify.alert('Mensaje','Problemas en el select', function(){ alertify.message('OK'); window.location= 'usuarios.php'; }); </script>");

echo "<script> alertify.alert('Mensaje','Usuario agregado', function(){ alertify.message('OK'); window.location= 'usuarios.php'; }); </script>";


?>

</body>
</html>