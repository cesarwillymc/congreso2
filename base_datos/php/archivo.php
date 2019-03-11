<?php
session_start();
require('conexion.php');
$id=$_SESSION['id'];
$query="SELECT * FROM visitas";
$resultado=$mysqli->query($query);
$rows = $resultado->num_rows;

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
            <li class="active"><a href="inicio.php?id=<?php echo $id?>">Inicio</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="archivo.php">
              Archivos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="nuevo.php">nuevo</a></li>
                <li><a href="modificar.php?codigo=<?php echo $row['codigo'];?>">Modificar</a></li>
                <li><a href="buscar.php">buscar</a></li>  
                <li><a href="eliminar.php?codigo=<?php echo $row['codigo'];?>">Eliminar</a></li>                        
              </ul>
            </li>
           <li><a href="aplicaciones.php">Aplicaciones</a></li>
           <li><a href="Utilidades.php">Utilidades</a></li>
           <li><a href="Reportes.html">Reportes</a></li>
           <li><a href="ayuda.html">Acerca</a></li>
          </ul>
        </div>
    </header>
    
    
    <table align="center" border=2 width="80%" class="table">

        <tr>
          <td><b>Nombres</b></td>
          <td><b>Apellidos</b></td>
          <td><b>email</b></td>
          <td><b>telefono</b></td>
          <td><b>Universidad</b></td>
          <td><b>Fecha</b></td>
          <td><b>confirmacion</b></td>
        </tr>
          <?php while($row=$resultado->fetch_assoc()){ ?>
            <tr>
              <td><?php echo $row['nombres'];?></td>
              <td> <?php echo $row['apellidos'];?></td>
              <td><?php echo $row['email'];?></td>
              <td> <?php echo $row['telefono'];?></td>
              <td><?php echo $row['universidad'];?></td>
              <td> <?php echo $row['fecha'];?></td>
              <td> <?php echo $row['confirmacion'];?></td>
              <td>
                <a href="modificar.php?id_user=<?php echo $row['id_user'];?>">Modificar</a>
              </td>
              <td>
                <a href="eliminar.php?id_user=<?php echo $row['id_user'];?>">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
      </table>
      <div align="center">
         <a class="btn btn-primary" href="buscar.php">Buscar usuario</a>
      </div>


</body>
</html>
