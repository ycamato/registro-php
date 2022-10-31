<?php
    require_once("../../connection/connection.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/art_tabla.css">
    <title>Articulos</title>
</head>
<body>
    
    <div class="ver">

        <form action="buscar.php" method="GET" name=table autocomplete="off">    <br>
            <input  class = "buscar"  type = "number"  name = "buscar"   id = ""  placeholder = "Buscar">  <a  href = "#"><button  class = "boton"> Buscar </button></a><br><br>

            <table border="1" class="tabla">
                <tr>

                    <th >Id de articulo</th>
                
                    <th>Nombre de articulo</th>

                    <th>tipo de  articulo</th>

                    <th>Precio</th>

                    <th><img src="../../imag/lupa.png" alt="buscar" width="60" height="50"></th>

                    <th> <img src="../../imag/eliminar.png" alt="buscar" width="60" height="50"></th>

                    <th> <img src="../../imag/ver.png"alt="buscar" width="60" height="50"></th>
                    
                    <th> <img src="../../imag/modificar.png"alt="buscar" width="60" height="50"></th>

                </tr>
                
                <?php

                    $query = "SELECT * FROM articulo,tipo WHERE  articulo.id_tip_pro = tipo.id_tip_pro";
                    $art=mysqli_query($mysqli, $query);
                    
                    
                    while($mostrar=mysqli_fetch_assoc($art)){
                ?>
                
                <tr>

                    <td><?php echo $mostrar ['id_pro'] ?></td>

                    <td><?php echo $mostrar ['nom_pro'] ?></td>

                    <td><?php echo $mostrar ['tip_pro'] ?></td>

                    <td><?php echo $mostrar ['precio'] ?></td>

                    <td>
                        <a href="?accion=ver=<?php echo $mostrar['id_pro'] ?>"onclick="window.open('ver.php?ver=<?php echo $mostrar['id_pro'] ?>','', 'width=1000,heigth=580,toolbar=NO');void(null);">
                            ver
                        </a>
                    </td>
                    <td>
                        <a href="?accion=bor=<?php echo $mostrar['id_pro'] ?>"onclick="window.open('borrar_art.php?bor=<?php echo $mostrar['id_pro'] ?>','', 'width=1000,heigth=580,toolbar=NO');void(null);">
                           borrar
                        </a>
                    </td>
                    <td>
                        <a href="?accion=mo=<?php echo $mostrar['id_pro'] ?>"onclick="window.open('edit_art.php?mo=<?php echo $mostrar['id_pro'] ?>','', 'width=1000,heigth=580,toolbar=NO');void(null);">
                            modificar
                        </a>
                    </td>
                    <td><a href="../../articulos_registro.php">Registrar</a></td>
                </tr>
                <?php
                    }
                ?>
            </table>
            <button class="btn"><a href="../../administrador/index.php">Ir pagina principal</a></button>
        </form>
    </div>
</body>
</html>