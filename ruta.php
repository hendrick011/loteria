<!DOCTYPE html>
<html>
<head>
	<title>Rutas</title>

	<link rel="stylesheet" type="text/css" href="estilo/style.css">
  <link rel="shortcut icon" href="img/loteria.png">

</head>
<body>

<?php
session_start();
  ?>

<!-------------------NAVBAR--------------------->
<header>
	
<div class="header">
        <div class="contenedor">
        <h1 class="logo">Marcos 01</h1>
        <span class="icon-menu" id="boton-menu"></span>
        <nav class="nav" id="nav">
        <ul class="menu">
          <li class="menu__item"><a class="menu__link" href="login.php">Menu</a></li>
          <li class="menu__item"><a class="menu__link" href="lota02.php">Lota02</a></li>
          <li class="menu__item"><a class="menu__link" href="usuarios.php">Usuarios</a></li>
          <li class="menu__item"><a class="menu__link" href="loteria.php">Loteria </a></li>
         <li class="menu__item"><a class="menu__link" href="perfil.php"><img src="img/user.png"></a></li>
          <li class="menu__item"><a class="menu__link" href="logout.php"><img src="img/logout.png"></a></li>
        </ul>
        </nav>
        </div>

</header>
<br>

<!----------------------FORMULARIO-------------------------->

<div class="form4">
  <form action="#" method="POST" autocomplete="off">
  <br>
  <br>
  <h2>Registrar Rutas</h2>
  <br>
  <br>
  <input class="edittext" name="ruta" required placeholder="   Ruta">
  <br>
  <br>
  <input class="edittext" name="nombre" required placeholder="   Nombre">
  <br>
  <br>
  <br>
  <input class="boton3" type="submit" name="Enviar" value="Guardar" > 
  <input class="boton3" type="submit" name="buscar" value="Buscar" > 

  <br>
  <br>
  </form>
</div>

  <br>
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