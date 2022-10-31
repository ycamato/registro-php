<?php

  require("../connection/connection.php");
  session_start();


?>

<?php
   $total="SELECT * FROM articulo WHERE id_tip_pro >=1";
   $query=mysqli_query($mysqli, $total);
   $fila1= mysqli_fetch_assoc($query);

?>
<?php
   $tota="SELECT * FROM tipo_transa WHERE id_tip_trans <=2";
   $q=mysqli_query($mysqli, $tota);
   $f= mysqli_fetch_assoc($q);

?>
<?php
    if((isset($_GET['MM_insert'])) && ($_GET['MM_insert']=="formreg"))
    {
        $fact=        $_GET['fact'];
        $idpro=       $_GET['id_pro'];
        $cedula=      $_GET['id_user'];
        $fecha=       $_GET['fech_hora_v'];
        $pago=        $_GET['tran'];
        $cantidad=    $_GET['cant'];
        $precio=      $_GET['precio'];
        $tot=         $_GET['tot'];

        if($fact == "" || $idpro == "" || $cedula == "" || $fecha == "" || $pago == "" || $cantidad == "" || $precio == "" || $tot == "")
        {
            echo'<script> alert ("Datos vacios llene por favor");</script>';
            echo'<script> window.location="factura.php";</script>';

        }
        else{
            $fac= "INSERT INTO transaccion (fact,id_pro,id_user,fech_hora_v,id_tip_trans,cant,valor_unit,valor_total) VALUES ('$fact','$idpro','$cedula','$fecha','$pago','$cantidad','$precio','$tot')";
            mysqli_query($mysqli,$fac);
                echo'<script> alert ("registro exitoso, gracias por su tiempo");</script>';
                echo'<script> window.location="index.php";</script>';
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/factura.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
</head>
<body>
    <div class="formulario">
        <form method="GET" name="formreg" id="formreg" autocomplete="off">
            <h1>FACTURACIÓN DE  VENTA</h1><br>
            <input class="contols" type="number" name="fact" id="fact" placeholder="Ingrese  identificación de la factura " value="" /><br>
            <h2>PRODUCTOS</h2><br>
            <select name="id_pro" id="class">
                <?php
                    do{ 
                ?>
                    <option value="<?php echo($fila1['id_pro'])?>" > <?php echo($fila1['nom_pro'])?>
                <?php 
                    } while($fila1=mysqli_fetch_assoc($query));
                ?>
            </select><br>
            <input class="contols"  type="number"  name="id_user" id="id_user" placeholder="Ingresa la  cédula" value="" /><br>
            <input type="date" name="fech_hora_v" id="fech_hora_v" value="YYYY-MM-DD"><br>
            <h2>TIPO  DE VENTA</h2><br>
            <select name="tran" id="class">
                <?php
                    do{ 
                ?>
                    <option value="<?php echo($f['id_tip_trans'])?>" > <?php echo($f['tip_transa'])?>
                <?php 
                    } while($f=mysqli_fetch_assoc($q));
                ?>
            </select><br>
            <h2>PRODUCTO</h2><br>
            <input class="contols"  type="number"  name="cant" id="cant" placeholder="Cantidad de unidades" value="" /><br>
            <input class="contols"  type="number"  name="precio" id="precio" placeholder="precio unitario" value="" /><br>
            <input class="contols"  type="number"  name="tot" id="tot" placeholder="valor total" value=""/><br>
            <input class="btn" type="submit" name="validar"   value="Enviar"><br>
            <input type="hidden"  name="MM_insert" value="formreg"></input>
            <button ><a href="../vendedor/index.php">Cancelar</a></button><br>
            <script>
                 document.write('<button onclick="window.print()"> Facturacion </button>');
                generarFactura()

            </script>
        </form>
    </div>
</body>
</html>