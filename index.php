<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="estilo/style.css">
  <link rel="shortcut icon" href="img/loteria.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
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
          <li class="menu__item"><a class="menu__link select" href="index.php">Inicio</a></li>
          <li class="menu__item"><a class="menu__link" href="">pon</a></li>
            <li class="menu__item"><a class="menu__link" href="">algo</a></li>
          <li class="menu__item"><a class="menu__link" href="">aqui </a></li>
          <li class="menu__item"><a class="menu__link" href="">Lol</a></li>
          <li class="menu__item"><a class="menu__link" href="">Log In</a></li>
          
        </ul>
        </nav>
        </div>

</header>
<br>
<br>
<br>
<br>

<!------------------------------->

<?php

require_once 'conexion.php';

session_start();
error_reporting(0);
$user = $_REQUEST['username'];
$password = $_REQUEST['password'];

$registros = mysqli_query($conexion, "SELECT nombre, password, celular, nivel, username FROM users WHERE username = '$user'") or die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros))
{
  $_SESSION['nombre'] = $reg['nombre'];
    $_SESSION['celular'] = $reg['celular'];
    $_SESSION['nivel'] = $reg['nivel'];
    $_SESSION['username'] = $reg['username'];
  if($password == $reg['password']) {
    header('location: login.php');
} else {

    echo '<script>alert("Datos incorrectos")</script> ';
    
  }
}

?>

<!-------------------container------------------->

<div class="form">
  <form action="index.php" method="POST" autocomplete="off">
  
  <h2>Iniciar Sesión</h2>
  <br>
  <input class="edittext" type="text" name="username" required placeholder="    Username">
  <br>
  <br>

  <input class="edittext" type="password" name="password" required placeholder="    Contraseña" id="password">
  <span>
    <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
  </span>
  <script>
    var state= false;
function toggle(){
    if(state){
  document.getElementById("password").setAttribute("type","password");
  document.getElementById("eye").style.color='#7a797e';
  state = false;
     }
     else{
  document.getElementById("password").setAttribute("type","text");
  document.getElementById("eye").style.color='#5887ef';
  state = true;
     }
}
  </script>

  <br>
  <br>
  <br>
  <input class="boton" type="submit" name="Enviar" value="Entrar" > 
  <br>
  <br>  

  </form>
</div>

  <img src="img/img2.jpg" alt="" class="imagen" width="900px" height="400px" >

  <br>
  <br>

  <!-------------------------------------->


    <br>
  <br>
    <br>
  <br>
    <br>


  
<!---------------------FOTTER-------------------->
<footer class="footer">
      
        <p class="copy">&copy; IMB 2020  -  Todos los derechos reservados.</p>
    </footer>

</body>
</html>