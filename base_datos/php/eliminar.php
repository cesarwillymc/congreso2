<?php session_start();	
require('conexion.php');
	
	$id_user=$_GET['id_user'];
	
	$query="DELETE FROM visitas WHERE id_user='$id_user'";
	$resultado=$mysqli->query($query);
	echo " $id_user ";
	
?>

<html>
	<head>
		<title>Eliminar usuario</title>
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Usuario Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="archivo.php">Regresar</a>
			
		</center>
	</body>
</html>