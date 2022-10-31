<?php
    require_once("../../connection/connection.php");
?>


<?php
    $art=("SELECT * FROM articulo WHERE id_pro=".$_GET["ver"]."");
    $pro=mysqli_query($mysqli, $art);
    $ver=mysqli_fetch_assoc($pro);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ver</title>
    <link rel="stylesheet" href="../../css/artver.css">
</head>

<body>
    <div class="ver">

        <form action="" method="GET" name=table autocomplete="off">    <br>
        
            <table border="1" class="tabla">
                <tr>

                    <th >identificacion del servicio</th>
                
                    <th>Nombre del  producto</th>

                    <th>tipo</th>

                

                </tr>
                
                <tr>

                    <td><?php echo $ver ['id_pro'] ?></td>

                    <td><?php echo $ver ['nom_pro'] ?></td>

                    <td><?php echo $ver ['id_tip_pro'] ?></td>
                </tr>

            </table>
        </form>
    </div>
</body>
</html>