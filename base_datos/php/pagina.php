<?php
session_start();
//manejamos en sesion el nombre del usuario que se ha logeado
if (!isset($_SESSION["usuario"])){
    header("location:index.php?nologin=false");
    
}
$query="SELECT id, login, contrasena,nombre,gmail FROM user";

?>

<!DOCTYPE html>
<html>
	<head>
	    <title>Validacion de Formulario PHP</title>
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
            <li class="active"><a href="inicio.php?id=<?php echo $_SESSION['id'];?>" >Inicio</a></li>
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

    <p class="texto" align="center">BIENVENIDO</p>
    <p class="texto" align="center"><?php echo $_SESSION["usuario"]; ?></p>

</body>
</html>



