<?php
    require_once("../connection/connection.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/buscar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>

<body>
    <div class="ver">

        <form action="mostrar.php" method="get" name=table autocomplete="off">
            <input class="panel" type="text" name="buscar"  id="" placeholder="Buscar"> <a href="#"><button class="boton">Buscar </button></a> <br> 
            
            <table border="1" class="tabla">
                
                <tr>

                    <th>identificación</th>

                    <th>tipo usuario</th>
                    
                    <th>email</th>
                    
                    <th>nombre</th>

                    <th>Apellido</th>

                    <th>telefono</th>

                    <th>Dirección</th>

                    <th>Pin</th>

                    <th><img src="../imag/ver.png" alt="buscar" width="60" height="50"></th>

                    <th><img src="../imag/lupa.png" alt="buscar" width="60" height="50"></th>

                    <th><img src="../imag/eliminar.png" alt="eliminar" width="60" height="50"></th>

                </tr>

                <?php
                    
                    $sql="SELECT * FROM tipo_usuarios";
                    $result=mysqli_query($mysqli, $sql);

                    while($mostrar=mysqli_fetch_assoc($result))
                    {
                ?>

                <tr>

                    <td><?php echo $mostrar['id_user']?></td>

                    <td><?php echo $mostrar['id_tip_user']?></td>

                    <td><?php echo $mostrar['email']?></td>

                    <td><?php echo $mostrar['nom_user']?></td>

                    <td><?php echo $mostrar['ap_user'];?></td>

                    <td><?php echo $mostrar['cel_user']?></td>

                    <td><?php echo $mostrar['dir_user']?></td>

                    <td><?php echo $mostrar['pin']?></td>

                    <td>
                        <a href="?accion=mo=<?php echo $mostrar['id_user'] ?>"onclick="window.open('./modificar.php?mo=<?php echo $mostrar['id_user'] ?>','', 'width=1000,heigth=580,toolbar=NO');void(null);">
                        Modificar
                        </a>
                    </td>

                    <td>
                        <a href="?accion=cod=<?php echo $mostrar['id_user'] ?>"onclick="window.open('../datospersonales.php?cod=<?php echo $mostrar['id_user'] ?>','', 'width=1000,heigth=580,toolbar=NO');void(null);">
                            Ver
                        </a>
                    </td>

                    <td>
                        <a href="?accion=bor=<?php echo $mostrar['id_user'] ?>"onclick="window.open('../borrar.php?bor=<?php echo $mostrar['id_user'] ?>','', 'width=1000,heigth=580,toolbar=NO');void(null);">
                            Borrar
                        </a>
                    </td>

                </tr>

                <?php
                    }
                ?>
                
            </table>
            <button class="btn"><a href="../administrador/index.php">Ir pagina principal</a></button>
        </form>
    </div>
</body>
</html>