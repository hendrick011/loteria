<!DOCTYPE html>
<html>
<head>
	<title>Menu 01</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Playfair+Display|Ubuntu&display=swap');

.form {
  margin-top: 100px;
  margin-left: 100px;
  padding: 20px, 20px, 20px, 20px;
  align-self: center;
}
.form3 {
  margin-top: 47px;
  margin-left: 100px;
  padding: 20px, 20px, 20px, 20px;
  display: block;
  text-align: center;
  box-shadow:0px 0 20px -10px #000;
  width: 550px;
  height: 1400px;
  background: #fff;
  border-radius: 10px;
}
.form4 {
  margin-top: -1390px;
  margin-left: 850px;
  padding: 20px, 20px, 20px, 20px;
  display: block;
  text-align: center;
  box-shadow:0px 0 20px -10px #000;
  width: 500px;
  height: 800px;
  background: #fff;
  border-radius: 10px;
}
* {
  /*background: -webkit-linear-gradient(#bdc3c7, #2c3e50);*/
}

body {
  margin: 0;
  font-family: 'Ubuntu';
}
h2 {
  font-family: 'Ubuntu';
  font-size: 25px;
  color: #000;
  font-style: normal;
}
.boton3:hover, .boton30:hover{
  background: #03A9F4;
}
.boton3{
  background: #5892da;
  color: #ffffff;
  font-size: 15px;
  cursor: pointer;
  width: 150px;
  height: 38px;
  border-radius: 3px;
  border-style: none;
  text-anchor: start;
  border: solid;
  border-color: #757575;
  border-width: 1px;
  margin-left: 10px;
}
.boton30{
  background: #5892da;
  color: #ffffff;
  font-size: 15px;
  cursor: pointer;
  width: 150px;
  height: 35px;
  border-radius: 3px;
  border-style: none;
  text-anchor: start;
  border: solid;
  border-color: #757575;
  border-width: 1px;
  margin-left: 10px;
}
.edittext{
  width: 290px;
  height: 2px;
  background: #FFFFFF;
  border-radius: 3px;
  text-anchor: start;
  padding: 15px 15px;
  border-style: solid;
  border-color: #757575;
  border-width: 1px;
}
.edittext1{
  width: 72px;
  height: 2px;
  background: #FFFFFF;
  border-radius: 5px;
  padding: 15px 15px;
  outline: none;
  border-style: solid;
  border-color: #757575;
  border-width: 1px;
}
.footer {
  background: #414345;
  color: #ffffff;
  text-align: center;
  font-size: 15px;
  padding: 20px;
  margin-bottom: 0px;
  width: 100%;
}
.copy{
  background: #414345;
  color: #fff;
}
pre{
	color: #414345;
	text-align: left;
	font-size: 14px;
	font-family: 'Ubuntu';
	font-weight: bold;
}
span{
    position: absolute;
    left: 500px;
    transform: translate(0,-70%);
    top: 260px;
    cursor: pointer;
}
.dos{
   position: absolute;
    right: -450px;
    transform: translate(0,-70%);
    top: 270px;
    cursor: pointer;
}
.fa{
    font-size: 20px;
    color: #7a797e;
}


</style>
<br>
<br>
  <div class="form3">
  <form action="clientehen.php" method="POST">
  <br>
  <h2>Registrar Clientes</h2>
  <br>
  <span>
    <i class="fa fa-search" aria-hidden="true" id="search" onclick="toggle()"></i>
  </span>
  <pre>                                      Cedula:</pre>
  <input class="edittext" name="cedula" required >
  <br>
  <pre>                                      Nombre:</pre><input class="edittext" name="nombre"  >
  <br>
  <pre>                                      Pais:</pre><?php include 'pais.html'; ?>
  <br>
  <pre>                                      Direccion:</pre><input class="edittext" name="dir2" >
  <br>
  <pre>                                     Telefonos:</pre><input class="edittext1" name="telefono1"  >
  <input class="edittext1" name="telefono2"  >
  <input class="edittext1" name="telefono3"  >
  <br>
  <pre>                                      Vendedor:</pre><input class="edittext" name="vendedor"  >
  <br>
  <pre>                                      Zona:</pre><input class="edittext" name="zona"  >
  <br>
  <pre>                                      Grupo:</pre><input class="edittext" name="grupo"  >
  <br>
  <pre>                                      Negocio:</pre><input class="edittext" name="negocio"  >
  <br>
  <pre>                                      E-mail:</pre><input class="edittext" name="email"  >
  <br>
  <pre>                                      Balance:</pre><input class="edittext" name="balance"  >
  <br>
  <pre>                                      Ruta:</pre><input class="edittext" name="ruta"  >
  <br>
  <pre>                                      Ruta_sec:</pre><input class="edittext" name="ruta_sec"  >
  <br>
  <pre>                                      Estatus:</pre><input class="edittext" name="estatus"  >
  <br>
  <pre>                                      r_Cliente:</pre><input class="edittext" name="r_cliente"  >
  <br>
  <br>
  <br>
  <input class="boton3" type="submit" name="Enviar" value="Guardar" > 
  <input class="boton3" type="submit" name="Enviar" value="Eliminar" > 

  <br>
  <br>
  </form>
</div>

<div class="form4">
  <form action="usuariohen.php" method="POST">
  <br>
  <h2>Registrar Usuarios</h2>
  <br>
  <span class="dos">
    <i class="fa fa-search" aria-hidden="true" id="search" onclick="togglee()"></i>
  </span>
  <pre>                             Username:</pre><input class="edittext" name="username" required >
  <br>
  <br>
  <pre>                            Nombre:</pre><input class="edittext" name="nombre"  >
  <br>
  <br>
  <pre>                            Contraseña:</pre><input  class="edittext"name="password"  >
  <br>
  <br>
  <pre>                            Telefono:</pre><input class="edittext" name="telefono"  >
  <br>
  <br>
  <pre>                            r_users:</pre><input class="edittext" name="r_users"  >
  <br>
  <br>
  <pre>                            Grupo:</pre><input class="edittext" name="grupo"  >
  <br>
  <br>
  <br>
  <input class="boton30" type="submit" name="Enviar" value="Guardar" > 
  
  <br>
  <br>
  </form>
  <input type="button" class="boton30" onclick="confirmar()" value="Eliminar">
</div>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
<script type="text/javascript">
    
    
    function confirmar(){
        window.location="deleteuser.php"; 

    }
  </script>
<script type="text/javascript">
  function toggle(){
    window.location="buscarclientes.php";
}
function togglee(){
    window.location="buscaruser.php";
}
</script>
  <!-------------------footer---------------------------------->


<footer class="footer">
      
    <p class="copy">&copy; IMB 2020  -  Todos los derechos reservados.</p>
</footer>

</body>
</html>