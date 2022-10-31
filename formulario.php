<?php

    require_once ("connection/connection.php");
    session_start();

        if((isset($_GET["MM_update"])) && ($_GET["MM_update"] == "form1"))
            {
            $contra= $_GET['cont'];

            if ($_GET['cont'] == "" || $_GET['cont'] == "")
                {
                        echo '<script>alert ("Datos vacios no  ha  ingresado la clave");</script>';
                        echo '<script>window.location="recuperar.html"</script>';
            }
            else
            {
                $doc = $_SESSION['cedula'];
                $insertSQL = "UPDATE tipo_usuarios SET pass_user= '$contra' WHERE id_user = '$doc'";
                mysqli_query($mysqli, $insertSQL);
                        echo '<script>alert ("cambio de clave Exitosa");</script>';
                        echo '<script>window.location="recuperar.html"</script>';
            }
        }
?>  
<?php
    if ($_GET["validar"])
    {
        $correo =$_GET["correo"];
        $pin =$_GET["pin"];
        $doc=$_GET["cedula"];
        $sql="SELECT * FROM tipo_usuarios WHERE email='$correo' and  pin= $pin and id_user= $doc";
        $query1=mysqli_query($mysqli,$sql);
        $fila1=mysqli_fetch_assoc($query1);

        if ($fila1)
        {
            $_SESSION ['cedula']=$fila1 ['id_user'];


?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/reset.css">
            <link rel="stylesheet" type="text/css" href="css/styles.css">
            <title>GASUNICO</title>
        </head>
        <body onload="form1.cont.focus()">
            <div class="registro1">
                    <div id="imagen">
                        <img src="imag/images.jpg" alt="fotocolumna" >
                    </div>
                    <div class="formulario">
                    <div id="logotipo">
                        <img src="imag/logo2.jpg" alt="logotipo" >
                        </div>
                                <div class="formulario1">
                                    <form method="GET" name="form1" id="form1" autocomplete="off" >
                                            <label class="entrada">RECUPERAR CONTRASEÑA</label><br><br>
                                            <label >DOCUMENTO  DE  IDENTIDAD</label>
                                            <input class="contols" type="password"  name="cont" id="cont" placeholder="Ingresa tu contraseña nueva" value="" /><br>
                                            <input class="contols" type="password"  name="cont1" id="cont1" placeholder="Ingresa nuevamente tu contraseña" value="" /><br>
                                            <input class="botons" type="submit" name="validar" value="validar"><br><br>
                                            <input type="hidden" name="MM_update" value="form1"><br><br>
                                    </form>
                                        <article id="texto">
                                            <p> <a href="recuperar.html">Volver a  la  pagina inicio </a><br><br>
                                            <p>Nuestro compromiso  es  brindarte los mejores  servicios.</p>
                                        </article>
                            </div>
                    
                        
                        
                    </div>

                
                </div>
            </body>
        </html>
 <?php
    }
    else
    {
    echo '<script>alert ("EL DOCUMENTO  NO  EXISTE EN  LA BASE DE DATOS");</script>';
    echo '<script>window.location="recuperar.html"</script>';
    }
}
?>