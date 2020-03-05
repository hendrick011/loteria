<!DOCTYPE html>
<html>
<head>
	<title>Lota 02</title>

	<link rel="stylesheet" type="text/css" href="estilo/style.css">
  <link rel="shortcut icon" href="img/loteria.png">

</head>
<body>


<!-------------------NAVBAR--------------------->
<header>
	
<div class="header">
        <div class="contenedor">
        <h1 class="logo">Marcos 01</h1>
        <span class="icon-menu" id="boton-menu"></span>
        <nav class="nav" id="nav">
        <ul class="menu">
          <li class="menu__item"><a class="menu__link" href="login.php">Menu</a></li>
          <li class="menu__item"><a class="menu__link select" href="lota02.php">Lota02</a></li>
          <li class="menu__item"><a class="menu__link" href="usuarios.php">Usuarios</a></li>
          <li class="menu__item"><a class="menu__link" href="loteria.php">Loteria </a></li>
          <li class="menu__item"><a class="menu__link" href="perfil.php"><img src="img/user.png"></a></li>
          <li class="menu__item"><a class="menu__link" href="logout.php"><img src="img/logout.png"></a></li>
        </ul>
        </nav>
        </div>

</header>
<br>
<br>
<br>

<style >
  h4{
    margin-top: 90px;
    margin-left: 320px;
    font-family: 'Ubuntu';
    font-size: 30px;
    color: #FFFFFF;
    font-style: normal;
  }
</style>
<h4>Establecer</h4>
<!----------------------FORMULARIO-------------------------->

<div class="form2">
  <form action="lota011.php" method="POST" autocomplete="off">
  
  <h2>Registrar</h2>
  <br>
  <input class="edittext" name="pagina" required placeholder="   Pagina">
  <br>
  <br>
  <input class="edittext" name="nombre" required placeholder="   Nombre">
  <br>
  <br>
  <input  class="edittext"name="app" required placeholder="   Aplicacion">
  <br>
  <br>
  <input class="edittext" name="orden" required placeholder="   Orden">
  <br>
  <br>
  <br>
  <input class="boton" type="submit" name="Enviar" value="Enviar" > 
  <br>
  <br>
  </form>
</div>

  <br>
  <br>
  <br>
  <br>
  <br>

  <!------------------Tabla--------------------------->
 
  <table class="tab">
  <tbody>

<tr>

<th>Página</th>
<th>Nombre</th>
<th>Aplicación</th>
<th>Selección</th>
 
</tr>

<?php
require_once 'conexion.php';
session_start();

$regis = mysqli_query($conexion, "SELECT pagina, nombre, app FROM lota01") or die("Problemas en el select:".mysqli_error($conexion));


  
  while($row= mysqli_fetch_row($regis)) {
    

echo '<tr>
<td>'.$row[0].'</td>
<td>'.$row[1].'</td>
<td>'.$row[2].'</td>
<td><input class="checkbox" name="checkbox[]" type="checkbox" value="1"</td>

</tr>';


}

echo '</tbody> 
</table>
<input class="boton2" type="submit" name="Guardar" value="Guardar">';


?>

<br>
<br>
<br>
<br>

<!-------------------footer---------------------------------->


<footer class="footer">
      
    <p class="copy">&copy; IMB 2020  -  Todos los derechos reservados.</p>
</footer>

</body>
</html>