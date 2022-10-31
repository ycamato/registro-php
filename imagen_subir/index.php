<?php
    require_once("../connection/connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tabla.css">
    <title>Document</title>
</head>
<body>
    <div class="box-body"> 
        
        <form method="post" name="form6" action="">
            <div class="form-group">    
                <table> 
                    <tr>
                        <td class="text-aqua">#</td>
                        <td class="text-aqua">Cedula</td>
                        <td class="text-aqua">Correo</td>
                        <td class="text-aqua">Nombre</td>
                        <td class="text-aqua">Apellidos</td>
                        <td class="text-aqua">Telefono</td>
                        <td class="text-aqua">dirrecion</td>
                        <td class="text-aqua">pin</td>
                        <td class="text-aqua">Foto</td>
                        <td class="text-aqua">Acción</td>
                        <td></td>
                        <td></td>
                        <td><a href="ingreso.php" class="button registro">Registrar</a></td>
                        <td><a href="../administrador/index.php" class="button">volver</a></td>
                    </tr>
                    <?php
                        $q=0;
                        $cons = "SELECT * FROM tipo_usuarios";
                        $sql = mysqli_query($mysqli,$cons);
                        while($resul=mysqli_fetch_array($sql))
                            {
                                $d=$resul[0];

                                $co=$resul[3];
                                $no=$resul[4];
                                $ap=$resul[5];
                                $te=$resul[6];
                                $di=$resul[7];
                                $pi=$resul[8];
                                $fo=$resul[9];
                                $q++;
                    ?>
                    <tr>
                        <td><?php echo $q?></td>
                        <td><?php echo $d?></td>
          				<td><?php echo $co?></td>
          				<td><?php echo $no?></td>
                        <td><?php echo $ap?></td>
                        <td><?php echo $te?></td>
                        <td><?php echo $di?></td>
                        <td><?php echo $pi?></td>
                        <td><?php echo (' <img src="foto/'.$fo.'" width="100"> ') ?></td>
                        <td><a href="#"class="button">Modificar</a></td>
                        <td><a href=# class="button green">Eliminar</a></td>
                        <td><a href="#"class="button red">Ver</a></td>
                    </tr>
                    <?php 
                        }
                    ?>
                </table>
            </div>
        </form>
</body>
</html>