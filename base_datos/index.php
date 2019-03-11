<?php
session_start();
$valido=true;
$strMensaje="";
      if(isset($_POST['entrar'])){
         /*Entra solo si se presiona el boton entrar*/
        
         //datos de acceso
         $host="localhost";
         $usuario="root";
         $contra="";
         $db="usuario";
         
         //establecer la conexion
        $mysqli=new mysqli("localhost","root","","database_congreso");
        if(mysqli_connect_errno()){
            echo 'Conexion Fallida : ', mysqli_connect_error();
            exit();
         }
        
        
         $Clogin=$_POST['usuario'];
         $contrasena=$_POST['contra'];
         $hola="SELECT id, login,contrasena,nombre,gmail FROM user";
         $consulta="SELECT id, login,contrasena,nombre,gmail FROM user where login='$Clogin' AND contrasena='$contrasena'";
         $result=$mysqli->query($consulta);
         $result2=$mysqli->query($hola);
         $filasn= mysqli_num_rows($result);
         $datosARRAY=mysqli_fetch_array($result2);
         $datosARRAY2=mysqli_fetch_array($result);
         $controlClave=$datosARRAY["contrasena"];
         $controllogin=$datosARRAY["login"];
        //echo "resultado: ".$controllogin."</br>".$controlClave."<br>".$bool;
            if ($filasn<=0 || isset($_GET['nologin']) )
            {
                    $valido=false;
                
            }else
            {      
                $_SESSION['id']= $datosARRAY['id'];
                $_SESSION['contrasena']= $contrasena;

                $valido=true;
             //guardamos en sesion el nombre del usuario 
                $_SESSION["usuario"]=$Clogin;

                 header("location:php/pagina.php?login=true");
             }               
      
  }

?>



<!DOCTYPE html>

<html>
<head>
    <title>Validacion de Formulario PHP</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <style type="text/css">
            body{
                 background:url('img/fondo2.jpg');
                    }
        </style>
</head>

<body>
    <div align="center">
         <button type="button" onclick="document.getElementById('demo').innerHTML = Date()">
             hora</button>
         <p id="demo"></p>
    </div>
    
    <div id="form">
        <p ><h1 align="center" id="letras">Ingresa los datos correspondientes</h1></p>

        <form action="index.php" method="POST">
             <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">usuario</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="usuario">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">contrase&ntilde;a</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="contra">
                </div>
              </div>
              <br>
              <div align="center"> <br><input name="entrar" type="submit" value="ENTRAR " class="btn btn-success"    ></div>
            
            <?php if ($valido==false) {
                    if($strMensaje=="")
                    {
                        echo '<p>Datos incorrectos <br/><a href="index.php">Intente de nuevo</a></p>';
                    }
                    else
                    {
                        echo "<p> $strMensaje </p>";
                        echo '<br/><a href="index.php">Intente de nuevo</a>' ;
                    }
                
            } ?>
        </form>
    </div>
</body>
</html>