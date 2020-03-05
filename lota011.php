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

$pagina = $_REQUEST['pagina'];
$nombre = $_REQUEST['nombre'];
$app = $_REQUEST['app'];
$orden = $_REQUEST['orden'];


mysqli_query($conexion, "INSERT INTO lota01 (pagina, nombre, app, orden) VALUES ('$pagina', '$nombre', '$app', '$orden')") or die("Problemas en el insert: ".mysqli_error($conexion));

echo "<script> alertify.alert('Mensaje','Datos indertados', function(){ alertify.message('OK'); window.location= 'lota02.php'; }); </script>";


?>

</body>
</html>