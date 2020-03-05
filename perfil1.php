<!DOCTYPE html>
<html>
<head>	
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


mysqli_query($conexion, "update users
                          set nombre='$nombre', password='$password', celular='$celular', nivel='$nivel'
                        where username='$username'") or
  die("Problemas en el select:".mysqli_error($conexion));

echo "<script> alertify.alert('Mensaje','Datos Actualizaos correctamente', function(){ alertify.message('Aceptar'); window.location= 'perfil.php'; }); </script>";


?>

</body>
</html>