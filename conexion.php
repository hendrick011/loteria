<?php

$host = "localhost";
$user = "root";
$clave = "";
$Dbname = "android2";

$conexion = mysqli_connect($host, $user, $clave, $Dbname);

if (!$conexion) {
	echo "Error de conexion";
	exit();
} else 
{
	//echo "Conectada correctamente :) \n"."\n";
}