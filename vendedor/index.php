<?php

session_start();
include("../include/validar.php");
require_once('../connection/connection.php');
$query="SELECT * FROM tipo_usuarios, tip_user WHERE id_user = '".$_SESSION['cedu']."' AND  tipo_usuarios.id_tip_user = tip_user.id_tip_user";
$usuarios= mysqli_query($mysqli,$query) ;
$row_usuarios=mysqli_fetch_assoc($usuarios);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/vendedor.css">
    <title>vendedor</title>
</head>
<body>
        <header>
            <div id="entrada">
                <img src="../imag/logo2.jpg">
                <h2> BIENVENIDO <?php echo $row_usuarios['nom_user'];?> <?php echo $row_usuarios['tipo_user'];?></h2>
                <a href="../include/salir.php"><img src="../imag/exit.png" id="salir" ></a>
           </div>
        </header>
        <div id="contenido">
            <article class="mensaje">
                <p>Descubre hoy</p>
            </article>
                <section class="adquisicion">
                    <img src="../imag/peticiones.jpg">
                    <p><a href="./factura.php">Factura</a></p>
                </section>
                <section class="ofertas">
                    <img src="../imag/contrato.png">
                    <p><a href="#">contratos de ventas</p>
                </section>
                <section id="pagos">
                    <img src="../imag/envio.png">
                    <p><a href="#">Entregas</a></p>
                </section>
        </div>
</body>
</html>