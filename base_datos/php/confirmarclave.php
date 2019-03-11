<?php session_start();
  

  require('conexion.php');

  $id=$_SESSION['id'];
  $contra=$_SESSION['contrasena'];
  $claveanterior=$_POST['claveanterior'];
  $nuevaclave=$_POST['nuevaclave'];
  $nuevaclave2=$_POST['nuevaclave2'];

  
  $strMensaje="";
  if ($nuevaclave!="") {
    # code...
  
	  if($nuevaclave==$nuevaclave2&&$claveanterior==$contra)
	  {
	  	
	              $query=" UPDATE user SET contrasena='$nuevaclave'   WHERE id='$id'";
	              $resultado=$mysqli->query($query);
	          
  }	else
  {
    $strMensaje=" ERROR las claves no coinciden";
  }
  
}
  
  
?>
<html>
<head>
	<title>Confirmar</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
	<center>
			
			<?php 
			
				if($resultado>0){
				echo " <h1>Usuario Modificado</h1>"; 
				
				} else
			    { 
			    	if($strMensaje!="")
					    {
					    	echo "<h1>$strMensaje</h1>";
					    }
					else
						{  
							echo " <h1>Error al Modificar</h1>";
						}
				
			 	} ?>
			
			<p></p>	
			
			<a href="inicio.php">Regresar</a>
			
		</center>
</body>
</html>