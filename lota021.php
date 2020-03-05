<?php

require_once 'conexion.php';
session_start();


if(is_array($_POST['checkbox']))
{
while(list($key,$value) = each($_POST['checkbox']))
{

mysqli_query($conexion, "INSERT INTO lota02 (username, pagina, status) VALUES ('hendrick11', '$value', '1')") or die("Problemas en el insert: ".mysqli_error($conexion));
echo "bien";
}
}



?>