<?php 
	
	require('conexion.php');
	$id_user=$_GET['id_user'];
	$email=$_GET['email'];
	$telefono=$_GET['telefono'];
	$confirmacion=$_GET['confirmacion'];
	
	$query="UPDATE visitas SET email='$email', telefono='$telefono', confirmacion='$confirmacion'WHERE id_user='$id_user'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar usuario</title>
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Usuario Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Usuario</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="inicio.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				