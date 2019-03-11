<?php
	require('conexion.php');
	
	$estado = $_POST['estado'];
	
	$query="SELECT id_user, nombres, apellidos,email,telefono,departamento,universidad,fecha,confirmacion FROM visitas WHERE confirmacion LIKE '%$estado%'";
	
	$resultado=$mysqli->query($query);
	
	$rows = $resultado->num_rows;
	
?>

<html>
	<head>
		<title>Nombre</title>
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		
		<center><h1>Usuarios</h1></center>
		
	<div align="center">
      <a href="archivo.php">VOLVER</a>
    </div>
    
		
		<?php if($rows > 0) { ?>
		
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
			
		<?php } else { ?>
		<h1>No se encontraron usuarios</h1>
		<?php } ?>
		</body>
	</html>	
	
