<!DOCTYPE html>
<html>
<head>
	<title>Loteria</title>

	<link rel="stylesheet" type="text/css" href="estilo/style.css">
  <link rel="stylesheet" type="text/css" href="estilo/estilo_loteria.css">

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
          <li class="menu__item"><a class="menu__link " href="login.php">Menu</a></li>
          <li class="menu__item"><a class="menu__link" href="lota02.php">Lota02</a></li>
          <li class="menu__item"><a class="menu__link" href="usuarios.php">Usuarios</a></li>
          <li class="menu__item"><a class="menu__link select" href="loteria.php">Loteria </a></li>
          <li class="menu__item"><a class="menu__link" href="perfil.php"><img src="img/user.png"></a></li>
          <li class="menu__item"><a class="menu__link" href="logout.php"><img src="img/logout.png"></a></li>

        </ul>
        </nav>
        </div>

</header>
<br>
<br>
</head>
<body>
<!----------------------------------------------------------->
<h2>Loterias</h2>
<style >
  h2{
    margin-left: 630px;
    margin-top: 60px;
    margin-bottom: 10px;
    font-size: 40px;
  }
</style>

<div class="form5">
  <input class="text1" id="linea" type="number"  name="" min="1" max="100">
  <select name="select" class="text2" id="loto1">
  <option value="Marcos">Marcos</option> 
  <option value="Loteka">Loteka</option>
  <option value="NY">NY</option>
</select>
  <select name="select" class="text2" id="loto2">
  <option value="Marcos">Marcos</option> 
  <option value="Loteka">Loteka</option>
  <option value="NY">NY</option>
</select>
  <input class="text1" id="jugada" type="number"  name="" min="1" max="100">
  <input class="text1" id="cantidad" type="number"  name="" min="1" max="99000">


<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
  margin-top: 40px;
  margin-left: 30px;
}

td, th {
  border: none;
  text-align: center;
  padding: 8px;
}
</style>

<table id="table" class="tabla">
  <tr>
    <th>Linea</th>
    <th>Loto 1</th>
    <th>Loto 2</th>
    <th>Jugada</th>
    <th>Cantidad</th>

  </tr>
  
</table>

  <input class="bt1" type="submit" onclick="addRow()" id="add" value="✔" >
  <input class="bt2" type="submit" value="↺" onclick="window.location='loteria.php'">
  <input class="bt3" type="submit"  value="&#9113;" onclick="window.print()"> 
  <input class="bt4" type="submit"  value="✘" onclick="">

</div>
<script>

  function addRow() {
   "use strict";

    var table = document.getElementById("table");
    
    var row= document.createElement("tr");
    console.log(row);
    var td1 = document.createElement("td");
    var td2 = document.createElement("td");
    var td3 = document.createElement("td");  
    var td4 = document.createElement("td");    
    var td5 = document.createElement("td");    
  
    td1.innerHTML = document.getElementById("linea").value;
    td2.innerHTML  = document.getElementById("loto1").value;
    td3.innerHTML  = document.getElementById("loto2").value;
    td4.innerHTML  = document.getElementById("jugada").value;
    td5.innerHTML  = "RD$ "+document.getElementById("cantidad").value;

    row.appendChild(td1);
    row.appendChild(td2);
    row.appendChild(td3);
    row.appendChild(td4);
    row.appendChild(td5);

    table.children[0].appendChild(row);
    
    document.getElementById("linea").value = "";
    document.getElementById("loto1").value = "";
    document.getElementById("loto2").value = "";
    document.getElementById("jugada").value = "";
};

</script>
<!--<script>
function imprime(){
    var mywindow = window.open('', 'PRINT', 'height=500,width=700');
    mywindow.document.write('<html><head>  <link rel="stylesheet" type="text/css" href="estilo/estilo_loteria.css">');
    mywindow.document.write('<style>.tabla{width:100%;border-collapse:collapse;margin:16px 0 16px 0;}.tabla th{border:1px solid #ddd;padding:4px;background-color:#d4eefd;text-align:left;font-size:15px;}.tabla td{border:1px solid #ddd;text-align:left;padding:6px;}</style>');
    mywindow.document.write('</head><body >');
    mywindow.document.write('<h2> Recibo de loteria </h2> <br><br><br>');
    mywindow.document.write(document.getElementById('table').innerHTML);
    mywindow.document.write('</body></html>');
    mywindow.document.close(); // necesario para IE >= 10
    mywindow.focus(); // necesario para IE >= 10
    mywindow.print();
    mywindow.close();
    return true;}
</script>  -->
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