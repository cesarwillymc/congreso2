<?php 
	
	require('conexion.php');
	
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$departamento=$_POST['departamento'];
	$universidad=$_POST['universidad'];
	$estado=$_POST['estado'];
	
	$query="INSERT INTO visitas (nombres, apellidos, email,telefono,departamento,universidad,confirmacion) VALUES ('$nombres','$apellidos','$email','$telefono','$departamento','$universidad','$estado')";
	
	$resultado=$mysqli->query($query);
	if($resultado>0){

	 header("location:../index.html");
	}
	else{

	}
?>

