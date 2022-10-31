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
    <link rel="stylesheet" type="text/css" href="../css/comprador.css">
    <title>comprador</title>
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
                <p>Exclusivo  para  ti</p>
            </article>
                <section class="adquisicion">
                    <img src="../imag/adquisicion.png">
                    <p><a href="#">comprar productos</a></p>
                </section>
                <section class="ofertas">
                    <img src="../imag/ofertas.jpg">
                    <p><a href="../ofertas_clien/index.php">Ofertas</p>
                </section>
                <section id="pagos">
                    <img src="../imag/pagos.png">
                    <p><a href="#">pagos</a></p>
                </section>
        </div>
</body>
</html>