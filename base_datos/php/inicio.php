<?php 
  session_start();
  require('conexion.php');
  $id=$_SESSION['id'];

    $query="SELECT id, login, contrasena,nombre,gmail FROM user WHERE id='$id' ";
  
  $resultado=$mysqli->query($query);
  
?>
<html>
	<head>
	    <title>INICIO</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <li ><a href="inicio.php?id=<?php echo $id;?>">Inicio</a></li>
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
   <h1 align="center">INFORMACION USUARIO</h1>
   <table align="center" border=2 width="80%" class="table">

        <tr>
          <td><b>id user</b></td>
          <td><b>login</b></td>
          <td><b>nombre</b></td>
          <td><b>gmail</b></td>
        </tr>
          <?php while($row=$resultado->fetch_assoc()){ ?>
            <tr>
              <td ><?php echo $row['id'];?>
              </td>
              <td>
                <?php echo $row['login'];?>
              </td>
              <td >
                <?php echo $row['nombre'];?>
              </td>
              <td>
                <?php echo $row['gmail'];?>
              </td>
            </tr>
          <?php } ?>
      </table>
     
      <a href="../index.php"><h1 align="center" >Salir del Sistema</h1></a>
      </body>
</html>



