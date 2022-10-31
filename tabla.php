<?php

    require_once ("connection/connection.php");
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla</title>
</head>
<body>
    <form method="GET" name=table autocomplete="off">
        <table border="1" class="tabla">
          <br> 
            <tr>
               <td>identificación</td>
               <td>tipo usuario</td>
               <td>Contraseña</td>
               <td>email</td>
               <td>cliente</td>
               <td>nombre</td>
               <td>Apellido</td>
               <td>telefono</td>
               <td>Dirección</td>
               <td>Ver</td>
               <td>Borrar</td>
           
            </tr>
            <?php
               $sql="SELECT * FROM tipo_usuarios,tip_user where tipo_usuarios.id_tip_user= tip_user.id_tip_user";
               $result=mysqli_query($mysqli, $sql);

            while($mostrar=mysqli_fetch_array($result))
            {
            ?>
            <tr>
                <td><?php echo $mostrar['id_user'];?></td>
                <td><?php echo $mostrar['id_tip_user'];?></td>
                <td><?php echo $mostrar['pass_user'];?></td>
                <td><?php echo $mostrar['email'];?></td>
                <td><?php echo $mostrar['tipo_user'];?></td>
                <td><?php echo $mostrar['nom_user'];?></td>
                <td><?php echo $mostrar['ap_user'];?></td>
                <td><?php echo $mostrar['cel_user'];?></td>
                <td><?php echo $mostrar['dir_user'];?></td>
                <td><a href="?accion=cod=<?php echo $mostrar['id_user'] ?>"
                     onclick="window.open('datospersonales.php?cod=<?php echo $mostrar['id_user'] ?>','','width=1000,height=580,toolbar=NO');void(null);"><img src="imag/lupa.png" width="24" height="24"></a></td>
                <td><a href="?accion=bor=<?php echo $mostrar['id_user'] ?>"
                     onclick="window.open('borrar.php?bor=<?php echo $mostrar['id_user'] ?>','','width=1000,height=580,toolbar=NO');void(null);"><img src="imag/eliminar.png" width="24" height="24"></a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </form>
</body>
</html>