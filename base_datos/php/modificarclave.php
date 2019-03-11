    
<html>
<head>
  <title> cambiar clave</title>
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" ssrc="js/bootstrap.js"></script>
</head>
<body>
<form name="modificar_clave" method="POST" action="confirmarclave.php">
    <table width="50%"  align="center" class="table table-striped">
          <tr>
            <input type="hidden" name="codigo" >
            <td width="20"><b>introduzca anterior clave: </b></td>
            <td width="30"><input type="password" name="claveanterior" size="25"  /></td>
          </tr> 
          <tr>  
            <td><b>intruduzca nueva clave:</b></td>
            <td><input type="password" name="nuevaclave" size="25" /></td>
          </tr>
          <tr>
            <td><b>repita nueva clave:</b></td>
            <td><input type="password" name="nuevaclave2" size="25"  /></td>
          </tr>
          <tr>
            <td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" class="btn btn-success" /></center></td>
          </tr>
       
          
        </table>
        </form>

      
</body>
</html> 