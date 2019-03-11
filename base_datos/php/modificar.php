<?php session_start();
	
	require('conexion.php');
	
	$id_user=$_GET['id_user'];
	
	$query="SELECT id_user, nombres, apellidos,email,telefono,departamento,universidad,fecha,confirmacion FROM visitas WHERE id_user='$id_user'";
	
	$resultado=$mysqli->query($query);
	$row=$resultado->fetch_assoc();	
?>

<html>
	<head>
		<title>Usuarios</title>
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		
		<center><h1>Modificar Usuario</h1></center>

		
		<form name="modificar_usuario" method="GET" action="mod_usuario.php">
			
			<table width="50%" align="center" class="table">
				<tr>_
					<input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>"/>
					<td width="20"><b>email</b></td>
					<td width="30"><input type="text" name="email" size="25" value="<?php echo $row['email']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Celular</b></td>
					<td><input type="text" name="telefono" size="25" value="<?php echo $row['telefono']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Estado de confirmacion</b></td>
					<td><input type="text" name="confirmacion" size="25" value="<?php echo $row['confirmacion']; ?>" /></td>
				</tr>
				
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
