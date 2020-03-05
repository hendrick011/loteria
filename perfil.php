<!DOCTYPE html>
<html>
<head>
	<title>Lota 02</title>

	<link rel="stylesheet" type="text/css" href="estilo/style.css">
  <link rel="shortcut icon" href="img/loteria.png">
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.rtl.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
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
          <li class="menu__item"><a class="menu__link" href="lota02.php">Lota02</a></li>
          <li class="menu__item"><a class="menu__link" href="usuarios.php">Usuarios</a></li>
          <li class="menu__item"><a class="menu__link" href="loteria.php">Loteria </a></li>
          <li class="menu__item"><a class="menu__link select" href="perfil.php"><img src="img/user.png"></a></li>
          <li class="menu__item"><a class="menu__link" href="logout.php"><img src="img/logout.png"></a></li>
        </ul>
        </nav>
        </div>

</header>

<!----------------------FORMULARIO-------------------------->
<?php
session_start();
$nombre = $_SESSION['nombre'];
$celular = $_SESSION['celular'];
$nivel = $_SESSION['nivel'];
$username = $_SESSION['username'];

echo'
<img src="img/boss.png" class="profile">
<div class="form3">
  <form action="perfil1.php" method="POST" name="f3">
  <br>
  <br>
  <h2>Datos Personales</h2>
  <br>
  <input class="edittext" name="nombre" value="'.$nombre.'" required placeholder="   Nombre" >
  <br>
  <br>
  <input class="edittext" name="password"  required placeholder="   Contraseña">
  <br>
  <br>
  <input  class="edittext"name="celular" value="'.$celular.'" required placeholder="   Telefono" >
  <br>
  <br>
  <input class="edittext" name="nivel" value="'.$nivel.'" required placeholder="   Nivel" >
  <br>
  <br>
  <input class="edittext" name="username" value="'.$username.'" readonly required placeholder="   Username" >
  <br>
  <br>
  <br>
  <input class="boton3" type="submit" name="Enviar" value="Modificar" > 

  <br>
  <br>
  </form>

  <input type="button" class="boton4" onclick="confirmar()" value="Eliminar cuenta">
</div>';


 ?>

<script type="text/javascript">
    
    
    function confirmar(){
      var confirm= alertify.confirm('Mensaje','Desea eliminar usuario?',null,null).set('labels', {ok:'Confirmar', cancel:'Cancelar'}); 
      
      confirm.set('onok', function(){
        window.location="eliminaruser.php";
      });
      confirm.set('oncancel', function(){ 
          alertify.error('Has Cancelado');
      })  

    }
  </script>


  <br>
  <br>
  <br>
  <br>
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