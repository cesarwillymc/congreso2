<?php session_start();

require('conexion.php');


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
            <li ><a href="inicio.php">Inicio</a></li>
            <li class="dropdown">
              <a  href="archivo.php">
              Archivos </a>
              
            </li>
           <li><a href="aplicaciones.php">Aplicaciones</a></li>
           <li><a href="Utilidades.php">Utilidades</a></li>
           <li><a href="Reportes.html">Reportes</a></li>
           <li><a href="ayuda.html">Acerca</a></li>
          </ul>
        </div>
    </header>
        <div align="center"><h1>NO PUEDO EL PDF XD</h1></div>
        <div align="center"><a class="btn btn-primary" href="../../">Volver</a></div>
</body>
</html>
