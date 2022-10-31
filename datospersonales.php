<?php
  session_start();
  require_once ("connection/connection.php");
  

  $sql="SELECT * FROM tipo_usuarios WHERE id_user ='".$_GET['cod']."'";
  $resul=mysqli_query($mysqli,$sql);
  $mostrar=mysqli_fetch_assoc($resul);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ventana.css">
    <title>Datos personales</title>
</head>
<body>
    <form action="" method="post" id="form">
    <h1 class="form__titulo"> Datos del cliente:<pre><?php echo $mostrar['nom_user']?> <?php echo $mostrar['ap_user'];?></pre></h1>
        <div class="field">
          <label>Documento:</label>
          <input type=»text» disabled name="id" value="<?php echo $mostrar['id_user']?>" class="cam"><br> 
          <label>Tipo usuario:</label>
          <input type=»text» disabled name="id" value="<?php echo $mostrar['id_tip_user']?>" class="cam"><br> 
          <label>Telefono:</label>
          <input type=»text» disabled name="id" value="<?php echo $mostrar['cel_user']?>" class="cam"><br>
          <label>Dirección:</label>
          <input type=»text» disabled name="id" value="<?php echo $mostrar['dir_user']?>" class="cam"><br>
          <label>Correo:</label>
          <input type=»text» disabled name="id" value="<?php echo $mostrar['email']?>" class="cam"><br>
        </div>
    </form>
</body>
</html>
