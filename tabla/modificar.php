<?php
   include("../connection/connection.php");
   session_start();

   $consult="SELECT * FROM tipo_usuarios,tip_user WHERE id_user ='$_GET[mo]' AND tipo_usuarios.id_tip_user = tip_user.id_tip_user";
   $query = mysqli_query($mysqli, $consult);
   $fila=mysqli_fetch_assoc($query);

   if($fila)
   {
       $_SESSION['cedula'] = $fila ['id_user'];
   }


?>
<?php
if((isset($_GET["MM_update"])) && ($_GET["MM_update"]=="formreg"))  
{
    $doc = $_GET['docu'];
    $nombre = $_GET['nom'];
    $apellido = $_GET['ape'];
    $celular = $_GET['cel'];
    $correo = $_GET['email'];
    $direccion = $_GET['dire'];

    $cedula = $_SESSION['cedula'];
    $SQL = "UPDATE tipo_usuarios SET id_user ='$doc',  nom_user ='$nombre', ap_user = '$apellido', cel_user = '$celular', email = '$correo', dir_user = '$direccion' WHERE  id_user ='$cedula' ";
    $result= mysqli_query($mysqli, $SQL);

    echo'<script>parent.window.close();</script>';


}

?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/actualizar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion</title>
</head>
<body>
    <section id="bannerusu">
        <div id="box2">
            <div class="formusuario">
                <div class="infouser">
                    <h1>Modo Cambio</h1>
                    <form method ="GET" name = "formreg" autocomplete = "off">
                        <label for="usuario" class="texto">Tipo de usuario: </label><br>
                        <input type="varchar" name = "tipusu" value="<?php echo $fila['tipo_user'];?>" disabled><br>
                        <label for="usuario" class="texto">Identidad: </label><br>
                        <input type="number" name = "docu" value="<?php echo $fila['id_user'];?>"><br><br>            
                        <label for="usuario" class="texto">Nombre: </label><br>
                        <input type="text" name = "nom" value="<?php echo $fila['nom_user'];?>"> <br><br>
                        <label for="usuario" class="texto">Apellido: </label><br>
                        <input type="text" name = "ape" value="<?php echo $fila['ap_user'];?>"> <br><br>
                        <label for="usuario" class="texto">Direccion: </label><br>
                        <input type="text" name = "dire" value="<?php echo $fila['dir_user'];?>"> <br><br>
                        <label for="usuario" class="texto">Celular: </label><br>
                        <input type="number" name = "cel" value="<?php echo $fila['cel_user'];?>"> <br><br>
                        <label for="usuario" class="texto">Correo: </label><br>
                        <input type="email" name = "email" value="<?php echo $fila['email'];?>"> <br><br>
                        <div class="regis" >
                            <input type="submit" class="btn" name="validar" value="Guardar">
                            <input type="hidden" name="MM_update" value="formreg">
                            <button type="button"><a href="index.php" target="blank">Volver</a></button>
                        </div>                                          
                    </form>        
                </div>                    
            </div>
        </div>
    </section>    
</body>
</html>


