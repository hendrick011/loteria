<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>

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
          <li class="menu__item"><a class="menu__link select" href="usuarios.php">Usuarios</a></li>
          <li class="menu__item"><a class="menu__link" href="loteria.php">Loteria </a></li>
          <li class="menu__item"><a class="menu__link" href="perfil.php"><img src="img/user.png"></a></li>
          <li class="menu__item"><a class="menu__link" href="logout.php"><img src="img/logout.png"></a></li>
        </ul>
        </nav>
        </div>

</header>
<br>

<!----------------------FORMULARIO-------------------------->

<div class="form3">
  <form action="usuarios1.php" method="POST">
  <br>
  <br>
  <h2>Registrar   Usuarios</h2>
  <br>
  <input class="edittext" name="nombre" required placeholder="   Nombre">
  <br>
  <br>
  <input class="edittext" name="password" required placeholder="   Contraseña">
  <br>
  <br>
  <input  class="edittext"name="celular" required placeholder="   Telefono">
  <br>
  <br>
  <input class="edittext" name="nivel" required placeholder="   Nivel">
  <br>
  <br>
  <input class="edittext" name="username" required placeholder="   Username">
  <br>
  <br>
  <br>
  <input class="boton" type="submit" name="Enviar" value="Guardar" > 

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