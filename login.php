<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>

	<link rel="stylesheet" type="text/css" href="estilo/style.css">
	<link rel="shortcut icon" href="img/loteria.png">

</head>
<body>

<?php
session_start();
if (isset($_SESSION['nombre'])) {
	echo '

<!-------------------NAVBAR--------------------->
<header>
	
<div class="header">
        <div class="contenedor">
        <h1 class="logo">Marcos 01</h1>
        <span class="icon-menu" id="boton-menu"></span>
        <nav class="nav" id="nav">
        <ul class="menu">
          <li class="menu__item"><a class="menu__link select" href="login.php">Menu</a></li>
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
<br>
<br>
<br>';

echo'<h3>Bienvenido '.$_SESSION['nombre'].'!</h3>';
echo '
<br>
<br>


	<style>

.galeria {
  width: 80%;
  margin: auto;
  list-style: none;
  padding: 0px;
  box-sizing: border-box;
  
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  color: #ffffff;
  text-align: center;
}

.galeria li {
  margin: 20px;
}

.galeria img {
  width: 180px;
  height: 180px;
}
	</style>

	<ul class="galeria">
	<figure>
		<li><a href="lota02.php"><img src="img/001.png"></a></li>
		<figcaption>LOTA 02</figcaption>
		</figure>
		<figure>
		<li><a href="clientes.php"><img src="img/002.png"></a></li>
		<figcaption>Clientes</figcaption>
		</figure>
		<figure>
		<li><a href="ruta.php"><img src="img/003.png"></a></li>
		<figcaption>Rutas</figcaption>
		</figure>
		<figure>
		<li><a href="loteria.php"><img src="img/004.png"></a></li>
		<figcaption>Loteria</figcaption>
		</figure>
		<figure>
		<li><a href="#"><img src="img/005.png"></a></li>
		<figcaption>Documentos</figcaption>
		</figure>
		<figure>
		<li><a href="#"><img src="img/006.png"></a></li>
		<figcaption>Menu 10</figcaption>
		</figure>
		<figure>
		<li><a href="usuarios.php"><img src="img/007.png"></a></li>
		<figcaption>Usuarios</figcaption>
		</figure>
		<figure>
		<li><a href="#"><img src="img/008.png"></a></li>
		<figcaption></figcaption>
		</figure>

	</ul>


<br>
<br>
<br>
<br>


<!-------------------footer---------------------------------->

<footer class="footer">
      
    <p class="copy">&copy; IMB 2020  -  Todos los derechos reservados.</p>
</footer>';
}
?>

</body>
</html>