<?php
  session_start();
  require('conexion.php');
  
  $query="SELECT id, login, contrasena,nombre,gmail FROM user ";
  
  $resultado=$mysqli->query($query);
  
  $row=$resultado->fetch_assoc();
  
?>
<html>
	<head>
	    <title>INICIO</title>
	    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
	    <style type="text/css">
			body{
	   			 background:url('img/fondo2.jpg');
	    			}
	    </style>
	</head>
<body>
    <header > 
        <div class="container">
          <ul class="nav nav-pills" role="tablist">
            <li class="active"><a href="inicio.php?id=<?php echo $row['id'];?>">Inicio</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="archivo.php">
              Archivos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="nuevo.php">nuevo</a></li>
                <li><a href="modificar.php">modificar</a></li>
                <li><a href="buscar.php">buscar</a></li>  
                <li><a href="eliminar.php">eliminar</a></li>                        
              </ul>
            </li>
           <li><a href="aplicaciones.php">Aplicaciones</a></li>
           <li><a href="Utilidades.php">Utilidades</a></li>
           <li><a href="Reportes.html">Reportes</a></li>
           <li><a href="ayuda.html">Acerca</a></li>
          </ul>
        </div>
    </header>
  <h2 align="center">Cambiar clave de usuario</h2>
  <div align="center">
    <a class="btn btn-primary" href="modificarclave.php">Modificar</a>
  </div>
   

</body>
</html>
    