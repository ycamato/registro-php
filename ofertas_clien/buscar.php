<?php
    require_once ("../connection/connection.php");
    session_start()
?>
<?php
    if($_GET['buscar']== ""){
        echo"<script>alert('llene y  luego envie')</script>";
        echo'<script>window.location="./index.php"</script>';
    }
    elseif ($buscar = $_GET['buscar']){
        
        $sql=("SELECT * FROM articulo WHERE id_pro=".$_GET["buscar"]."");
        $buscar=mysqli_query($mysqli,$sql);
        $result=mysqli_fetch_assoc($buscar);
         
        if ($result){

            $pro=        $result['id_pro'];
            $nom=    $result['nom_pro'];
            $tipo=    $result['id_tip_pro'];
            $pre=     $result['precio'];
            

        }
        else{
            echo"<script>alert('Esto  no es correcto')</script>";
            echo'<script>window.location="./index.php"</script>';

        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bus.css">
    <title>Busqueda</title>
</head>
<body>
    <h1>Compra  hoy:</h1>
    <table  border="1" class="tabla">
        <tr>
                
            <th>Identificacion del producto</th>
            
            <th>Nombre del producto</th>

            <th>tipo</th>

            <th>precio</th>

        </tr>
        <tr>
            <td><input type=»text» readonly=»readonly» name="docpro" placeholder="<?php echo $pro?>"/></td>

            <td><input type=»text» readonly=»readonly» name="nom" placeholder="<?php echo $nom?>"/></td>

            <td><input type=»text» readonly=»readonly» name="tipo"  placeholder="<?php echo $tipo?>"/></td>

            <td><input type=»text» readonly=»readonly» name="precio"  placeholder="<?php echo $pre?>"/></td>

        </tr>
        
    </table>  
            <button ><a href="index.php">Regresar</a></button>
            
</body>
</html>